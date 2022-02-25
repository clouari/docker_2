<?php

# session 시작한다고 선언
session_start();

# session 변수 test 에 123 값을 넣어줌
$_SESSION["test"] = "OKOKOK";

echo $_SESSION["test"];

?>