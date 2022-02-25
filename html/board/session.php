<?php

    session_start();

    
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    if($id == "jdh" && $pw == "1234")
    {
        echo "로그인 성공";
        $_SESSION["name"] = "홍길동";
    }
    else{
        echo "로그인 실패";
    }

?>