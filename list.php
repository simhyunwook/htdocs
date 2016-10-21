<?php
    include_once 'test1_include.php';
    $sql='select * from member';
    $stmh=$pdo->prepare($sql);
    $stmh->execute();
    $result=$stmh->fetchAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>list</title>
    </head>
    <body>
        <table>
            <tr>
                <th>아이디</th>
                <th>비밀번호</th>
                <th>이름</th>
                <th>전화번호</th>
            </tr>
            <?php
                foreach($result as $row){
            ?>
            <tr>
                <th><?=$row['id']?></th>
                <th><?=$row['password']?></th>
                <th><?=$row['name']?></th>
                <th><?=$row['phone']?></th>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>
