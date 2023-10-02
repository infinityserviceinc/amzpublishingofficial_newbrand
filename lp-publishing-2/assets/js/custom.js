$(document).ready(function () {
    switchDiv();
    $(".packages_slider").owlCarousel({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1

                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1

                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });
    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    $('[href="#"]').attr("href", "javascript:;");
    $(".menu-Bar").click(function () {
        $(this).toggleClass("open");
        $(".menuWrap").toggleClass("open");
        $("body").toggleClass("ovr-hiddn");
    });
    $(".signUp").click(function () {
        $(".signUpPop").fadeIn();
        $(".overlay").fadeIn();
    });
    $(".pricePopup").click(function () {
        var attr = $(this).attr("rel");
        $(".packagekey").val(attr);
        $(".showPrice").fadeIn();
        $(".overlay").fadeIn();
    });
    $(".closePop,.overlay").click(function () {
        $(".popupMain,.showPrice").fadeOut();
        $(".overlay").fadeOut();
    });
    $("[data-targetit]").on("click", function (e) {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        var target = $(this).data("targetit");
        $("." + target)
            .siblings('[class^="box-"]')
            .hide();
        $("." + target).fadeIn();
    });
    $(".searchBtn").click(function () {
        $(".searchWrap").addClass("active");
        $(".overlay").fadeIn("active");
        $(".searchWrap input").focus();
        $(".searchWrap input").focusout(function (e) {
            $(this).parents().removeClass("active");
            $(".overlay").fadeOut("active");
            $("body").removeClass("ovr-hiddn");
        });
    });
    $(".perspectiv-carousel").PicCarousel({
        height: 400,
        width: 600,
        arrows: false,
        posterWidth: 192,
        posterHeight: 282,
        scale: 0.9,
        speed: 1000,
        autoPlay: true,
        delay: 500,
        verticalAlign: "middle",
    });
    $("header").hover(function () {
        $(".sub-level1 > li").removeClass("active");
        $(".sub-level1 > li:first-child").addClass("active");
    });
    $(".sub-level2 > li").hover(function () {
        $(".sub-level2 .menu-slogan").removeClass("active");
        $(this).find(".menu-slogan").addClass("active");
    });
    $(".sub-level1 > li").hover(function () {
        $(".sub-level1 > li").removeClass("active");
        $(this).addClass("active");
    });
    $(".controls").hide();
    $(".dropRadio input").change(function () {
        if ($(this).is(":checked")) {
            $(".controls").slideDown();
            $(this).parents(".dropRadio").hide();
        } else {
            $(".controls").slideUp();
        }
    });
});
$("header").addClass("StickyHeader");
$(function () {
    $("header").before($(".StickyHeader").clone().addClass("stick"));
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 300) {
            $(".StickyHeader.stick").addClass("slideDown");
        } else {
            $(".StickyHeader.stick").removeClass("slideDown");
        }
    });
    $("li.dropdown-nav").hover(function () {
        $(this).children("ul").stop(true, false, true).slideToggle(300);
    });
    $("li.submenudrop ").hover(function () {
        $(this).children("ul").stop(true, false, true).slideToggle(300);
    });
    $(".genreUp").click(function () {
        $(".genrePopup").fadeIn();
        $(".overlay").fadeIn();
    });
    $(".loginUp").click(function () {
        $(".LoginPopup").fadeIn();
        $(".overlay").fadeIn();
    });
});
$(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 400) {
            $(".side-bar").fadeIn();
        } else {
            $(".side-bar").fadeOut();
        }
    });
});
$(".side-bar-frm-head, .sidebar-popup").click(function () {
    $(".side-bar-form").toggleClass("active");
    $(".side-bar-frm-head").toggleClass("active");
    $(".side-bar").toggleClass("active");
});
$(".testi-slider").slick({
    dots: false,
    infinite: true,
    arrows: true,
    autoplay: true,
    autoplayspeed: 4000,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        { breakpoint: 900, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
});
$(".awardss-slider").slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplayspeed: 4000,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        { breakpoint: 900, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
});
$(".awrdsRcg ul li a").click(function () {
    var tab_id = $(this).attr("data-tag");
    $(".awrdsRcg ul li a").removeClass("nwsMd");
    $(".awrdsRcg-content").removeClass("active");
    $(this).addClass("nwsMd");
    $("#" + tab_id).addClass("active");
});
$(".team-slider").slick({
    dots: false,
    infinite: true,
    arrows: true,
    autoplay: true,
    autoplayspeed: 4000,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        { breakpoint: 900, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
}),
$(".ser_slider").slick({
    infinite: true,
    slidesToShow: 4,
    arrows: true,
    dots: false,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false,
            },
        },
    ],
}),
$(".indst-slider").slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplayspeed: 4000,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        { breakpoint: 992, settings: { slidesToShow: 2, slidesToScroll: 1 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
}),
$(".our-editor").slick({
    dots: false,
    infinite: true,
    arrows: true,
    autoplay: false,
    autoplayspeed: 4000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        { breakpoint: 900, settings: { slidesToShow: 3, slidesToScroll: 1 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
}),
$(".book-coverslider").slick({
    dots: false,
    infinite: true,
    arrows: true,
    autoplay: false,
    autoplayspeed: 4000,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        { breakpoint: 900, settings: { slidesToShow: 3, slidesToScroll: 1 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
}),
$(".feature-slider").slick({
    dots: false,
    infinite: true,
    arrows: true,
    autoplay: false,
    autoplayspeed: 4000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        { breakpoint: 900, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
}),
$(".owl-portfolio").owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    margin: 15,
    responsiveClass: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 8000,
    autoplaySpeed: 800,
    responsive: {
        1600: {
            items: 4,
            nav: false
        },
        1400: {
            items: 4 // Change the number of items to 4 here
        },
        900: {
            items: 2
        },
        360: {
            items: 1,
            nav: false
        }
    }
}),

$(".bookcover-slide").slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    autoplayspeed: 4000,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        { breakpoint: 900, settings: { slidesToShow: 3, slidesToScroll: 1 } },
        { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } },
    ],
});
$(".ftr-btm li:first-child").on("click", function () {
    $(this).toggleClass("active");
    $(".ftr-btm li:last-child").slideToggle();
});
$(window).on("load", function () {
    var currentUrl = window.location.href.substr(
        window.location.href.lastIndexOf("/") + 1
    );
    $("ul.menu li a").each(function () {
        var hrefVal = $(this).attr("href");
        if (hrefVal == currentUrl) {
            $(this).removeClass("active");
            $(this).closest("li").addClass("active");
            $("ul.menu li.first").removeClass("active");
        }
    });
    $(".grid").isotope({ itemSelector: ".grid-item" });
    $(".faqAccordian>li.first").addClass("active");
    $(".faqAccordian>li").click(function () {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    });
    $(".fancybox-media").fancybox({
        openEffect: "none",
        closeEffect: "none",
        helpers: { media: {} },
    });
    var i = 0,
        a = 0,
        isBackspacing = false,
        isParagraph = false;
    var textArray = ["Adventure", "Self Help", "Mystery", "Romance"];
    var images = { 0: { urls: ["assets/images/banner/adventure.jpg)"] } };
    // var images = { 0: { urls: ["assets/images/banner/adventure.jpg)"] }, 1: { urls: ["assets/images/banner/self-help.jpg)"] }, 2: { urls: ["assets/images/banner/mystery.jpg)"] }, 3: { urls: ["assets/images/banner/romance.jpg)"] } };
    var speedForward = 100,
        speedWait = 3000,
        speedBetweenLines = 1000,
        speedBackspace = 50;
    typeWriter("output", textArray);
    function changeImage(number) {
        var imagesArr = [];
        images[number].urls.forEach(function (url) {
            var imageVar = imagesArr.push(url);
            $(".HomeBanner").attr("style", "background-image: url(" + url + "");
        });
    }
    function typeWriter(id, ar, callback) {
        var element = $("#" + id),
            aString = ar[a],
            eHeader = element.children("span"),
            eParagraph = element.children("p");
        count = 0;
        if (!isBackspacing) {
            if (i < aString.length) {
                if (aString.charAt(i) == "|") {
                    isParagraph = true;
                    eHeader.removeClass("cursor");
                    eParagraph.addClass("cursor");
                    i++;
                    setTimeout(function () {
                        typeWriter(id, ar);
                    }, speedBetweenLines);
                } else {
                    if (!isParagraph) {
                        eHeader.text(eHeader.text() + aString.charAt(i));
                    } else {
                        eParagraph.text(eParagraph.text() + aString.charAt(i));
                    }
                    i++;
                    setTimeout(function () {
                        typeWriter(id, ar);
                    }, speedForward);
                }
                count++;
            } else if (i == aString.length) {
                isBackspacing = true;
                setTimeout(function () {
                    typeWriter(id, ar);
                }, speedWait);
            }
        } else {
            if (eHeader.text().length > 0 || eParagraph.text().length > 0) {
                if (eParagraph.text().length > 0) {
                    eParagraph.text(
                        eParagraph
                            .text()
                            .substring(0, eParagraph.text().length - 1)
                    );
                } else if (eHeader.text().length > 0) {
                    eParagraph.removeClass("cursor");
                    eHeader.addClass("cursor");
                    eHeader.text(
                        eHeader.text().substring(0, eHeader.text().length - 1)
                    );
                }
                setTimeout(function () {
                    typeWriter(id, ar);
                }, speedBackspace);
            } else {
                isBackspacing = false;
                i = 0;
                isParagraph = false;
                a = (a + 1) % ar.length;
                setTimeout(function () {
                    typeWriter(id, ar);
                }, 100);
                changeImage(a);
            }
        }
    }
});
$(window).on("load", function () {
    $("html, body").hide();
    var jump = function (e) {
        if (e) {
            e.preventDefault();
            var target = $(this).attr("href");
        } else {
            var target = location.hash;
        }
        $("html,body").animate(
            { scrollTop: $(target).offset().top - 93 },
            1000,
            function () {
                location.hash = target;
            }
        );
    };
    $(document).ready(function () {
        $(".ftr-hd ul li a[href^=#]").bind("click", jump);
        if (location.hash) {
            setTimeout(function () {
                $("html, body").scrollTop(0).show();
                jump();
            }, 0);
        } else {
            $("html, body").show();
        }
    });
    $(".fancybox-media").fancybox({
        openEffect: "none",
        closeEffect: "none",
        helpers: { media: {} },
    });
});
if ($(window).width() < 825) {
}
function switchDiv() {
    var $window = $(window).outerWidth();
    if ($window <= 768) {
        $(".topAppendTxt").each(function () {
            var getdtd = $(this).find(".cloneDiv").clone(true);
            $(this).find(".cloneDiv").remove();
            $(this).append(getdtd);
        });
    }
}
$(document).ready(function () {
    $(".side-bar-frm-head,.side-bar-frm-head h4 i").click(function () {
        $(".side-bar-frm-head h4 i").toggleClass(
            "fa-chevron-circle-up fa-chevron-circle-down "
        );
        $(".side-bar").toggleClass("side-bar2");
    });
});
(function ($) {
    "use strict";
    $(".page-scroll a").bind("click", function (event) {
        var $anchor = $(this);
        $("html, body")
            .stop()
            .animate(
                { scrollTop: $($anchor.attr("href")).offset().top - 50 },
                1250,
                "easeInOutExpo"
            );
        event.preventDefault();
    });
    $(".navbar-collapse ul li a").click(function () {
        $(".navbar-toggle:visible").click();
    });
    $("#mainNav").affix({ offset: { top: 100 } });
    $(function () {
        $("body")
            .on(
                "input propertychange",
                ".floating-label-form-group",
                function (e) {
                    $(this).toggleClass(
                        "floating-label-form-group-with-value",
                        !!$(e.target).val()
                    );
                }
            )
            .on("focus", ".floating-label-form-group", function () {
                $(this).addClass("floating-label-form-group-with-focus");
            })
            .on("blur", ".floating-label-form-group", function () {
                $(this).removeClass("floating-label-form-group-with-focus");
            });
    });
})(jQuery);
