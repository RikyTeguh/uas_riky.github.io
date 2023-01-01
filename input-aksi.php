<?php
include "koneksi.php";
$id = $_POST['id'];
$feedback = $_POST['FeedBack'];

mysqli_query($koneksi, "insert into genshin value ('$id','$feedback')");

header("location:comment.php");
?>