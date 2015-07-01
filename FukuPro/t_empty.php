<html>
<head>
<meta charset="utf-8">
<title>新規会員登録｜福岡特産品site</title>
</head>

<body>
	<h1>会員登録</h1>
	<?php if ($error)echo "<span class=\"error\">$error</span>"?>
	<form action="empty.php" method="post">
		<p>
			お名前<br> <input type="text" name="name" value="<?php echo $name ?>">
		</p>
		<p>
			フリガナ<br> <input type="text" name="furigana"
				value="<?php echo $furigana ?>">
		</p>
		<p>
			生年月日<br> <input type="number" name="year" min="1900" max="2016"
				value="<?php echo $year ?>"> 年 <input type="number" name="month"
				min="1" max="12" value="<?php echo $month ?>"> 月 <input
				type="number" name="日" min="1" max="31" value="<?php echo $day ?>">
			日
		</p>
		<p>
			性別<br> <input type="radio" name="sex" value="1">男性 <input
				type="radio" name="sex" value="2">女性 <input type="radio" name="sex"
				value="9" checked="checked">きみや
		</p>
		<p>
			ご住所<br> <input type="text" name="address" size="60"
				value="<?php echo $address ?>">
		</p>
		<p>
			電話番号<br> <input type="text" name="tel" value="<?php echo $tel ?>">
		</p>
		<p>
			メールアドレス<br> <input type="text" name="mail"
				value="<?php echo $mail ?>">
		</p>

		<p>
			画像認証 <input type="text" name="captcha_code"
				value="<?php echo h($error);?>"> <img id="captcha"
				src="./securimage/securimage_show.php" alt="CAPTCHA Image" /> 
				<a
				href="#"
				onclick="document.getElementById('captcha').src = './securimage/securimage_show.php?' + Math.random(); return false">画像変更</a>
		</p>
		<p>
				<input type="submit" name="submit" value="購入">
			</p>

	</form>
</body>
</html>