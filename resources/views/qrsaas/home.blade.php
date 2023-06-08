<!--

=========================================================
* Impact Design System - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/impact-design-system
* Copyright 2010 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/impact-design-system/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="My QR Shop" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Contactless Digital QR Menu to Grow Your Restaurant Business - My QR Shop">
    <meta property="og:description" content="Generate a personalized QR code for your digital menu with My QR Shop. Get contactless digital QR menus to grow your restaurant business and reach new customers.">
    <meta property="og:image" content="https://myqrshop.com/public/images/myqrshop.jpg">
    <meta name="og:image:width" content="1200" />
    <meta name="og:image:height" content="630" />
    <meta property="og:url" content="https://myqrshop.com/">
    <meta property="og:image:alt" content="Contactless Digital QR Menu to Grow Your Restaurant Business - My QR Shop" />
    <meta property="og:image:type" content="image/jpeg" />



    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contactless Digital QR Menu to Grow Your Restaurant Business - My QR Shop">
    <meta name="twitter:description" content="Generate a personalized QR code for your digital menu with My QR Shop. Get contactless digital QR menus to grow your restaurant business and reach new customers.">
    <meta name="twitter:image" content="https://myqrshop.com/public/images/myqrshop.jpg">
    <meta name="twitter:image:width" content="1200" />
    <meta name="twitter:image:height" content="630" />
    <meta property="twitter:url" content="https://myqrshop.com/">
    <meta name="twitter:site" content="@Myqrshop1" />
    <meta property="twitter:site_name" content="My QR Shop" />

    <!-- Primary Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('argonfront') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('argonfront') }}/img/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image" content="{{ config('global.site_logo') }}">
    <title>{{ config('global.site_name','QRTiger') }}</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @if (config('settings.google_analytics'))
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo config('settings.google_analytics'); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '<?php echo config('settings.google_analytics'); ?>');
        </script>
    @endif

    @yield('head')
    @laravelPWA
    @include('layouts.rtl')

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('impactfront') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">


    <!-- Nucleo icons -->
    <link rel="stylesheet" href="{{ asset('impactfront') }}/vendor/nucleo/css/nucleo.css" type="text/css">

    <!-- Front CSS -->
    <link type="text/css" href="{{ asset('impactfront') }}/css/front.min.css" rel="stylesheet">

    <!-- Custom CSS by mobidonia -->
    <link type="text/css" href="{{ asset('custom') }}/css/custom_qr.css" rel="stylesheet">
    
    <!-- Owl Carousel -->
    <link type="text/css" href="{{ asset('custom') }}/css/owl.carousel.min.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('custom') }}/css/owl.theme.default.min.css" rel="stylesheet">

    <!-- Custom CSS defined by admin -->
    <link type="text/css" href="{{ asset('byadmin') }}/front.css" rel="stylesheet">
