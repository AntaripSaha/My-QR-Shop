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
use App\Models\ProductPayment;

class ProductPaymentController extends Controller
{
    public function index($id)
    {
        $product_item = Product::where('id', $id)->first();
        return view('product_cart', compact('product_item'));
    }
    public function showCheckout(Request $request)
    {
        $product_item = Product::where('id', $request->id)->first();
        // Set your Stripe secret key
          Stripe::setApiKey('sk_test_51LZpTqSFrfnDBpn6AAKuqwnYh60DqCzlPa27ta84QkHoh67C2k2fbqTR0z7fo6zPl04QAS1b2j2ZRUQ3gxCes1B9001tCMISvy');
        // Stripe::setApiKey(env('STRIPE_SECRET'));

            // Store the product ID in the session
        session()->put('product_id', $request->id);

        // Create a new Stripe Checkout session
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => 100 * $product_item->discounted_price, // Amount in cents
                        'product_data' => [
                            'name' => $product_item->name,
                            'description' => $product_item->description,
                             // Add the product image URL here
                        ],
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('checkout.success'),
            'cancel_url' => route('checkout.cancel'),
        ]);

        // Redirect the user to the Stripe Checkout page
        return redirect($session->url);
    }

    public function checkoutSuccess(Request $request)
    {
        $product_payment = new ProductPayment;
        $product_payment->product_id = $request->session()->get('product_id');
        $product_payment->user_id = auth()->user()->id;
        $product_payment->status = 1;
        $product_payment->save();
 
    
        // Redirect or display a success message
        return redirect()->route('front')->with('Success','Purchase Completed');
    }

    

    public function checkoutCancel()
    {
        // Logic for cancelled payment
        // This is the route defined as the cancel URL in the Stripe session
        return view('checkout.cancel');
    }
}