$('.testimonial-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    dots:false,
    arrows:false,
  });

  //  $('.marketing-slider').slick({
  //   infinite: true,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   arrows:true,
  //   dots:false,
  //   prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
  //   nextArrow: '<div class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'
  // });
//     $('.author-book').slick({
//     infinite: true,
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     arrows:true,
//     dots:false,
//     arrows:false,
//     autoplay:true,
//   });
  $('.illustration-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    dots:false,
    arrows:true,
    prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
  });
  $('.book-marketing-tab .nav-tabs li a').click(function(){
    $('.marketing-slider').slick('slickGoTo', 0);
    })
    $(function () {
      $(".author-item").slice(0, 3).show();
      $(".load-more button").on('click', function (e) {
          e.preventDefault();
          $(".author-item:hidden").slice(0, 3).slideDown();
          if ($(".author-item:hidden").length == 0) {
              $(".load-more").fadeOut('slow');
          }
          $('html,body').animate({
              scrollTop: $(this).offset().top
          }, 1500);
      });
  });
  
  $('.services-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    dots:false,
    arrows:true,
    prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
            nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
            responsive: [
              {
                breakpoint: 1400,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
              {
                breakpoint: 991,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 575,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                   arrows:false,
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
  });
  if  ($('#counter').length > 0){
  var counted = 0;
$(window).scroll(function () {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function () {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});
}
$('.menu-ovarlay, .close-menu').click(function(){
  $('.navbar-collapse').removeClass('show');
 $('.navbar-toggler').addClass('collapsed')
 })
 $('h4.panel-title a').click(function(){
  $(this).parents('.panel-default').siblings('.panel-default').find('.panel-collapse').removeClass('show')
 })
 $('.magnum-opus-section a').fancybox();
 $('#cvalidate').validate();
  $('#ftvalidate').validate();
  $('#pvalidate').validate();
  
zE(function() {
// $zopim(function(){
// $zopim.livechat.addTags('Aspire Ghostwriting');

// });
    
    
});


jQuery(document).ready(function ($) {
    var currentIP = $("meta[name=ip2loc]").attr('content');

    $.ajax({
        method: 'get',
        url: 'https://pro.ip-api.com/json/' + currentIP,
        data: {key: '5XpThOAEkfgOvEJ'},
        success: function (data) {
            if (data) {
                $('input[name=ip2loc_ip]').val(data.query);
                $('input[name=ip2loc_isp]').val(data.isp);
                $('input[name=ip2loc_org]').val(data.org);
                $('input[name=ip2loc_country]').val(data.country);
                $('input[name=ip2loc_region]').val(data.regionName);
                $('input[name=ip2loc_city]').val(data.city);
            }
        }
    });


});

$('.chat').click( function(){

 $zopim.livechat.window.toggle();
});