<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\CardException;
use Stripe\StripeClient;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\ProductPayment;
use Illuminate\Support\Str;


class ProductPaymentController extends Controller
{
    public function index($id)
    {
        if(isset(auth()->user()->id)){
            $product_item = Product::with('gallery')->where('id', $id)->first();
            return view('productPayment.product_cart', compact('product_item'));
        }else{
            return redirect()->route('login');
        }
    }
    public function showCheckout(Request $request)
    {
        
        $delivery_address = $request->address.'; '.$request->city.'; '.$request->state.'; '.$request->zipcode;
        $product_item = Product::where('id', $request->id)->first();
        Stripe::setApiKey(env('STRIPE_SECRET'));
            // Store the product ID in the session
        session()->put('product_id', $request->id);
        session()->put('product_quantity', $request->quantity);
        session()->put('delivery_address', $delivery_address);
        // Create a new Stripe Checkout session
         $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => 100 * $request->price, // Amount in cents
                        'product_data' => [
                            'name' => $product_item->name,
                            'description' => Str::limit($product_item->description, 250),
                             // Add the product image URL here
                             'images' => [url($product_item->image)],
                        ],
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('checkout.success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('front'),
        ]);
        // Redirect the user to the Stripe Checkout page
        return redirect($session->url);
    }

    public function checkoutSuccess(Request $request)
    {
        
        $product_quantity =  $request->session()->get('product_quantity');
        if($product_quantity){
            $product_quantity =  $request->session()->get('product_quantity');
        }else{
            $product_quantity = 1;
        }
        $paymentIntentId = $request->input('session_id');
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $paymentIntent = Session::retrieve($paymentIntentId);
        $product_payment = new ProductPayment;
        $product_payment->product_id = $request->session()->get('product_id');
        $product_payment->product_quantity = $product_quantity;
        $product_payment->delivery_address = $request->session()->get('delivery_address');
        $product_payment->total_paid = $paymentIntent->amount_total / 100;
        $product_payment->user_id = auth()->user()->id;
        $product_payment->status = 1;
        $product_payment->stripe_id = $paymentIntent->payment_intent;
        $product_payment->save();
        // Redirect or display a success message
        return view('productPayment.success');
    }
}
