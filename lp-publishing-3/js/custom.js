// setInterval(function () {
//  $('#modal').modal('show');
//      }, 5000);
$(document).ready(function () {
  var y = 1;

  setInterval(function () {
    if (y == 1) {
      y = 0;
      $('#modal').show();
    }
  }, 7000);

});

$(document).on('click', '.new-custom-close', function () {
  $('#modal').hide();
});


function showPopup() {
  $(document).ready(function () {
    $("#modal").show();
  });
  return false;
};




$('.book-slider .owl-carousel').owlCarousel({
  loop: true,
  margin: 40,
  autoplayHoverPause: false,
  autoplayTimeout: 4000,
  autoplay: true,
  pagination: false,
  dots: false,
  nav: true,
  navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
  responsive: {
    0: {
      items: 3
    },
    600: {
      items: 5
    },
    1000: {
      items: 6
    }
  }
});


$('.owl-testimonial').owlCarousel({
  loop: true,
  margin: 40,
  autoplayHoverPause: false,
  autoplayTimeout: 9000,
  autoplay: true,
  pagination: false,
  dots: false,
  nav: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});





$('.owl-number').owlCarousel({
  loop: true,
  nav: false,
  dots: false,
  responsiveClass: true,
  autoplay: true,
  autoplayTimeout: 9000,
  autoplaySpeed: 800,
  margin: 10,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 4,
    },
    360: {
      items: 1
    }
  }
});


$(".form-wrap .floating-form-btn").click(function () {
  $(this).parents(".form-wrap").toggleClass("open")
})



$(document).ready(function () {
  $("ul#tabs li").click(function (e) {
    if (!$(this).hasClass("active")) {
      var tabNum = $(this).index();
      var nthChild = tabNum + 1;
      $("ul#tabs li.active").removeClass("active");
      $(this).addClass("active");
      $("ul#tab li.active").removeClass("active");
      $("ul#tab li:nth-child(" + nthChild + ")").addClass("active");
    }
  });

});


$(function() {
  new LazyLoad({
      elements_selector: ".lazy"
  })
});


var TxtRotate = function (el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function () {
    that.tick();
  }, delta);
};

// window.onload = function () {
//   var elements = document.getElementsByClassName('txt-rotate');
//   for (var i = 0; i < elements.length; i++) {
//     var toRotate = elements[i].getAttribute('data-rotate');
//     var period = elements[i].getAttribute('data-period');
//     if (toRotate) {
//       new TxtRotate(elements[i], JSON.parse(toRotate), period);
//     }
//   }
  // INJECT CSS
//   var css = document.createElement("style");
//   css.type = "text/css";
//   css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #FD9A00 }";
//   document.body.appendChild(css);
// };




function formSubmissionHandler(form) {
  
  var submitBtn = form.find('.submit-btn');
  form.find('.form-input').on('input', function () {
    if ($(this).val() !== '') $(this).closest('.form-field').removeClass('has-error')
  })
  
  submitBtn.on('click', function (e) {
    e.preventDefault();
    var serializedData = $(form).serializeArray();
    var hasValidationErrors = false;
    var formData = {};
    formData.Landing_Page= window.location.href
    serializedData.forEach(function (field) {
      Object.assign(formData, { [field.name]: field.value })
      if (field.value === '') {
        form.find('.form-input[name="' + field.name + '"]').closest('.form-field').addClass('has-error')
        hasValidationErrors = true;
      }
    })
  

    if (!hasValidationErrors) {
      $param1 = formData.name;
      
      $.ajax({
        type: "POST",
        url: "https://area.amzpublisherspro.com/V1/auth/FPCustomerSignUp",
        data: formData,
        success: function (response) {
          form[0].reset();
          console.log("testing",$param1);
          var paramValue = formData.name;
          window.location.href ='/thank-you/?Name='+paramValue;
        },
      });
    }
  })
}

formSubmissionHandler($('#landing-page-popup'))
formSubmissionHandler($('#landing-banner-from'))
formSubmissionHandler($('#landing-right-from'))
formSubmissionHandler($('#landing-footer-from'))



