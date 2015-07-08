<?php
session_start ();
function connect() {
	$dsn = 'mysql:dbname=tumtum;host=localhost';
	$user = 'root';
	$password = 'root';
	return new PDO ( $dsn, $user, $password );
}
function connect2() {
	$con = mysql_connect ( "localhost", "root", "root" );
	if (! $con) {
		print ("MySQLへの接続に失敗しました") ;
		exit ();
	}
	if (! mysql_select_db ( "tumtum" )) {
		print ("データベースへの接続に失敗しました") ;
		exit ();
	}
	return $con;
}
function img_tag($img_id) {
	return '<img src="get_image.php?key=' . $img_id . '"alt=""width="300" height="200">';
}
function img_sub($img_id) {
	return '<form method="post" action="detail.php">
   			<input type="hidden" name="goods_id" value="' . $img_id . '">
   			<input type="image" src="get_image.php?key=' . $img_id . '"alt="送信"width="300" height="200">';
}
?>