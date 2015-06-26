<?php
    session_start();
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php
    print('セッション変数の一覧を表示します。<br>');
    print_r($_SESSION);
    print('<br>');

    print('セッションIDを表示します。<br>');
    print($_COOKIE["PHPSESSID"].'<br>');

    print('<p>ログアウトします</p>');

    $_SESSION = array();

    if (isset($_COOKIE["PHPSESSID"])) {
        setcookie("PHPSESSID", '', time() - 1800, '/');
    }

    session_destroy();
?>

<p>
<a href="index.php">トップへ</a>
</p>

</body>
</html>