<?php
    include '20614.php';
    $sql="delete from member where idx='{$_POST['idx']}'";
    $pdo->query($sql);
?>
<script>
    location.href="list.php"
    </script>