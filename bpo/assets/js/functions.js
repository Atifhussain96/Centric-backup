$(document).ready(function() {
    //owlcarousel
    $('.owl-testimonial').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        margin:20,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:8000,
        autoplaySpeed: 800,
        responsive:{
            0:{
                items:2,
            },
            600:{
                items:2,
            },
            1000:{
                items:2,
            },
            360:{
                items:1
            }
        }
    });
    $("#backTop").click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
    });

    //responsive menu
    $(".menu-bottom").on("click", function() {
        $("html").toggleClass("menu-open")
    });
    $(".menu-bottom").click(function() {
        $(this).toggleClass("click")
    });


});

