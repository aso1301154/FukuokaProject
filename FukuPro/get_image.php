<?php
if ($_GET["key"] != "") {
	$img_id = $_GET['key']; // 取ってきたい商品のID
	  //$img_id = 1;                     
	// 接続
	$con = mysql_connect ( "localhost", "root", "root" );
	if (! $con) {
		print ("MySQLへの接続に失敗しました") ;
		exit ();
	}
	if (! mysql_select_db ( "tumtum" )) {
		print ("データベースへの接続に失敗しました") ;
		exit ();
	}
	
	// sql
	$sql = "SELECT img FROM img WHERE img_id='$img_id'";
	$result = mysql_query ( $sql );
	if (! $result) {
		print ("SQLの実行に失敗しました<BR>") ;
		print (mysql_errno () . ": " . mysql_error () . "<BR>") ;
		exit ();
	}
	$row = mysql_fetch_array ( $result );
	mysql_close ( $con );
	// mb_http_output("pass")は、自動的にmb_output_handler()が呼ばれるのを回避するための処理
	mb_http_output ( "pass" );
	
	// ヘッダー情報によりこれが画像ファイルであることをわからせている
	header ( "Content-type: image/jpeg");
	header ( "Content-Disposition: inline; filename=image.jpg" );
	echo $row[0];
}
?>