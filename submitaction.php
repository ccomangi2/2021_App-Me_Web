<?php

include './db_conn.php';

$username = $_POST['name '];
$studemt_id = $_POST['studemt_id '];
$five = $_POST[''];
$content = $_POST['content'];

$sql="insert into qna(username,title,content)values('$username','$title','$content')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='size.php';</script>"); 
?>

