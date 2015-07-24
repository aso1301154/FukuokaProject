<?php
session_start ();
if (isset($_POST['submit'])) {
$con = mysql_connect ( "localhost", "root", "root" );
if (! $con) {
	print ("MySQLへの接続に失敗しました") ;
	exit ();
}
if (! mysql_select_db ( "tumtum" )) {
	print ("データベースへの接続に失敗しました") ;
	exit ();
}
$member_name = $_SESSION ['join'] ['name'];
$password = $_SESSION ['join'] ['password'];
$furigana = $_SESSION ['join'] ['furigana'];
$mail = $_SESSION ['join'] ['mail'];
$address = $_SESSION ['join'] ['address'];
$tel = $_SESSION ['join'] ['tel'];
$sql = "INSERT INTO member(member_name,password,furigana,mail,address,tel) values ('$member_name','$password','$furigana','$mail','$address','$tel')";
$result = mysql_query ( $sql );
if (! $result) {
	print ("SQLの実行に失敗しました<BR>") ;
	print (mysql_errno () . ": " . mysql_error () . "<BR>") ;
	exit ();
}
if($result){  //登録完了
	//トランザクション終わり
	mysql_query("commit");
}
unset ( $_SESSION ['join'] );
require_once 'thanks.php';
exit ();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>登録確認||福岡の特産品ば食べてみんしゃい</title>
<meta name="description" content="ここにサイト説明を入れます" />
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="script.js"></script>



</head>
<body id="page1"
	onload="MM_preloadImages('images/menu_over_01.gif','images/menu_over_05.gif','images/menu_over_06.gif','images/menu_over_02.gif','images/menu_over_03.gif','images/menu_over_04.gif')">

	<h1>
		<div class="empty">
			<a href="t_entry.php">新規登録</a>
		</div>
		<div class="login">
			<a href="l_form.php">ログイン</a>
		</div>
	</h1>


	<div id="container">


		<div id="header">
			<a href="index.html"><img src="images/logo.gif" alt="" name="logo"
				width="337" height="99" id="logo" /></a>
		</div>
		<!--/header-->


		<ul id="menu">
			<li><a href="index.html"><img src="images/syokuhin.png" alt="HOME"
					width="130" height="50" id="Image1"
					onmouseover="MM_swapImage('Image1','','images/menu_over_01.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
			<li><a href="about.html"><img src="images/nosakumotu.png" alt="ABOUT"
					width="130" height="50" id="Image2"
					onmouseover="MM_swapImage('Image2','','images/menu_over_02.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
			<li><a href="cake.html"><img src="images/inryo.png" alt="CAKE"
					name="Image3" width="130" height="50" id="Image3"
					onmouseover="MM_swapImage('Image3','','images/menu_over_03.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
			<li><a href="qa.html"><img src="images/okasi.png" alt="Q&amp;A"
					name="Image4" width="130" height="50" id="Image4"
					onmouseover="MM_swapImage('Image4','','images/menu_over_04.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
			<li><a href="link.html"><img src="images/kogehin.png" alt="LINK"
					width="130" height="50" id="Image5"
					onmouseover="MM_swapImage('Image5','','images/menu_over_05.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
			<li class="last"><a href="contact.html"><img src="images/sonota.png"
					alt="CONTACT" width="130" height="50" id="Image6"
					onmouseover="MM_swapImage('Image6','','images/menu_over_06.gif',1)"
					onmouseout="MM_swapImgRestore()" /></a></li>
		</ul>


		<div id="contents">


			<div id="main">
			<h2>登録内容確認</h2>
				<form action="" method="post">
					<dl>
						<dt><h3>名前</h3></dt>
						<dd>
    &raquo;&raquo;&nbsp;<?php echo htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
						</dd>
						<dt><h3>フリガナ</h3></dt>
						<dd>
    &raquo;&raquo;&nbsp;<?php echo htmlspecialchars($_SESSION['join']['furigana'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
						</dd>
						<dt><h3>メールアドレス</h3></dt>
						<dd>
    &raquo;&raquo;&nbsp;<?php echo htmlspecialchars($_SESSION['join']['mail'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
						</dd>
						<dt><h3>住所</h3></dt>
						<dd>
    &raquo;&raquo;&nbsp;<?php echo htmlspecialchars($_SESSION['join']['address'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
						</dd>
						<dt><h3>電話番号</h3></dt>
						<dd>
    &raquo;&raquo;&nbsp;<?php echo htmlspecialchars($_SESSION['join']['tel'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
						</dd>
						<dt><h3>パスワード</h3></dt>
						<dd>
      &raquo;&raquo;&nbsp;****<?php //echo htmlspecialchars($_SESSION['join']['password'],ENT_QUOTES,'UTF-8'); ?>
    </dd>
					</dl>
					<div>
						<a href="t_entry.php?action=rewrite">&laquo;&nbsp;書き直す</a> <input
							type="submit" name="submit" value="登録する">
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
