<?php
$koneksi = mysqli_connect("localhost","root","","uas");

if(!$koneksi){
    die("Koneksi Tidak Berjalan : " . mysqli_connect_error());
}
?>