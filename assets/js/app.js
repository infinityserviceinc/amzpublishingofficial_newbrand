document.addEventListener("DOMContentLoaded", function () {

  (function ($) {
    "use strict";

    $('[href="#"]').attr("href", "javascript:;");
    var year = new Date().getFullYear();

    function SliderSet(name, slidetoShow, slidetoScroll, fade, infinite, autoplay, vertical, mobileSlidetoShow1024, mobileSlidetoShow600, mobileSlidetoShow480) {
      var $status = $('.pagingInfo');
      var $slickElement = $(name);
      $slickElement.slick({
        slidesToShow: slidetoShow,
        slidesToScroll: slidetoScroll,
        autoplaySpeed: 2000,
        lazyLoad: 'progressive',
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        arrows: true,
        fade: fade,
        vertical: vertical || false,
        autoplay: autoplay,
        speed: 1000,
        infinite: infinite,
        cssEase: "linear",
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: mobileSlidetoShow1024,//
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: mobileSlidetoShow600,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: mobileSlidetoShow480,
              slidesToScroll: 1
            }
          }
        ],
      });
    }
    function loader() {
      document.getElementById('loader').style.display = 'none';
    }
    function imgSet() {
      $('[data-imgurl]').each(function () {
        var $this = $(this),
          ele = $this.attr('src'),
          attData = $this.data('imgurl');

        if (ele !== undefined) {
          $this.attr('src', attData);
        } else {
          $this.css({
            "background-image": 'url(' + attData + ')'
          });
        }
        $this.removeAttr('data-imgurl', '');
      });
    }

    function setButtonURL() {
      Tawk_API.toggle()
    }
    function buttonURL() {
    }
    function toggleChat() {
    }

    function iplocate() {
      var key = '5XpThOAEkfgOvEJ';
      $.ajax({
        method: 'get',
        url: '//pro.ip-api.com/json/',
        data: { key: key },
        dataType : 'jsonp',   //you may use jsonp for cross origin request
        crossDomain:true,
        success: function (data) {
          if (data) {
            console.log(data);
            $('input[name=visitor_ip]').val(data.query);
            $('input[name=visitor_country]').val(data.country);
            $('input[name=visitor_city]').val(data.city);
            $('input[name=visitor_state]').val(data.regionName);
            $('input[name=visitor_isp]').val(data.isp);
            $('input[name=visitor_timezone]').val(data.timezone);
          }
        }
      });
    }

    // $("form").submit(function (e) {
    //   e.preventDefault();
    //   var formData = $(this).serialize();
    //   const redirectURL = $(this).attr('action');
    //   $.ajax({
    //     type: "POST",
    //     url: "common/process.php",
    //     data: formData,
    //     // dataType: "json",
    //     // async: false,
    //     success: function (response) {
    //         console.log(response);
    //       //var jsonData = JSON.parse(response);
    //       if (response == 'success') {
    //         //console.log(response);
    //         window.location.href = redirectURL;
    //       }
    //     }
    //   });
    // });
    var wow = new WOW(
      {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animate__animated', // animation css class (default is animated)
        offset: 0,          // distance to the element when triggering the animation (default is 0)
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true,       // act on asynchronously loaded content (default is true)
        callback: function (box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
        },
        //scrollContainer: null // optional scroll container selector, otherwise use window
      }
    );
    wow.init();
    // setTimeout(() => {
    imgSet();
    // SliderSet(name,slidetoShow,slidetoScroll,fade,infinite,autoplay,vertical,mobileSlidetoShow1024,mobileSlidetoShow600,mobileSlidetoShow480)
    SliderSet('.partnerslider', 6, 1, false, true, true, false, 5, 4, 2);
    SliderSet('.ser_slider', 4, 1, false, false, false, false, 3, 2, 1);
    SliderSet('.portfolio_slide', 4, 1, false, true, true, false, 3, 2, 1);
    SliderSet('.slide-case-studies-list', 3, 1, false, true, true, false, 3, 2, 1);
    //  SliderSet('.slide-pricing',3,1,false,true,true);
    SliderSet('.banner-slide', 1, 1, false, true, true);
    iplocate();
    $(".fancybox").fancybox();
    $('.testimonial_slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      dots: false,
      autoplaySpeed: 0,
      arrows: false,
      speed: 20000,
      cssEase: 'linear',
      Swiping: true,
      vertical: true,
      verticalSwiping: true,
      margin: 0,
      responsive: [
        {
          breakpoint: 1366,
          settings: {
            slidesToShow: 3
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2
          }
        }]
    });
    //},850);

  })(jQuery);
}); 