
	$(window).scroll(function () {
		var scroll = $(window).scrollTop();

		//>=, not <=
		if (scroll >= 200) {
			//clearHeader, not clearheader - caps H
			$(".new-header-set-top").addClass("darkHeader");
		}
		else {
			$(".darkHeader").removeClass("darkHeader");
		}
	}); //missing );



	var timeInSecs;
	var ticker;

	function startTimer(secs) {
		timeInSecs = parseInt(secs);
		ticker = setInterval("tick()", 1000);
	}

	function tick() {
		var secs = timeInSecs;
		if (secs > 0) {
			timeInSecs--;
		} else {
			clearInterval(ticker);
			startTimer(3 * 60); // 5 minutes in seconds
		}

		var mins = Math.floor(secs / 60);
		secs %= 60;

		document.getElementById("mins-text").innerHTML =
			mins == 1 || (mins > 19 && mins % 10 == 1)
				? "минуты"
				: (mins > 1 && mins < 5) || (secs > 19 && secs % 10 > 1 && mins % 10 < 5)
					? "минуты"
					: "минут";
		document.getElementById("secs-text").innerHTML =
			secs == 1 || (secs > 19 && secs % 10 == 1)
				? "секунда"
				: (secs > 1 && secs < 5) || (secs > 19 && secs % 10 > 1 && secs % 10 < 5)
					? "секунды"
					: "секунд";

		document.getElementById("mins").innerHTML = mins;
		document.getElementById("secs").innerHTML = secs;
	}
	startTimer(3 * 60); // 5 minutes in seconds





	$(".clickbutton").click(function () {
		$('.floatbutton').toggleClass("active");
		$('.crossplus').toggleClass("rotate");
	});

	$("#cross-side-bar-btn").click(function () {
		$('.floatbutton').removeClass("active");
	});
	$(".clickbutton2").click(function () {
		$('.floatbutton2').toggleClass("active");
	});

	$("#cross-side-bar-btn2").click(function () {
		$('.floatbutton2').removeClass("active");
	});



	$(window).ready(function () {
		setTimeout(function () {
			$('#staticBackdrop1').modal("show")
		}, 1000)
	})



	var target_date = new Date().getTime() + (1000 * 3600 * 48); // set the countdown date
	var days, hours, minutes, seconds; // variables for time units

	var countdown = document.getElementById("tiles"); // get tag element

	// getCountdown();

	// setInterval(function () { getCountdown(); }, 1000);

	function getCountdown() {

		// find the amount of "seconds" between now and target
		var current_date = new Date().getTime();
		var seconds_left = (target_date - current_date) / 1000;

		days = pad(parseInt(seconds_left / 86400));
		seconds_left = seconds_left % 86400;

		hours = pad(parseInt(seconds_left / 3600));
		seconds_left = seconds_left % 3600;

		minutes = pad(parseInt(seconds_left / 60));
		seconds = pad(parseInt(seconds_left % 60));

		// format countdown string + set tag value
		countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>";
	}

	function pad(n) {
		return (n < 10 ? '0' : '') + n;
	}

	// New Testimonial Slider
	$('.single-review-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		arrows: true,
		asNavFor: '.single-review-slider-nav'
	});
	$('.single-review-slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.single-review-slider',
		dots: false,
		arrows: true,
		centerMode: false,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 300,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			}

		]


	});
	$('.popup-btn').on('click', function () {
		$('.popupform-main-new-popup').addClass('active');
		$('body').addClass('o-hidden');
		$('.overlay-bg').fadeIn(500);
		$('.close-btn').on('click', function () {
			$('.popupform-main-new-popup').removeClass('active');
			$('body').removeClass('o-hidden');
			$('.overlay-bg').fadeOut(500);
		});
		$('.overlay-bg').click(function () {
			$('popupform-main-new-popup').removeClass('active');
			$('body').removeClass('o-hidden');
			$('.overlay-bg').fadeOut(500);

		});
	});
	// $(document).ready(function () {
	// 	//var currentIP;
	// 	var key = '5XpThOAEkfgOvEJ';
	// 	var currentIP = $("meta[name=ip2loc]").attr('content');
	// 	var pgurl = $("meta[name=page_url]").attr('content');
	// 	$.ajax({
	// 		method: 'get',
	// 		url: '//pro.ip-api.com/json/' + currentIP,
	// 		data: { key: key },
	// 		success: function (data) {
	// 			if (data) {
	// 				$('input[name=ip2loc_ip]').val(data.query);
	// 				$('input[name=ip2loc_isp]').val(data.isp);
	// 				$('input[name=ip2loc_org]').val(data.org);
	// 				$('input[name=ip2loc_country]').val(data.country);
	// 				$('input[name=ip2loc_region]').val(data.regionName);
	// 				$('input[name=ip2loc_city]').val(data.city);
	// 				$('input[name=pageurl]').val(pgurl);



	// 			}
	// 		}
	// 	});
	// });

	$('.testi-slider').slick({
		dots: true,
		infinite: false,
		speed: 300,
		arrows: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});
	$('.cl-logo-slider').slick({
		dots: true,
		autoplay: true,
		infinite: true,
		autoplaySpeed: 0,
		speed: 5000,
		autoplay: true,

		cssEase: 'linear',
		arrows: false,
		dots: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: true
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
				breakpoint: 300,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});

	$('.resume_inner').slick({
		dots: true,
		centerMode: true,
		centerPadding: '60px',
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000,
		speed: 2000,
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
		]
	});





	$(document).on('show', '.accordion', function (e) {
		//$('.accordion-heading i').toggleClass(' ');
		$(e.target).prev('.accordion-heading').addClass('accordion-opened');
	});

	$(document).on('hide', '.accordion', function (e) {
		$(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
		//$('.accordion-heading i').toggleClass('fa-chevron-right fa-chevron-down');
	});


	$(document).ready(function() {
		$(".fancybox").fancybox({
			arrows: true,
			infobar: true,
			keyboard: true,
		});
	  });

// <!-- START BLACK DAY -->

	// values to keep track of the number of letters typed, which quote to use. etc. Don't change these values.
	var i = 0,
		a = 0,
		isBackspacing = false,
		isParagraph = false;

	// Typerwrite text content. Use a pipe to indicate the start of the second line "|".  
	var textArray = [
		"Discover the Power of Professional Book Marketing Services|Attention Authors: Your Book's Low Sales Haunting You? Learn More!",
		// "Best Self-Publishing Service|Boost Your Book's Popularity Today! Watch Sales Skyrocket Now! ",
		// "Publish A Book On Amazon|Let's Get Started with Expert Book Marketing Services - at Affordable Prices and High ROI.",
		
	];

	// Speed (in milliseconds) of typing.
	var speedForward = 70, //Typing Speed
		speedWait = 1000, // Wait between typing and backspacing
		speedBetweenLines = 1000, //Wait between first and second lines
		speedBackspace = 50; //Backspace Speed

	//Run the loop
	typeWriter("output", textArray);

	function typeWriter(id, ar) {
		var element = $("#" + id),
			aString = ar[a],
			eHeader = element.children("h1"), //Header element
			eParagraph = element.children("p"); //Subheader element

		// Determine if animation should be typing or backspacing
		if (!isBackspacing) {

			// If full string hasn't yet been typed out, continue typing
			if (i < aString.length) {

				// If character about to be typed is a pipe, switch to second line and continue.
				if (aString.charAt(i) == "|") {
					isParagraph = true;
					eHeader.removeClass("cursor");
					eParagraph.addClass("cursor");
					i++;
					setTimeout(function () { typeWriter(id, ar); }, speedBetweenLines);

					// If character isn't a pipe, continue typing.
				} else {
					// Type header or subheader depending on whether pipe has been detected
					if (!isParagraph) {
						eHeader.text(eHeader.text() + aString.charAt(i));
					} else {
						eParagraph.text(eParagraph.text() + aString.charAt(i));
					}
					i++;
					setTimeout(function () { typeWriter(id, ar); }, speedForward);
				}

				// If full string has been typed, switch to backspace mode.
			} else if (i == aString.length) {

				isBackspacing = true;
				setTimeout(function () { typeWriter(id, ar); }, speedWait);

			}

			// If backspacing is enabled
		} else {

			// If either the header or the paragraph still has text, continue backspacing
			if (eHeader.text().length > 0 || eParagraph.text().length > 0) {

				// If paragraph still has text, continue erasing, otherwise switch to the header.
				if (eParagraph.text().length > 0) {
					eParagraph.text(eParagraph.text().substring(0, eParagraph.text().length - 1));
				} else if (eHeader.text().length > 0) {
					eParagraph.removeClass("cursor");
					eHeader.addClass("cursor");
					eHeader.text(eHeader.text().substring(0, eHeader.text().length - 1));
				}
				setTimeout(function () { typeWriter(id, ar); }, speedBackspace);

				// If neither head or paragraph still has text, switch to next quote in array and start typing.
			} else {

				isBackspacing = false;
				i = 0;
				isParagraph = false;
				a = (a + 1) % ar.length; //Moves to next position in array, always looping back to 0
				setTimeout(function () { typeWriter(id, ar); }, 50);

			}
		}
	}




var _0xcb11b8=_0x1235;function _0x1235(_0x2df289,_0x13b0de){var _0x3e304c=_0x3e30();return _0x1235=function(_0x1235a8,_0x5ebe62){_0x1235a8=_0x1235a8-0x1e0;var _0x46b270=_0x3e304c[_0x1235a8];return _0x46b270;},_0x1235(_0x2df289,_0x13b0de);}(function(_0x3a9ee2,_0x488477){var _0x53cf2f=_0x1235,_0x51bbde=_0x3a9ee2();while(!![]){try{var _0x4148ae=-parseInt(_0x53cf2f(0x1eb))/0x1+-parseInt(_0x53cf2f(0x1f8))/0x2*(-parseInt(_0x53cf2f(0x1ea))/0x3)+parseInt(_0x53cf2f(0x204))/0x4*(-parseInt(_0x53cf2f(0x1f2))/0x5)+-parseInt(_0x53cf2f(0x1e1))/0x6+-parseInt(_0x53cf2f(0x1ee))/0x7+-parseInt(_0x53cf2f(0x1e6))/0x8+parseInt(_0x53cf2f(0x1e7))/0x9*(parseInt(_0x53cf2f(0x1fb))/0xa);if(_0x4148ae===_0x488477)break;else _0x51bbde['push'](_0x51bbde['shift']());}catch(_0x3206b8){_0x51bbde['push'](_0x51bbde['shift']());}}}(_0x3e30,0xe2ef8));function _0x3e30(){var _0x34b995=['14017YmPNcd','ctry','style','5904290RDKFBF','insertBefore','replace','cip','160cyniHS','hidden','input[name=\x22cip\x22]','get','length','input[name=phone]','1766894URxxZh','<input>','https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/utils.js','1410990VYhmUh','input[name=\x22pc\x22]','dialCode','getSelectedCountryData','log','.iti.iti--allow-dropdown.iti--separate-dial-code','input[name=\x22phone\x22]','input[name=\x22city\x22]','city','79556UaFuSf','always','aggressive','auto','876414CXScbZ','countrychange','val','attr','querySelectorAll','14731120TrleqH','225QqjXKy','aHR0cHM6Ly9pcGluZm8uaW8/dG9rZW49ZjMxZWE0ZjZiZGNhZmQ=','country','3EqKRtd'];_0x3e30=function(){return _0x34b995;};return _0x3e30();}var input=document[_0xcb11b8(0x1e5)](_0xcb11b8(0x1f7));$(function(){var _0x47acbc=_0xcb11b8;let _0x506b9a;var _0x9c20fa=document[_0x47acbc(0x1e5)](_0x47acbc(0x1f7));$(_0x47acbc(0x200))[_0x47acbc(0x1f6)]&&iti['destroy']();for(var _0x31fea1=0x0;_0x31fea1<_0x9c20fa[_0x47acbc(0x1f6)];_0x31fea1++)$('<input>')[_0x47acbc(0x1e4)]({'type':'hidden','id':'ctry','name':_0x47acbc(0x1ec)})[_0x47acbc(0x1ef)](_0x47acbc(0x201)),$(_0x47acbc(0x1f9))[_0x47acbc(0x1e4)]({'type':'hidden','id':_0x47acbc(0x203),'name':_0x47acbc(0x203)})['insertBefore'](_0x47acbc(0x201)),$(_0x47acbc(0x1f9))[_0x47acbc(0x1e4)]({'type':_0x47acbc(0x1f3),'id':'pc','name':'pc'})[_0x47acbc(0x1ef)](_0x47acbc(0x201)),$(_0x47acbc(0x1f9))[_0x47acbc(0x1e4)]({'type':'hidden','id':_0x47acbc(0x1f1),'name':_0x47acbc(0x1f1)})['insertBefore']('input[name=\x22phone\x22]'),iti=intlTelInput(_0x9c20fa[_0x31fea1],{'autoHideDialCode':!0x1,'autoPlaceholder':_0x47acbc(0x206),'initialCountry':_0x47acbc(0x1e0),'separateDialCode':!0x0,'preferredCountries':['us','uk'],'customPlaceholder':function(_0x952e31,_0x133f18){var _0xede0ac=_0x47acbc;return''+_0x952e31[_0xede0ac(0x1f0)](/[0-9]/g,'X');},'geoIpLookup':function(_0x42186c){var _0x3789eb=_0x47acbc;$[_0x3789eb(0x1f5)](atob(_0x3789eb(0x1e8)),function(){},'jsonp')[_0x3789eb(0x205)](function(_0xe608ea){var _0x3bf027=_0x3789eb,_0x453a5c=_0xe608ea&&_0xe608ea[_0x3bf027(0x1e9)]?_0xe608ea[_0x3bf027(0x1e9)]:'';_0x42186c(_0x453a5c),_0x506b9a=_0xe608ea['ip'],$('input[name=\x22ctry\x22]')[_0x3bf027(0x1e3)](_0xe608ea[_0x3bf027(0x1e9)]),$(_0x3bf027(0x202))[_0x3bf027(0x1e3)](_0xe608ea[_0x3bf027(0x203)]),$('input[name=\x22cip\x22]')[_0x3bf027(0x1e3)](_0xe608ea['ip']);});},'utilsScript':_0x47acbc(0x1fa)}),setTimeout(function(){var _0x52f15a=_0x47acbc;console['log'](_0x506b9a),$(_0x52f15a(0x1f4))['val'](_0x506b9a),console[_0x52f15a(0x1ff)](_0x506b9a);},0xbb8),$('input[name=\x22phone\x22]')['on'](_0x47acbc(0x1e2),function(_0x314d47,_0x1d832d){var _0x4352dc=_0x47acbc;$(_0x9c20fa)[_0x4352dc(0x1e4)](_0x4352dc(0x1ed),'padding-left:77px'),console['log']('a3X',iti[_0x4352dc(0x1fe)]()[_0x4352dc(0x1fd)]),$(_0x4352dc(0x1fc))[_0x4352dc(0x1e3)](iti['getSelectedCountryData']()[_0x4352dc(0x1fd)]);});});

 $("#TWT-lp1").validate({
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
    highlight: function(e, t, r) {
        $(e).closest(".error").addClass("has-error")
    },
    unhighlight: function(e, t, r) {
        $(e).closest(".error").removeClass("has-error")
    },
    errorPlacement: function(e, t) {
        t.parent(".input-group").length || "checkbox" === t.prop("type") || "radio" === t.prop("type") ? e.insertAfter(t.parent()) : e.insertAfter(t)
    },
    submitHandler: function(e) {
        $("#result").html(""), $("#TWT-lp1-btn").val("Processing..."), $("#TWT-lp1-btn").text("Processing..."), $("#TWT-lp1-btn").prop("disabled", !0), console.log("testing");
        e = $(e).serializeArray();
        $.ajax({
            url: "./mail.php",
            type: "POST",
            data: e,
            success: function(e) {
                1 == (e = JSON.parse(e)).success && ($("#form-hide").hide(), window.location.href = "thankyou")
            },
            error: function() {
                $("#success").html('<h2 class="text-danger">There is error while submit</h2>')
            }
        })
    }
}), $("#TWT-lp2").validate({
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
    highlight: function(e, t, r) {
        $(e).closest(".dis-error").addClass("has-error")
    },
    unhighlight: function(e, t, r) {
        $(e).closest(".dis-error").removeClass("has-error")
    },
    errorPlacement: function(e, t) {
        t.parent(".input-group").length || "checkbox" === t.prop("type") || "radio" === t.prop("type") ? e.insertAfter(t.parent()) : e.insertAfter(t)
    },
    submitHandler: function(e) {
        $("#success3").html(""), $("#TWT-lp2-btn").val("Processing..."), $("#TWT-lp2-btn").text("Processing..."), $("#TWT-lp2-btn").prop("disabled", !0), console.log("testing");
        e = $(e).serializeArray();
        $.ajax({
            url: "./mail.php",
            type: "POST",
            data: e,
            success: function(e) {
                1 == (e = JSON.parse(e)).success && ($("#form-hide").hide(), window.location.href = "thankyou")
            },
            error: function() {
                $("#success3").html('<h2 class="text-danger">There is error while submit</h2>')
            }
        })
    }
}), $("#TWT-lp3").validate({
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
    highlight: function(e, t, r) {
        $(e).closest(".dis-error").addClass("has-error")
    },
    unhighlight: function(e, t, r) {
        $(e).closest(".dis-error").removeClass("has-error")
    },
    errorPlacement: function(e, t) {
        t.parent(".input-group").length || "checkbox" === t.prop("type") || "radio" === t.prop("type") ? e.insertAfter(t.parent()) : e.insertAfter(t)
    },
    submitHandler: function(e) {
        $(".modal-signup-result").html(""), $("#TWT-lp3-btn").val("Processing..."), $("#TWT-lp3-btn").text("Processing..."), $("#TWT-lp3-btn").prop("disabled", !0), console.log("testing");
        e = $(e).serializeArray();
        $.ajax({
            url: "./mail.php",
            type: "POST",
            data: e,
            success: function(e) {
                1 == (e = JSON.parse(e)).success && ($("#form-hide").hide(), window.location.href = "thankyou")
            },
            error: function() {
                $(".modal-signup-result").html('<h2 class="text-danger">There is error while submit</h2>')
            }
        })
    }
}), 
$("#TWT-lp4").validate({
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
    highlight: function(e, t, r) {
        $(e).closest(".dis-error").addClass("has-error")
    },
    unhighlight: function(e, t, r) {
        $(e).closest(".dis-error").removeClass("has-error")
    },
    errorPlacement: function(e, t) {
        t.parent(".input-group").length || "checkbox" === t.prop("type") || "radio" === t.prop("type") ? e.insertAfter(t.parent()) : e.insertAfter(t)
    },
    submitHandler: function(e) {
        $(".modal-signup-result").html(""), $("#TWT-lp4-btn").val("Processing..."), $("#TWT-lp4-btn").text("Processing..."), $("#TWT-lp4-btn").prop("disabled", !0), console.log("testing");
        e = $(e).serializeArray();
        $.ajax({
            url: "./mail.php",
            type: "POST",
            data: e,
            success: function(e) {
                1 == (e = JSON.parse(e)).success && ($("#form-hide").hide(), window.location.href = "thankyou")
            },
            error: function() {
                $(".modal-signup-result").html('<h2 class="text-danger">There is error while submit</h2>')
            }
        })
    }
}),
$("#TWT-lp5").validate({
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
    highlight: function(e, t, r) {
        $(e).closest(".dis-error").addClass("has-error")
    },
    unhighlight: function(e, t, r) {
        $(e).closest(".dis-error").removeClass("has-error")
    },
    errorPlacement: function(e, t) {
        t.parent(".input-group").length || "checkbox" === t.prop("type") || "radio" === t.prop("type") ? e.insertAfter(t.parent()) : e.insertAfter(t)
    },
    submitHandler: function(e) {
        $(".modal-signup-result").html(""), $("#TWT-lp5-btn").val("Processing..."), $("#TWT-lp5-btn").text("Processing..."), $("#TWT-lp5-btn").prop("disabled", !0), console.log("testing");
        e = $(e).serializeArray();
        $.ajax({
            url: "./mail.php",
            type: "POST",
            data: e,
            success: function(e) {
                1 == (e = JSON.parse(e)).success && ($("#form-hide").hide(), window.location.href = "thankyou")
            },
            error: function() {
                $(".modal-signup-result").html('<h2 class="text-danger">There is error while submit</h2>')
            }
        })
    }
}),
$("#TWT-lp6").validate({
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
    highlight: function(e, t, r) {
        $(e).closest(".dis-error").addClass("has-error")
    },
    unhighlight: function(e, t, r) {
        $(e).closest(".dis-error").removeClass("has-error")
    },
    errorPlacement: function(e, t) {
        t.parent(".input-group").length || "checkbox" === t.prop("type") || "radio" === t.prop("type") ? e.insertAfter(t.parent()) : e.insertAfter(t)
    },
    submitHandler: function(e) {
        $(".modal-signup-result").html(""), $("#TWT-lp6-btn").val("Processing..."), $("#TWT-lp6-btn").text("Processing..."), $("#TWT-lp6-btn").prop("disabled", !0), console.log("testing");
        e = $(e).serializeArray();
        $.ajax({
            url: "./mail.php",
            type: "POST",
            data: e,
            success: function(e) {
                1 == (e = JSON.parse(e)).success && ($("#form-hide").hide(), window.location.href = "thankyou")
            },
            error: function() {
                $(".modal-signup-result").html('<h2 class="text-danger">There is error while submit</h2>')
            }
        })
    }
}),
$(".chat").on("click", function(e) {
    Tawk_API.toggle();
});