<?php
            session_start();//세션을 사용하겠다. 권한이 있는 애들만 사용해라!!!
            $count=1;
            if(isset($_SESSION["count"])){
                $count=$_SESSION["count"];
                $count++;
            }
            $_SESSION["count"]=$count;
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if($count==1){
        ?>
        첫 방문 입니다.<br>
        <?php
            }    else{
        ?>
          당신의 방문은 <?=$count?>번 째 입니다.
        <?php
            }
        ?>
    </body>
</html>
