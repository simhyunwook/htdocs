<?php
include '20614.php';

foreach($_POST['_check'] as $i){
    $sql="select from member where idx={$i}";
    $pdo->query($sql);
    $num=$_POST['check'];
    print_r($num);
}
?>