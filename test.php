<?php
//	phpinfo();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>오늘은 첫번재 php수업</title>
	<style>p{color:red};</style>
</head>
<body>
	<ul>
		<li>1번</li>
		<li>2번</li>
		<?php
			print"안녕 나는 오늘 기분이 별로 안좋으니깐 조심해 경식아";
		?>
		<li>3번째 예제<?php
			print PHP_VERSION."<br>";
			print PHP_OS."<br>";
			define("HELLO","안녕하세요");
			print HELLO."<br>";
			define("_18","신발");
			print _18."<br>";
			print __DIR__."<br>";
		?>
		</li>
		
		<li>4번</li>
		<?php
			$data="안녕하세요!!";
			$data1=1;
			print $data."<br>";
			print $data1; // 자동으로 타입 변환됩니다.
			$week[]="월";
			$week[]="화";
			//
			$week[0]="월";
			$week[1]="화";
			print $week[0];
			print $week[1];
			//array 함수 사용하기
			$month=array(1,2,3,4,5,6,7,8,9,"월","월월");
			//php 5.4 이상 배열 []사용 가능
			$year=[2016,2017];
			//배열 초기화
			$month=array();
			//연관배열
			$member["name"]="심현욱";
			$member["age"]=18;
			$member["height"]=176;
			print $member["age"];
			print "<pre>";
			print_r ($member);
		
			
		?>
	</ul><p>
	<?php
	//for문
			for($i=1;$i<10;$i++)
			{
				print $i."회째의 반복입니다."."<br>";
			}
			for($i=1;$i<10;$i++)
			{
				for($j=1;$j<10;$j++)
				{
					print $i." * ".$j." = ".$i*$j."<br>";
				}
			}
	?></p>
</body>
</html>