<?php
include 'koneksi.php';
$id = $_POST['id'];
$feedback = $_POST['FeedBack'];

mysqli_query($koneksi, "update genshin set FeedBack='$feedback' where id='$id'");
header("location:comment.php?pesan=update");
?>