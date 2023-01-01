<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM genshin WHERE id='$id'");

header("location:comment.php?pesan=hapus");
?>