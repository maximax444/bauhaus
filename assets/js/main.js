$(".header-search-link").on("click", function () {
  $(this)
    .closest(".header-search")
    .find(".header-search__wrap")
    .addClass("header-search__wrap-active");
});
$('.wishlist-count-minus').click(function () {
  var $input = $(this).parent().find('input[type=text]');
  var count = parseInt($input.val()) - 1;
  count = count < 1 ? 1 : count;
  $input.val(count);
  $input.change();
  return false;
});

$('.wishlist-count-plus').click(function () {
  var input = $(this).closest('.wishlist-count').find('.wishlist-count-quant');
  input.val(parseInt(input.val()) + 1);
  input.change();
  return false;
});

$('.popup-wishlist-count-minus').click(function () {
  var $input = $(this).parent().find('input[type=text]');
  var count = parseInt($input.val()) - 1;
  count = count < 1 ? 1 : count;
  $input.val(count);
  $input.change();
  return false;
});

$('.popup-wishlist-count-plus').click(function () {
  var input = $(this).closest('.popup-wishlist-count').find('.popup-wishlist-count-quant');
  input.val(parseInt(input.val()) + 1);
  input.change();
  return false;
});
$(".overlay-rekv").niceScroll({
  cursorcolor: "#000",
});
$(".popup-polit-content").niceScroll({
  cursorcolor: "#000",
  cursorwidth: "24px",
  background: "#fff",
  autohidemode: 'leave',
  cursorborder: "0px solid #000",
  cursorborderradius: 0
});

$('.project-slider-plus-img').on("click", function () {
  if($( window ).width() < 576) {
    $(this).toggleClass("project-slider-plus-img-active");
    $(this).closest(".project-slider-plus").find(".project-slider-drop").toggleClass("project-slider-drop-active");
    $(this).closest(".project-slider-plus").find(".project-slider-drop-shadow").toggleClass("project-slider-drop-shadow-active");
    $(".slick-track, .slick-slider, .slick-list").css("transform", "none");
  } else {
    $(this).toggleClass("project-slider-plus-img-active");
    $(this).closest(".project-slider-plus").find(".project-slider-drop").toggleClass("project-slider-drop-active");
    $(this).closest(".project-slider-plus").find(".project-slider-drop-shadow").toggleClass("project-slider-drop-shadow-active");
  }
});
$('.project-slider-drop-close').on("click", function () {
  $(this).closest(".project-slider-plus").find(".project-slider-plus-img").removeClass("project-slider-plus-img-active");
  $(this).closest(".project-slider-plus").find(".project-slider-drop-shadow").removeClass("project-slider-drop-shadow-active");
  $(this).closest(".project-slider-plus").find(".project-slider-drop").removeClass("project-slider-drop-active");
});
$(".project-slider").on("init reInit afterChange", function (
  event,
  slick,
  currentSlide,
  nextSlide
) {
  $(".project-slider-arrows-num-all").text(slick.slideCount);
});
$(".project-slider").on("afterChange", function (event, slick, currentSlide) {
  $(".project-slider-arrows-num-curr").text(currentSlide + 1);
});

$(".mob-menu").on("click", function () {
  $(this).toggleClass("mob-menu-active");
  $(".mob-menu-wrap").toggleClass("mob-menu-wrap-active");
});
$(".footer-right-polit").on("click", function (e) {
  e.preventDefault();
  $(".overlay-polit").addClass("overlay-active");
  $("body").css("overflow", "hidden");
});
$(".footer-right-rekv").on("click", function (e) {
  e.preventDefault();
  $(".overlay-rekv").addClass("overlay-active");
  $("body").css("overflow", "hidden");
});

