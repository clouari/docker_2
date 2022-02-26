<?php

    include "../check/db.php";

    session_start();

    # 먼저 선언을 해 줘야 뒤에서 값이 반영된다.
    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql = "
    SELECT
         name
    FROM
        member
    WHERE
        id = '".$id."' and pw = '".$pw."'
    ";

    echo $sql;

    # 쿼리 수행
    $result = $conn->query($sql);
 
    $row = $result->fetch_row();
     
    # 수행종료
    $conn->close();



    # 로그인 성공/ 실패 여부

    if($row[0] != '')
    {
        echo "로그인 성공 <a href='list.php'>리스트로 돌아가기</a> ";
        $_SESSION["name"] = $row[0];
    }
    else
    {
        echo "로그인 실패";
    }

?>