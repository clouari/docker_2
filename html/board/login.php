<?php

include "../check/db.php";

?>

<html>
         <head>
              <title>로그인화면</title>
         </head>
    <body>

<center>
<form method="post" action="session.php">

    <input type="text" name='id' placeholder="id를 입력 해 주세요">
    <input type="password" name='pw' placeholder="pw를 입력 해 주세요">
    <input type="submit" value="로그인">

</form>
</center>

    </body>
</html>