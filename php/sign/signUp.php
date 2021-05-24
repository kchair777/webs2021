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
                <form  name="signUp" method="post" action="signUpSave.php">     <!-- signUpSave으로 파일을 넘김 -->
                <fieldset>
                <legend class="sr-only">회원 가입 폼입니다</legend>
                    <div>
                        <label for="userEmail" class="sr-only">이메일</label>
                        <input type="email" name="userEmail" id="userEmail" class="input-text" placeholder="이메일을 입력해주세요!" required autofocus>
                    </div>
                    <div>
                        <label for="userName" class="sr-only">이름</label>
                        <input type="text" name="userName" class="input-text" placeholder="이름을 입력해주세요!" required>
                    </div>
                    <div>
                        <label for="userNickName" class="sr-only">닉네임</label>
                        <input type="text" name="userNickName" id="userNickName" class="input-text" placeholder="사용할 닉네임을 입력해주세요!" required>
                    </div>
                    <div>
                        <label for="userPW" class="sr-only">패스워드</label>
                        <input type="password" name="userPW" id="userPW" class="input-text" placeholder="패스워드를 입력해주세요!" required>
                    </div>
                    <div class="birth">
                        <div>
                            <label for="birthYear">년도</label>
                            <select name="birthYear" id="birthYear" required> <!-- required는 입력하지 않으면 못 넘어가게 해줌 -->
                                <?php
                                    $thisYear = date('Y',time());
                                    for($i = $thisYear; $i >= 1930; $i--){                                        
                                        echo "<option value='{$i}'>{$i}</option>";
                                    }
                                ?>
                            </select>         
                            
                        </div>
                        <div>
                            <label for="birthMonth">월</label>
                            <select name="birthMonth" id="birthMonth" required>
                                <?php                                    
                                    for($i = 1; $i <= 12; $i++){                                        
                                        echo "<option value='{$i}'>{$i}</option>";
                                    }
                                ?>
                            </select>
                            
                        </div>
                        <div>
                            <label for="birthDay">일</label>
                            <select name="birthDay" id="birthDay" required>
                                <?php                                    
                                    for($i = 1; $i <= 31; $i++){                                        
                                        echo "<option value='{$i}'>{$i}</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </fieldset>
                    <button class="signup-btn" type="submit" value="회원가입">회원가입</button>
                    <p class="signDesc">로그인을 원하면? <a href="login.php">로그인</a></p>
                </form>
            </div>
        </section>
    </main>
    <!-- //main -->
</body>
</html>