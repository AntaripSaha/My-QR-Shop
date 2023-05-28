@extends('productPayment.lay', ['class' => ''])
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

@section('content')
{{-- <section class="section-profile-cover section-shaped my--1 d-none d-md-none d-lg-block d-lx-block">
   <!-- Circles background -->
   <img class="bg-image" src="/images/product_bg.jpg" style="width: 100%;">
   <!-- SVG separator -->
   <div class="separator separator-bottom separator-skew"></div>
</section> --}}
<section class="section bg-white container mt-5 content-pb">
   <div class="row pt-5">
      <div class="col-md-6 col-sm-12 overflow-hidden">
         <div class="main-image">
            <figure>
               <img id="mainImage" src="{{ $product_item->image }}" class="rounded img-cus-product-main" height="1200px" width="auto" alt="">
            </figure>
         </div>
         <div class="gallery-slider pb-5">
            <div class="swiper-container" >
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <img src="{{ $product_item->image}}" class="rounded gallery-image img-cus-gallery mr-2" alt="">
                  </div>
                  @if ($product_item->gallery)
                  @foreach ($product_item->gallery as $galleryImage)
                  <div class="swiper-slide">
                     <img src="{{ $galleryImage->image }}" class="rounded gallery-image img-cus-gallery" alt="">
                  </div>
                  @endforeach
                  @endif
               </div>
            </div>
         </div>
      </div>
       <div class="col-md-6 col-sm-12">
         <div class="p-2 text-left mt--3">
            <h2 class="product-item_title font-weight-bolder text-uppercase mt--1">{{ $product_item->name }}</h2>
            <div class="d-flex justify-content-left">
               <h2 class="product-item_title font-weight-bolder text-uppercase">Total: <span class="font-weight-light"></span></h2>
               <h2 id="totalPrice" class="ml-3 text-primary font-weight-bolder">${{ $product_item->discounted_price }}</h2>
            </div>
            <h6 class="display-5 description-cus mb-3">
               <p id="descriptionShort" class="short-description">{{ substr($product_item->description, 0, 700) }}...</p>
               <p id="descriptionFull" class="full-description" style="display: none;">{{ $product_item->description }}</p>
               <button id="readMoreBtn" class="btn btn-md text-primary">Read More</button>
               <button id="showLessBtn" class="btn btn-md text-primary" style="display: none;">Show Less</button>
            </h6>
            <div class="border-top row">
               <div class="col-12">
                  <div class="pt-3 text-left">
                     <h5 class="product-item_title font-weight-bolder text-uppercase">Select Quantity As per Need</h5>
                     <span class="d-flex justify-content-around display-4" style="max-width: 50%;">
                        <p class="price display-4 d-none">${{ $product_item->discounted_price }}</p>
                     </span>
                     <div class="row pl-3">
                        <button type="button" onclick="cartMinus()" class="btn-outline-primary btn-icon btn-sm page-link">
                        <span class="btn-inner--icon btn-cart-icon"><i class="fa fa-minus"></i></span>
                        </button>
                        <p class="m-3 quantity cus-quantity">1</p>
                        <button type="button" onclick="cartPlus()" class="btn btn-outline-primary btn-icon btn-sm page-link ">
                        <span class="btn-inner--icon btn-cart-icon"><i class="fa fa-plus"></i></span>
                        </button>
                     </div>
                     <div class="clearfix pt-3">
                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#checkoutModal">Get The Product</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Add the necessary modal HTML markup -->
   <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="checkoutModalLabel">Enter Your Delivery Address</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                     <label for="address">Address</label>
                     <input type="text" class="form-control" id="address" name="address" required>
                  </div>
                  <div class="form-group">
                     <label for="city">City</label>
                     <input type="text" class="form-control" id="city" name="city" required>
                  </div>
                  <div class="form-group">
                     <label for="state">State / Province / Division</label>
                     <input type="text" class="form-control" id="state" name="state" required>
                  </div>
                  <div class="form-group">
                     <label for="zipcode">Zip Code</label>
                     <input type="text" class="form-control" id="zipcode" name="zipcode" required>
                  </div>
                  <div class="form-group">
                     <label for="country">Country</label>
                     <input type="text" class="form-control" id="country" name="country" required>
                  </div>
                  <!-- Add more form fields for other details if needed -->
                  <input type="hidden" name="id" value="{{ $product_item->id }}">
                  <input type="hidden" name="quantity" value="" id="hiddenQuantity">
                  <input type="hidden" name="price" value="{{ $product_item->discounted_price }}" id="hiddenPrice">
                  <button type="submit" class="btn btn-primary">Proceed To Checkout</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>

