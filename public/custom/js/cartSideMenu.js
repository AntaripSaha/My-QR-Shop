"use strict";
function openNav() {
    $("#cartSideNav").addClass('sidenav-cart-open').removeClass('sidenav-cart-close');
}

function closeNav() {
   $("#cartSideNav").addClass('sidenav-cart-close').removeClass('sidenav-cart-open');
}

$(window).scroll(function(){
    if ($(window).scrollTop() >= 1) {
        $('#navbar-main').addClass('custom-nav');
        $('#topDarkLogo').show();
        $('#topLightLogo').hide();
        $('#resto_name').show().css({"color":"black",  "font-size": "120%"});
    }
    else {
        $('#navbar-main').removeClass('custom-nav');
        $('#topDarkLogo').hide();
        $('#topLightLogo').show();
        $('#resto_name').css({"color":"black",  "font-size": "140%"});

    }
});
