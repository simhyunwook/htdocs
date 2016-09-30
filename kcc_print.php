<?php
    include 'kcc_db.php';
    $sql="SELECT * FROM member order by itdx desc"
    $resurt=$pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        while($row=$result->fetch());{
    ?>
    <div class="wrap">
        <?php
            echo "이름: ".$row['korea_name']."<br/n>";
            echo "영어이름: ".$row['english_name']."<br/n>";
            echo "생일".$row['year']."년";
            echo " ".$row['month']."월";
            echo " ".$row['day']."일"."<br/n>";
            echo "아이디".$row['id']."<br/n>";
            echo "비밀번호".$row['password']."<br/n>";
            echo "집전화".$row['homephone'];
            echo " ".$row['middle_homephone'];
            echo " ".$row['last_homephone']."<br/n>";
            echo "전화번호".$row['selphone'].
            echo " ".$row['middle_selphone'].
            echo " ".$row['last_selphone']."<br/n>";
            echo "sms 동의".$row['sms']."<br/n>";
            echo "주소".$row['first_post'];
            echo "-".$row['last_post']."<br/n>";
            echo "상세주소".$row['home_address1'];
            echo "".$row['home_address2']."<br/n>";
            echo "DM 동의".$row['DM send']."<br/n>";
            echo "회사 이름".$row['company_name']."<br/n>";
            echo "직종".$row['op']."<br/n>";
            echo "직위".$row['office']."<br/n>";
            echo "회사 주소".$row['first_workpost'];
            echo "".$row['second_sorkpost']."<br/n>";
            echo "회사 상세주소".$row['work_address1'];
            echo "".$row['work_address2']."<br/n>";
            echo "회사 전화번호".$row['comphone'];
            echo "-".$row['middle_comphone'];
            echo "-".$row['last_comphone']."<br/n>";
            echo "팩스번호".$row['faxphone'];
            echo "-".$row['middle_faxphone'];
            echo "-".$row['last_faxphone']."<br/n>";
            echo "결혼 여부".$row['marry']."<br/n>";
            echo "결혼 기념일".$row['marryyear']."년";
            echo " ".$row['marrymonth']."월";
            echo " ".$row['marryday']."일"."<br/n>";
        ?>
    </div>
</body>
</html>