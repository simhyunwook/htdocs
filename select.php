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
        <!--<form action="selectview.php" method="post" name="select">
            <select name="location">
                <option value="" selected>지역을 선택해주세요</option>
                <option value="서울">서울</option>
                <option value="경기">경기</option>
                <option value="부산">부산</option>
                <option value="울산">울산</option>
                <option value="광주">광주</option>
                <option value="인천">인천</option>
            </select>
            <input type="submit" value="송신">
        </form>-->
        <form action="selectview.php" method="post" name="select">
            <select name="location">
                <option value="" selected>태어난 해</option>
                <?php
                    for($i=1917;$i<2017;$i++)
                    {
                        print "<option value=".$i.">".$i."</option>";
                    }
                ?>
            </select>
            <input type="submit" value="송신">
        </form>
        <?php
         
        ?>
    </body>
</html>
