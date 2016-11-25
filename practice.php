<?php
 try{
     $pdo=new PDO('mysql:host=127.0.0.1;dbname=kccbd;charset=utf8','root','');
     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
 } catch (Exception $Exception) {
     die('연결 실패'.$Exception->getMessage);
 }
?>

