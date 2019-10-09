<?php
session_start();
?>

<!doctype html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CreatePost</title>
</head>

<body>

<h1>ここはユーザー登録画面です</h1>

<form method="post" action="list.php">
    <label>
        名前<input type="text" name="user_name" value="<?php echo $name?>" ><br>
        メールアドレス<input type="text" name="email" value="<?php echo $email?>" ><br>
        パスワード<input type="text" name="password" value="<?php echo $password?>"><br>
    </label>
    <input type="submit" name="submit_name" value="実行">
</form>
<br>
<ul>
    <?php $errors = array();
    foreach($errors as $message)
    {echo $message;}?>
</ul>
</body>
</html>



<?php
require ('dbconnect.php');
$name = strip_tags($_POST['user_name']);
$email = strip_tags($_POST['email']);
$password = password_hash(strip_tags($_POST['password']), PASSWORD_BCRYPT);
$timestamp = date('Y-m-d H:i:s');
?>
