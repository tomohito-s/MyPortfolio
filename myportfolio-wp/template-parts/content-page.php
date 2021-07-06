<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyPortfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<h2 class="entry-title"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></h2>
	</header><!-- .entry-header -->

	<?php myportfolio_post_thumbnail(); ?>

	<div class="container entry-content">
		<div class="row">

			<?php if( $mode == 'input' ){ ?>
			<!-- 入力画面 -->

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
								<textarea name="message" id="message">value="<?php echo $_SESSION['message'] ?>"</textarea>
							</div>
						</div>

						<div class="form_row form_row-center">
							<input type="submit" name="send" value="確認画面へ" class="btn btn-send" />
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
							<input type="submit" name="send" value="確認画面へ" class="btn btn-send" />
						</div>

						<div class="form_row form_row-center">
							<input type="submit" name="back" value="戻る" class="btn btn-back" />
						</div>
					</div>
				</form>

			<?php } else { ?>
    		<!-- 完了画面 -->
    		送信しました。お問い合わせありがとうございました。<br>
  		<?php } ?>

		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
