(function ($) {
  $(document).ready(function () {
    /* AOS Animate */
    AOS.init({ once: true });
    $("#owl_product_related").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 4,
        },
      },
    });
  });

  $("#sliderBlog").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
      "<i class='far fa-arrow-left'></i>",
      "<i class='far fa-arrow-right'></i>",
    ],
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  $("#owl-atilier").owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 2,
      },
    },
  });
  $("#banner-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  $("#feedback_owl_tow").owlCarousel({
    items: 20,
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayHoverPause: true,
    slideTransition: "linear",
    autoplayTimeout: 5000,
    autoplaySpeed: 1000,
    // autoplayHoverPause: false,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  // Change input file type
  $(document).ready(function () {
    $("#upload_avatar").change(function () {
      var i = $(this).prev("label").clone();
      var file = $("#upload_avatar")[0].files[0].name;
      $(this).prev("label").text(file);
    });
  });

  // Preview image upload
  const input = document.getElementById("upload_avatar");
  const image = document.getElementById("img-preview");

  if (input) {
    input.addEventListener("change", (e) => {
      if (e.target.files.length) {
        const src = URL.createObjectURL(e.target.files[0]);
        image.src = src;
      }
    });
  }
  // Button confirm
  $(".btn-submit").on("click", toggleBtn);

  function toggleBtn() {
    btn = this;
    btn.classList.add("is-active");

    setTimeout(function () {
      btn.classList.remove("is-active");
    }, 2500);
  }

  /* AOS Animate */
  AOS.init({ once: true });
  /* Show menu mobile */
  $("#mobile-menu-button").click(function () {
    $(this).toggleClass("active");
    $(".header-menu").toggleClass("active");
  });

  // auto scroll to element
  if (window.matchMedia("(min-width: 1720px)").matches) {
    var target = $(".section__breadcrumb");
    if ($(".section__breadcrumb").length) {
      $("html,body").animate(
        {
          scrollTop: target.offset().top - 163,
        },
        20
      );
      return false;
    }
  }
  if (window.matchMedia("(max-width: 768px)").matches) {
    var target = $(".section__breadcrumb");
    if ($(".section__breadcrumb").length) {
      $("html,body").animate(
        {
          scrollTop: target.offset().top - 143,
        },
        20
      );
      return false;
    }
  }

  //lướt chuột cố định menu
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".header-bottom").addClass("header-bottom_active");
    } else {
      $(".header-bottom").removeClass("header-bottom_active");
    }
  });
})(jQuery);

jQuery(function ($) {
  if (!String.prototype.getDecimals) {
    String.prototype.getDecimals = function () {
      var num = this,
        match = ("" + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
      if (!match) {
        return 0;
      }
      return Math.max(
        0,
        (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0)
      );
    };
  }
  // Quantity "plus" and "minus" buttons
  $(document.body).on("click", ".plus, .minus", function () {
    var $qty = $(this).closest(".quantity").find(".qty"),
      currentVal = parseFloat($qty.val()),
      max = parseFloat($qty.attr("max")),
      min = parseFloat($qty.attr("min")),
      step = $qty.attr("step");

    // Format values
    if (!currentVal || currentVal === "" || currentVal === "NaN")
      currentVal = 0;
    if (max === "" || max === "NaN") max = "";
    if (min === "" || min === "NaN") min = 0;
    if (
      step === "any" ||
      step === "" ||
      step === undefined ||
      parseFloat(step) === "NaN"
    )
      step = 1;

    // Change the value
    if ($(this).is(".plus")) {
      if (max && currentVal >= max) {
        $qty.val(max);
      } else {
        $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
      }
    } else {
      if (min && currentVal <= min) {
        $qty.val(min);
      } else if (currentVal > 0) {
        $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
      }
    }

    // Trigger change event
    $qty.trigger("change");
  });
});
