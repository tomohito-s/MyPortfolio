<?php
  session_start();
  $mode = 'input';
  $errmessage = array();
  if( isset($_POST['back']) && $_POST['back'] ){
    // 何もしない
  } else if( isset($_POST['confirm']) && $_POST['confirm'] ){
      // 確認画面
    if( !$_POST['fullname'] ) {
        $errmessage[] = "名前を入力してください";
    } else if( mb_strlen($_POST['fullname']) > 100 ){
        $errmessage[] = "名前は100文字以内にしてください";
    }
      $_SESSION['fullname'] = htmlspecialchars($_POST['fullname'], ENT_QUOTES);

      if( !$_POST['email'] ) {
          $errmessage[] = "Eメールを入力してください";
      } else if( mb_strlen($_POST['email']) > 200 ){
          $errmessage[] = "Eメールは200文字以内にしてください";
    } else if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        $errmessage[] = "メールアドレスが不正です";
      }
      $_SESSION['email']    = htmlspecialchars($_POST['email'], ENT_QUOTES);

      if( !$_POST['message'] ){
          $errmessage[] = "お問い合わせ内容を入力してください";
      } else if( mb_strlen($_POST['message']) > 500 ){
          $errmessage[] = "お問い合わせ内容は500文字以内にしてください";
      }
      $_SESSION['message'] = htmlspecialchars($_POST['message'], ENT_QUOTES);

      if( $errmessage ){
        $mode = 'input';
    } else {
        $mode = 'confirm';
    }
  } else if( isset($_POST['send']) && $_POST['send'] ){
    // 送信ボタンを押したとき
    $message  = "お問い合わせを受け付けました \r\n"
              . "名前: " . $_SESSION['fullname'] . "\r\n"
              . "email: " . $_SESSION['email'] . "\r\n"
              . "お問い合わせ内容:\r\n"
              . preg_replace("/\r\n|\r|\n/", "\r\n", $_SESSION['message']);
      mail($_SESSION['email'],'お問い合わせありがとうございます',$message);
    mail('contact@s-tomohito.sakura.ne.jp','お問い合わせありがとうございます',$message);
    $_SESSION = array();
    $mode = 'send';
  } else {
    $_SESSION['fullname'] = "";
    $_SESSION['email']    = "";
    $_SESSION['message']  = "";
  }
?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyPortfolio
 */

get_header();
?>

	<main id="primary" class="site-main">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<h2 class="entry-title"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></h2>
	</header><!-- .entry-header -->

	<?php myportfolio_post_thumbnail(); ?>



	<div class="container entry-content">
		<div class="row">

			<?php if( $mode == 'input' ){ ?>
			<!-- 入力画面 -->
			<?php
				if( $errmessage ){
					echo '<div style="color:red;">';
					echo implode('<br>', $errmessage );
					echo '</div>';
				}
			?>
				<form action="" method="post">
					<div class="form">
						<div class="form_row">
							<label class="form_label" for="fullname">お名前<span>必須</span></label>
							<div class="form_content">
								<input type="text" name="fullname" id="fullname" value="<?php echo $_SESSION['fullname'] ?>">
							</div>
						</div>

						<div class="form_row">
							<label class="form_label" for="email">メールアドレス<span>必須</span></label>
							<div class="form_content">
								<input type="email" name="email" id="email" value="<?php echo $_SESSION['email'] ?>">
							</div>
						</div>

						<div class="form_row">
							<label class="form_label" for="message">メッセージ本文</label>
							<div class="form_content">
								<textarea name="message" id="message"><?php echo $_SESSION['message'] ?></textarea>
							</div>
						</div>

						<div class="form_row form_row-center">
							<input type="submit" name="confirm" value="確認画面へ" class="btn btn-send" />
						</div>

					</div>
				</form>

			<?php } else if( $mode == 'confirm' ){ ?>
    	<!-- 確認画面 -->
				<form action="" method="post">
					<div class="form">
						<div class="form_row">
							<label class="form_label" for="fullname">お名前<span>必須</span></label>
							<div class="form_content">
								<?php echo $_SESSION['fullname'] ?>
							</div>
						</div>

						<div class="form_row">
							<label class="form_label" for="email">メールアドレス<span>必須</span></label>
							<div class="form_content">
								<?php echo $_SESSION['email'] ?>
							</div>
						</div>

						<div class="form_row">
							<label class="form_label" for="message">メッセージ本文</label>
							<div class="form_content">
								<?php echo nl2br($_SESSION['message']) ?>
							</div>
						</div>

						<div class="form_row form_row-center">
							<input type="submit" name="send" value="送信する" class="btn btn-send" />
						</div>

						<div class="form_row form_row-center">
							<input type="submit" name="back" value="戻る" class="btn btn-back" />
						</div>
					</div>
				</form>

			<?php } else { ?>
    		<!-- 完了画面 -->
				<div class="form_row form_row-center">
					送信しました。お問い合わせありがとうございました。
				</div>
  		<?php } ?>

		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
