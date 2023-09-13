$(document).ready(function() {
    switchDiv();

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");

    $('[href="#"]').attr("href", "javascript:;");

    $(".menu-Bar").click(function() {
        $(this).toggleClass("open");
        $(".menuWrap").toggleClass("open");
        $("body").toggleClass("ovr-hiddn");
    });

    $(".loginUp").click(function() {
        $(".LoginPopup").fadeIn();
        $(".overlay").fadeIn();
    });

    $(".signUp").click(function() {
        $(".signUpPop").fadeIn();
        $(".overlay").fadeIn();
    });

    $(".closePop,.overlay").click(function() {
        $(".popupMain").fadeOut();
        $(".overlay").fadeOut();
    });

    $(".menu .menu-item-has-children").addClass("dropdown-nav ");
    $(".menu .menu-item-has-children ul.sub-menu").addClass("dropdown");

    /* Tabbing Function */
    $("[data-targetit]").on("click", function(e) {
        $(this).addClass("active");
        $(this)
            .siblings()
            .removeClass("active");
        var target = $(this).data("targetit");
        $("." + target)
            .siblings('[class^="box-"]')
            .hide();
        $("." + target).fadeIn();
        $(".tabViewList").slick("setPosition", 0);
    });

     // Accordian
 $('.accordion-list > li:not(.active) > .answer').hide();
    
 $('.accordion-list > li').click(function() {
   if ($(this).hasClass("active")) {
     $(this).removeClass("active").find(".answer").slideUp();
   } else {
     $(".accordion-list > li.active .answer").slideUp();
     $(".accordion-list > li.active").removeClass("active");
     $(this).addClass("active").find(".answer").slideDown();
   }
   return false;
 });

    $("li.dropdown-nav").hover(function() {
        $(this)
            .children("ul")
            .stop(true, false, true)
            .slideToggle(300);
    });

    $(".searchBtn").click(function() {
        $(".searchWrap").addClass("active");
        $(".overlay").fadeIn("active");
        $(".searchWrap input").focus();
        $(".searchWrap input").focusout(function(e) {
            $(this)
                .parents()
                .removeClass("active");
            $(".overlay").fadeOut("active");
            $("body").removeClass("ovr-hiddn");
        });
    });

    $(".index-slider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1
            // prevArrow: $('.prev'),
            // nextArrow: $('.next')
    });

    //     Slider For
    // $('.slider-for').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: false,
    //     fade: true,
    //     asNavFor: '.slider-nav'
    // });
    // $('.slider-nav').slick({
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     asNavFor: '.slider-for',
    //     dots: false,
    //     focusOnSelect: true
    // });

    /* Top Scroll */
    // $('body').on('click', '.scrolldown-fl', function() {
    //     goToScroll('awardSec');
    // });
});

// $(window).on("scroll touchmove", function() {
//     $("header").toggleClass("stickyOpen", $(document).scrollTop() > 200);
// });

$(window).on("load", function() {
    var currentUrl = window.location.href.substr(
        window.location.href.lastIndexOf("/") + 1
    );
    $("ul.menu li a").each(function() {
        var hrefVal = $(this).attr("href");
        if (hrefVal == currentUrl) {
            $(this).removeClass("active");
            $(this)
                .closest("li")
                .addClass("active");
            $("ul.menu li.first").removeClass("active");
        }
    });
});

/* RESPONSIVE JS */
if ($(window).width() > 1200) {
    $('.bottom-menu .has-child').hover(function() {
        $(this).children('.dropdown').stop(true,false,true).slideToggle(500);
    });

}
if ($(window).width() < 1200) {
    $('.bottom-menu').clone().insertBefore('.menuWrap .menu.d2');
    $('.menuWrap .bottom-menu li.has-child > a').append('<i class="fa fa-chevron-down"></i>')
    $('.bottom-menu-wrap').remove();

    $('.menuWrap .bottom-menu li.has-child > a').click(function(){
        $(this).closest('li.has-child').find('> .dropdown').slideToggle();
        $('i',this).toggleClass('open');
    });

}
function switchDiv() {
    var $window = $(window).outerWidth();
    if ($window <= 768) {
        $(".topAppendTxt").each(function() {
            var getdtd = $(this)
                .find(".cloneDiv")
                .clone(true);
            $(this)
                .find(".cloneDiv")
                .remove();
            $(this).append(getdtd);
        });
    }
}

