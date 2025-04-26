<?php 
        include"koneksi2.php";
        $b=$_POST['b'];
        $j=$_POST['j'];
        $query="SELECT * FROM Item WHERE  kode_barang ='$b'";
        $result=$conn->query($query);
        $tampil=$result->fetch_assoc();
        $hasil=$j * $tampil['harga'] + $tampil['ongkir'];
        $n=$tampil['nama_barang'];
        $k=$tampil['kode_barang'];
        $h=$tampil['harga'];
        $o=$tampil['ongkir'];
     
        if ($result->num_rows > 0) {
           $query="INSERT INTO item2( nama_barang, kode_barang, harga, ongkir, total) VALUES
            ('$n',$k,$h,$o,$hasil)"; 
            //$result=$conn->query($query);
           echo number_format($hasil);
        }
        
        else {
            echo"data tidak ditemukan";
        }
    ?>