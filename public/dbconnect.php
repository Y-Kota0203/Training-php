<?php
date_default_timezone_set('Asia/Tokyo');

$user = 'root';

$pw = 'admin';

$dnsinfo = 'mysql:host=mysql;dbname=training;charset=utf8';

$db = new PDO($dnsinfo, $user, $pw);
//try{
//    $db = new PDO($dnsinfo, $user, $pw);
//    $res = "接続しました";
//
//}catch(PDOException $e){
//    $res = $e->getMessage();
//}
?>

<!doctype html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dbTest</title>
</head>
<body>
<?php
echo $res;
?>
</body>
</html>

