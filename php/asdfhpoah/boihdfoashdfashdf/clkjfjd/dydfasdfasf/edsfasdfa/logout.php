<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Test</title>
  <?php
  // セッション開始
  // session_start();
  // セッション変数を全て削除
  $_SESSION = array();
  // セッションクッキーを削除
  if (isset($_COOKIE["PHPSESSID"])) {
    setcookie("PHPSESSID", '', time() - 1800, '/');
  }
  // セッションの登録データを削除
  // print "ログアウト処理完了";
  // header('location:index.php');
  // session_destroy();
  ?>
  </head>
  <p>ログアウトしました</p>
  <a href="http://qq856533.php.xdomain.jp/">OK</a>
<body>
</body>
</html>
