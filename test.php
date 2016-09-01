<?php
//	phpinfo();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>오늘은 첫번재 php수업</title>
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
	</ul>
</body>
</html>