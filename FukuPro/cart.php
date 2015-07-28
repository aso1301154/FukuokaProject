<?php
require 'common.php';
$rows = array ();
$sum = 0;
$pdo = connect ();
if (! isset ( $_SESSION ['cart'] ))
	$_SESSION ['cart'] = array ();
if (@$_POST ['submit']) {
	@$_SESSION ['cart'] [$_POST ['goods_id']] += $_POST ['num'];
}
foreach ( $_SESSION ['cart'] as $code => $num ) {
	$st = $pdo->prepare ( "SELECT * FROM goods WHERE goods_id = :goods_id " );
	$st->execute ( array (
			':goods_id' => $code 
	) );
	$row = $st->fetch ();
	$st->closeCursor ();
	$row ['num'] = strip_tags ( $num );
	$sum += $num * $row ['fee'];
	$rows [] = $row;
}
require 't_cart.php';
?>