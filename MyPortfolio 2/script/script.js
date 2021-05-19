// -------------------- Loadingイベント -------------------

//テキストのカウントアップ+バーの設定
var bar = new ProgressBar.Line(splash_text, {//id名を指定
  easing: 'easeInOut',//アニメーション効果linear、easeIn、easeOut、easeInOutが指定可能
  duration: 2000,//時間指定(1000＝1秒)
  strokeWidth: 0.2,//進捗ゲージの太さ
  color: '#555',//進捗ゲージのカラー
  trailWidth: 0.2,//ゲージベースの線の太さ
  trailColor: '#bbb',//ゲージベースの線のカラー
  text: {//テキストの形状を直接指定       
    style: {//天地中央に配置
      position: 'absolute',
      left: '50%',
      top: '50%',
      padding: '0',
      margin: '-30px 0 0 0',//バーより上に配置
      transform:'translate(-50%,-50%)',
      fontSize:'1rem',
      color: '#fff',
    },
    autoStyleContainer: false //自動付与のスタイルを切る
  },
  step: function(state, bar) {
    bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
  }
});

//アニメーションスタート
bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
  $("#splash_text").fadeOut(10);//フェイドアウトでローディングテキストを削除
  $(".loader_cover-up").addClass("coveranime");//カバーが上に上がるクラス追加
  $(".loader_cover-down").addClass("coveranime");//カバーが下に下がるクラス追加
  $("#splash").fadeOut();//#splashエリアをフェードアウト
});


//-------------------- 追従メニュー --------------------

//基準点の準備
var elemTop = [];

//現在地を取得するための設定を関数でまとめる
function PositionCheck(){
    //.scroll-pointというクラス名がついたエリアの位置を取得する設定
  $(".scroll-point").each(function(i) {//.scroll-pointクラスがついたエリアからトップまでの距離を計算して設定
    elemTop[i] = $(this).offset().top-2;//それぞれのscroll-point位置[i]（５箇所）のid上部の距離を取得
  });
}
console.log(elemTop)

//ナビゲーションに現在地のクラスをつけるための設定
function FollowAnime() {//スクロールした際のナビゲーションの関数にまとめる
  var Followscroll = $(window).scrollTop();
  var NavElem = $("#g-nav li");//ナビゲーションのliの何番目かを定義するための準備
  $("#g-nav li").removeClass('current');//全てのナビゲーションの現在地クラスを除去
  if(Followscroll >= 0 && Followscroll < elemTop[1]) {//スクロール値が0以上 .scroll-point 1つめ（aboutエリア）の高さ未満
      $(NavElem[0]).addClass('current');//1つめのliに現在地クラスを付与
    }
    else if(Followscroll >= elemTop[1] && Followscroll < elemTop[2]) {//.scroll-point 1つめ（aboutエリア）以上.scroll-point 2つめ（skillエリア）未満
      $(NavElem[1]).addClass('current');//2つめのliに現在地クラスを付与
    } 
    else if(Followscroll >= elemTop[2] && Followscroll < elemTop[3]) {//.scroll-point 2つめ（skillエリア）以上.scroll-point 3つめ（serviceエリア）未満
     $(NavElem[2]).addClass('current');//3つめのliに現在地クラスを付与
    } 
    else if(Followscroll >= elemTop[3] && Followscroll < elemTop[4]) {//.scroll-point 3つめ（serviceエリア）以上.scroll-point 4つめ（contactエリア）未満
     $(NavElem[3]).addClass('current');//4つめのliに現在地クラスを付与
    } 
    else if(Followscroll >= elemTop[4]) {// .scroll-point 4つめ（contactエリア）以上
      $(NavElem[4]).addClass('current');//5つめのliに現在地クラスを付与
    } 
}

//ナビゲーションをクリックした際のスムーススクロール
$('#g-nav a').click(function () {
  var elmHash = $(this).attr('href'); //hrefの内容を取得（リンクされているidの値を取得）
  var pos = $(elmHash).offset().top;  //id上部の距離を取得
  $('body,html').animate({scrollTop: pos}, 500);//取得した位置にスクロール※数値が大きいほどゆっくりスクロール
  return false;//リンクの無効化
});

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  PositionCheck();/* 現在地を取得する関数を呼ぶ*/
  FollowAnime();/* ナビゲーションに現在地のクラスをつけるための関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  PositionCheck();/* 現在地を取得する関数を呼ぶ*/
  FollowAnime();/* ナビゲーションに現在地のクラスをつけるための関数を呼ぶ*/
});

$(window).resize(function() {
  //リサイズされたときの処理
  PositionCheck()
});


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


// -------------------- scrollイベント --------------------

