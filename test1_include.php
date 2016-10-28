<?php
try{
    $pdo=new PDO("mysql:host=127.0.0.1,dbname=asdf,charset=utf8","root","");
    $pdo->getAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->getAttribute(PDO::ATTR_EMULATE_PREPARES,false);
} catch (Exception $Exception) {
    die("입력 실패".$Exception->getMessage);
}
?>