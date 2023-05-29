<!doctype html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
      <title>Generate QR</title>
      <meta name="description" content="Online QR Code generator">
      <meta name="keywords" content="qrcode, php, script">
      <link rel="shortcut icon" href="favicon.ico">
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <script src="js/jquery-3.5.1.min.js"></script>
      <link href="js/spectrum/spectrum.min.css" rel="stylesheet">
      <link href="js/ol/ol.css" rel="stylesheet">
      <link href="js/tempusdominus/css/tempus-dominus.min.css" rel="stylesheet">
      <link href="qrstyle.css?v=5.3.4" rel="stylesheet">
      {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      --}}

      <link type="text/css" href="./impactfront/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

      <link href="./qr_gen_css/timeline.css" rel="stylesheet">
      <link href="./qr_gen_css/qr-service.css" rel="stylesheet">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <style type="text/css">:root {--bs-link-color: #1bc184;--bs-link-hover-color:#13885d;--bs-primary-color: #1bc184;}.nav-pills, .nav-link {--bs-nav-pills-link-active-bg: #1bc184;}.nav, .navbar-nav {--bs-nav-link-hover-color: #13885d;}.btn-primary {--bs-btn-bg: #1bc184;--bs-btn-border-color: #1bc184;--bs-btn-disabled-bg: #1bc184;--bs-btn-disabled-border-color: #1bc184;}.btn-primary {--bs-btn-hover-bg: #13885d;--bs-btn-hover-border-color: #13885d;--bs-btn-active-bg: #13885d;--bs-btn-active-border-color: #13885d;}.btn-outline-primary {--bs-btn-color: #1bc184;--bs-btn-border-color: #1bc184;--bs-btn-disabled-bg: #1bc184;--bs-btn-disabled-border-color: #1bc184;}.btn-outline-primary {--bs-btn-hover-bg: #1bc184;--bs-btn-hover-border-color: #1bc184;--bs-btn-active-bg: #13885d;--bs-btn-active-border-color: #1bc184;}.dropdown-menu {--bs-dropdown-link-active-bg: #1bc184;}.bg-primary, .nav-pills .nav-link.active, .nav-pills .show > .nav-link, label.custom-file-label:after{color:#F6F6F6;background-color:#1bc184!important;}</style>
      <style>
         *
         {
         scroll-margin-top: 90px;
         }
         .card-header:not(.collapsed) .rotate-icon {
         transform: rotate(180deg);
         }
         .css-card
         {
         display: flex;
         gap: 10px;
         overflow: auto;
         border-radius: 7px;
         }
         .css-card .css-card-body
         {
         padding: 20px;
         min-width: 300px;
         }
         .css-card .css-card-body h1
         {
         flex-wrap: nowrap;
         }
         @media (min-width: 268px) and (max-width: 768px) {
         .mobile{
         display: flex;
         }
         .desktop{
         display: none !important;
         }
         h1{
         font-size: 30px;
         font-weight: 700;
         }
         h2{
         font-size: 20px;
         font-weight: 600;
         }
         .cus-nav{
         background-color: #0648b3 !important;
         padding-top: 25px;
         padding-bottom: 25px;
         }
         .logo-img{
         height: 25px !important;
         width: auto;
         }
         }
         @media (min-width: 769px) {
         h1{
         font-size: 45px;
         font-weight: 700;
         }
         h2{
         font-size: 27px;
         font-weight: 600;
         }
         .mobile{
         display: none;
         }
         .desktop{
         display: flex;
         }
         .cus-nav{
         background-color: #0648b3 !important;
         padding-top: 24px;
         padding-bottom: 24px;
         }
         .logo-img{
         height: 35px !important;
         width: auto;
         }
         }
         .bg-grad {
         background-image: linear-gradient(to bottom, #1d59f9, #0e1116);
         }
         .bg-black {
         background: #0e1116;
         }
         .cus-nav-menu{
         color: #cfdcf0 !important;
         font-weight: 500;
         font-size: 17px;
         padding-right: 16px !important;
         }
         .cus-nav-menu:hover{
         color: #ffffff !important;
         }
         .dashboard-button{
         padding-left: 35px;
         padding-right: 35px;
         font-size: 18px;
         font-weight: 600;
         color: #0648b3;
         }
      </style>
   </head>
   <body class="qrcdr">
      <nav class="navbar cus-nav navbar-expand-sm navbar-dark bg-dark fixed-top">
         <div class="container">
            <a href="{{route('front')}}">
            <img class="rounded logo-img" src="./images/logo.jpg" alt="">
            </a>
            <div class="collapse navbar-collapse" id="qrcdrNavbar">
               <div class="desktop">
                  <ul class=" navbar-nav d-flex justif-content-around">
                     <li class="nav-item ml-4">
                        <a class="nav-link cus-nav-menu" href="{{route('front')}}#product">
                        Product
                        </a>
                     </li>
                     <li class="nav-item ml-4">
                        <a class="nav-link cus-nav-menu" href="{{route('front')}}#pricing">
                        Pricing
                        </a>
                     </li>
                     <li class="nav-item ml-4">
                        <a class="nav-link cus-nav-menu" href="{{route('front')}}#testimonials">
                        Testimonials
                        </a>
                     </li>
                     <li class="nav-item ml-4">
                        <a class="nav-link cus-nav-menu" href="{{route('front')}}#demo">
                        Demo
                        </a>
                     </li>
                  </ul>
               </div>
               {{-- <a href="/profile" class="dropdown-item">{{ __('Profile') }}</a>
               @if(auth()->user()->hasRole('admin'))
               <a href="/home" class="dropdown-item">{{ __('Dashboard') }}</a>
               <a class="dropdown-item " href="/live">{{ __('Live Orders') }}</a>
               <a href="/orders" class="dropdown-item">{{ __('Orders') }}</a>
               <a href="/restaurants" class="dropdown-item">{{ __('Restaurants') }}</a>
               <a href="{{ route('reviews.index') }}" class="dropdown-item">{{ __('Reviews') }}</a>
               @if(config('settings.multi_city'))
               <a href="{{ route('cities.index') }}" class="dropdown-item">{{ __('Cities') }}</a>
               @endif
               <a href="/drivers" class="dropdown-item">{{ __('Drivers') }}</a>
               <a href="/clients" class="dropdown-item">{{ __('Clients') }}</a>
               <a href="/pages" class="dropdown-item">{{ __('Pages') }}</a>
               @if(config('settings.enable_pricing'))
               <a href="{{ route('plans.index') }}" class="dropdown-item">{{ __('Pricing plans') }}</a>
               @endif
               @if(config('app.ordering')&&config('settings.enable_finances_admin'))
               <a href="{{ route('finances.admin') }}" class="dropdown-item">{{ __('Finances') }}</a>
               @endif
               <a href="/settings" class="dropdown-item">{{ __('Settings') }}</a>
               @endif
               @if(auth()->user()->hasRole('owner'))
               <a href="/home" class="dropdown-item">{{ __('Dashboard') }}</a>
               <a class="dropdown-item " href="/live">{{ __('Live Orders') }}</a>
               <a href="/orders" class="dropdown-item">{{ __('Orders') }}</a>
               <a href="{{ route('admin.restaurants.edit', auth()->user()->restorant->id) }}" class="dropdown-item">{{ __('Restaurant') }}</a>
               <a href="/items" class="dropdown-item">{{ __('Menu') }}</a>
               @if(config('app.ordering')&&config('settings.enable_finances_owner'))
               <a href="{{ route('finances.owner') }}" class="dropdown-item">{{ __('Finances') }}</a>
               @endif
               @if(config('settings.enable_pricing'))
               <a href="{{ route('plans.current') }}" class="dropdown-item">{{ __('Plan') }}</a>
               @endif
               @endif
               @if(auth()->user()->hasRole('client'))
               <a href="/orders" class="dropdown-item">{{ __('My Orders') }}</a>
               <a href="/addresses" class="dropdown-item">{{ __('My Addresses') }}</a>
               @endif
               @if(auth()->user()->hasRole('driver'))
               <a href="/home" class="dropdown-item">{{ __('Dashboard') }}</a>
               <a href="/orders" class="dropdown-item">{{ __('Orders') }}</a>
               @endif
               <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               <span>{{ __('Logout') }}</span>
               </a> --}}
            </div>
            <ul class="navbar-nav ms-auto">
               <li class="langmenu nav-item dropdown">
                  {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-flag"></i></a> --}}
                  {{-- 
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="?lang=ar">العربية</a><a class="dropdown-item" href="?lang=de-DE">Deutsch</a><a class="dropdown-item active" href="?lang=en">English</a><a class="dropdown-item" href="?lang=es-ES">Español</a><a class="dropdown-item" href="?lang=fr-FR">Français</a><a class="dropdown-item" href="?lang=it-IT">Italiano</a><a class="dropdown-item" href="?lang=pl-PL">Polski</a><a class="dropdown-item" href="?lang=pt-PT">Português</a><a class="dropdown-item" href="?lang=tr-TR">Türkçe</a><a class="dropdown-item" href="?lang=zh-CN">简体中文</a></div>
                  --}}
                  <a href="/home">
                  <button class="btn btn-light dashboard-button">
                  {{ __('Dashboard') }}
                  </button>
                  </a>
               </li>
            </ul>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#qrcdrNavbar" aria-controls="qrcdrNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button> --}}
         </div>
      </nav>
      {{-- Section QRGen Start --}}
      <div class="bg-white mt-5 pt-5">
         <input type="hidden" id="qrcdr-relative" value="">
         <div class="container pt-3"  id="qrgen">
            <h1 class="text-center">Generate Your QR Code</h1>
            <div class="row ">
               <div class="col-lg-4 order-last">
                  <nav class="navbar sticky-top">
                     <div class="placeresult bg-light d-grid">
                        <div class="form-group text-center wrapresult">
                           <div class="resultholder">
                              <img class="img-fluid" src="images/placeholder.svg" />
                              <div class="infopanel"></div>
                           </div>
                        </div>
                        <div class="preloader"><i class="fa fa-cog fa-spin"></i></div>
                        <input type="hidden" class="holdresult">
                        <button class="btn btn-lg btn-block btn-primary ellipsis generate_qrcode rounded-pill" disabled><i class="fa fa-check"></i> Save</button>
                        <div class="text-center mt-2 linksholder"></div>
                     </div>
                     <div class="py-3">
                        <h2>Download</h2>
                        <p>Here You Can Download Your New Generated QR Codes</p>
                     </div>
                  </nav>
               </div>
               <!-- col md-4-->
               <div class="col-lg-8 pt-3 mb-3">
                  <div class="row">
                     <form role="form" class="qrcdr-form needs-validationNO w-100" novalidate>
                        <input type="submit" class="d-none">
                        <input type="hidden" name="section" id="getsec" value="#link">
                        <div class="col-12 pb-2">
                           <div class="row">
                              <div class="col-12">
                                 <ul class="nav nav-pills nav-fill" role="tablist">
                                    <li class="nav-item">
                                       <a class="nav-link active rounded-pill" href="#link" role="tab" data-bs-toggle="tab"><i class="fa fa-link"></i> <span class="d-inline-block d-sm-inline-block">Link</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#text" role="tab" data-bs-toggle="tab"><i class="fa fa-align-left"></i> <span class="d-inline-block d-sm-inline-block">Text</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#email" role="tab" data-bs-toggle="tab"><i class="fa fa-envelope-o"></i> <span class="d-inline-block d-sm-inline-block">E-mail</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#location" role="tab" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> <span class="d-inline-block d-sm-inline-block">Location</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#tel" role="tab" data-bs-toggle="tab"><i class="fa fa-phone"></i> <span class="d-inline-block d-sm-inline-block">Phone</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#sms" role="tab" data-bs-toggle="tab"><i class="fa fa-mobile"></i> <span class="d-inline-block d-sm-inline-block">SMS</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#whatsapp" role="tab" data-bs-toggle="tab"><i class="fa fa-whatsapp"></i> <span class="d-inline-block d-sm-inline-block">WhatsApp</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#skype" role="tab" data-bs-toggle="tab"><i class="fa fa-skype"></i> <span class="d-inline-block d-sm-inline-block">Skype</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#zoom" role="tab" data-bs-toggle="tab"><i class="fa fa-video-camera"></i> <span class="d-inline-block d-sm-inline-block">Zoom</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#wifi" role="tab" data-bs-toggle="tab"><i class="fa fa-wifi"></i> <span class="d-inline-block d-sm-inline-block">WI-FI</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#vcard" role="tab" data-bs-toggle="tab"><i class="fa fa-list-alt"></i> <span class="d-inline-block d-sm-inline-block">V-card</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#event" role="tab" data-bs-toggle="tab"><i class="fa fa-calendar-o"></i> <span class="d-inline-block d-sm-inline-block">Event</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#paypal" role="tab" data-bs-toggle="tab"><i class="fa fa-paypal"></i> <span class="d-inline-block d-sm-inline-block">PayPal</span></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link rounded-pill" href="#bitcoin" role="tab" data-bs-toggle="tab"><i class="fa fa-bitcoin"></i> <span class="d-inline-block d-sm-inline-block">BitCoin</span></a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="col-12">
                                 <div class="tab-content mt-3" id="dataTabs">
                                    <div class="tab-pane fade show active" id="link">
                                       <h4>Link</h4>
                                       <div class="form-group">
                                          <label for="malink">URL</label>
                                          <input type="text" name="link" id="malink" class="form-control ltr" placeholder="http://" required="required" value="" />
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="text">
                                       <h4>Text</h4>
                                       <div class="row">
                                          <div class="col-12 form-group">
                                             <label>Message</label>
                                             <textarea rows="3" name="data" class="form-control" required="required" maxlength="1000"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="email">
                                       <h4>E-mail</h4>
                                       <div class="row">
                                          <div class="col-md-6 form-group">
                                             <label>Send to</label>
                                             <input type="email" name="mailto" placeholder="E-Mail" class="form-control" required="required">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>Subject</label>
                                             <input type="text" name="subject" class="form-control" required="required">
                                          </div>
                                          <div class="col-12 form-group">
                                             <label>Text</label>
                                             <textarea name="body" class="form-control" required="required" maxlength="1000"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="location">
                                       <h4>Location</h4>
                                       <script src="js/ol/ol.js"></script>
                                       <small>Search an address or drag the marker to adjust the position and get the coordinates</small>
                                       <div class="row">
                                          <div class="col-md-6 mb-1">
                                             <div class="input-group">
                                                <input type="text" class="form-control venomaps-set-address nopreview" placeholder="Search">
                                                <button class="btn btn-outline-primary venomaps-get-coordinates rounded-0" type="button"><i class="fa fa-search"></i></button>
                                             </div>
                                          </div>
                                          <div class="col-md-3">
                                             <input type="number" class="form-control venomaps-get-lat setinput-latlon no-validate" value="" placeholder="Latitude" name="lat" step="0.001">
                                          </div>
                                          <div class="col-md-3">
                                             <input type="number" class="form-control venomaps-get-lon setinput-latlon no-validate" value="" placeholder="Longitude" name="lng" step="0.001">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <div id="wpol-admin-map" data-lat="40.7127837" data-lng="-74.00594130000002" class="venomap"></div>
                                          <div style="display:none;">
                                             <div class="wpol-infomarker" id="infomarker_admin"></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="tel">
                                       <h4>Phone</h4>
                                       <div class="row">
                                          <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Country code</label>
                                                <select class="form-select custom-select" name="countrycodetel">
                                                   <option value="" label="--">--</option>
                                                   <option value="7840" label="Abkhazia (+7 840)">Abkhazia (+7 840)</option>
                                                   <option value="7940" label="Abkhazia (+7 940)">Abkhazia (+7 940)</option>
                                                   <option value="93" label="Afghanistan (+93)">Afghanistan (+93)</option>
                                                   <option value="355" label="Albania (+355)">Albania (+355)</option>
                                                   <option value="213" label="Algeria (+213)">Algeria (+213)</option>
                                                   <option value="1684" label="American Samoa (+1 684)">American Samoa (+1 684)</option>
                                                   <option value="376" label="Andorra (+376)">Andorra (+376)</option>
                                                   <option value="244" label="Angola (+244)">Angola (+244)</option>
                                                   <option value="1264" label="Anguilla (+1 264)">Anguilla (+1 264)</option>
                                                   <option value="1268" label="Antigua and Barbuda (+1 268)">Antigua and Barbuda (+1 268)</option>
                                                   <option value="54" label="Argentina (+54)">Argentina (+54)</option>
                                                   <option value="374" label="Armenia (+374)">Armenia (+374)</option>
                                                   <option value="297" label="Aruba (+297)">Aruba (+297)</option>
                                                   <option value="247" label="Ascension (+247)">Ascension (+247)</option>
                                                   <option value="61" label="Australia (+61)">Australia (+61)</option>
                                                   <option value="672" label="Australian External Territories (+672)">Australian External Territories (+672)</option>
                                                   <option value="43" label="Austria (+43)">Austria (+43)</option>
                                                   <option value="994" label="Azerbaijan (+994)">Azerbaijan (+994)</option>
                                                   <option value="1242" label="Bahamas (+1 242)">Bahamas (+1 242)</option>
                                                   <option value="973" label="Bahrain (+973)">Bahrain (+973)</option>
                                                   <option value="880" label="Bangladesh (+880)">Bangladesh (+880)</option>
                                                   <option value="1246" label="Barbados (+1 246)">Barbados (+1 246)</option>
                                                   <option value="1268" label="Barbuda (+1 268)">Barbuda (+1 268)</option>
                                                   <option value="375" label="Belarus (+375)">Belarus (+375)</option>
                                                   <option value="32" label="Belgium (+32)">Belgium (+32)</option>
                                                   <option value="501" label="Belize (+501)">Belize (+501)</option>
                                                   <option value="229" label="Benin (+229)">Benin (+229)</option>
                                                   <option value="1441" label="Bermuda (+1 441)">Bermuda (+1 441)</option>
                                                   <option value="975" label="Bhutan (+975)">Bhutan (+975)</option>
                                                   <option value="591" label="Bolivia (+591)">Bolivia (+591)</option>
                                                   <option value="387" label="Bosnia and Herzegovina (+387)">Bosnia and Herzegovina (+387)</option>
                                                   <option value="267" label="Botswana (+267)">Botswana (+267)</option>
                                                   <option value="55" label="Brazil (+55)">Brazil (+55)</option>
                                                   <option value="246" label="British Indian Ocean Territory (+246)">British Indian Ocean Territory (+246)</option>
                                                   <option value="1284" label="British Virgin Islands (+1 284)">British Virgin Islands (+1 284)</option>
                                                   <option value="673" label="Brunei (+673)">Brunei (+673)</option>
                                                   <option value="359" label="Bulgaria (+359)">Bulgaria (+359)</option>
                                                   <option value="226" label="Burkina Faso (+226)">Burkina Faso (+226)</option>
                                                   <option value="257" label="Burundi (+257)">Burundi (+257)</option>
                                                   <option value="855" label="Cambodia (+855)">Cambodia (+855)</option>
                                                   <option value="237" label="Cameroon (+237)">Cameroon (+237)</option>
                                                   <option value="1" label="Canada (+1)">Canada (+1)</option>
                                                   <option value="238" label="Cape Verde (+238)">Cape Verde (+238)</option>
                                                   <option value="345" label="Cayman Islands (+345)">Cayman Islands (+345)</option>
                                                   <option value="236" label="Central African Republic (+236)">Central African Republic (+236)</option>
                                                   <option value="235" label="Chad (+235)">Chad (+235)</option>
                                                   <option value="56" label="Chile (+56)">Chile (+56)</option>
                                                   <option value="86" label="China (+86)">China (+86)</option>
                                                   <option value="61" label="Christmas Island (+61)">Christmas Island (+61)</option>
                                                   <option value="61" label="Cocos-Keeling Islands (+61)">Cocos-Keeling Islands (+61)</option>
                                                   <option value="57" label="Colombia (+57)">Colombia (+57)</option>
                                                   <option value="269" label="Comoros (+269)">Comoros (+269)</option>
                                                   <option value="242" label="Congo (+242)">Congo (+242)</option>
                                                   <option value="243" label="Congo, Dem. Rep. of (Zaire) (+243)">Congo, Dem. Rep. of (Zaire) (+243)</option>
                                                   <option value="682" label="Cook Islands (+682)">Cook Islands (+682)</option>
                                                   <option value="506" label="Costa Rica (+506)">Costa Rica (+506)</option>
                                                   <option value="225" label="Ivory Coast (+225)">Ivory Coast (+225)</option>
                                                   <option value="385" label="Croatia (+385)">Croatia (+385)</option>
                                                   <option value="53" label="Cuba (+53)">Cuba (+53)</option>
                                                   <option value="599" label="Curacao (+599)">Curacao (+599)</option>
                                                   <option value="537" label="Cyprus (+537)">Cyprus (+537)</option>
                                                   <option value="420" label="Czech Republic (+420)">Czech Republic (+420)</option>
                                                   <option value="45" label="Denmark (+45)">Denmark (+45)</option>
                                                   <option value="246" label="Diego Garcia (+246)">Diego Garcia (+246)</option>
                                                   <option value="253" label="Djibouti (+253)">Djibouti (+253)</option>
                                                   <option value="1767" label="Dominica (+1 767)">Dominica (+1 767)</option>
                                                   <option value="1809" label="Dominican Republic (+1 809)">Dominican Republic (+1 809)</option>
                                                   <option value="1829" label="Dominican Republic (+1 829)">Dominican Republic (+1 829)</option>
                                                   <option value="1849" label="Dominican Republic (+1 849)">Dominican Republic (+1 849)</option>
                                                   <option value="670" label="East Timor (+670)">East Timor (+670)</option>
                                                   <option value="56" label="Easter Island (+56)">Easter Island (+56)</option>
                                                   <option value="593" label="Ecuador (+593)">Ecuador (+593)</option>
                                                   <option value="20" label="Egypt (+20)">Egypt (+20)</option>
                                                   <option value="503" label="El Salvador (+503)">El Salvador (+503)</option>
                                                   <option value="240" label="Equatorial Guinea (+240)">Equatorial Guinea (+240)</option>
                                                   <option value="291" label="Eritrea (+291)">Eritrea (+291)</option>
                                                   <option value="372" label="Estonia (+372)">Estonia (+372)</option>
                                                   <option value="251" label="Ethiopia (+251)">Ethiopia (+251)</option>
                                                   <option value="500" label="Falkland Islands (+500)">Falkland Islands (+500)</option>
                                                   <option value="298" label="Faroe Islands (+298)">Faroe Islands (+298)</option>
                                                   <option value="679" label="Fiji (+679)">Fiji (+679)</option>
                                                   <option value="358" label="Finland (+358)">Finland (+358)</option>
                                                   <option value="33" label="France (+33)">France (+33)</option>
                                                   <option value="596" label="French Antilles (+596)">French Antilles (+596)</option>
                                                   <option value="594" label="French Guiana (+594)">French Guiana (+594)</option>
                                                   <option value="689" label="French Polynesia (+689)">French Polynesia (+689)</option>
                                                   <option value="241" label="Gabon (+241)">Gabon (+241)</option>
                                                   <option value="220" label="Gambia (+220)">Gambia (+220)</option>
                                                   <option value="995" label="Georgia (+995)">Georgia (+995)</option>
                                                   <option value="49" label="Germany (+49)">Germany (+49)</option>
                                                   <option value="233" label="Ghana (+233)">Ghana (+233)</option>
                                                   <option value="350" label="Gibraltar (+350)">Gibraltar (+350)</option>
                                                   <option value="30" label="Greece (+30)">Greece (+30)</option>
                                                   <option value="299" label="Greenland (+299)">Greenland (+299)</option>
                                                   <option value="1473" label="Grenada (+1 473)">Grenada (+1 473)</option>
                                                   <option value="590" label="Guadeloupe (+590)">Guadeloupe (+590)</option>
                                                   <option value="1671" label="Guam (+1 671)">Guam (+1 671)</option>
                                                   <option value="502" label="Guatemala (+502)">Guatemala (+502)</option>
                                                   <option value="224" label="Guinea (+224)">Guinea (+224)</option>
                                                   <option value="245" label="Guinea-Bissau (+245)">Guinea-Bissau (+245)</option>
                                                   <option value="595" label="Guyana (+595)">Guyana (+595)</option>
                                                   <option value="509" label="Haiti (+509)">Haiti (+509)</option>
                                                   <option value="504" label="Honduras (+504)">Honduras (+504)</option>
                                                   <option value="852" label="Hong Kong SAR China (+852)">Hong Kong SAR China (+852)</option>
                                                   <option value="36" label="Hungary (+36)">Hungary (+36)</option>
                                                   <option value="354" label="Iceland (+354)">Iceland (+354)</option>
                                                   <option value="91" label="India (+91)">India (+91)</option>
                                                   <option value="62" label="Indonesia (+62)">Indonesia (+62)</option>
                                                   <option value="98" label="Iran (+98)">Iran (+98)</option>
                                                   <option value="964" label="Iraq (+964)">Iraq (+964)</option>
                                                   <option value="353" label="Ireland (+353)">Ireland (+353)</option>
                                                   <option value="972" label="Israel (+972)">Israel (+972)</option>
                                                   <option value="39" label="Italy (+39)">Italy (+39)</option>
                                                   <option value="1876" label="Jamaica (+1 876)">Jamaica (+1 876)</option>
                                                   <option value="81" label="Japan (+81)">Japan (+81)</option>
                                                   <option value="962" label="Jordan (+962)">Jordan (+962)</option>
                                                   <option value="77" label="Kazakhstan (+7 7)">Kazakhstan (+7 7)</option>
                                                   <option value="254" label="Kenya (+254)">Kenya (+254)</option>
                                                   <option value="686" label="Kiribati (+686)">Kiribati (+686)</option>
                                                   <option value="850" label="North Korea (+850)">North Korea (+850)</option>
                                                   <option value="82" label="South Korea (+82)">South Korea (+82)</option>
                                                   <option value="965" label="Kuwait (+965)">Kuwait (+965)</option>
                                                   <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan (+996)</option>
                                                   <option value="856" label="Laos (+856)">Laos (+856)</option>
                                                   <option value="371" label="Latvia (+371)">Latvia (+371)</option>
                                                   <option value="961" label="Lebanon (+961)">Lebanon (+961)</option>
                                                   <option value="266" label="Lesotho (+266)">Lesotho (+266)</option>
                                                   <option value="231" label="Liberia (+231)">Liberia (+231)</option>
                                                   <option value="218" label="Libya (+218)">Libya (+218)</option>
                                                   <option value="423" label="Liechtenstein (+423)">Liechtenstein (+423)</option>
                                                   <option value="370" label="Lithuania (+370)">Lithuania (+370)</option>
                                                   <option value="352" label="Luxembourg (+352)">Luxembourg (+352)</option>
                                                   <option value="853" label="Macau SAR China (+853)">Macau SAR China (+853)</option>
                                                   <option value="389" label="Macedonia (+389)">Macedonia (+389)</option>
                                                   <option value="261" label="Madagascar (+261)">Madagascar (+261)</option>
                                                   <option value="265" label="Malawi (+265)">Malawi (+265)</option>
                                                   <option value="60" label="Malaysia (+60)">Malaysia (+60)</option>
                                                   <option value="960" label="Maldives (+960)">Maldives (+960)</option>
                                                   <option value="223" label="Mali (+223)">Mali (+223)</option>
                                                   <option value="356" label="Malta (+356)">Malta (+356)</option>
                                                   <option value="692" label="Marshall Islands (+692)">Marshall Islands (+692)</option>
                                                   <option value="596" label="Martinique (+596)">Martinique (+596)</option>
                                                   <option value="222" label="Mauritania (+222)">Mauritania (+222)</option>
                                                   <option value="230" label="Mauritius (+230)">Mauritius (+230)</option>
                                                   <option value="262" label="Mayotte (+262)">Mayotte (+262)</option>
                                                   <option value="52" label="Mexico (+52)">Mexico (+52)</option>
                                                   <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                   <option value="1808" label="Midway Island (+1 808)">Midway Island (+1 808)</option>
                                                   <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                   <option value="373" label="Moldova (+373)">Moldova (+373)</option>
                                                   <option value="377" label="Monaco (+377)">Monaco (+377)</option>
                                                   <option value="976" label="Mongolia (+976)">Mongolia (+976)</option>
                                                   <option value="382" label="Montenegro (+382)">Montenegro (+382)</option>
                                                   <option value="1664" label="Montserrat (+1664)">Montserrat (+1664)</option>
                                                   <option value="212" label="Morocco (+212)">Morocco (+212)</option>
                                                   <option value="95" label="Myanmar (+95)">Myanmar (+95)</option>
                                                   <option value="264" label="Namibia (+264)">Namibia (+264)</option>
                                                   <option value="674" label="Nauru (+674)">Nauru (+674)</option>
                                                   <option value="977" label="Nepal (+977)">Nepal (+977)</option>
                                                   <option value="31" label="Netherlands (+31)">Netherlands (+31)</option>
                                                   <option value="599" label="Netherlands Antilles (+599)">Netherlands Antilles (+599)</option>
                                                   <option value="1869" label="Nevis (+1 869)">Nevis (+1 869)</option>
                                                   <option value="687" label="New Caledonia (+687)">New Caledonia (+687)</option>
                                                   <option value="64" label="New Zealand (64)">New Zealand (64)</option>
                                                   <option value="505" label="Nicaragua (+505)">Nicaragua (+505)</option>
                                                   <option value="227" label="Niger (+227)">Niger (+227)</option>
                                                   <option value="234" label="Nigeria (+234)">Nigeria (+234)</option>
                                                   <option value="683" label="Niue (+683)">Niue (+683)</option>
                                                   <option value="672" label="Norfolk Island (+672)">Norfolk Island (+672)</option>
                                                   <option value="1670" label="Northern Mariana Islands (+1 670)">Northern Mariana Islands (+1 670)</option>
                                                   <option value="47" label="Norway (+47)">Norway (+47)</option>
                                                   <option value="968" label="Oman (+968)">Oman (+968)</option>
                                                   <option value="92" label="Pakistan (+92)">Pakistan (+92)</option>
                                                   <option value="680" label="Palau (+680)">Palau (+680)</option>
                                                   <option value="970" label="Palestinian Territory (+970)">Palestinian Territory (+970)</option>
                                                   <option value="507" label="Panama (+507)">Panama (+507)</option>
                                                   <option value="675" label="Papua New Guinea (+675)">Papua New Guinea (+675)</option>
                                                   <option value="595" label="Paraguay (+595)">Paraguay (+595)</option>
                                                   <option value="51" label="Peru (+51)">Peru (+51)</option>
                                                   <option value="63" label="Philippines (+63)">Philippines (+63)</option>
                                                   <option value="48" label="Poland (+48)">Poland (+48)</option>
                                                   <option value="351" label="Portugal (+351)">Portugal (+351)</option>
                                                   <option value="1787" label="Puerto Rico (+1 787)">Puerto Rico (+1 787)</option>
                                                   <option value="1939" label="Puerto Rico (+1 939)">Puerto Rico (+1 939)</option>
                                                   <option value="974" label="Qatar (+974)">Qatar (+974)</option>
                                                   <option value="262" label="Reunion (+262)">Reunion (+262)</option>
                                                   <option value="40" label="Romania (+40)">Romania (+40)</option>
                                                   <option value="7" label="Russia (+7)">Russia (+7)</option>
                                                   <option value="250" label="Rwanda (+250)">Rwanda (+250)</option>
                                                   <option value="685" label="Samoa (+685)">Samoa (+685)</option>
                                                   <option value="378" label="San Marino (+378)">San Marino (+378)</option>
                                                   <option value="966" label="Saudi Arabia (+966)">Saudi Arabia (+966)</option>
                                                   <option value="221" label="Senegal (+221)">Senegal (+221)</option>
                                                   <option value="381" label="Serbia (+381)">Serbia (+381)</option>
                                                   <option value="248" label="Seychelles (+248)">Seychelles (+248)</option>
                                                   <option value="232" label="Sierra Leone (+232)">Sierra Leone (+232)</option>
                                                   <option value="65" label="Singapore (+65)">Singapore (+65)</option>
                                                   <option value="421" label="Slovakia (+421)">Slovakia (+421)</option>
                                                   <option value="386" label="Slovenia (+386)">Slovenia (+386)</option>
                                                   <option value="677" label="Solomon Islands (+677)">Solomon Islands (+677)</option>
                                                   <option value="27" label="South Africa (+27)">South Africa (+27)</option>
                                                   <option value="500" label="South Georgia and the South Sandwich Islands (+500)">South Georgia and the South Sandwich Islands (+500)</option>
                                                   <option value="34" label="Spain (+34)">Spain (+34)</option>
                                                   <option value="94" label="Sri Lanka (+94)">Sri Lanka (+94)</option>
                                                   <option value="249" label="Sudan (+249)">Sudan (+249)</option>
                                                   <option value="597" label="Suriname (+597)">Suriname (+597)</option>
                                                   <option value="268" label="Swaziland (+268)">Swaziland (+268)</option>
                                                   <option value="46" label="Sweden (+46)">Sweden (+46)</option>
                                                   <option value="41" label="Switzerland (+41)">Switzerland (+41)</option>
                                                   <option value="963" label="Syria (+963)">Syria (+963)</option>
                                                   <option value="886" label="Taiwan (+886)">Taiwan (+886)</option>
                                                   <option value="992" label="Tajikistan (+992)">Tajikistan (+992)</option>
                                                   <option value="255" label="Tanzania (+255)">Tanzania (+255)</option>
                                                   <option value="66" label="Thailand (+66)">Thailand (+66)</option>
                                                   <option value="670" label="Timor Leste (+670)">Timor Leste (+670)</option>
                                                   <option value="228" label="Togo (+228)">Togo (+228)</option>
                                                   <option value="690" label="Tokelau (+690)">Tokelau (+690)</option>
                                                   <option value="676" label="Tonga (+676)">Tonga (+676)</option>
                                                   <option value="1868" label="Trinidad and Tobago (+1 868)">Trinidad and Tobago (+1 868)</option>
                                                   <option value="216" label="Tunisia (+216)">Tunisia (+216)</option>
                                                   <option value="90" label="Turkey (+90)">Turkey (+90)</option>
                                                   <option value="993" label="Turkmenistan (+993)">Turkmenistan (+993)</option>
                                                   <option value="1649" label="Turks and Caicos Islands (+1 649)">Turks and Caicos Islands (+1 649)</option>
                                                   <option value="688" label="Tuvalu (+688)">Tuvalu (+688)</option>
                                                   <option value="256" label="Uganda (+256)">Uganda (+256)</option>
                                                   <option value="380" label="Ukraine (+380)">Ukraine (+380)</option>
                                                   <option value="971" label="United Arab Emirates (+971)">United Arab Emirates (+971)</option>
                                                   <option value="44" label="United Kingdom (+44)">United Kingdom (+44)</option>
                                                   <option value="1" label="United States (+1)">United States (+1)</option>
                                                   <option value="598" label="Uruguay (+598)">Uruguay (+598)</option>
                                                   <option value="1340" label="U.S. Virgin Islands (+1 340)">U.S. Virgin Islands (+1 340)</option>
                                                   <option value="998" label="Uzbekistan (+998)">Uzbekistan (+998)</option>
                                                   <option value="678" label="Vanuatu (+678)">Vanuatu (+678)</option>
                                                   <option value="58" label="Venezuela (+58)">Venezuela (+58)</option>
                                                   <option value="84" label="Vietnam (+84)">Vietnam (+84)</option>
                                                   <option value="1808" label="Wake Island (+1 808)">Wake Island (+1 808)</option>
                                                   <option value="681" label="Wallis and Futuna (+681)">Wallis and Futuna (+681)</option>
                                                   <option value="967" label="Yemen (+967)">Yemen (+967)</option>
                                                   <option value="260" label="Zambia (+260)">Zambia (+260)</option>
                                                   <option value="255" label="Zanzibar (+255)">Zanzibar (+255)</option>
                                                   <option value="263" label="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-md-8">
                                             <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="number" name="tel" placeholder="" class="form-control" required="required">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="sms">
                                       <h4>SMS</h4>
                                       <div class="row">
                                          <div class="col-md-4 form-group">
                                             <label>Country code</label>
                                             <select class="form-select custom-select" name="countrycodesms">
                                                <option value="" label="--">--</option>
                                                <option value="7840" label="Abkhazia (+7 840)">Abkhazia (+7 840)</option>
                                                <option value="7940" label="Abkhazia (+7 940)">Abkhazia (+7 940)</option>
                                                <option value="93" label="Afghanistan (+93)">Afghanistan (+93)</option>
                                                <option value="355" label="Albania (+355)">Albania (+355)</option>
                                                <option value="213" label="Algeria (+213)">Algeria (+213)</option>
                                                <option value="1684" label="American Samoa (+1 684)">American Samoa (+1 684)</option>
                                                <option value="376" label="Andorra (+376)">Andorra (+376)</option>
                                                <option value="244" label="Angola (+244)">Angola (+244)</option>
                                                <option value="1264" label="Anguilla (+1 264)">Anguilla (+1 264)</option>
                                                <option value="1268" label="Antigua and Barbuda (+1 268)">Antigua and Barbuda (+1 268)</option>
                                                <option value="54" label="Argentina (+54)">Argentina (+54)</option>
                                                <option value="374" label="Armenia (+374)">Armenia (+374)</option>
                                                <option value="297" label="Aruba (+297)">Aruba (+297)</option>
                                                <option value="247" label="Ascension (+247)">Ascension (+247)</option>
                                                <option value="61" label="Australia (+61)">Australia (+61)</option>
                                                <option value="672" label="Australian External Territories (+672)">Australian External Territories (+672)</option>
                                                <option value="43" label="Austria (+43)">Austria (+43)</option>
                                                <option value="994" label="Azerbaijan (+994)">Azerbaijan (+994)</option>
                                                <option value="1242" label="Bahamas (+1 242)">Bahamas (+1 242)</option>
                                                <option value="973" label="Bahrain (+973)">Bahrain (+973)</option>
                                                <option value="880" label="Bangladesh (+880)">Bangladesh (+880)</option>
                                                <option value="1246" label="Barbados (+1 246)">Barbados (+1 246)</option>
                                                <option value="1268" label="Barbuda (+1 268)">Barbuda (+1 268)</option>
                                                <option value="375" label="Belarus (+375)">Belarus (+375)</option>
                                                <option value="32" label="Belgium (+32)">Belgium (+32)</option>
                                                <option value="501" label="Belize (+501)">Belize (+501)</option>
                                                <option value="229" label="Benin (+229)">Benin (+229)</option>
                                                <option value="1441" label="Bermuda (+1 441)">Bermuda (+1 441)</option>
                                                <option value="975" label="Bhutan (+975)">Bhutan (+975)</option>
                                                <option value="591" label="Bolivia (+591)">Bolivia (+591)</option>
                                                <option value="387" label="Bosnia and Herzegovina (+387)">Bosnia and Herzegovina (+387)</option>
                                                <option value="267" label="Botswana (+267)">Botswana (+267)</option>
                                                <option value="55" label="Brazil (+55)">Brazil (+55)</option>
                                                <option value="246" label="British Indian Ocean Territory (+246)">British Indian Ocean Territory (+246)</option>
                                                <option value="1284" label="British Virgin Islands (+1 284)">British Virgin Islands (+1 284)</option>
                                                <option value="673" label="Brunei (+673)">Brunei (+673)</option>
                                                <option value="359" label="Bulgaria (+359)">Bulgaria (+359)</option>
                                                <option value="226" label="Burkina Faso (+226)">Burkina Faso (+226)</option>
                                                <option value="257" label="Burundi (+257)">Burundi (+257)</option>
                                                <option value="855" label="Cambodia (+855)">Cambodia (+855)</option>
                                                <option value="237" label="Cameroon (+237)">Cameroon (+237)</option>
                                                <option value="1" label="Canada (+1)">Canada (+1)</option>
                                                <option value="238" label="Cape Verde (+238)">Cape Verde (+238)</option>
                                                <option value="345" label="Cayman Islands (+345)">Cayman Islands (+345)</option>
                                                <option value="236" label="Central African Republic (+236)">Central African Republic (+236)</option>
                                                <option value="235" label="Chad (+235)">Chad (+235)</option>
                                                <option value="56" label="Chile (+56)">Chile (+56)</option>
                                                <option value="86" label="China (+86)">China (+86)</option>
                                                <option value="61" label="Christmas Island (+61)">Christmas Island (+61)</option>
                                                <option value="61" label="Cocos-Keeling Islands (+61)">Cocos-Keeling Islands (+61)</option>
                                                <option value="57" label="Colombia (+57)">Colombia (+57)</option>
                                                <option value="269" label="Comoros (+269)">Comoros (+269)</option>
                                                <option value="242" label="Congo (+242)">Congo (+242)</option>
                                                <option value="243" label="Congo, Dem. Rep. of (Zaire) (+243)">Congo, Dem. Rep. of (Zaire) (+243)</option>
                                                <option value="682" label="Cook Islands (+682)">Cook Islands (+682)</option>
                                                <option value="506" label="Costa Rica (+506)">Costa Rica (+506)</option>
                                                <option value="225" label="Ivory Coast (+225)">Ivory Coast (+225)</option>
                                                <option value="385" label="Croatia (+385)">Croatia (+385)</option>
                                                <option value="53" label="Cuba (+53)">Cuba (+53)</option>
                                                <option value="599" label="Curacao (+599)">Curacao (+599)</option>
                                                <option value="537" label="Cyprus (+537)">Cyprus (+537)</option>
                                                <option value="420" label="Czech Republic (+420)">Czech Republic (+420)</option>
                                                <option value="45" label="Denmark (+45)">Denmark (+45)</option>
                                                <option value="246" label="Diego Garcia (+246)">Diego Garcia (+246)</option>
                                                <option value="253" label="Djibouti (+253)">Djibouti (+253)</option>
                                                <option value="1767" label="Dominica (+1 767)">Dominica (+1 767)</option>
                                                <option value="1809" label="Dominican Republic (+1 809)">Dominican Republic (+1 809)</option>
                                                <option value="1829" label="Dominican Republic (+1 829)">Dominican Republic (+1 829)</option>
                                                <option value="1849" label="Dominican Republic (+1 849)">Dominican Republic (+1 849)</option>
                                                <option value="670" label="East Timor (+670)">East Timor (+670)</option>
                                                <option value="56" label="Easter Island (+56)">Easter Island (+56)</option>
                                                <option value="593" label="Ecuador (+593)">Ecuador (+593)</option>
                                                <option value="20" label="Egypt (+20)">Egypt (+20)</option>
                                                <option value="503" label="El Salvador (+503)">El Salvador (+503)</option>
                                                <option value="240" label="Equatorial Guinea (+240)">Equatorial Guinea (+240)</option>
                                                <option value="291" label="Eritrea (+291)">Eritrea (+291)</option>
                                                <option value="372" label="Estonia (+372)">Estonia (+372)</option>
                                                <option value="251" label="Ethiopia (+251)">Ethiopia (+251)</option>
                                                <option value="500" label="Falkland Islands (+500)">Falkland Islands (+500)</option>
                                                <option value="298" label="Faroe Islands (+298)">Faroe Islands (+298)</option>
                                                <option value="679" label="Fiji (+679)">Fiji (+679)</option>
                                                <option value="358" label="Finland (+358)">Finland (+358)</option>
                                                <option value="33" label="France (+33)">France (+33)</option>
                                                <option value="596" label="French Antilles (+596)">French Antilles (+596)</option>
                                                <option value="594" label="French Guiana (+594)">French Guiana (+594)</option>
                                                <option value="689" label="French Polynesia (+689)">French Polynesia (+689)</option>
                                                <option value="241" label="Gabon (+241)">Gabon (+241)</option>
                                                <option value="220" label="Gambia (+220)">Gambia (+220)</option>
                                                <option value="995" label="Georgia (+995)">Georgia (+995)</option>
                                                <option value="49" label="Germany (+49)">Germany (+49)</option>
                                                <option value="233" label="Ghana (+233)">Ghana (+233)</option>
                                                <option value="350" label="Gibraltar (+350)">Gibraltar (+350)</option>
                                                <option value="30" label="Greece (+30)">Greece (+30)</option>
                                                <option value="299" label="Greenland (+299)">Greenland (+299)</option>
                                                <option value="1473" label="Grenada (+1 473)">Grenada (+1 473)</option>
                                                <option value="590" label="Guadeloupe (+590)">Guadeloupe (+590)</option>
                                                <option value="1671" label="Guam (+1 671)">Guam (+1 671)</option>
                                                <option value="502" label="Guatemala (+502)">Guatemala (+502)</option>
                                                <option value="224" label="Guinea (+224)">Guinea (+224)</option>
                                                <option value="245" label="Guinea-Bissau (+245)">Guinea-Bissau (+245)</option>
                                                <option value="595" label="Guyana (+595)">Guyana (+595)</option>
                                                <option value="509" label="Haiti (+509)">Haiti (+509)</option>
                                                <option value="504" label="Honduras (+504)">Honduras (+504)</option>
                                                <option value="852" label="Hong Kong SAR China (+852)">Hong Kong SAR China (+852)</option>
                                                <option value="36" label="Hungary (+36)">Hungary (+36)</option>
                                                <option value="354" label="Iceland (+354)">Iceland (+354)</option>
                                                <option value="91" label="India (+91)">India (+91)</option>
                                                <option value="62" label="Indonesia (+62)">Indonesia (+62)</option>
                                                <option value="98" label="Iran (+98)">Iran (+98)</option>
                                                <option value="964" label="Iraq (+964)">Iraq (+964)</option>
                                                <option value="353" label="Ireland (+353)">Ireland (+353)</option>
                                                <option value="972" label="Israel (+972)">Israel (+972)</option>
                                                <option value="39" label="Italy (+39)">Italy (+39)</option>
                                                <option value="1876" label="Jamaica (+1 876)">Jamaica (+1 876)</option>
                                                <option value="81" label="Japan (+81)">Japan (+81)</option>
                                                <option value="962" label="Jordan (+962)">Jordan (+962)</option>
                                                <option value="77" label="Kazakhstan (+7 7)">Kazakhstan (+7 7)</option>
                                                <option value="254" label="Kenya (+254)">Kenya (+254)</option>
                                                <option value="686" label="Kiribati (+686)">Kiribati (+686)</option>
                                                <option value="850" label="North Korea (+850)">North Korea (+850)</option>
                                                <option value="82" label="South Korea (+82)">South Korea (+82)</option>
                                                <option value="965" label="Kuwait (+965)">Kuwait (+965)</option>
                                                <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan (+996)</option>
                                                <option value="856" label="Laos (+856)">Laos (+856)</option>
                                                <option value="371" label="Latvia (+371)">Latvia (+371)</option>
                                                <option value="961" label="Lebanon (+961)">Lebanon (+961)</option>
                                                <option value="266" label="Lesotho (+266)">Lesotho (+266)</option>
                                                <option value="231" label="Liberia (+231)">Liberia (+231)</option>
                                                <option value="218" label="Libya (+218)">Libya (+218)</option>
                                                <option value="423" label="Liechtenstein (+423)">Liechtenstein (+423)</option>
                                                <option value="370" label="Lithuania (+370)">Lithuania (+370)</option>
                                                <option value="352" label="Luxembourg (+352)">Luxembourg (+352)</option>
                                                <option value="853" label="Macau SAR China (+853)">Macau SAR China (+853)</option>
                                                <option value="389" label="Macedonia (+389)">Macedonia (+389)</option>
                                                <option value="261" label="Madagascar (+261)">Madagascar (+261)</option>
                                                <option value="265" label="Malawi (+265)">Malawi (+265)</option>
                                                <option value="60" label="Malaysia (+60)">Malaysia (+60)</option>
                                                <option value="960" label="Maldives (+960)">Maldives (+960)</option>
                                                <option value="223" label="Mali (+223)">Mali (+223)</option>
                                                <option value="356" label="Malta (+356)">Malta (+356)</option>
                                                <option value="692" label="Marshall Islands (+692)">Marshall Islands (+692)</option>
                                                <option value="596" label="Martinique (+596)">Martinique (+596)</option>
                                                <option value="222" label="Mauritania (+222)">Mauritania (+222)</option>
                                                <option value="230" label="Mauritius (+230)">Mauritius (+230)</option>
                                                <option value="262" label="Mayotte (+262)">Mayotte (+262)</option>
                                                <option value="52" label="Mexico (+52)">Mexico (+52)</option>
                                                <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                <option value="1808" label="Midway Island (+1 808)">Midway Island (+1 808)</option>
                                                <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                <option value="373" label="Moldova (+373)">Moldova (+373)</option>
                                                <option value="377" label="Monaco (+377)">Monaco (+377)</option>
                                                <option value="976" label="Mongolia (+976)">Mongolia (+976)</option>
                                                <option value="382" label="Montenegro (+382)">Montenegro (+382)</option>
                                                <option value="1664" label="Montserrat (+1664)">Montserrat (+1664)</option>
                                                <option value="212" label="Morocco (+212)">Morocco (+212)</option>
                                                <option value="95" label="Myanmar (+95)">Myanmar (+95)</option>
                                                <option value="264" label="Namibia (+264)">Namibia (+264)</option>
                                                <option value="674" label="Nauru (+674)">Nauru (+674)</option>
                                                <option value="977" label="Nepal (+977)">Nepal (+977)</option>
                                                <option value="31" label="Netherlands (+31)">Netherlands (+31)</option>
                                                <option value="599" label="Netherlands Antilles (+599)">Netherlands Antilles (+599)</option>
                                                <option value="1869" label="Nevis (+1 869)">Nevis (+1 869)</option>
                                                <option value="687" label="New Caledonia (+687)">New Caledonia (+687)</option>
                                                <option value="64" label="New Zealand (64)">New Zealand (64)</option>
                                                <option value="505" label="Nicaragua (+505)">Nicaragua (+505)</option>
                                                <option value="227" label="Niger (+227)">Niger (+227)</option>
                                                <option value="234" label="Nigeria (+234)">Nigeria (+234)</option>
                                                <option value="683" label="Niue (+683)">Niue (+683)</option>
                                                <option value="672" label="Norfolk Island (+672)">Norfolk Island (+672)</option>
                                                <option value="1670" label="Northern Mariana Islands (+1 670)">Northern Mariana Islands (+1 670)</option>
                                                <option value="47" label="Norway (+47)">Norway (+47)</option>
                                                <option value="968" label="Oman (+968)">Oman (+968)</option>
                                                <option value="92" label="Pakistan (+92)">Pakistan (+92)</option>
                                                <option value="680" label="Palau (+680)">Palau (+680)</option>
                                                <option value="970" label="Palestinian Territory (+970)">Palestinian Territory (+970)</option>
                                                <option value="507" label="Panama (+507)">Panama (+507)</option>
                                                <option value="675" label="Papua New Guinea (+675)">Papua New Guinea (+675)</option>
                                                <option value="595" label="Paraguay (+595)">Paraguay (+595)</option>
                                                <option value="51" label="Peru (+51)">Peru (+51)</option>
                                                <option value="63" label="Philippines (+63)">Philippines (+63)</option>
                                                <option value="48" label="Poland (+48)">Poland (+48)</option>
                                                <option value="351" label="Portugal (+351)">Portugal (+351)</option>
                                                <option value="1787" label="Puerto Rico (+1 787)">Puerto Rico (+1 787)</option>
                                                <option value="1939" label="Puerto Rico (+1 939)">Puerto Rico (+1 939)</option>
                                                <option value="974" label="Qatar (+974)">Qatar (+974)</option>
                                                <option value="262" label="Reunion (+262)">Reunion (+262)</option>
                                                <option value="40" label="Romania (+40)">Romania (+40)</option>
                                                <option value="7" label="Russia (+7)">Russia (+7)</option>
                                                <option value="250" label="Rwanda (+250)">Rwanda (+250)</option>
                                                <option value="685" label="Samoa (+685)">Samoa (+685)</option>
                                                <option value="378" label="San Marino (+378)">San Marino (+378)</option>
                                                <option value="966" label="Saudi Arabia (+966)">Saudi Arabia (+966)</option>
                                                <option value="221" label="Senegal (+221)">Senegal (+221)</option>
                                                <option value="381" label="Serbia (+381)">Serbia (+381)</option>
                                                <option value="248" label="Seychelles (+248)">Seychelles (+248)</option>
                                                <option value="232" label="Sierra Leone (+232)">Sierra Leone (+232)</option>
                                                <option value="65" label="Singapore (+65)">Singapore (+65)</option>
                                                <option value="421" label="Slovakia (+421)">Slovakia (+421)</option>
                                                <option value="386" label="Slovenia (+386)">Slovenia (+386)</option>
                                                <option value="677" label="Solomon Islands (+677)">Solomon Islands (+677)</option>
                                                <option value="27" label="South Africa (+27)">South Africa (+27)</option>
                                                <option value="500" label="South Georgia and the South Sandwich Islands (+500)">South Georgia and the South Sandwich Islands (+500)</option>
                                                <option value="34" label="Spain (+34)">Spain (+34)</option>
                                                <option value="94" label="Sri Lanka (+94)">Sri Lanka (+94)</option>
                                                <option value="249" label="Sudan (+249)">Sudan (+249)</option>
                                                <option value="597" label="Suriname (+597)">Suriname (+597)</option>
                                                <option value="268" label="Swaziland (+268)">Swaziland (+268)</option>
                                                <option value="46" label="Sweden (+46)">Sweden (+46)</option>
                                                <option value="41" label="Switzerland (+41)">Switzerland (+41)</option>
                                                <option value="963" label="Syria (+963)">Syria (+963)</option>
                                                <option value="886" label="Taiwan (+886)">Taiwan (+886)</option>
                                                <option value="992" label="Tajikistan (+992)">Tajikistan (+992)</option>
                                                <option value="255" label="Tanzania (+255)">Tanzania (+255)</option>
                                                <option value="66" label="Thailand (+66)">Thailand (+66)</option>
                                                <option value="670" label="Timor Leste (+670)">Timor Leste (+670)</option>
                                                <option value="228" label="Togo (+228)">Togo (+228)</option>
                                                <option value="690" label="Tokelau (+690)">Tokelau (+690)</option>
                                                <option value="676" label="Tonga (+676)">Tonga (+676)</option>
                                                <option value="1868" label="Trinidad and Tobago (+1 868)">Trinidad and Tobago (+1 868)</option>
                                                <option value="216" label="Tunisia (+216)">Tunisia (+216)</option>
                                                <option value="90" label="Turkey (+90)">Turkey (+90)</option>
                                                <option value="993" label="Turkmenistan (+993)">Turkmenistan (+993)</option>
                                                <option value="1649" label="Turks and Caicos Islands (+1 649)">Turks and Caicos Islands (+1 649)</option>
                                                <option value="688" label="Tuvalu (+688)">Tuvalu (+688)</option>
                                                <option value="256" label="Uganda (+256)">Uganda (+256)</option>
                                                <option value="380" label="Ukraine (+380)">Ukraine (+380)</option>
                                                <option value="971" label="United Arab Emirates (+971)">United Arab Emirates (+971)</option>
                                                <option value="44" label="United Kingdom (+44)">United Kingdom (+44)</option>
                                                <option value="1" label="United States (+1)">United States (+1)</option>
                                                <option value="598" label="Uruguay (+598)">Uruguay (+598)</option>
                                                <option value="1340" label="U.S. Virgin Islands (+1 340)">U.S. Virgin Islands (+1 340)</option>
                                                <option value="998" label="Uzbekistan (+998)">Uzbekistan (+998)</option>
                                                <option value="678" label="Vanuatu (+678)">Vanuatu (+678)</option>
                                                <option value="58" label="Venezuela (+58)">Venezuela (+58)</option>
                                                <option value="84" label="Vietnam (+84)">Vietnam (+84)</option>
                                                <option value="1808" label="Wake Island (+1 808)">Wake Island (+1 808)</option>
                                                <option value="681" label="Wallis and Futuna (+681)">Wallis and Futuna (+681)</option>
                                                <option value="967" label="Yemen (+967)">Yemen (+967)</option>
                                                <option value="260" label="Zambia (+260)">Zambia (+260)</option>
                                                <option value="255" label="Zanzibar (+255)">Zanzibar (+255)</option>
                                                <option value="263" label="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                             </select>
                                          </div>
                                          <div class="col-md-8 form-group">
                                             <label>Phone number</label>
                                             <input type="number" name="sms" placeholder="" class="form-control" required="required">
                                          </div>
                                          <div class="col-12 form-group">
                                             <label>Message</label>
                                             <textarea rows="3"  name="bodysms" class="form-control" maxlength="160"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="whatsapp">
                                       <h4>WhatsApp</h4>
                                       <div class="row">
                                          <div class="col-md-4 form-group">
                                             <label>Country code</label>
                                             <select class="form-select custom-select" name="wapp_countrycode" required="required">
                                                <option value="" label="--">--</option>
                                                <option value="7840" label="Abkhazia (+7 840)">Abkhazia (+7 840)</option>
                                                <option value="7940" label="Abkhazia (+7 940)">Abkhazia (+7 940)</option>
                                                <option value="93" label="Afghanistan (+93)">Afghanistan (+93)</option>
                                                <option value="355" label="Albania (+355)">Albania (+355)</option>
                                                <option value="213" label="Algeria (+213)">Algeria (+213)</option>
                                                <option value="1684" label="American Samoa (+1 684)">American Samoa (+1 684)</option>
                                                <option value="376" label="Andorra (+376)">Andorra (+376)</option>
                                                <option value="244" label="Angola (+244)">Angola (+244)</option>
                                                <option value="1264" label="Anguilla (+1 264)">Anguilla (+1 264)</option>
                                                <option value="1268" label="Antigua and Barbuda (+1 268)">Antigua and Barbuda (+1 268)</option>
                                                <option value="54" label="Argentina (+54)">Argentina (+54)</option>
                                                <option value="374" label="Armenia (+374)">Armenia (+374)</option>
                                                <option value="297" label="Aruba (+297)">Aruba (+297)</option>
                                                <option value="247" label="Ascension (+247)">Ascension (+247)</option>
                                                <option value="61" label="Australia (+61)">Australia (+61)</option>
                                                <option value="672" label="Australian External Territories (+672)">Australian External Territories (+672)</option>
                                                <option value="43" label="Austria (+43)">Austria (+43)</option>
                                                <option value="994" label="Azerbaijan (+994)">Azerbaijan (+994)</option>
                                                <option value="1242" label="Bahamas (+1 242)">Bahamas (+1 242)</option>
                                                <option value="973" label="Bahrain (+973)">Bahrain (+973)</option>
                                                <option value="880" label="Bangladesh (+880)">Bangladesh (+880)</option>
                                                <option value="1246" label="Barbados (+1 246)">Barbados (+1 246)</option>
                                                <option value="1268" label="Barbuda (+1 268)">Barbuda (+1 268)</option>
                                                <option value="375" label="Belarus (+375)">Belarus (+375)</option>
                                                <option value="32" label="Belgium (+32)">Belgium (+32)</option>
                                                <option value="501" label="Belize (+501)">Belize (+501)</option>
                                                <option value="229" label="Benin (+229)">Benin (+229)</option>
                                                <option value="1441" label="Bermuda (+1 441)">Bermuda (+1 441)</option>
                                                <option value="975" label="Bhutan (+975)">Bhutan (+975)</option>
                                                <option value="591" label="Bolivia (+591)">Bolivia (+591)</option>
                                                <option value="387" label="Bosnia and Herzegovina (+387)">Bosnia and Herzegovina (+387)</option>
                                                <option value="267" label="Botswana (+267)">Botswana (+267)</option>
                                                <option value="55" label="Brazil (+55)">Brazil (+55)</option>
                                                <option value="246" label="British Indian Ocean Territory (+246)">British Indian Ocean Territory (+246)</option>
                                                <option value="1284" label="British Virgin Islands (+1 284)">British Virgin Islands (+1 284)</option>
                                                <option value="673" label="Brunei (+673)">Brunei (+673)</option>
                                                <option value="359" label="Bulgaria (+359)">Bulgaria (+359)</option>
                                                <option value="226" label="Burkina Faso (+226)">Burkina Faso (+226)</option>
                                                <option value="257" label="Burundi (+257)">Burundi (+257)</option>
                                                <option value="855" label="Cambodia (+855)">Cambodia (+855)</option>
                                                <option value="237" label="Cameroon (+237)">Cameroon (+237)</option>
                                                <option value="1" label="Canada (+1)">Canada (+1)</option>
                                                <option value="238" label="Cape Verde (+238)">Cape Verde (+238)</option>
                                                <option value="345" label="Cayman Islands (+345)">Cayman Islands (+345)</option>
                                                <option value="236" label="Central African Republic (+236)">Central African Republic (+236)</option>
                                                <option value="235" label="Chad (+235)">Chad (+235)</option>
                                                <option value="56" label="Chile (+56)">Chile (+56)</option>
                                                <option value="86" label="China (+86)">China (+86)</option>
                                                <option value="61" label="Christmas Island (+61)">Christmas Island (+61)</option>
                                                <option value="61" label="Cocos-Keeling Islands (+61)">Cocos-Keeling Islands (+61)</option>
                                                <option value="57" label="Colombia (+57)">Colombia (+57)</option>
                                                <option value="269" label="Comoros (+269)">Comoros (+269)</option>
                                                <option value="242" label="Congo (+242)">Congo (+242)</option>
                                                <option value="243" label="Congo, Dem. Rep. of (Zaire) (+243)">Congo, Dem. Rep. of (Zaire) (+243)</option>
                                                <option value="682" label="Cook Islands (+682)">Cook Islands (+682)</option>
                                                <option value="506" label="Costa Rica (+506)">Costa Rica (+506)</option>
                                                <option value="225" label="Ivory Coast (+225)">Ivory Coast (+225)</option>
                                                <option value="385" label="Croatia (+385)">Croatia (+385)</option>
                                                <option value="53" label="Cuba (+53)">Cuba (+53)</option>
                                                <option value="599" label="Curacao (+599)">Curacao (+599)</option>
                                                <option value="537" label="Cyprus (+537)">Cyprus (+537)</option>
                                                <option value="420" label="Czech Republic (+420)">Czech Republic (+420)</option>
                                                <option value="45" label="Denmark (+45)">Denmark (+45)</option>
                                                <option value="246" label="Diego Garcia (+246)">Diego Garcia (+246)</option>
                                                <option value="253" label="Djibouti (+253)">Djibouti (+253)</option>
                                                <option value="1767" label="Dominica (+1 767)">Dominica (+1 767)</option>
                                                <option value="1809" label="Dominican Republic (+1 809)">Dominican Republic (+1 809)</option>
                                                <option value="1829" label="Dominican Republic (+1 829)">Dominican Republic (+1 829)</option>
                                                <option value="1849" label="Dominican Republic (+1 849)">Dominican Republic (+1 849)</option>
                                                <option value="670" label="East Timor (+670)">East Timor (+670)</option>
                                                <option value="56" label="Easter Island (+56)">Easter Island (+56)</option>
                                                <option value="593" label="Ecuador (+593)">Ecuador (+593)</option>
                                                <option value="20" label="Egypt (+20)">Egypt (+20)</option>
                                                <option value="503" label="El Salvador (+503)">El Salvador (+503)</option>
                                                <option value="240" label="Equatorial Guinea (+240)">Equatorial Guinea (+240)</option>
                                                <option value="291" label="Eritrea (+291)">Eritrea (+291)</option>
                                                <option value="372" label="Estonia (+372)">Estonia (+372)</option>
                                                <option value="251" label="Ethiopia (+251)">Ethiopia (+251)</option>
                                                <option value="500" label="Falkland Islands (+500)">Falkland Islands (+500)</option>
                                                <option value="298" label="Faroe Islands (+298)">Faroe Islands (+298)</option>
                                                <option value="679" label="Fiji (+679)">Fiji (+679)</option>
                                                <option value="358" label="Finland (+358)">Finland (+358)</option>
                                                <option value="33" label="France (+33)">France (+33)</option>
                                                <option value="596" label="French Antilles (+596)">French Antilles (+596)</option>
                                                <option value="594" label="French Guiana (+594)">French Guiana (+594)</option>
                                                <option value="689" label="French Polynesia (+689)">French Polynesia (+689)</option>
                                                <option value="241" label="Gabon (+241)">Gabon (+241)</option>
                                                <option value="220" label="Gambia (+220)">Gambia (+220)</option>
                                                <option value="995" label="Georgia (+995)">Georgia (+995)</option>
                                                <option value="49" label="Germany (+49)">Germany (+49)</option>
                                                <option value="233" label="Ghana (+233)">Ghana (+233)</option>
                                                <option value="350" label="Gibraltar (+350)">Gibraltar (+350)</option>
                                                <option value="30" label="Greece (+30)">Greece (+30)</option>
                                                <option value="299" label="Greenland (+299)">Greenland (+299)</option>
                                                <option value="1473" label="Grenada (+1 473)">Grenada (+1 473)</option>
                                                <option value="590" label="Guadeloupe (+590)">Guadeloupe (+590)</option>
                                                <option value="1671" label="Guam (+1 671)">Guam (+1 671)</option>
                                                <option value="502" label="Guatemala (+502)">Guatemala (+502)</option>
                                                <option value="224" label="Guinea (+224)">Guinea (+224)</option>
                                                <option value="245" label="Guinea-Bissau (+245)">Guinea-Bissau (+245)</option>
                                                <option value="595" label="Guyana (+595)">Guyana (+595)</option>
                                                <option value="509" label="Haiti (+509)">Haiti (+509)</option>
                                                <option value="504" label="Honduras (+504)">Honduras (+504)</option>
                                                <option value="852" label="Hong Kong SAR China (+852)">Hong Kong SAR China (+852)</option>
                                                <option value="36" label="Hungary (+36)">Hungary (+36)</option>
                                                <option value="354" label="Iceland (+354)">Iceland (+354)</option>
                                                <option value="91" label="India (+91)">India (+91)</option>
                                                <option value="62" label="Indonesia (+62)">Indonesia (+62)</option>
                                                <option value="98" label="Iran (+98)">Iran (+98)</option>
                                                <option value="964" label="Iraq (+964)">Iraq (+964)</option>
                                                <option value="353" label="Ireland (+353)">Ireland (+353)</option>
                                                <option value="972" label="Israel (+972)">Israel (+972)</option>
                                                <option value="39" label="Italy (+39)">Italy (+39)</option>
                                                <option value="1876" label="Jamaica (+1 876)">Jamaica (+1 876)</option>
                                                <option value="81" label="Japan (+81)">Japan (+81)</option>
                                                <option value="962" label="Jordan (+962)">Jordan (+962)</option>
                                                <option value="77" label="Kazakhstan (+7 7)">Kazakhstan (+7 7)</option>
                                                <option value="254" label="Kenya (+254)">Kenya (+254)</option>
                                                <option value="686" label="Kiribati (+686)">Kiribati (+686)</option>
                                                <option value="850" label="North Korea (+850)">North Korea (+850)</option>
                                                <option value="82" label="South Korea (+82)">South Korea (+82)</option>
                                                <option value="965" label="Kuwait (+965)">Kuwait (+965)</option>
                                                <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan (+996)</option>
                                                <option value="856" label="Laos (+856)">Laos (+856)</option>
                                                <option value="371" label="Latvia (+371)">Latvia (+371)</option>
                                                <option value="961" label="Lebanon (+961)">Lebanon (+961)</option>
                                                <option value="266" label="Lesotho (+266)">Lesotho (+266)</option>
                                                <option value="231" label="Liberia (+231)">Liberia (+231)</option>
                                                <option value="218" label="Libya (+218)">Libya (+218)</option>
                                                <option value="423" label="Liechtenstein (+423)">Liechtenstein (+423)</option>
                                                <option value="370" label="Lithuania (+370)">Lithuania (+370)</option>
                                                <option value="352" label="Luxembourg (+352)">Luxembourg (+352)</option>
                                                <option value="853" label="Macau SAR China (+853)">Macau SAR China (+853)</option>
                                                <option value="389" label="Macedonia (+389)">Macedonia (+389)</option>
                                                <option value="261" label="Madagascar (+261)">Madagascar (+261)</option>
                                                <option value="265" label="Malawi (+265)">Malawi (+265)</option>
                                                <option value="60" label="Malaysia (+60)">Malaysia (+60)</option>
                                                <option value="960" label="Maldives (+960)">Maldives (+960)</option>
                                                <option value="223" label="Mali (+223)">Mali (+223)</option>
                                                <option value="356" label="Malta (+356)">Malta (+356)</option>
                                                <option value="692" label="Marshall Islands (+692)">Marshall Islands (+692)</option>
                                                <option value="596" label="Martinique (+596)">Martinique (+596)</option>
                                                <option value="222" label="Mauritania (+222)">Mauritania (+222)</option>
                                                <option value="230" label="Mauritius (+230)">Mauritius (+230)</option>
                                                <option value="262" label="Mayotte (+262)">Mayotte (+262)</option>
                                                <option value="52" label="Mexico (+52)">Mexico (+52)</option>
                                                <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                <option value="1808" label="Midway Island (+1 808)">Midway Island (+1 808)</option>
                                                <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                <option value="373" label="Moldova (+373)">Moldova (+373)</option>
                                                <option value="377" label="Monaco (+377)">Monaco (+377)</option>
                                                <option value="976" label="Mongolia (+976)">Mongolia (+976)</option>
                                                <option value="382" label="Montenegro (+382)">Montenegro (+382)</option>
                                                <option value="1664" label="Montserrat (+1664)">Montserrat (+1664)</option>
                                                <option value="212" label="Morocco (+212)">Morocco (+212)</option>
                                                <option value="95" label="Myanmar (+95)">Myanmar (+95)</option>
                                                <option value="264" label="Namibia (+264)">Namibia (+264)</option>
                                                <option value="674" label="Nauru (+674)">Nauru (+674)</option>
                                                <option value="977" label="Nepal (+977)">Nepal (+977)</option>
                                                <option value="31" label="Netherlands (+31)">Netherlands (+31)</option>
                                                <option value="599" label="Netherlands Antilles (+599)">Netherlands Antilles (+599)</option>
                                                <option value="1869" label="Nevis (+1 869)">Nevis (+1 869)</option>
                                                <option value="687" label="New Caledonia (+687)">New Caledonia (+687)</option>
                                                <option value="64" label="New Zealand (64)">New Zealand (64)</option>
                                                <option value="505" label="Nicaragua (+505)">Nicaragua (+505)</option>
                                                <option value="227" label="Niger (+227)">Niger (+227)</option>
                                                <option value="234" label="Nigeria (+234)">Nigeria (+234)</option>
                                                <option value="683" label="Niue (+683)">Niue (+683)</option>
                                                <option value="672" label="Norfolk Island (+672)">Norfolk Island (+672)</option>
                                                <option value="1670" label="Northern Mariana Islands (+1 670)">Northern Mariana Islands (+1 670)</option>
                                                <option value="47" label="Norway (+47)">Norway (+47)</option>
                                                <option value="968" label="Oman (+968)">Oman (+968)</option>
                                                <option value="92" label="Pakistan (+92)">Pakistan (+92)</option>
                                                <option value="680" label="Palau (+680)">Palau (+680)</option>
                                                <option value="970" label="Palestinian Territory (+970)">Palestinian Territory (+970)</option>
                                                <option value="507" label="Panama (+507)">Panama (+507)</option>
                                                <option value="675" label="Papua New Guinea (+675)">Papua New Guinea (+675)</option>
                                                <option value="595" label="Paraguay (+595)">Paraguay (+595)</option>
                                                <option value="51" label="Peru (+51)">Peru (+51)</option>
                                                <option value="63" label="Philippines (+63)">Philippines (+63)</option>
                                                <option value="48" label="Poland (+48)">Poland (+48)</option>
                                                <option value="351" label="Portugal (+351)">Portugal (+351)</option>
                                                <option value="1787" label="Puerto Rico (+1 787)">Puerto Rico (+1 787)</option>
                                                <option value="1939" label="Puerto Rico (+1 939)">Puerto Rico (+1 939)</option>
                                                <option value="974" label="Qatar (+974)">Qatar (+974)</option>
                                                <option value="262" label="Reunion (+262)">Reunion (+262)</option>
                                                <option value="40" label="Romania (+40)">Romania (+40)</option>
                                                <option value="7" label="Russia (+7)">Russia (+7)</option>
                                                <option value="250" label="Rwanda (+250)">Rwanda (+250)</option>
                                                <option value="685" label="Samoa (+685)">Samoa (+685)</option>
                                                <option value="378" label="San Marino (+378)">San Marino (+378)</option>
                                                <option value="966" label="Saudi Arabia (+966)">Saudi Arabia (+966)</option>
                                                <option value="221" label="Senegal (+221)">Senegal (+221)</option>
                                                <option value="381" label="Serbia (+381)">Serbia (+381)</option>
                                                <option value="248" label="Seychelles (+248)">Seychelles (+248)</option>
                                                <option value="232" label="Sierra Leone (+232)">Sierra Leone (+232)</option>
                                                <option value="65" label="Singapore (+65)">Singapore (+65)</option>
                                                <option value="421" label="Slovakia (+421)">Slovakia (+421)</option>
                                                <option value="386" label="Slovenia (+386)">Slovenia (+386)</option>
                                                <option value="677" label="Solomon Islands (+677)">Solomon Islands (+677)</option>
                                                <option value="27" label="South Africa (+27)">South Africa (+27)</option>
                                                <option value="500" label="South Georgia and the South Sandwich Islands (+500)">South Georgia and the South Sandwich Islands (+500)</option>
                                                <option value="34" label="Spain (+34)">Spain (+34)</option>
                                                <option value="94" label="Sri Lanka (+94)">Sri Lanka (+94)</option>
                                                <option value="249" label="Sudan (+249)">Sudan (+249)</option>
                                                <option value="597" label="Suriname (+597)">Suriname (+597)</option>
                                                <option value="268" label="Swaziland (+268)">Swaziland (+268)</option>
                                                <option value="46" label="Sweden (+46)">Sweden (+46)</option>
                                                <option value="41" label="Switzerland (+41)">Switzerland (+41)</option>
                                                <option value="963" label="Syria (+963)">Syria (+963)</option>
                                                <option value="886" label="Taiwan (+886)">Taiwan (+886)</option>
                                                <option value="992" label="Tajikistan (+992)">Tajikistan (+992)</option>
                                                <option value="255" label="Tanzania (+255)">Tanzania (+255)</option>
                                                <option value="66" label="Thailand (+66)">Thailand (+66)</option>
                                                <option value="670" label="Timor Leste (+670)">Timor Leste (+670)</option>
                                                <option value="228" label="Togo (+228)">Togo (+228)</option>
                                                <option value="690" label="Tokelau (+690)">Tokelau (+690)</option>
                                                <option value="676" label="Tonga (+676)">Tonga (+676)</option>
                                                <option value="1868" label="Trinidad and Tobago (+1 868)">Trinidad and Tobago (+1 868)</option>
                                                <option value="216" label="Tunisia (+216)">Tunisia (+216)</option>
                                                <option value="90" label="Turkey (+90)">Turkey (+90)</option>
                                                <option value="993" label="Turkmenistan (+993)">Turkmenistan (+993)</option>
                                                <option value="1649" label="Turks and Caicos Islands (+1 649)">Turks and Caicos Islands (+1 649)</option>
                                                <option value="688" label="Tuvalu (+688)">Tuvalu (+688)</option>
                                                <option value="256" label="Uganda (+256)">Uganda (+256)</option>
                                                <option value="380" label="Ukraine (+380)">Ukraine (+380)</option>
                                                <option value="971" label="United Arab Emirates (+971)">United Arab Emirates (+971)</option>
                                                <option value="44" label="United Kingdom (+44)">United Kingdom (+44)</option>
                                                <option value="1" label="United States (+1)">United States (+1)</option>
                                                <option value="598" label="Uruguay (+598)">Uruguay (+598)</option>
                                                <option value="1340" label="U.S. Virgin Islands (+1 340)">U.S. Virgin Islands (+1 340)</option>
                                                <option value="998" label="Uzbekistan (+998)">Uzbekistan (+998)</option>
                                                <option value="678" label="Vanuatu (+678)">Vanuatu (+678)</option>
                                                <option value="58" label="Venezuela (+58)">Venezuela (+58)</option>
                                                <option value="84" label="Vietnam (+84)">Vietnam (+84)</option>
                                                <option value="1808" label="Wake Island (+1 808)">Wake Island (+1 808)</option>
                                                <option value="681" label="Wallis and Futuna (+681)">Wallis and Futuna (+681)</option>
                                                <option value="967" label="Yemen (+967)">Yemen (+967)</option>
                                                <option value="260" label="Zambia (+260)">Zambia (+260)</option>
                                                <option value="255" label="Zanzibar (+255)">Zanzibar (+255)</option>
                                                <option value="263" label="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                             </select>
                                          </div>
                                          <div class="col-md-8 form-group">
                                             <label>Phone number</label>
                                             <input type="number" name="wapp_number" placeholder="" class="form-control" required="required">
                                          </div>
                                          <div class="col-12 form-group">
                                             <label>Message</label>
                                             <textarea rows="3"  name="wapp_message" class="form-control" maxlength="750"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="skype">
                                       <h4>Skype</h4>
                                       <div class="form-group">
                                          <div class="form-check form-check-inline">
                                             <input type="radio" id="skypeType1" name="skypeType" class="form-check-input" value="chat" checked>
                                             <label class="form-check-label" for="skypeType1">Chat</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input type="radio" id="skypeType2" name="skypeType" class="form-check-input" value="call">
                                             <label class="form-check-label" for="skypeType2">Call</label>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="skype">Username</label>
                                          <input type="text" name="skype" id="skype" class="form-control" required="required" />
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="zoom">
                                       <h4>Zoom</h4>
                                       <div class="row form-group">
                                          <div class="col-sm-6">
                                             <label for="zoom_id">Meeting ID</label>
                                             <input type="text" name="zoom_id" id="zoom_id" class="form-control" required="required" />
                                          </div>
                                          <div class="col-sm-6">
                                             <label for="zoom_pwd">Password</label>
                                             <input type="text" name="zoom_pwd" id="zoom_pwd" class="form-control" required="required" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="wifi">
                                       <h4>WI-FI</h4>
                                       <div class="row form-group">
                                          <div class="col-md-4">
                                             <label>Network name</label>
                                             <input type="text" name="ssid" placeholder="SSID" class="form-control" required="required">
                                          </div>
                                          <div class="col-md-4">
                                             <label>Network type</label>
                                             <select class="form-select custom-select" name="networktype">
                                                <option value="WEP">WEP</option>
                                                <option value="WPA">WPA/WPA2</option>
                                                <option value="">No encryption</option>
                                             </select>
                                          </div>
                                          <div class="col-md-4">
                                             <label>Password</label>
                                             <input type="text" name="wifipass" class="form-control">
                                          </div>
                                       </div>
                                       <div class="row form-group">
                                          <div class="col-12">
                                             <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="wifihidden" name="wifihidden">
                                                <label class="form-check-label" for="wifihidden">Hidden</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="vcard">
                                       <h4>V-card</h4>
                                       <div class="row">
                                          <div class="col-12 form-group">
                                             <label>Version</label>
                                             <select class="form-select custom-select" name="vversion">
                                                <option value="2.1">2.1</option>
                                                <option value="3.0">3.0</option>
                                                <!--
                                                   <option value="4.0">4.0</option>
                                                     -->
                                             </select>
                                          </div>
                                          <div class="col-md-2 form-group">
                                             <label>Title</label>
                                             <input type="text" name="vnametitle" class="form-control">
                                          </div>
                                          <div class="col-md-5 form-group">
                                             <label>First name</label>
                                             <input type="text" name="vname" class="form-control" required="required">
                                          </div>
                                          <div class="col-md-5 form-group">
                                             <label>Last name</label>
                                             <input type="text" name="vlast" class="form-control">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>Phone (home)</label>
                                             <div class="row no-gutters">
                                                <div class="col-4">
                                                   <select class="form-select custom-select" name="countrycodevphone">
                                                      <option value="" label="--">--</option>
                                                      <option value="7840" label="Abkhazia (+7 840)">Abkhazia (+7 840)</option>
                                                      <option value="7940" label="Abkhazia (+7 940)">Abkhazia (+7 940)</option>
                                                      <option value="93" label="Afghanistan (+93)">Afghanistan (+93)</option>
                                                      <option value="355" label="Albania (+355)">Albania (+355)</option>
                                                      <option value="213" label="Algeria (+213)">Algeria (+213)</option>
                                                      <option value="1684" label="American Samoa (+1 684)">American Samoa (+1 684)</option>
                                                      <option value="376" label="Andorra (+376)">Andorra (+376)</option>
                                                      <option value="244" label="Angola (+244)">Angola (+244)</option>
                                                      <option value="1264" label="Anguilla (+1 264)">Anguilla (+1 264)</option>
                                                      <option value="1268" label="Antigua and Barbuda (+1 268)">Antigua and Barbuda (+1 268)</option>
                                                      <option value="54" label="Argentina (+54)">Argentina (+54)</option>
                                                      <option value="374" label="Armenia (+374)">Armenia (+374)</option>
                                                      <option value="297" label="Aruba (+297)">Aruba (+297)</option>
                                                      <option value="247" label="Ascension (+247)">Ascension (+247)</option>
                                                      <option value="61" label="Australia (+61)">Australia (+61)</option>
                                                      <option value="672" label="Australian External Territories (+672)">Australian External Territories (+672)</option>
                                                      <option value="43" label="Austria (+43)">Austria (+43)</option>
                                                      <option value="994" label="Azerbaijan (+994)">Azerbaijan (+994)</option>
                                                      <option value="1242" label="Bahamas (+1 242)">Bahamas (+1 242)</option>
                                                      <option value="973" label="Bahrain (+973)">Bahrain (+973)</option>
                                                      <option value="880" label="Bangladesh (+880)">Bangladesh (+880)</option>
                                                      <option value="1246" label="Barbados (+1 246)">Barbados (+1 246)</option>
                                                      <option value="1268" label="Barbuda (+1 268)">Barbuda (+1 268)</option>
                                                      <option value="375" label="Belarus (+375)">Belarus (+375)</option>
                                                      <option value="32" label="Belgium (+32)">Belgium (+32)</option>
                                                      <option value="501" label="Belize (+501)">Belize (+501)</option>
                                                      <option value="229" label="Benin (+229)">Benin (+229)</option>
                                                      <option value="1441" label="Bermuda (+1 441)">Bermuda (+1 441)</option>
                                                      <option value="975" label="Bhutan (+975)">Bhutan (+975)</option>
                                                      <option value="591" label="Bolivia (+591)">Bolivia (+591)</option>
                                                      <option value="387" label="Bosnia and Herzegovina (+387)">Bosnia and Herzegovina (+387)</option>
                                                      <option value="267" label="Botswana (+267)">Botswana (+267)</option>
                                                      <option value="55" label="Brazil (+55)">Brazil (+55)</option>
                                                      <option value="246" label="British Indian Ocean Territory (+246)">British Indian Ocean Territory (+246)</option>
                                                      <option value="1284" label="British Virgin Islands (+1 284)">British Virgin Islands (+1 284)</option>
                                                      <option value="673" label="Brunei (+673)">Brunei (+673)</option>
                                                      <option value="359" label="Bulgaria (+359)">Bulgaria (+359)</option>
                                                      <option value="226" label="Burkina Faso (+226)">Burkina Faso (+226)</option>
                                                      <option value="257" label="Burundi (+257)">Burundi (+257)</option>
                                                      <option value="855" label="Cambodia (+855)">Cambodia (+855)</option>
                                                      <option value="237" label="Cameroon (+237)">Cameroon (+237)</option>
                                                      <option value="1" label="Canada (+1)">Canada (+1)</option>
                                                      <option value="238" label="Cape Verde (+238)">Cape Verde (+238)</option>
                                                      <option value="345" label="Cayman Islands (+345)">Cayman Islands (+345)</option>
                                                      <option value="236" label="Central African Republic (+236)">Central African Republic (+236)</option>
                                                      <option value="235" label="Chad (+235)">Chad (+235)</option>
                                                      <option value="56" label="Chile (+56)">Chile (+56)</option>
                                                      <option value="86" label="China (+86)">China (+86)</option>
                                                      <option value="61" label="Christmas Island (+61)">Christmas Island (+61)</option>
                                                      <option value="61" label="Cocos-Keeling Islands (+61)">Cocos-Keeling Islands (+61)</option>
                                                      <option value="57" label="Colombia (+57)">Colombia (+57)</option>
                                                      <option value="269" label="Comoros (+269)">Comoros (+269)</option>
                                                      <option value="242" label="Congo (+242)">Congo (+242)</option>
                                                      <option value="243" label="Congo, Dem. Rep. of (Zaire) (+243)">Congo, Dem. Rep. of (Zaire) (+243)</option>
                                                      <option value="682" label="Cook Islands (+682)">Cook Islands (+682)</option>
                                                      <option value="506" label="Costa Rica (+506)">Costa Rica (+506)</option>
                                                      <option value="225" label="Ivory Coast (+225)">Ivory Coast (+225)</option>
                                                      <option value="385" label="Croatia (+385)">Croatia (+385)</option>
                                                      <option value="53" label="Cuba (+53)">Cuba (+53)</option>
                                                      <option value="599" label="Curacao (+599)">Curacao (+599)</option>
                                                      <option value="537" label="Cyprus (+537)">Cyprus (+537)</option>
                                                      <option value="420" label="Czech Republic (+420)">Czech Republic (+420)</option>
                                                      <option value="45" label="Denmark (+45)">Denmark (+45)</option>
                                                      <option value="246" label="Diego Garcia (+246)">Diego Garcia (+246)</option>
                                                      <option value="253" label="Djibouti (+253)">Djibouti (+253)</option>
                                                      <option value="1767" label="Dominica (+1 767)">Dominica (+1 767)</option>
                                                      <option value="1809" label="Dominican Republic (+1 809)">Dominican Republic (+1 809)</option>
                                                      <option value="1829" label="Dominican Republic (+1 829)">Dominican Republic (+1 829)</option>
                                                      <option value="1849" label="Dominican Republic (+1 849)">Dominican Republic (+1 849)</option>
                                                      <option value="670" label="East Timor (+670)">East Timor (+670)</option>
                                                      <option value="56" label="Easter Island (+56)">Easter Island (+56)</option>
                                                      <option value="593" label="Ecuador (+593)">Ecuador (+593)</option>
                                                      <option value="20" label="Egypt (+20)">Egypt (+20)</option>
                                                      <option value="503" label="El Salvador (+503)">El Salvador (+503)</option>
                                                      <option value="240" label="Equatorial Guinea (+240)">Equatorial Guinea (+240)</option>
                                                      <option value="291" label="Eritrea (+291)">Eritrea (+291)</option>
                                                      <option value="372" label="Estonia (+372)">Estonia (+372)</option>
                                                      <option value="251" label="Ethiopia (+251)">Ethiopia (+251)</option>
                                                      <option value="500" label="Falkland Islands (+500)">Falkland Islands (+500)</option>
                                                      <option value="298" label="Faroe Islands (+298)">Faroe Islands (+298)</option>
                                                      <option value="679" label="Fiji (+679)">Fiji (+679)</option>
                                                      <option value="358" label="Finland (+358)">Finland (+358)</option>
                                                      <option value="33" label="France (+33)">France (+33)</option>
                                                      <option value="596" label="French Antilles (+596)">French Antilles (+596)</option>
                                                      <option value="594" label="French Guiana (+594)">French Guiana (+594)</option>
                                                      <option value="689" label="French Polynesia (+689)">French Polynesia (+689)</option>
                                                      <option value="241" label="Gabon (+241)">Gabon (+241)</option>
                                                      <option value="220" label="Gambia (+220)">Gambia (+220)</option>
                                                      <option value="995" label="Georgia (+995)">Georgia (+995)</option>
                                                      <option value="49" label="Germany (+49)">Germany (+49)</option>
                                                      <option value="233" label="Ghana (+233)">Ghana (+233)</option>
                                                      <option value="350" label="Gibraltar (+350)">Gibraltar (+350)</option>
                                                      <option value="30" label="Greece (+30)">Greece (+30)</option>
                                                      <option value="299" label="Greenland (+299)">Greenland (+299)</option>
                                                      <option value="1473" label="Grenada (+1 473)">Grenada (+1 473)</option>
                                                      <option value="590" label="Guadeloupe (+590)">Guadeloupe (+590)</option>
                                                      <option value="1671" label="Guam (+1 671)">Guam (+1 671)</option>
                                                      <option value="502" label="Guatemala (+502)">Guatemala (+502)</option>
                                                      <option value="224" label="Guinea (+224)">Guinea (+224)</option>
                                                      <option value="245" label="Guinea-Bissau (+245)">Guinea-Bissau (+245)</option>
                                                      <option value="595" label="Guyana (+595)">Guyana (+595)</option>
                                                      <option value="509" label="Haiti (+509)">Haiti (+509)</option>
                                                      <option value="504" label="Honduras (+504)">Honduras (+504)</option>
                                                      <option value="852" label="Hong Kong SAR China (+852)">Hong Kong SAR China (+852)</option>
                                                      <option value="36" label="Hungary (+36)">Hungary (+36)</option>
                                                      <option value="354" label="Iceland (+354)">Iceland (+354)</option>
                                                      <option value="91" label="India (+91)">India (+91)</option>
                                                      <option value="62" label="Indonesia (+62)">Indonesia (+62)</option>
                                                      <option value="98" label="Iran (+98)">Iran (+98)</option>
                                                      <option value="964" label="Iraq (+964)">Iraq (+964)</option>
                                                      <option value="353" label="Ireland (+353)">Ireland (+353)</option>
                                                      <option value="972" label="Israel (+972)">Israel (+972)</option>
                                                      <option value="39" label="Italy (+39)">Italy (+39)</option>
                                                      <option value="1876" label="Jamaica (+1 876)">Jamaica (+1 876)</option>
                                                      <option value="81" label="Japan (+81)">Japan (+81)</option>
                                                      <option value="962" label="Jordan (+962)">Jordan (+962)</option>
                                                      <option value="77" label="Kazakhstan (+7 7)">Kazakhstan (+7 7)</option>
                                                      <option value="254" label="Kenya (+254)">Kenya (+254)</option>
                                                      <option value="686" label="Kiribati (+686)">Kiribati (+686)</option>
                                                      <option value="850" label="North Korea (+850)">North Korea (+850)</option>
                                                      <option value="82" label="South Korea (+82)">South Korea (+82)</option>
                                                      <option value="965" label="Kuwait (+965)">Kuwait (+965)</option>
                                                      <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan (+996)</option>
                                                      <option value="856" label="Laos (+856)">Laos (+856)</option>
                                                      <option value="371" label="Latvia (+371)">Latvia (+371)</option>
                                                      <option value="961" label="Lebanon (+961)">Lebanon (+961)</option>
                                                      <option value="266" label="Lesotho (+266)">Lesotho (+266)</option>
                                                      <option value="231" label="Liberia (+231)">Liberia (+231)</option>
                                                      <option value="218" label="Libya (+218)">Libya (+218)</option>
                                                      <option value="423" label="Liechtenstein (+423)">Liechtenstein (+423)</option>
                                                      <option value="370" label="Lithuania (+370)">Lithuania (+370)</option>
                                                      <option value="352" label="Luxembourg (+352)">Luxembourg (+352)</option>
                                                      <option value="853" label="Macau SAR China (+853)">Macau SAR China (+853)</option>
                                                      <option value="389" label="Macedonia (+389)">Macedonia (+389)</option>
                                                      <option value="261" label="Madagascar (+261)">Madagascar (+261)</option>
                                                      <option value="265" label="Malawi (+265)">Malawi (+265)</option>
                                                      <option value="60" label="Malaysia (+60)">Malaysia (+60)</option>
                                                      <option value="960" label="Maldives (+960)">Maldives (+960)</option>
                                                      <option value="223" label="Mali (+223)">Mali (+223)</option>
                                                      <option value="356" label="Malta (+356)">Malta (+356)</option>
                                                      <option value="692" label="Marshall Islands (+692)">Marshall Islands (+692)</option>
                                                      <option value="596" label="Martinique (+596)">Martinique (+596)</option>
                                                      <option value="222" label="Mauritania (+222)">Mauritania (+222)</option>
                                                      <option value="230" label="Mauritius (+230)">Mauritius (+230)</option>
                                                      <option value="262" label="Mayotte (+262)">Mayotte (+262)</option>
                                                      <option value="52" label="Mexico (+52)">Mexico (+52)</option>
                                                      <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                      <option value="1808" label="Midway Island (+1 808)">Midway Island (+1 808)</option>
                                                      <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                      <option value="373" label="Moldova (+373)">Moldova (+373)</option>
                                                      <option value="377" label="Monaco (+377)">Monaco (+377)</option>
                                                      <option value="976" label="Mongolia (+976)">Mongolia (+976)</option>
                                                      <option value="382" label="Montenegro (+382)">Montenegro (+382)</option>
                                                      <option value="1664" label="Montserrat (+1664)">Montserrat (+1664)</option>
                                                      <option value="212" label="Morocco (+212)">Morocco (+212)</option>
                                                      <option value="95" label="Myanmar (+95)">Myanmar (+95)</option>
                                                      <option value="264" label="Namibia (+264)">Namibia (+264)</option>
                                                      <option value="674" label="Nauru (+674)">Nauru (+674)</option>
                                                      <option value="977" label="Nepal (+977)">Nepal (+977)</option>
                                                      <option value="31" label="Netherlands (+31)">Netherlands (+31)</option>
                                                      <option value="599" label="Netherlands Antilles (+599)">Netherlands Antilles (+599)</option>
                                                      <option value="1869" label="Nevis (+1 869)">Nevis (+1 869)</option>
                                                      <option value="687" label="New Caledonia (+687)">New Caledonia (+687)</option>
                                                      <option value="64" label="New Zealand (64)">New Zealand (64)</option>
                                                      <option value="505" label="Nicaragua (+505)">Nicaragua (+505)</option>
                                                      <option value="227" label="Niger (+227)">Niger (+227)</option>
                                                      <option value="234" label="Nigeria (+234)">Nigeria (+234)</option>
                                                      <option value="683" label="Niue (+683)">Niue (+683)</option>
                                                      <option value="672" label="Norfolk Island (+672)">Norfolk Island (+672)</option>
                                                      <option value="1670" label="Northern Mariana Islands (+1 670)">Northern Mariana Islands (+1 670)</option>
                                                      <option value="47" label="Norway (+47)">Norway (+47)</option>
                                                      <option value="968" label="Oman (+968)">Oman (+968)</option>
                                                      <option value="92" label="Pakistan (+92)">Pakistan (+92)</option>
                                                      <option value="680" label="Palau (+680)">Palau (+680)</option>
                                                      <option value="970" label="Palestinian Territory (+970)">Palestinian Territory (+970)</option>
                                                      <option value="507" label="Panama (+507)">Panama (+507)</option>
                                                      <option value="675" label="Papua New Guinea (+675)">Papua New Guinea (+675)</option>
                                                      <option value="595" label="Paraguay (+595)">Paraguay (+595)</option>
                                                      <option value="51" label="Peru (+51)">Peru (+51)</option>
                                                      <option value="63" label="Philippines (+63)">Philippines (+63)</option>
                                                      <option value="48" label="Poland (+48)">Poland (+48)</option>
                                                      <option value="351" label="Portugal (+351)">Portugal (+351)</option>
                                                      <option value="1787" label="Puerto Rico (+1 787)">Puerto Rico (+1 787)</option>
                                                      <option value="1939" label="Puerto Rico (+1 939)">Puerto Rico (+1 939)</option>
                                                      <option value="974" label="Qatar (+974)">Qatar (+974)</option>
                                                      <option value="262" label="Reunion (+262)">Reunion (+262)</option>
                                                      <option value="40" label="Romania (+40)">Romania (+40)</option>
                                                      <option value="7" label="Russia (+7)">Russia (+7)</option>
                                                      <option value="250" label="Rwanda (+250)">Rwanda (+250)</option>
                                                      <option value="685" label="Samoa (+685)">Samoa (+685)</option>
                                                      <option value="378" label="San Marino (+378)">San Marino (+378)</option>
                                                      <option value="966" label="Saudi Arabia (+966)">Saudi Arabia (+966)</option>
                                                      <option value="221" label="Senegal (+221)">Senegal (+221)</option>
                                                      <option value="381" label="Serbia (+381)">Serbia (+381)</option>
                                                      <option value="248" label="Seychelles (+248)">Seychelles (+248)</option>
                                                      <option value="232" label="Sierra Leone (+232)">Sierra Leone (+232)</option>
                                                      <option value="65" label="Singapore (+65)">Singapore (+65)</option>
                                                      <option value="421" label="Slovakia (+421)">Slovakia (+421)</option>
                                                      <option value="386" label="Slovenia (+386)">Slovenia (+386)</option>
                                                      <option value="677" label="Solomon Islands (+677)">Solomon Islands (+677)</option>
                                                      <option value="27" label="South Africa (+27)">South Africa (+27)</option>
                                                      <option value="500" label="South Georgia and the South Sandwich Islands (+500)">South Georgia and the South Sandwich Islands (+500)</option>
                                                      <option value="34" label="Spain (+34)">Spain (+34)</option>
                                                      <option value="94" label="Sri Lanka (+94)">Sri Lanka (+94)</option>
                                                      <option value="249" label="Sudan (+249)">Sudan (+249)</option>
                                                      <option value="597" label="Suriname (+597)">Suriname (+597)</option>
                                                      <option value="268" label="Swaziland (+268)">Swaziland (+268)</option>
                                                      <option value="46" label="Sweden (+46)">Sweden (+46)</option>
                                                      <option value="41" label="Switzerland (+41)">Switzerland (+41)</option>
                                                      <option value="963" label="Syria (+963)">Syria (+963)</option>
                                                      <option value="886" label="Taiwan (+886)">Taiwan (+886)</option>
                                                      <option value="992" label="Tajikistan (+992)">Tajikistan (+992)</option>
                                                      <option value="255" label="Tanzania (+255)">Tanzania (+255)</option>
                                                      <option value="66" label="Thailand (+66)">Thailand (+66)</option>
                                                      <option value="670" label="Timor Leste (+670)">Timor Leste (+670)</option>
                                                      <option value="228" label="Togo (+228)">Togo (+228)</option>
                                                      <option value="690" label="Tokelau (+690)">Tokelau (+690)</option>
                                                      <option value="676" label="Tonga (+676)">Tonga (+676)</option>
                                                      <option value="1868" label="Trinidad and Tobago (+1 868)">Trinidad and Tobago (+1 868)</option>
                                                      <option value="216" label="Tunisia (+216)">Tunisia (+216)</option>
                                                      <option value="90" label="Turkey (+90)">Turkey (+90)</option>
                                                      <option value="993" label="Turkmenistan (+993)">Turkmenistan (+993)</option>
                                                      <option value="1649" label="Turks and Caicos Islands (+1 649)">Turks and Caicos Islands (+1 649)</option>
                                                      <option value="688" label="Tuvalu (+688)">Tuvalu (+688)</option>
                                                      <option value="256" label="Uganda (+256)">Uganda (+256)</option>
                                                      <option value="380" label="Ukraine (+380)">Ukraine (+380)</option>
                                                      <option value="971" label="United Arab Emirates (+971)">United Arab Emirates (+971)</option>
                                                      <option value="44" label="United Kingdom (+44)">United Kingdom (+44)</option>
                                                      <option value="1" label="United States (+1)">United States (+1)</option>
                                                      <option value="598" label="Uruguay (+598)">Uruguay (+598)</option>
                                                      <option value="1340" label="U.S. Virgin Islands (+1 340)">U.S. Virgin Islands (+1 340)</option>
                                                      <option value="998" label="Uzbekistan (+998)">Uzbekistan (+998)</option>
                                                      <option value="678" label="Vanuatu (+678)">Vanuatu (+678)</option>
                                                      <option value="58" label="Venezuela (+58)">Venezuela (+58)</option>
                                                      <option value="84" label="Vietnam (+84)">Vietnam (+84)</option>
                                                      <option value="1808" label="Wake Island (+1 808)">Wake Island (+1 808)</option>
                                                      <option value="681" label="Wallis and Futuna (+681)">Wallis and Futuna (+681)</option>
                                                      <option value="967" label="Yemen (+967)">Yemen (+967)</option>
                                                      <option value="260" label="Zambia (+260)">Zambia (+260)</option>
                                                      <option value="255" label="Zanzibar (+255)">Zanzibar (+255)</option>
                                                      <option value="263" label="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                                   </select>
                                                </div>
                                                <div class="col-8">
                                                   <input type="number" name="vphone" placeholder="" class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>Phone (mobile)</label>
                                             <div class="row no-gutters">
                                                <div class="col-4">
                                                   <select class="form-select custom-select" name="countrycodevmobile">
                                                      <option value="" label="--">--</option>
                                                      <option value="7840" label="Abkhazia (+7 840)">Abkhazia (+7 840)</option>
                                                      <option value="7940" label="Abkhazia (+7 940)">Abkhazia (+7 940)</option>
                                                      <option value="93" label="Afghanistan (+93)">Afghanistan (+93)</option>
                                                      <option value="355" label="Albania (+355)">Albania (+355)</option>
                                                      <option value="213" label="Algeria (+213)">Algeria (+213)</option>
                                                      <option value="1684" label="American Samoa (+1 684)">American Samoa (+1 684)</option>
                                                      <option value="376" label="Andorra (+376)">Andorra (+376)</option>
                                                      <option value="244" label="Angola (+244)">Angola (+244)</option>
                                                      <option value="1264" label="Anguilla (+1 264)">Anguilla (+1 264)</option>
                                                      <option value="1268" label="Antigua and Barbuda (+1 268)">Antigua and Barbuda (+1 268)</option>
                                                      <option value="54" label="Argentina (+54)">Argentina (+54)</option>
                                                      <option value="374" label="Armenia (+374)">Armenia (+374)</option>
                                                      <option value="297" label="Aruba (+297)">Aruba (+297)</option>
                                                      <option value="247" label="Ascension (+247)">Ascension (+247)</option>
                                                      <option value="61" label="Australia (+61)">Australia (+61)</option>
                                                      <option value="672" label="Australian External Territories (+672)">Australian External Territories (+672)</option>
                                                      <option value="43" label="Austria (+43)">Austria (+43)</option>
                                                      <option value="994" label="Azerbaijan (+994)">Azerbaijan (+994)</option>
                                                      <option value="1242" label="Bahamas (+1 242)">Bahamas (+1 242)</option>
                                                      <option value="973" label="Bahrain (+973)">Bahrain (+973)</option>
                                                      <option value="880" label="Bangladesh (+880)">Bangladesh (+880)</option>
                                                      <option value="1246" label="Barbados (+1 246)">Barbados (+1 246)</option>
                                                      <option value="1268" label="Barbuda (+1 268)">Barbuda (+1 268)</option>
                                                      <option value="375" label="Belarus (+375)">Belarus (+375)</option>
                                                      <option value="32" label="Belgium (+32)">Belgium (+32)</option>
                                                      <option value="501" label="Belize (+501)">Belize (+501)</option>
                                                      <option value="229" label="Benin (+229)">Benin (+229)</option>
                                                      <option value="1441" label="Bermuda (+1 441)">Bermuda (+1 441)</option>
                                                      <option value="975" label="Bhutan (+975)">Bhutan (+975)</option>
                                                      <option value="591" label="Bolivia (+591)">Bolivia (+591)</option>
                                                      <option value="387" label="Bosnia and Herzegovina (+387)">Bosnia and Herzegovina (+387)</option>
                                                      <option value="267" label="Botswana (+267)">Botswana (+267)</option>
                                                      <option value="55" label="Brazil (+55)">Brazil (+55)</option>
                                                      <option value="246" label="British Indian Ocean Territory (+246)">British Indian Ocean Territory (+246)</option>
                                                      <option value="1284" label="British Virgin Islands (+1 284)">British Virgin Islands (+1 284)</option>
                                                      <option value="673" label="Brunei (+673)">Brunei (+673)</option>
                                                      <option value="359" label="Bulgaria (+359)">Bulgaria (+359)</option>
                                                      <option value="226" label="Burkina Faso (+226)">Burkina Faso (+226)</option>
                                                      <option value="257" label="Burundi (+257)">Burundi (+257)</option>
                                                      <option value="855" label="Cambodia (+855)">Cambodia (+855)</option>
                                                      <option value="237" label="Cameroon (+237)">Cameroon (+237)</option>
                                                      <option value="1" label="Canada (+1)">Canada (+1)</option>
                                                      <option value="238" label="Cape Verde (+238)">Cape Verde (+238)</option>
                                                      <option value="345" label="Cayman Islands (+345)">Cayman Islands (+345)</option>
                                                      <option value="236" label="Central African Republic (+236)">Central African Republic (+236)</option>
                                                      <option value="235" label="Chad (+235)">Chad (+235)</option>
                                                      <option value="56" label="Chile (+56)">Chile (+56)</option>
                                                      <option value="86" label="China (+86)">China (+86)</option>
                                                      <option value="61" label="Christmas Island (+61)">Christmas Island (+61)</option>
                                                      <option value="61" label="Cocos-Keeling Islands (+61)">Cocos-Keeling Islands (+61)</option>
                                                      <option value="57" label="Colombia (+57)">Colombia (+57)</option>
                                                      <option value="269" label="Comoros (+269)">Comoros (+269)</option>
                                                      <option value="242" label="Congo (+242)">Congo (+242)</option>
                                                      <option value="243" label="Congo, Dem. Rep. of (Zaire) (+243)">Congo, Dem. Rep. of (Zaire) (+243)</option>
                                                      <option value="682" label="Cook Islands (+682)">Cook Islands (+682)</option>
                                                      <option value="506" label="Costa Rica (+506)">Costa Rica (+506)</option>
                                                      <option value="225" label="Ivory Coast (+225)">Ivory Coast (+225)</option>
                                                      <option value="385" label="Croatia (+385)">Croatia (+385)</option>
                                                      <option value="53" label="Cuba (+53)">Cuba (+53)</option>
                                                      <option value="599" label="Curacao (+599)">Curacao (+599)</option>
                                                      <option value="537" label="Cyprus (+537)">Cyprus (+537)</option>
                                                      <option value="420" label="Czech Republic (+420)">Czech Republic (+420)</option>
                                                      <option value="45" label="Denmark (+45)">Denmark (+45)</option>
                                                      <option value="246" label="Diego Garcia (+246)">Diego Garcia (+246)</option>
                                                      <option value="253" label="Djibouti (+253)">Djibouti (+253)</option>
                                                      <option value="1767" label="Dominica (+1 767)">Dominica (+1 767)</option>
                                                      <option value="1809" label="Dominican Republic (+1 809)">Dominican Republic (+1 809)</option>
                                                      <option value="1829" label="Dominican Republic (+1 829)">Dominican Republic (+1 829)</option>
                                                      <option value="1849" label="Dominican Republic (+1 849)">Dominican Republic (+1 849)</option>
                                                      <option value="670" label="East Timor (+670)">East Timor (+670)</option>
                                                      <option value="56" label="Easter Island (+56)">Easter Island (+56)</option>
                                                      <option value="593" label="Ecuador (+593)">Ecuador (+593)</option>
                                                      <option value="20" label="Egypt (+20)">Egypt (+20)</option>
                                                      <option value="503" label="El Salvador (+503)">El Salvador (+503)</option>
                                                      <option value="240" label="Equatorial Guinea (+240)">Equatorial Guinea (+240)</option>
                                                      <option value="291" label="Eritrea (+291)">Eritrea (+291)</option>
                                                      <option value="372" label="Estonia (+372)">Estonia (+372)</option>
                                                      <option value="251" label="Ethiopia (+251)">Ethiopia (+251)</option>
                                                      <option value="500" label="Falkland Islands (+500)">Falkland Islands (+500)</option>
                                                      <option value="298" label="Faroe Islands (+298)">Faroe Islands (+298)</option>
                                                      <option value="679" label="Fiji (+679)">Fiji (+679)</option>
                                                      <option value="358" label="Finland (+358)">Finland (+358)</option>
                                                      <option value="33" label="France (+33)">France (+33)</option>
                                                      <option value="596" label="French Antilles (+596)">French Antilles (+596)</option>
                                                      <option value="594" label="French Guiana (+594)">French Guiana (+594)</option>
                                                      <option value="689" label="French Polynesia (+689)">French Polynesia (+689)</option>
                                                      <option value="241" label="Gabon (+241)">Gabon (+241)</option>
                                                      <option value="220" label="Gambia (+220)">Gambia (+220)</option>
                                                      <option value="995" label="Georgia (+995)">Georgia (+995)</option>
                                                      <option value="49" label="Germany (+49)">Germany (+49)</option>
                                                      <option value="233" label="Ghana (+233)">Ghana (+233)</option>
                                                      <option value="350" label="Gibraltar (+350)">Gibraltar (+350)</option>
                                                      <option value="30" label="Greece (+30)">Greece (+30)</option>
                                                      <option value="299" label="Greenland (+299)">Greenland (+299)</option>
                                                      <option value="1473" label="Grenada (+1 473)">Grenada (+1 473)</option>
                                                      <option value="590" label="Guadeloupe (+590)">Guadeloupe (+590)</option>
                                                      <option value="1671" label="Guam (+1 671)">Guam (+1 671)</option>
                                                      <option value="502" label="Guatemala (+502)">Guatemala (+502)</option>
                                                      <option value="224" label="Guinea (+224)">Guinea (+224)</option>
                                                      <option value="245" label="Guinea-Bissau (+245)">Guinea-Bissau (+245)</option>
                                                      <option value="595" label="Guyana (+595)">Guyana (+595)</option>
                                                      <option value="509" label="Haiti (+509)">Haiti (+509)</option>
                                                      <option value="504" label="Honduras (+504)">Honduras (+504)</option>
                                                      <option value="852" label="Hong Kong SAR China (+852)">Hong Kong SAR China (+852)</option>
                                                      <option value="36" label="Hungary (+36)">Hungary (+36)</option>
                                                      <option value="354" label="Iceland (+354)">Iceland (+354)</option>
                                                      <option value="91" label="India (+91)">India (+91)</option>
                                                      <option value="62" label="Indonesia (+62)">Indonesia (+62)</option>
                                                      <option value="98" label="Iran (+98)">Iran (+98)</option>
                                                      <option value="964" label="Iraq (+964)">Iraq (+964)</option>
                                                      <option value="353" label="Ireland (+353)">Ireland (+353)</option>
                                                      <option value="972" label="Israel (+972)">Israel (+972)</option>
                                                      <option value="39" label="Italy (+39)">Italy (+39)</option>
                                                      <option value="1876" label="Jamaica (+1 876)">Jamaica (+1 876)</option>
                                                      <option value="81" label="Japan (+81)">Japan (+81)</option>
                                                      <option value="962" label="Jordan (+962)">Jordan (+962)</option>
                                                      <option value="77" label="Kazakhstan (+7 7)">Kazakhstan (+7 7)</option>
                                                      <option value="254" label="Kenya (+254)">Kenya (+254)</option>
                                                      <option value="686" label="Kiribati (+686)">Kiribati (+686)</option>
                                                      <option value="850" label="North Korea (+850)">North Korea (+850)</option>
                                                      <option value="82" label="South Korea (+82)">South Korea (+82)</option>
                                                      <option value="965" label="Kuwait (+965)">Kuwait (+965)</option>
                                                      <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan (+996)</option>
                                                      <option value="856" label="Laos (+856)">Laos (+856)</option>
                                                      <option value="371" label="Latvia (+371)">Latvia (+371)</option>
                                                      <option value="961" label="Lebanon (+961)">Lebanon (+961)</option>
                                                      <option value="266" label="Lesotho (+266)">Lesotho (+266)</option>
                                                      <option value="231" label="Liberia (+231)">Liberia (+231)</option>
                                                      <option value="218" label="Libya (+218)">Libya (+218)</option>
                                                      <option value="423" label="Liechtenstein (+423)">Liechtenstein (+423)</option>
                                                      <option value="370" label="Lithuania (+370)">Lithuania (+370)</option>
                                                      <option value="352" label="Luxembourg (+352)">Luxembourg (+352)</option>
                                                      <option value="853" label="Macau SAR China (+853)">Macau SAR China (+853)</option>
                                                      <option value="389" label="Macedonia (+389)">Macedonia (+389)</option>
                                                      <option value="261" label="Madagascar (+261)">Madagascar (+261)</option>
                                                      <option value="265" label="Malawi (+265)">Malawi (+265)</option>
                                                      <option value="60" label="Malaysia (+60)">Malaysia (+60)</option>
                                                      <option value="960" label="Maldives (+960)">Maldives (+960)</option>
                                                      <option value="223" label="Mali (+223)">Mali (+223)</option>
                                                      <option value="356" label="Malta (+356)">Malta (+356)</option>
                                                      <option value="692" label="Marshall Islands (+692)">Marshall Islands (+692)</option>
                                                      <option value="596" label="Martinique (+596)">Martinique (+596)</option>
                                                      <option value="222" label="Mauritania (+222)">Mauritania (+222)</option>
                                                      <option value="230" label="Mauritius (+230)">Mauritius (+230)</option>
                                                      <option value="262" label="Mayotte (+262)">Mayotte (+262)</option>
                                                      <option value="52" label="Mexico (+52)">Mexico (+52)</option>
                                                      <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                      <option value="1808" label="Midway Island (+1 808)">Midway Island (+1 808)</option>
                                                      <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                      <option value="373" label="Moldova (+373)">Moldova (+373)</option>
                                                      <option value="377" label="Monaco (+377)">Monaco (+377)</option>
                                                      <option value="976" label="Mongolia (+976)">Mongolia (+976)</option>
                                                      <option value="382" label="Montenegro (+382)">Montenegro (+382)</option>
                                                      <option value="1664" label="Montserrat (+1664)">Montserrat (+1664)</option>
                                                      <option value="212" label="Morocco (+212)">Morocco (+212)</option>
                                                      <option value="95" label="Myanmar (+95)">Myanmar (+95)</option>
                                                      <option value="264" label="Namibia (+264)">Namibia (+264)</option>
                                                      <option value="674" label="Nauru (+674)">Nauru (+674)</option>
                                                      <option value="977" label="Nepal (+977)">Nepal (+977)</option>
                                                      <option value="31" label="Netherlands (+31)">Netherlands (+31)</option>
                                                      <option value="599" label="Netherlands Antilles (+599)">Netherlands Antilles (+599)</option>
                                                      <option value="1869" label="Nevis (+1 869)">Nevis (+1 869)</option>
                                                      <option value="687" label="New Caledonia (+687)">New Caledonia (+687)</option>
                                                      <option value="64" label="New Zealand (64)">New Zealand (64)</option>
                                                      <option value="505" label="Nicaragua (+505)">Nicaragua (+505)</option>
                                                      <option value="227" label="Niger (+227)">Niger (+227)</option>
                                                      <option value="234" label="Nigeria (+234)">Nigeria (+234)</option>
                                                      <option value="683" label="Niue (+683)">Niue (+683)</option>
                                                      <option value="672" label="Norfolk Island (+672)">Norfolk Island (+672)</option>
                                                      <option value="1670" label="Northern Mariana Islands (+1 670)">Northern Mariana Islands (+1 670)</option>
                                                      <option value="47" label="Norway (+47)">Norway (+47)</option>
                                                      <option value="968" label="Oman (+968)">Oman (+968)</option>
                                                      <option value="92" label="Pakistan (+92)">Pakistan (+92)</option>
                                                      <option value="680" label="Palau (+680)">Palau (+680)</option>
                                                      <option value="970" label="Palestinian Territory (+970)">Palestinian Territory (+970)</option>
                                                      <option value="507" label="Panama (+507)">Panama (+507)</option>
                                                      <option value="675" label="Papua New Guinea (+675)">Papua New Guinea (+675)</option>
                                                      <option value="595" label="Paraguay (+595)">Paraguay (+595)</option>
                                                      <option value="51" label="Peru (+51)">Peru (+51)</option>
                                                      <option value="63" label="Philippines (+63)">Philippines (+63)</option>
                                                      <option value="48" label="Poland (+48)">Poland (+48)</option>
                                                      <option value="351" label="Portugal (+351)">Portugal (+351)</option>
                                                      <option value="1787" label="Puerto Rico (+1 787)">Puerto Rico (+1 787)</option>
                                                      <option value="1939" label="Puerto Rico (+1 939)">Puerto Rico (+1 939)</option>
                                                      <option value="974" label="Qatar (+974)">Qatar (+974)</option>
                                                      <option value="262" label="Reunion (+262)">Reunion (+262)</option>
                                                      <option value="40" label="Romania (+40)">Romania (+40)</option>
                                                      <option value="7" label="Russia (+7)">Russia (+7)</option>
                                                      <option value="250" label="Rwanda (+250)">Rwanda (+250)</option>
                                                      <option value="685" label="Samoa (+685)">Samoa (+685)</option>
                                                      <option value="378" label="San Marino (+378)">San Marino (+378)</option>
                                                      <option value="966" label="Saudi Arabia (+966)">Saudi Arabia (+966)</option>
                                                      <option value="221" label="Senegal (+221)">Senegal (+221)</option>
                                                      <option value="381" label="Serbia (+381)">Serbia (+381)</option>
                                                      <option value="248" label="Seychelles (+248)">Seychelles (+248)</option>
                                                      <option value="232" label="Sierra Leone (+232)">Sierra Leone (+232)</option>
                                                      <option value="65" label="Singapore (+65)">Singapore (+65)</option>
                                                      <option value="421" label="Slovakia (+421)">Slovakia (+421)</option>
                                                      <option value="386" label="Slovenia (+386)">Slovenia (+386)</option>
                                                      <option value="677" label="Solomon Islands (+677)">Solomon Islands (+677)</option>
                                                      <option value="27" label="South Africa (+27)">South Africa (+27)</option>
                                                      <option value="500" label="South Georgia and the South Sandwich Islands (+500)">South Georgia and the South Sandwich Islands (+500)</option>
                                                      <option value="34" label="Spain (+34)">Spain (+34)</option>
                                                      <option value="94" label="Sri Lanka (+94)">Sri Lanka (+94)</option>
                                                      <option value="249" label="Sudan (+249)">Sudan (+249)</option>
                                                      <option value="597" label="Suriname (+597)">Suriname (+597)</option>
                                                      <option value="268" label="Swaziland (+268)">Swaziland (+268)</option>
                                                      <option value="46" label="Sweden (+46)">Sweden (+46)</option>
                                                      <option value="41" label="Switzerland (+41)">Switzerland (+41)</option>
                                                      <option value="963" label="Syria (+963)">Syria (+963)</option>
                                                      <option value="886" label="Taiwan (+886)">Taiwan (+886)</option>
                                                      <option value="992" label="Tajikistan (+992)">Tajikistan (+992)</option>
                                                      <option value="255" label="Tanzania (+255)">Tanzania (+255)</option>
                                                      <option value="66" label="Thailand (+66)">Thailand (+66)</option>
                                                      <option value="670" label="Timor Leste (+670)">Timor Leste (+670)</option>
                                                      <option value="228" label="Togo (+228)">Togo (+228)</option>
                                                      <option value="690" label="Tokelau (+690)">Tokelau (+690)</option>
                                                      <option value="676" label="Tonga (+676)">Tonga (+676)</option>
                                                      <option value="1868" label="Trinidad and Tobago (+1 868)">Trinidad and Tobago (+1 868)</option>
                                                      <option value="216" label="Tunisia (+216)">Tunisia (+216)</option>
                                                      <option value="90" label="Turkey (+90)">Turkey (+90)</option>
                                                      <option value="993" label="Turkmenistan (+993)">Turkmenistan (+993)</option>
                                                      <option value="1649" label="Turks and Caicos Islands (+1 649)">Turks and Caicos Islands (+1 649)</option>
                                                      <option value="688" label="Tuvalu (+688)">Tuvalu (+688)</option>
                                                      <option value="256" label="Uganda (+256)">Uganda (+256)</option>
                                                      <option value="380" label="Ukraine (+380)">Ukraine (+380)</option>
                                                      <option value="971" label="United Arab Emirates (+971)">United Arab Emirates (+971)</option>
                                                      <option value="44" label="United Kingdom (+44)">United Kingdom (+44)</option>
                                                      <option value="1" label="United States (+1)">United States (+1)</option>
                                                      <option value="598" label="Uruguay (+598)">Uruguay (+598)</option>
                                                      <option value="1340" label="U.S. Virgin Islands (+1 340)">U.S. Virgin Islands (+1 340)</option>
                                                      <option value="998" label="Uzbekistan (+998)">Uzbekistan (+998)</option>
                                                      <option value="678" label="Vanuatu (+678)">Vanuatu (+678)</option>
                                                      <option value="58" label="Venezuela (+58)">Venezuela (+58)</option>
                                                      <option value="84" label="Vietnam (+84)">Vietnam (+84)</option>
                                                      <option value="1808" label="Wake Island (+1 808)">Wake Island (+1 808)</option>
                                                      <option value="681" label="Wallis and Futuna (+681)">Wallis and Futuna (+681)</option>
                                                      <option value="967" label="Yemen (+967)">Yemen (+967)</option>
                                                      <option value="260" label="Zambia (+260)">Zambia (+260)</option>
                                                      <option value="255" label="Zanzibar (+255)">Zanzibar (+255)</option>
                                                      <option value="263" label="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                                   </select>
                                                </div>
                                                <div class="col-8">
                                                   <input type="number" name="vmobile" placeholder="" class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>E-mail</label>
                                             <input type="email" name="vemail" class="form-control">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>Website (URL)</label>
                                             <input type="url" name="vurl" class="form-control" placeholder="http://">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>Company</label>
                                             <input type="text" name="vcompany" class="form-control">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>job title</label>
                                             <input type="text" name="vtitle" class="form-control">
                                          </div>
                                          <div class="col-md-6 orm-group">
                                             <label>Phone (office)</label>
                                             <div class="row no-gutters">
                                                <div class="col-4">
                                                   <select class="form-select custom-select" name="countrycodevoffice">
                                                      <option value="" label="--">--</option>
                                                      <option value="7840" label="Abkhazia (+7 840)">Abkhazia (+7 840)</option>
                                                      <option value="7940" label="Abkhazia (+7 940)">Abkhazia (+7 940)</option>
                                                      <option value="93" label="Afghanistan (+93)">Afghanistan (+93)</option>
                                                      <option value="355" label="Albania (+355)">Albania (+355)</option>
                                                      <option value="213" label="Algeria (+213)">Algeria (+213)</option>
                                                      <option value="1684" label="American Samoa (+1 684)">American Samoa (+1 684)</option>
                                                      <option value="376" label="Andorra (+376)">Andorra (+376)</option>
                                                      <option value="244" label="Angola (+244)">Angola (+244)</option>
                                                      <option value="1264" label="Anguilla (+1 264)">Anguilla (+1 264)</option>
                                                      <option value="1268" label="Antigua and Barbuda (+1 268)">Antigua and Barbuda (+1 268)</option>
                                                      <option value="54" label="Argentina (+54)">Argentina (+54)</option>
                                                      <option value="374" label="Armenia (+374)">Armenia (+374)</option>
                                                      <option value="297" label="Aruba (+297)">Aruba (+297)</option>
                                                      <option value="247" label="Ascension (+247)">Ascension (+247)</option>
                                                      <option value="61" label="Australia (+61)">Australia (+61)</option>
                                                      <option value="672" label="Australian External Territories (+672)">Australian External Territories (+672)</option>
                                                      <option value="43" label="Austria (+43)">Austria (+43)</option>
                                                      <option value="994" label="Azerbaijan (+994)">Azerbaijan (+994)</option>
                                                      <option value="1242" label="Bahamas (+1 242)">Bahamas (+1 242)</option>
                                                      <option value="973" label="Bahrain (+973)">Bahrain (+973)</option>
                                                      <option value="880" label="Bangladesh (+880)">Bangladesh (+880)</option>
                                                      <option value="1246" label="Barbados (+1 246)">Barbados (+1 246)</option>
                                                      <option value="1268" label="Barbuda (+1 268)">Barbuda (+1 268)</option>
                                                      <option value="375" label="Belarus (+375)">Belarus (+375)</option>
                                                      <option value="32" label="Belgium (+32)">Belgium (+32)</option>
                                                      <option value="501" label="Belize (+501)">Belize (+501)</option>
                                                      <option value="229" label="Benin (+229)">Benin (+229)</option>
                                                      <option value="1441" label="Bermuda (+1 441)">Bermuda (+1 441)</option>
                                                      <option value="975" label="Bhutan (+975)">Bhutan (+975)</option>
                                                      <option value="591" label="Bolivia (+591)">Bolivia (+591)</option>
                                                      <option value="387" label="Bosnia and Herzegovina (+387)">Bosnia and Herzegovina (+387)</option>
                                                      <option value="267" label="Botswana (+267)">Botswana (+267)</option>
                                                      <option value="55" label="Brazil (+55)">Brazil (+55)</option>
                                                      <option value="246" label="British Indian Ocean Territory (+246)">British Indian Ocean Territory (+246)</option>
                                                      <option value="1284" label="British Virgin Islands (+1 284)">British Virgin Islands (+1 284)</option>
                                                      <option value="673" label="Brunei (+673)">Brunei (+673)</option>
                                                      <option value="359" label="Bulgaria (+359)">Bulgaria (+359)</option>
                                                      <option value="226" label="Burkina Faso (+226)">Burkina Faso (+226)</option>
                                                      <option value="257" label="Burundi (+257)">Burundi (+257)</option>
                                                      <option value="855" label="Cambodia (+855)">Cambodia (+855)</option>
                                                      <option value="237" label="Cameroon (+237)">Cameroon (+237)</option>
                                                      <option value="1" label="Canada (+1)">Canada (+1)</option>
                                                      <option value="238" label="Cape Verde (+238)">Cape Verde (+238)</option>
                                                      <option value="345" label="Cayman Islands (+345)">Cayman Islands (+345)</option>
                                                      <option value="236" label="Central African Republic (+236)">Central African Republic (+236)</option>
                                                      <option value="235" label="Chad (+235)">Chad (+235)</option>
                                                      <option value="56" label="Chile (+56)">Chile (+56)</option>
                                                      <option value="86" label="China (+86)">China (+86)</option>
                                                      <option value="61" label="Christmas Island (+61)">Christmas Island (+61)</option>
                                                      <option value="61" label="Cocos-Keeling Islands (+61)">Cocos-Keeling Islands (+61)</option>
                                                      <option value="57" label="Colombia (+57)">Colombia (+57)</option>
                                                      <option value="269" label="Comoros (+269)">Comoros (+269)</option>
                                                      <option value="242" label="Congo (+242)">Congo (+242)</option>
                                                      <option value="243" label="Congo, Dem. Rep. of (Zaire) (+243)">Congo, Dem. Rep. of (Zaire) (+243)</option>
                                                      <option value="682" label="Cook Islands (+682)">Cook Islands (+682)</option>
                                                      <option value="506" label="Costa Rica (+506)">Costa Rica (+506)</option>
                                                      <option value="225" label="Ivory Coast (+225)">Ivory Coast (+225)</option>
                                                      <option value="385" label="Croatia (+385)">Croatia (+385)</option>
                                                      <option value="53" label="Cuba (+53)">Cuba (+53)</option>
                                                      <option value="599" label="Curacao (+599)">Curacao (+599)</option>
                                                      <option value="537" label="Cyprus (+537)">Cyprus (+537)</option>
                                                      <option value="420" label="Czech Republic (+420)">Czech Republic (+420)</option>
                                                      <option value="45" label="Denmark (+45)">Denmark (+45)</option>
                                                      <option value="246" label="Diego Garcia (+246)">Diego Garcia (+246)</option>
                                                      <option value="253" label="Djibouti (+253)">Djibouti (+253)</option>
                                                      <option value="1767" label="Dominica (+1 767)">Dominica (+1 767)</option>
                                                      <option value="1809" label="Dominican Republic (+1 809)">Dominican Republic (+1 809)</option>
                                                      <option value="1829" label="Dominican Republic (+1 829)">Dominican Republic (+1 829)</option>
                                                      <option value="1849" label="Dominican Republic (+1 849)">Dominican Republic (+1 849)</option>
                                                      <option value="670" label="East Timor (+670)">East Timor (+670)</option>
                                                      <option value="56" label="Easter Island (+56)">Easter Island (+56)</option>
                                                      <option value="593" label="Ecuador (+593)">Ecuador (+593)</option>
                                                      <option value="20" label="Egypt (+20)">Egypt (+20)</option>
                                                      <option value="503" label="El Salvador (+503)">El Salvador (+503)</option>
                                                      <option value="240" label="Equatorial Guinea (+240)">Equatorial Guinea (+240)</option>
                                                      <option value="291" label="Eritrea (+291)">Eritrea (+291)</option>
                                                      <option value="372" label="Estonia (+372)">Estonia (+372)</option>
                                                      <option value="251" label="Ethiopia (+251)">Ethiopia (+251)</option>
                                                      <option value="500" label="Falkland Islands (+500)">Falkland Islands (+500)</option>
                                                      <option value="298" label="Faroe Islands (+298)">Faroe Islands (+298)</option>
                                                      <option value="679" label="Fiji (+679)">Fiji (+679)</option>
                                                      <option value="358" label="Finland (+358)">Finland (+358)</option>
                                                      <option value="33" label="France (+33)">France (+33)</option>
                                                      <option value="596" label="French Antilles (+596)">French Antilles (+596)</option>
                                                      <option value="594" label="French Guiana (+594)">French Guiana (+594)</option>
                                                      <option value="689" label="French Polynesia (+689)">French Polynesia (+689)</option>
                                                      <option value="241" label="Gabon (+241)">Gabon (+241)</option>
                                                      <option value="220" label="Gambia (+220)">Gambia (+220)</option>
                                                      <option value="995" label="Georgia (+995)">Georgia (+995)</option>
                                                      <option value="49" label="Germany (+49)">Germany (+49)</option>
                                                      <option value="233" label="Ghana (+233)">Ghana (+233)</option>
                                                      <option value="350" label="Gibraltar (+350)">Gibraltar (+350)</option>
                                                      <option value="30" label="Greece (+30)">Greece (+30)</option>
                                                      <option value="299" label="Greenland (+299)">Greenland (+299)</option>
                                                      <option value="1473" label="Grenada (+1 473)">Grenada (+1 473)</option>
                                                      <option value="590" label="Guadeloupe (+590)">Guadeloupe (+590)</option>
                                                      <option value="1671" label="Guam (+1 671)">Guam (+1 671)</option>
                                                      <option value="502" label="Guatemala (+502)">Guatemala (+502)</option>
                                                      <option value="224" label="Guinea (+224)">Guinea (+224)</option>
                                                      <option value="245" label="Guinea-Bissau (+245)">Guinea-Bissau (+245)</option>
                                                      <option value="595" label="Guyana (+595)">Guyana (+595)</option>
                                                      <option value="509" label="Haiti (+509)">Haiti (+509)</option>
                                                      <option value="504" label="Honduras (+504)">Honduras (+504)</option>
                                                      <option value="852" label="Hong Kong SAR China (+852)">Hong Kong SAR China (+852)</option>
                                                      <option value="36" label="Hungary (+36)">Hungary (+36)</option>
                                                      <option value="354" label="Iceland (+354)">Iceland (+354)</option>
                                                      <option value="91" label="India (+91)">India (+91)</option>
                                                      <option value="62" label="Indonesia (+62)">Indonesia (+62)</option>
                                                      <option value="98" label="Iran (+98)">Iran (+98)</option>
                                                      <option value="964" label="Iraq (+964)">Iraq (+964)</option>
                                                      <option value="353" label="Ireland (+353)">Ireland (+353)</option>
                                                      <option value="972" label="Israel (+972)">Israel (+972)</option>
                                                      <option value="39" label="Italy (+39)">Italy (+39)</option>
                                                      <option value="1876" label="Jamaica (+1 876)">Jamaica (+1 876)</option>
                                                      <option value="81" label="Japan (+81)">Japan (+81)</option>
                                                      <option value="962" label="Jordan (+962)">Jordan (+962)</option>
                                                      <option value="77" label="Kazakhstan (+7 7)">Kazakhstan (+7 7)</option>
                                                      <option value="254" label="Kenya (+254)">Kenya (+254)</option>
                                                      <option value="686" label="Kiribati (+686)">Kiribati (+686)</option>
                                                      <option value="850" label="North Korea (+850)">North Korea (+850)</option>
                                                      <option value="82" label="South Korea (+82)">South Korea (+82)</option>
                                                      <option value="965" label="Kuwait (+965)">Kuwait (+965)</option>
                                                      <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan (+996)</option>
                                                      <option value="856" label="Laos (+856)">Laos (+856)</option>
                                                      <option value="371" label="Latvia (+371)">Latvia (+371)</option>
                                                      <option value="961" label="Lebanon (+961)">Lebanon (+961)</option>
                                                      <option value="266" label="Lesotho (+266)">Lesotho (+266)</option>
                                                      <option value="231" label="Liberia (+231)">Liberia (+231)</option>
                                                      <option value="218" label="Libya (+218)">Libya (+218)</option>
                                                      <option value="423" label="Liechtenstein (+423)">Liechtenstein (+423)</option>
                                                      <option value="370" label="Lithuania (+370)">Lithuania (+370)</option>
                                                      <option value="352" label="Luxembourg (+352)">Luxembourg (+352)</option>
                                                      <option value="853" label="Macau SAR China (+853)">Macau SAR China (+853)</option>
                                                      <option value="389" label="Macedonia (+389)">Macedonia (+389)</option>
                                                      <option value="261" label="Madagascar (+261)">Madagascar (+261)</option>
                                                      <option value="265" label="Malawi (+265)">Malawi (+265)</option>
                                                      <option value="60" label="Malaysia (+60)">Malaysia (+60)</option>
                                                      <option value="960" label="Maldives (+960)">Maldives (+960)</option>
                                                      <option value="223" label="Mali (+223)">Mali (+223)</option>
                                                      <option value="356" label="Malta (+356)">Malta (+356)</option>
                                                      <option value="692" label="Marshall Islands (+692)">Marshall Islands (+692)</option>
                                                      <option value="596" label="Martinique (+596)">Martinique (+596)</option>
                                                      <option value="222" label="Mauritania (+222)">Mauritania (+222)</option>
                                                      <option value="230" label="Mauritius (+230)">Mauritius (+230)</option>
                                                      <option value="262" label="Mayotte (+262)">Mayotte (+262)</option>
                                                      <option value="52" label="Mexico (+52)">Mexico (+52)</option>
                                                      <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                      <option value="1808" label="Midway Island (+1 808)">Midway Island (+1 808)</option>
                                                      <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                      <option value="373" label="Moldova (+373)">Moldova (+373)</option>
                                                      <option value="377" label="Monaco (+377)">Monaco (+377)</option>
                                                      <option value="976" label="Mongolia (+976)">Mongolia (+976)</option>
                                                      <option value="382" label="Montenegro (+382)">Montenegro (+382)</option>
                                                      <option value="1664" label="Montserrat (+1664)">Montserrat (+1664)</option>
                                                      <option value="212" label="Morocco (+212)">Morocco (+212)</option>
                                                      <option value="95" label="Myanmar (+95)">Myanmar (+95)</option>
                                                      <option value="264" label="Namibia (+264)">Namibia (+264)</option>
                                                      <option value="674" label="Nauru (+674)">Nauru (+674)</option>
                                                      <option value="977" label="Nepal (+977)">Nepal (+977)</option>
                                                      <option value="31" label="Netherlands (+31)">Netherlands (+31)</option>
                                                      <option value="599" label="Netherlands Antilles (+599)">Netherlands Antilles (+599)</option>
                                                      <option value="1869" label="Nevis (+1 869)">Nevis (+1 869)</option>
                                                      <option value="687" label="New Caledonia (+687)">New Caledonia (+687)</option>
                                                      <option value="64" label="New Zealand (64)">New Zealand (64)</option>
                                                      <option value="505" label="Nicaragua (+505)">Nicaragua (+505)</option>
                                                      <option value="227" label="Niger (+227)">Niger (+227)</option>
                                                      <option value="234" label="Nigeria (+234)">Nigeria (+234)</option>
                                                      <option value="683" label="Niue (+683)">Niue (+683)</option>
                                                      <option value="672" label="Norfolk Island (+672)">Norfolk Island (+672)</option>
                                                      <option value="1670" label="Northern Mariana Islands (+1 670)">Northern Mariana Islands (+1 670)</option>
                                                      <option value="47" label="Norway (+47)">Norway (+47)</option>
                                                      <option value="968" label="Oman (+968)">Oman (+968)</option>
                                                      <option value="92" label="Pakistan (+92)">Pakistan (+92)</option>
                                                      <option value="680" label="Palau (+680)">Palau (+680)</option>
                                                      <option value="970" label="Palestinian Territory (+970)">Palestinian Territory (+970)</option>
                                                      <option value="507" label="Panama (+507)">Panama (+507)</option>
                                                      <option value="675" label="Papua New Guinea (+675)">Papua New Guinea (+675)</option>
                                                      <option value="595" label="Paraguay (+595)">Paraguay (+595)</option>
                                                      <option value="51" label="Peru (+51)">Peru (+51)</option>
                                                      <option value="63" label="Philippines (+63)">Philippines (+63)</option>
                                                      <option value="48" label="Poland (+48)">Poland (+48)</option>
                                                      <option value="351" label="Portugal (+351)">Portugal (+351)</option>
                                                      <option value="1787" label="Puerto Rico (+1 787)">Puerto Rico (+1 787)</option>
                                                      <option value="1939" label="Puerto Rico (+1 939)">Puerto Rico (+1 939)</option>
                                                      <option value="974" label="Qatar (+974)">Qatar (+974)</option>
                                                      <option value="262" label="Reunion (+262)">Reunion (+262)</option>
                                                      <option value="40" label="Romania (+40)">Romania (+40)</option>
                                                      <option value="7" label="Russia (+7)">Russia (+7)</option>
                                                      <option value="250" label="Rwanda (+250)">Rwanda (+250)</option>
                                                      <option value="685" label="Samoa (+685)">Samoa (+685)</option>
                                                      <option value="378" label="San Marino (+378)">San Marino (+378)</option>
                                                      <option value="966" label="Saudi Arabia (+966)">Saudi Arabia (+966)</option>
                                                      <option value="221" label="Senegal (+221)">Senegal (+221)</option>
                                                      <option value="381" label="Serbia (+381)">Serbia (+381)</option>
                                                      <option value="248" label="Seychelles (+248)">Seychelles (+248)</option>
                                                      <option value="232" label="Sierra Leone (+232)">Sierra Leone (+232)</option>
                                                      <option value="65" label="Singapore (+65)">Singapore (+65)</option>
                                                      <option value="421" label="Slovakia (+421)">Slovakia (+421)</option>
                                                      <option value="386" label="Slovenia (+386)">Slovenia (+386)</option>
                                                      <option value="677" label="Solomon Islands (+677)">Solomon Islands (+677)</option>
                                                      <option value="27" label="South Africa (+27)">South Africa (+27)</option>
                                                      <option value="500" label="South Georgia and the South Sandwich Islands (+500)">South Georgia and the South Sandwich Islands (+500)</option>
                                                      <option value="34" label="Spain (+34)">Spain (+34)</option>
                                                      <option value="94" label="Sri Lanka (+94)">Sri Lanka (+94)</option>
                                                      <option value="249" label="Sudan (+249)">Sudan (+249)</option>
                                                      <option value="597" label="Suriname (+597)">Suriname (+597)</option>
                                                      <option value="268" label="Swaziland (+268)">Swaziland (+268)</option>
                                                      <option value="46" label="Sweden (+46)">Sweden (+46)</option>
                                                      <option value="41" label="Switzerland (+41)">Switzerland (+41)</option>
                                                      <option value="963" label="Syria (+963)">Syria (+963)</option>
                                                      <option value="886" label="Taiwan (+886)">Taiwan (+886)</option>
                                                      <option value="992" label="Tajikistan (+992)">Tajikistan (+992)</option>
                                                      <option value="255" label="Tanzania (+255)">Tanzania (+255)</option>
                                                      <option value="66" label="Thailand (+66)">Thailand (+66)</option>
                                                      <option value="670" label="Timor Leste (+670)">Timor Leste (+670)</option>
                                                      <option value="228" label="Togo (+228)">Togo (+228)</option>
                                                      <option value="690" label="Tokelau (+690)">Tokelau (+690)</option>
                                                      <option value="676" label="Tonga (+676)">Tonga (+676)</option>
                                                      <option value="1868" label="Trinidad and Tobago (+1 868)">Trinidad and Tobago (+1 868)</option>
                                                      <option value="216" label="Tunisia (+216)">Tunisia (+216)</option>
                                                      <option value="90" label="Turkey (+90)">Turkey (+90)</option>
                                                      <option value="993" label="Turkmenistan (+993)">Turkmenistan (+993)</option>
                                                      <option value="1649" label="Turks and Caicos Islands (+1 649)">Turks and Caicos Islands (+1 649)</option>
                                                      <option value="688" label="Tuvalu (+688)">Tuvalu (+688)</option>
                                                      <option value="256" label="Uganda (+256)">Uganda (+256)</option>
                                                      <option value="380" label="Ukraine (+380)">Ukraine (+380)</option>
                                                      <option value="971" label="United Arab Emirates (+971)">United Arab Emirates (+971)</option>
                                                      <option value="44" label="United Kingdom (+44)">United Kingdom (+44)</option>
                                                      <option value="1" label="United States (+1)">United States (+1)</option>
                                                      <option value="598" label="Uruguay (+598)">Uruguay (+598)</option>
                                                      <option value="1340" label="U.S. Virgin Islands (+1 340)">U.S. Virgin Islands (+1 340)</option>
                                                      <option value="998" label="Uzbekistan (+998)">Uzbekistan (+998)</option>
                                                      <option value="678" label="Vanuatu (+678)">Vanuatu (+678)</option>
                                                      <option value="58" label="Venezuela (+58)">Venezuela (+58)</option>
                                                      <option value="84" label="Vietnam (+84)">Vietnam (+84)</option>
                                                      <option value="1808" label="Wake Island (+1 808)">Wake Island (+1 808)</option>
                                                      <option value="681" label="Wallis and Futuna (+681)">Wallis and Futuna (+681)</option>
                                                      <option value="967" label="Yemen (+967)">Yemen (+967)</option>
                                                      <option value="260" label="Zambia (+260)">Zambia (+260)</option>
                                                      <option value="255" label="Zanzibar (+255)">Zanzibar (+255)</option>
                                                      <option value="263" label="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                                   </select>
                                                </div>
                                                <div class="col-8">
                                                   <input type="number" name="vofficephone" placeholder="" class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>Fax</label>
                                             <div class="row no-gutters">
                                                <div class="col-4">
                                                   <select class="form-select custom-select" name="countrycodevfax">
                                                      <option value="" label="--">--</option>
                                                      <option value="7840" label="Abkhazia (+7 840)">Abkhazia (+7 840)</option>
                                                      <option value="7940" label="Abkhazia (+7 940)">Abkhazia (+7 940)</option>
                                                      <option value="93" label="Afghanistan (+93)">Afghanistan (+93)</option>
                                                      <option value="355" label="Albania (+355)">Albania (+355)</option>
                                                      <option value="213" label="Algeria (+213)">Algeria (+213)</option>
                                                      <option value="1684" label="American Samoa (+1 684)">American Samoa (+1 684)</option>
                                                      <option value="376" label="Andorra (+376)">Andorra (+376)</option>
                                                      <option value="244" label="Angola (+244)">Angola (+244)</option>
                                                      <option value="1264" label="Anguilla (+1 264)">Anguilla (+1 264)</option>
                                                      <option value="1268" label="Antigua and Barbuda (+1 268)">Antigua and Barbuda (+1 268)</option>
                                                      <option value="54" label="Argentina (+54)">Argentina (+54)</option>
                                                      <option value="374" label="Armenia (+374)">Armenia (+374)</option>
                                                      <option value="297" label="Aruba (+297)">Aruba (+297)</option>
                                                      <option value="247" label="Ascension (+247)">Ascension (+247)</option>
                                                      <option value="61" label="Australia (+61)">Australia (+61)</option>
                                                      <option value="672" label="Australian External Territories (+672)">Australian External Territories (+672)</option>
                                                      <option value="43" label="Austria (+43)">Austria (+43)</option>
                                                      <option value="994" label="Azerbaijan (+994)">Azerbaijan (+994)</option>
                                                      <option value="1242" label="Bahamas (+1 242)">Bahamas (+1 242)</option>
                                                      <option value="973" label="Bahrain (+973)">Bahrain (+973)</option>
                                                      <option value="880" label="Bangladesh (+880)">Bangladesh (+880)</option>
                                                      <option value="1246" label="Barbados (+1 246)">Barbados (+1 246)</option>
                                                      <option value="1268" label="Barbuda (+1 268)">Barbuda (+1 268)</option>
                                                      <option value="375" label="Belarus (+375)">Belarus (+375)</option>
                                                      <option value="32" label="Belgium (+32)">Belgium (+32)</option>
                                                      <option value="501" label="Belize (+501)">Belize (+501)</option>
                                                      <option value="229" label="Benin (+229)">Benin (+229)</option>
                                                      <option value="1441" label="Bermuda (+1 441)">Bermuda (+1 441)</option>
                                                      <option value="975" label="Bhutan (+975)">Bhutan (+975)</option>
                                                      <option value="591" label="Bolivia (+591)">Bolivia (+591)</option>
                                                      <option value="387" label="Bosnia and Herzegovina (+387)">Bosnia and Herzegovina (+387)</option>
                                                      <option value="267" label="Botswana (+267)">Botswana (+267)</option>
                                                      <option value="55" label="Brazil (+55)">Brazil (+55)</option>
                                                      <option value="246" label="British Indian Ocean Territory (+246)">British Indian Ocean Territory (+246)</option>
                                                      <option value="1284" label="British Virgin Islands (+1 284)">British Virgin Islands (+1 284)</option>
                                                      <option value="673" label="Brunei (+673)">Brunei (+673)</option>
                                                      <option value="359" label="Bulgaria (+359)">Bulgaria (+359)</option>
                                                      <option value="226" label="Burkina Faso (+226)">Burkina Faso (+226)</option>
                                                      <option value="257" label="Burundi (+257)">Burundi (+257)</option>
                                                      <option value="855" label="Cambodia (+855)">Cambodia (+855)</option>
                                                      <option value="237" label="Cameroon (+237)">Cameroon (+237)</option>
                                                      <option value="1" label="Canada (+1)">Canada (+1)</option>
                                                      <option value="238" label="Cape Verde (+238)">Cape Verde (+238)</option>
                                                      <option value="345" label="Cayman Islands (+345)">Cayman Islands (+345)</option>
                                                      <option value="236" label="Central African Republic (+236)">Central African Republic (+236)</option>
                                                      <option value="235" label="Chad (+235)">Chad (+235)</option>
                                                      <option value="56" label="Chile (+56)">Chile (+56)</option>
                                                      <option value="86" label="China (+86)">China (+86)</option>
                                                      <option value="61" label="Christmas Island (+61)">Christmas Island (+61)</option>
                                                      <option value="61" label="Cocos-Keeling Islands (+61)">Cocos-Keeling Islands (+61)</option>
                                                      <option value="57" label="Colombia (+57)">Colombia (+57)</option>
                                                      <option value="269" label="Comoros (+269)">Comoros (+269)</option>
                                                      <option value="242" label="Congo (+242)">Congo (+242)</option>
                                                      <option value="243" label="Congo, Dem. Rep. of (Zaire) (+243)">Congo, Dem. Rep. of (Zaire) (+243)</option>
                                                      <option value="682" label="Cook Islands (+682)">Cook Islands (+682)</option>
                                                      <option value="506" label="Costa Rica (+506)">Costa Rica (+506)</option>
                                                      <option value="225" label="Ivory Coast (+225)">Ivory Coast (+225)</option>
                                                      <option value="385" label="Croatia (+385)">Croatia (+385)</option>
                                                      <option value="53" label="Cuba (+53)">Cuba (+53)</option>
                                                      <option value="599" label="Curacao (+599)">Curacao (+599)</option>
                                                      <option value="537" label="Cyprus (+537)">Cyprus (+537)</option>
                                                      <option value="420" label="Czech Republic (+420)">Czech Republic (+420)</option>
                                                      <option value="45" label="Denmark (+45)">Denmark (+45)</option>
                                                      <option value="246" label="Diego Garcia (+246)">Diego Garcia (+246)</option>
                                                      <option value="253" label="Djibouti (+253)">Djibouti (+253)</option>
                                                      <option value="1767" label="Dominica (+1 767)">Dominica (+1 767)</option>
                                                      <option value="1809" label="Dominican Republic (+1 809)">Dominican Republic (+1 809)</option>
                                                      <option value="1829" label="Dominican Republic (+1 829)">Dominican Republic (+1 829)</option>
                                                      <option value="1849" label="Dominican Republic (+1 849)">Dominican Republic (+1 849)</option>
                                                      <option value="670" label="East Timor (+670)">East Timor (+670)</option>
                                                      <option value="56" label="Easter Island (+56)">Easter Island (+56)</option>
                                                      <option value="593" label="Ecuador (+593)">Ecuador (+593)</option>
                                                      <option value="20" label="Egypt (+20)">Egypt (+20)</option>
                                                      <option value="503" label="El Salvador (+503)">El Salvador (+503)</option>
                                                      <option value="240" label="Equatorial Guinea (+240)">Equatorial Guinea (+240)</option>
                                                      <option value="291" label="Eritrea (+291)">Eritrea (+291)</option>
                                                      <option value="372" label="Estonia (+372)">Estonia (+372)</option>
                                                      <option value="251" label="Ethiopia (+251)">Ethiopia (+251)</option>
                                                      <option value="500" label="Falkland Islands (+500)">Falkland Islands (+500)</option>
                                                      <option value="298" label="Faroe Islands (+298)">Faroe Islands (+298)</option>
                                                      <option value="679" label="Fiji (+679)">Fiji (+679)</option>
                                                      <option value="358" label="Finland (+358)">Finland (+358)</option>
                                                      <option value="33" label="France (+33)">France (+33)</option>
                                                      <option value="596" label="French Antilles (+596)">French Antilles (+596)</option>
                                                      <option value="594" label="French Guiana (+594)">French Guiana (+594)</option>
                                                      <option value="689" label="French Polynesia (+689)">French Polynesia (+689)</option>
                                                      <option value="241" label="Gabon (+241)">Gabon (+241)</option>
                                                      <option value="220" label="Gambia (+220)">Gambia (+220)</option>
                                                      <option value="995" label="Georgia (+995)">Georgia (+995)</option>
                                                      <option value="49" label="Germany (+49)">Germany (+49)</option>
                                                      <option value="233" label="Ghana (+233)">Ghana (+233)</option>
                                                      <option value="350" label="Gibraltar (+350)">Gibraltar (+350)</option>
                                                      <option value="30" label="Greece (+30)">Greece (+30)</option>
                                                      <option value="299" label="Greenland (+299)">Greenland (+299)</option>
                                                      <option value="1473" label="Grenada (+1 473)">Grenada (+1 473)</option>
                                                      <option value="590" label="Guadeloupe (+590)">Guadeloupe (+590)</option>
                                                      <option value="1671" label="Guam (+1 671)">Guam (+1 671)</option>
                                                      <option value="502" label="Guatemala (+502)">Guatemala (+502)</option>
                                                      <option value="224" label="Guinea (+224)">Guinea (+224)</option>
                                                      <option value="245" label="Guinea-Bissau (+245)">Guinea-Bissau (+245)</option>
                                                      <option value="595" label="Guyana (+595)">Guyana (+595)</option>
                                                      <option value="509" label="Haiti (+509)">Haiti (+509)</option>
                                                      <option value="504" label="Honduras (+504)">Honduras (+504)</option>
                                                      <option value="852" label="Hong Kong SAR China (+852)">Hong Kong SAR China (+852)</option>
                                                      <option value="36" label="Hungary (+36)">Hungary (+36)</option>
                                                      <option value="354" label="Iceland (+354)">Iceland (+354)</option>
                                                      <option value="91" label="India (+91)">India (+91)</option>
                                                      <option value="62" label="Indonesia (+62)">Indonesia (+62)</option>
                                                      <option value="98" label="Iran (+98)">Iran (+98)</option>
                                                      <option value="964" label="Iraq (+964)">Iraq (+964)</option>
                                                      <option value="353" label="Ireland (+353)">Ireland (+353)</option>
                                                      <option value="972" label="Israel (+972)">Israel (+972)</option>
                                                      <option value="39" label="Italy (+39)">Italy (+39)</option>
                                                      <option value="1876" label="Jamaica (+1 876)">Jamaica (+1 876)</option>
                                                      <option value="81" label="Japan (+81)">Japan (+81)</option>
                                                      <option value="962" label="Jordan (+962)">Jordan (+962)</option>
                                                      <option value="77" label="Kazakhstan (+7 7)">Kazakhstan (+7 7)</option>
                                                      <option value="254" label="Kenya (+254)">Kenya (+254)</option>
                                                      <option value="686" label="Kiribati (+686)">Kiribati (+686)</option>
                                                      <option value="850" label="North Korea (+850)">North Korea (+850)</option>
                                                      <option value="82" label="South Korea (+82)">South Korea (+82)</option>
                                                      <option value="965" label="Kuwait (+965)">Kuwait (+965)</option>
                                                      <option value="996" label="Kyrgyzstan (+996)">Kyrgyzstan (+996)</option>
                                                      <option value="856" label="Laos (+856)">Laos (+856)</option>
                                                      <option value="371" label="Latvia (+371)">Latvia (+371)</option>
                                                      <option value="961" label="Lebanon (+961)">Lebanon (+961)</option>
                                                      <option value="266" label="Lesotho (+266)">Lesotho (+266)</option>
                                                      <option value="231" label="Liberia (+231)">Liberia (+231)</option>
                                                      <option value="218" label="Libya (+218)">Libya (+218)</option>
                                                      <option value="423" label="Liechtenstein (+423)">Liechtenstein (+423)</option>
                                                      <option value="370" label="Lithuania (+370)">Lithuania (+370)</option>
                                                      <option value="352" label="Luxembourg (+352)">Luxembourg (+352)</option>
                                                      <option value="853" label="Macau SAR China (+853)">Macau SAR China (+853)</option>
                                                      <option value="389" label="Macedonia (+389)">Macedonia (+389)</option>
                                                      <option value="261" label="Madagascar (+261)">Madagascar (+261)</option>
                                                      <option value="265" label="Malawi (+265)">Malawi (+265)</option>
                                                      <option value="60" label="Malaysia (+60)">Malaysia (+60)</option>
                                                      <option value="960" label="Maldives (+960)">Maldives (+960)</option>
                                                      <option value="223" label="Mali (+223)">Mali (+223)</option>
                                                      <option value="356" label="Malta (+356)">Malta (+356)</option>
                                                      <option value="692" label="Marshall Islands (+692)">Marshall Islands (+692)</option>
                                                      <option value="596" label="Martinique (+596)">Martinique (+596)</option>
                                                      <option value="222" label="Mauritania (+222)">Mauritania (+222)</option>
                                                      <option value="230" label="Mauritius (+230)">Mauritius (+230)</option>
                                                      <option value="262" label="Mayotte (+262)">Mayotte (+262)</option>
                                                      <option value="52" label="Mexico (+52)">Mexico (+52)</option>
                                                      <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                      <option value="1808" label="Midway Island (+1 808)">Midway Island (+1 808)</option>
                                                      <option value="691" label="Micronesia (+691)">Micronesia (+691)</option>
                                                      <option value="373" label="Moldova (+373)">Moldova (+373)</option>
                                                      <option value="377" label="Monaco (+377)">Monaco (+377)</option>
                                                      <option value="976" label="Mongolia (+976)">Mongolia (+976)</option>
                                                      <option value="382" label="Montenegro (+382)">Montenegro (+382)</option>
                                                      <option value="1664" label="Montserrat (+1664)">Montserrat (+1664)</option>
                                                      <option value="212" label="Morocco (+212)">Morocco (+212)</option>
                                                      <option value="95" label="Myanmar (+95)">Myanmar (+95)</option>
                                                      <option value="264" label="Namibia (+264)">Namibia (+264)</option>
                                                      <option value="674" label="Nauru (+674)">Nauru (+674)</option>
                                                      <option value="977" label="Nepal (+977)">Nepal (+977)</option>
                                                      <option value="31" label="Netherlands (+31)">Netherlands (+31)</option>
                                                      <option value="599" label="Netherlands Antilles (+599)">Netherlands Antilles (+599)</option>
                                                      <option value="1869" label="Nevis (+1 869)">Nevis (+1 869)</option>
                                                      <option value="687" label="New Caledonia (+687)">New Caledonia (+687)</option>
                                                      <option value="64" label="New Zealand (64)">New Zealand (64)</option>
                                                      <option value="505" label="Nicaragua (+505)">Nicaragua (+505)</option>
                                                      <option value="227" label="Niger (+227)">Niger (+227)</option>
                                                      <option value="234" label="Nigeria (+234)">Nigeria (+234)</option>
                                                      <option value="683" label="Niue (+683)">Niue (+683)</option>
                                                      <option value="672" label="Norfolk Island (+672)">Norfolk Island (+672)</option>
                                                      <option value="1670" label="Northern Mariana Islands (+1 670)">Northern Mariana Islands (+1 670)</option>
                                                      <option value="47" label="Norway (+47)">Norway (+47)</option>
                                                      <option value="968" label="Oman (+968)">Oman (+968)</option>
                                                      <option value="92" label="Pakistan (+92)">Pakistan (+92)</option>
                                                      <option value="680" label="Palau (+680)">Palau (+680)</option>
                                                      <option value="970" label="Palestinian Territory (+970)">Palestinian Territory (+970)</option>
                                                      <option value="507" label="Panama (+507)">Panama (+507)</option>
                                                      <option value="675" label="Papua New Guinea (+675)">Papua New Guinea (+675)</option>
                                                      <option value="595" label="Paraguay (+595)">Paraguay (+595)</option>
                                                      <option value="51" label="Peru (+51)">Peru (+51)</option>
                                                      <option value="63" label="Philippines (+63)">Philippines (+63)</option>
                                                      <option value="48" label="Poland (+48)">Poland (+48)</option>
                                                      <option value="351" label="Portugal (+351)">Portugal (+351)</option>
                                                      <option value="1787" label="Puerto Rico (+1 787)">Puerto Rico (+1 787)</option>
                                                      <option value="1939" label="Puerto Rico (+1 939)">Puerto Rico (+1 939)</option>
                                                      <option value="974" label="Qatar (+974)">Qatar (+974)</option>
                                                      <option value="262" label="Reunion (+262)">Reunion (+262)</option>
                                                      <option value="40" label="Romania (+40)">Romania (+40)</option>
                                                      <option value="7" label="Russia (+7)">Russia (+7)</option>
                                                      <option value="250" label="Rwanda (+250)">Rwanda (+250)</option>
                                                      <option value="685" label="Samoa (+685)">Samoa (+685)</option>
                                                      <option value="378" label="San Marino (+378)">San Marino (+378)</option>
                                                      <option value="966" label="Saudi Arabia (+966)">Saudi Arabia (+966)</option>
                                                      <option value="221" label="Senegal (+221)">Senegal (+221)</option>
                                                      <option value="381" label="Serbia (+381)">Serbia (+381)</option>
                                                      <option value="248" label="Seychelles (+248)">Seychelles (+248)</option>
                                                      <option value="232" label="Sierra Leone (+232)">Sierra Leone (+232)</option>
                                                      <option value="65" label="Singapore (+65)">Singapore (+65)</option>
                                                      <option value="421" label="Slovakia (+421)">Slovakia (+421)</option>
                                                      <option value="386" label="Slovenia (+386)">Slovenia (+386)</option>
                                                      <option value="677" label="Solomon Islands (+677)">Solomon Islands (+677)</option>
                                                      <option value="27" label="South Africa (+27)">South Africa (+27)</option>
                                                      <option value="500" label="South Georgia and the South Sandwich Islands (+500)">South Georgia and the South Sandwich Islands (+500)</option>
                                                      <option value="34" label="Spain (+34)">Spain (+34)</option>
                                                      <option value="94" label="Sri Lanka (+94)">Sri Lanka (+94)</option>
                                                      <option value="249" label="Sudan (+249)">Sudan (+249)</option>
                                                      <option value="597" label="Suriname (+597)">Suriname (+597)</option>
                                                      <option value="268" label="Swaziland (+268)">Swaziland (+268)</option>
                                                      <option value="46" label="Sweden (+46)">Sweden (+46)</option>
                                                      <option value="41" label="Switzerland (+41)">Switzerland (+41)</option>
                                                      <option value="963" label="Syria (+963)">Syria (+963)</option>
                                                      <option value="886" label="Taiwan (+886)">Taiwan (+886)</option>
                                                      <option value="992" label="Tajikistan (+992)">Tajikistan (+992)</option>
                                                      <option value="255" label="Tanzania (+255)">Tanzania (+255)</option>
                                                      <option value="66" label="Thailand (+66)">Thailand (+66)</option>
                                                      <option value="670" label="Timor Leste (+670)">Timor Leste (+670)</option>
                                                      <option value="228" label="Togo (+228)">Togo (+228)</option>
                                                      <option value="690" label="Tokelau (+690)">Tokelau (+690)</option>
                                                      <option value="676" label="Tonga (+676)">Tonga (+676)</option>
                                                      <option value="1868" label="Trinidad and Tobago (+1 868)">Trinidad and Tobago (+1 868)</option>
                                                      <option value="216" label="Tunisia (+216)">Tunisia (+216)</option>
                                                      <option value="90" label="Turkey (+90)">Turkey (+90)</option>
                                                      <option value="993" label="Turkmenistan (+993)">Turkmenistan (+993)</option>
                                                      <option value="1649" label="Turks and Caicos Islands (+1 649)">Turks and Caicos Islands (+1 649)</option>
                                                      <option value="688" label="Tuvalu (+688)">Tuvalu (+688)</option>
                                                      <option value="256" label="Uganda (+256)">Uganda (+256)</option>
                                                      <option value="380" label="Ukraine (+380)">Ukraine (+380)</option>
                                                      <option value="971" label="United Arab Emirates (+971)">United Arab Emirates (+971)</option>
                                                      <option value="44" label="United Kingdom (+44)">United Kingdom (+44)</option>
                                                      <option value="1" label="United States (+1)">United States (+1)</option>
                                                      <option value="598" label="Uruguay (+598)">Uruguay (+598)</option>
                                                      <option value="1340" label="U.S. Virgin Islands (+1 340)">U.S. Virgin Islands (+1 340)</option>
                                                      <option value="998" label="Uzbekistan (+998)">Uzbekistan (+998)</option>
                                                      <option value="678" label="Vanuatu (+678)">Vanuatu (+678)</option>
                                                      <option value="58" label="Venezuela (+58)">Venezuela (+58)</option>
                                                      <option value="84" label="Vietnam (+84)">Vietnam (+84)</option>
                                                      <option value="1808" label="Wake Island (+1 808)">Wake Island (+1 808)</option>
                                                      <option value="681" label="Wallis and Futuna (+681)">Wallis and Futuna (+681)</option>
                                                      <option value="967" label="Yemen (+967)">Yemen (+967)</option>
                                                      <option value="260" label="Zambia (+260)">Zambia (+260)</option>
                                                      <option value="255" label="Zanzibar (+255)">Zanzibar (+255)</option>
                                                      <option value="263" label="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                                   </select>
                                                </div>
                                                <div class="col-8">
                                                   <input type="number" name="vfax" placeholder="" class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12 form-group">
                                             <label>Address</label>
                                             <textarea name="vaddress" class="form-control" maxlength="255"></textarea>
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>Post code</label>
                                             <input type="text" name="vcap" class="form-control">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>City</label>
                                             <input type="text" name="vcity" class="form-control">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>State</label>
                                             <input type="text" name="vstate" class="form-control">
                                          </div>
                                          <div class="col-md-6 form-group">
                                             <label>Country</label>
                                             <input type="text" name="vcountry" class="form-control">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="event">
                                       <h4>Event</h4>
                                       <div class="row">
                                          <div class="col-sm-6 form-group">
                                             <label>Event title</label>
                                             <input type="text" name="eventtitle" class="form-control" required="required">
                                          </div>
                                          <div class="col-sm-6 form-group">
                                             <label>Location</label>
                                             <input type="text" name="eventlocation" class="form-control">
                                          </div>
                                          <div class="col-sm-6 form-group">
                                             <label>Start time</label>
                                             <input type="text" class="form-control datetimepicker-input" id="eventstart" data-toggle="datetimepicker" data-target="#eventstart" data-timestamp="#eventstarttime" required="required"/>
                                             <input type="hidden" name="eventstarttime" id="eventstarttime" class="get-timestamp">
                                          </div>
                                          <div class="col-sm-6 form-group">
                                             <label>End time</label>
                                             <input type="text" class="form-control datetimepicker-input" id="eventend" data-toggle="datetimepicker" data-target="#eventend" data-timestamp="#eventendtime"/>
                                             <input type="hidden" name="eventendtime" id="eventendtime" class="get-timestamp">
                                          </div>
                                          <div class="col-12 form-group">
                                             <label>Reminder before event</label>
                                             <select class="form-select custom-select" name="eventreminder" id="eventreminder">
                                                <option value="">--</option>
                                                <option value="PT0M">When the event starts</option>
                                                <option value="-PT5M">5 minutes</option>
                                                <option value="-PT10M">10 minutes</option>
                                                <option value="-PT15M">15 minutes</option>
                                                <option value="-PT30M">30 minutes</option>
                                                <option value="-PT1H">1 hour</option>
                                                <option value="-PT2H">2 hours</option>
                                                <option value="-PT3H">3 hours</option>
                                                <option value="-PT4H">4 hours</option>
                                                <option value="-PT5H">5 hours</option>
                                                <option value="-PT6H">6 hours</option>
                                                <option value="-PT12H">12 hours</option>
                                                <option value="-PT24H">24 hours</option>
                                                <option value="-PT48H">48 hours</option>
                                                <option value="-PT168H">1 week</option>
                                             </select>
                                          </div>
                                          <div class="col-12 form-group">
                                             <label for="eventlink">Link</label>
                                             <input type="url" name="eventlink" id="eventlink" class="form-control" placeholder="http://" />
                                          </div>
                                          <div class="col-12 form-group">
                                             <label>Notes</label>
                                             <textarea rows="3" name="eventnote" class="form-control" maxlength="500"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="paypal">
                                       <h4>PayPal</h4>
                                       <div class="row form-group">
                                          <div class="col-sm-6">
                                             <label>Payment type</label>
                                             <select class="form-select custom-select" name="pp_type" id="pp_type">
                                                <option value="_xclick">Buy now</option>
                                                <option value="_cart">Add to cart</option>
                                                <option value="_donations">Donations</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-6">
                                             <label>E-mail</label>
                                             <input type="email" name="pp_email" class="form-control" required="required">
                                             <small>Email address to receive payments</small>
                                          </div>
                                       </div>
                                       <div class="row form-group">
                                          <div class="col-sm-8">
                                             <label>Item name</label>
                                             <input type="text" name="pp_name" class="form-control" required="required">
                                          </div>
                                          <div class="col-sm-4">
                                             <label>Item ID</label>
                                             <input type="text" name="pp_id" class="form-control ltr">
                                          </div>
                                       </div>
                                       <div class="row form-group">
                                          <div class="col-sm-6 yesdonation">
                                             <label>Price</label>
                                             <div class="input-group">
                                                <input type="number" name="pp_price" class="form-control" placeholder="0.00">
                                                <span class="input-group-text rounded-0 getcurrency">USD</span>
                                             </div>
                                          </div>
                                          <div class="col-sm-6 yesdonation">
                                             <label>Currency</label>
                                             <select class="form-select custom-select setvalue" name="pp_currency" id="setcurrency" data-target=".getcurrency">
                                                <option value="USD">United States dollar</option>
                                                <option value="EUR">Euro</option>
                                                <option value="AUD">Australian dollar</option>
                                                <option value="BRL">Brazilian real</option>
                                                <option value="CAD">Canadian dollar</option>
                                                <option value="CNY">Chinese Renmenbi</option>
                                                <option value="CZK">Czech koruna</option>
                                                <option value="DKK">Danish krone</option>
                                                <option value="HKD">Hong Kong dollar</option>
                                                <option value="HUF">Hungarian forint</option>
                                                <option value="INR">Indian rupee</option>
                                                <option value="ILS">Israeli new shekel</option>
                                                <option value="JPY">Japanese yen</option>
                                                <option value="MYR">Malaysian ringgit</option>
                                                <option value="MXN">Mexican peso</option>
                                                <option value="TWD">New Taiwan dollar</option>
                                                <option value="NZD">New Zealand dollar</option>
                                                <option value="NOK">Norwegian krone</option>
                                                <option value="PHP">Philippine peso</option>
                                                <option value="PLN">Polish złoty</option>
                                                <option value="GBP">Pound sterling</option>
                                                <option value="RUB">Russian ruble</option>
                                                <option value="SGD">Singapore dollar</option>
                                                <option value="SEK">Swedish krona</option>
                                                <option value="CHF">Swiss franc</option>
                                                <option value="THB">Thai baht</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-6 nodonation">
                                             <label>Shipping</label>
                                             <div class="input-group">
                                                <input type="number" name="pp_shipping" class="form-control" placeholder="0.00">
                                                <span class="input-group-text rounded-0 getcurrency" id="getcurrency">USD</span>
                                             </div>
                                          </div>
                                          <div class="col-sm-6 nodonation">
                                             <label>Tax rate</label>
                                             <div class="input-group">
                                                <input type="number" name="pp_tax" class="form-control" placeholder="0.00">
                                                <span class="input-group-text rounded-0">%</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade " id="bitcoin">
                                       <h4>BitCoin</h4>
                                       <div class="row form-group">
                                          <div class="col-sm-6">
                                             <label>Address</label>
                                             <input type="text" name="btc_account" class="form-control ltr" required="required">
                                          </div>
                                          <div class="col-sm-6">
                                             <label>Amount</label>
                                             <div class="input-group">
                                                <input type="number" name="btc_amount" class="form-control">
                                                <span class="input-group-text rounded-0">BTC</span>
                                             </div>
                                             <small class="form-text text-muted">1 BTC = 30040.17 USD<br />1 USD = 0.000033 BTC</small><small class="form-text text-muted">Last update: April 13 2023<br>Spot price from Coinbase</small>            
                                          </div>
                                          <div class="col-sm-6">
                                             <label>Item name</label>
                                             <input type="text" name="btc_label" class="form-control">
                                          </div>
                                          <div class="col-sm-6">
                                             <label>Message</label>
                                             <input type="text" name="btc_message" class="form-control">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- tab content -->
                                 <div class="accordion" id="collapseSettings">
                                    <div class="accordion-item d-grid">
                                       <button class="mb-2 btn btn-outline-primary btn-lg btn-block text-start text-left rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseColors">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="currentColor">
                                             <path d="M18.717 8.831c-.734.824-.665 2.087.158 2.825l-1.333 1.491-7.455-6.667 1.334-1.49c.822.736 2.087.666 2.822-.159l3.503-3.831c.593-.663 1.414-1 2.238-1 1.666 0 3.016 1.358 3.016 2.996 0 .723-.271 1.435-.779 2.005l-3.504 3.83zm-8.217 6.169h-2.691l3.928-4.362-1.491-1.333-7.9 8.794c-1.277 1.423-.171 2.261-1.149 4.052-.135.244-.197.48-.197.698 0 .661.54 1.151 1.141 1.151.241 0 .492-.079.724-.256 1.733-1.332 2.644-.184 3.954-1.647l7.901-8.792-1.491-1.333-2.729 3.028z"/>
                                          </svg>
                                          <span class="vertical-middle">Colors</span>
                                       </button>
                                       <div class="collapse" id="collapseColors" data-bs-parent="#collapseSettings" data-parent="#collapseSettings">
                                          <div class="col-sm-12 mb-2 custom-background">
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <label>Background</label>
                                                   <div class="collapse show" id="collapse-background">
                                                      <input type="text" class="form-control qrcolorpicker colorpickerback rounded-0 ltr" value="#FFFFFF" name="backcolor">
                                                   </div>
                                                   <div class="form-check form-switch mt-2">
                                                      <input type="checkbox" class="form-check-input" id="trans-bg" name="transparent">
                                                      <label class="form-check-label" for="trans-bg">Transparent background</label>
                                                   </div>
                                                   <div class="form-check form-switch mb-2">
                                                      <input type="checkbox" class="form-check-input collapse-control" id="transparent-qr" data-bs-target="#collapse-image-bg" data-target="#collapse-image-bg" name="transparent_code">
                                                      <label class="form-check-label" for="transparent-qr">Background image</label>
                                                   </div>
                                                   <div class="collapse" id="collapse-image-bg">
                                                      <div class="image-editor ltr">
                                                         <button title="Background image" type="button" class="btn btn-primary select-image-btn rounded-0"><i class="fa fa-upload"></i></button>
                                                         <button type="button" class="btn btn-primary export-bg-image d-none rounded-0"><i class="fa fa-check"></i></button>
                                                         <button type="button" class="btn btn-primary remove-bg-image d-none rounded-0"><i class="fa fa-close"></i></button>
                                                         <input type="file" class="cropit-image-input nopreview">
                                                         <div class="cropit-preview mx-auto"></div>
                                                         <input type="range" class="cropit-image-zoom-input qrcdr-slider-input nopreview">
                                                      </div>
                                                      <input id="bg_image" type="hidden" name="bg_image">
                                                      <div class="form-check form-switch d-none negative-code">
                                                         <input type="checkbox" class="form-check-input" id="negative-qr" name="negative_qr">
                                                         <label class="form-check-label" for="negative-qr">Masked</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <label>Foreground</label>
                                                   <input type="text" class="form-control qrcolorpicker rounded-0 ltr" value="#000000" name="frontcolor">
                                                   <div class="form-group">
                                                      <div class="form-check form-switch">
                                                         <input type="checkbox" class="form-check-input collapse-control" id="gradient-bg" data-bs-target="#collapse-gradient" data-target="#collapse-gradient" name="gradient">
                                                         <label class="form-check-label" for="gradient-bg">Gradient</label>
                                                      </div>
                                                   </div>
                                                   <div class="collapse" id="collapse-gradient">
                                                      <label>Second color</label>
                                                      <input type="text" class="form-control qrcolorpicker qrcolorpicker_bg rounded-0 ltr" value="#8900D5" name="gradient_color">
                                                      <div class="form-group">
                                                         <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" id="radial-gradient" name="radial">
                                                            <label class="form-check-label" for="radial-gradient">Radial</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="accordion-item d-grid">
                                       <button class="mb-2 btn btn-outline-primary btn-lg btn-block text-start text-left rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStyle">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 24 24">
                                             <path d="M21 21v3h3v-3h-1v-1h-1v1h-1zm2 1v1h-1v-1h1zm-23 2h8v-8h-8v8zm1-7h6v6h-6v-6zm20 3v-1h1v1h-1zm-19-2h4v4h-4v-4zm8-3v2h-1v-2h1zm2-8h1v1h-1v-1zm1-1h1v1h-1v-1zm1 2v-1h1v1h-1zm0-2h1v-6h-3v1h-3v1h3v1h2v3zm-1-4v-1h1v1h-1zm-7 4h-4v-4h4v4zm6 0h-1v-2h-2v-1h3v1h1v1h-1v1zm-4-6h-8v8h8v-8zm-1 7h-6v-6h6v6zm3 0h-1v-1h2v2h-1v-1zm-3 3v1h-1v-1h1zm15 6h2v3h-1v-1h-2v1h-1v-1h-1v-1h1v-1h1v1h1v-1zm-4 2h-1v1h-1v-1h-1v-1h1v-1h-2v-1h-1v1h-1v1h-2v1h-1v6h5v-1h-1v-2h-1v2h-2v-1h1v-1h-1v-1h3v-1h2v2h-1v1h1v2h1v-2h1v1h1v-1h1v-2h1v-1h-2v-1zm-1 3h-1v-1h1v1zm6-6v-2h1v2h-1zm-9 5v1h-1v-1h1zm5 3v-1h1v2h-2v-1h1zm-3-23v8h8v-8h-8zm7 7h-6v-6h6v6zm-1-1h-4v-4h4v4zm1 4h1v2h-1v1h-2v-4h1v2h1v-1zm-4 6v-3h1v3h-1zm-13-7v1h-2v1h1v1h-3v-1h1v-1h-2v1h-1v-2h6zm-1 4v-1h1v3h-1v-1h-1v1h-1v-1h-1v1h-2v-1h1v-1h4zm-4-1v1h-1v-1h1zm19-2h-1v-1h1v1zm-13 4h1v1h-1v-1zm15 2h-1v-1h1v1zm-5 1v-1h1v1h-1zm-1-1h1v-3h2v-1h1v-1h-1v-1h-2v-1h-1v1h-1v-1h-1v1h-1v-1h-1v1h-1v1h-1v-1h1v-1h-4v1h2v1h-2v1h1v2h1v-1h2v2h1v-4h1v2h3v1h-2v1h2v1zm1-5h1v1h-1v-1zm-2 1h-1v-1h1v1z"/>
                                          </svg>
                                          <span class="vertical-middle">Design</span>
                                       </button>
                                       <div class="collapse" id="collapseStyle" data-bs-parent="#collapseSettings" data-parent="#collapseSettings">
                                          <div class="col-12">
                                             <label>Pattern</label>
                                          </div>
                                          <div class="col-12 mb-2">
                                             <div class="styleselecta d-inline-block">
                                                <input type="radio" name="pattern" id="pattern_default" value="default" checked class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_default">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M5,1h1l0-1L4,0v1H3V0L0,0v0v0v2h1V1h0h1h1v1v0v0l0,0H2v1H1H0h0v3h0v0h2v0H1l0-2h1l0,1h1v1h3v0H5v0V5h1V4H5v1H3 l0-2l1,0v1h1V3h1V2H5V1z M5,3H4V2h1V3z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_circle" value="circle"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_circle">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <circle cx="0.5" cy="0.5" r="0.5"/>
                                                      <circle cx="1.5" cy="0.5" r="0.5"/>
                                                      <circle cx="3.5" cy="0.5" r="0.5"/>
                                                      <circle cx="4.5" cy="0.5" r="0.5"/>
                                                      <circle cx="0.5" cy="1.5" r="0.5"/>
                                                      <circle cx="4.5" cy="1.5" r="0.5"/>
                                                      <circle cx="5.5" cy="1.5" r="0.5"/>
                                                      <circle cx="0.5" cy="2.5" r="0.5"/>
                                                      <circle cx="1.5" cy="2.5" r="0.5"/>
                                                      <circle cx="0.5" cy="3.5" r="0.5"/>
                                                      <circle cx="1.5" cy="3.5" r="0.5"/>
                                                      <circle cx="4.5" cy="3.5" r="0.5"/>
                                                      <circle cx="5.5" cy="3.5" r="0.5"/>
                                                      <circle cx="2.5" cy="4.5" r="0.5"/>
                                                      <circle cx="1.5" cy="5.5" r="0.5"/>
                                                      <circle cx="3.5" cy="5.5" r="0.5"/>
                                                      <circle cx="5.5" cy="5.5" r="0.5"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_dot" value="dot"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_dot">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <circle cx="0.5" cy="0.5" r="0.3"/>
                                                      <circle cx="1.5" cy="0.5" r="0.3"/>
                                                      <circle cx="3.5" cy="0.5" r="0.3"/>
                                                      <circle cx="4.5" cy="0.5" r="0.3"/>
                                                      <circle cx="0.5" cy="1.5" r="0.3"/>
                                                      <circle cx="4.5" cy="1.5" r="0.3"/>
                                                      <circle cx="5.5" cy="1.5" r="0.3"/>
                                                      <circle cx="0.5" cy="2.5" r="0.3"/>
                                                      <circle cx="1.5" cy="2.5" r="0.3"/>
                                                      <circle cx="0.5" cy="3.5" r="0.3"/>
                                                      <circle cx="1.5" cy="3.5" r="0.3"/>
                                                      <circle cx="4.5" cy="3.5" r="0.3"/>
                                                      <circle cx="5.5" cy="3.5" r="0.3"/>
                                                      <circle cx="2.5" cy="4.5" r="0.3"/>
                                                      <circle cx="1.5" cy="5.5" r="0.3"/>
                                                      <circle cx="3.5" cy="5.5" r="0.3"/>
                                                      <circle cx="5.5" cy="5.5" r="0.3"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_star" value="star"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_star">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon points="0.5,0.8 0.2,1 0.2,0.6 0,0.4 0.3,0.3 0.5,0 0.7,0.3 1,0.4 0.7,0.6 0.8,1"/>
                                                      <polygon points="2.5,0.8 2.2,1 2.2,0.6 2,0.4 2.3,0.3 2.5,0 2.7,0.3 3,0.4 2.7,0.6 2.8,1"/>
                                                      <polygon points="4.5,0.8 4.2,1 4.3,0.6 4,0.4 4.3,0.3 4.5,0 4.7,0.3 5,0.4 4.8,0.6 4.8,1"/>
                                                      <polygon points="5.5,0.8 5.2,1 5.3,0.6 5,0.4 5.3,0.3 5.5,0 5.7,0.3 6,0.4 5.8,0.6 5.8,1"/>
                                                      <polygon points="3.5,1.8 3.2,2 3.2,1.6 3,1.4 3.3,1.3 3.5,1 3.7,1.3 4,1.4 3.7,1.6 3.8,2"/>
                                                      <polygon points="4.5,1.8 4.2,2 4.2,1.6 4,1.4 4.3,1.3 4.5,1 4.7,1.3 5,1.4 4.7,1.6 4.8,2"/>
                                                      <polygon points="2.5,2.8 2.2,3 2.2,2.6 2,2.4 2.3,2.3 2.5,2 2.7,2.3 3,2.4 2.7,2.6 2.8,3"/>
                                                      <polygon points="3.5,2.8 3.2,3 3.2,2.6 3,2.4 3.3,2.3 3.5,2 3.7,2.3 4,2.4 3.7,2.6 3.8,3"/>
                                                      <polygon points="0.5,3.8 0.2,4 0.2,3.6 0,3.4 0.3,3.3 0.5,3 0.7,3.3 1,3.4 0.7,3.6 0.8,4"/>
                                                      <polygon points="1.5,3.8 1.2,4 1.2,3.6 1,3.4 1.3,3.3 1.5,3 1.7,3.3 2,3.4 1.7,3.6 1.8,4"/>
                                                      <polygon points="2.5,5.8 2.2,6 2.2,5.6 2,5.4 2.3,5.3 2.5,5 2.7,5.3 3,5.4 2.8,5.6 2.8,6"/>
                                                      <polygon points="3.5,5.8 3.2,6 3.2,5.6 3,5.4 3.3,5.3 3.5,5 3.7,5.3 4,5.4 3.8,5.6 3.8,6"/>
                                                      <polygon points="0.5,1.8 0.2,2 0.2,1.6 0,1.4 0.3,1.3 0.5,1 0.7,1.3 1,1.4 0.7,1.6 0.8,2"/>
                                                      <polygon points="4.5,3.8 4.2,4 4.3,3.6 4,3.4 4.3,3.3 4.5,3 4.7,3.3 5,3.4 4.8,3.6 4.8,4"/>
                                                      <polygon points="5.5,4.8 5.2,5 5.3,4.6 5,4.4 5.3,4.3 5.5,4 5.7,4.3 6,4.4 5.8,4.6 5.8,5"/>
                                                      <polygon points="0.5,5.8 0.2,6 0.2,5.6 0,5.4 0.3,5.3 0.5,5 0.7,5.3 1,5.4 0.7,5.6 0.8,6"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_diamond" value="diamond"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_diamond">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <rect x="0.1" y="0.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.2075 0.4992)" width="0.7" height="0.7"/>
                                                      <rect x="0.1" y="1.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.9146 0.7923)" width="0.7" height="0.7"/>
                                                      <rect x="2.1" y="0.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 0.3783 1.9134)" width="0.7" height="0.7"/>
                                                      <rect x="4.1" y="0.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 0.9641 3.3276)" width="0.7" height="0.7"/>
                                                      <rect x="5.1" y="0.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 1.257 4.0347)" width="0.7" height="0.7"/>
                                                      <rect x="4.1" y="1.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 0.257 3.6205)" width="0.7" height="0.7"/>
                                                      <rect x="3.1" y="1.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.593460e-02 2.9134)" width="0.7" height="0.7"/>
                                                      <rect x="3.1" y="2.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.743 3.2063)" width="0.7" height="0.7"/>
                                                      <rect x="2.1" y="2.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.0359 2.4992)" width="0.7" height="0.7"/>
                                                      <rect x="1.1" y="3.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.0359 2.0849)" width="0.7" height="0.7"/>
                                                      <rect x="0.1" y="3.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.3287 1.3777)" width="0.7" height="0.7"/>
                                                      <rect x="0.1" y="5.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.7428 1.9634)" width="0.7" height="0.7"/>
                                                      <rect x="2.1" y="5.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.1573 3.3778)" width="0.7" height="0.7"/>
                                                      <rect x="3.1" y="5.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.8644 4.0849)" width="0.7" height="0.7"/>
                                                      <rect x="5.1" y="4.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.5715 5.2063)" width="0.7" height="0.7"/>
                                                      <rect x="4.1" y="3.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.1573 4.2063)" width="0.7" height="0.7"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_sparkle" value="sparkle"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_sparkle">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.4,0.9L0.4,0.9L0.4,0.9h0.1c0-0.2,0.2-0.3,0.4-0.4l0.1,0l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4L1,1.5 v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4L1,2.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1 c0-0.2,0.2-0.3,0.4-0.4l0.1,0V2.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4V1.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0V1.5l-0.1,0 c-0.2,0-0.3-0.2-0.4-0.4V0.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0V0.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H1.5l0,0.1 c0,0.2-0.2,0.3-0.4,0.4L1,0.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H0.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4L0,0.5v0.1l0.1,0 C0.3,0.6,0.4,0.7,0.4,0.9z"/>
                                                      <path d="M3.6,4.1L3.6,4.1L3.6,4.1H3.4c0,0.2-0.2,0.3-0.4,0.4H2.9c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H2.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4 L2,4.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4H1.9c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H1.5l0,0.1 c0,0.2-0.2,0.3-0.4,0.4H0.9c-0.2,0-0.3-0.2-0.4-0.4V4.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0V4.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4V3.9 c0-0.2,0.2-0.3,0.4-0.4l0.1,0V3.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H0.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4L0,3.5v0.1l0.1,0 c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4L0,4.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4L0,5.5v0.1 l0.1,0c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1c0-0.2,0.2-0.3,0.4-0.4h0.1c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1 c0-0.2,0.2-0.3,0.4-0.4h0.1c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1c0-0.2,0.2-0.3,0.4-0.4h0.1c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1 l0-0.1c0-0.2,0.2-0.3,0.4-0.4l0.1,0V5.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4V4.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0V4.5l-0.1,0 C3.7,4.4,3.6,4.3,3.6,4.1z M3.4,5.1c0,0.2-0.2,0.3-0.4,0.4H2.9c-0.2,0-0.3-0.2-0.4-0.4V4.9c0-0.2,0.2-0.3,0.4-0.4h0.1 c0.2,0,0.3,0.2,0.4,0.4V5.1z"/>
                                                      <path d="M5.6,4.1L5.6,4.1L5.6,4.1H5.4c0,0.2-0.2,0.3-0.4,0.4L5,4.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1 c0-0.2,0.2-0.3,0.4-0.4l0.1,0V4.5l-0.1,0C5.7,4.4,5.6,4.3,5.6,4.1z"/>
                                                      <path d="M5.6,2.1L5.6,2.1L5.6,2.1H5.4c0,0.2-0.2,0.3-0.4,0.4H4.9c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H4.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4 H3.9c-0.2,0-0.3-0.2-0.4-0.4V1.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0V1.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4V0.9c0-0.2,0.2-0.3,0.4-0.4l0.1,0 V0.5l-0.1,0c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H3.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4L3,0.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1 c0,0.2-0.2,0.3-0.4,0.4L3,1.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4v0.1c0,0.2-0.2,0.3-0.4,0.4L3,2.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4 l0,0.1h0.1l0-0.1c0-0.2,0.2-0.3,0.4-0.4h0.1c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1c0-0.2,0.2-0.3,0.4-0.4h0.1 c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1l0-0.1c0-0.2,0.2-0.3,0.4-0.4l0.1,0V2.5l-0.1,0C5.7,2.4,5.6,2.3,5.6,2.1z"/>
                                                      <path d="M5.9,0.4c-0.2,0-0.3-0.2-0.4-0.4l0-0.1H5.5l0,0.1c0,0.2-0.2,0.3-0.4,0.4L5,0.5v0.1l0.1,0c0.2,0,0.3,0.2,0.4,0.4l0,0.1h0.1 l0-0.1c0-0.2,0.2-0.3,0.4-0.4V0.4L5.9,0.4L5.9,0.4z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_danger" value="danger"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_danger">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon points="2.9,0.5 3,0.4 3,0 2.6,0 2.5,0.1 2.4,0 2,0 2,0.4 2.1,0.5 2,0.6 2,1 2.4,1 2.5,0.9 2.6,1 3,1 3,0.6"/>
                                                      <path d="M6,0H5.6L5.5,0.1L5.4,0H5H4.6L4.5,0.1L4.4,0H4v0.4l0.1,0.1L4,0.6V1H3.6L3.5,1.1L3.4,1H3v0.4l0.1,0.1L3,1.6V2 h0.4l0.1-0.1L3.6,2H4h0.4l0.1-0.1L4.6,2H5V1.6L4.9,1.5L5,1.4V1h0.4l0.1-0.1L5.6,1H6V0.6L5.9,0.5L6,0.4V0z M4,1.6L3.9,1.5L4,1.4 l0.1,0.1L4,1.6z M4.5,1.1L4.4,1l0.1-0.1L4.6,1L4.5,1.1z M5,0.6L4.9,0.5L5,0.4l0.1,0.1L5,0.6z"/>
                                                      <polygon points="2.5,2.1 2.4,2 2,2 2,2.4 2.1,2.5 2,2.6 2,3 2.4,3 2.5,2.9 2.6,3 3,3 3,2.6 2.9,2.5 3,2.4 3,2 2.6,2"/>
                                                      <path d="M0.5,1.9L0.6,2H1V1.6L0.9,1.5L1,1.4V1V0.6L0.9,0.5L1,0.4V0H0.6L0.5,0.1L0.4,0H0v0.4l0.1,0.1L0,0.6V1v0.4 l0.1,0.1L0,1.6V2h0.4L0.5,1.9z M0.5,0.9L0.6,1L0.5,1.1L0.4,1L0.5,0.9z"/>
                                                      <path d="M1.5,3.1L1.4,3H1H0.6L0.5,3.1L0.4,3H0v0.4l0.1,0.1L0,3.6V4h0.4l0.1-0.1L0.6,4H1h0.4l0.1-0.1L1.6,4H2V3.6 L1.9,3.5L2,3.4V3H1.6L1.5,3.1z M1,3.6L0.9,3.5L1,3.4l0.1,0.1L1,3.6z"/>
                                                      <polygon points="0.5,5.1 0.4,5 0,5 0,5.4 0.1,5.5 0,5.6 0,6 0.4,6 0.5,5.9 0.6,6 1,6 1,5.6 0.9,5.5 1,5.4 1,5 0.6,5"/>
                                                      <path d="M3.5,5.1L3.4,5H3H2.6L2.5,5.1L2.4,5H2v0.4l0.1,0.1L2,5.6V6h0.4l0.1-0.1L2.6,6H3h0.4l0.1-0.1L3.6,6H4V5.6 L3.9,5.5L4,5.4V5H3.6L3.5,5.1z M3,5.6L2.9,5.5L3,5.4l0.1,0.1L3,5.6z"/>
                                                      <polygon points="4.9,3.5 5,3.4 5,3 4.6,3 4.5,3.1 4.4,3 4,3 4,3.4 4.1,3.5 4,3.6 4,4 4.4,4 4.5,3.9 4.6,4 5,4 5,3.6"/>
                                                      <polygon points="5.5,4.1 5.4,4 5,4 5,4.4 5.1,4.5 5,4.6 5,5 5.4,5 5.5,4.9 5.6,5 6,5 6,4.6 5.9,4.5 6,4.4 6,4 5.6,4"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_cross" value="cross"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_cross">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon points="0.3,2 0.7,2 0.7,1.7 1,1.7 1,1.3 0.7,1.3 0.7,1 0.7,0.7 1,0.7 1,0.3 0.7,0.3 0.7,0 0.3,0 0.3,0.3 0,0.3 0,0.7 0.3,0.7 0.3,1 0.3,1.3 0,1.3 0,1.7 0.3,1.7 "/>
                                                      <polygon points="2.3,1 2.7,1 2.7,0.7 3,0.7 3,0.3 2.7,0.3 2.7,0 2.3,0 2.3,0.3 2,0.3 2,0.7 2.3,0.7 "/>
                                                      <polygon points="5.7,0.3 5.7,0 5.3,0 5.3,0.3 5,0.3 4.7,0.3 4.7,0 4.3,0 4.3,0.3 4,0.3 4,0.7 4.3,0.7 4.3,1 4.3,1.3 4,1.3 3.7,1.3 3.7,1 3.3,1 3.3,1.3 3,1.3 3,1.7 3.3,1.7 3.3,2 3.7,2 3.7,1.7 4,1.7 4,1.7 4.3,1.7 4.3,2 4.7,2 4.7,1.7 5,1.7 5,1.3 4.7,1.3 4.7,1 4.7,0.7 5,0.7 5,0.7 5.3,0.7 5.3,1 5.7,1 5.7,0.7 6,0.7 6,0.3 "/>
                                                      <polygon points="2.3,3 2.7,3 2.7,2.7 3,2.7 3,2.3 2.7,2.3 2.7,2 2.3,2 2.3,2.3 2,2.3 2,2.7 2.3,2.7 "/>
                                                      <polygon points="1.7,3 1.3,3 1.3,3.3 1,3.3 0.7,3.3 0.7,3 0.3,3 0.3,3.3 0,3.3 0,3.7 0.3,3.7 0.3,4 0.7,4 0.7,3.7 1,3.7 1,3.7 1.3,3.7 1.3,4 1.7,4 1.7,3.7 2,3.7 2,3.3 1.7,3.3 "/>
                                                      <polygon points="4.7,3 4.3,3 4.3,3.3 4,3.3 4,3.7 4.3,3.7 4.3,4 4.7,4 4.7,3.7 5,3.7 5,3.3 4.7,3.3 "/>
                                                      <polygon points="5.7,4 5.3,4 5.3,4.3 5,4.3 5,4.7 5.3,4.7 5.3,5 5.7,5 5.7,4.7 6,4.7 6,4.3 5.7,4.3 "/>
                                                      <polygon points="3.7,5 3.3,5 3.3,5.3 3,5.3 2.7,5.3 2.7,5 2.3,5 2.3,5.3 2,5.3 2,5.7 2.3,5.7 2.3,6 2.7,6 2.7,5.7 3,5.7 3,5.7 3.3,5.7 3.3,6 3.7,6 3.7,5.7 4,5.7 4,5.3 3.7,5.3 "/>
                                                      <polygon points="0.7,5 0.3,5 0.3,5.3 0,5.3 0,5.7 0.3,5.7 0.3,6 0.7,6 0.7,5.7 1,5.7 1,5.3 0.7,5.3 "/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_plus" value="plus"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_plus">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.7,0.8L0.7,0.8L0.7,0.8c0.1-0.1,0.2-0.1,0.2-0.1C1,0.6,1,0.6,1,0.5c0-0.1-0.1-0.2-0.2-0.2H0.7V0.2
                                                         C0.7,0.1,0.6,0,0.5,0S0.3,0.1,0.3,0.2v0.1H0.2C0.1,0.3,0,0.4,0,0.5s0.1,0.2,0.2,0.2h0.1v0.1C0.3,0.9,0.4,1,0.5,1 c0.1,0,0.1,0,0.2-0.1S0.7,0.8,0.7,0.8z"/>
                                                      <path d="M2.2,0.7L2.2,0.7L2.2,0.7C2.3,0.9,2.4,1,2.5,1c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V0.7h0.1 c0.1,0,0.1,0,0.2-0.1C3,0.6,3,0.6,3,0.5c0-0.1-0.1-0.2-0.2-0.2H2.7V0.2C2.7,0.1,2.6,0,2.5,0S2.3,0.1,2.3,0.2v0.1H2.2 C2.1,0.3,2,0.4,2,0.5S2.1,0.7,2.2,0.7z"/>
                                                      <path d="M4.7,0.8L4.7,0.8L4.7,0.8c0.1-0.1,0.2-0.1,0.2-0.1C5,0.6,5,0.6,5,0.5c0-0.1-0.1-0.2-0.2-0.2H4.7V0.2 C4.7,0.1,4.6,0,4.5,0S4.3,0.1,4.3,0.2v0.1H4.2C4.1,0.3,4,0.4,4,0.5s0.1,0.2,0.2,0.2h0.1v0.1C4.3,0.9,4.4,1,4.5,1 c0.1,0,0.1,0,0.2-0.1S4.7,0.8,4.7,0.8z"/>
                                                      <path d="M5.2,0.7L5.2,0.7L5.2,0.7C5.3,0.9,5.4,1,5.5,1c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V0.7h0.1 c0.1,0,0.1,0,0.2-0.1C6,0.6,6,0.6,6,0.5c0-0.1-0.1-0.2-0.2-0.2H5.7V0.2C5.7,0.1,5.6,0,5.5,0S5.3,0.1,5.3,0.2v0.1H5.2 C5.1,0.3,5,0.4,5,0.5S5.1,0.7,5.2,0.7z"/>
                                                      <path d="M4.2,1.7L4.2,1.7L4.2,1.7C4.3,1.9,4.4,2,4.5,2c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V1.7h0.1 c0.1,0,0.1,0,0.2-0.1C5,1.6,5,1.6,5,1.5c0-0.1-0.1-0.2-0.2-0.2H4.7V1.2C4.7,1.1,4.6,1,4.5,1S4.3,1.1,4.3,1.2v0.1H4.2 C4.1,1.3,4,1.4,4,1.5S4.1,1.7,4.2,1.7z"/>
                                                      <path d="M3.7,1.8L3.7,1.8L3.7,1.8c0.1-0.1,0.2-0.1,0.2-0.1C4,1.6,4,1.6,4,1.5c0-0.1-0.1-0.2-0.2-0.2H3.7V1.2 C3.7,1.1,3.6,1,3.5,1S3.3,1.1,3.3,1.2v0.1H3.2C3.1,1.3,3,1.4,3,1.5s0.1,0.2,0.2,0.2h0.1v0.1C3.3,1.9,3.4,2,3.5,2 c0.1,0,0.1,0,0.2-0.1S3.7,1.8,3.7,1.8z"/>
                                                      <path d="M3.2,2.7L3.2,2.7L3.2,2.7C3.3,2.9,3.4,3,3.5,3c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V2.7h0.1 c0.1,0,0.1,0,0.2-0.1C4,2.6,4,2.6,4,2.5c0-0.1-0.1-0.2-0.2-0.2H3.7V2.2C3.7,2.1,3.6,2,3.5,2S3.3,2.1,3.3,2.2v0.1H3.2 C3.1,2.3,3,2.4,3,2.5S3.1,2.7,3.2,2.7z"/>
                                                      <path d="M2.2,2.7L2.2,2.7L2.2,2.7C2.3,2.9,2.4,3,2.5,3c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V2.7h0.1 c0.1,0,0.1,0,0.2-0.1C3,2.6,3,2.6,3,2.5c0-0.1-0.1-0.2-0.2-0.2H2.7V2.2C2.7,2.1,2.6,2,2.5,2S2.3,2.1,2.3,2.2v0.1H2.2 C2.1,2.3,2,2.4,2,2.5S2.1,2.7,2.2,2.7z"/>
                                                      <path d="M0.3,1.2L0.3,1.2L0.3,1.2C0.1,1.3,0,1.4,0,1.5s0.1,0.2,0.2,0.2h0.1v0.1C0.3,1.9,0.4,2,0.5,2 c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V1.7h0.1c0.1,0,0.1,0,0.2-0.1C1,1.6,1,1.6,1,1.5c0-0.1-0.1-0.2-0.2-0.2H0.7V1.2 C0.7,1.1,0.6,1,0.5,1S0.3,1.1,0.3,1.2z"/>
                                                      <path d="M0.8,3.3L0.8,3.3L0.8,3.3C0.7,3.1,0.6,3,0.5,3S0.3,3.1,0.3,3.2v0.1H0.2C0.1,3.3,0,3.4,0,3.5s0.1,0.2,0.2,0.2 h0.1v0.1C0.3,3.9,0.4,4,0.5,4c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V3.7h0.1c0.1,0,0.1,0,0.2-0.1C1,3.6,1,3.6,1,3.5 C1,3.4,0.9,3.3,0.8,3.3z"/>
                                                      <path d="M1.8,3.3L1.8,3.3L1.8,3.3C1.7,3.1,1.6,3,1.5,3S1.3,3.1,1.3,3.2v0.1H1.2C1.1,3.3,1,3.4,1,3.5s0.1,0.2,0.2,0.2 h0.1v0.1C1.3,3.9,1.4,4,1.5,4c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V3.7h0.1c0.1,0,0.1,0,0.2-0.1C2,3.6,2,3.6,2,3.5 C2,3.4,1.9,3.3,1.8,3.3z"/>
                                                      <path d="M4.8,3.3L4.8,3.3L4.8,3.3C4.7,3.1,4.6,3,4.5,3S4.3,3.1,4.3,3.2v0.1H4.2C4.1,3.3,4,3.4,4,3.5s0.1,0.2,0.2,0.2 h0.1v0.1C4.3,3.9,4.4,4,4.5,4c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V3.7h0.1c0.1,0,0.1,0,0.2-0.1C5,3.6,5,3.6,5,3.5 C5,3.4,4.9,3.3,4.8,3.3z"/>
                                                      <path d="M5.8,4.3L5.8,4.3L5.8,4.3C5.7,4.1,5.6,4,5.5,4S5.3,4.1,5.3,4.2v0.1H5.2C5.1,4.3,5,4.4,5,4.5s0.1,0.2,0.2,0.2 h0.1v0.1C5.3,4.9,5.4,5,5.5,5c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V4.7h0.1c0.1,0,0.1,0,0.2-0.1C6,4.6,6,4.6,6,4.5 C6,4.4,5.9,4.3,5.8,4.3z"/>
                                                      <path d="M3.8,5.3L3.8,5.3L3.8,5.3C3.7,5.1,3.6,5,3.5,5S3.3,5.1,3.3,5.2v0.1H3.2C3.1,5.3,3,5.4,3,5.5s0.1,0.2,0.2,0.2 h0.1v0.1C3.3,5.9,3.4,6,3.5,6c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V5.7h0.1c0.1,0,0.1,0,0.2-0.1C4,5.6,4,5.6,4,5.5 C4,5.4,3.9,5.3,3.8,5.3z"/>
                                                      <path d="M2.8,5.3L2.8,5.3L2.8,5.3C2.7,5.1,2.6,5,2.5,5S2.3,5.1,2.3,5.2v0.1H2.2C2.1,5.3,2,5.4,2,5.5s0.1,0.2,0.2,0.2 h0.1v0.1C2.3,5.9,2.4,6,2.5,6c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V5.7h0.1c0.1,0,0.1,0,0.2-0.1C3,5.6,3,5.6,3,5.5 C3,5.4,2.9,5.3,2.8,5.3z"/>
                                                      <path d="M0.8,5.3L0.8,5.3L0.8,5.3C0.7,5.1,0.6,5,0.5,5S0.3,5.1,0.3,5.2v0.1H0.2C0.1,5.3,0,5.4,0,5.5s0.1,0.2,0.2,0.2 h0.1v0.1C0.3,5.9,0.4,6,0.5,6c0.1,0,0.1,0,0.2-0.1s0.1-0.1,0.1-0.2V5.7h0.1c0.1,0,0.1,0,0.2-0.1C1,5.6,1,5.6,1,5.5 C1,5.4,0.9,5.3,0.8,5.3z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_x" value="x"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_x">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.5,0.9L0.5,0.9C0.6,1,0.7,1,0.7,1s0.1,0,0.2-0.1C1,0.8,1,0.7,0.9,0.6L0.9,0.5l0.1-0.1C1,0.3,1,0.2,0.9,0.1 S0.7,0,0.6,0.1L0.5,0.1L0.4,0.1C0.3,0,0.2,0,0.1,0.1C0,0.2,0,0.3,0.1,0.4l0.1,0.1L0.1,0.6C0,0.7,0,0.8,0.1,0.9C0.1,1,0.2,1,0.3,1 C0.3,1,0.4,1,0.5,0.9L0.5,0.9z"/>
                                                      <path d="M2.1,0.9C2.1,1,2.2,1,2.3,1c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C2.6,1,2.7,1,2.7,1s0.1,0,0.2-0.1 C3,0.8,3,0.7,2.9,0.6L2.9,0.5l0.1-0.1C3,0.3,3,0.2,2.9,0.1S2.7,0,2.6,0.1L2.5,0.1L2.4,0.1C2.3,0,2.2,0,2.1,0.1S2,0.3,2.1,0.4 l0.1,0.1L2.1,0.6C2,0.7,2,0.8,2.1,0.9z"/>
                                                      <path d="M4.9,0.5L4.9,0.5C5,0.4,5,0.3,5,0.3s0-0.1-0.1-0.2C4.8,0,4.7,0,4.6,0.1L4.5,0.1L4.4,0.1C4.3,0,4.2,0,4.1,0.1 S4,0.3,4.1,0.4l0.1,0.1L4.1,0.6C4,0.7,4,0.8,4.1,0.9C4.1,1,4.2,1,4.3,1c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C4.6,1,4.7,1,4.7,1 s0.1,0,0.2-0.1C5,0.9,5,0.8,5,0.7C5,0.7,5,0.6,4.9,0.5L4.9,0.5z"/>
                                                      <path d="M5.9,0.5L5.9,0.5C6,0.3,6,0.2,5.9,0.1S5.7,0,5.6,0.1L5.5,0.1L5.4,0.1C5.3,0,5.2,0,5.1,0.1C5,0.1,5,0.2,5,0.3 s0,0.1,0.1,0.2l0.1,0.1L5.1,0.6C5,0.6,5,0.7,5,0.7c0,0.1,0,0.1,0.1,0.2C5.1,1,5.2,1,5.3,1c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1 C5.6,1,5.7,1,5.7,1s0.1,0,0.2-0.1C6,0.8,6,0.7,5.9,0.5L5.9,0.5z"/>
                                                      <path d="M4.5,1.1L4.5,1.1C4.4,1,4.3,1,4.3,1S4.1,1,4.1,1.1C4,1.1,4,1.2,4,1.3s0,0.1,0.1,0.2l0.1,0.1L4.1,1.6 C4,1.6,4,1.7,4,1.7c0,0.1,0,0.1,0.1,0.2C4.1,2,4.2,2,4.3,2c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C4.6,2,4.7,2,4.7,2s0.1,0,0.2-0.1 C5,1.8,5,1.7,4.9,1.6L4.9,1.5l0.1-0.1C5,1.3,5,1.2,4.9,1.1C4.9,1,4.8,1,4.7,1C4.7,1,4.6,1,4.5,1.1L4.5,1.1z"/>
                                                      <path d="M3.9,1.5L3.9,1.5C4,1.4,4,1.3,4,1.3s0-0.1-0.1-0.2C3.8,1,3.7,1,3.6,1.1L3.5,1.1L3.4,1.1C3.3,1,3.2,1,3.1,1.1 C3,1.2,3,1.3,3.1,1.4l0.1,0.1L3.1,1.6C3,1.7,3,1.8,3.1,1.9C3.1,2,3.2,2,3.3,2c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1 C3.6,2,3.7,2,3.7,2s0.1,0,0.2-0.1C4,1.9,4,1.8,4,1.7C4,1.7,4,1.6,3.9,1.5L3.9,1.5z"/>
                                                      <path d="M2.1,2.9C2.1,3,2.2,3,2.3,3c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C2.6,3,2.7,3,2.7,3s0.1,0,0.2-0.1 C3,2.8,3,2.7,2.9,2.6L2.9,2.5l0.1-0.1C3,2.3,3,2.2,2.9,2.1C2.8,2,2.7,2,2.6,2.1L2.5,2.1L2.4,2.1C2.3,2,2.2,2,2.1,2.1 C2,2.2,2,2.3,2.1,2.4l0.1,0.1L2.1,2.6C2,2.7,2,2.8,2.1,2.9z"/>
                                                      <path d="M0.1,1.9C0.1,2,0.2,2,0.3,2c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C0.6,2,0.7,2,0.7,2s0.1,0,0.2-0.1 C1,1.8,1,1.7,0.9,1.6L0.9,1.5l0.1-0.1C1,1.3,1,1.2,0.9,1.1C0.9,1,0.8,1,0.7,1C0.7,1,0.6,1,0.6,1.1L0.5,1.1L0.4,1.1 C0.4,1,0.3,1,0.3,1S0.1,1,0.1,1.1C0,1.2,0,1.3,0.1,1.4l0.1,0.1L0.1,1.6C0,1.7,0,1.8,0.1,1.9z"/>
                                                      <path d="M0.9,3.5L0.9,3.5C1,3.4,1,3.3,1,3.3s0-0.1-0.1-0.2C0.8,3,0.7,3,0.6,3.1L0.5,3.1L0.4,3.1C0.3,3,0.2,3,0.1,3.1 C0,3.2,0,3.3,0.1,3.4l0.1,0.1L0.1,3.6C0,3.7,0,3.8,0.1,3.9C0.1,4,0.2,4,0.3,4c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1 C0.6,4,0.7,4,0.7,4s0.1,0,0.2-0.1C1,3.9,1,3.8,1,3.7C1,3.7,1,3.6,0.9,3.5L0.9,3.5z"/>
                                                      <path d="M1.9,3.6L1.9,3.6V3.4C2,3.3,2,3.2,1.9,3.1C1.8,3,1.7,3,1.6,3.1L1.5,3.1L1.4,3.1C1.3,3,1.2,3,1.1,3.1 C1,3.1,1,3.2,1,3.3s0,0.1,0.1,0.2l0.1,0.1L1.1,3.6C1,3.6,1,3.7,1,3.7c0,0.1,0,0.1,0.1,0.2C1.1,4,1.2,4,1.3,4c0.1,0,0.1,0,0.2-0.1 l0.1-0.1l0.1,0.1C1.6,4,1.7,4,1.7,4s0.1,0,0.2-0.1C2,3.8,2,3.7,1.9,3.6z"/>
                                                      <path d="M4.9,3.6L4.9,3.6V3.4C5,3.3,5,3.2,4.9,3.1C4.8,3,4.7,3,4.6,3.1L4.5,3.1L4.4,3.1C4.3,3,4.2,3,4.1,3.1 C4,3.2,4,3.3,4.1,3.4l0.1,0.1L4.1,3.6C4,3.7,4,3.8,4.1,3.9C4.1,4,4.2,4,4.3,4c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1 C4.6,4,4.7,4,4.7,4s0.1,0,0.2-0.1C5,3.8,5,3.7,4.9,3.6z"/>
                                                      <path d="M5.9,4.1C5.8,4,5.7,4,5.6,4.1L5.5,4.1L5.4,4.1C5.3,4,5.2,4,5.1,4.1C5,4.2,5,4.3,5.1,4.4l0.1,0.1L5.1,4.6 C5,4.7,5,4.8,5.1,4.9C5.1,5,5.2,5,5.3,5c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C5.6,5,5.7,5,5.7,5s0.1,0,0.2-0.1C6,4.8,6,4.7,5.9,4.6 L5.9,4.5l0.1-0.1C6,4.3,6,4.2,5.9,4.1z"/>
                                                      <path d="M3.9,5.1C3.8,5,3.7,5,3.6,5.1L3.5,5.1L3.4,5.1C3.3,5,3.2,5,3.1,5.1C3,5.1,3,5.2,3,5.3s0,0.1,0.1,0.2l0.1,0.1 L3.1,5.6C3,5.6,3,5.7,3,5.7c0,0.1,0,0.1,0.1,0.2C3.1,6,3.2,6,3.3,6c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C3.6,6,3.7,6,3.7,6 s0.1,0,0.2-0.1C4,5.8,4,5.7,3.9,5.6L3.9,5.5l0.1-0.1C4,5.3,4,5.2,3.9,5.1z"/>
                                                      <path d="M2.9,5.5L2.9,5.5C3,5.4,3,5.3,3,5.3s0-0.1-0.1-0.2C2.8,5,2.7,5,2.6,5.1L2.5,5.1L2.4,5.1C2.3,5,2.2,5,2.1,5.1 C2,5.2,2,5.3,2.1,5.4l0.1,0.1L2.1,5.6C2,5.7,2,5.8,2.1,5.9C2.1,6,2.2,6,2.3,6c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1 C2.6,6,2.7,6,2.7,6s0.1,0,0.2-0.1C3,5.9,3,5.8,3,5.7C3,5.7,3,5.6,2.9,5.5L2.9,5.5z"/>
                                                      <path d="M0.9,5.1C0.8,5,0.7,5,0.6,5.1L0.5,5.1L0.4,5.1C0.3,5,0.2,5,0.1,5.1C0,5.2,0,5.3,0.1,5.4l0.1,0.1L0.1,5.6 C0,5.7,0,5.8,0.1,5.9C0.1,6,0.2,6,0.3,6c0.1,0,0.1,0,0.2-0.1l0.1-0.1l0.1,0.1C0.6,6,0.7,6,0.7,6s0.1,0,0.2-0.1C1,5.8,1,5.7,0.9,5.6 L0.9,5.5l0.1-0.1C1,5.3,1,5.2,0.9,5.1z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_heart" value="heart"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_heart">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.8,0C0.7,0,0.6,0,0.5,0.1C0.4,0,0.4,0,0.3,0C0.1,0,0,0.1,0,0.3c0,0.1,0,0.1,0,0.2l0,0L0.5,1l0.4-0.5 C1,0.4,1,0.3,1,0.3C1,0.1,0.9,0,0.8,0z"/>
                                                      <path d="M2.8,0C2.7,0,2.6,0,2.5,0.1C2.4,0,2.4,0,2.3,0C2.1,0,2,0.1,2,0.3c0,0.1,0,0.1,0,0.2l0,0L2.5,1l0.4-0.5 C3,0.4,3,0.3,3,0.3C3,0.1,2.9,0,2.8,0z"/>
                                                      <path d="M4.8,0C4.7,0,4.6,0,4.5,0.1C4.4,0,4.4,0,4.3,0C4.1,0,4,0.1,4,0.3c0,0.1,0,0.1,0,0.2l0,0L4.5,1l0.4-0.5 C5,0.4,5,0.3,5,0.3C5,0.1,4.9,0,4.8,0z"/>
                                                      <path d="M5,0.5L5.5,1l0.4-0.5C6,0.4,6,0.3,6,0.3C6,0.1,5.9,0,5.8,0C5.7,0,5.6,0,5.5,0.1C5.4,0,5.4,0,5.3,0 C5.1,0,5,0.1,5,0.3C5,0.3,5,0.4,5,0.5L5,0.5z"/>
                                                      <path d="M4.8,1C4.7,1,4.6,1,4.5,1.1C4.4,1,4.4,1,4.3,1C4.1,1,4,1.1,4,1.3c0,0.1,0,0.1,0,0.2l0,0L4.5,2l0.4-0.5 C5,1.4,5,1.3,5,1.3C5,1.1,4.9,1,4.8,1z"/>
                                                      <path d="M3.8,1C3.7,1,3.6,1,3.5,1.1C3.4,1,3.4,1,3.3,1C3.1,1,3,1.1,3,1.3c0,0.1,0,0.1,0,0.2l0,0L3.5,2l0.4-0.5 C4,1.4,4,1.3,4,1.3C4,1.1,3.9,1,3.8,1z"/>
                                                      <path d="M2.8,2C2.7,2,2.6,2,2.5,2.1C2.4,2,2.4,2,2.3,2C2.1,2,2,2.1,2,2.3c0,0.1,0,0.1,0,0.2l0,0L2.5,3l0.4-0.5 C3,2.4,3,2.3,3,2.3C3,2.1,2.9,2,2.8,2z"/>
                                                      <path d="M0.8,1C0.7,1,0.6,1,0.5,1.1C0.4,1,0.4,1,0.3,1C0.1,1,0,1.1,0,1.3c0,0.1,0,0.1,0,0.2l0,0L0.5,2l0.4-0.5 C1,1.4,1,1.3,1,1.3C1,1.1,0.9,1,0.8,1z"/>
                                                      <path d="M0.8,3C0.7,3,0.6,3,0.5,3.1C0.4,3,0.4,3,0.3,3C0.1,3,0,3.1,0,3.3c0,0.1,0,0.1,0,0.2l0,0L0.5,4l0.4-0.5 C1,3.4,1,3.3,1,3.3C1,3.1,0.9,3,0.8,3z"/>
                                                      <path d="M1.8,3C1.7,3,1.6,3,1.5,3.1C1.4,3,1.4,3,1.3,3C1.1,3,1,3.1,1,3.3c0,0.1,0,0.1,0,0.2l0,0L1.5,4l0.4-0.5 C2,3.4,2,3.3,2,3.3C2,3.1,1.9,3,1.8,3z"/>
                                                      <path d="M4.8,3C4.7,3,4.6,3,4.5,3.1C4.4,3,4.4,3,4.3,3C4.1,3,4,3.1,4,3.3c0,0.1,0,0.1,0,0.2l0,0L4.5,4l0.4-0.5 C5,3.4,5,3.3,5,3.3C5,3.1,4.9,3,4.8,3z"/>
                                                      <path d="M5.8,4C5.7,4,5.6,4,5.5,4.1C5.4,4,5.4,4,5.3,4C5.1,4,5,4.1,5,4.3c0,0.1,0,0.1,0,0.2l0,0L5.5,5l0.4-0.5 C6,4.4,6,4.3,6,4.3C6,4.1,5.9,4,5.8,4z"/>
                                                      <path d="M3.8,5C3.7,5,3.6,5,3.5,5.1C3.4,5,3.4,5,3.3,5C3.1,5,3,5.1,3,5.3c0,0.1,0,0.1,0,0.2l0,0L3.5,6l0.4-0.5 C4,5.4,4,5.3,4,5.3C4,5.1,3.9,5,3.8,5z"/>
                                                      <path d="M2.8,5C2.7,5,2.6,5,2.5,5.1C2.4,5,2.4,5,2.3,5C2.1,5,2,5.1,2,5.3c0,0.1,0,0.1,0,0.2l0,0L2.5,6l0.4-0.5 C3,5.4,3,5.3,3,5.3C3,5.1,2.9,5,2.8,5z"/>
                                                      <path d="M0.8,5C0.7,5,0.6,5,0.5,5.1C0.4,5,0.4,5,0.3,5C0.1,5,0,5.1,0,5.3c0,0.1,0,0.1,0,0.2l0,0L0.5,6l0.4-0.5 C1,5.4,1,5.3,1,5.3C1,5.1,0.9,5,0.8,5z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_shake" value="shake"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_shake">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <rect x="0.1" y="0.1" transform="matrix(0.9962 -8.720575e-02 8.720575e-02 0.9962 -4.170330e-02 4.550928e-02)" width="0.8" height="0.8"/>
                                                      <rect x="2.1" y="0.1" transform="matrix(6.981014e-02 -0.9976 0.9976 6.981014e-02 1.8266 2.9591)" width="0.8" height="0.8"/>
                                                      <rect x="4.1" y="0.1" transform="matrix(0.1045 -0.9945 0.9945 0.1045 3.5323 4.9232)" width="0.8" height="0.8"/>
                                                      <rect x="5.1" y="0.1" transform="matrix(0.9962 -8.713004e-02 8.713004e-02 0.9962 -2.265348e-02 0.4811)" width="0.8" height="0.8"/>
                                                      <rect x="4.1" y="1.1" transform="matrix(0.9986 -5.233859e-02 5.233859e-02 0.9986 -7.234332e-02 0.2376)" width="0.8" height="0.8"/>
                                                      <rect x="3.1" y="1.1" transform="matrix(0.1736 -0.9848 0.9848 0.1736 1.415 4.6864)" width="0.8" height="0.8"/>
                                                      <rect x="2.1" y="2.1" transform="matrix(0.9962 -8.720575e-02 8.720575e-02 0.9962 -0.2085 0.2275)" width="0.8" height="0.8"/>
                                                      <rect x="0.1" y="1.1" transform="matrix(5.233460e-02 -0.9986 0.9986 5.233460e-02 -1.0241 1.9209)" width="0.8" height="0.8"/>
                                                      <rect x="0.1" y="3.1" transform="matrix(0.9998 -1.747158e-02 1.747158e-02 0.9998 -6.107527e-02 9.270038e-03)" width="0.8" height="0.8"/>
                                                      <rect x="1.1" y="3.1" transform="matrix(3.486695e-02 -0.9994 0.9994 3.486695e-02 -2.0502 4.8771)" width="0.8" height="0.8"/>
                                                      <rect x="4.1" y="3.1" transform="matrix(0.1564 -0.9877 0.9877 0.1564 0.3392 7.3973)" width="0.8" height="0.8"/>
                                                      <rect x="5.1" y="4.1" transform="matrix(0.1045 -0.9945 0.9945 0.1045 0.4498 9.4996)" width="0.8" height="0.8"/>
                                                      <rect x="3.1" y="5.1" transform="matrix(0.9962 -8.720575e-02 8.720575e-02 0.9962 -0.4663 0.3262)" width="0.8" height="0.8"/>
                                                      <rect x="2.1" y="5.1" transform="matrix(8.719913e-02 -0.9962 0.9962 8.719913e-02 -3.1971 7.511)" width="0.8" height="0.8"/>
                                                      <rect x="0.1" y="5.1" transform="matrix(8.719913e-02 -0.9962 0.9962 8.719913e-02 -5.0227 5.5186)" width="0.8" height="0.8"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_blob" value="blob"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_blob">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <circle cx="5.5" cy="4.5" r="0.5"/>
                                                      <path d="M5.8,0.2C5.7,0.2,5.6,0.1,5.5,0.1c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4c0.1,0,0.2,0,0.3-0.1
                                                         C5.8,0.7,5.9,0.7,6,0.7V0.3C5.9,0.3,5.8,0.3,5.8,0.2z"/>
                                                      <path d="M3.9,4.5c0-0.2-0.2-0.4-0.4-0.4c-0.1,0-0.2,0-0.3,0.1C3.2,4.3,3.1,4.3,3,4.3c-0.1,0-0.2,0-0.2-0.1 C2.7,4.2,2.6,4.1,2.5,4.1c-0.2,0-0.4,0.2-0.4,0.4c0,0.1,0,0.2,0.1,0.3C2.3,4.8,2.3,4.9,2.3,5c0,0.2-0.1,0.3-0.3,0.3c0,0,0,0-0.1,0
                                                         C1.9,5.1,1.7,5,1.5,5S1.1,5.1,1.1,5.3c0,0,0,0-0.1,0v0c-0.1,0-0.2,0-0.2-0.1c0,0,0,0,0,0C0.7,5.2,0.7,5.1,0.7,5c0,0,0,0,0-0.1 C0.9,4.9,1,4.7,1,4.5S0.9,4.1,0.7,4.1c0,0,0,0,0-0.1h0c0-0.1,0-0.2,0.1-0.2c0.1-0.1,0.1-0.2,0.1-0.3c0-0.2-0.2-0.4-0.4-0.4 S0.1,3.3,0.1,3.5c0,0.1,0,0.2,0.1,0.3C0.3,3.8,0.3,3.9,0.3,4c0,0,0,0,0,0.1C0.1,4.1,0,4.3,0,4.5s0.1,0.4,0.3,0.4c0,0,0,0,0,0 c0,0,0,0,0,0c0,0.1,0,0.2-0.1,0.2C0.2,5.3,0.1,5.4,0.1,5.5c0,0.2,0.2,0.4,0.4,0.4c0.1,0,0.2,0,0.3-0.1C0.8,5.7,0.9,5.7,1,5.7v0 c0,0,0,0,0.1,0C1.1,5.9,1.3,6,1.5,6s0.4-0.1,0.4-0.3c0,0,0,0,0.1,0c0.2,0,0.3,0.1,0.3,0.3h0.3c0-0.2,0.1-0.3,0.3-0.3h0 c0,0,0,0,0.1,0c0.1,0,0.1,0,0.2,0.1c0,0,0,0,0,0C3.3,5.8,3.3,5.9,3.3,6h0.3c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0 c0.1-0.1,0.1-0.2,0.1-0.3c0-0.1,0-0.2-0.1-0.3c0,0,0,0,0,0C3.7,5.2,3.7,5.1,3.7,5h0c0-0.1,0-0.2,0.1-0.2C3.8,4.7,3.9,4.6,3.9,4.5z M3.2,5.2C3.2,5.2,3.2,5.2,3.2,5.2c0,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0h0C2.8,5.3,2.7,5.2,2.7,5c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0 C2.8,4.7,2.9,4.7,3,4.7s0.2,0,0.2,0.1c0,0,0,0,0,0C3.3,4.8,3.3,4.9,3.3,5h0C3.3,5.1,3.3,5.2,3.2,5.2z"/>
                                                      <path d="M5.2,2.8c0.1,0.1,0.2,0.1,0.3,0.1c0.2,0,0.4-0.2,0.4-0.4S5.7,2.1,5.5,2.1c-0.1,0-0.2,0-0.3,0.1 C5.2,2.3,5.1,2.3,5,2.3c0,0,0,0,0,0v0c0,0,0,0-0.1,0C4.9,2.1,4.7,2,4.5,2C4.3,2,4.1,2.1,4.1,2.3c0,0,0,0-0.1,0 c-0.1,0-0.2,0-0.2-0.1c0,0,0,0,0,0C3.7,2.2,3.7,2.1,3.7,2c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0c0.1-0.1,0.1-0.2,0.1-0.3 c0-0.1,0-0.2-0.1-0.3c0,0,0,0,0,0C3.7,1.2,3.7,1.1,3.7,1c0-0.1,0-0.2,0.1-0.2c0.1-0.1,0.1-0.2,0.1-0.3c0-0.2-0.2-0.4-0.4-0.4 c-0.2,0-0.4,0.2-0.4,0.4c0,0.1,0,0.2,0.1,0.3C3.3,0.8,3.3,0.9,3.3,1c0,0.1,0,0.2-0.1,0.2c0,0,0,0,0,0C3.2,1.3,3.1,1.4,3.1,1.5 c0,0.1,0,0.2,0.1,0.3c0,0,0,0,0,0C3.3,1.8,3.3,1.9,3.3,2c0,0.1,0,0.2-0.1,0.2C3.2,2.3,3.1,2.4,3.1,2.5c0,0.2,0.2,0.4,0.4,0.4 c0.1,0,0.2,0,0.3-0.1C3.8,2.7,3.9,2.7,4,2.7c0,0,0,0,0,0l0,0c0,0,0,0,0,0c0,0,0,0,0.1,0C4.1,2.9,4.3,3,4.5,3c0.2,0,0.4-0.1,0.4-0.3 c0,0,0,0,0.1,0c0,0,0,0,0,0C5.1,2.7,5.2,2.7,5.2,2.8z"/>
                                                      <path d="M0.5,0.9c0.1,0,0.2,0,0.3-0.1C0.8,0.7,0.9,0.7,1,0.7c0,0,0,0,0.1,0c0.1,0,0.1,0,0.2,0.1c0,0,0,0,0,0 C1.3,0.8,1.3,0.9,1.3,1h0c0,0,0,0,0,0.1C1.1,1.1,1,1.3,1,1.5s0.1,0.4,0.3,0.4c0,0,0,0,0,0.1c0,0,0,0,0,0c0,0.1,0,0.2-0.1,0.2 C1.2,2.3,1.1,2.4,1.1,2.5c0,0.2,0.2,0.4,0.4,0.4c0.2,0,0.4-0.2,0.4-0.4c0-0.1,0-0.2-0.1-0.3C1.7,2.2,1.7,2.1,1.7,2c0,0,0,0,0,0 c0,0,0,0,0,0C1.9,1.9,2,1.7,2,1.5S1.9,1.1,1.7,1.1c0,0,0,0,0-0.1v0c0-0.1,0-0.2,0.1-0.2c0,0,0,0,0,0c0.1-0.1,0.1-0.2,0.1-0.3 c0-0.1,0-0.2-0.1-0.3c0,0,0,0,0,0C1.7,0.2,1.7,0.1,1.7,0H1.3c0,0.1,0,0.2-0.1,0.2c0,0,0,0,0,0c0,0-0.1,0.1-0.2,0.1c0,0,0,0-0.1,0 c-0.1,0-0.2,0-0.2-0.1C0.7,0.2,0.6,0.1,0.5,0.1c-0.2,0-0.4,0.2-0.4,0.4S0.3,0.9,0.5,0.9z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_special-circle-orizz" value="special-circle-orizz"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_special-circle-orizz">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.5,0.9l1,0c0.2,0,0.4-0.2,0.4-0.4c0-0.2-0.2-0.4-0.4-0.4l-1,0c-0.2,0-0.4,0.2-0.4,0.4S0.3,0.9,0.5,0.9z"/>
                                                      <path d="M1.5,1.9l2,0c0.2,0,0.4-0.2,0.4-0.4c0-0.2-0.2-0.4-0.4-0.4l-2,0c-0.2,0-0.4,0.2-0.4,0.4S1.3,1.9,1.5,1.9z"/>
                                                      <path d="M3.5,0.9c0.2,0,0.4-0.2,0.4-0.4c0-0.2-0.2-0.4-0.4-0.4S3.1,0.3,3.1,0.5C3.1,0.7,3.3,0.9,3.5,0.9z"/>
                                                      <path d="M4.5,2.1l-3,0c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4l3,0c0.2,0,0.4-0.2,0.4-0.4S4.7,2.1,4.5,2.1z"/>
                                                      <path d="M1.9,3.5c0-0.2-0.2-0.4-0.4-0.4H0v0.8h1.5C1.7,3.9,1.9,3.7,1.9,3.5z"/>
                                                      <path d="M4.5,3.1c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4S4.7,3.1,4.5,3.1z"/>
                                                      <path d="M5.9,4.5c0-0.2-0.2-0.4-0.4-0.4l-1,0c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4l1,0C5.7,4.9,5.9,4.7,5.9,4.5z"/>
                                                      <path d="M3.5,4.1l-2,0c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4l2,0c0.2,0,0.4-0.2,0.4-0.4S3.7,4.1,3.5,4.1z"/>
                                                      <path d="M2.5,5.1l-2,0c-0.2,0-0.4,0.2-0.4,0.4c0,0.2,0.2,0.4,0.4,0.4l2,0c0.2,0,0.4-0.2,0.4-0.4S2.7,5.1,2.5,5.1z"/>
                                                      <path d="M6,0.1l-1.5,0c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4l1.5,0h0L6,0.1L6,0.1z"/>
                                                      <path d="M5.1,5.5c0,0.2,0.2,0.4,0.4,0.4H6V5.1H5.5C5.3,5.1,5.1,5.3,5.1,5.5z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_special-circle-vert" value="special-circle-vert"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_special-circle-vert">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.5,4.1c-0.2,0-0.4,0.2-0.4,0.4l0,1c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4l0-1C0.9,4.3,0.7,4.1,0.5,4.1z"/>
                                                      <path d="M1.5,2.1c-0.2,0-0.4,0.2-0.4,0.4l0,2c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4l0-2C1.9,2.3,1.7,2.1,1.5,2.1z"/>
                                                      <path d="M0.5,2.9c0.2,0,0.4-0.2,0.4-0.4S0.7,2.1,0.5,2.1c-0.2,0-0.4,0.2-0.4,0.4S0.3,2.9,0.5,2.9z"/>
                                                      <path d="M2.5,1.1c-0.2,0-0.4,0.2-0.4,0.4l0,3c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4l0-3C2.9,1.3,2.7,1.1,2.5,1.1z"/>
                                                      <path d="M3.5,4.1c-0.2,0-0.4,0.2-0.4,0.4V6h0.8V4.5C3.9,4.3,3.7,4.1,3.5,4.1z"/>
                                                      <path d="M3.5,1.1c-0.2,0-0.4,0.2-0.4,0.4s0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4S3.7,1.1,3.5,1.1z"/>
                                                      <path d="M4.5,1.9c0.2,0,0.4-0.2,0.4-0.4l0-1c0-0.2-0.2-0.4-0.4-0.4c-0.2,0-0.4,0.2-0.4,0.4l0,1 C4.1,1.7,4.3,1.9,4.5,1.9z"/>
                                                      <path d="M4.5,2.1c-0.2,0-0.4,0.2-0.4,0.4l0,2c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4l0-2C4.9,2.3,4.7,2.1,4.5,2.1z"/>
                                                      <path d="M5.5,3.1c-0.2,0-0.4,0.2-0.4,0.4l0,2c0,0.2,0.2,0.4,0.4,0.4c0.2,0,0.4-0.2,0.4-0.4l0-2 C5.9,3.3,5.7,3.1,5.5,3.1z"/>
                                                      <path d="M0.1,0l0,1.5c0,0.2,0.2,0.4,0.4,0.4s0.4-0.2,0.4-0.4l0-1.5v0L0.1,0L0.1,0z"/>
                                                      <path d="M5.5,0.9c0.2,0,0.4-0.2,0.4-0.4V0H5.1v0.5C5.1,0.7,5.3,0.9,5.5,0.9z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_special-circle" value="special-circle"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_special-circle">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M2.5,3C2.8,3,3,2.8,3,2.5L3,2h1.5C4.8,2,5,1.8,5,1.5C5,1.2,4.8,1,4.5,1H4V0L2,0l0,2.5C2,2.8,2.2,3,2.5,3z M4,1 L4,1L4,1L4,1z"/>
                                                      <path d="M5.5,3C5.2,3,5,3.2,5,3.5S5.2,4,5.5,4C5.8,4,6,3.8,6,3.5S5.8,3,5.5,3z"/>
                                                      <path d="M0.5,1C0.8,1,1,0.8,1,0.5V0L0,0v0v0.5C0,0.8,0.2,1,0.5,1z"/>
                                                      <path d="M4,4L4,4L3,4l0,0v0C2.4,4,2,4.4,2,5h0H1V2.5C1,2.2,0.8,2,0.5,2S0,2.2,0,2.5V5h0c0,0.6,0.4,1,1,1h2v0V5h1v0h0v1 l1,0V5h0C5,4.4,4.6,4,4,4z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_special-diamond" value="special-diamond"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_special-diamond">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <rect x="4.1" y="3.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.1563 4.2076)" width="0.7" height="0.7"/>
                                                      <polygon points="1,1.5 1,1 1,1 2.5,1 3,0.5 2.5,0 0.5,0 0,0.5 0,1.5 0.5,2 "/>
                                                      <path d="M3,2"/>
                                                      <rect x="5.1" y="4.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.5707 5.2069)" width="0.7" height="0.7"/>
                                                      <polygon points="0.5,3 0,3.5 0,5.5 0.5,6 1,5.5 1,4 2,4 2,5.5 2.5,6 4.5,6 5,5.5 4.5,5 3,5 3,3.5 2.5,3"/>
                                                      <polygon points="5.5,0 4.5,0 4,0.5 4,1 3.5,1 3,1.5 3,2.5 3.5,3 4,2.5 4,2 4.5,2 5,1.5 5,1 5.5,1 6,0.5"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_ribbon" value="ribbon"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_ribbon">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <rect x="4" y="3" width="1" height="1"/>
                                                      <rect x="5" y="4" width="1" height="1"/>
                                                      <polygon points="5,1 6,1 6,1 6,1 5.5,0.5 6,0 4,0 4,0 4,0 4,1 4,1 4,1 3,1 2.5,0.5 3,0 3,0 3,0 0,0 0,2 0,2 0,2 0.5,1.5 1,2 1,2 1,2 1,1 1,1 3,1 3,3 0,3 0,6 0,6 0,6 0.5,5.5 1,6 1,6 1,4 2,4 2,6 6,6 6,6 5,6 4.5,5.5 5,5 5,5 5,5 3,5 3,3 3.5,2.5 4,3 4,3 4,3 4,2 5,2 5,2 5,2"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_oriental" value="oriental"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_oriental">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M5.5,4C5.2,4,5,4.2,5,4.5S5.2,5,5.5,5C5.8,5,6,4.8,6,4.5S5.8,4,5.5,4z"/>
                                                      <path d="M0,2c0.6,0,1-0.4,1-1l1,0v0l0.2-0.1c0.2-0.1,0.4-0.1,0.6,0L3,1c0,0,0,0,0,0v0l0,0c0-0.6-0.4-1-1-1v0H0l0,1h0l0.1,0.2 c0.1,0.2,0.1,0.4,0,0.6L0,2z"/>
                                                      <path d="M4.5,3C4.2,3,4,3.2,4,3.5S4.2,4,4.5,4C4.8,4,5,3.8,5,3.5S4.8,3,4.5,3z"/>
                                                      <path d="M3,2L3,2L3,2l0.1,0.2c0.1,0.2,0.1,0.4,0,0.6L3,3c0.6,0,1-0.4,1-1l0,0h0h0.5C4.8,2,5,1.8,5,1.5V1l0.2-0.1 c0.2-0.1,0.4-0.1,0.6,0L6,1c0-0.6-0.4-1-1-1l0,0h0H4.5C4.2,0,4,0.2,4,0.5V1h0H3.5C3.2,1,3,1.2,3,1.5V2z"/>
                                                      <path d="M4,5L4,5L3,5v0h0l0-1.5C3,3.2,2.8,3,2.5,3l-1,0C1.2,3,1,3.2,1,3.5L1,4l0,0L0.8,4.1c-0.2,0.1-0.4,0.1-0.6,0L0,4 c0,0.6,0.4,1,1,1l0,0l1,0l0,0.5C2,5.8,2.2,6,2.5,6L4,6l0,0v0l0.2-0.1c0.2-0.1,0.4-0.1,0.6,0L5,6C5,5.4,4.6,5,4,5z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="pattern" id="pattern_ellipse" value="ellipse"  class="btn-check" autocomplete="off">
                                                <label class="btn btn-light p-1 me-1 mb-1 rounded-0" for="pattern_ellipse">
                                                   <svg width="38" height="38" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M5.2,4C5,4,4.9,4.3,5.1,4.5C5.3,4.8,5.6,5,5.8,5C6,5,6.1,4.7,5.9,4.5C5.7,4.2,5.4,4,5.2,4z"/>
                                                      <path d="M5,0.9C5,0.9,5.1,1,5.1,1H6V0C5.8,0,5,0.6,5,0.9z"/>
                                                      <path d="M5.9,2H4l0,0h0V1l0,0h0c0-0.2-0.6-1-0.9-1C3.1,0,3,0.1,3,0.1v2.5C3,2.9,3.1,3,3.3,3L5,3v0l0,0c0.2,0,1-0.6,1-0.9 C6,2.1,5.9,2,5.9,2z"/>
                                                      <path d="M3.7,4H2.3C2.1,4,2,4.1,2,4.3V5h0l0,0H1v0V4h0l0,0c0-0.2-0.6-1-0.9-1C0.1,3,0,3.1,0,3.1v2.5C0,5.9,0.1,6,0.3,6L4,6V4.3 C4,4.1,3.9,4,3.7,4z"/>
                                                      <path d="M0.1,1H1v0v1h0l0,0c0,0.2,0.6,1,0.9,1C1.9,3,2,2.9,2,2.9L2,0H1v0C0.8,0,0,0.6,0,0.9C0,0.9,0.1,1,0.1,1z"/>
                                                   </svg>
                                                </label>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <label>Marker border</label>
                                          </div>
                                          <div class="col-12 mb-2">
                                             <div class="btn-group-toggle styleselecta d-inline-block">
                                                <input type="radio" name="marker_out" id="marker_out_default" value="default" checked class="btn-check" autocomplete="off">
                                                <label for="marker_out_default" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_flurry" value="flurry"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_flurry" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0.2,0.1L0.1,0.6l0.1,0.5L0.2,1.6L0.1,2.1l0.1,0.5L0,3.1l0,0.5L0,4l0.1,0.5l0,0.5l0.1,0.5L0.1,6l0,0.5l0,0.5 l0.2,0.5L0.1,8l0.1,0.5L0,8.9l0.2,0.5L0,9.9l0.2,0.5l-0.1,0.5l0,0.5L0,11.9l0.2,0.5l-0.1,0.5l0.1,0.5l0,0.4L0.6,14l0.5,0l0.5-0.1 l0.5,0.1l0.5,0.1L3.1,14l0.5-0.1l0.5-0.1l0.5,0L5,13.9l0.5-0.1l0.5,0l0.5,0L7,13.9L7.5,14L8,14l0.5-0.2L9,13.9L9.4,14l0.5-0.2 l0.5,0.2l0.5-0.1l0.5,0l0.5-0.1l0.5,0l0.5,0l0.5,0l0.5,0.1l-0.1-0.5l0.2-0.5l-0.1-0.5l-0.1-0.5l0.2-0.5l-0.2-0.5l0.1-0.5L14,9.9 l-0.2-0.5L13.9,9L14,8.5L14,8l-0.2-0.5l0-0.5l0.1-0.5L13.8,6l0-0.5L14,5l0-0.5l-0.1-0.5l0.1-0.5l-0.2-0.5l0.1-0.5l0-0.5l0-0.5 l-0.1-0.5L14,0.6l-0.2-0.4l-0.4,0l-0.5,0L12.4,0l-0.5,0.2l-0.5,0l-0.5-0.1l-0.5,0L10,0l-0.5,0L9,0L8.5,0.2L8,0.2L7.5,0.1L7,0.1 L6.5,0.2L6,0L5.5,0.2L5.1,0.2L4.6,0.1L4.1,0.1L3.6,0L3.1,0.1L2.6,0L2.1,0.1l-0.5,0l-0.5,0L0.6,0.2L0.2,0.1z M11.9,11.9l-0.5-0.1 L10.9,12l-0.5-0.1L10,11.9l-0.5,0.1L9,11.8l-0.5,0l-0.5,0l-0.5,0.1l-0.5,0L6.5,12L6,11.9l-0.5,0l-0.5,0L4.6,12l-0.5-0.2L3.6,12 l-0.5-0.1L2.6,12l-0.4-0.1L2,11.4l0.1-0.5l0-0.5l0.1-0.5L2,9.5L2.1,9L2,8.5L2,8l0.2-0.5l0-0.5L2,6.5L2.1,6l0.1-0.5L2.2,5L2.1,4.5 L2,4.1l0-0.5l0.2-0.5L2,2.6L2,2l0.5,0l0.5,0.1l0.5,0.1l0.5,0L4.5,2L5,2.1l0.5,0.1L6,2l0.5,0.2L7,2.1l0.5,0L8,2l0.5,0L9,2l0.5,0 l0.5,0.1L10.4,2l0.5,0.2L11.4,2L12,2l-0.1,0.6L12,3.1l-0.1,0.5L11.8,4L12,4.5L11.9,5l-0.1,0.5l0,0.5L12,6.5L12,7l-0.1,0.5L12,8 l0,0.5l-0.2,0.5l0,0.5l0.1,0.5l-0.1,0.5l0.2,0.5l-0.1,0.5L11.9,11.9z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_sdoz" value="sdoz"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_sdoz" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,0l0.9,13c0,0.6,0.5,1,1,1h12V2c0-0.6-0.4-1-1-1L0,0z M12,12H3.8c-0.5,0-1-0.4-1-1L2,2l9,0.7c0.5,0,1,0.5,1,1 V12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_drop_in" value="drop_in"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_drop_in" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,0l0,7c0,3.9,3.1,7,7,7h0c3.9,0,7-3.1,7-7v0c0-3.9-3.1-7-7-7H0z M7,12L7,12c-2.8,0-5-2.2-5-5V2h5c2.8,0,5,2.2,5,5v0 C12,9.8,9.8,12,7,12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_drop" value="drop"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_drop" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,7L0,7c0,3.9,3.1,7,7,7h7V7c0-3.9-3.1-7-7-7h0C3.1,0,0,3.1,0,7z M12,12H7c-2.8,0-5-2.2-5-5v0c0-2.8,2.2-5,5-5h0 c2.8,0,5,2.2,5,5V12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_dropeye" value="dropeye"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_dropeye" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,0l0,7c0,3.9,3.1,7,7,7h7V7c0-3.9-3.1-7-7-7H0z M12,12H7c-2.8,0-5-2.2-5-5V2h5c2.8,0,5,2.2,5,5V12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_dropeyeleft" value="dropeyeleft"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_dropeyeleft" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,0l0,7c0,3.9,3.1,7,7,7h7V7c0-3.9-3.1-7-7-7H0z M12,12H7c-2.8,0-5-2.2-5-5v0c0-2.8,2.2-5,5-5h0c2.8,0,5,2.2,5,5V12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_dropeyeleaf" value="dropeyeleaf"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_dropeyeleaf" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,0l0,7c0,3.9,3.1,7,7,7h7V7c0-3.9-3.1-7-7-7H0z M7,12L7,12c-2.8,0-5-2.2-5-5v0c0-2.8,2.2-5,5-5h0c2.8,0,5,2.2,5,5v0 C12,9.8,9.8,12,7,12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_dropeyeright" value="dropeyeright"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_dropeyeright" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,0l0,7c0,3.9,3.1,7,7,7h7V7c0-3.9-3.1-7-7-7H0z M7,12L7,12c-2.8,0-5-2.2-5-5V2h5c2.8,0,5,2.2,5,5v0C12,9.8,9.8,12,7,12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_squarecircle" value="squarecircle"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_squarecircle" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,0l0,14h14V0H0z M7,12L7,12c-2.8,0-5-2.2-5-5v0c0-2.8,2.2-5,5-5h0c2.8,0,5,2.2,5,5v0C12,9.8,9.8,12,7,12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_circle" value="circle"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_circle" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,7L0,7c0,3.9,3.1,7,7,7h0c3.9,0,7-3.1,7-7v0c0-3.9-3.1-7-7-7h0C3.1,0,0,3.1,0,7z M7,12L7,12c-2.8,0-5-2.2-5-5v0 c0-2.8,2.2-5,5-5h0c2.8,0,5,2.2,5,5v0C12,9.8,9.8,12,7,12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_rounded" value="rounded"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_rounded" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M4.5,14h5.1C12,14,14,12,14,9.6V4.5C14,2,12,0,9.5,0H4.4C2,0,0,2,0,4.4v5.1C0,12,2,14,4.5,14z M12,4.8v4.4 c0,1.5-1.3,2.8-2.8,2.8H4.8C3.2,12,2,10.8,2,9.2V4.8C2,3.3,3.3,2,4.8,2h4.4C10.8,2,12,3.2,12,4.8z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_flower" value="flower"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_flower" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,0v9.6C0,12,2,14,4.4,14h5.1C12,14,14,12,14,9.6V4.4C14,2,12,0,9.6,0H0z M9.2,12H4.8C3.3,12,2,10.7,2,9.2V2h7.2 C10.7,2,12,3.3,12,4.8v4.4C12,10.7,10.7,12,9.2,12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_flower_in" value="flower_in"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_flower_in" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M14,14V4.4C14,2,12,0,9.6,0H4.4C2,0,0,2,0,4.4v5.1C0,12,2,14,4.4,14H14z M4.8,2h4.4C10.7,2,12,3.3,12,4.8V12H4.8 C3.3,12,2,10.7,2,9.2V4.8C2,3.3,3.3,2,4.8,2z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_leaf" value="leaf"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_leaf" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,0v9.6C0,12,2,14,4.4,14H14V4.4C14,2,12,0,9.6,0H0z M12,12H4.8C3.3,12,2,10.7,2,9.2V2h7.2C10.7,2,12,3.3,12,4.8V12z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_3-corners" value="3-corners"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_3-corners" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M14,0H4.4C2,0,0,2,0,4.4V14h14V0z M2,12V4.8C2,3.3,3.3,2,4.8,2H12v10H2z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_vortex" value="vortex"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_vortex" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M13.8,1.1c-3.5,3.9-3.8-1.9-12.8-0.9c3.9,3.5-1.9,3.8-0.9,12.8c3.5-3.9,3.8,1.9,12.8,0.9C9.1,10.4,14.9,10.1,13.8,1.1z
                                                         M9.4,13.2c-6.5-1.6-5.2-5.6-8.6-3.8c1.6-6.5,5.6-5.2,3.8-8.6c6.5,1.6,5.2,5.6,8.6,3.8C11.7,11.1,7.6,9.8,9.4,13.2z"/>
                                                      <path d="M5.8,4.6"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_dots" value="dots"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_dots" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M14,3.1c0-0.4-0.3-0.8-0.6-1c0.4-0.2,0.6-0.5,0.6-1C14,0.5,13.5,0,12.9,0c-0.4,0-0.8,0.3-1,0.6 c-0.2-0.4-0.5-0.6-1-0.6s-0.8,0.3-1,0.6C9.8,0.3,9.4,0,9,0C8.5,0,8.2,0.3,8,0.6C7.8,0.3,7.4,0,7,0S6.2,0.3,6,0.6C5.8,0.3,5.5,0,5,0 C4.6,0,4.2,0.3,4,0.6C3.9,0.3,3.5,0,3.1,0s-0.8,0.3-1,0.6C1.9,0.3,1.5,0,1.1,0C0.5,0,0,0.5,0,1.1c0,0.4,0.3,0.8,0.6,1 C0.3,2.2,0,2.6,0,3.1s0.3,0.8,0.6,1C0.3,4.2,0,4.6,0,5c0,0.4,0.3,0.8,0.6,1C0.3,6.2,0,6.6,0,7s0.3,0.8,0.6,1C0.3,8.2,0,8.5,0,9 c0,0.4,0.3,0.8,0.6,1c-0.4,0.2-0.6,0.5-0.6,1s0.3,0.8,0.6,1c-0.4,0.2-0.6,0.5-0.6,1C0,13.5,0.5,14,1.1,14c0.4,0,0.8-0.3,1-0.6 c0.2,0.4,0.5,0.6,1,0.6s0.8-0.3,1-0.6C4.2,13.7,4.6,14,5,14c0.4,0,0.8-0.3,1-0.6C6.2,13.7,6.6,14,7,14s0.8-0.3,1-0.6 C8.2,13.7,8.5,14,9,14c0.4,0,0.8-0.3,1-0.6c0.2,0.4,0.5,0.6,1,0.6s0.8-0.3,1-0.6c0.2,0.4,0.5,0.6,1,0.6c0.6,0,1.1-0.5,1.1-1.1 c0-0.4-0.3-0.8-0.6-1c0.4-0.2,0.6-0.5,0.6-1s-0.3-0.8-0.6-1C13.7,9.8,14,9.4,14,9c0-0.4-0.3-0.8-0.6-1C13.7,7.8,14,7.4,14,7 s-0.3-0.8-0.6-1C13.7,5.8,14,5.5,14,5c0-0.4-0.3-0.8-0.6-1C13.7,3.9,14,3.5,14,3.1z M11.9,12.5c-0.2-0.4-0.5-0.6-1-0.6 s-0.8,0.3-1,0.6c-0.2-0.4-0.5-0.6-1-0.6c-0.4,0-0.8,0.3-1,0.6c-0.2-0.4-0.5-0.6-1-0.6s-0.8,0.3-1,0.6c-0.2-0.4-0.5-0.6-1-0.6 c-0.4,0-0.8,0.3-1,0.6c-0.2-0.4-0.5-0.6-1-0.6s-0.8,0.3-1,0.6C2,12.2,1.8,12,1.5,11.9c0.4-0.2,0.6-0.5,0.6-1s-0.3-0.8-0.6-1 c0.4-0.2,0.6-0.5,0.6-1c0-0.4-0.3-0.8-0.6-1c0.4-0.2,0.6-0.5,0.6-1S1.9,6.2,1.5,6c0.4-0.2,0.6-0.5,0.6-1c0-0.4-0.3-0.8-0.6-1 c0.4-0.2,0.6-0.5,0.6-1s-0.3-0.8-0.6-1C1.8,2,2,1.8,2.1,1.5c0.2,0.4,0.5,0.6,1,0.6s0.8-0.3,1-0.6c0.2,0.4,0.5,0.6,1,0.6 c0.4,0,0.8-0.3,1-0.6c0.2,0.4,0.5,0.6,1,0.6s0.8-0.3,1-0.6c0.2,0.4,0.5,0.6,1,0.6c0.4,0,0.8-0.3,1-0.6c0.2,0.4,0.5,0.6,1,0.6 s0.8-0.3,1-0.6C12,1.8,12.2,2,12.5,2.1c-0.4,0.2-0.6,0.5-0.6,1s0.3,0.8,0.6,1c-0.4,0.2-0.6,0.5-0.6,1c0,0.4,0.3,0.8,0.6,1 c-0.4,0.2-0.6,0.5-0.6,1s0.3,0.8,0.6,1c-0.4,0.2-0.6,0.5-0.6,1c0,0.4,0.3,0.8,0.6,1c-0.4,0.2-0.6,0.5-0.6,1s0.3,0.8,0.6,1 C12.2,12,12,12.2,11.9,12.5z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_bruised" value="bruised"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_bruised" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M14,9.6V3c-1.7,0-3-1.3-3-3H4.4C2,0,0,2,0,4.4V11c1.7,0,3,1.3,3,3h6.6C12,14,14,12,14,9.6z M4.6,12C4.1,10.8,3.2,9.9,2,9.4 v-5C2,3.1,3.1,2,4.4,2h5c0.5,1.2,1.4,2.1,2.6,2.6v5c0,1.3-1.1,2.4-2.4,2.4H4.6z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_out" id="marker_out_canvas" value="canvas"  class="btn-check" autocomplete="off">
                                                <label for="marker_out_canvas" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="32" height="32" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path class="st0" d="M13.8,1.8H14V0.2h-0.2V0h-1.6v0.2H12v0L11.7,0L11,0.4L10.3,0L9.7,0.4L9,0L8.3,0.4L7.7,0L7,0.4L6.3,0L5.7,0.4
                                                         L5,0L4.3,0.4L3.7,0L3,0.4L2.3,0L2,0.2v0H1.8V0H0.2v0.2H0v1.6h0.2V2h0L0,2.3L0.4,3L0,3.7l0.4,0.7L0,5l0.4,0.7L0,6.3L0.4,7L0,7.7
                                                         l0.4,0.7L0,9l0.4,0.7L0,10.3L0.4,11L0,11.7L0.2,12h0v0.2H0v1.6h0.2V14h1.6v-0.2H2v0L2.3,14L3,13.6L3.7,14l0.7-0.4L5,14l0.7-0.4
                                                         L6.3,14L7,13.6L7.7,14l0.7-0.4L9,14l0.7-0.4l0.7,0.4l0.7-0.4l0.7,0.4l0.3-0.2v0h0.2V14h1.6v-0.2H14v-1.6h-0.2V12h0l0.2-0.3L13.6,11
                                                         l0.4-0.7l-0.4-0.7L14,9l-0.4-0.7L14,7.7L13.6,7L14,6.3l-0.4-0.7L14,5l-0.4-0.7L14,3.7L13.6,3L14,2.3L13.8,2h0V1.8z M12.4,3L12,3.7
                                                         l0.4,0.7L12,5l0.4,0.7L12,6.3L12.4,7L12,7.7l0.4,0.7L12,9l0.4,0.7L12,10.3l0.4,0.7L12,11.7l0.2,0.3h0v0.2H12v0L11.7,12L11,12.4
                                                         L10.3,12l-0.7,0.4L9,12l-0.7,0.4L7.7,12L7,12.4L6.3,12l-0.7,0.4L5,12l-0.7,0.4L3.7,12L3,12.4L2.3,12L2,12.2v0H1.8V12h0L2,11.7
                                                         L1.6,11L2,10.3L1.6,9.7L2,9L1.6,8.3L2,7.7L1.6,7L2,6.3L1.6,5.7L2,5L1.6,4.3L2,3.7L1.6,3L2,2.3L1.8,2h0V1.8H2v0L2.3,2L3,1.6L3.7,2
                                                         l0.7-0.4L5,2l0.7-0.4L6.3,2L7,1.6L7.7,2l0.7-0.4L9,2l0.7-0.4L10.3,2L11,1.6L11.7,2L12,1.8v0h0.2V2h0L12,2.3L12.4,3z"/>
                                                   </svg>
                                                </label>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <label>Marker center</label>
                                          </div>
                                          <div class="col-12">
                                             <div class="btn-group-toggle styleselecta d-inline-block">
                                                <input type="radio" name="marker_in" id="marker_in_default" value="default" checked class="btn-check" autocomplete="off">
                                                <label for="marker_in_default" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <rect width="6" height="6"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_flurry" value="flurry"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_flurry" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon points="5.9,5.9 5.6,5.9 5.3,6 5,5.7 4.7,5.8 4.4,5.8 4.1,5.8 3.9,5.7 3.6,5.7 3.3,5.8 3,5.9 2.7,5.8 2.4,5.8 2.1,5.8 1.9,5.7 1.6,5.7 1.3,5.7 1,5.8 0.7,5.8 0.4,5.8 0.1,5.9 0,5.5 0.1,5.3 0,5 0.3,4.7 0.3,4.4 0.2,4.1 0.2,3.8 0.1,3.5 0.3,3.3 0.1,3 0.1,2.7 0.2,2.4 0.1,2.1 0.1,1.8 0.1,1.5 0.2,1.3 0.3,1 0,0.7 0,0.4 0.3,0.2 0.4,0.1 0.7,0.1 1,0.2 1.3,0.1 1.6,0.3 1.9,0.1 2.1,0.1 2.4,0.2 2.7,0.1 3,0.3 3.3,0.2 3.6,0.2 3.8,0.2 4.1,0.1 4.4,0.3 4.7,0.1 5,0.2 5.3,0.1 5.6,0 5.9,0 5.8,0.4 6,0.7 6,1 5.9,1.2 5.7,1.5 5.7,1.8 5.9,2.1 5.7,2.4 5.8,2.7 6,3 5.9,3.3 5.8,3.5 5.8,3.8 5.8,4.1 6,4.4 5.8,4.7 5.7,5 5.7,5.3 5.8,5.5"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_sdoz" value="sdoz"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_sdoz" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon points="6,6 0.5,6 0,0 6,0.5"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_drop_in" value="drop_in"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_drop_in" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M3,6L3,6C1.3,6,0,4.7,0,3l0-3l3,0c1.7,0,3,1.3,3,3v0C6,4.7,4.7,6,3,6z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_drop" value="drop"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_drop" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M6,6H3C1.3,6,0,4.7,0,3v0c0-1.7,1.3-3,3-3h0c1.7,0,3,1.3,3,3V6z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_dropeye" value="dropeye"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_dropeye" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M6,6H3C1.3,6,0,4.7,0,3l0-3l3,0c1.7,0,3,1.3,3,3V6z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_circle" value="circle"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_circle" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <circle cx="3" cy="3" r="3"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_rounded" value="rounded"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_rounded" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M6,1.7v2.7C6,5.2,5.2,6,4.3,6H1.7C0.7,6,0,5.3,0,4.3V1.7C0,0.8,0.8,0,1.7,0h2.7C5.3,0,6,0.7,6,1.7z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_sun" value="sun"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_sun" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon points="3,0 3.4,0.7 4,0.2 4.1,0.9 4.9,0.7 4.8,1.5 5.6,1.5 5.2,2.2 5.9,2.5 5.3,3 5.9,3.5 5.2,3.8 5.6,4.5 4.8,4.5 4.9,5.3 4.1,5.1 4,5.8 3.4,5.3 3,6 2.5,5.3 1.9,5.8 1.8,5.1 1,5.3 1.1,4.5 0.4,4.5 0.7,3.8 0,3.5 0.6,3 0,2.5 0.7,2.2 0.4,1.5 1.1,1.5 1,0.7 1.8,0.9 1.9,0.2 2.5,0.7"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_star" value="star"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_star" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M3.2,0.3l0.6,1.3C4,1.8,4.1,1.9,4.3,1.9l1.4,0.2c0.2,0,0.3,0.3,0.2,0.5l-1,1C4.7,3.7,4.7,3.9,4.7,4.1L5,5.5 c0,0.2-0.2,0.4-0.4,0.3L3.3,5.2c-0.2-0.1-0.4-0.1-0.6,0L1.4,5.8C1.2,5.9,1,5.8,1,5.5l0.2-1.4c0-0.2,0-0.4-0.2-0.5l-1-1 C-0.1,2.4,0,2.2,0.2,2.1l1.4-0.2c0.2,0,0.4-0.2,0.5-0.3l0.6-1.3C2.9,0.1,3.1,0.1,3.2,0.3z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_diamond" value="diamond"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_diamond" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <rect x="0.9" y="0.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.2426 3)" width="4.2" height="4.2"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_danger" value="danger"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_danger" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon points="3,5.1 3.9,6 6,6 6,3.9 5.1,3 6,2.1 6,0 3.9,0 3,0.9 2.1,0 0,0 0,2.1 0.9,3 0,3.9 0,6 2.1,6"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_cross" value="cross"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_cross" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon points="6,1.5 4.5,1.5 4.5,0 1.5,0 1.5,1.5 0,1.5 0,4.5 1.5,4.5 1.5,6 4.5,6 4.5,4.5 6,4.5"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_plus" value="plus"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_plus" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M4.5,1.5L4.5,1.5L4.5,1.5C4.5,0.7,3.8,0,3,0h0C2.2,0,1.5,0.7,1.5,1.5v0h0C0.7,1.5,0,2.2,0,3v0 c0,0.8,0.7,1.5,1.5,1.5h0v0C1.5,5.3,2.2,6,3,6h0c0.8,0,1.5-0.7,1.5-1.5v0h0C5.3,4.5,6,3.8,6,3v0C6,2.2,5.3,1.5,4.5,1.5z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_x" value="x"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_x" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M3,5.1l0.4,0.4C3.7,5.8,4.1,6,4.5,6h0C5.3,6,6,5.3,6,4.5v0c0-0.4-0.2-0.8-0.4-1.1L5.1,3l0.4-0.4 C5.8,2.3,6,1.9,6,1.5v0C6,0.7,5.3,0,4.5,0h0C4.1,0,3.7,0.2,3.4,0.4L3,0.9L2.6,0.4C2.3,0.2,1.9,0,1.5,0h0C0.7,0,0,0.7,0,1.5v0 c0,0.4,0.2,0.8,0.4,1.1L0.9,3L0.4,3.4C0.2,3.7,0,4.1,0,4.5v0C0,5.3,0.7,6,1.5,6h0c0.4,0,0.8-0.2,1.1-0.4L3,5.1z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_heart" value="heart"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_heart" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M6,1.8C5.9,1,5.3,0.4,4.5,0.3C3.9,0.2,3.4,0.5,3,0.9C2.6,0.5,2.1,0.3,1.6,0.3C0.8,0.4,0.1,1,0,1.8 C0,2.3,0.1,2.7,0.3,3l0,0l0,0c0.1,0.1,0.2,0.2,0.3,0.3l1.9,2.2c0.3,0.3,0.7,0.3,0.9,0l1.8-1.9c0.1-0.1,0.3-0.3,0.4-0.5 C5.9,2.8,6.1,2.3,6,1.8z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_vortex" value="vortex"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_vortex" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M3.5,6C0.7,4.7,1.7,3,0,3.5C1.3,0.7,3,1.7,2.5,0C5.3,1.3,4.3,3,6,2.5C4.7,5.3,3,4.3,3.5,6z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_sparkle_dot" value="sparkle_dot"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_sparkle_dot" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M3-1L3-1c0,2.2-1.8,4-4,4h0h0c2.2,0,4,1.8,4,4v0v0c0-2.2,1.8-4,4-4h0h0C4.8,3,3,1.2,3-1L3-1z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_9-dots" value="9-dots"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_9-dots" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <circle cx="1" cy="1" r="1"/>
                                                      <circle cx="3" cy="1" r="1"/>
                                                      <circle cx="5" cy="1" r="1"/>
                                                      <circle cx="1" cy="3" r="1"/>
                                                      <circle cx="3" cy="3" r="1"/>
                                                      <circle cx="5" cy="3" r="1"/>
                                                      <circle cx="1" cy="5" r="1"/>
                                                      <circle cx="3" cy="5" r="1"/>
                                                      <circle cx="5" cy="5" r="1"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_9-dots-fat" value="9-dots-fat"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_9-dots-fat" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M6,3c0-0.4-0.3-0.8-0.6-1C5.7,1.9,6,1.5,6,1.1C6,0.5,5.5,0,4.9,0C4.5,0,4.1,0.3,4,0.6C3.8,0.3,3.4,0,3,0S2.2,0.3,2,0.6 C1.9,0.3,1.5,0,1.1,0C0.5,0,0,0.5,0,1.1c0,0.4,0.3,0.8,0.6,1C0.3,2.2,0,2.6,0,3s0.3,0.8,0.6,1C0.3,4.1,0,4.5,0,4.9 C0,5.5,0.5,6,1.1,6c0.4,0,0.8-0.3,1-0.6C2.2,5.7,2.6,6,3,6s0.8-0.3,1-0.6C4.1,5.7,4.5,6,4.9,6C5.5,6,6,5.5,6,4.9 c0-0.4-0.3-0.8-0.6-1C5.7,3.8,6,3.4,6,3z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_flower" value="flower"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_flower" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M4.3,6H1.7C0.8,6,0,5.2,0,4.3V0h4.3C5.2,0,6,0.8,6,1.7v2.6C6,5.2,5.2,6,4.3,6z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_elastic" value="elastic"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_elastic" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M6,6L6,6C4.1,5.4,1.9,5.4,0,6l0,0l0,0c0.6-1.9,0.6-4.1,0-6l0,0l0,0c1.9,0.6,4.1,0.6,6,0l0,0l0,0C5.4,1.9,5.4,4.1,6,6L6,6z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_diagonal" value="diagonal"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_diagonal" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon points="6,6 3,6 0,3 0,0 3,0 6,3 "/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_ropes" value="ropes"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_ropes" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M5.1,1.9H0.9C0.4,1.9,0,1.5,0,1v0c0-0.5,0.4-0.9,0.9-0.9h4.2C5.6,0.1,6,0.5,6,1v0C6,1.5,5.6,1.9,5.1,1.9z"/>
                                                      <path d="M5.1,3.9H0.9C0.4,3.9,0,3.5,0,3v0c0-0.5,0.4-0.9,0.9-0.9h4.2C5.6,2.1,6,2.5,6,3v0C6,3.5,5.6,3.9,5.1,3.9z"/>
                                                      <path d="M5.1,5.9H0.9C0.4,5.9,0,5.5,0,5v0c0-0.5,0.4-0.9,0.9-0.9h4.2C5.6,4.1,6,4.5,6,5v0C6,5.5,5.6,5.9,5.1,5.9z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_ropes-vert" value="ropes-vert"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_ropes-vert" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M4.1,5.1V0.9C4.1,0.4,4.5,0,5,0h0c0.5,0,0.9,0.4,0.9,0.9v4.2C5.9,5.6,5.5,6,5,6h0C4.5,6,4.1,5.6,4.1,5.1z"/>
                                                      <path d="M2.1,5.1V0.9C2.1,0.4,2.5,0,3,0h0c0.5,0,0.9,0.4,0.9,0.9v4.2C3.9,5.6,3.5,6,3,6h0C2.5,6,2.1,5.6,2.1,5.1z"/>
                                                      <path d="M0.1,5.1V0.9C0.1,0.4,0.5,0,1,0h0c0.5,0,0.9,0.4,0.9,0.9v4.2C1.9,5.6,1.5,6,1,6h0C0.5,6,0.1,5.6,0.1,5.1z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="marker_in" id="marker_in_bruised" value="bruised"  class="btn-check" autocomplete="off">
                                                <label for="marker_in_bruised" class="btn btn-light p-1 me-1 mb-1">
                                                   <svg width="14" height="14" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1.5,6C1.2,5.3,0.7,4.8,0,4.5v-3C0,0.7,0.7,0,1.5,0h3C4.8,0.7,5.3,1.2,6,1.5v3C6,5.3,5.3,6,4.5,6H1.5z"/>
                                                   </svg>
                                                </label>
                                             </div>
                                          </div>
                                          <div class="col-12 mb-2">
                                             <div class="row collapse collapse-markers-bg">
                                                <div class="col-sm-6 mt-2">
                                                   <label>Marker border</label>
                                                   <div class="input-group rounded-0">
                                                      <span class="input-group-text rounded-0 border-0 text-dark">
                                                         <svg width="1em" height="1em" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"></path>
                                                         </svg>
                                                      </span>
                                                      <input type="text" class="qrcolorpicker form-control rounded-0" value="#000000" name="marker_out_color">
                                                   </div>
                                                </div>
                                                <div class="col-sm-6 mt-2">
                                                   <label>Marker center</label>
                                                   <div class="input-group rounded-0">
                                                      <span class="input-group-text rounded-0 border-0 text-dark">
                                                         <svg width="1em" height="1em" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="6" height="6"></rect>
                                                         </svg>
                                                      </span>
                                                      <input type="text" class="qrcolorpicker form-control rounded-0" value="#000000" name="marker_in_color">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-12 mt-2">
                                                   <div class="form-check form-switch">
                                                      <input type="checkbox" class="form-check-input collapse-control" id="markers-bg" data-bs-target=".collapse-markers-bg" data-target=".collapse-markers-bg" name="markers_color">
                                                      <label class="form-check-label" for="markers-bg">Custom marker color</label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="collapse collapse-markers-bg">
                                                <div class="row">
                                                   <div class="col-12 mt-2">
                                                      <div class="form-check form-switch">
                                                         <input type="checkbox" class="form-check-input collapse-control" id="different-markers-bg" data-bs-target="#collapse-different-markers-bg" data-target="#collapse-different-markers-bg" name="different_markers_color">
                                                         <label class="form-check-label" for="different-markers-bg">Different markers colors</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row collapse" id="collapse-different-markers-bg">
                                                   <div class="col-sm-6 mt-2">
                                                      <label>Top Right</label>
                                                      <div class="input-group rounded-0">
                                                         <span class="input-group-text rounded-0 border-0 text-dark">
                                                            <svg width="1em" height="1em" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"></path>
                                                            </svg>
                                                         </span>
                                                         <input type="text" class="qrcolorpicker form-control rounded-0" value="#000000" name="marker_top_right_outline">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6 mt-2">
                                                      <label>Top Right</label>
                                                      <div class="input-group rounded-0">
                                                         <span class="input-group-text rounded-0 border-0 text-dark">
                                                            <svg width="1em" height="1em" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                               <rect width="6" height="6"></rect>
                                                            </svg>
                                                         </span>
                                                         <input type="text" class="qrcolorpicker form-control rounded-0" value="#000000" name="marker_top_right_center">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6 mt-2 mb-2">
                                                      <label>Bottom Left</label>
                                                      <div class="input-group rounded-0">
                                                         <span class="input-group-text rounded-0 border-0 text-dark">
                                                            <svg width="1em" height="1em" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M0,0v14h14V0H0z M12,12H2V2h10V12z"></path>
                                                            </svg>
                                                         </span>
                                                         <input type="text" class="qrcolorpicker form-control rounded-0" value="#000000" name="marker_bottom_left_outline">
                                                      </div>
                                                   </div>
                                                   <div class="col-sm-6 mt-2 mb-2">
                                                      <label>Bottom Left</label>
                                                      <div class="input-group rounded-0">
                                                         <span class="input-group-text rounded-0 border-0 text-dark">
                                                            <svg width="1em" height="1em" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                               <rect width="6" height="6"></rect>
                                                            </svg>
                                                         </span>
                                                         <input type="text" class="qrcolorpicker form-control rounded-0" value="#000000" name="marker_bottom_left_center">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="accordion-item d-grid">
                                       <button class="mb-2 btn btn-outline-primary btn-lg btn-block text-start text-left rounded-pill" type="button" data-bs-toggle="collapse" data-toggle="collapse" data-bs-target="#collapseWatermark" data-target="#collapseWatermark">
                                          <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                                             <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                          </svg>
                                          <span class="vertical-middle">Logo</span>
                                       </button>
                                       <div class="collapse" id="collapseWatermark" data-bs-parent="#collapseSettings" data-parent="#collapseSettings">
                                          <div class="col-12">
                                             <small>Upload your logo or select a watermark</small>
                                             <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input form-control" aria-describedby="validate-upload" id="upmarker">
                                                <div id="validate-upload" class="invalid-feedback">
                                                   Invalid image            
                                                </div>
                                                <label class="custom-file-label" for="upmarker"></label>
                                             </div>
                                          </div>
                                          <div class="col-12 pt-2">
                                             <div class="logoselecta form-group">
                                                <div class="btn-group-toggle" data-bs-toggle="buttons">
                                                   <label class="btn btn-light">
                                                      <input type="radio" name="optionlogo" value="none" checked="" class="btn-check">
                                                      <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                      </svg>
                                                   </label>
                                                   <input id="water_0" type="radio" name="optionlogo" value="images/watermarks/01-link-b.png" id="optionlogo0" class="btn-check"><label for="water_0" class="btn btn-light"><img alt="01 link b" src="images/watermarks/01-link-b.png"></label><input id="water_1" type="radio" name="optionlogo" value="images/watermarks/01-link.png" id="optionlogo1" class="btn-check"><label for="water_1" class="btn btn-light"><img alt="01 link" src="images/watermarks/01-link.png"></label><input id="water_2" type="radio" name="optionlogo" value="images/watermarks/02-email-b.png" id="optionlogo2" class="btn-check"><label for="water_2" class="btn btn-light"><img alt="02 email b" src="images/watermarks/02-email-b.png"></label><input id="water_3" type="radio" name="optionlogo" value="images/watermarks/02-email.png" id="optionlogo3" class="btn-check"><label for="water_3" class="btn btn-light"><img alt="02 email" src="images/watermarks/02-email.png"></label><input id="water_4" type="radio" name="optionlogo" value="images/watermarks/03-location-b.png" id="optionlogo4" class="btn-check"><label for="water_4" class="btn btn-light"><img alt="03 location b" src="images/watermarks/03-location-b.png"></label><input id="water_5" type="radio" name="optionlogo" value="images/watermarks/03-location.png" id="optionlogo5" class="btn-check"><label for="water_5" class="btn btn-light"><img alt="03 location" src="images/watermarks/03-location.png"></label><input id="water_6" type="radio" name="optionlogo" value="images/watermarks/04-whatsapp.png" id="optionlogo6" class="btn-check"><label for="water_6" class="btn btn-light"><img alt="04 whatsapp" src="images/watermarks/04-whatsapp.png"></label><input id="water_7" type="radio" name="optionlogo" value="images/watermarks/05-skype.png" id="optionlogo7" class="btn-check"><label for="water_7" class="btn btn-light"><img alt="05 skype" src="images/watermarks/05-skype.png"></label><input id="water_8" type="radio" name="optionlogo" value="images/watermarks/06-zoom-b.png" id="optionlogo8" class="btn-check"><label for="water_8" class="btn btn-light"><img alt="06 zoom b" src="images/watermarks/06-zoom-b.png"></label><input id="water_9" type="radio" name="optionlogo" value="images/watermarks/06-zoom.png" id="optionlogo9" class="btn-check"><label for="water_9" class="btn btn-light"><img alt="06 zoom" src="images/watermarks/06-zoom.png"></label><input id="water_10" type="radio" name="optionlogo" value="images/watermarks/07-wifi-b.png" id="optionlogo10" class="btn-check"><label for="water_10" class="btn btn-light"><img alt="07 wifi b" src="images/watermarks/07-wifi-b.png"></label><input id="water_11" type="radio" name="optionlogo" value="images/watermarks/07-wifi.png" id="optionlogo11" class="btn-check"><label for="water_11" class="btn btn-light"><img alt="07 wifi" src="images/watermarks/07-wifi.png"></label><input id="water_12" type="radio" name="optionlogo" value="images/watermarks/08-vcard-b.png" id="optionlogo12" class="btn-check"><label for="water_12" class="btn btn-light"><img alt="08 vcard b" src="images/watermarks/08-vcard-b.png"></label><input id="water_13" type="radio" name="optionlogo" value="images/watermarks/08-vcard.png" id="optionlogo13" class="btn-check"><label for="water_13" class="btn btn-light"><img alt="08 vcard" src="images/watermarks/08-vcard.png"></label><input id="water_14" type="radio" name="optionlogo" value="images/watermarks/09-calendar-b.png" id="optionlogo14" class="btn-check"><label for="water_14" class="btn btn-light"><img alt="09 calendar b" src="images/watermarks/09-calendar-b.png"></label><input id="water_15" type="radio" name="optionlogo" value="images/watermarks/09-calendar.png" id="optionlogo15" class="btn-check"><label for="water_15" class="btn btn-light"><img alt="09 calendar" src="images/watermarks/09-calendar.png"></label><input id="water_16" type="radio" name="optionlogo" value="images/watermarks/10-paypal.png" id="optionlogo16" class="btn-check"><label for="water_16" class="btn btn-light"><img alt="10 paypal" src="images/watermarks/10-paypal.png"></label><input id="water_17" type="radio" name="optionlogo" value="images/watermarks/11-btc-b.png" id="optionlogo17" class="btn-check"><label for="water_17" class="btn btn-light"><img alt="11 btc b" src="images/watermarks/11-btc-b.png"></label><input id="water_18" type="radio" name="optionlogo" value="images/watermarks/11-btc.png" id="optionlogo18" class="btn-check"><label for="water_18" class="btn btn-light"><img alt="11 btc" src="images/watermarks/11-btc.png"></label>                    
                                                   <label class="btn btn-light custom-watermark">
                                                      <input type="radio" name="optionlogo" value="" class="btn-check">
                                                      <div class="hold-custom-watermark"></div>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12 mb-2">
                                             <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="no-logo-bg" name="no_logo_bg">
                                                <label class="form-check-label" for="no-logo-bg">Remove background behind Logo</label>
                                             </div>
                                          </div>
                                          <div class="col-12 qrcdr-slider mb-3">
                                             <input type="range" min="30" max="100" value="100" class="qrcdr-slider-input" name="logo_size">
                                             <label class="small">Logo size: <span class="qrcdr-slider-value"></span></label>
                                          </div>
                                       </div>
                                       <!-- collapse logo -->
                                    </div>
                                    <div class="accordion-item d-grid">
                                       <button class="mb-2 btn btn-outline-primary btn-lg btn-block text-start text-left rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFrame">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 24 24">
                                             <path d="M16 0v2h-8v-2h8zm0 24v-2h-8v2h8zm2-22h4v4h2v-6h-6v2zm-18 14h2v-8h-2v8zm2-10v-4h4v-2h-6v6h2zm22 2h-2v8h2v-8zm-2 10v4h-4v2h6v-6h-2zm-16 4h-4v-4h-2v6h6v-2z"/>
                                          </svg>
                                          <span class="vertical-middle">Frame</span>
                                       </button>
                                       <div class="collapse" id="collapseFrame" data-bs-parent="#collapseSettings" data-parent="#collapseSettings">
                                          <div class="col-12 mb-2 py-2">
                                             <div class="btn-group-toggle styleselecta d-inline-block">
                                                <input type="radio" name="outer_frame" id="outer_frame_none" value="none" checked class="btn-check" autocomplete="off">
                                                <label for="outer_frame_none" class="btn btn-light p-1">
                                                   <svg width="48" height="56" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <polygon points="18.7,6.6 12,13.3 5.3,6.6 4.6,7.3 11.3,14 4.6,20.7 5.3,21.4 12,14.7 18.7,21.4 19.4,20.7 12.7,14 19.4,7.3 "/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="outer_frame" id="outer_frame_bottom" value="bottom"  class="btn-check" autocomplete="off">
                                                <label for="outer_frame_bottom" class="btn btn-light p-1">
                                                   <svg width="48" height="56" viewBox="0 0 24 29" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M22.7,0H1.3C0.6,0,0,0.6,0,1.3v25.3C0,27.4,0.6,28,1.3,28h21.3c0.7,0,1.3-0.6,1.3-1.3V1.3C24,0.6,23.4,0,22.7,0 z M23,22c0,0.6-0.5,1-1,1H2c-0.6,0-1-0.5-1-1V2c0-0.6,0.5-1,1-1h20c0.6,0,1,0.5,1,1V22z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="outer_frame" id="outer_frame_top" value="top"  class="btn-check" autocomplete="off">
                                                <label for="outer_frame_top" class="btn btn-light p-1">
                                                   <svg width="48" height="56" viewBox="0 0 24 29" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1.3,28L22.6,28c0.7,0,1.3-0.6,1.3-1.3L24,1.4c0-0.7-0.6-1.3-1.3-1.3L1.4,0C0.7,0,0.1,0.6,0,1.3L0,26.6 C-0.1,27.4,0.5,28,1.3,28z M1,6c0-0.6,0.5-1,1-1L22,5c0.6,0,1,0.5,1,1L23,26c0,0.6-0.5,1-1,1L2,27c-0.6,0-1-0.5-1-1L1,6z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="outer_frame" id="outer_frame_balloon-bottom" value="balloon-bottom"  class="btn-check" autocomplete="off">
                                                <label for="outer_frame_balloon-bottom" class="btn btn-light p-1">
                                                   <svg width="48" height="56" viewBox="0 0 24 31" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1.3,24l21.3,0c0.7,0,1.3-0.6,1.3-1.3l0-21.3C24,0.6,23.4,0,22.7,0L1.3,0C0.6,0,0,0.6,0,1.3l0,21.3 C0,23.4,0.6,24,1.3,24z M1,2c0-0.6,0.5-1,1-1l20,0c0.6,0,1,0.5,1,1v20c0,0.6-0.5,1-1,1L2,23c-0.6,0-1-0.5-1-1V2z"/>
                                                      <path d="M1,30h22c0.5,0,1-0.4,1-1v-3c0-0.5-0.4-1-1-1H13l-1-1l-1,1H1c-0.5,0-1,0.4-1,1v3C0,29.6,0.4,30,1,30z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="outer_frame" id="outer_frame_balloon-top" value="balloon-top"  class="btn-check" autocomplete="off">
                                                <label for="outer_frame_balloon-top" class="btn btn-light p-1">
                                                   <svg width="48" height="56" viewBox="0 0 24 31" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M22.7,6L1.3,6C0.6,6,0,6.6,0,7.3l0,21.3C0,29.4,0.6,30,1.3,30l21.3,0c0.7,0,1.3-0.6,1.3-1.3l0-21.3 C24,6.6,23.4,6,22.7,6z M23,28c0,0.6-0.5,1-1,1L2,29c-0.6,0-1-0.5-1-1V8c0-0.6,0.5-1,1-1l20,0c0.6,0,1,0.5,1,1V28z"/>
                                                      <path d="M23,0H1C0.4,0,0,0.4,0,1v3c0,0.5,0.4,1,1,1h10l1,1l1-1h10c0.5,0,1-0.4,1-1V1C24,0.4,23.6,0,23,0z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="outer_frame" id="outer_frame_ribbon-bottom" value="ribbon-bottom"  class="btn-check" autocomplete="off">
                                                <label for="outer_frame_ribbon-bottom" class="btn btn-light p-1">
                                                   <svg width="48" height="56" viewBox="0 0 24 28" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M24,21h-1.7V1.7H1.7V21H0l1,2l-1,2h1v2h22v-2h1l-1-2L24,21z M2,2h20v19v1H2v-1V2z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="outer_frame" id="outer_frame_ribbon-top" value="ribbon-top"  class="btn-check" autocomplete="off">
                                                <label for="outer_frame_ribbon-top" class="btn btn-light p-1">
                                                   <svg width="48" height="56" viewBox="0 0 24 28" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0,6h1.7v19.3h20.7V6H24l-1-2l1-2h-1V0H1v2H0l1,2L0,6z M22,25H2V6V5h20v1V25z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="outer_frame" id="outer_frame_phone" value="phone"  class="btn-check" autocomplete="off">
                                                <label for="outer_frame_phone" class="btn btn-light p-1">
                                                   <svg width="48" height="56" viewBox="0 0 24 25.5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M17.6,0H6.4c-1,0-1.8,0.8-1.8,1.8v20.4c0,1,0.8,1.8,1.8,1.8h11.1c1,0,1.8-0.8,1.8-1.8V1.8C19.4,0.8,18.6,0,17.6,0z M11.2,2.3h2.7c0.1,0,0.2,0.1,0.2,0.2S14,2.7,13.9,2.7h-2.7c-0.1,0-0.2-0.1-0.2-0.2S11.1,2.3,11.2,2.3z M10.1,2.3 c0.1,0,0.2,0.1,0.2,0.2s-0.1,0.2-0.2,0.2c-0.1,0-0.2-0.1-0.2-0.2S10,2.3,10.1,2.3z M19,19H5V5h14V19z"/>
                                                   </svg>
                                                </label>
                                                <input type="radio" name="outer_frame" id="outer_frame_cine" value="cine"  class="btn-check" autocomplete="off">
                                                <label for="outer_frame_cine" class="btn btn-light p-1">
                                                   <svg width="48" height="56" viewBox="0 0 24 23.9" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M4.5,4.5L4.5,4.5L4.5,4.5l0,17.2c0,0.3,0.3,0.6,0.6,0.6h13.8c0.3,0,0.6-0.3,0.6-0.6V4.5H4.5z M19,18.6
                                                         c0,0.2-0.2,0.4-0.4,0.4H5.4C5.2,19,5,18.8,5,18.6V5.4C5,5.2,5.2,5,5.4,5h13.1C18.8,5,19,5.2,19,5.4V18.6z"/>
                                                      <path d="M19.1,0.1L4.2,1.7l0.3,2.8l14.9-1.6L19.1,0.1z M6.8,3.8L4.9,4l1.7-2.1l1.9-0.2L6.8,3.8z M10.5,3.4L8.6,3.6l1.7-2.1l1.9-0.2 L10.5,3.4z M14.2,3l-1.9,0.2L14,1.1l1.9-0.2L14.2,3z M18,2.6l-1.9,0.2l1.7-2.1l0.9-0.1l0.1,0.9L18,2.6z"/>
                                                   </svg>
                                                </label>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <label>Frame label</label>
                                                   <input class="form-control" type="text" name="framelabel" value="SCAN ME">
                                                </div>
                                                <div class="col-sm-6">
                                                   <label>Label font</label>
                                                   <select name="label_font" class="form-select custom-select">
                                                      <option value="AbrilFatface.svg">
                                                         AbrilFatface                        
                                                      </option>
                                                      <option value="CormorantGaramond.svg">
                                                         CormorantGaramond                        
                                                      </option>
                                                      <option value="FredokaOne.svg">
                                                         FredokaOne                        
                                                      </option>
                                                      <option value="Galindo.svg">
                                                         Galindo                        
                                                      </option>
                                                      <option value="OleoScript.svg">
                                                         OleoScript                        
                                                      </option>
                                                      <option value="PlayfairDisplay.svg">
                                                         PlayfairDisplay                        
                                                      </option>
                                                      <option value="Shrikhand.svg">
                                                         Shrikhand                        
                                                      </option>
                                                      <option value="ZCOOLKuaiLe-Regular.svg">
                                                         ZCOOLKuaiLe-Regular                        
                                                      </option>
                                                   </select>
                                                </div>
                                                <div class="col-12 qrcdr-slider">
                                                   <input type="range" min="10" max="100" value="100" class="qrcdr-slider-input" name="label-text-size">
                                                   <label class="small">Text size: <span class="qrcdr-slider-value"></span></label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12 mb-2">
                                             <div class="row collapse" id="collapse-frame-color">
                                                <div class="col-sm-6 mt-2">
                                                   <label>Frame color</label>
                                                   <input type="text" class="form-control qrcolorpicker rounded-0" value="#000000" name="framecolor">
                                                </div>
                                             </div>
                                             <div class="form-group mt-2">
                                                <div class="form-check form-switch">
                                                   <input type="checkbox" class="form-check-input collapse-control" id="frame-color" data-bs-target="#collapse-frame-color" data-target="#collapse-frame-color" name="custom_frame_color">
                                                   <label class="form-check-label" for="frame-color">Custom frame color</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- collapse frame -->
                                    </div>
                                    <div class="accordion-item d-grid">
                                       <button class="mb-2 btn btn-outline-primary btn-lg btn-block text-start text-left rounded-pill" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOptions">
                                          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-toggles" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7h-7zm7 6a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm2.45 0A3.49 3.49 0 0 1 8 3.5 3.49 3.49 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5H6.95zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7z"/>
                                          </svg>
                                          <span class="vertical-middle">Options</span>
                                       </button>
                                       <div class="collapse" id="collapseOptions" data-bs-parent="#collapseSettings" data-parent="#collapseSettings">
                                          <div class="col-sm-12 mb-2">
                                             <div class="row">
                                                <div class="col-sm-6">
                                                   <label>size</label>
                                                   <select name="size" class="form-select custom-select qrcode-size-selector">
                                                      <option value="8" >200</option>
                                                      <option value="12" >300</option>
                                                      <option value="16" >400</option>
                                                      <option value="20" >500</option>
                                                      <option value="24" selected>600</option>
                                                      <option value="28" >700</option>
                                                      <option value="32" >800</option>
                                                   </select>
                                                </div>
                                                <div class="col-sm-6">
                                                   <label>Precision</label>
                                                   <select name="level" class="form-select custom-select">
                                                      <option value="L" >
                                                         L - Smallest                        
                                                      </option>
                                                      <option value="M" >
                                                         M - Medium                        
                                                      </option>
                                                      <option value="Q" selected>
                                                         Q - High                        
                                                      </option>
                                                      <option value="H" >
                                                         H - Best                        
                                                      </option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- #collapseOptions -->
                                    </div>
                                    <!-- accordion -->
                                 </div>
                                 <!-- collapseSettings -->
                              </div>
                              <!-- main-col open at tabnav -->
                           </div>
                           <!-- row -->
                        </div>
                        <!-- col-12-->
                     </form>
                  </div>
                  <!-- row -->
               </div>
               <!-- col-lg-8 -->
            </div>
            <!-- row -->
         </div>
      </div>
      {{-- Section QRGen End --}}
      {{-- Section 1 Start --}}
      <div class="pt-5 pb-2 bg-light">
         <div class="container mt-5 mb-4">
            <h1 class="text-center fw-bold">Create Your Own QR Codes and Boost Your Business.</h1>
            <p class="text-center">Easily generate, manage and statistically track your QR codes.</p>
            <div class="d-flex justify-content-center">
               <a href="#qrgen">
               <button class="btn btn-primary rounded-pill btn-lg">
               Create QR Code
               </button>
               </a>
            </div>
            <div class="mt-3">
               <img class="rounded" src="./images/qr_bg.png" alt="">
            </div>
         </div>
      </div>
      {{-- Section 1 End --}}
      {{-- Section 2 Start--}}
      <div class="container mt-5 mb-4">
         <h1 class="text-center">Everything You Need to Know to Get Started</h1>
         <p class="text-center">In this section you will find the basic concepts and the necessary steps to start enjoying the benefits of using QR.</p>
         <div class="row mt-5 mb-5">
            <div class="col-md-6 col-sm-12 mt-0">
               <img class="rounded" width="350px" src="./images/qr_ico3.png" alt="">
            </div>
            <div class="col-md-6 col-sm-12 mt-5">
               <div class="accordion" id="accordionExample">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                        <h2 >What is a QR Code?</h2>
                        <span class="accicon">
                        <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                        </span>
                     </div>
                     <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                        <div class="card-body">
                           The term “QR” stands for “quick response” and refers to instant access to the information contained in the Code. It is, in short, the evolution of the barcode, made up of patterns of black and white pixels. Denso Wave, a Japanese subsidiary of Toyota Denso, developed them in order to mark the components of their cars and thus speed up logistics in their production. Currently, it has gained great popularity, due to its versatility and accessibility, thanks to the functions of smart phones.                        
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header collapsed d-flex justify-content-between" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h2 >Know the benefits of using QR</h2>
                        <span class="accicon">                     
                        <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                        </span>
                     </div>
                     <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                           You will have noticed that more and more companies choose to include QR, as a fundamental resource for the marketing and commercialization of their products and services. Its growing popularity is due to the multiplicity of uses that you can give it: to receive payments from your clients, share links to web pages, catalogs and price lists, receive comments on your products or services, invite the client to share images or videos , promote your business events and much more, with just a scan!                        
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header collapsed d-flex justify-content-between" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                        <h2>How to start using QR?</h2>
                        <span class="accicon">                     
                        <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                        </span>
                     </div>
                     <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                           Many devices already have a built-in QR code reader. In this case, all you have to do is open the camera on your mobile phone and hold it over a code for a few seconds, until a notification appears on the screen. In case this does not happen, go to settings to check that QR scanning is enabled. If you don't have the feature, just download and install a QR code reader from your app store.                        
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- Section 2  End--}}
      {{-- Section 3 Start--}}
      <div class="pt-5 pb-4 bg-light">
         <div class="container">
            <div class="row">
               <div class="col-md-5 col-sm-12">
                  <h1 class="text-center">MyQrShop Makes All the Difference</h1>
                  <p>If you want to create your own QR code, a good tool for doing so is the MyQrShop QR generator, due to its ease of use and all the options it offers to make your ideas come true or your business grow.</p>
                  <div class="d-flex justify-content-between gap-2 desktop">
                     <div>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           Unlimited QR codes
                        </p>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           Scan without limits
                        </p>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           Mass creation
                        </p>
                     </div>
                     <div>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           Add multiple users
                        </p>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           Complete monitoring
                        </p>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           White label (CNAME)
                        </p>
                     </div>
                  </div>
                  <div class="mobile">
                     <div>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           Unlimited QR codes
                        </p>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           Scan without limits
                        </p>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           Mass creation
                        </p>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           Add multiple users
                        </p>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           Complete monitoring
                        </p>
                        <p>
                           <img width="20px" src="./images/check-mark.png" alt="">
                           White label (CNAME)
                        </p>
                     </div>
                  </div>
                  <a href="#qrgen">
                  <button class="btn btn-primary btn-lg rounded-pill mt-4">
                  Create QR Code
                  </button>
                  </a>
               </div>
               <div class="col-md-7 col-sm-12 mt-0 d-flex justify-content-end overflow-auto ">
                  <div class="row desktop">
                     <div class="col-md-6 col-sm-12  ">
                        <div class="card mb-2 bg-light" style="width: 17rem;">
                           <div class="card-body">
                              <h5 class="card-title"><img src="./images/icons/qr-icon/qr_dinamico.svg" alt="" style="width: 48px; height:48px;"></h5>
                              <h6 class="mb-2">Dynamic QR codes</h6>
                              <p class="card-text">You can edit and manage the content without printing them again.</p>
                           </div>
                        </div>
                        <div class="card bg-light" style="width: 17rem;">
                           <div class="card-body">
                              <h5 class="card-title"><img src="./images/icons/qr-icon/multiples_landings.svg" alt="" style="width: 48px; height:48px;"></h5>
                              <h6 class="mb-2">Multiple landing pages</h6>
                              <p class="card-text">Code customization with our design tool.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12" style="margin-top: 20px">
                        <div class="card mb-2 bg-light" style="width: 17rem;">
                           <div class="card-body">
                              <h5 class="card-title"><img src="./images/icons/qr-icon/estadisticas_completas.svg" alt="" style="width: 48px; height:48px;"></h5>
                              <h6 class="mb-2">Complete statistics</h6>
                              <p class="card-text">Exports all the information of the scans they have done.</p>
                           </div>
                        </div>
                        <div class="card bg-light" style="width: 17rem;">
                           <div class="card-body">
                              <h5 class="card-title"><img src="./images/icons/qr-icon/personaliza_qr.svg" alt="" style="width: 48px; height:48px;"></h5>
                              <h6 class="mb-2">Customize your QR code</h6>
                              <p class="card-text">Customize your QR with your logo, colors and shapes.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="css-card mobile ">
            <div class="css-card-body bg-light">
               <h1><img src="./images/icons/qr-icon/qr_dinamico.svg" alt="" style="width: 48px; height:48px;"></h1>
               <h2>Dynamic QR codes</h2>
               <p>You can edit and manage the content without printing them again.</p>
            </div>
            <div class="css-card-body bg-light">
               <h1><img src="./images/icons/qr-icon/multiples_landings.svg" alt="" style="width: 48px; height:48px;"></h1>
               <h2>Multiple landing pages</h2>
               <p>Code customization with our design tool.</p>
            </div>
            <div class="css-card-body bg-light">
               <div>
                  <h1><img src="./images/icons/qr-icon/estadisticas_completas.svg" alt="" style="width: 48px; height:48px;"></h1>
                  <h2>Complete statistics</h2>
                  <p>Exports all the information of the scans they have done.</p>
               </div>
            </div>
            <div class="css-card-body bg-light">
               <div>
                  <h1><img src="./images/icons/qr-icon/personaliza_qr.svg" alt="" style="width: 48px; height:48px;"></h1>
                  <h2>Customize your QR code</h2>
                  <p>Customize your QR with your logo, colors and shapes.</p>
               </div>
            </div>
         </div>
      </div>
      {{-- Section 3 End --}}

      {{-- Section 4 Start --}}
      {{-- <div>
         <div class="bg-white p-5 desktop">
            <div class="container">
               <h1 class="text-center mb-5">Create Different Types of QR Codes</h1>
               <section>
                  <div class="timeline-container" id="container-one">
                     <div id="container-two">
                        <h2>Choose the content of your QR code</h2>
                        <p>Select from a wide variety of options: PDF, menu, video, business cards, web, apps, etc.</p>
                     </div>
                     <div class="timeline-class" id="container-three">
                        <div class="timeline">1</div>
                        <div class="hr-tag"></div>
                     </div>
                     <div id="container-four">
                        <img src="./images/timeline/step1.png" alt="">
                     </div>
                  </div>
                  <div class="timeline-container" id="container-one">
                     <div id="container-two">
                        <img src="./images/timeline/step2.png" alt="">
                     </div>
                     <div class="timeline-class" id="container-three">
                        <div class="timeline">2</div>
                        <div class="hr-tag"></div>
                     </div>
                     <div id="container-four">
                        <h2>Choose the content of your QR code</h2>
                        <p>SFill in all the information and use our QR generator to get a unique design</p>
                     </div>
                  </div>
                  <div class="timeline-container" id="container-one">
                     <div id="container-two">
                        <h2>Customise and design it as you like</h2>
                        <p>Fill in all the information and use our QR generator to get a unique design.</p>
                     </div>
                     <div id="container-three">
                        <div class="timeline">3</div>
                        <div class="hr-tag"></div>
                        <div>
                           <a href="#qrgen">
                           <button class="btn btn-primary btn-lg rounded-pill">
                              Create QR Code
                           </button>
                           </a>
                        </div>
                     </div>
                     <div id="container-four">
                        <img src="./images/timeline/step3.png" alt="">
                     </div>
                  </div>
               </section>
            </div>
         </div>
         <div class="bg-white p-5">
            <div class="container">
               <h1 class="text-center mb-5">Create Different Types of QR Codes</h1>
                <div class="card-main-container ">
                  <div>
                     <div class="slider-card-container" id="slider-card-container">
                        <div class="slider-card active" onclick="showHeroCard(1)">
                          <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">Menu</span>
                          </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(2)">
                          <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">vCard Plus</span>
                          </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(3)">
                          <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">Business</span>
                          </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(4)">
                          <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">Website</span>
                          </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(5)">
                          <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">Apps</span>
                          </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(6)">
                          <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">Wifi</span>
                          </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(7)">
                          <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">Video</span>
                          </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(8)">
                           <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">PDF</span>
                           </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(9)">
                           <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">Images</span>
                           </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(10)">
                           <div  class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">List of links</span>
                           </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(11)">
                           <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">MP3</span>
                           </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(12)">
                          <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                          <span class="slider-card-title">Coupon</span>
                          </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(13)">
                          <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">Feedback</span>
                          </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(14)">
                          <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">Landing Page</span>
                          </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(15)">
                           <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                            <span class="slider-card-title">Playlist</span>
                           </div>
                        </div>
                        <div class="slider-card" onclick="showHeroCard(16)">
                           <div class="slider-card-content">
                            <span class="slider-card-icon"><img src="./images/qr-slider/circle_menu.svg" alt="" style="width: 80px; height: 80px;"></span>
                          <span class="slider-card-title">Text</span>
                           </div>
                        </div>
                      </div>
                      <!-- Repeat the above card structure for the remaining cards -->
                      <div class="arrow left" onclick="showPreviousCard()"><span class="arrow-left"><</span></div>
                      <div class="arrow right" onclick="showNextCard()"><span class="arrow-right">></span></div>
                      <div class="hero-card" id="hero-card-1" style="display: flex">
                        <div class="hero-card-image">
                         <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                        </div>
                        <div class="hero-container">
                           <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image-two">
                          <h2 class="hero-title">Menu</h2>
                          <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                          <div>
                            <a href="#qrgen">
                            <button class="btn btn-primary btn-lg rounded-pill">
                               Create QR Code
                            </button>
                            </a>
                         </div>
                        </div>
                      </div>
                      <div class="hero-card" id="hero-card-2">
                        <div class="hero-card-image">
                         <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                        </div>
                        <div class="hero-container">
                         <h2 class="hero-title">vCard Plus</h2>
                         <div><p></p></div>
                         <div>
                           <a href="#qrgen">
                           <button class="btn btn-primary btn-lg rounded-pill">
                              Create QR Code
                           </button>
                           </a>
                        </div>
                       </div>
                      </div>
                      <div class="hero-card" id="hero-card-3">
                         <div class="hero-card-image">
                            <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                           </div>
                           <div class="hero-container">
                            <h2 class="hero-title">Menu</h2>
                            <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                            <div>
                              <a href="#qrgen">
                              <button class="btn btn-primary btn-lg rounded-pill">
                                 Create QR Code
                              </button>
                              </a>
                           </div>
                      </div>
                     </div>
                     <div class="hero-card" id="hero-card-4">
                      <div class="hero-card-image">
                         <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                      </div>
                      <div class="hero-container">
                       <h2 class="hero-title">Menu</h2>
                       <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                       <div>
                         <a href="#qrgen">
                         <button class="btn btn-primary btn-lg rounded-pill">
                            Create QR Code
                         </button>
                         </a>
                      </div>
                    </div>   
                    </div>
                     <div class="hero-card" id="hero-card-5">
                       <div class="hero-card-image">
                         <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                      </div>
                      <div class="hero-container">
                       <h2 class="hero-title">Menu</h2>
                       <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                       <div>
                         <a href="#qrgen">
                         <button class="btn btn-primary btn-lg rounded-pill">
                            Create QR Code
                         </button>
                         </a>
                      </div>
                    </div>
                     </div>
                     <div class="hero-card" id="hero-card-6">
                       <div class="hero-card-image">
                         <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                      </div>
                      <div class="hero-container">
                       <h2 class="hero-title">Menu</h2>
                       <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                       <div>
                         <a href="#qrgen">
                         <button class="btn btn-primary btn-lg rounded-pill">
                            Create QR Code
                         </button>
                         </a>
                      </div>
                    </div>
                     </div>
                     <div class="hero-card" id="hero-card-7">
                       <div class="hero-card-image">
                         <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                      </div>
                      <div class="hero-container">
                       <h2 class="hero-title">Menu</h2>
                       <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                       <div>
                         <a href="#qrgen">
                         <button class="btn btn-primary btn-lg rounded-pill">
                            Create QR Code
                         </button>
                         </a>
                      </div>
                    </div>
                     </div>
                     <div class="hero-card" id="hero-card-8">
                       <div class="hero-card-image">
                         <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                      </div>
                      <div class="hero-container">
                       <h2 class="hero-title">Menu</h2>
                       <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                       <div>
                         <a href="#qrgen">
                         <button class="btn btn-primary btn-lg rounded-pill">
                            Create QR Code
                         </button>
                         </a>
                      </div>
                    </div>
                     </div>
                     <div class="hero-card" id="hero-card-9">
                       <div class="hero-card-image">
                         <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                      </div>
                      <div class="hero-container">
                       <h2 class="hero-title">Menu</h2>
                       <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                       <div>
                         <a href="#qrgen">
                         <button class="btn btn-primary btn-lg rounded-pill">
                            Create QR Code
                         </button>
                         </a>
                      </div>
                    </div>
                     </div>
                     <div class="hero-card" id="hero-card-10">
                       <div class="hero-card-image">
                         <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                      </div>
                      <div class="hero-container">
                       <h2 class="hero-title">Menu</h2>
                       <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                       <div>
                         <a href="#qrgen">
                         <button class="btn btn-primary btn-lg rounded-pill">
                            Create QR Code
                         </button>
                         </a>
                      </div>
                    </div>
                     </div>
                     <div class="hero-card" id="hero-card-11">
                       <div class="hero-card-image">
                         <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                      </div>
                      <div class="hero-container">
                       <h2 class="hero-title">Menu</h2>
                       <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                       <div>
                         <a href="#qrgen">
                         <button class="btn btn-primary btn-lg rounded-pill">
                            Create QR Code
                         </button>
                         </a>
                      </div>
                    </div>
                     </div>
                     <div class="hero-card" id="hero-card-12">
                        <div class="hero-card-image">
                          <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                       </div>
                       <div class="hero-container">
                        <h2 class="hero-title">Menu</h2>
                        <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                        <div>
                          <a href="#qrgen">
                          <button class="btn btn-primary btn-lg rounded-pill">
                             Create QR Code
                          </button>
                          </a>
                       </div>
                     </div>
                      </div>
                      <div class="hero-card" id="hero-card-13">
                        <div class="hero-card-image">
                          <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                       </div>
                       <div class="hero-container">
                        <h2 class="hero-title">Menu</h2>
                        <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                        <div>
                          <a href="#qrgen">
                          <button class="btn btn-primary btn-lg rounded-pill">
                             Create QR Code
                          </button>
                          </a>
                       </div>
                     </div>
                      </div>
                      <div class="hero-card" id="hero-card-14">
                        <div class="hero-card-image">
                          <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                       </div>
                       <div class="hero-container">
                        <h2 class="hero-title">Menu</h2>
                        <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                        <div>
                          <a href="#qrgen">
                          <button class="btn btn-primary btn-lg rounded-pill">
                             Create QR Code
                          </button>
                          </a>
                       </div>
                     </div>
                      </div>
                      <div class="hero-card" id="hero-card-15">
                        <div class="hero-card-image">
                          <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                       </div>
                       <div class="hero-container">
                        <h2 class="hero-title">Menu</h2>
                        <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                        <div>
                          <a href="#qrgen">
                          <button class="btn btn-primary btn-lg rounded-pill">
                             Create QR Code
                          </button>
                          </a>
                       </div>
                     </div>
                      </div>
                      <div class="hero-card" id="hero-card-16">
                        <div class="hero-card-image">
                          <img src="./images/qr-slider/cell-one.png" alt="Hero Image" class="hero-image">
                       </div>
                       <div class="hero-container">
                        <h2 class="hero-title">Menu</h2>
                        <div><p>If you have a bar or restaurant, this type of QR code is for you. No more reprinting menus every time you make a modification.</p></div>
                        <div>
                          <a href="#qrgen">
                          <button class="btn btn-primary btn-lg rounded-pill">
                             Create QR Code
                          </button>
                          </a>
                       </div>
                     </div>
                      </div>
                   </div>
                </div>
            </div>
         </div>
         <div class="bg-white mt-4 mb-5 pb-5 mobile">
            <div class="container">
               <h1 class="text-center mb-5 mt-4">Create Different Types of QR Codes</h1>
               <div class="d-block">
                  <div class="mb-2">
                     <div>
                        <h2>Choose the content of your QR code</h2>
                        <p>Select from a wide variety of options: PDF, menu, video, business cards, web, apps, etc.</p>
                     </div>
                     <div>
                        <img src="./images/timeline/step1.bc4310cce85fdd039b61ce2e99b92531.svg" alt="">
                     </div>
                  </div>
                  <div>
                     <div >
                        <h2>Choose the content of your QR code</h2>
                        <p>SFill in all the information and use our QR generator to get a unique design</p>
                     </div>
                     <div>
                        <img src="./images/timeline/step2.d6232df69e7f1e826445b7dc45913dc9.svg" alt="">
                     </div>
                  </div>
                  <div>
                     <div >
                        <h2>Customise and design it as you like</h2>
                        <p>Fill in all the information and use our QR generator to get a unique design.</p>
                     </div>
                     <div>
                        <img src="./images/timeline/step3.fef0da4f15b57914d97ad316f52f6bab.svg" alt="">
                     </div>
                     <div>
                        <div>
                           <a href="#qrgen">
                           <button class="mx-auto d-block" style="background: #1D59F9;
                              padding: 15px 25px;
                              border-radius: 30px;
                              border: 10px none;
                              color: white;
                              font-size: 18px;
                              margin-top:10px;
                              flex-wrap: nowrap;">Create QR Code</button>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
     
      {{-- Section 4 End --}}

      {{-- Section 5 Start --}}
      <div class="bg-white mt-5 pt-5 pb-5">
         <div class="container">
            <h1 class="text-center mb-4">Do not leave with doubt
            </h1>
            <ul class="nav nav-pills mb-5 d-flex justify-content-center" id="pills-tab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active rounded-pill" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Basic Information</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link rounded-pill" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Design & Creation</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link rounded-pill" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Scan & Print</a>
               </li>
            </ul>
            <div class="tab-content  d-flex justify-content-center" id="pills-tabContent">
               <div class="tab-pane fade show active w-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="accordion" id="accordionExample">
                     <div class="card">
                        <div class="card-header d-flex justify-content-between" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true">
                           <h2 >What is a QR Code?</h2>
                           <span class="accicon">
                           <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                           </span>
                        </div>
                        <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                           <div class="card-body">
                              The term “QR” stands for “quick response” and refers to instant access to the information contained in the Code. It is, in short, the evolution of the barcode, made up of patterns of black and white pixels. Denso Wave, a Japanese subsidiary of Toyota Denso, developed them in order to mark the components of their cars and thus speed up logistics in their production. Currently, it has gained great popularity, due to its versatility and accessibility, thanks to the functions of smart phones.                        
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header collapsed d-flex justify-content-between" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                           <h2 >Know the benefits of using QR</h2>
                           <span class="accicon">                     
                           <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                           </span>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                           <div class="card-body">
                              You will have noticed that more and more companies choose to include QR, as a fundamental resource for the marketing and commercialization of their products and services. Its growing popularity is due to the multiplicity of uses that you can give it: to receive payments from your clients, share links to web pages, catalogs and price lists, receive comments on your products or services, invite the client to share images or videos , promote your business events and much more, with just a scan!                        
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header collapsed d-flex justify-content-between" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false">
                           <h2 >How to start using QR?</h2>
                           <span class="accicon">                     
                           <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                           </span>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordionExample">
                           <div class="card-body">
                              Many devices already have a built-in QR code reader. In this case, all you have to do is open the camera on your mobile phone and hold it over a code for a few seconds, until a notification appears on the screen. In case this does not happen, go to settings to check that QR scanning is enabled. If you don't have the feature, just download and install a QR code reader from your app store.                        
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade w-100" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="tab-pane fade show active w-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                     <div class="accordion" id="accordionExample">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true">
                              <h2 >What is a QR Code?</h2>
                              <span class="accicon">
                              <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                              </span>
                           </div>
                           <div id="collapseSeven" class="collapse show" data-parent="#accordionExample">
                              <div class="card-body">
                                 The term “QR” stands for “quick response” and refers to instant access to the information contained in the Code. It is, in short, the evolution of the barcode, made up of patterns of black and white pixels. Denso Wave, a Japanese subsidiary of Toyota Denso, developed them in order to mark the components of their cars and thus speed up logistics in their production. Currently, it has gained great popularity, due to its versatility and accessibility, thanks to the functions of smart phones.                        
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header collapsed d-flex justify-content-between" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              <h2 >Know the benefits of using QR</h2>
                              <span class="accicon">                     
                              <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                              </span>
                           </div>
                           <div id="collapseEight" class="collapse" data-parent="#accordionExample">
                              <div class="card-body">
                                 You will have noticed that more and more companies choose to include QR, as a fundamental resource for the marketing and commercialization of their products and services. Its growing popularity is due to the multiplicity of uses that you can give it: to receive payments from your clients, share links to web pages, catalogs and price lists, receive comments on your products or services, invite the client to share images or videos , promote your business events and much more, with just a scan!                        
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header collapsed d-flex justify-content-between" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false">
                              <h2 >How to start using QR?</h2>
                              <span class="accicon">                     
                              <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                              </span>
                           </div>
                           <div id="collapseNine" class="collapse" data-parent="#accordionExample">
                              <div class="card-body">
                                 Many devices already have a built-in QR code reader. In this case, all you have to do is open the camera on your mobile phone and hold it over a code for a few seconds, until a notification appears on the screen. In case this does not happen, go to settings to check that QR scanning is enabled. If you don't have the feature, just download and install a QR code reader from your app store.                        
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade w-100" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="tab-pane fade show active w-100" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                     <div class="accordion" id="accordionExample">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true">
                              <h2 >What is a QR Code?</h2>
                              <span class="accicon">
                              <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                              </span>
                           </div>
                           <div id="collapseTen" class="collapse show" data-parent="#accordionExample">
                              <div class="card-body">
                                 The term “QR” stands for “quick response” and refers to instant access to the information contained in the Code. It is, in short, the evolution of the barcode, made up of patterns of black and white pixels. Denso Wave, a Japanese subsidiary of Toyota Denso, developed them in order to mark the components of their cars and thus speed up logistics in their production. Currently, it has gained great popularity, due to its versatility and accessibility, thanks to the functions of smart phones.                        
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header collapsed d-flex justify-content-between" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                              <h2 >Know the benefits of using QR</h2>
                              <span class="accicon">                     
                              <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                              </span>
                           </div>
                           <div id="collapseEleven" class="collapse" data-parent="#accordionExample">
                              <div class="card-body">
                                 You will have noticed that more and more companies choose to include QR, as a fundamental resource for the marketing and commercialization of their products and services. Its growing popularity is due to the multiplicity of uses that you can give it: to receive payments from your clients, share links to web pages, catalogs and price lists, receive comments on your products or services, invite the client to share images or videos , promote your business events and much more, with just a scan!                        
                              </div>
                           </div>
                        </div>
                        <div class="card">
                           <div class="card-header collapsed d-flex justify-content-between" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false">
                              <h2 >How to start using QR?</h2>
                              <span class="accicon">                     
                              <img class="rounded rotate-icon" width="15px" src="./images/down-arrow.png" alt="">
                              </span>
                           </div>
                           <div id="collapseTwelve" class="collapse" data-parent="#accordionExample">
                              <div class="card-body">
                                 Many devices already have a built-in QR code reader. In this case, all you have to do is open the camera on your mobile phone and hold it over a code for a few seconds, until a notification appears on the screen. In case this does not happen, go to settings to check that QR scanning is enabled. If you don't have the feature, just download and install a QR code reader from your app store.                        
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- Section 5 End --}}
      {{-- Section 6 Start --}}
      {{-- <div class="bg-grad pt-4 pb-5">
         <div class="container pt-3">
            <div class="text-center ">
               <h1 class="text-white">Try Our QR Code Generator.</h1>
            </div>
            <img class="mt-3 rounded" src="./images/qr_bg3.png" alt="">
         </div>
         <!-- containerOOO -->
         <div class="alert_placeholder toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
            <div class="toast-header">
               <div class="mr-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                     <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                     <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                  </svg>
               </div>
               <button type="button" class="ml-2 ms-auto mb-1 btn-close close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                     </svg>
                  </span>
               </button>
            </div>
            <div class="toast-body"></div>
         </div>
         <div class="pt-5">
            <div class="container">
               <hr>
               <div class="row py-2 small mb-3">
                  <div class="col-6 text-white">My QR Shop &copy; 2023</div>
                  <div class="col-6">
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      {{-- Section 6 End --}}
      <div class="pt-5 mt-5">
         <br>
         <br>
         <br>
      </div>
      @include('qr_generator_footer')
      <script src="./js/slider/slider.js"></script>
      <script  type="text/javascript" src="js/popper.min.js"></script><script src="js/tempusdominus/js/tempus-dominus.min.js"></script><script src="js/qrcdr.min.js?v=5.3.4"></script><script src="js/call.js?v=5.3.4"></script>    
   </body>
</html>