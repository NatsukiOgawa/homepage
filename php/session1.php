<?php
$post_id = $_POST["id"];
$post_pass = $_POST["password"];
$post_submit = $_POST["login"];

if(isset($post_submit)){
  //送信ボタンが押された時
  if(!isset($post_id) || !isset($post_pass)){
    header('location:index.php');
    exit();
  }else if($post_id != "qqqqq" || $post_pass != "qqqqq"){
    header('location:index.php');
    exit();
  }else{
    header('location:login_success.html');
    // echo "ようこそ";
    exit();
  }
}
?>


<html>
  <head>
    <title>ログイン</title>
  </head>
  <link rel="stylesheet" href="./home.css">
  <body>
    <div class="main">
      <form action="" method="POST">
          <input type="text" name="id" placeholder="ID"><br>
          <input type="password" name="password" placeholder="Password"><br>

          <input type="submit" name="login" value="ログイン">
      </form>
    </div>
  </body>
</html>
