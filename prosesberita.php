<?php 
include"koneksi2.php";
$j=$_POST['judul'];
$k=$_POST['kategori'];
$h=$_POST['head'];
$b=$_POST['berita'];

$g=$_FILES['gambar']['name'];
$tmp_gambar=$_FILES['gambar']['tmp_name'];
$lokasi="Gambar/$g";


if (move_uploaded_file($tmp_gambar,$lokasi)) {
    $q="INSERT INTO  berita ( judul ,  kategori ,  headline ,  isi_berita ,  gambar ) VALUES ('$j' ,$k  ,'$h'  ,'$b'  ,'$lokasi')";
    $c=$conn->query($q);
    echo"<script>alert('input berhasil'); window.location='berita.php'</script>";

}
else {
    echo"<script>alert('input gagal'); window.location='berita.php'</script>";
}
?>