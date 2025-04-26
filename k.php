<?php 
$s="localhost";
$u="root";
$p="";
$d="rs";

$conn= new mysqli($s,$u,$p,$d);

if ($conn->connect_error) {
    die("koneksi gagal". $conn->connect_error);
}
?>