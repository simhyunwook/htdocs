<?php
try{
$pdo=new PDO('mysql:host=localhost;dbname=kcc1;charset=utf8','root','');
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        print "접속성공";
}
catch(PDOException $Exception){
    die('접속오류'.'<br>'.$Exception->getMessage());
}
?>