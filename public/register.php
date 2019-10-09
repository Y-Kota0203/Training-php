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

<h1>ここはユーザー登録画面</h1>

<form method="post" action="register.php">
    <label>
        名前<input type="text" name="user_name" value="<?php echo $name?>" required><br>
        メールアドレス<input type="text" name="email" value="<?php echo $email?>" required><br>
        パスワード<input type="text" name="password" value="<?php echo $password?>" required><br>
    </label>
    <input type="submit" name="submit_name" value="実行">
</form>

</body>
</html>



<?php
require ('dbconnect.php');

//バリデーションは最初は直がきで。
$name = $_POST['user_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$timestamp = date('Y-m-d H:i:s');



$st = $db->prepare("INSERT INTO users(user_name,email,password,insert_date) VALUES(?,?,?,?)");
$st->execute(array(
    $name,
    $email,
    $password,
    $timestamp
));

?>
