<?php
require 'common.php';
$flg = true;
if (isset ( $_POST ['captcha_code'] )) {
	session_start ();
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
	
	if ($flg==true) {
//		セッションに入れて投げるの書く;
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
}
// エスケープ
function h($str) {
	return htmlspecialchars ( $str, ENT_QUOTES, 'UTF-8', FALSE );
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
	<<form action="'.$action.'" method="post">
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
		生年月日<br> <input type="number" name="year" min="1900" max="2016"
			value="<?php echo $year ?>"> 年 <input type="number" name="month"
			min="1" max="12" value="<?php echo $month ?>"> 月 <input type="number"
			name="day" min="1" max="31" value="<?php echo $day ?>"> 日
	</p>
	<p>
		性別<br> <input type="radio" name="sex" value="1">男性 <input type="radio"
			name="sex" value="2">女性 <input type="radio" name="sex" value="9"
			checked="checked">きみや
	</p>
	<p>
		ご住所<br> <input type="text" name="address" size="60"
			value="<?php echo $address ?>">
	</p>
	<p>
		電話番号<br> <input type="text" name="tel" value="<?php echo $tel ?>">
	</p>
	<p>
		メールアドレス<br> <input type="text" name="mail" value="<?php echo $mail ?>">
	</p>

	<p>
		画像認証 <input type="text" name="captcha_code" value=""
			<?php echo h($error);?>> <br> <img id="captcha"
			src="./securimage/securimage_show.php" alt="CAPTCHA Image" /> <a
			href="#"
			onclick="document.getElementById('captcha').src = './securimage/securimage_show.php?' + Math.random(); return false">画像変更</a>
		<br>
	
	
	<p><?php echo h($mes);?></p>
	</p>
	<p>
		<input type="submit" name="submit" value="登録">
	</p>

	</form>
</body>
</html>