$(function () {//処理内容
  $(window).scroll(function () {//スクロールした時
      const wHeight = $(window).height();//ブラウザの表示領域の高さ取得
      const scrollAnime = $(window).scrollTop();//スクロールした時の位置を取得し変数「scrollAnime」へ代入
      $('.scrollanime_Up').each(function () {//$(セレクタ)に対しての繰り返し処理内容
          const targetPosition = $(this).offset().top;//指定要素(.scrollanime_Up)の縦座標を取得
          if(scrollAnime > targetPosition - wHeight + 60) {//スクロール位置 > 対象となる要素の縦位置 - 表示領域の高さ + 60
            $(this).addClass("fadeInUp");//(.scrollanime)へfadeInUpクラスを付与
          } else if(scrollAnime < targetPosition - wHeight) {
            $(this).removeClass("fadeInUp");//画面外に出たらfadeInUpクラスを除去
          }
      });
      $('.scrollanime_Right').each(function () {//上記に同じフェードインRightパターン
          const targetPosition = $(this).offset().top;
          if(scrollAnime > targetPosition - wHeight + 100) {
            $(this).addClass("fadeInRight");
          } else if(scrollAnime < targetPosition - wHeight) {
            $(this).removeClass("fadeInRight");
          }
      });
      $('.scrollanime_Down').each(function () {//上記に同じフェードインDownパターン
          const targetPosition = $(this).offset().top;
          if(scrollAnime > targetPosition - wHeight + 60) {
            $(this).addClass("fadeInDown");
          } else if(scrollAnime < targetPosition - wHeight) {
            $(this).removeClass("fadeInDown");
          }
      });
      $('.scrollanime_Left').each(function () {//上記に同じフェードインLeftパターン
          const targetPosition = $(this).offset().top;
          if(scrollAnime > targetPosition - wHeight + 60) {
            $(this).addClass("fadeInLeft");
          } else if(scrollAnime < targetPosition - wHeight) {
            $(this).removeClass("fadeInLeft");
          }
      });
  });
});

// -------------------- skill グラフ処理 --------------------
Chart.plugins.register({
  afterDatasetsDraw: function (chart, easing) {
    var ctx = chart.ctx;

  chart.data.datasets.forEach(function (dataset, i) {
    var meta = chart.getDatasetMeta(i);
    if (!meta.hidden) {
      meta.data.forEach(function (element, index) {
        ctx.fillStyle = 'rgb(0,0,0,0.8)';//文字色の色
        var fontSize = 16;//フォントサイズ
        var fontStyle = 'normal';//フォントスタイル
        var fontFamily = 'serif';//フォントファミリー
        ctx.font = Chart.helpers.fontString(fontSize,fontStyle,fontFamily);
        var dataString = dataset.data[index].toString();

        // //値の位置
        // ctx.textAlign ='center';//テキストを中央寄せ
        ctx.textBaseline ='middle';//テキストベースラインの位置を中央寄せ

        var padding = 5;//余白
        var position = element.tooltipPosition();
        ctx.fillText(dataString,position.x,position.y - (fontSize / 2) - padding);

      });
    }
  });
  }
});

$('#chart').on('inview',function(event,isInView) {
if(isInView) {

var ctx = document.getElementById("chart");//グラフを描画したい場所のid
var chart = new Chart(ctx,{
  type:'horizontalBar',//グラフのタイプ
  data:{//グラフのデータ
    labels:["HTML5","CSS","JavaScript","jQuery",],//データの名前
    datasets: [{
      label:"Skill-Bar",//グラフのタイトル
      backgroundColor:["rgba(255, 0, 0, 0.8)","rgba(0, 0, 255, 0.8)","rgba(255, 255, 0, 0.8)","rgba(0, 200, 255, 0.8)",],//グラフの色
      data:["70","65","50","50",]//
    }]
  },
  options:{//グラフのオプション
    legend:{
      display: false//グラフの説明を非表示
    },
    tooltips:{//グラフへカーソルを合わせたさいの詳細表示の設定
      callbacks:{
        label: function(tooltipItems, data){
          if(tooltipItems.xLabel == "0"){
            return "";
          }
          return data.datasets[tooltipItems.datasetIndex].label + ":" + tooltipItems.xLabel + "%";
        }
      }
    },
    
    title: {//上部タイトル表示の設定
      display: false,
      fontSize: 10,
      text:'単位：％'
    },

    animation: {
      duration:4000,
    },
    
    scales: {
      xAxes:[
        {
          ticks:{
            beginAtZero:true,
            suggested:100,
            suggestedMin:0,
            stepSize:50,
            fontSize:16,
            fontStyle:"italic",
            fontColor:"black",
            callback: function(value){
              return value + '％'
            }
          }
        }
      ],
      yAxes:[
        {
          ticks:{
            fontSize:16,
            fontStyle:"italic",
            fontColor:"black",
          },
          gridLines: {
            color:"rgba(0,0,0,0)",
          }
        }
      ]
    }
  }
});

}
});
