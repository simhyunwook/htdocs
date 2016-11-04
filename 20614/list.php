<?php
include_once '1104db.php';
$sql= 'select * from bard';
$stmh=$pdo->prepare($sql);
$stmh->execute();
$result=$stmh->fetchAll();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <table>
                <th>번호</th>
                <th>제목</th>
                <th>작성자</th>
                <th>업로드</th>
                
            </table>
            <?php
            foreach($result as $row){
            ?>
            <div><?=$row['idx']?></div>
            <div><a href="view.php?idx=<?=$row['idx']?>"><?=$row['title']?></a></div>
            <div><?=$row['name']?></div>
            
           <?php
            }
           ?>
    </body>
</html>
