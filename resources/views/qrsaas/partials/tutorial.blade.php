<style>
    @media (min-width: 168px) and (max-width: 768px){
        .desktop-cus-two{
            display: none !important;
        }
    
    }
    @media (min-width: 769px){
        .mobile-cus-two{
            display: none !important;
        }
      
    }
</style>
<section class="section ">
    <div class="container">
        <div class="row justify-content-center  ">
            <div class="col-12 col-md-8 text-center">
            <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i> <h2 class="h1 font-weight-bolder mb-2 ckedit" key="tutorials" id="tutorials">How Does It Works?</h2>
            <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i> <p class="lead ckedit" key="product_description" id="product_description">Boost your sales by more than 40% with customized QR codes.</p>
            </div>
        </div>
        <div class="row p-2">
            <!-- Data Call From Frontend Controller -->
            <img class="mobile-cus-two" src="./images/tutorial.jpg" alt="">
            <img class="desktop-cus-two" src="./images/tutorial_desktop.jpg" alt="">
            {{-- <img src="./images/tutorials_phone.svg" alt=""> --}}
       
        </div>
    </div>
</section>
<script type="text/javascript">
    $('.carousel').carousel()
</script>
