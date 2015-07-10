<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta name="copyright" content="Nikukyu-Punch" />
<title>ケーキ・カフェ向きホームページテンプレート simple19</title>
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

				<h2>商品検索</h2>
				<form action="search.php" method="post">
					<input type="text" name="name" size="40" /> <input type="submit"
						name='submit' value="検索" />
				</form>
				<h2>更新情報・お知らせ</h2>

				<div class="new">
					<dl>
						<dt>2011/00/00</dt>
						<dd>ホームページリニューアル</dd>
						<dt>2011/00/00</dt>
						<dd>ホームページリニューアル</dd>
						<dt>2011/00/00</dt>
						<dd>ホームページリニューアル</dd>
						<dt>2011/00/00</dt>
						<dd>ホームページリニューアル</dd>
						<dt>2011/00/00</dt>
						<dd>ホームページリニューアル</dd>
						<dt>2011/00/00</dt>
						<dd>ホームページリニューアル</dd>
						<dt>2011/00/00</dt>
						<dd>ホームページリニューアル</dd>
						<dt>2011/00/00</dt>
						<dd>ホームページリニューアル</dd>
						<dt>2011/00/00</dt>
						<dd>ホームページリニューアル</dd>
						<dt>2011/00/00</dt>
						<dd>ホームページリニューアル</dd>
					</dl>
				</div>
				<!--/new-->
				<h2>☆TOP商品☆</h2>
				<br />
				<table>
					<?php
					foreach ( $goods as $g ) {
						?>
						<tr>
					<?php
						echo img_sub ( $g ['goods_id'] );
						?>
					</tr>
					<?php
					}
					?>
				</table>



			</div>
			<!--/main-->


			<ul id="footermenu">
				<li><a href="index.html">トップページ</a></li>
				<li><a href="about.html">当サイトについて</a></li>
				<li><a href="cake.html">ケーキ</a></li>
				<li><a href="qa.html">よくある質問</a></li>
				<li><a href="link.html">リンク</a></li>
				<li><a href="contact.html">お問い合わせ</a></li>
			</ul>
			<!--/footermenu-->


		</div>
		<!--/contents-->


	</div>
	<!--/container-->


	<div id="footer">
		Copyright&copy; 2011 サンプルカフェ All Rights Reserved.<br /> <a
			href="http://nikukyu-punch.com/" target="_blank">Template design by
			Nikukyu-Punch</a>
	</div>
	<!--/footer-->


</body>
</html>
