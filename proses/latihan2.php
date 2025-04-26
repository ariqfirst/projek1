<form action="#" method="post">
    <label for="">nama</label> <input type="text" name="nama" id=""> <p></p>
    <label for="">jumlah</label> <input type="text" name="jumlah" id=""> <p></p>
    <label for="">harga</label> <input type="text" name="harga" id=""> <p></p>
    <label for="">kota</label> <select name="kota" id=""> <p></p>
        <option value="none">Tujuan</option>
        <option value="jakarta">jakarta</option>
        <option value="bogor">bogor</option>
        <option value="banten">banten</option>
    </select>
    <label for=""><p></p></label> <input type="submit" value="kirim" name="data"> <p></p>
</form>


<?php
if (isset($_POST["data"])) {
$jumlah=$_POST["jumlah"];
$harga=$_POST["harga"];
$kota=$_POST["kota"];


if ($kota=="none") {
    $ongkir=0;
}

elseif ($kota=="jakarta") {
    $ongkir=5000;
}

elseif ($kota=="bogor") {
    $ongkir=6000;
}

elseif ($kota=="banten") {
    $ongkir=7000;
}

else {
    $ongkir=0;
}
$hasil=$jumlah * $harga + $ongkir;
echo"Total : $hasil";
}



?>