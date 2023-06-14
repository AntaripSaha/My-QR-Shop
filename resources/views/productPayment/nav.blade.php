<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-light navbar-theme-primary fixed-top" style="background-color: #0648b3 !important; ">
    <div class="container">
        <a class="navbar-brand @@logo_classes mobile-padding" href="/">
            <img class="navbar-brand-dark common" src="{{ config('global.site_logo_dark') }}" height="35" alt="Logo">
         </a>
        <div class="navbar-collapse collapse" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="/">
                            <img src="{{ config('global.site_logo') }}" height="35" alt="Logo">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                            data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                            aria-label="Toggle navigation"></a>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover justify-content-center">
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a data-scroll href="{{route('front')}}#product" class="nav-link text-white" style="font-size: 16px;">{{ __('qrlanding.product') }}</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a data-scroll href="{{route('front')}}#pricing" class="nav-link text-white" style="font-size: 16px;" >{{ __('qrlanding.pricing') }}</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a data-scroll href="{{route('front')}}#testimonials" class="nav-link text-white" style="font-size: 16px;">{{ __('qrlanding.testimonials') }}</a>
                </li>
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a data-scroll href="{{route('front')}}#demo" class="nav-link text-white" style="font-size: 16px;">{{ __('qrlanding.demo') }}</a>
                </li>
               
                <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
                    <a data-scroll href="{{route('generateqr')}}" class="nav-link text-white" style="font-size: 16px;">QrGenerator</a>
                </li>
                <div class=" @@cta_button_classes desktop-hide">
                    <a data-scroll href="/login" class="btn btn-md bg-white animate-up-2 mr-3 fw-600" style="color: #0648b3; font-weight: 700;"><i class="fas fa-th-large mr-2"></i>
                        @auth()
                            {{ __('qrlanding.dashboard')}}
                        @endauth
                        @guest()
                            {{ __('qrlanding.login')}}
                        @endguest
                    </a>
                </div>
                
                
                @if(!empty(config('global.facebook')))
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ config('global.facebook') }}" target="_blank" data-toggle="tooltip" title="{{ __('Like us on Facebook') }}">
                        <i class="fab fa-facebook-square mr-2"></i>
                        <span class="nav-link-inner--text d-lg-none">{{ __('Facebook') }}</span>
                    </a>
                </li>
                @endif
                @if(!empty(config('global.instagram')))
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ config('global.instagram') }}" target="_blank" data-toggle="tooltip" title="{{ __('Follow us on Instagram') }}">
                        <i class="fab fa-instagram mr-2"></i>
                        <span class="nav-link-inner--text d-lg-none">{{ __('Instagram') }}</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <div class=" @@cta_button_classes mobile-hide">
            <a data-scroll href="/login" class="btn btn-md bg-white animate-up-2 mr-3 fw-600" style="color: #0648b3; font-weight: 700;"><i class="fas fa-th-large mr-2"></i>
            @auth()
                {{ __('qrlanding.dashboard')}}
            @endauth
            @guest()
                {{ __('qrlanding.login')}}
            @endguest
            </a>
        </div>
        <div class="d-flex d-lg-none align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
        </div>
    </div>
</nav>

<style>
    @media (min-width: 268px) and (max-width: 568px) {
        .mobile-padding{
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }
        .mobile-hide{
            display: none !important; 
        }   
    }
    @media (min-width: 568px) {
 
        .desktop-hide{
            display: none !important; 
        }   
    }
</style>