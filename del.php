<?php
    include_once '20614.php';

    for($i=0;$i<count($_POST['idx']);$i++){
        $value=$_POST['idx'];
        $sql = "DELETE FROM member WHERE idx='$value[$i]'";
        $pdo ->query($sql); 
        echo "삭제"."<br>";
        print_r ($value); 
    }
?>