<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Site</title>
</head>
<body>
    <!-- skip -->
    <div id="skip">
        <a href="#mainCont">콘텐츠 바로가기</a>
    </div>
    <!-- //skip -->
 
    <!-- meta -->
    <?php
        include "../component/meta.php";
    ?>


    <!-- header -->
    <?php
        include "../component/header.php";
    ?>

    <!-- main -->
    <main id="main">
        <section id="signUpCont">
            <div class="signUp">
                <?php
                    include "../connect/session.php";

                    unset($_SESSION['mymemberID']);
                    unset($_SESSION['youNickName']);

                    echo "<div>로그아웃 되셨습니다.</div><br><a href='../pages/main.php'>메인페이지 이동하기</a>";
                ?>
            </div>
        </section>
    </main>
    <!-- //main -->
</body>
</html>