
<style>
    .cus-bg{
    /* margin-top: 100px; */
    background-color: #04093c;
    background-image: url('/images/footer-bg-1.png');
    background-repeat: no-repeat;
    background-size: cover;
    /* height: 800px; */
    bottom: 0 !important;
    }

    .footer-link a {
    font-size: 18px;
    color: #fff;
    text-decoration: none;
    margin-bottom: 6px;
}
.footer-link a i {
    color: #0648b3;
    font-size: 14px;
    margin-right: 10px;
}
.icon-custom{
    background: white;
    border-radius: 50%;
    width: 28px;
    height: 28px;
    padding: 8px;
}

main,
    .wrapper{
        display: flex;
        flex-direction: column;
        height: 100vh;
        overflow: auto;
    }
    .content-pb {
    padding-bottom: 115px;
}
    .footer-title {
    font-size: 23px;
    margin-bottom: 20px;
    font-weight: 700;
}
    .footer-link a {
    font-size: 18px;
    color: #fff;
    text-decoration: none;
    margin-bottom: 6px;
}
.footer-link a i {
    color: #0648b3;
    font-size: 14px;
    margin-right: 10px;
}
.support-content {
    background-color: #0648b3;
    border-radius: 30px;
    margin-top: -109px;
    position: relative;
}
.support-img {
    background-image: url("/images/support/support-bg.jpg");
    background-position: 0px -35px;
    background-repeat: no-repeat;
    background-size: cover;
    position: absolute;
    height: 100%;
    width: 100%;
}

.support-title {
    font-size: 30px;
    font-weight: 700;
}
.support-text__content{
    padding: 30px 0px ;
}
.support-subTitle{
    font-size: 22px
}
.support-hotline{
    font-size: 30px;
    font-weight: 800;
}
.icon-animation {
    height: 110px;
    width: 110px;
    position: absolute;
    top: 50%;
    left: -42px;
    transform: translate(0px, -50%);
}


@media (min-width: 168px) and (max-width: 768px){
        .desktop-cus{
            display: none !important;
        }
    
    }
    @media (min-width: 769px){
        .mobile-cus{
            display: none !important;
        }
      
    }
</style>

<div class="cus-bg mt-auto">
    <div class="container p-3">
        <div class="    top container"></div>
        <div class="container">
            <div class="support-content overflow-hidden">
            <div class="row g-0">
                <div class="col-sm-6">
                    <div class="support-img"></div>
                </div>
                <div class="col-sm-6">
                    <div class="icon-animation">
                        <img src="/images/support/icon-animation.gif" alt="" class="img-fluid desktop-cus">
                    </div>
                    <div class="support-text__content text-white text-center">
                        <h3 class="support-title text-uppercase text-white">Talk to an expert</h3>
                        <div class="support-subTitle">Call us to make order now</div>
                        <div class="support-hotline">971 55 910 8575</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row mt-5 mb-3">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <h2 class="text-white footer-title">My QR Shop</h2>
                <p class="text-white mt-3">Create a digital menu for your Restaurant or Bar. Engage more with your customers.
                    Their mobile is your menu now!
                </p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <h2 class="text-white footer-title">Helpful Links</h2>
                <div class="footer-link">
                   <a class="d-block" href="{{url('/blog/Terms-and-conditions')}}"><i aria-hidden="true" class="fas fa-chevron-circle-right text-white"></i>Terms and conditions</a>
                   <a class="d-block" href="{{url('/blog/Privacy-Policy')}}"><i aria-hidden="true" class="fas fa-chevron-circle-right text-white"></i>Privacy Policy</a>
                   <a class="d-block" href="{{url("/blog/FAQ's")}}"><i aria-hidden="true" class="fas fa-chevron-circle-right text-white"></i>FAQ's</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <h2 class="text-white footer-title">Pages</h2>
                <div class="footer-link">
                   <a class="d-block" href="{{route('front')}}#product"><i aria-hidden="true" class="fas fa-chevron-circle-right text-white"></i>Product</a>
                   <a class="d-block" href="{{route('front')}}#pricing"><i aria-hidden="true" class="fas fa-chevron-circle-right text-white"></i>Pricing</a>
                   <a class="d-block" href="{{route('front')}}#testimonials"><i aria-hidden="true" class="fas fa-chevron-circle-right text-white"></i>Testimonials</a>
                   <a class="d-block" href="{{route('generateqr')}}"><i aria-hidden="true" class="fas fa-chevron-circle-right text-white"></i>QRGenerator</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <h2 class="text-white footer-title text-left">Get The Latest News</h2>
                 <div class="footer-link d-flex justify-content-left">
                    <a class="d-block" href="#"><i aria-hidden="true" class="fab fa-facebook-f icon-custom"></i></a>
                    <a class="d-block" href="#"><i aria-hidden="true" class="fab fa-twitter icon-custom"></i></a>
                    <a class="d-block" href="#"><i aria-hidden="true" class="fab fa-youtube icon-custom"></i></a>
                    <a class="d-block" href="#"><i aria-hidden="true" class="fab fa-linkedin-in icon-custom"></i></a>
                    <a class="d-block" href="#"><i aria-hidden="true" class="fab fa-instagram icon-custom"></i></a>
                 </div>
                 <div>
                    <p class="text-white text-left">Subscribe to keep up with the latest industry news. My QR Shop updates, events, and more !</p>
                 </div>
                 <div class=" d-flex justify-content-left">
                    {{-- <button class="btn btn-primary">
                         Contact Us
                        <i aria-hidden="true" class="pl-1 fa fa-phone"></i>
                    </button> --}}
                 </div>
            </div>
        </div>
      
    </div>
    <hr class="bg-white">
    <div class="d-flex justify-content-between pl-5 pr-5 desktop-cus">
        <div class="">
            <img src="/images/payment_methods.png" width="350px" alt="">
        </div>
        <div class="text-white">
            <p>
                © Copyright  2023. All rights reserved My QR Shop. 
            </p>
        </div>
    </div>
    <div class=" mobile-cus">
        <div class="d-flex justify-content-center">
            <img src="/images/payment_methods.png" width="350px" alt="">
        </div>
        <div class="text-white text-center mb-0 pb-1">
            <p>
                © Copyright  2023. All rights reserved My QR Shop. 
            </p>
        </div>
    </div>
</div>