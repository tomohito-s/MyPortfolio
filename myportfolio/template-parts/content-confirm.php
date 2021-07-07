<?php $_SESSION["message"] = $_POST["message"]; ?>
	<!-- 確認画面 -->
    <form action="" method="post">
				<div class="form">
					<div class="form_row">
						<label class="form_label" for="fullname">お名前<span>必須</span></label>
						<div class="form_content">
                            <?php var_dump($_POST); ?>
                            <?php echo($_POST['fullname']); ?>
						</div>
					</div>

					<div class="form_row">
						<label class="form_label" for="email">メールアドレス<span>必須</span></label>
						<div class="form_content">
                            <?php echo($_POST['email']); ?>
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