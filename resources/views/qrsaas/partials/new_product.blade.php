<style>
    @media (min-width: 168px) and (max-width: 768px){
        .prod-desktop{
            display: none !important;
        }
    
    }
    @media (min-width: 769px){
        .prod-mobile{
            display: none !important;
        }
      
    }
</style>
<section id="product" class="section">
    <div class="container">
        <div class="row justify-content-center  ">
            <div class="col-12 col-md-8 text-center">
            <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i> <h2 class="h1 font-weight-bolder mb-2 ckedit" key="product_title" id="product_title">Our Product</h2>
            <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i> <p class="lead ckedit" key="product_description" id="product_description">Shop and Customize Your QR Code & NFC Wifi Epoxy Stickers</p>
            {{-- <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i> <p class="lead ckedit" key="product_subtitle" id="product_subtitle"><strong>{{ __('qrlanding.product_subtitle')}}.</strong></p> --}}
            </div>
        </div>
        <div class="row prod-desktop">
            <!-- Data Call From Frontend Controller -->
            @foreach ($products as $key=>$product) 
                <div class="col-lg-3 col-sm-6 p-2 d-flex justify-content-center">
                    <a href="{{route('cart.checkout.product', $product->id)}}">
                    
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                            <div class="card-body" style="border: 1px solid #ececf3; border-bottom-right-radius: 8px; border-bottom-left-radius: 8px;">
                                <div class="d-flex justify-content-center mb-2">
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-muted"><i class="star fas fa-star"></i></span>
                                </div>
                                <h5 class="d-flex justify-content-center">{{Str::limit($product->name, 15)}}</h5>
                                <p class="card-text text-center">{{Str::limit($product->description, 36)}}</p>
                                <div class="d-flex justify-content-center">
                                    <h6 class="mr-2 text-muted" style="text-decoration: Line-Through">${{$product->current_price}}</h6>
                                    <h6 class="text-primary">${{$product->discounted_price}}</h6>
                                </div>
                                <a href="{{route('cart.checkout.product', $product->id)}}" class="btn btn-primary btn-sm d-flex justify-content-center text-center mt-2">
                                    Buy Now
                                </a>
                                
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach 
        </div>
        <div class="row prod-mobile">
            <!-- Data Call From Frontend Controller -->
            @foreach ($products as $key=>$product) 
                <div class="col-6 p-1 d-flex justify-content-center">
                    <a href="{{route('cart.checkout.product', $product->id)}}">
                    
                        <div class="card" style="width: 15rem;">
                            <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                            <div class="card-body" style="border: 1px solid #ececf3; border-bottom-right-radius: 8px; border-bottom-left-radius: 8px;">
                                <div class="d-flex justify-content-center mb-2">
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-muted"><i class="star fas fa-star"></i></span>
                                </div>
                                <h6 class="d-flex justify-content-center">{{Str::limit($product->name, 10)}}</h6>
                                <p class="card-text text-center">{{Str::limit($product->description, 30)}}</p>
                                <div class="d-flex justify-content-center">
                                    <h6 class="mr-2 text-muted" style="text-decoration: Line-Through">${{$product->current_price}}</h6>
                                    <h6 class="text-primary">${{$product->discounted_price}}</h6>
                                </div>
                                <a href="{{route('cart.checkout.product', $product->id)}}" class="btn btn-primary btn-sm d-flex justify-content-center text-center mt-2">
                                    Buy Now
                                </a>
                                
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach 
        </div>
    </div>
</section>
<script type="text/javascript">
    $('.carousel').carousel()
</script>