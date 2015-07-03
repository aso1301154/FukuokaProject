<?php
require 'common.php';

$error = '';
$mes = '';

if(isset($_POST['captcha_code'])){
	session_start();
	//画像の処理
	if($_POST['captcha_code'] == ''){
		$error = ' class=error ';
		$mes = '画像認証を入力してください。';
	}elseif($_POST['captcha_code'] != $_SESSION["securimage_code_disp"]["default"]){
		$error = ' class=error ';
		$mes = '入力された画像認証をご確認ください。';
	}else{
		$mes = '画像認証は正しく入力されました。';
	}
}
//エスケープ
function h($str) {
	return htmlspecialchars($str, ENT_QUOTES, 'UTF-8', FALSE);
}
?>