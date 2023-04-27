<section id="product" class="section ">
    <div class="container">
        <div class="row justify-content-center  ">
            <div class="col-12 col-md-8 text-center">
            <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i> <h2 class="h1 font-weight-bolder mb-2 ckedit" key="product_title" id="product_title">Our Product</h2>
            <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i> <p class="lead ckedit" key="product_description" id="product_description">{{ __('qrlanding.product_description')}}</p>
            <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i> <p class="lead ckedit" key="product_subtitle" id="product_subtitle"><strong>{{ __('qrlanding.product_subtitle')}}.</strong></p>
            </div>
        </div>
        <div class="row">
        @foreach ($products as $key=>$product)
            <div class="col-lg-3 col-md-4 col-sm-6 p-2 d-flex justify-content-center">
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
                        <h5 class="d-flex justify-content-center">{{$product->name}}</h5>
                        <p class="card-text text-center">{{Str::limit($product->description, 36)}}</p>
                        <div class="d-flex justify-content-center">
                            <h6 class="mr-2 text-muted" style="text-decoration: Line-Through">${{$product->current_price}}</h6>
                            <h6 class="text-primary">${{$product->discounted_price}}</h6>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm d-flex justify-content-center text-center mt-2">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach 
        </div>
    </div>
</section>
<script type="text/javascript">
    $('.carousel').carousel()
</script>