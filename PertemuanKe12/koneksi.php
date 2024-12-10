<?php
$koneksi = mysqli_connect("localhost","root","","sekolah");

if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>