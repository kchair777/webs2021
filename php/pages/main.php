<?php
    include'../connect/connect.php';
    include'../connect/session.php';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Site</title>

    <!-- meta -->
    <?php
        include "../component/meta.php";
    ?>

</head>
<body>

    <!-- skip -->
    <div id="skip">
        <a href="#mainCont">콘텐츠 바로가기</a>
    </div>
    <!-- //skip -->

    <!-- header -->
    <header id="header">
        <div class="port">
            <a href="portfolio.html">Port</a>
        </div>
        <div class="logo">
            <a href="main.php">Kim_Yejin</a>
        </div>
        <div class="nav">
            <ul>
            <?php   if(isset($_SESSION['mymemberID'])){ ?>
                    <li class="line"><?=$_SESSION['youNickName']?>님 환영합니다.</li>
                    <li><a href="../sign/logOut.php">로그아웃</a></li>
            <?php   }else{ ?>
                    <li><a href="../sign/signUp.php">회원가입</a></li>
                    <li><a href="../sign/login.php">로그인</a></li>
            <?php    }  ?>
            
                <li><a href="../board/writeBoard.php">글쓰기</a></li>
                <li><a href="../board/board.php">게시판</a></li>
            </ul>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Reference</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Script</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>
    <!-- //header -->

    <!-- main -->
    <main id="main">
        <section id="mainCont">
            <div class="main-cont">
                <div class="main-text">
                    <div>we provide</div>
                    <div>visual coding</div>
                    <div>solutions</div>
                    <div>for you webs</div>
<!-- <?php
    echo "<pre>";
    var_dump($_SESSION);
    echo "<pre>";
?> -->
                </div>
            </div>
        </section>
    </main>
    <!-- //main -->

    <!-- footer -->
    <footer id="footer">
        <div class="footer-info">
            <div class="email">
                <h3>Email</h3>
                <p>webstoryboy@naver.com</p>
            </div>
            <div class="kakao">
                <h3>Kakao</h3>
                <p>websupids</p>
            </div>
            <div class="social">
                <h3>Social</h3>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Instargram</a></li>
                <li><a href="#">Github</a></li>
                <li><a href="#">Reference</a></li>
                <li><a href="#">Tutorial</a></li>
                <li><a href="#">Animation</a></li>
            </div>
        </div>
    </footer>
    <!-- //footer -->


</body>
</html>