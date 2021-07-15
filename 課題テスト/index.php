<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title>課題テーマ作成</title>
  BootStrap
  <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  自作のCSS
  <link rel="stylesheet" href="assets/css/styles.main.css"> -->
  <?php wp_head(); ?>
</head>
<body>

  <header class="gnav">
    <nav id="menubar">
      <h1><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/wordpress-logo.jpg" alt="" id="logo"></a></h1>
      <ul class="inner">
        <li><a href="">BUONO! の特徴<span>INFORMATION</span></a></li>
        <li><a href="">選べる 3 つのプラン<span>MENU</span></a></li>
        <li><a href="">対応エリア<span>ACCESS</span></a></li>
        <li><a href="">お問い合わせ<span>CONTACT</span></a></li>
      </ul>
    </nav>
    <div class="header-slack">   
      <ul class="slack-img">
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/jumbotron-1.jpg"></li>
      </ul>
      <div class="header-discription">
        <div class="container">
          <div class="col-12">
            <h2>ケータリング</h2>
            <p>1 人 1,500 円（税抜）～</p>
          </div>
        </div> 
      </div>  
    </div>
  </header>
  
  <main>
    <section id="content_1" class="sec">
      <div class="container">
        <h2 class="title">BUONO!Cataring<span>3 つの特徴</span></h2>
        <div class="row">

          <div class="col-lg-4">
            <article class="news">
              <div class="news_pic">
                <a href="#">
                  <img src="assets/img/menu/menu-1.jpg" alt="">
                </a>
              </div>
              <h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
              <div class="news_desc">
                <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
                <p><a href="#">[続きを読む]</a></p>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <article class="news">
              <div class="news_pic">
                <a href="#">
                  <img src="assets/img/menu/menu-2.jpg" alt="">
                </a>
              </div>
              <div class="news_meta">
                <ul class="post-categories">
                  <li><a href="#">お知らせ</a></li>
                </ul>
                <time class="news_time" datetime="2019-00-00">2019年00月00日</time>
              </div>
              <h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
              <div class="news_desc">
                <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
                <p><a href="#">[続きを読む]</a></p>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <article class="news">
              <div class="news_pic">
                <a href="#">
                  <img src="assets/img/menu/menu-3.jpg" alt="">
                </a>
              </div>
              <div class="news_meta">
                <ul class="post-categories">
                  <li><a href="#">お知らせ</a></li>
                </ul>
                <time class="news_time" datetime="2019-00-00">2019年00月00日</time>
              </div>
              <h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
              <div class="news_desc">
                <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
                <p><a href="#">[続きを読む]</a></p>
              </div>
            </article>
          </div>

        </div>
        <p class="sec_btn">
          <a href="#" class="btn btn-default">最新情報の一覧</a>
        </p>
      </div>    
    </section>

    <section id="content_2" class="sec">
      <div class="container">
        <h2 class="title">選べる 3 つのプラン<span>お料理や飲み物、演出などはどのプランでもカスタマイズ可能です。<br>まずはお気軽にご相談ください。</span></h2>
        <div>
          <article class="row content_2-plan">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-sx-12">
              <a href="#">
                <img src="assets/img/menu/menu-1.jpg" alt="">
              </a>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-sx-12 content_2_discription">
              <h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
              <div class="news_desc">
                <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
                <p><a href="#">[続きを読む]</a></p>
              </div>
            </div>  
          </article>
          <article class="row content_2-plan">
            <div class="col-4">
              <a href="#">
                <img src="assets/img/menu/menu-1.jpg" alt="">
              </a>
            </div>
            <div class="col-8 content_2_discription">
              <h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
              <div class="news_desc">
                <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
                <p><a href="#">[続きを読む]</a></p>
              </div>
            </div>  
          </article>
          <article class="row content_2-plan">
            <div class="col-4">
              <a href="#">
                <img src="assets/img/menu/menu-1.jpg" alt="">
              </a>
            </div>
            <div class="col-8 content_2_discription">
              <h2 class="news_title"><a href="#">タイトルタイトルタイトルタイトル</a></h2>
              <div class="news_desc">
                <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p>
                <p><a href="#">[続きを読む]</a></p>
              </div>
            </div>  
          </article>
        </div>
        <p class="sec_btn">
          <a href="" class="btn btn-default">最新情報の一覧</a>
        </p>
      </div>    
    </section>

    <section id="content_3" class="sec">
      <div class="container">
        <h2 class="title">対応エリア</h2>
        <div class="row">
          <div class="col-lg-6">
            <div class="content_3_erea">
              <div class="">
                <h3>大阪府</h3>
                <p>
                  大阪市（旭区、阿倍野区、生野区、北区、此花区、城東区、住之江区、住吉区、大正区、中央区、鶴見区、天王寺区、浪速区、西区、西成区、西淀川区、東住吉区、東成区、東淀川区、平野区、福島区、港区、都島区、淀川区） 池田市、茨木市、大阪狭山市、柏原市、門真市、堺市（北区、堺区、中区、東区、美原区）、吹田市
                </p>
              </div>
              <div class="">
                <h3>兵庫県</h3>
                <p>
                  芦屋市、尼崎市、宝塚市、西宮市
                </p>
              </div>
              <div class="">
                <p>大阪府、兵庫県内で上記に記載がない地域は要相談。</p>
              </div>
            </div>  
          </div>
          <div class="col-lg-6">
            <div class="erea_map"></div>
          </div>
        </div>
      </div>    
    </section>

    <section id="content_4" class="sec">
      <div class="container">
        <h2 class="title">お問い合わせ</h2>
        <form class="Form">
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>会社名</p>
            <input type="text" class="Form-Item-Input" placeholder="例）株式会社令和">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
            <input type="text" class="Form-Item-Input" placeholder="例）山田太郎">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
            <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
            <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
            <textarea class="Form-Item-Textarea"></textarea>
          </div>
          <input type="submit" class="Form-Btn" value="送信する">
        </form>
      </div>
    </section>

    <div class="pagetop js-pagetop">PAGE TOP</div>

  </main>

  <footer class="footer">
		<div class="container">
			<div class="footer_inner">
        <nav class="footer_nav">
          <ul class="inner nav_container">
            <li><a href="">BUONO! の特徴</a></li>
            <li><a href="">選べる 3 つのプラン</a></li>
            <li><a href="">対応エリア</a></li>
            <li><a href="">お問い合わせ</a></li>
          </ul>
        </nav>
				<div class="footer_copyright">
					<small>&copy; Tomohito Sato All rights reserved.</small>
				</div>
			</div>
		</div>
	</footer>
  
</body>
</html>