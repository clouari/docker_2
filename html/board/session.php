<?php

    session_start();

    # 먼저 선언을 해 줘야 뒤에서 값이 반영된다.
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