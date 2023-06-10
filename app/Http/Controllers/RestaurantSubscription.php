<?php

namespace App\Http\Controllers;

use App\Models\PlanSubscription;
use App\Plans;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Illuminate\Support\Str;

class RestaurantSubscription extends Controller
{
    public function index($id){
        
       $plan = Plans::where('id', $id)->first();
  
       Stripe::setApiKey('sk_test_51LZpTqSFrfnDBpn6AAKuqwnYh60DqCzlPa27ta84QkHoh67C2k2fbqTR0z7fo6zPl04QAS1b2j2ZRUQ3gxCes1B9001tCMISvy');
    //    Stripe::setApiKey(env('STRIPE_SECRET'));
        // Store the plan ID in the session
          session()->put('plan_id', $plan->id);
         // Create a new Stripe Checkout session
            $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => 100 * $plan->price, // Amount in cents
                        'product_data' => [
                            'name' => $plan->name,
                            'description' => Str::limit($plan->description, 250),
                                // Add the product image URL here
                        ],
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('restaurant.success').'?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('front'),
        ]);
        // Redirect the user to the Stripe Checkout page
        return redirect($session->url);

    }

    public function subscriptionCheckoutSuccess(Request $request)
    {
        $paymentIntentId = $request->input('session_id');
        // Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe::setApiKey('sk_test_51LZpTqSFrfnDBpn6AAKuqwnYh60DqCzlPa27ta84QkHoh67C2k2fbqTR0z7fo6zPl04QAS1b2j2ZRUQ3gxCes1B9001tCMISvy');
        $paymentIntent = Session::retrieve($paymentIntentId);
        $subscription_payment = new PlanSubscription();
        $subscription_payment->plan_id = $request->session()->get('plan_id');
        $subscription_payment->amount = $paymentIntent->amount_total / 100;
        $subscription_payment->user_id = auth()->user()->id;
        $subscription_payment->status = 0;
        $subscription_payment->stripe_id = $paymentIntent->payment_intent;
        $subscription_payment->save();
        // Redirect or display a success message
        return view('productPayment.success');
    }
}
