<?php//웹에서 써서 PHP로 보내기
$search='%'.$_POST['search'].'%';
include 'kccdb.php';
$SQL="select * from membe where last_name like:last_name or first_name like:first_name";
$stmh=$pdo->prepare($SQL);
$stmh->bindvalue(':last_name',$search,PDO::PARAM_STR);
$stmh->bindvalue(':first_name',$search,PDO::PARAM_STR);
$stmh->execte();
$count=$stmch->rowcount();
print $count."건 입니다";
?>
