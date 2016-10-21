<?php
    include_once 'test1_include.php'; 
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
        <form method='post' action='test1_add.php'>
            아이디<input type= "text" name="id">
            비밀번호<input type="password" name="password">
            이름<input type="text" name="name">
            전화번호<input type="text"name="phone" >
            <button >전송</button>
        </form>
    </body>
</html>