</head>
<body>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Service",
            "name": "Affordable & Customizable QR Codes for Your Restaurant's Digital Menu - My QR Shop",
            "description": "Boost customer engagement with affordable and customizable QR codes from My QR Shop. Create a user-friendly digital menu experience for your restaurant or bar. Choose from stunning styles and unlimited color options. Quick registration process. Great prices.",
            "url": "https://myqrshop.com/",
            "image": "https://myqrshop.com/uploads/settings/b609a738-b9b9-4614-9306-951437e8c1cf_logo.jpg",
            "logo": "https://myqrshop.com/uploads/settings/b609a738-b9b9-4614-9306-951437e8c1cf_logo.jpg",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "United Arab Emirates",
                "addressRegion": "UAE",
                "addressLocality": "Dubai",
                "streetAddress": "Suite-904, Sobha Ivory Tower II, Al Asayel St, Business Bay"
            },
            "telephone": "+971 55 910 8575",
            "foundingDate": "2023-01-01",
            "dateModified": "2023-06-05",
            "interactionService": {
                "@type": "WebSite",
                "name": "Affordable & Customizable QR Codes for Your Restaurant's Digital Menu - My QR Shop",
                "url": "https://myqrshop.com/",
                "description": "Boost customer engagement with affordable and customizable QR codes from My QR Shop. Create a user-friendly digital menu experience for your restaurant or bar. Choose from stunning styles and unlimited color options. Quick registration process. Great prices.",
            },
            "breadcrumb": {
                "@type": "BreadcrumbList",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "https://myqrshop.com/"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Terms and conditions",
                        "item": "https://myqrshop.com/blog/Terms-and-conditions"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "Privacy Policy",
                        "item": "https://myqrshop.com/blog/Privacy-Policy"
                    },
                    {
                        "@type": "ListItem",
                        "position": 4,
                        "name": "FAQs",
                        "item": "https://myqrshop.com/blog/FAQ's"
                    },
                    {
                        "@type": "ListItem",
                        "position": 5,
                        "name": "QR Generator",
                        "item": "https://myqrshop.com/generate-qr"
                    }
                ]
            },
            "mainEntity": {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "What is My QR Shop?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "My QR Shop is an affordable and customizable QR code generator for the digital menu of your restaurant or bar. Having a customized QR code can help you engage with a wider audience and ensure a user-friendly and smooth experience for your customers.
        
                            You have the freedom to choose from a number of stunning styles and an unlimited number of colors when generating your QR code on My QR Shop. The overall registration process is quick and straightforward. We also offer a number of convenient plans at great prices."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How can I create an account on My QR Shop?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "You have to submit the name of your restaurant in order to register. You also have to submit the name, email, and contact number of the business owner.
                            
                            Once you've submitted all these, you'll be registered on My QR Shop. We maintain the confidentiality of every account and do not share any information with anyone without your permission.
                            "
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Can you tell me how My QR Shop works?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Certainly! The overall process of creating a digital menu with a customized QR is simple and easy thanks to the user-friendly features of My QR Shop.:
        
                            First, you have to enter some basic information about your restaurant and the business owner to register.
                            
                            Next, you have to generate your QR code. You can choose from 08 QR styles and unlimited color options.
                            
                            Then, you have to add the categories and items of your digital menu, along with descriptions and prices.
                            
                            That's it! You can now manage your orders with the Reject and Accept buttons."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What are the features of the generated QR codes?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "You will get access to a variety of styles (08 options) when generating your QR code on My QR Shop. You can also select from an unlimited number of color options to customize the QR code."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What payment methods can I integrate?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "You can integrate a number of payment options, including debit and credit card payments. Your customers can also pay using their digital wallets.
                            We ensure that every payment is secure and protected from external threats."
                        }
                    }
                ]
            },
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday",
                        "Sunday"
                    ],
                    "opens": "00:00",
                    "closes": "23:59"
                }
            ]
        }
        </script>

    <header class="header-global">
        @include('qrsaas.partials.nav')
    </header>

    <main>

         <!-- Loader -->
        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
            <div class="loader-element">
                <span class="loader-animated-dot"></span>
                <img src="{{ config('global.site_logo') }}" height="40" alt="logo">
            </div>
        </div>

        {{-- OpenGraph Image --}}
        <div class="d-none">
             <img src="./images/myqrshop.jpg" alt="">
        </div>

        <!-- Hero 1 -->
        @include('qrsaas.partials.hero')
        <div class="pb-5"></div>
        @include('qrsaas.partials.tutorial')


        <!-- Product -->
        @include('qrsaas.partials.product')
        @include('qrsaas.partials.new_product')

        <!-- Pricing -->
        @include('qrsaas.partials.pricing')

        <!-- Testimonials -->
        @include('qrsaas.partials.testimonials')

        <!-- Featured clients -->
        @if(in_array("feautureclients", config('global.modules',[])))
         @include('feautureclients::qrsaas')
        @endif

        <!-- DEMO -->
        @include('qrsaas.partials.demo')

        <!-- Footer -->
        {{-- @include('productPayment.footer') --}}
        @include('qrsaas.partials.footer')

    </main>

    <!-- Core -->
    <script src="{{ asset('impactfront') }}/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('impactfront') }}/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ asset('impactfront') }}/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('impactfront') }}/vendor/headroom.js/dist/headroom.min.js"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('impactfront') }}/vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="{{ asset('impactfront') }}/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="{{ asset('impactfront') }}/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="{{ asset('impactfront') }}/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- All in one -->
    <script src="{{ asset('custom') }}/js/js.js?id={{ config('config.version')}}"></script>

    <!-- Impact JS -->
    <script src="{{ asset('impactfront') }}/js/front.js"></script>

    <!-- Custom JS defined by admin -->
    <?php echo file_get_contents(base_path('public/byadmin/front.js')) ?>

    <!-- Notify JS -->
    <script src="{{ asset('custom') }}/js/notify.min.js"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('custom') }}/js/owl.carousel.min.js"></script>

    <!-- CKEditor -->
    <script src="{{ asset('ckeditor') }}/ckeditor.js"></script>
    <script>
        var USER_ID = '{{  auth()->user()&&auth()->user()?auth()->user()->id:"" }}';
    </script>

    

    <script>

    window.onload = function () {

        var ifUser = {!! json_encode(  auth()->user()&&auth()->user() && auth()->user()->hasRole('admin') ? true : false) !!};

        if(ifUser){
            initializeCKEditor();

            changeContentEditable(true);

            showEditBtns();
            

        }else{
            changeContentEditable(false);

            
        }

        CKEDITOR.on('instanceReady', function(event) {
            var editor = event.editor;

            editor.on('blur', function(e) {

                var html=editor.getSnapshot()
                var dom=document.createElement("DIV");
                dom.innerHTML=html;
                var plain_text=(dom.textContent || dom.innerText);

                var APP_URL = {!! json_encode(url('/')) !!}

                var locale = {!! json_encode(Config::get('app.locale')) !!}

                changeContent(APP_URL, locale, editor.name, plain_text)
            });
        });

        function showEditBtns(){
            $('.ckedit_btn').each(function(i, obj) {
                $(this).show();
            });
        }

        function initializeCKEditor(){
            var elements = CKEDITOR.document.find('.ckedit'),
            i = 0,
            element;

            while ( ( element = elements.getItem( i++ ) ) ) {
                //CKEDITOR.inline(element);
                CKEDITOR.inline(element, {
                    removePlugins: 'link, image',
                    removeButtons: 'Bold,Italic,Underline,Strike,Subscript,Superscript,RemoveFormat,Scayt,SpecialChar,About,Styles,Cut,Copy,Undo,Redo,Outdent,Indent,Table,HorizontalRule,NumberedList,BulletedList,Blockquote,Format'
                } );
            }
        }

        $(".ckedit_btn").on('click',function() {
            var next = $(this).next().attr('key');

            var editor = CKEDITOR.instances[next];
            editor.focus();
        });

        function changeContentEditable(bool){
            $('.ckedit').each(function(i, obj) {
                $(this).attr("contenteditable",bool);
            });
        }

        function changeContent(APP_URL, locale, key, value){
            var isDemo={!! config('settings.is_demo')|config('settings.is_demo') !!};
            if(!isDemo){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type:'POST',
                    url: APP_URL+'/admin/languages/'+locale,
                    dataType: 'json',
                    data: {
                        group: "qrlanding",
                        key: key,
                        language: locale,
                        value: value
                    },
                    success:function(response){
                        if(response){
                            var msg = {!! json_encode(__('qrlanding.success')) !!}

                            js.notify(msg, "success");
                        }
                    }
            })

            }else{
              //ok
              js.notify("Changing strings not allowed in demo mode.","warning");
            }



        }

        
    }
    </script>
</body>
</html>