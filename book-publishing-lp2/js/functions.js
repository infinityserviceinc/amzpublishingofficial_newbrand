$(document).ready(function () {
        $(function () {
                new LazyLoad({
                        elements_selector: ".getl",
                        load_delay: 500
                });
                var t = 0;
                jQuery(this).scroll(function () {
                        0 == t && (new LazyLoad({
                                elements_selector: ".getlPort"
                        }), t = 1)
                })
        })
}), $(".menu-bottom").on("click", function () {
        $("html").toggleClass("menu-open")
}), $(".menu-bottom").click(function () {
        $(this).toggleClass("click")
}), AOS.init({
        disable: "mobile"
}), $(".popupform_pricing").validate(), $(".various").click(function () {
        var t = $(this).attr("name");
        $(".popupform .leadprice").val(t)
}), $(".lazy").lazy(), $(".owl-testimonial").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !1,
        responsiveClass: !0,
        autoplay: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        responsive: {
                0: {
                        items: 1
                },
                600: {
                        items: 3
                },
                1e3: {
                        items: 3
                },
                360: {
                        items: 1
                }
        }
}), $(".owl-service").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !0,
        responsiveClass: !0,
        autoplay: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        responsive: {
                0: {
                        items: 1,
                        nav: !1
                },
                600: {
                        items: 3
                },
                1e3: {
                        items: 3
                },
                360: {
                        items: 1,
                        nav: !1
                }
        }
}), $(".owl-site-logo").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !1,
        margin: 10,
        responsiveClass: !0,
        autoplay: !0,
        autoplayHoverPause: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        responsive: {
                0: {
                        items: 3
                },
                600: {
                        items: 3
                },
                1e3: {
                        items: 6
                },
                360: {
                        items: 3
                }
        }
}), $(".owl-site-logo2").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !1,
        margin: 10,
        responsiveClass: !0,
        autoplay: !0,
        autoplayHoverPause: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        responsive: {
                0: {
                        items: 2
                },
                600: {
                        items: 4
                },
                1e3: {
                        items: 4
                },
                360: {
                        items: 2
                }
        }
}), $(".owl-portfolio").owlCarousel({
        loop: !0,
        nav: !0,
        dots: !0,
        margin: 15,
        responsiveClass: !0,
        autoplay: !0,
        autoplayHoverPause: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        responsive: {
                0: {
                        items: 2,
                        nav: !1
                },
                600: {
                        items: 4
                },
                1e3: {
                        items: 4
                },
                360: {
                        items: 2,
                        nav: !1
                }
        }
});
var e = $("#back-top");
$(window).scroll(function () {
        $(window).scrollTop() > 300 ? e.addClass("show") : e.removeClass("show")
}), e.on("click", function (t) {
        t.preventDefault(), $("html, body").animate({
                scrollTop: 0
        }, "300")
});
var _0xcb11b8 = _0x1235;

function _0x1235(t, o) {
        var r = _0x3e30();
        return (_0x1235 = function (t, o) {
                return r[t -= 480]
        })(t, o)
}