<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
 


<script type="text/javascript">
   function cartPlus() {
      var quantity = document.querySelector('.quantity');
      var mainPrice = document.querySelector('.price').innerText.replace('$', '');
      var price = parseFloat(mainPrice);
      var value = parseInt(quantity.innerHTML);
      var updatedValue = value + 1;
      var updatedPrice = price * updatedValue;
      quantity.innerHTML = updatedValue;
      document.getElementById('totalPrice').innerText = '$' + updatedPrice.toFixed(2);
      console.log("Quantity Added:", updatedValue);

      // Update hidden inputs
      document.getElementById('hiddenQuantity').value = updatedValue;
      document.getElementById('hiddenPrice').value = updatedPrice.toFixed(2);
   }

   function cartMinus() {
      var quantity = document.querySelector('.quantity');
      var mainPrice = document.getElementById('totalPrice').innerText.replace('$', '');
      var price = parseFloat(mainPrice);
      console.log('Price after minus:', mainPrice);

      var value = parseInt(quantity.innerHTML);
      if (value > 1) {
         var updatedValue = value - 1;
         var updatedPrice = price / value * updatedValue;
         quantity.innerHTML = updatedValue;
         document.getElementById('totalPrice').innerText = '$' + updatedPrice.toFixed(2);
         console.log("Quantity Removed:", updatedValue);

         // Update hidden inputs
         document.getElementById('hiddenQuantity').value = updatedValue;
         document.getElementById('hiddenPrice').value = updatedPrice.toFixed(2);
      }
   }

   // Initialize Swiper
   var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      speed: 500, // Transition speed in milliseconds
      transitionDuration: 1000, // Duration of the transition effect
      spaceBetween: 10,
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
      },
      pagination: {
         el: '.swiper-pagination',
         clickable: true,
      },
      breakpoints: {
         // when window width is >= 320px
         320: {
            slidesPerView: 3,
            spaceBetween: 10
         },
         // when window width is >= 480px
         480: {
            slidesPerView: 4,
            spaceBetween: 10
         },
      },
   });

   // Gallery image click event handler
   document.addEventListener('DOMContentLoaded', function() {
      const galleryImages = document.querySelectorAll('.gallery-image');
      const mainImage = document.getElementById('mainImage');

      galleryImages.forEach(function(image) {
         image.addEventListener('click', function() {
            swiper.slideTo(Array.from(galleryImages).indexOf(image), 900, false); // Slide to the clicked image

            mainImage.src = image.src;
         });
      });
   });

   // Read More button click event handler
   document.addEventListener('DOMContentLoaded', function() {
      const readMoreBtn = document.getElementById('readMoreBtn');
      const showLessBtn = document.getElementById('showLessBtn');
      const descriptionShort = document.getElementById('descriptionShort');
      const descriptionFull = document.getElementById('descriptionFull');

      readMoreBtn.addEventListener('click', function() {
         descriptionShort.style.display = 'none';
         descriptionFull.style.display = 'block';

         readMoreBtn.style.display = 'none';
         showLessBtn.style.display = 'inline';
      });

      showLessBtn.addEventListener('click', function() {
         descriptionShort.style.display = 'block';
         descriptionFull.style.display = 'none';

         readMoreBtn.style.display = 'inline';
         showLessBtn.style.display = 'none';
      });
   });

  // Add the blur and dim effect on modal show
  document.getElementById('checkoutModal').addEventListener('show.bs.modal', function () {
      document.body.classList.add('blur-background');
      document.querySelector('.container').classList.add('dim-background');
   });

   // Remove the blur and dim effect on modal hide
   document.getElementById('checkoutModal').addEventListener('hidden.bs.modal', function () {
      document.body.classList.remove('blur-background');
      document.querySelector('.container').classList.remove('dim-background');
   });
 
</script>

<style>
   .description-cus {
      color: #999;
      font-weight: 500;
      font-style: normal;
   }

   .cus-quantity {
      font-size: 15px;
      font-weight: 700;
   }

   .img-cus-gallery {
      height: 93px !important;
      width: 150px !important;
      object-fit: cover;
   }
   .img-cus-product-main {
      width: 620px;
      height: 480px;
      object-fit: cover;
   }

</style>
@endsection
