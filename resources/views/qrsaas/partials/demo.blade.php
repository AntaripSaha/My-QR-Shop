<section id="demo" class="section section-lg pb-5 bg-soft">
    <div class="container overflow-hidden">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i>
                <h2 class="mb-4 ckedit" key="demo_title" id="demo_title">{{ __('qrlanding.demo_title') }}</h2>
                <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i>
                <p class="lead mb-5 ckedit" key="demo_subtitle" id="demo_subtitle">{{ __('qrlanding.demo_subtitle') . " " }}<span class="font-weight-bolder">{{ __('qrlanding.qr_code') }}</span> {{ __('qrlanding.below') }}!</p>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img style="width:300px" class="rounded" src="{{ asset('impactfront') }}/img/qrdemo.png" />
                        </div>
                        <div class="swiper-slide">
                            <img style="width:300px" class="rounded" src="{{ asset('impactfront') }}/img/qrdemo.png" />
                        </div>
                        <div class="swiper-slide">
                            <img style="width:300px" class="rounded" src="{{ asset('impactfront') }}/img/qrdemo.png" />
                        </div>
                        <div class="swiper-slide">
                            <img style="width:300px" class="rounded" src="{{ asset('impactfront') }}/img/qrdemo.png" />
                        </div>
                        <div class="swiper-slide">
                            <img style="width:300px" class="rounded" src="{{ asset('impactfront') }}/img/qrdemo.png" />
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                      <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="col-12 text-center pb-5 pt-4">
                    <!-- Button Modal -->
                    <a href="{{ route('newrestaurant.register') }}" class="btn btn-secondary animate-up-2"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span>{{ __('qrlanding.demo_button') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script type="text/javascript">
    // Initialize Swiper
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
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
            slidesPerView: 2,
            spaceBetween: 10
         },
         // when window width is >= 480px
         480: {
            slidesPerView: 3,
            spaceBetween: 10
         },
      },
    });
</script>
