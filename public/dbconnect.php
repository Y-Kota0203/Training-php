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


