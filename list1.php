<!DOCTYPE html>
<?php
    include "20614.php";
    $sql='select * from member';
    $stmh=$pdo->prepare($sql);
    $stmh->execute();
    $result=$stmh->fetchAll();
    ?>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            *{margin:0; padding:0;}
            .name{border-bottom:1px solid black;}
            table{width:400px; height:100px; border:1px solid black;border-spacing: 0; }
            th{border:1px solid black; background-color: #0084c3; color:white}
            tr{width:400px; height:100px;}
            td{width:100px; height:100px; text-align: center;margin:0 auto; border:1px solid black;}
            button{width:35px;height:25px;}
        </style>
        <title></title>
    </head>
    <body>
        <table>
            <tr class='name'>
                <th>삭제 여부</th>
                <th>번호</th>
                <th>이름</th>
                <th>비밀번호</th>
                <th>나이</th>
            </tr>
        <?php
            foreach($result as $row){
        ?>
    
        <tr>
        <form method='post'name='form1'>
            <td><input type="checkbox" value='<?=$row['idx']?>' name='idx[]'></td>
            <td><?=$row['idx']?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['password']?></td>
            <td><?=$row['age']?></td>
        </form>
        </tr>
        <?php    
            }
        ?>
        <form action='del.php' name='delete'><button>삭제</button></form>
        <form action='send.php'name='send'><button>전송</button></form>
        </table>
    </body>
</html>