<?php
session_start();
$name = strip_tags($_POST['user_name']);
$email = strip_tags($_POST['email']);
$password = password_hash(strip_tags($_POST['password']), PASSWORD_BCRYPT);
$timestamp = date('Y-m-d H:i:s');

if((!empty($name)) && (!empty($password)) && (!empty($email))){
    require('dbconnect.php');
    $st = $db->prepare("INSERT INTO users(user_name,email,password,insert_date) VALUES(?,?,?,?)");
    $st->execute(array(
        $name,
        $email,
        $password,
        $timestamp
    ));
}else {
//    $errors = array();
//    $errors['name'] = "名前がありません";
//    $errors['password'] = "パスワードがありません";
    header('Location:register.php');
    exit();
}
require('header.php');
?>


<!doctype html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PostList</title>
</head>
<body>
<h1>ここは投稿一覧画面です</h1>

</body>
</html>


