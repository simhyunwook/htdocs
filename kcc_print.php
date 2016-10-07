<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>viewfile</title>
</head>
<body>
    <?php
    try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=kcc;charset=utf8","root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    }
    catch(PDOEXCEPTION $Exception){
        die("연결실패".$Exception->getMessage());
    }
    //$homen = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$1-$2-$3", $homen);
    $sql = "INSERT INTO member (korea_name,'english_name','year','month','day','id','password','homephone','selphone','sms','home_post') VALUE (:korea_name,:english_name,:year,:month,:day,:id,:password,:homephone,:selphone,:sms,:home_post)";
    $rs = $pdo->prepare($sql);
    $rs->bindValue(':korea_name','$_POST["korea_name"]');
    $rs->bindValue(':english_name','$_POST["english_name"]');
    $rs->bindValue(':year','$_POST["year"]');
    $rs->bindValue(':month','$_POST["month"]');
    $rs->bindValue(':day','$_POST["day"]');
    $rs->bindValue(':id','$_POST["id"]');
    $rs->bindValue(':password','$_POST["password"]');
    $rs->bindValue(':homephone','$_POST["homephone"]');
    $rs->bindValue(':selphone','$_POST["selphone"]');
    $rs->bindValue(':sms','$_POST["sms"]');
    $rs->bindValue(':home_post','$_POST["home_post"]');
    $rs->execute();/* or die("<script>alert('실패')</script>");*/
    print "INSERT 성공";
    //echo $sql."<br>"; 
    echo "이름 : ".$_POST["korea_name"]."<br>";
    echo "name_en : ".$_POST["english_name"]."<br>";
    echo "year : ".$_POST["year"]."<br>";
    echo "월 : ".$_POST["month"]."<br>";
    echo "day : ".$_POST["day"]."<br>";
    echo "id : ".$_POST["id"]."<br>";
    echo "pw : ".$_POST["password"]."<br>";
    echo "tel : ".$_POST["homephone"]."<br>";
    echo "phone : ".$_POST["selphone"]."<br>";
    echo "email : ".$_POST["sms"]."<br>";
    echo "집주소 : ".$_POST["home_post"]."<br>"
    ?>
</body>
</html>