<?php
  require 'common.php';
  $pdo = connect();
	$st = $pdo->prepare ( "SELECT * FROM goods WHERE goods_id = :goods_id " );
	$st->execute ( array ( ':goods_id'=>$_POST['goods_id'] ) );
	$goods = $st->fetchAll ();
	$st->closeCursor ();
require 't_detail.php';
?>