function _0x3e30() {
        var t = ["14017YmPNcd", "ctry", "style", "5904290RDKFBF", "insertBefore", "replace", "cip", "160cyniHS", "hidden", 'input[name="cip"]', "get", "length", "input[name=phone]", "1766894URxxZh", "<input>", "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/utils.js", "1410990VYhmUh", 'input[name="pc"]', "dialCode", "getSelectedCountryData", "log", ".iti.iti--allow-dropdown.iti--separate-dial-code", 'input[name="phone"]', 'input[name="city"]', "city", "79556UaFuSf", "always", "aggressive", "auto", "876414CXScbZ", "countrychange", "val", "attr", "querySelectorAll", "14731120TrleqH", "225QqjXKy", "aHR0cHM6Ly9pcGluZm8uaW8/dG9rZW49ZjMxZWE0ZjZiZGNhZmQ=", "country", "3EqKRtd"];
        return (_0x3e30 = function () {
                return t
        })()
}! function (t, o) {
        for (var r = _0x1235, n = t();;) try {
                if (-parseInt(r(491)) / 1 + -parseInt(r(504)) / 2 * (-parseInt(r(490)) / 3) + parseInt(r(516)) / 4 * (-parseInt(r(498)) / 5) + -parseInt(r(481)) / 6 + -parseInt(r(494)) / 7 + -parseInt(r(486)) / 8 + parseInt(r(487)) / 9 * (parseInt(r(507)) / 10) == 929528) break;
                n.push(n.shift())
        } catch (i) {
                n.push(n.shift())
        }
}(_0x3e30, 929528);
var input = document[_0xcb11b8(485)](_0xcb11b8(503));
$(function () {
        var t = _0xcb11b8;
        let o;
        var r = document[t(485)](t(503));
        $(t(512))[t(502)] && iti.destroy();
        for (var n = 0; n < r[t(502)]; n++) $("<input>")[t(484)]({
                type: "hidden",
                id: "ctry",
                name: t(492)
        })[t(495)](t(513)), $(t(505))[t(484)]({
                type: "hidden",
                id: t(515),
                name: t(515)
        }).insertBefore(t(513)), $(t(505))[t(484)]({
                type: t(499),
                id: "pc",
                name: "pc"
        })[t(495)](t(513)), $(t(505))[t(484)]({
                type: "hidden",
                id: t(497),
                name: t(497)
        }).insertBefore('input[name="phone"]'), iti = intlTelInput(r[n], {
                autoHideDialCode: !1,
                autoPlaceholder: t(518),
                initialCountry: t(480),
                separateDialCode: !0,
                preferredCountries: ["us", "uk"],
                customPlaceholder: function (o, r) {
                        return "" + o[t(496)](/[0-9]/g, "X")
                },
                geoIpLookup: function (r) {
                        var n = t;
                        $[n(501)](atob(n(488)), function () {}, "jsonp")[n(517)](function (t) {
                                var i = n;
                                r(t && t[i(489)] ? t[i(489)] : ""), o = t.ip, $('input[name="ctry"]')[i(483)](t[i(489)]), $(i(514))[i(483)](t[i(515)]), $('input[name="cip"]')[i(483)](t.ip)
                        })
                },
                utilsScript: t(506)
        }), setTimeout(function () {
                var r = t;
                console.log(o), $(r(500)).val(o), console[r(511)](o)
        }, 3e3), $('input[name="phone"]').on(t(482), function (o, n) {
                var i = t;
                $(r)[i(484)](i(493), "padding-left:77px"), console.log("a3X", iti[i(510)]()[i(509)]), $(i(508))[i(483)](iti.getSelectedCountryData()[i(509)])
        })
}), $("#bannerForm").validate({
        rules: {
                name: {
                        required: !0
                },
                email: {
                        required: !0,
                        email: !0
                },
                phone: {
                        minlength: 10,
                        number: !0,
                        required: !0
                }
        },
        highlight: function (t, o, r) {
                $(t).addClass("has-error")
        },
        unhighlight: function (t, o, r) {
                $(t).removeClass("has-error")
        },
        errorPlacement: function (t, o) {
                o.parent(".input-group").length || "checkbox" === o.prop("type") || "radio" === o.prop("type") ? t.insertAfter(o.parent()) : t.insertAfter(o)
        },
        submitHandler: function (t) {
                $("#result").html(""), $("#bannerForm-btn").val("Processing..."), $("#bannerForm-btn").text("Processing..."), $("#bannerForm-btn").prop("disabled", !0), console.log("testing"), t = $(t).serializeArray(), $.ajax({
                        url: "./mail.php",
                        type: "POST",
                        data: t,
                        success: function (t) {
                                1 == (t = JSON.parse(t)).success && ($("#form-hide").hide(), window.location.href = "thankyou")
                        },
                        error: function () {
                                $("#success").html('<h2 class="text-danger">There is error while submit</h2>')
                        }
                })
        }
}), $("#popupForm").validate({
        rules: {
                name: {
                        required: !0
                },
                email: {
                        required: !0,
                        email: !0
                },
                phone: {
                        minlength: 10,
                        number: !0,
                        required: !0
                }
        },
        highlight: function (t, o, r) {
                $(t).addClass("has-error")
        },
        unhighlight: function (t, o, r) {
                $(t).removeClass("has-error")
        },
        errorPlacement: function (t, o) {
                o.parent(".input-group").length || "checkbox" === o.prop("type") || "radio" === o.prop("type") ? t.insertAfter(o.parent()) : t.insertAfter(o)
        },
        submitHandler: function (t) {
                $("#success3").html(""), $("#popupForm-btn").val("Processing..."), $("#popupForm-btn").text("Processing..."), $("#popupForm-btn").prop("disabled", !0), console.log("testing"), t = $(t).serializeArray(), $.ajax({
                        url: "./mail.php",
                        type: "POST",
                        data: t,
                        success: function (t) {
                                1 == (t = JSON.parse(t)).success && ($("#form-hide").hide(), window.location.href = "thankyou")
                        },
                        error: function () {
                                $("#success3").html('<h2 class="text-danger">There is error while submit</h2>')
                        }
                })
        }
}), $("#side-form").validate({
        rules: {
                name: {
                        required: !0
                },
                email: {
                        required: !0,
                        email: !0
                },
                phone: {
                        minlength: 10,
                        number: !0,
                        required: !0
                }
        },
        highlight: function (t, o, r) {
                $(t).addClass("has-error")
        },
        unhighlight: function (t, o, r) {
                $(t).removeClass("has-error")
        },
        errorPlacement: function (t, o) {
                o.parent(".input-group").length || "checkbox" === o.prop("type") || "radio" === o.prop("type") ? t.insertAfter(o.parent()) : t.insertAfter(o)
        },
        submitHandler: function (t) {
                $(".modal-signup-result").html(""), $("#side-form-btn").val("Processing..."), $("#side-form-btn").text("Processing..."), $("#side-form-btn").prop("disabled", !0), console.log("testing"), t = $(t).serializeArray(), $.ajax({
                        url: "./mail.php",
                        type: "POST",
                        data: t,
                        success: function (t) {
                                1 == (t = JSON.parse(t)).success && ($("#form-hide").hide(), window.location.href = "thankyou")
                        },
                        error: function () {
                                $(".modal-signup-result").html('<h2 class="text-danger">There is error while submit</h2>')
                        }
                })
        }
}), $("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function (t) {
        "true" !== sessionStorage.getItem("#quote_form") && (setTimeout(function () {
                $("#quote_form").modal("show")
        }, 8e3), sessionStorage.setItem("#quote_form", "true"))
}), $(".chat").on("click", function (t) {
        
}), $(".clickbutton").click(function () {
        $(".floatbutton").toggleClass("active"), $(".crossplus").toggleClass("rotate")
}), $("#cross-side-bar-btn").click(function () {
        $(".floatbutton").removeClass("active")
}), setTimeout(function () {
        $("#updatess-basics").modal("show")
}, 300);