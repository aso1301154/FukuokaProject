<?php
require 'common.php';

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
	$_SESSION ['tel'] = $row ['tel'];
	$_SESSION ['address'] = $row ['address'];
	header ( 'location: index.php' );
	exit ();
} else {
	print ('IDかパスワードが違うよ！') ;
}
?>