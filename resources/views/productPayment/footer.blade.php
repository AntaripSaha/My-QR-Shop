<style>
    @media (min-width: 168px) and (max-width: 768px){
        .desktop{
            display: none !important;
        }
    }
    .cus-bg{
    /* margin-top: 100px; */
    background-color: #282932;
    background-image: url('/images/footer-bg-1.png');
    background-repeat: no-repeat;
    background-size: cover;
    /* height: 800px; */
    bottom: 0 !important;
    }
    h1{
    color: white !important;
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

 </style>



<footer class="footer cus-bg mt-auto">
    <div class="pattern pattern-soft top container"></div>
    <div class="container">
        <div class="support-content overflow-hidden">
        <div class="row g-0">
            <div class="col-sm-6">
                <div class="support-img"></div>
            </div>
            <div class="col-sm-6">
                <div class="icon-animation">
                    <img src="/images/support/icon-animation.gif" alt="" class="img-fluid desktop">
                </div>
                <div class="support-text__content text-white text-center">
                    <h3 class="support-title text-uppercase text-white">Talk to an expert</h3>
                    <div class="support-subTitle">Call us to make order now</div>
                    <div class="support-hotline">90-500-28-999</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container mt-5 mb-5">
       <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6">
             <h2 class="text-white footer-title">My QR Shop</h2>
             <p class="text-white mt-3">Create a digital menu for your Restaurant or Bar. Engage more with your customers.
                Their mobile is your menu now!
             </p>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
             <h2 class="text-white footer-title">Helpful Links</h2>
             <div class="footer-link">
                <a class="d-block" href="#"><i aria-hidden="true" class="fas fa-chevron-circle-right"></i>Terms and conditions</a>
                <a class="d-block" href="#"><i aria-hidden="true" class="fas fa-chevron-circle-right"></i>Privacy Policy</a>
                <a class="d-block" href="#"><i aria-hidden="true" class="fas fa-chevron-circle-right"></i>FAQ's</a>
             </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
             <h2 class="text-white footer-title">Pages</h2>
             <div class="footer-link">
                <a class="d-block" href="#"><i aria-hidden="true" class="fas fa-chevron-circle-right"></i>Product</a>
                <a class="d-block" href="#"><i aria-hidden="true" class="fas fa-chevron-circle-right"></i>Pricing</a>
                <a class="d-block" href="#"><i aria-hidden="true" class="fas fa-chevron-circle-right"></i>Testimonials</a>
                <a class="d-block" href="#"><i aria-hidden="true" class="fas fa-chevron-circle-right"></i>QRGenerator</a>
             </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
             <h2 class="text-white footer-title">My Account</h2>
             <div class="footer-link">
                <a class="d-block" href="#"><i aria-hidden="true" class="fas fa-chevron-circle-right"></i>Dashboard</a>
             </div>
          </div>
       </div>
    </div>
    <hr class="bg-white">
    <div class="text-center">
        {{-- <p class="text-white">hello00000000</p> --}}
    </div>
 </footer>
