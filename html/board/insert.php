<?php

include "../check/db.php";

    $name = $_POST["name"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "
    Insert INTO board (name,title,content)
    VALUES ('".$name."','".$title."','".$content."')
    ";


   $conn->query($sql);
   $conn->close();

?>

<script>

    location.href="list.php";

</script>
