
// -------------------- navイベント --------------------

$(".openbtn").click(function () {//ボタンをクリックした時
  $(this).toggleClass('active');//ボタン自身に activeクラスを付与
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    $(".circle-bg").toggleClass('circleactive');//丸背景にcircleactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去
    $(".circle-bg").removeClass('circleactive');//丸背景のcircleactiveクラスを除去
});

jQuery(function($) {
  // PageTop
  $('.js-pagetop').on('click', function(){
      $("html, body").animate({
          scrollTop: 0
      }, 500);
  });
});