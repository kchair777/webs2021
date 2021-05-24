<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Site | Reference</title>
    <!-- SEO (검색엔진 최적화)-->
    <meta name="author" content="kim">
    <meta name="description" content="포트폴리오를 위한 포트폴리오 사이트입니다">
    <meta name="keywords" content="포트폴리오, 웹표준, 반응형, 퍼블리셔, 프론트엔드개발자">
    <meta name="robots" content="all">
    <!-- facebook -->
    <meta property="og:url" content="http://kimyj6419.dothome.co.kr/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="React Portfolio App">
    <meta property="og:description" content="리액트 포트폴리오 사이트입니다.">
    <meta property="og:image" content="../assets/icon/main.png">
    <!-- twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Portfolio Site">
    <meta name="twitter:url" content="http://kimyj6419.dothome.co.kr/">
    <meta name="twitter:image" content="../assets/icon/main.png">
    <meta name="twitter:description" content="리액트 포트폴리오 사이트입니다.">
    <!-- 아이콘 -->
    <link rel="icon" href="../assets/icon/icon_256.png" />
    <link rel="apple-touch-icon" href="../assets/icon/icon_256.png" />
    <link rel="shortcut icon" href="../assets/icon/icon_256.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/icon/icon_192.png">
    <link rel="icon" type="image/png" sizes="256x256" href="../assets/icon/icon_256.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/icon/icon_16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/icon/icon_32.png">
    <!-- CSS style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Wep style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


