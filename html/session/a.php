<?php
# session 시작한다고 선언
    session_start();

# session 변수 test 에 123 값을 넣어줌
    $_SESSION["test"] = "123";
    
# sessione 변수 값을 echo 로 확인
    echo $_SESSION["test"];
?>