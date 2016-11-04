<?php
include_once '1104db.php';
$sql= "select * from bard where idx='{$_GET['idx']}'";
$stmh=$pdo->prepare($sql);
$stmh->execute();
$result=$stmh->fetch();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        ?>
        제목<p><?=$result['title']?></p>
        작성자<p><?=$result['name']?></p>
        <input type="file">
        <a href="./delete.php?idx=<?=$result['idx']?>">삭제</a>
        <a href="./update.php?idx=<?=$result['idx']?>">수정</a>
    </body>
</html>
