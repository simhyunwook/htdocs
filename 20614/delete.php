<?php
include_once '1104db.php';
$q = "DELETE FROM bard WHERE idx={$_GET['idx']}";
$result = $pdo->query($q);
echo "<script>location.href='list.php'</script>";
?>