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
        <?php
            $_POST["onname"];
            $_POST["password"];
            print $_POST["onname"]."님 환영"."<br>";
            print $_POST["password"]."<br>";
            print nl2br($_POST["honbun"]);
            if(isset($_POST["hobby"])){
                $hobby = implode('와'. $_POST["hobby"]);
                print "저의 취미는".$_POST["hobby"]."입니다"."<br>";
            }else{
                print "저는 취미가 없습니다..."."<br>";
            }
        ?>
    </body>
</html>
