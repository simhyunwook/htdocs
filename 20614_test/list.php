<?php
    include 'db2.php';
    $sql="select * from board";
    $stmh=$pdo->prepare($sql);
    $stmh->execute();
    $result=$stmh->fetchall();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>20614심현욱</title>
        <link rel="stylesheet" type="text/css" href="./css/list.css">
    </head>
    <body>
       <div class="off">
        <?php
            foreach($result as $row){
        ?>
        <td>
            <div class="on" id="on1"><?=$row['idx']?></div>
        </td>
        <td>
            <div class="on" id="on2">제목  : <a href="./view.php?idx=<?=$row['idx']?>"><?=$row['title']?><a></div>
        </td>
        <td>
            <div class="on" id="on3">작성자 : <?=$row['name']?></div>
        </td>
        <td>
            <div class="on" id="on4">날짜 : <?=$row['day']?></div>
        </td>
        <td>
            <div class="on" id="on5">조회수 : <?=$row['click']?></div>
        </td>
        <br>
        <?php
            }
        ?>
        </div>
    </body>
</html>
