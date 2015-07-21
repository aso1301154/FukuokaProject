<?php
require 'common.php';
$pdo = connect ();
$st = $pdo->query ( "SELECT * FROM goods" );
$goods = $st->fetchAll ();
if ($_SESSION ['member_name'] != null) {
	require 'l_index.php';
} else {
	require 't_index.php';
}
?>