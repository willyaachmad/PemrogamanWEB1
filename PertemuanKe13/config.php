<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "belajar13";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn){
    die("koneksi ke database gqagal: ". mysqli_connect_error());

}
?>