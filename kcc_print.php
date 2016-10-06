<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>viewfile</title>
</head>
<body>
    <?php
    $db = new PDO("mysql:host=127.0.0.1;dbname=kcc;charset=utf8", "root", "");
    //$homen = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$1-$2-$3", $homen);
    $sql = "INSERT INTO member SET
        korea_name=?,
        english_name=?,
        year=?,
        month=?,
        day=?,
        id=?,
        password=?,
        homephone=?,
        selphone=?,
        sms=?,
        home_post=?,
        home_address1=?";
    $rs = $db->prepare($sql);
    $rs->execute([
        $_POST["korea_name"],
        $_POST["english_name"],
        $_POST["year"],
        $_POST["month"],
        $_POST["day"],
        $_POST["id"],
        $_POST["password"],
        $_POST["homephone"],
        $_POST["middle_homephone"],
        $_POST["last_homephone"],
        $_POST["selphone"],
        $_POST["middle_selphone"],
        $_POST["last_selphone"],
        $_POST["sms"],
        $_POST["home_post"],
        $_POST["home_address1"]."-".$_POST["home_address"],  
    ]);/* or die("<script>alert('실패')</script>");*/
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
    ?>
</body>
</html>