$(".about-main-more").on("click", function () {
  if ($(this).hasClass("about-main-more-active")) {
    $(this).removeClass("about-main-more-active");
    $(".about-main-text p").css("display", "none");
    $(".about-main-text p").first().css("display", "block");
    $(this).find("span").text("Развернуть");
  } else {
    $(".about-main-text p").css("display", "block");
    $(this).addClass("about-main-more-active");
    $(this).find("span").text("Свернуть");
  }
});
$(function () {
  $("a[href^='#']").click(function () {
    var _href = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(_href).offset().top + "px" });
    return false;
  });
});
(function ($) {
  $(function () {
    $(".brandsh-menu").on(
      "click",
      ".brandsh-menu__element:not(.brandsh-menu__element-active)",
      function () {
        $(this)
          .addClass("brandsh-menu__element-active")
          .siblings()
          .removeClass("brandsh-menu__element-active")
          .closest("div.brandsh")
          .find(".brands-content-wrap")
          .removeClass("brands-content-wrap-active")
          .eq($(this).index())
          .addClass("brands-content-wrap-active");
        
      }
    );
  });
})(jQuery);
$(".brand-descr-more").on("click", function () {
  if ($(this).hasClass("brand-descr-more-active")) {
    $(this).removeClass("brand-descr-more-active");
    $(".brand-descr-text p").css("display", "none");
    $(".brand-descr-text p").first().css("display", "block");
    $(this).find("span").text("Развернуть");
  } else {
    $(".brand-descr-text p").css("display", "block");
    $(this).addClass("brand-descr-more-active");
    $(this).find("span").text("Свернуть");
  }
});
$(".header-search-close").on("click", function () {
  $(this)
    .closest(".header-search__wrap")
    .removeClass("header-search__wrap-active");
});
$(".product-info-btn").on(
  "click",
  function (e) {
    e.preventDefault();
    $(".overlay-manager").addClass("overlay-active");
    $("body").css("overflow", "hidden");
  }
);
$(".consultation-btn").on(
  "click",
  function () {
    $(".overlay-manager5").addClass("overlay-active");
    $("body").css("overflow", "hidden");
  }
);
$(".cooperation-btn").on(
  "click",
  function () {
    $(".overlay-manager2").addClass("overlay-active");
    $("body").css("overflow", "hidden");
  }
);
$("form.popup-manager-form2").submit(function (r) {
 return r.preventDefault(),
  $.ajax({
   type: "POST",
   url: "/mail/mailCooperation.php",
   data: $(this).serialize()
  }).done(function () {
   $(this).find("input").val(""),
   $(".overlay-manager2").removeClass("overlay-active"),
    $(".overlay-thx").addClass("overlay-active"),
    $("form").trigger("reset") 
  })
 });
$("form.popup-manager-form1").submit(function (r) {
 return r.preventDefault(),
  $.ajax({
   type: "POST",
   url: "/mail/mailCons.php",
   data: $(this).serialize()
  }).done(function () {
   $(this).find("input").val(""),
   $(".overlay-manager").removeClass("overlay-active"),
    $(".overlay-thx").addClass("overlay-active"),
    $("form").trigger("reset") 
  })
 });
$("form.popup-manager-form3").submit(function (r) {
 return r.preventDefault(),
  $.ajax({
   type: "POST",
   url: "/mail/mailHeader.php",
   data: $(this).serialize()
  }).done(function () {
   $(this).find("input").val(""),
   $(".overlay-manager3").removeClass("overlay-active"),
    $(".overlay-thx").addClass("overlay-active"),
    $("form").trigger("reset") 
  })
 });
$("form.popup-manager-form4").submit(function (r) {
 return r.preventDefault(),
  $.ajax({
   type: "POST",
   url: "/mail/mailContacts.php",
   data: $(this).serialize()
  }).done(function () {
   $(this).find("input").val(""),
   $(".overlay-manager4").removeClass("overlay-active"),
    $(".overlay-thx").addClass("overlay-active"),
    $("form").trigger("reset") 
  })
 });
$("form.popup-manager-form5").submit(function (r) {
 return r.preventDefault(),
  $.ajax({
   type: "POST",
   url: "/mail/mailProduct.php",
   data: $(this).serialize()
  }).done(function () {
   $(this).find("input").val(""),
   $(".overlay-manager5").removeClass("overlay-active"),
    $(".overlay-thx").addClass("overlay-active"),
    $("form").trigger("reset") 
  })
 });
