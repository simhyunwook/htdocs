<?php//웹에서 써서 PHP로 보내기
include 'kccdb.php';
$search='%'.$_POST['search'].'%';
//print $search;
$sql="select * from membe where last_name like :last_name or first_name like :first_name";
$stmh=$pdo->prepare($sql);
$stmh->bindValue(':last_name',$search,PDO::PARAM_STR);
$stmh->bindvalue(':first_name',$search,PDO::PARAM_STR);
$stmh->execute();
$count=$stmh->rowCount();
print $count."건 입니다";
?>