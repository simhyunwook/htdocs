<?php
    include "db2.php";
    $sql="delete from board where idx='{$_GET['idx']}'";
    $exp=$pdo->prepare($sql);
    $exp->execute();
    echo "<script>location.href='list.php';</script>";
?>