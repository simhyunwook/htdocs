<?php
try{
    $pdo=new PDO('mysql:host=127.0.0.1;dbname=kcc;charset=utf8;','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    print '연결완료';
} catch (Exception $Exception) {
    die("연결실패".$Exception->getMessage);
}
?>