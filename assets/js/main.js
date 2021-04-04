jQuery(function ($) {
  var value = 0;
  var windowWidth = $(window).width();
  //トップから横にスクロールするスライドの数量
  var slideQuantity = 5;
  //transformのscale用の数値
  var point = (windowWidth * (slideQuantity - 1)) / 100;

  //マウスホイールイベント
  $("html, body").on("mousewheel", function (event, delta) {
    if (delta < 0) {
      value -= 10;
    } else if (delta > 0) {
      value += 10;
    }
    if (windowWidth > 768) {
      sideScroll();
      showWorks();
    }
    $(".scroll-container,js-scroll-top").css("transition", "");
    return;
  });

  $(".js-scroll-works").click(function () {
    $(".scroll-container").css("transition", "2s");
    while (Math.abs(value) <= windowWidth * (slideQuantity - 1)) {
      value -= 100;
      sideScroll();
    }
  });
  $(".js-scroll-top").click(function () {
    $(".scroll-container").css("transition", "2s");
    while (value < 0) {
      value += 100;
      sideScroll();
      showWorks();
    }
  });

  function sideScroll() {
    if (value < 0) {
      var scale = Math.abs(value / point / 100);
      $(".scroll-container").css("left", value);
      $("#js-bar").css("transform", "scaleX(" + scale + ")");
    } else {
      value = 0;
    }
  }

  function showWorks() {
    if (Math.abs(value) > windowWidth * (slideQuantity - 1)) {
      value = -(windowWidth * (slideQuantity - 1));
      $(".works,.footer,.scroll-arrow").addClass("js-active");
    } else {
      $(".works,.footer,.scroll-arrow").removeClass("js-active");
    }
  }
});
