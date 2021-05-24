<?php
    include '../connect/connect.php';
    include '../connect/session.php';
    // include '../connect/checkSession.php';
?>

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

    <!-- 
        1. 게시판 테이블 만들기
        2. 게시판 등록 페이지(writeBoard.php)
        3. 게시판 데이터 저장 페이지(saveBoard.php)
        4. 게시판 데이터 불러오기 페이지(board.php)
     -->

    <!-- main -->
    <main id="main">
        <section id="boardCont">
            <div class="container">
                <div class="listBoard">
                    <h2>검색한 결과입니다.</h2>
                    <div class="listSearch">
                        <a href="board.php" class="form-btn black">목록보기</a>
                    </div>
                    <div class="listTable">
                        <table class="table">
                            <colgroup>
                                <col style="width: 10%">
                                <col style="width: 65%">
                                <col style="width: 10%">
                                <col style="width: 15%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>등록자</th>
                                    <th>등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                               
<?php
    $searchKeyword = $dbConnect -> real_escape_string($_POST['searchKeyword']);
    $searchOption = $dbConnect -> real_escape_string($_POST['searchOption']);

    if($searchKeyword == ''|| $searchKeyword == null){
        echo "검색한 단어가 없습니다.";
        exit;
    }
    switch($searchOption){
        case 'title':
        case 'content':
        case 'titAcont':
        case 'titOcont':
            break;
        default :
            echo "검색 옵션을 선택해주세요";
            exit;
            break;
    }
?>




                            </tbody>
                        </table>
                    </div>
                    <!-- header -->
                    <?php
                        include 'pagination.php'
                    
                    ?>
                    <!-- //header -->
                </div>
            </div>
   
        </section>
    </main>
    <!-- //main -->
</body>
</html>