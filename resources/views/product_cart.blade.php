@extends('layouts.front', ['class' => ''])
@section('content')
<section class="section-profile-cover section-shaped my--1 d-none d-md-none d-lg-block d-lx-block">
   <!-- Circles background -->
   <img class="bg-image " src="{{ config('global.restorant_details_cover_image') }}" style="width: 100%;">
   <!-- SVG separator -->
   <div class="separator separator-bottom separator-skew">
   </div>
</section>
<section class="section bg-secondary">
   <div class="container">
    <div class="row">
      <!-- Left part -->
      <div class="col-12">
         <!-- List of items -->
         
         <div class="card card-profile shadow mt--300">
            <div class="px-4">
               <div class="mt-5">
                  <h3>{{ __('Items') }}<span class="font-weight-light"></span></h3>
               </div>
               <!-- List of items -->
               <div  id="" class="border-top">
                  <br />
                  <div  class="items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
                     <div class="info-block block-info clearfix" >
                        <div class="square-box pull-left">
                           <figure>
                              <img src="{{ $product_item->image }}" class=" " width="100" height="100" alt="">
                           </figure>
                        </div>
                        <h6 class="product-item_title">  {{ $product_item->name }} </h6>
                        <p class="product-item_quantity">{{ $product_item->discounted_price }} </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br />
         <!-- List of items -->
      </div>
      <!-- Right  Part -->
   </div>
      <form action="{{route('checkout')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $product_item->id }}">
        <button type="submit" class="btn btn-primary">Checkout</button>
      </form>
 
 
       

   </div>
   @include('clients.modals')
</section>
@endsection
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>