<?php
    // setcookie('myCookie','cookie',time()+10000,'/');  //  / = root폴더

    // if(isset($_COOKIE['myCookie'])){
    //     echo "cookie : o";
    //     echo "{$_COOKIE['myCookie']}";
    // }else{
    //     echo "cookie : x";
    // }

    setcookie('myCookie', null, time()-1000, '/');

    if(isset($_COOKIE['myCookie'])){
        echo "cookie : o";
    }else{
        echo "cookie : x";
    }

?>