function goToScroll(e) {
    $("html, body").animate({
            scrollTop: $("." + e).offset().top
        },
        1000
    );
}

$(document).ready(function(){
    $('.popdynamic').click(function(){
        $('.centercont.static').addClass('d-none');
        $('.centercont.dynamic').removeClass('d-none');
        $('.overlay').fadeIn();
        $('#popdynamic').fadeIn();
        $('.LoginPopup').addClass('price-margin');
        
        var packtitle = $(this).closest('.pckg').find(" .title").html();
        var packprice = $(this).closest('.pckg').find(".price .amount").html();
        
        
      
        var thisrel = $(this).attr('rel');
        $('input[name="pkg_key"]').val(thisrel);
        $('#popupform input#popuppackage').val(thisrel);
         $(".centercont.dynamic h3 span").html(packtitle);
        $(".centercont h4").html("In Just <span>" + packprice + "</span>");
    });
    
    
    
    $('.popbtn2').click(function(){
        $('.centercont.static').addClass('d-none');
        $('.centercont.dynamic').removeClass('d-none');
        $('.overlay').fadeIn();
        $('#popdynamic').fadeIn();
        $('.LoginPopup').addClass('price-margin');
        var packtitle = $(this).closest('.pckg2').find(".label").html();
        var packprice = $(this).closest('.pckg2').find(".price").html();
        var thisrel = $(this).attr('rel');
        $('input[name="pkg_key"]').val(thisrel);
        $('#popupform input#popuppackage').val(thisrel);
         $(".centercont.dynamic h3 span").html(packtitle);
        $(".centercont h4").html("In Just <span>" + packprice + "</span>");
    });
	
     $('.closeico2,.overlay').click(function(){
        
        $('#popstatic').fadeOut();
        $('.overlay').fadeOut();
       
        
    });
	
	$('.popstatic').click(function(){
	    $('.centercont.static').removeClass('d-none');
        $('.centercont.dynamic').addClass('d-none');
        $('#popstatic').fadeIn();
        $('.overlay').fadeIn();
        

        var orgtexts = '$99';
        //  $(".centercont h3 span").text('Start your Trademark Registration Now');
      $(".centercont h4").html("in Just <span>" + orgtexts + "</span>");
    });

    $(window).scroll(function(){
        var header = $('header'),
            scroll = $(window).scrollTop();
      
        if (scroll >= 1){
             header.addClass('sticky');
            //  $('.bottom-menu-wrap').slideUp();
        }
        if (scroll <= 0){
            header.removeClass('sticky');
            // $('.bottom-menu-wrap').slideDown();

       }
        
      });
 
      $(".custom-steps li").click(function(){
        $(".custom-steps li").removeClass('active');
        $(this).addClass('active');
        var stepNum = parseInt($(this).attr('step'));
        $('.step-body').removeClass('active');

        $('.step-body[step= '+ stepNum +']').addClass('active');
      });

      var stepNum = parseInt($('.custom-steps li.active').attr('step'));
      $('.step-body').removeClass('active');

      $('.step-body[step= '+ stepNum +']').addClass('active');
      

      var last = 0;
    $('.accordion-list.column-2 li').each(function(){
        if ($(this).offset()['top'] <= last) {
            // start of new column
            $(this).css({
                'column-break-before': 'always',
                'break-before': 'column'
            });
        }
        last = $(this).offset()['top'];
    });


    
});


$(window).on("scroll touchmove", function() {
    $(".floatbutton:not(.lorem)").toggleClass("active", $(document).scrollTop() > 200);
});


$(document).ready(function() {

$('#select_box').change(function() {
	var select = $(this).find(':selected').attr("attr");
	$(".hide").hide();
	$(".hide").prop('required', false);
	$('#' + select).show();
	$('#' + select).prop('required', true);

}).change();


$(".clickbutton").click(function() {
	$('.floatbutton').toggleClass("active");
	$('.floatbutton').addClass("lorem");
	$('.crossplus').toggleClass("rotate");
});

});





