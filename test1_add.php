<?php
    include_once 'test1_include.php';
    $pdo->query("INSERT into test1 set id='{$_POST["id"]}',password='{$_POST["id"]}',name='{$_POST["name"]}',phone='{$_POST["phone"]}'");
    ?>
<script>location.herf='list.php'</script>