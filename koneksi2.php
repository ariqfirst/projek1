<?php
$server="localhost";
$user="root";
$password="";
$database="rumah_sakit";

$conn= new mysqli($server,$user,$password,$database);

if ($conn->connect_error) {
    die("Koneksi GAGAL". $conn->connect_error);
}
?>