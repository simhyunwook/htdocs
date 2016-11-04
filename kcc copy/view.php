<?php
    include_once 'subdb.php';
    $sql='select * from board';
    $stmh=$pdo->prepare($sql);
    $stmh->execute();
    $result=$stmh->fetch();
?>
<?php
include "./lib.php";      // db 접속
mysql_query(" update ABCDE set column1='xyz' where no='3' ");    // 쿼리실행
?>
<?php
include "./lib.php";      // db 접속
mysql_query(" delete from ABCDE where no='3' ");    // 쿼리실행
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./KCC 금강컨트리클럽_files/kcc.css">
    <link rel="stylesheet" type="text/css" href="./KCC 금강컨트리클럽_files/rubyadd.css">
    <link rel="stylesheet" type="text/css" href="./KCC 금강컨트리클럽_files/jquery-ui-1.9.2.min.css">
</head>
<body class="sub">
    <ul id="skip">
<li><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list#site_gnb">주메뉴 바로가기</a></li>
<li><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list#content">본문 바로가기</a></li>
</ul>
<!-- //skip nav -->


<input type="hidden" name="se_id" id="se_id" value="">

<div id="wrap">	
	<!-- header -->
	<!-- [D] 메뉴 open시 class="site_gnb_opn" 추가 -->
	<div id="header" class="">
		<!-- global gnb -->
		<div id="gnb">
			<div class="gnb">
				<h1><a href="#" class="sp_com lg_kcc"><strong class="blind">KCC 금강컨트리클럽 KUMKANG COUNTRY CLUB</strong></a></h1>
				<ul class="gnb_menu">
 				
                                <!-- 로그인전 -->
                <li><a href="#" id="btn_login_t">로그인</a></li>
				<li><a href="#">회원가입</a></li>
                <!-- 로그인전 -->
                <li><a href="#">사이트맵</a></li>
				</ul>
			</div>
		</div>
		<!-- //global gnb -->		
		<!-- site gnb -->
		<div id="site_gnbarea">
			<div id="site_gnb">
				<!-- [D] 해당 메뉴 li에 selected 추가 -->
				<ul class="site_gnblist">
				<li class="m1"><a href="https://www.kccgolf.co.kr/index.php/intro/club" class="sp_com gnb_m1"><span class="blind">Introduction 클럽소개</span></a>
					<ul class="site_sublist">
					<li><a href="https://www.kccgolf.co.kr/index.php/intro/club" class="sp_com gnb_m1_1"><span class="blind">클럽소개</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/intro/history" class="sp_com gnb_m1_2"><span class="blind">연혁</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/intro/info" class="sp_com gnb_m1_3"><span class="blind">이용안내</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/intro/company" class="sp_com gnb_m1_4"><span class="blind">관계사 소개</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/intro/location" class="sp_com gnb_m1_5"><span class="blind">오시는 길</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/intro/contactus" class="sp_com gnb_m1_6 logchk"><span class="blind">Contact Us</span></a></li>
					</ul>
				</li>
				<li class="m2"><a href="https://www.kccgolf.co.kr/index.php/res/reserve" class="sp_com gnb_m2 logchk"><span class="blind">RESERVATION 예약하기</span></a>
					<ul class="site_sublist">
					<li><a href="https://www.kccgolf.co.kr/index.php/res/reserve" class="sp_com gnb_m2_1 logchk"><span class="blind">예약관리</span></a></li>
										<li><a href="https://www.kccgolf.co.kr/index.php/res/use_view" class="sp_com gnb_m2_3 logchk"><span class="blind">이용내역</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/res/break_view" class="sp_com gnb_m2_4 logchk"><span class="blind">위약정보</span></a></li>
					</ul>
				</li>
				<li class="m3"><a href="https://www.kccgolf.co.kr/index.php/course/info" class="sp_com gnb_m3"><span class="blind">COURSE 코스안내</span></a>
					<ul class="site_sublist">
					<li><a href="https://www.kccgolf.co.kr/index.php/course/info" class="sp_com gnb_m3_1"><span class="blind">코스소개</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/course/west01" class="sp_com gnb_m3_2"><span class="blind">서코스</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/course/south01" class="sp_com gnb_m3_4"><span class="blind">남코스</span></a></li>
                    <li><a href="https://www.kccgolf.co.kr/index.php/course/east01" class="sp_com gnb_m3_3"><span class="blind">동코스</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/course/gallery" class="sp_com gnb_m3_5"><span class="blind">코스 갤러리</span></a></li>
					</ul>
				</li>
				<li class="m4"><a href="https://www.kccgolf.co.kr/index.php/facil/clubhouse" class="sp_com gnb_m4"><span class="blind">FACILITIES 시설안내</span></a>
					<ul class="site_sublist">
					<li><a href="https://www.kccgolf.co.kr/index.php/facil/clubhouse" class="sp_com gnb_m4_1"><span class="blind">클럽하우스</span></a></li>
                    <li><a href="https://www.kccgolf.co.kr/index.php/facil/starthouse" class="sp_com gnb_m4_2"><span class="blind">팔각정(스타트하우스)</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/facil/menu" class="sp_com gnb_m4_3"><span class="blind">특선메뉴</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/facil/shadehouse" class="sp_com gnb_m4_4"><span class="blind">그늘집</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/facil/locker" class="sp_com gnb_m4_5"><span class="blind">락커룸</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/facil/proshop" class="sp_com gnb_m4_6"><span class="blind">프로샾</span></a></li>
					</ul>
				</li>
				<li class="m5"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list" class="sp_com gnb_m5"><span class="blind">COMMUNITY 커뮤니티</span></a>
					<ul class="site_sublist">
					<li><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list" class="sp_com gnb_m5_1"><span class="blind">공지사항</span></a></li>
					<li><a href="https://www.kccgolf.co.kr/index.php/commu/down_list" class="sp_com gnb_m5_2"><span class="blind">자료실</span></a></li>
					                    </ul>
				</li>
				</ul>
			</div>
		</div>
		<!-- //site gnb -->
	</div>
	<!-- //header -->
	<div id="content">
		<div class="sub_cont">

        <!-- left메뉴 -->
        
			<div class="cont_l">
				<h2 class="nav_tit"><span class="sp_subtit com_tit">커뮤니티</span></h2>
				<ul class="nav_lst">
                    <li class="selected"><a href="https://www.kccgolf.co.kr/index.php/commu/notice_list">공지사항 <span class="sp_dot ico_arr">&nbsp;</span></a></li>
    				<li><a href="https://www.kccgolf.co.kr/index.php/commu/down_list">자료실 <span class="sp_dot ico_arr">&nbsp;</span></a></li>
    				
                                        
				</ul>
			</div>
        
			<div class="cont_r">
				<div class="loc_area">
					<p class="loc">
						<a href="https://www.kccgolf.co.kr/index.php/main/index">홈</a> <span class="arr">&gt;</span>
						<a href="https://www.kccgolf.co.kr/index.php/commu/notice_list">커뮤니티</a> <span class="arr">&gt;</span>
						<strong>공지사항</strong>
					</p>
				</div>
				<div class="comm_wrap">
					<h3 class="sp_subtit stit_notice">공지사항</h3>
					<p class="stxt">금강컨트리클럽을 이용하시기 불편함 없도록 밝고 건강한 새로운 소식을 회원님께 알려드립니다.</p>
					<table class="not_tb">
					<caption><span class="blind">공지사항 안내</span></caption>
					<colgroup>
					<col style="width:68px">
					<col>
					<col style="width:137px">
					<col style="width:82px">
					</colgroup>
					<thead>
					
					</thead>
					<tbody>
                        
					</tbody>
					</table>
					<div class="view">
                                            번호 : <p><?=$result['idx']?></p>
                                            이름 : <p><?=$result['name']?></p>
                                            제목 : <p><?=$result['title']?></p>
                                            작성일 : <p><?=$result['date']?></p>
                                            조횟수 : <p><?=$result['count']?></p>
                        
                        <a href="./board.php">목록</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- footer -->
	<div id="footer">
		<div class="ft_copy">
			<dl class="policy v2">
			<dt class="blind">KCC 약관 및 정책</dt>
			<dd>
				<a href="https://www.kccgolf.co.kr/index.php/intro/info_04" class="btn_agree">회칙 및 이용약관</a>
				<a href="https://www.kccgolf.co.kr/index.php/intro/info_04_03" class="btn_info"><strong>개인정보 취급방침</strong></a>
				<a href="http://gw.kccgolf.co.kr/kcc_admin/index.asp" target="_blank" class="btn_intranet">인트라넷</a>
			</dd>
			</dl>
			<dl class="kcc_info">
			<dt class="blind">금강 컨트리 클럽</dt>
			<dd>
				<strong class="kcc">(주)금강레저</strong> 대표자: 송충호 <span class="bar">ㅣ</span> 경기도 여주시 가남읍 여주남로 541 <span class="bar">ㅣ</span> 대표전화: 031-880-6000 <span class="bar">ㅣ</span> 팩스: 031-884-5155<br>
				사업자등록번호: 126-81-07997 <span class="bar">ㅣ</span> 통신판매법 신고 : 2009-경기여주-0058 <span class="bar">ㅣ</span> 개인정보관리책임자 : 윤두한 031-880-6000
				<!-- <a href="http://www.ftc.go.kr/info/bizinfo/communicationView.jsp?apv_perm_no=2009411000930200058&area1=&area2=&currpage=1&searchKey=04&searchVal=1268107997&stdate=&enddate=" target="_blank" class="sp_com btn_info"><span class="blind">사업자 정보확인</span></a>-->
                <a href="http://ftc.go.kr/info/bizinfo/communicationList.jsp" target="_blank" class="sp_com btn_info"><span class="blind">사업자 정보확인</span></a>
                
			</dd>
			</dl>
			<address class="copy">
			Copyright (c) KUMGANG LEISURE  Co., Ltd.  All rights reserved
			</address>
		</div>
	</div>
	<!-- //footer-->
</body>
</html>