</head>
<body>
    <!-- skip -->
    <div id="skip">
        <a href="#main">콘텐츠 바로가기</a>
    </div>
    <!-- //skip -->

    <!-- header -->
    <header id="header" class="light">
        <div class="port">
            <a href="portfolio.html">Port</a>
        </div>
        <div class="logo">
            <a href="main.html">wepstoryboy</a>
        </div>
        <div class="nav">
            <ul>
            <?php
                if(isset($_SESSION['userID']))
            ?>
                <li><a href="#">회원가입</a></li>
                <li><a href="login.html">로그인</a></li>
                <li><a href="#">게시판</a></li>
            </ul>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="reference.html">Reference</a></li>
                <li><a href="youtube.html">Youtube</a></li>
                <li><a href="script.html">Script</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- //header -->


    <!-- main -->
    <main>
        <section id="referCont">
            <div class="container">
                <div class="main-title">
                    <h1><strong>Reference</strong> <em>book</em></h1>
                </div>
                <div class="refer-cont">
                    <h2>CSS REFERENCE </h2>
                    <div class="refer-table">
                        <table>
                            <colgroup>
                                <col style="width: 10%;">
                                <col style="width: 20%;">
                                <col style="width: 70%;">
                            </colgroup>
                            <tr>
                                <td>A</td>
                                <td><a href="#">all</a></td>
                                <td>all 속성은 요소의 속성을 초기화 또는 상속을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">align-content</a></td>
                                <td>align-content 속성은 콘텐츠의 상하관계 정렬 상태를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">align-items</a></td>
                                <td>align-items 속성은 콘텐츠 내부의 정렬 상태를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">align-self</a></td>
                                <td>align-self 속성은 콘텐츠 요소의 정렬 상태를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">animation</a></td>
                                <td>animation 속성은 애니메이션을 설정합니다. 컨텐츠 요소를 움직이게 할 수 있고, 움직이는 시간, 방향, 상태 등 여러가지 속성을 설정할 수 있습니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">animation-delay</a></td>
                                <td>animation-delay 속성은 요소가 로드된 후 애니메이션이 시작될 때 까지의 시간을 나타냅니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">animation-direction</a></td>
                                <td>animation-direction 속성은 애니메이션 움직임 방향을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">animation-duration</a></td>
                                <td>animation-duration 속성은 애니메이션 움직임 시간을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">animation-fill-mode</a></td>
                                <td>animation-fill-mode 속성은 애니메이션이 끝난 후의 상태를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">animation-iteration-count</a></td>
                                <td>animation-iteration-count 속성은 애니메이션 반복 횟수 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">animation-name</a></td>
                                <td>animation-name 속성은 애니메이션 keyframe 이름을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">animation-play-state</a></td>
                                <td>animation-play-state 속성은 애니메이션 진행상태를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">animation-timing-function</a></td>
                                <td>animation-timing-function 속성은 움직임의 속도를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td>B</td>
                                <td><a href="#">backface-visibility</a></td>
                                <td>backface-visibility 속성은 요소의 뒷면을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background</a></td>
                                <td>background 속성은 단축 속성으로 하나의 선언으로 배경 속성 값을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background</a></td>
                                <td>background 속성은 단축 속성으로 하나의 선언으로 배경 속성 값을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background-attachment</a></td>
                                <td>background-attachment 속성은 배경이미지의 고정여부를 설정하기 위한 속성입니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background-blend-mode</a></td>
                                <td>background-blend-mode 속성은 각 배경 레이어의 혼합 모드를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background-clip</a></td>
                                <td>background-clip 속성은 요소의 배경이 테두리, 안쪽 여백, 콘텐츠 상자 중 어디까지 차지할 지 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background-color</a></td>
                                <td>background-color 속성은 요소의 배경 색을 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background-image</a></td>
                                <td>background-image 속성은 요소의 배경 이미지를 한 개나 여러 개 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background-origin</a></td>
                                <td>background-origin 속성은 배경 이미지의 위치를 어디서부터 시작할지 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background-position</a></td>
                                <td>background-position 속성은 백그라운드 이미지의 위치 영역을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background-repeat</a></td>
                                <td>background-repeat 속성은 백그라운드 이미지 반복여부를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">background-size</a></td>
                                <td>background-size 속성은 백그라운드 이미지 사이즈를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border</a></td>
                                <td>border 속성은 테두리 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-bottom</a></td>
                                <td>border-bottom 속성은 테두리 아래쪽 테두리 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-bottom-color</a></td>
                                <td>border-bottom-color 속성은 테두리 아래쪽 색 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-bottom-left-radius</a></td>
                                <td>border-bottom-left-radius 속성은 아래부분 왼쪽 모서리 굴곡을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-bottom-right-radius</a></td>
                                <td>border-bottom-right-radius 속성은 아래부분 오른쪽 모서리 굴곡을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-bottom-style</a></td>
                                <td>border-bottom-style 속성은 아래쪽 테두리 스타일 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-bottom-width</a></td>
                                <td>border-bottom-width 속성은 아래쪽 테두리 두께 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-collapse</a></td>
                                <td>border-collapse 속성은 테이블의 테두리 분리여부를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-color</a></td>
                                <td>border-color 속성은 테두리 색 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-image</a></td>
                                <td>border-image 속성은 테두리 이미지 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-image-outset</a></td>
                                <td>border-image-outset 속성은 테두리 이미지 간격 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-image-repeat</a></td>
                                <td>border-image-repeat 속성은 테두리 이미지 반복 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-image-slice</a></td>
                                <td>border-image-slice 속성은 테두리 이미지 크기 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-image-source</a></td>
                                <td>border-image-source 속성은 테두리 이미지 경로 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-image-width</a></td>
                                <td>border-image-width 속성은 테두리 이미지 두께 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-left</a></td>
                                <td>border-left 속성은 왼쪽 테두리 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-left-color</a></td>
                                <td>border-left-color 속성은 왼쪽 테두리 색 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-left-style</a></td>
                                <td>border-left-style 속성은 왼쪽 테두리 스타일 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-left-width</a></td>
                                <td>border-left-width 속성은 왼쪽 테두리 두께 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-radius</a></td>
                                <td>border-radius 속성은 모서리 굴곡을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-right</a></td>
                                <td>border-right 속성은 오른쪽 테두리 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-right-color</a></td>
                                <td>border-right-color 속성은 오른쪽 테두리 색 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-right-style</a></td>
                                <td>border-right-style 속성은 오른쪽 테두리 스타일 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-right-width</a></td>
                                <td>border-right-width 속성은 오른쪽 테두리 두께 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-spacing</a></td>
                                <td>border-spacing 속성은 테이블의 테두리 간격을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-style</a></td>
                                <td>border-style 속성은 테두리 스타일 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-top</a></td>
                                <td>border-top 속성은 위쪽 테두리 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-top-color</a></td>
                                <td>border-top-color 속성은 위쪽 테두리 색 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-top-left-radius</a></td>
                                <td>border-top-left-radius 속성은 윗부분 왼쪽 모서리 굴곡을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-top-right-radius</a></td>
                                <td>border-top-right-radius 속성은 윗부분 오른쪽 모서리 굴곡을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-top-style</a></td>
                                <td>border-top-style 속성은 위쪽 테두리 스타일 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-top-width</a></td>
                                <td>border-top-width 속성은 위쪽 테두리 두께 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">border-width</a></td>
                                <td>border-width 속성은 테두리 두께 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">bottom</a></td>
                                <td>bottom 속성은 위치 요소의 아래쪽 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">box-decoration-break</a></td>
                                <td>box-decoration-break 속성은 컬럼 및 줄바꿈시 테두리와 패딩의 방식을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">box-shadow</a></td>
                                <td>box-shadow 속성은 박스 요소의 그림자를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">box-sizing</a></td>
                                <td>box-sizing 속성은 크기 및 높이 여부의 포함을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td>C</td>
                                <td><a href="#">caption-side</a></td>
                                <td>caption-side 속성은 caption의 위치를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">caret-color</a></td>
                                <td>caret-color 속성은 input의 커서 색을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">clear</a></td>
                                <td>clear 속성은 float 요소의 성질을 차단합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">clip</a></td>
                                <td>clip 속성은 절대 요소의 위치 값을 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">color</a></td>
                                <td>color 속성은 글씨 색을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">column-count</a></td>
                                <td>column-count 속성은 컬럼의 수를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">column-fill</a></td>
                                <td>column-fill 속성은 열의 지정방법을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">column-gap</a></td>
                                <td>column-gap 속성은 컬럼의 간격을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">column-rule</a></td>
                                <td>column-rule 속성은 컬럼 라인의 가로값, 스타일, 컬러를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">column-rule-color</a></td>
                                <td>column-rule-color 속성은 컬럼의 라인 색을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">column-rule-style</a></td>
                                <td>column-rule-style 속성은 컬럼 라인의 스타일을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">column-rule-width</a></td>
                                <td>column-rule-width 속성은 컬럼 라인의 가로값을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">column-span</a></td>
                                <td>column-span 속성은 열의 속성을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">column-width</a></td>
                                <td>column-width 속성은 컬럼의 가로 값을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">columns</a></td>
                                <td>columns 속성은 열의 폭과 열의 수를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">content</a></td>
                                <td>content 속성은 콘텐츠 내용을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">counter-increment</a></td>
                                <td>counter-increment 속성은 콘텐츠의 순서 상태를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">counter-reset</a></td>
                                <td>counter-reset 속성은 콘텐츠의 숫자를 초기화합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">cursor</a></td>
                                <td>cursor 속성은 마우스 오버시 마우스 포인터를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td>D</td>
                                <td><a href="#">direction</a></td>
                                <td>direction 속성은 문장의 방향을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">display</a></td>
                                <td>display 속성은 요소의 성질을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td>E</td>
                                <td><a href="#">empty-cells</a></td>
                                <td>empty-cells 속성은 테이블의 빈요소의 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td>F</td>
                                <td><a href="#">filter</a></td>
                                <td>filter 속성은 이미지의 비쥬얼 효과를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">flex</a></td>
                                <td>flex 속성은 콘텐츠의 성질을 flex로 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">flex-basis</a></td>
                                <td>flex-basis 속성은 요소의 기본 단위를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">flex-direction</a></td>
                                <td>flex-direction 속성은 요소의 정렬 방향을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">flex-flow</a></td>
                                <td>flex-flow 속성은 요소의 정렬 방향과 줄 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">flex-grow</a></td>
                                <td>flex-grow 속성은 요소의 크기를 숫자를 통해 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">flex-shrink</a></td>
                                <td>flex-shrink 속성은 요소의 크기를 숫자를 통해 줄여줍니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">flex-wrap</a></td>
                                <td>flex-wrap 속성은 요소의 줄 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">float</a></td>
                                <td>float 속성은 블록요소의 정렬 상태를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">font</a></td>
                                <td>font 속성은 폰트에 관한 설정을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">font-family</a></td>
                                <td>font-family 속성은 폰트 종류를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">font-size</a></td>
                                <td>font-size 속성은 폰트 사이즈 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">font-size-adjust</a></td>
                                <td>font-size-adjust 속성은 소문자를 기준으로 폰트 크기를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">font-stretch</a></td>
                                <td>font-stretch 속성은 폰트의 굵기를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">font-style</a></td>
                                <td>font-style 속성은 폰트의 스타일을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">font-variant</a></td>
                                <td>font-variant 속성은 글꼴의 변형을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">font-weight</a></td>
                                <td>font-weight 속성은 폰트의 두께를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td>G</td>
                                <td><a href="#">grid</a></td>
                                <td>grid 속성은 그리드 레이아웃을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-area</a></td>
                                <td>grid-area 속성은 그리드의 크기와 위치를 결정합니다</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-auto-columns</a></td>
                                <td>grid-auto-columns 속성은 내재적 생성 그리드 컬럼의 크기를 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-auto-flow</a></td>
                                <td>grid-auto-flow 속성은 배치하지 않은 아이템을 어떤 방식의 '자동 배치 알고리즘'으로 처리할지 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-auto-rows</a></td>
                                <td>암시적 행의 크기를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-column</a></td>
                                <td>grid-column 속성은 grid-column-start와 grid-column-end 속성을 같이 사용합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-column-end</a></td>
                                <td>grid-column-end 속성은 그리드 칼럼 내의 격자 항목의 종료 위치를 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-column-gap</a></td>
                                <td>grid-column-gap 속성은 각 열과 열의 간격을 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-column-start</a></td>
                                <td>grid-column-start 속성은 그리드 항목의 시작 위치를 지정합니다</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-gap</a></td>
                                <td>grid-gap 속성은 grid-row-gap와 grid-column-gap 속성을 같이 사용합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-row</a></td>
                                <td>grid-row 속성은 grid-row-start와 grid-row-end 속성을 같이 사용합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-row-end</a></td>
                                <td>grid-row-end 속성은 그리드 행 내의 격자 항목의 종료 위치를 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-row-gap</a></td>
                                <td>grid-row-gap 속성은 각 행과 행 사이의 간격을 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-row-start</a></td>
                                <td>grid-row-start속성은 그리드 행 내의 격자 항목의 시작 위치를 지정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-template</a></td>
                                <td>grid-template 속성은 grid-template-row, grid-template-columns, grid-template-aeas의 단축 속성입니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-template-areas</a></td>
                                <td>grid-template-areas 속성은 아이템의 위치를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-template-columns</a></td>
                                <td>grid-template-columns 속성은 열의 크기를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">grid-template-rows</a></td>
                                <td>grid-template-rows 속성은 그리드 행의 크기 조정 기능을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td>H</td>
                                <td><a href="#">hanging-punctuation</a></td>
                                <td>hanging-punctuation 속성은 글씨의 시작 및 끝의 위치 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">height</a></td>
                                <td>height 속성은 콘텐츠 요소의 세로값을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">hyphens</a></td>
                                <td>hyphens 속성은 텍스트의 하이픈 영역을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td>I</td>
                                <td><a href="#">isolation</a></td>
                                <td>isolation 속성은 stacking context을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td>J</td>
                                <td><a href="#">justify-content</a></td>
                                <td>justify-content 속성은 콘텐츠의 좌우 관계 정렬 상태를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td><a href="#">left</a></td>
                                <td>left 속성은 위치 요소의 왼쪽 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">letter-spacing</a></td>
                                <td>letter-spacing 속성은 글자 사이의 간격을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">line-height</a></td>
                                <td>line-height 속성은 문장과 문장 사이의 간격을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">list-style</a></td>
                                <td>list-style 속성은 목록 스타일 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">list-style-image</a></td>
                                <td>list-style-image 속성은 목록 마커의 이미지를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">list-style-position</a></td>
                                <td>list-style-position 속성은 목록 마커의 위치 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">list-style-type</a></td>
                                <td>list-style-type 속성은 목록 마커의 유형을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td>M</td>
                                <td><a href="#">margin</a></td>
                                <td>margin 속성은 요소의 바같쪽 여백을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">margin-bottom</a></td>
                                <td>margin-bottom 속성은 요소의 아래 바같쪽 여백을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">margin-left</a></td>
                                <td>margin-left 속성은 요소의 왼쪽 바같쪽 여백을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">margin-right</a></td>
                                <td>margin-right 속성은 요소의 오른쪽 바같쪽 여백을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">margin-top</a></td>
                                <td>margin-top 속성은 요소의 위부분 바같쪽 여백을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">max-height</a></td>
                                <td>max-height 속성은 요소의 최대 세로값을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">max-width</a></td>
                                <td>max-width 속성은 요소의 최대 가로 값을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">min-height</a></td>
                                <td>min-height 속성은 요소의 최소 세로 값을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">min-width</a></td>
                                <td>min-width 속성은 요소의 최소 가로 값을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">mix-blend-mode</a></td>
                                <td>mix-blend-mode 속성은 배경의 혼합 상태를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td>O</td>
                                <td><a href="#">object-fit</a></td>
                                <td>object-fit 속성은 &lt;img&gt;, &lt;video&gt; 태그의 크기를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="">object-position</a></td>
                                <td>object-position 속성은 &lt;img&gt;, &lt;video&gt; 태그의 위치를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">opacity</a></td>
                                <td>opacity 속성은 요소의 투명도를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">order</a></td>
                                <td>order 속성은 flex 콘텐츠의 순서를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">outline</a></td>
                                <td>outline 속성은 아웃라인의 색, 스타일, 두께를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">outline-color</a></td>
                                <td>outline-color 속성은 아웃라인의 색을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">outline-offset</a></td>
                                <td>outline-offset 속성은 아웃라인의 간격을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">outline-style</a></td>
                                <td>outline-style 속성은 아웃라인 스타일을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">outline-width</a></td>
                                <td>outline-width 속성은 아웃라인의 두께를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">overflow</a></td>
                                <td>overflow 속성은 지정한 영역에 요소들이 벗어났을 때 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">overflow-x</a></td>
                                <td>overflow-x 속성은 X축을 기준으로 지정한 영역에 요소들이 벗어났을 때 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">overflow-y</a></td>
                                <td>overflow-y 속성은 Y축을 기준으로 지정한 영역에 요소들이 벗어났을 때 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td>P</td>
                                <td><a href="#">padding</a></td>
                                <td>padding 속성은 요소의 안쪽 여백을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">padding-bottom</a></td>
                                <td>padding-bottom 속성은 요소의 아래쪽 여백을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">padding-left</a></td>
                                <td>padding-left 속성은 요소의 왼쪽 여백을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">padding-right</a></td>
                                <td>padding-right 속성은 요소의 오른쪽 여백을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">padding-top</a></td>
                                <td>padding-top 속성은 요소의 위쪽 여백을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">page-break-after</a></td>
                                <td>page-break-after 속성은 페이지 인쇄시 분리에 관한 설정을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">page-break-before</a></td>
                                <td>page-break-before 속성은 인쇄시 페이지 분리에 관한 설정을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">page-break-inside</a></td>
                                <td>page-break-inside 속성은 인쇄시 페이지 분리에 관한 설정을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">perspective</a></td>
                                <td>perspective 속성은 3D를 표현할 때 원근점을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">perspective-origin</a></td>
                                <td>perspective-origin 속성은 3D를 표현할 때 원근점의 방향을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">pointer-events</a></td>
                                <td>pointer-events 속성은 포인터 이벤트 반응을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">position</a></td>
                                <td>position 속성은 요소의 위치를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td>Q</td>
                                <td><a href="#">quotes</a></td>
                                <td>quotes 속성은 인용 부호를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td>R</td>
                                <td><a href="#">resize</a></td>
                                <td>resize 속성은 요소의 사이즈를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">right</a></td>
                                <td>right 속성은 위치 요소의 오른쪽 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td>T</td>
                                <td><a href="#">tab-size</a></td>
                                <td>tab-size 속성은 글씨의 간격을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">table-layout</a></td>
                                <td>table-layout 속성은 표의 레이아웃 크기를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-align</a></td>
                                <td>text-align 속성은 텍스트 정렬 방식을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-align-last</a></td>
                                <td>text-align-last 속성은 문장의 마지막 텍스트 정렬 방식을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-decoration</a></td>
                                <td>text-decoration 속성은 글자 라인 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-decoration-color</a></td>
                                <td>text-decoration-color 속성은 글자 라인 색을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-decoration-line</a></td>
                                <td>text-decoration-line 속성은 글자 라인 스타일을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-decoration-style</a></td>
                                <td>text-decoration-style 속성은 글자 스타일을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-indent</a></td>
                                <td>text-indent 속성은 문단 들여쓰기 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-justify</a></td>
                                <td>text-justify 속성은 텍스트의 간격을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-overflow</a></td>
                                <td>text-overflow 속성은 문자열 영역 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-shadow</a></td>
                                <td>text-shadow 속성은 텍스트에 그림자를 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">text-transform</a></td>
                                <td>text-transform 속성은 텍스트를 대문자나 소문자로 변경합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">top</a></td>
                                <td>top 속성은 위치 요소의 위쪽 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">transform</a></td>
                                <td>transform 속성은 컨텐츠 요소를 이동(translate), 회전(rotate), 확대(scale), 기울기(skew) 등의 효과를 줄 수 있습니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">transform-origin</a></td>
                                <td>transform-origin 속성은 요소의 움직임 방향 및 기준점을 설정합니다. transform 속성과 같이 설정하며 기준점에 따라 애니메이션의 방향을 설정 할 수 있습니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">transform-style</a></td>
                                <td>transform-style 속성은 요소의 움직임 스타일을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">transition</a></td>
                                <td>transition 속성은 요소의 움직임을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">transition-delay</a></td>
                                <td>transition-delay 속성은 요소의 움직임 시간을 지연합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">transition-duration</a></td>
                                <td>transition-duration 속성은 요소의 움직임 지속시간을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">transition-property</a></td>
                                <td>transition-property 속성은 transition의 적용 여부를 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">transition-timing-function</a></td>
                                <td>transition-timing-function 속성은 요소의 움직임 기능을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td>U</td>
                                <td><a href="#">unicode-bidi</a></td>
                                <td>unicode-bidi 속성은 글자의 방향 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">user-select</a></td>
                                <td>user-select 속성은 요소의 텍스트를 선택할 지 정의합니다.</td>
                            </tr>
                            <tr>
                                <td>V</td>
                                <td><a href="#">vertical-align</a></td>
                                <td>vertical-align 속성은 텍스트의 상하 정렬 방식을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">visibility</a></td>
                                <td>visibility 속성은 요소를 보이지 않게 정의합니다.</td>
                            </tr>
                            <tr>
                                <td>W</td>
                                <td><a href="#">white-space</a></td>
                                <td>white-space 속성은 줄바꿈, 공백, 줄 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">width</a></td>
                                <td>width 속성은 요소의 가로 값을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">word-break</a></td>
                                <td>word-break 속성은 줄바꿈 속성을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">word-spacing</a></td>
                                <td>word-spacing 속성은 단어 사이의 간격을 정의합니다.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="#">word-wrap</a></td>
                                <td>word-wrap 속성은 줄바꿈을 설정합니다.</td>
                            </tr>
                            <tr>
                                <td>Z</td>
                                <td><a href="#">z-index</a></td>
                                <td>z-index 속성은 요소의 위치가 겹칠 경우 순서를 정의합니다.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>                    
        </section>
    </main>
    <!-- //main -->
    <!-- footer -->
    <footer id="footerContact">
        <div class="footer-contact">
            <p>Let’s create something new</p>
            <h3>LET`S GET IN<br>TOUCH</h3>
            <a href="contact.html" class="contact">Contact Me</a>
        </div>
    </footer>
    <!-- //footer -->

</body>
</html>