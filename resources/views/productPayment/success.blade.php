@extends('layouts.empty', ['title' => ''])
 
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow border-0 mt-8">
            <div class="card-body text-center">
                <div class="justify-content-center text-center">
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_y2hxPc.json"  background="transparent"  speed="1"  style=" height: 200px;" autoplay></lottie-player>
                </div>
                <h2 class="display-2">{{ __("Your Order Has Been Placed!") }}</h2>
                <h1 class="mb-4">
                    <span class="badge badge-primary">{{ __('Confirmed') }}</span>
                </h1>
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <h5 class="mt-0 mb-5 heading-small text-muted">
                            {{ __("Your order is created. You will be notified for further information.") }}
                        </h5>
                            <div class="font-weight-300 mb-5">
                                {{ __("Thanks for your purchase") }}, 
                            </div>

                            <a href="{{route('front')}}">
                                <span class="badge badge-success btn btn-success btn-lg mb-3">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    Go Back
                                </span>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
