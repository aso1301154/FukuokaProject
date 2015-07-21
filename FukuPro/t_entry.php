<?php
require 'common.php';
if (! empty ( $_POST )) {
	if ($_POST ['name'] == '') {
		$error ['name'] = 'blank';
	}
	if ($_POST ['furigana'] == '') {
		$error ['furigana'] = 'blank';
	}
	if ($_POST ['mail'] == '') {
		$error ['mail'] = 'blank';
	}
	if ($_POST ['address'] == '') {
		$error ['address'] = 'blank';
	}
	if ($_POST ['tel'] == '') {
		$error ['tel'] = 'blank';
	}
	if (strlen ( $_POST ['password'] ) < 4) {
		$error ['password'] = 'length';
	}
	
	if ($_POST ['password'] == '') {
		$error ['password'] = 'blank';
	}
	if (empty ( $error )) {
		$_SESSION ['join'] = $_POST;
		header ( 'Location:entry.php' );
		exit ();
	}
}
// 書き直し
if ($_REQUEST ['action'] == 'rewrite') {
	$_POST = $_SESSION ['join'];
	$error ['rewrite'] = true;
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>新規会員登録</title>
</head>
<body>
	<p>必要事項をご記入ください</p>
	<form action="" method="post" enctype="multipart/form-data">
		<dl>
			<dt>
				名前<font color="red"> 必須</font>
			</dt>
			<dd>
				<input type="text" name="name" size="35" maxlength="255"
					value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?>">
				<?php if($error['name'] == 'blank'): ?>
    <p>
					<font color="red">* 名前を入力してください</font>
				</p>
    <?php endif; ?>
			</dd>
			<dt>
				フリガナ<font color="red"> 必須</font>
			</dt>
			<dd>
				<input type="text" name="furigana" size="35" maxlength="255"
					value="<?php echo htmlspecialchars($_POST['furigana'], ENT_QUOTES, 'UTF-8'); ?>">
				<?php if($error['furigana'] == 'blank'): ?>
    <p>
					<font color="red">* フリガナを入力してください</font>
				</p>
    <?php endif; ?>
			</dd>
			<dt>
				メールアドレス<font color="red"> 必須</font>
			</dt>
			<dd>
				<input type="text" name="mail" size="35" maxlength="255"
					value="<?php echo htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8'); ?>">
				<?php if($error['mail'] == 'blank'): ?>
    <p>
					<font color="red">* メールアドレスを入力してください</font>
				</p>
    <?php endif; ?>
    <?php if($error['mail'] == 'duplicate'): ?>
    <p>
					<font color="red">* 指定されたメールアドレスは既に登録されています</font>
				</p><?php endif; ?>
  
			</dd>
			<dt>
				住所<font color="red"> 必須</font>
			</dt>
			<dd>
				<input type="text" name="address" size="35" maxlength="255"
					value="<?php echo htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8'); ?>">
				<?php if($error['address'] == 'blank'): ?>
    <p>
					<font color="red">* 住所を入力してください</font>
				</p>
    <?php endif; ?>
			</dd>
			<dt>
				電話番号<font color="red"> 必須</font>
			</dt>
			<dd>
				<input type="text" name="tel" size="35" maxlength="255"
					value="<?php echo htmlspecialchars($_POST['tel'], ENT_QUOTES, 'UTF-8'); ?>">
				<?php if($error['tel'] == 'blank'): ?>
    <p>
					<font color="red">* 電話番号を入力してください</font>
				</p>
    <?php endif; ?>
			</dd>
			<dt>
				パスワード<font color="red"> 必須</font>
			</dt>
			<dd>
				<input type="password" name="password" size="10" maxlength="20"
					value="<?php echo htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8'); ?>">
				<?php if($error['password'] == 'blank'): ?>
    <p>
					<font color="red">* パスワードを入力してください</font>
				</p>
    <?php endif; ?>
    <?php if($error['password'] == 'length'): ?>
    <p>
					<font color="red">* パスワードは４文字以上で入力してください</font>
				</p>
    <?php endif; ?>
			</dd>
		</dl>
		<div>
			<input type="submit" value="入力内容を確認">
		</div>
	</form>
</body>
</html>