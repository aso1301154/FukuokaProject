<?php
require 'common.php';
$flg = true;
if (isset ( $_POST ['submit'] )) {
	;
	if ($_POST ['name'] == '') {
		$error ['name'] = 'blank';
		$flg = false;
	}
	if ($_POST ['furigana'] == '') {
		$error ['furigana'] = 'blank';
		$flg = false;
	}
	if ($_POST ['year'] == '') {
		$error ['year'] = 'blank';
		$flg = false;
	}
	if ($_POST ['month'] == '') {
		$error ['month'] = 'blank';
		$flg = false;
	}
	if ($_POST ['day'] == '') {
		$error ['day'] = 'blank';
		$flg = false;
	}
	if ($_POST ['sex'] == '') {
		$error ['sex'] = 'blank';
		$flg = false;
	}
	if ($_POST ['address'] == '') {
		$error ['address'] = 'blank';
		$flg = false;
	}
	if ($_POST ['tel'] == '') {
		$error ['tel'] = 'blank';
		$flg = false;
	}
	if ($_POST ['mail'] == '') {
		$error ['mail'] = 'blank';
		$flg = false;
	}
	
	// 画像の処理
	if ($_POST ['captcha_code'] == '') {
		$error = ' class=error ';
		$mes = '画像認証を入力してください。';
		$flg = false;
	} elseif ($_POST ['captcha_code'] != $_SESSION ["securimage_code_disp"] ["default"]) {
		$error = ' class=error ';
		$mes = '入力された画像認証をご確認ください。';
		$flg = false;
	} else {
		$mes = '画像認証は正しく入力されました。';
	}
	
	// エスケープ
	function h($str) {
		return htmlspecialchars ( $str, ENT_QUOTES, 'UTF-8', FALSE );
	}
	if ($flg == true) {
		$_SESSION ['name'] = $_POST ['name'];
		$_SESSION ['furigana'] = $_POST ['furigana'];
		$_SESSION ['year'] = $_POST ['year'];
		$_SESSION ['month'] = $_POST ['month'];
		$_SESSION ['day'] = $_POST ['day'];
		$_SESSION ['sex'] = $_POST ['sex'];
		$_SESSION ['address'] = $_POST ['address'];
		$_SESSION ['tel'] = $_POST ['tel'];
		$_SESSION ['mail'] = $_POST ['mail'];
		header ( 'Location:entry.php' );
		exit ();
	}
}
?>

<html>
<head>
<meta charset="utf-8">
<title>新規会員登録｜福岡特産品site</title>
</head>

<body>
	<h1>会員登録</h1>
	<?php //if ($error)echo "<span class=\"error\">$error</span>"?>
	<form action="t_entry.php" method="post">
		<p>
			お名前<br> <input type="text" name="name" value="<?php echo $name ?>">
	<?php if($error['name'] == 'blank'): ?>	
		<p class="error">※必須 名前を入力して下さい。</p>
	<?php endif; ?>
				
		</p>
		<p>
			フリガナ<br> <input type="text" name="furigana"
				value="<?php echo $furigana ?>">
			<?php if($error['furigana'] == 'blank'): ?>	
		<p class="error">※必須 フリガナを入力して下さい。</p>
	<?php endif; ?>
	</p>
		<p>
			生年月日<br> 西暦<input type="number" name="year" min="1900" max="2016"
				value="<?php echo $year ?>"> 年 
				<?php if($error['year'] == 'blank'): ?>		
		<p class="error">※必須 誕生年を入力して下さい。</p>
<?php endif; ?>
				<input type="number" name="month" min="1" max="12"
			value="<?php echo $month ?>"> 月 
				<?php if($error['month'] == 'blank'): ?>
  <p class="error">※必須 誕生月を入力して下さい。</p>
<?php endif; ?>
				<input type="number" name="day" min="1" max="31"
			value="<?php echo $day ?>">
			日
			<?php if($error['day'] == 'blank'): ?>
  <p class="error">※必須 誕生日を入力して下さい。</p>
<?php endif; ?>
		</p>
		<p>
			性別<br> <input type="radio" name="sex" value="1">男性 <input
				type="radio" name="sex" value="2">女性 <input type="radio" name="sex"
				value="9" checked="checked">きみや
				<?php if($error['sex'] == 'blank'): ?>		
		<p class="error">※必須 性別を入力してください</p>
<?php endif; ?>
		</p>
		<p>
			ご住所<br> <input type="text" name="address" size="60"
				value="<?php echo $address ?>">
				<?php if($error['address'] == 'blank'): ?>
		<p class="error">※必須 住所を入力して下さい。</p>
<?php endif; ?>
		</p>
		<p>
			電話番号<br> <input type="text" name="tel" value="<?php echo $tel ?>">
			<?php if($error['tel'] == 'blank'): ?>		
		<p class="error">※必須 電話番号を入力して下さい。</p>
<?php endif; ?>
		</p>
		<p>
			メールアドレス<br> <input type="text" name="mail"
				value="<?php echo $mail ?>">
				<?php if($error['mail'] == 'blank'): ?>	
		<p class="error">※必須 メールアドレスを入力してください。</p>
<?php endif; ?>
		</p>

		<p>
			<input type="submit" name="submit" value="登録">
		</p>

	</form>
</body>
</html>