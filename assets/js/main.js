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
          items: 2,
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

  $("#modal_check_input_billing .item #modal_check_input_billing_button").on(
    "click",
    function () {
      $("#modal_check_input_billing .item .content p").remove();
      $("#modal_check_input_billing").hide();
    }
  );

  variation_product_quantity = $(".input-text.qty").val();

  var add_to_cart_product_href, buy_now_product_href;
  add_to_cart_product_href = $("#add-to-cart-single").attr("href");
  buy_now_product_href = $("#buy-now-single").attr("href");

  $(".input_quantity .input_qty_down").on("click", function () {
    var down = $(".input_quantity input").val();
    if (down == 1) {
      $(".input_quantity input").val("1");
    } else {
      var preVal = down - 1;
      $(".input_quantity input").val(preVal);
      variation_product_quantity = $(".input-text.qty").val();
      $("#add-to-cart-single-variable").attr(
        "href",
        add_to_cart_variation_product_href +
          "?add-to-cart=" +
          variation_product_value +
          "&quantity=" +
          variation_product_quantity
      );
      $("#buy-now-single-variable").attr(
        "href",
        buy_now_variation_product_href +
          "?add-to-cart=" +
          variation_product_value +
          "&quantity=" +
          variation_product_quantity
      );

      $("#add-to-cart-single").attr(
        "href",
        add_to_cart_product_href + "&quantity=" + variation_product_quantity
      );
      $("#buy-now-single").attr(
        "href",
        buy_now_product_href + "&quantity=" + variation_product_quantity
      );
    }
  });

  $(".input_quantity .input_qty_up").on("click", function () {
    var up = $(".input_quantity input").val();

    if (up == 999) {
      $(".input_quantity input").val("999");
    } else {
      var nextVal = ++up;
      $(".input_quantity input").val(nextVal);
      variation_product_quantity = $(".input-text.qty").val();
      $("#add-to-cart-single-variable").attr(
        "href",
        add_to_cart_variation_product_href +
          "?add-to-cart=" +
          variation_product_value +
          "&quantity=" +
          variation_product_quantity
      );
      $("#buy-now-single-variable").attr(
        "href",
        buy_now_variation_product_href +
          "?add-to-cart=" +
          variation_product_value +
          "&quantity=" +
          variation_product_quantity
      );

      $("#add-to-cart-single").attr(
        "href",
        add_to_cart_product_href + "&quantity=" + variation_product_quantity
      );
      $("#buy-now-single").attr(
        "href",
        buy_now_product_href + "&quantity=" + variation_product_quantity
      );
    }
  });

  var variation_product_value,
    variation_product_quantity,
    add_to_cart_variation_product_href,
    buy_now_variation_product_href;

  add_to_cart_variation_product_href = $("#add-to-cart-single-variable").attr(
    "href"
  );
  buy_now_variation_product_href = $("#buy-now-single-variable").attr("href");

  $(".variation_id").change(function () {
    variation_product_value = $(this).val();
    $("#add-to-cart-single-variable").attr(
      "href",
      add_to_cart_variation_product_href +
        "?add-to-cart=" +
        variation_product_value +
        "&quantity=" +
        variation_product_quantity
    );
    $("#buy-now-single-variable").attr(
      "href",
      buy_now_variation_product_href +
        "?add-to-cart=" +
        variation_product_value +
        "&quantity=" +
        variation_product_quantity
    );
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

  // scroll effect header , bottomToTop , Btn-call
  window.onscroll = function () {
    myFunction();
  };
  var toTop = document.getElementById("bottom_to_top");

  function myFunction() {
    if (window.scrollY >= 300) {
      toTop.style.bottom = "30px";

      if (window.matchMedia("(max-width: 576px)").matches) {
        $(".header").css({
          "box-shadow": "0 -6px 20px 6px #cfcfcf",
        });
      } else {
        $(".header").css({
          top: "-47px",
          "box-shadow": "0 -6px 20px 6px #cfcfcf",
        });
      }
    } else {
      toTop.style.bottom = "-100px";
      $(".header").css({
        top: "0px",
        "box-shadow": "unset",
      });
    }
    this.oldScroll = this.scrollY;
  }
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
