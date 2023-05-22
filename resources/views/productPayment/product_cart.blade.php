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
         <div class="col-6">
            <!-- List of items -->
            <div class="card card-profile shadow mt--150 p-3">
               <div class="px-4">
                  <div class="mt-5 d-flex justify-content-between">
                     <h3>{{ __('Items') }}<span class="font-weight-light"></span></h3>
                     <div class="d-flex justify-content-center">
                        <h6 class="mr-2 text-muted font-weight-bolder display-4" style="text-decoration: line-through">${{ $product_item->current_price }}</h6>
                        <h6 class="text-primary font-weight-bolder display-4">${{ $product_item->discounted_price }}</h6>
                     </div>
                  </div>
                  <!-- List of items -->
                  <div id="" class="border-top">
                     <br />
                     <div class="items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
                        <div class="clearfix">
                           <div class="pull-left pt-3 pr-4">
                              <figure>
                                 <img src="{{ $product_item->image }}" class="rounded" width="150px" alt="">
                              </figure>
                           </div>
                           <div class="p-2 text-left">
                              <h6 class="product-item_title font-weight-bolder text-uppercase">{{ $product_item->name }}</h6>
                              <span class="d-flex justify-content-around" style="max-width: 20%;">
                                 <p class="quantity">1</p>x
                                 <p class="price">{{ $product_item->discounted_price }}</p>
                              </span>
                           </div>
                           <div class="row">
                              <button type="button" onclick="cartMinus()" class="btn btn-outline-primary btn-icon btn-sm page-link btn-cart-radius">
                                 <span class="btn-inner--icon btn-cart-icon"><i class="fa fa-minus"></i></span>
                              </button>
                              <button type="button" onclick="cartPlus()" class="btn btn-outline-primary btn-icon btn-sm page-link btn-cart-radius">
                                 <span class="btn-inner--icon btn-cart-icon"><i class="fa fa-plus"></i></span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br />
            <!-- List of items -->
         </div>
         {{-- Right part --}}
         <div class="col-6">
            <div class="card card-profile shadow mt--150 p-3">
               <div class="px-4">
                  <div class="mt-5 d-flex justify-content-between">
                     <h3>Total<span class="font-weight-light"></span></h3>
                     <div class="d-flex justify-content-center">
                        <h6 id="totalPrice" class="text-primary font-weight-bolder display-4">${{ $product_item->discounted_price }}</h6>
                     </div>
                  </div>
                  <!-- List of items -->
                  <div class="border-top">
                     <br />
                     <div class="items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix">
                        <div class="clearfix">
                           <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="id" value="{{ $product_item->id }}">
                              <input type="hidden" name="quantity" value="" id="hiddenQuantity">
                              <input type="hidden" name="price" value="{{ $product_item->discounted_price }}" id="hiddenPrice">
                              <button type="submit" class="btn btn-primary">Checkout</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<script type="text/javascript" src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">
   function cartPlus() {
      var quantity = document.querySelector('.quantity');
      var mainPrice = document.querySelector('.price');
      var price = parseFloat(mainPrice.innerHTML);
      console.log('Original Price', price);
      var value = parseInt(quantity.innerHTML);
      var updatedValue = value + 1;
      var updatedPrice = price * updatedValue;
      quantity.innerHTML = updatedValue;
      document.getElementById('totalPrice').innerText = '$' + updatedPrice.toFixed(2);
      console.log("Quantity Added: ", updatedValue);

      // Update hidden inputs
      document.getElementById('hiddenQuantity').value = updatedValue;
      document.getElementById('hiddenPrice').value = updatedPrice.toFixed(2);
   }

   function cartMinus() {
      var quantity = document.querySelector('.quantity');
      var mainPrice = document.getElementById('totalPrice');
      var price = parseFloat(mainPrice.innerText.replace('$', ''));
      console.log('Price after minus', mainPrice);

      var value = parseInt(quantity.innerHTML);
      if (value > 1) {
         var updatedValue = value - 1;
         var updatedPrice = price / value * updatedValue;
         quantity.innerHTML = updatedValue;
         document.getElementById('totalPrice').innerText = '$' + updatedPrice.toFixed(2);
         console.log("Quantity Removed: ", updatedValue);

         // Update hidden inputs
         document.getElementById('hiddenQuantity').value = updatedValue;
         document.getElementById('hiddenPrice').value = updatedPrice.toFixed(2);
      }
   }

</script>
@endsection
