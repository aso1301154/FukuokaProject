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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="copyright" content="Nikukyu-Punch" />
<title>会員登録｜｜福岡の特産品ばたべてみんしゃい！</title>
<meta name="description" content="ここにサイト説明を入れます" />
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="script.js"></script>



</head>


<body id="page1"
	onload="MM_preloadImages('images/menu_over_01.gif','images/menu_over_05.gif','images/menu_over_06.gif','images/menu_over_02.gif','images/menu_over_03.gif','images/menu_over_04.gif')">
<?php
if ($_SESSION ['member_name'] == null) {
	echo '<h1>
		<div class="empty">
			<a href="t_entry.php">新規登録</a>
		</div>
		<div class="login">
			<a href="l_form.php">ログイン</a>
		</div>
	</h1>';
} else {
	echo '<h1>
		ようこそ';
	print ($_SESSION ['member_name']) ;
	echo 'さん！
		<a href="logout.php">ログアウト</a>
	</h1>';
}
?>

	<div id="container">


		<div id="header">
			<a href="index.php"><img src="img/title2.png" alt="" name="logo"
				width="550" height="99" id="logo" /></a>
		</div>
		<!--/header-->


		<ul id="menu">
			<li><a href="search.php"><img src="images/syokuhin.png" alt="HOME"
					width="130" height="50" id="Image1"
					onmouseover="MM_swapImage('Image1','','images/menu_over_01.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
			<li><a href="search.php"><img src="images/nosakumotu.png" alt="ABOUT"
					width="130" height="50" id="Image2"
					onmouseover="MM_swapImage('Image2','','images/menu_over_02.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
			<li><a href="search.php"><img src="images/inryo.png" alt="CAKE"
					name="Image3" width="130" height="50" id="Image3"
					onmouseover="MM_swapImage('Image3','','images/menu_over_03.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
			<li><a href="search.php"><img src="images/okasi.png" alt="Q&amp;A"
					name="Image4" width="130" height="50" id="Image4"
					onmouseover="MM_swapImage('Image4','','images/menu_over_04.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
			<li><a href="search.php"><img src="images/kogehin.png" alt="LINK"
					width="130" height="50" id="Image5"
					onmouseover="MM_swapImage('Image5','','images/menu_over_05.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
			<li class="last"><a href="search.php"><img src="images/sonota.png"
					alt="CONTACT" width="130" height="50" id="Image6"
					onmouseover="MM_swapImage('Image6','','images/menu_over_06.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
		</ul>



		<div id="contents">


			<div id="main">
				<h2>会員情報登録</h2>
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
			</div>
			<!--/main-->
			<ul id="footermenu">
				<li><a href="index.html">トップページ</a></li>
			</ul>
			<!--/footermenu-->


		</div>
		<!--/contents-->


	</div>
	<!--/container-->


	<div id="footer">
		Copyright&copy; 2015 福岡の特産品ば食べてみんしゃい！ All Rights Reserved.<br />
	</div>
	<!--/footer-->


</body>
</html>
