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
                <h2><strong>Kim_Yejin</strong>사이트에 오신걸 환영합니다</h2>
                <form  name="logIn" method="post" action="loginSave.php">     <!-- loginSave으로 파일을 넘김 -->
                <fieldset>
                <legend class="sr-only">로그인 폼입니다</legend>
                    <div>
                        <label for="userEmail" class="sr-only">이메일</label>
                        <input type="email" name="userEmail" id="userEmail" class="input-text" placeholder="이메일을 입력해주세요!" required autofocus>
                    </div>
                    
                   
                    <div>
                        <label for="userPW" class="sr-only">패스워드</label>
                        <input type="password" name="userPW" id="userPW" class="input-text" placeholder="패스워드를 입력해주세요!" required>
                    </div>
                    
                </fieldset>
                    <button class="signup-btn" type="submit" value="로그인">로그인</button>
                    <p class="signDesc">회원가입을 원하면? <a href="signUp.php">회원가입</a></p>
                </form>
            </div>
        </section>
    </main>
    <!-- //main -->
</body>
</html>