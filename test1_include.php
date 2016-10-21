<?php
try{
    $pdo=new PDO("mysql:host=127.0.0.1;dbname=test1;chatset=utf8","root","");
    $pdo->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    print "연결 성공";
} catch (Exception $Exception) {
    die("연결 실패".$Exception->getMessage);
}
?>