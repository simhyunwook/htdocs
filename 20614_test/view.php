<?php
    include'db2.php';
    $sql="select * from board where idx='{$_GET['idx']}'";
    $stmh=$pdo->prepare($sql);
    $stmh->execute();
    $result=$stmh->fetch();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <div>
                <p><?=$result['title']?></p>
                <p>작성자 : <?=$result['name'] ?></p>
                <p>작성일 : <?=$result['day']?></p>
                <p>조회수 : <?=$result['click']?></p>
                <p>내용 : <?=$result['read']?></p>
            </div>                        
            <a href="./list.php">목록</a>
            <a href="./del.php?idx=<?=$result['idx']?>">삭제</a>
	</div>
				
    </body>
</html>
