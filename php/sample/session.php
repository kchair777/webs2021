<?php
    session_start();

    // 세션 생성
    $_SESSION['userID'] = "kimyj6419";

    if(isset($_SESSION['userID'])){
        echo "session : 0";
    }else{
        echo "cookie : x";
    }

    // 세션 삭제
    unset($_SESSION['userID']);
?>