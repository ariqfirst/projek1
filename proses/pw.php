<style>
    .kotak{width: 150px; height: 150px; float: left; background-color: blue; margin: 20px;}
</style>
<form action="#" method="POST">
    <input type="text" name="jumlah" id="">
    <input type="submit" value="kirim" name="data">
</form>
<?php
if (isset($_POST["data"])) {

$a=$_POST['jumlah'];//definisi variable a
if ($a<=3) 
{
    echo"<h1>data harus lebih dari 3</h1>";
}

else{


$no=1;

while($no<=$a)
{
    echo"<div class='kotak'></div>";
    $no++;
}

}

}
?>