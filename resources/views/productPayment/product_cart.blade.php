@extends('layouts.front', ['class' => ''])
@section('content')
<section class="section-profile-cover section-shaped my--1 d-none d-md-none d-lg-block d-lx-block">
   <!-- Circles background -->
   <img class="bg-image" src="/images/product_bg.jpg" style="width: 100%;">
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
         
         <div class="card card-profile shadow mt--150">
            <div class="px-4">
               <div class="mt-5 d-flex justify-content-between ">
                  <h3>{{ __('Items') }}<span class="font-weight-light"></span></h3>
                  <div class="d-flex justify-content-center">
                     <h6 class="mr-2 text-muted font-weight-bolder display-4" style="text-decoration: Line-Through">${{$product_item->current_price}}</h6>
                     <h6 class="text-primary font-weight-bolder display-4">${{$product_item->discounted_price}}</h6>
                 </div>
               </div>
               <!-- List of items -->
               <div  id="" class="border-top">
                  <br />
                  <div  class="items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
                     <div class="clearfix" >
                        <div class="pull-left pt-3 pr-4">
                           <figure>
                              <img src="{{ $product_item->image }}" class="rounded" width="400px" alt="">
                           </figure>
                        </div>
                        <div class="p-2 text-left">
                           <h6 class="product-item_title font-weight-bolder text-uppercase">  {{ $product_item->name }} </h6>
                           <p class="product-item_quantity text-capitalize">{{ $product_item->description }} </p>
                        </div>
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
 
</section>
@endsection
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>