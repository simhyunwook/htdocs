<?php
    include "subdb.php";
    $sql="delete from board where idx='{$_GET['idx']}'";
    $go=$pdo->prepare($sql);
    $go->execute();
    echo "<script>location.href='board.php';</script>";
?>