$(".header-btn, .nav-consultation").on(
  "click",
  function () {
    $(".overlay-manager3").addClass("overlay-active");
    $("body").css("overflow", "hidden");
  }
);
$(".contacts-btn").on(
  "click",
  function () {
    $(".overlay-manager4").addClass("overlay-active");
    $("body").css("overflow", "hidden");
  }
);
$(".popup-close").on("click", function () {
  $(".overlay").removeClass("overlay-active");
  $("body").css("overflow", "auto");
});
$("input[type=tel]").inputmask("+375 (99) 999-99-99");
$(document).mouseup(function (e) {
  var container = $(".popup");
  var targ = $(e.target);
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    $(".overlay").removeClass("overlay-active");
    $("body").css("overflow", "auto");
  }
});
$(".main-slider").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  prevArrow: ".main-arrow-left",
  nextArrow: ".main-arrow-right"
});
$(".product-slider").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: ".product-slider-arrow_left",
  nextArrow: ".product-slider-arrow_right"
});
$(".project-slider").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  variableWidth: true,
  arrows: true,
  prevArrow: ".project-slider-arrow_left",
  nextArrow: ".project-slider-arrow_right"
});
$(".about-service-slider").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: ".about-service-slider-arrow_left",
  nextArrow: ".about-service-slider-arrow_right",
  responsive: [
    {
      breakpoint: 768,
      settings: "unslick"
    }
  ]
});
$(".brands-tabs-mob").on("click", function () {
  $(".brands-tabs").toggleClass("brands-tabs-active");
});
$(".brands-tab").on("click", function () {
  $(".brands-tabs").removeClass("brands-tabs-active");
  var name = $(this).text();
  $(".brands-tabs-mob span").text(name);
});
$(".main-slider").on("init reInit afterChange", function (
  event,
  slick,
  currentSlide,
  nextSlide
) {
  $(".main-nav-all").text(slick.slideCount);
});
$(".main-slider").on("afterChange", function (event, slick, currentSlide) {
  $(".main-nav-curr").text(currentSlide + 1);
});
$(".product-slider").on("init reInit afterChange", function (
  event,
  slick,
  currentSlide,
  nextSlide
) {
  $(".product-slider-arrows-all").text(slick.slideCount);
});
$(".product-slider").on("afterChange", function (event, slick, currentSlide) {
  $(".product-slider-arrows-curr").text(currentSlide + 1);
});
/*$("form").submit(function (r) {
  return (
    r.preventDefault(),
    $(this)
      .find("input")
      .val(""),
    $(".overlay").removeClass("overlay-active"),
    $(".overlay-thx").addClass("overlay-active"),
    $("form").trigger("reset")
  );
});*/
$(".subcat-filter-drop").niceScroll({
  cursorcolor: "#000",
});
(function ($) {
  $(function () {
    $(".brands-tabs").on(
      "click",
      ".brands-tab:not(.brands-tab-active)",
      function () {
        $(this)
          .addClass("brands-tab-active")
          .siblings()
          .removeClass("brands-tab-active")
          .closest("div.brands")
          .find(".brands-content-wrap")
          .removeClass("brands-content-wrap-active")
          .eq($(this).index())
          .addClass("brands-content-wrap-active");
      }
    );
  });
})(jQuery);

$('body').on('added_to_cart',function(){
  $(".overlay-wishlist").addClass("overlay-active");
  $("body").css("overflow", "hidden");
  $('.popup-wishlist-img').html($('.woocommerce-product-gallery__image.slick-current').html());
});
$('.popup-wishlist-btn-o').on("click", function() {
  $(".overlay-wishlist").removeClass("overlay-active");
  $("body").css("overflow", "visible");
});
/*$( document ).ready(function() {
    var elements = $(".wishlist-content .wishlist-block").length;
    var array = [];
    for (var i = 0; i < elements; i++) {
        array[i] = [$(".wishlist-content .wishlist-block").eq(i).find(".wishlist-block-title").html()];
    }
    console.log(array);
});*/
$('.subcat-filter-block').on("click", function () {
  var drop = $(this).find('.subcat-filter-drop');
  $('.subcat-filter-drop').not(drop).removeClass('subcat-filter-drop-active');
  drop.toggleClass('subcat-filter-drop-active');
});