<DOCTYPE html>
<html lang="ko">
<head>
    <link rel="stylesheet" href="./kcc/kcc.css">
    <meta charset="UTF-8">
    <title>KCC</title>
</head>
<body>
    <div id="wrap">
        <div id="header">
            <div class="log">
                <ul id="wel">
                    <li><a herf="#">justhwoo님 환영합니다</a></li>
                    <li>|</li>
                    <li><a herf="#">회원정보수정</a></li>
                    <li>|</li>
                    <li><a herf="#">채팅룸</a></li>
                    <li>|</li>
                    <li><a herf="#">로그아웃</a></li>
                    <li>|</li>
                    <li><a herf="#">사이트맵</a></li>
                </ul>
                <div id="line"></div>
                <div><img id="img" src="./kcc/kcclogo.png" alt="logo">
                <img id="logo" src="./kcc/Untitled-1.png" alt="logo"></div>
                <div class="intro">
                <ul>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">INTRODUCTION<br/>클럽소개</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">RESERVATION<br/>예약하기</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">COURSE<br/>코스안내</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">FACILITIES<br/>시설안내</a></li>
                    <li><a href="http://cheza.mireene.com/work/kccgolf/sub01.html#">COMMUNITY<br/>커뮤니티</a></li>
                </ul>
                </div>
            </div>
        </div>
        <div id="article">
            <div id="survise">
                <h2>회원서비스</h2>
                <nav>
                    <ul>
                        <li><a herf="#">로그인</a></li>
                        <li><a herf="#">회원가입 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ></a></li>
                        <li><a herf="#">아이디/비밀번호찾기</a></li>
                        <li><a herf="#">회원정보 수정</a></li>
                        <li><a herf="#">개인정보 취급방침</a></li>
                    </ul>
                </nav>
            </div>
            <div id="joinbox">
            <div id="join">
            <h4>홈 &nbsp; >&nbsp; 회원서비스&nbsp; > &nbsp;회원가입 <br/> &nbsp;</h4>
            <h1>회원가입</h1>
            <h5>다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</h5>
            <ul>
                <li>약관동의</li>
                <li>></li>
                <li>본인인증</li>
                <li>></li>
                <li>회원정보입력</li>
                <li>></li>
                <li>가입완료</li>
            </ul>
            </div>
            <div id="in">
                <h5><span id="s">상세정보 입력</span> &nbsp;<span class="star">*</span>표시는 필수입력 항목입니다.</h5>
            </div>
            <div id="put">
             <table class="table">
                   <form action="kcc_insert.php" method="post">
                    <tr>
                        <td>한글이름&nbsp;<span class="star">*</span></td>
                        <td><input type="text" name=korea_name></td>
                    </tr>
                    <tr>
                        <td>영문이름</td>
                        <td><input type="text" style="margin-left:12px;" name="english_name"></td>
                    </tr>
                    <tr>
                        <td>생년월일&nbsp;<span class="star">*</span></td>
                        <td><select name="year" class="year">
                            <?php
                                    for($i=1917;$i<2017;$i++)
                                {
                                    print "<option value=".$i.">".$i."</option>";
                                }
                            ?>
                        </select>&nbsp;년</td>
                        <td><select name="month" class="mot">
                            <?php
                                    for($i=1;$i<13;$i++)
                                {
                                    print "<option value=".$i.">".$i."</option>";
                                }
                            ?>
                        </select>&nbsp;월</td>
                        <td><select name="day" class="day">
                            <?php
                                    for($i=1;$i<32;$i++)
                                {
                                    print "<option value=".$i.">".$i."</option>";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>아이디&nbsp;<span class="star">*</span></td>
                        <td><input type="text" style="margin-left:16px;" name="id"></td>
                        <td><input type="button" value="중복확인"></td>
                        <td><span class="ex">사이트내에서 표시되는 본인정보이며 저장 후 수정하실 수 없습니다.</span></td>
                    </tr>
                    <tr>
                        <td>비밀번호&nbsp;<span class="star">*</span></td>
                        <td><input type="password" name="password"></td>
                        <td><span class="ex">&nbsp; 영문 소문자,숫자 포함 4자리 이상 10자리 이하입니다.</span></td>
                    </tr>
                    <tr>
                        <td>비밀번호 확인&nbsp;<span class="star">*</span></td>
                        <td><input type="password" style="margin-left:-37px;" name="passworkd_check"></td>
                        <td><span class="ex">&nbsp; 비밀번호를 한번 더 입력하세요</span></td>
                    </tr>
                    <tr>
                        <td id="call">전화번호</td>
                        <td><select name="homephone">
                            <option value="1">02</option>
                            <option value="2">031</option>
                            <option value="3">032</option>
                            <option value="4">033</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" style="width:60px;" name="middle_homephone">&nbsp;-</td>
                        <td><input type="text" style="width:60px;" name="last_homephone"></td>
                        <td><span class="ex">&nbsp; 예약시 휴대폰으로 문자가 발송됩니다.</span></td>
                    </tr>
                    <tr>
                        <td id="cellphone">휴대폰번호&nbsp;<span class="star">*</span></td>
                         <td><select name="selphone">
                            <option value="1">010</option>
                            <option value="2">011</option>
                            <option value="3">016</option>
                            <option value="4">017</option>
                            <option value="5">018</option>
                            <option value="6">019</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" style="width:60px;" name="middle_selphone">&nbsp;-</td>
                        <td><input type="text" style="width:60px;" name="last_selphone"></td>
                    </tr>
                    <tr>
                        <td id="sms">SMS 수신여부&nbsp;<span class="star">*</span></td>
                        <td class="ex"><input type="radio" name="sms" value="yes" checked>&nbsp;예</td>
                        <td class="ex"><input type="radio"name="sms" value="no" >&nbsp;아니오</td>
                        <td><span class="ex">회원공지 알림에 대한 수신여부입니다.</span></td>
                    </tr>
                    <tr>
                    <td>E-MAIL</td>
                    <td><input type="text" style="margin-left:26px;" name="E-MAIL"></td>
                    </tr>            
                    <tr>
                        <td id="post">자택 우편번호&nbsp;<span class="star">*</span></td>
                        <td><input type="text" style="width:40px;margin-left:-40px;" name="first_post">&nbsp;-</td>
                        <td><input type="text" style="width:40px;" name="last_post"></td>
                        <td><input type="button" value="우편번호 찾기"></td>
                    </tr>
                    <tr>
                        <td>자택주소&nbsp;<span class="star">*</span></td>
                        <td><input type="text" style="width:300px;"name="home_address1"></td>
                        <td><br/><input type="text" style="width:300px; margin-left:131px;" name=:home_address2></td>
                    </tr>
                    <tr>
                        <td>DM발송처<span class="star">*</span></td>
                        <td class="ex"><input type="radio" name="DM send" value="home" checked>&nbsp;자택</td>
                        <td class="ex"><input type="radio" name="DM send" value="compnay">&nbsp;직장</td>
                    </tr>
                </div>
                <div id="line2"></div>
                <div id="put2">
                        <tr>
                            <td>직장명&nbsp;<span class="star">*</span></td>
                            <td><input type="text" style="margin-left:14px;"name="company_name"></td>
                        </tr>
                        <tr>
                            <td>직종</td>
                            <td><input type="text" style="margin-left:42px;"name="op"></td>
                        </tr>
                        <tr>
                            <td>직위&nbsp;<span class="star">*</span></td>
                            <td><input type="text" style="margin-left:30px;" name="office"></td>
                        </tr>
                        <tr>
                            <td id="workpost">직장 우편번호<span class="star">*</span></td>
                            <td><input type="text" style="width:40px;"name="first_workpost">&nbsp;-</td>
                            <td><input type="text" style="width:40px;"name="last_workpost"></td>
                            <td><input type="button" value="우편번호 찾기"></td>
                        </tr>
                        <tr>
                            <td>직장주소<span class="star">*</span></td>
                            <td><input type="text" style="width:300px; margin-left:4px;"name="work_address1"></td>
                            <td><br/><input type="text" style="width:300px; margin-left:129px;"name="work_address2"></td>
                        </tr>
                        <tr>
                            <td id="number">직장전화번호<span class="star">*</span></td>
                            <td><select name="com_phone">
                            <option value="1">010</option>
                            <option value="2">011</option>
                            <option value="3">016</option>
                            <option value="4">017</option>
                            <option value="5">018</option>
                            <option value="6">019</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" style="width:60px;"name="first_comphone">&nbsp;-</td>
                        <td><input type="text" style="width:60px;"name="second_comphone"></td>
                        </tr>
                        <tr>
                        <td id="fax">팩스번호</td>
                            <td><select name="faxphone">
                            <option value="1">010</option>
                            <option value="2">011</option>
                            <option value="3">016</option>
                            <option value="4">017</option>
                            <option value="5">018</option>
                            <option value="6">019</option>
                        </select>&nbsp;-</td>
                        <td><input type="text" style="width:60px;"name="first_faxphone">&nbsp;-</td>
                        <td><input type="text" style="width:60px;"name="second_faxphone"></td>
                        </tr>
                        <tr>
                            <td id="merry">결혼여부</td>
                            <td class="ex"><input type="radio" name="merry" value="yes" checked>&nbsp;기혼</td>
                            <td class="ex"><input type="radio" name="merry" value="no" >&nbsp;미혼</td>
                        </tr>
                        <tr>
                            <td id="mdate">결혼기념일</td>
                        <td><select name="marryyear" class="year">
                             <?php
                                    for($i=1917;$i<2017;$i++)
                                {
                                    print "<option value=".$i.">".$i."</option>";
                                }
                            ?>
                        </select>&nbsp;년</td>
                        <td><select name="marrymonth" class="mot">
                            <?php
                                    for($i=1;$i<13;$i++)
                                {
                                    print "<option value=".$i.">".$i."</option>";
                                }
                            ?>
                        </select>&nbsp;월</td>
                        <td><select name="marryday" class="day">
                            <?php
                                    for($i=1;$i<32;$i++)
                                {
                                    print "<option value=".$i.">".$i."</option>";
                                }
                            ?>
                            </select>&nbsp;일
                        </td>
                        </tr>
                        </table>
                </div>
                <div id="line3"></div>
                <div id="btn">
                   <a href="#" id="back">취소</a>
                   <button>다음</button>
                </div>
                </div>
                </form>
            </div>
        </div>
        <div id="footer">
            <div class="footer_line"></div>
            <div class="footer_p">
            <h4>회칙 및 이용약관 &nbsp; &nbsp; &nbsp; &nbsp; 개인정보 취급방침 &nbsp; &nbsp; &nbsp; &nbsp; 인트라넷</h4>    
            <h5>(주)금강레져 대표자:조종호&nbsp; <span class="W">|</span>&nbsp; 경기도 여주군 가남면 본두리 1-2&nbsp; <span class="W">|</span>&nbsp; 대표전화: 031-880-6000&nbsp; <span class="W">|</span>&nbsp; 대표전화: 031-884-5155</h5>
            <h5>사업자등록번호: 126-81-0997&nbsp; <span class="W">|</span>&nbsp; 통신판매법 신고 : 2009-경기여주-0058&nbsp; <span class="W">|</span>&nbsp; 개인정보관리책임자 : 윤두환 031-880-6000 <input type="button" value="사업자 정보확인 ▶"></h5>
            <h5>Copyright (c) Kumkang leisure Ltd. All rights reserved</h5>
            </div>
        </div>
    </div>
</body>
</html>