<?php
require 'common.php';
$db = connect2();
mysqli_set_charset($db, 'utf8');
if(!isset($_SESSION['join'])){
  header('Location:index.php');
  exit();
}
if (!empty($_POST)) {
	//登録処理
	$sql=sprintf('INSERT INTO member SET member_name=%s,furigana=%s,mail=%s,address=%s,tel=%s,password=%s',
			mysql_real_escape_string($db,$_SESSION['join']['name']),
			mysql_real_escape_string($db,$_SESSION['join']['furigana']),
			mysql_real_escape_string($db,$_SESSION['join']['mail']),
			mysql_real_escape_string($db,$_SESSION['join']['address']),
			mysql_real_escape_string($db,$_SESSION['join']['tel']),
			mysql_real_escape_string($db,$_SESSION['join']['password'])
			);
	mysqli_query($db, $sql) or die(mysqli_error($db));
	unset($_SESSION['join']);
	header( 'Location:thanks.php' );
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>新規会員登録</title>
</head>
<body>
  <form action="" method="post">
  <dl>
    <dt>名前</dt>
    <dd>
    <?php echo htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
    </dd>
    <dt>フリガナ</dt>
    <dd>
    <?php echo htmlspecialchars($_SESSION['join']['furigana'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
    </dd>
    <dt>メールアドレス</dt>
    <dd>
    <?php echo htmlspecialchars($_SESSION['join']['mail'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
    </dd>
    <dt>住所</dt>
    <dd>
    <?php echo htmlspecialchars($_SESSION['join']['address'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
    </dd>
    <dt>電話番号</dt>
    <dd>
    <?php echo htmlspecialchars($_SESSION['join']['tel'], ENT_QUOTES, 'UTF-8'); ?>
  </dd>
    </dd>
    <dt>パスワード</dt>
    <dd>
      <?php echo htmlspecialchars($_SESSION['join']['password'],ENT_QUOTES,'UTF-8'); ?>
    </dd>
  </dl>
  <div><a href="t_entry.php?action=rewrite">&laquo;&nbsp;書き直す</a>
  <input type="submit" value="登録する"></div>
  </form>
</body>
</html>