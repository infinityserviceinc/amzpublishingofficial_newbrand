AOS.init({ once: true })
new WOW().init();
$(document).ready(function () {
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/') + 1);
    if (filename == "") {
        filename = "index.php"
    }
    $("header .nav-item .nav-link").removeClass("active");
    $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active")
});

$(window).scroll(function (e) {
    var scroll = $(window).scrollTop();
    if (scroll >= 150) {
        $("header").addClass("scroll");
    } else {
        $("header").removeClass("scroll");
    }
});

$(document).ready(function(){
    $(".scroll-down").click(function(){
        $("html, body").animate({ scrollTop: $(".section-second").offset().top});
    })
})
$(".genre-slider").owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:6,
            nav:false,
        }
    }
})
$("#recent-release-slider").owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
        }
    }
})
$(".form-wrap .floating-form-btn").click(function(){
    $(this).parents(".form-wrap").toggleClass("open")
})