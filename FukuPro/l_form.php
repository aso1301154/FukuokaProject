<?php
require 'common.php';
$flg = false;
if (! empty ( $_POST )) {
	$mail = $_POST ["mail"];
	$pass = $_POST ["password"];
	$login = connect2 ();
	$sql = "SELECT member_id,password,member_name,address,tel FROM member WHERE mail='$mail'";
	$result = mysql_query ( $sql );
	if (! $result) {
		// print ("SQLの実行に失敗しました<BR>") ;
		// print (mysql_errno () . ": " . mysql_error () . "<BR>") ;
		// exit ();
	}
	$row = mysql_fetch_array ( $result );
	if ($pass == $row ['password']) {
		$_SESSION ['member_id'] = $row ['member_id'];
		$_SESSION ['member_name'] = $row ['member_name'];
		$_SESSION ['address'] = $row ['address'];
		$_SESSION ['tel'] = $row ['tel'];
		header ( 'location: index.php' );
		exit ();
	} else {
		$flg = true;
		// print ('IDかパスワードが違うよ！');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="copyright" content="Nikukyu-Punch" />
<title>福岡の特産品ばたべてみんしゃい！</title>
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
		ようこそ ';
	print ($_SESSION ['member_name']) ;
	echo ' さん！
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
				<h2>ログインします</h2>
				<form action="" method="post">
					<dl>
						<dt>メールアドレス</dt>
						<dd>
							<input type="text" name="mail"></input>
						</dd>
						<dt>パスワード</dt>
						<dd>
							<input type="password" name="password"></input>
						</dd>
				<?php if($flg == true): ?>
    <p>
							<font color="red">* メールアドレスとパスワードをご確認ください</font>
						</p>
    <?php endif; ?>
<input type="submit" value="ログイン">
				
				</form>
			</div>
			<!--/main-->
			<ul id="footermenu">
				<li><a href="index.php">トップページ</a></li>
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
