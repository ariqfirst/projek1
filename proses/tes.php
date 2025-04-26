<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <style>
        .kanan{float:right;}
    </style>
</head>
<body>
<div class="container">    
    <h1>SUPPLIER</h1>

    <!-- Form untuk menambahkan atau mengedit data -->
 <?php
    // Cek jika ada ID yang diterima untuk edit
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        include "koneksi.php";
        $result = mysqli_query($conn, "SELECT * FROM supplier WHERE id_supplier = $id");
        $data = mysqli_fetch_array($result);

    <form action="proses-supplier.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id_supplier']; ?>">
        <div class="mb-3">
            <label for="" class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" style="width: 400px;">    
        </div>

        <div class="mb-3">
            <label for="" class="form-label">ALAMAT</label>
            <input type="text" name="almt" class="form-control" value="<?php echo $data['alamat']; ?>" style="width: 400px;">     
        </div>

        <div class="mb-3">
            <label for="" class="form-label">KOTA</label>
            <input type="text" name="kota" class="form-control" value="<?php echo $data['kota']; ?>" style="width: 400px;">  
        </div>

        <div class="mb-3">
            <label for="" class="form-label">TELP</label>
            <input type="text" name="tp" class="form-control" value="<?php echo $data['tlp']; ?>" style="width: 400px;">     
        </div>

        <div class="mb-3">
            <input type="submit" class="btn-primary" value="UPDATE" style="width: 400px;">
        </div>
    </form>
    }
    
    else  {
        <!-- Form untuk menambah data baru -->
        <form action="proses-supplier.php" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">NAMA</label>
                <input type="text" name="nama" class="form-control" style="width: 400px;">    
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">ALAMAT</label>
                <input type="text" name="almt" class="form-control" style="width: 400px;">     
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">KOTA</label>
                <input type="text" name="kota" class="form-control" style="width: 400px;">  
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">TELP</label>
                <input type="text" name="tp" class="form-control" style="width: 400px;">     
            </div>
            
            <div class="mb-3">
                <input type="submit" class="btn-primary" value="KIRIM" style="width: 400px;">
            </div>
          </form>
   
     }
?>
    
</div>    

<table class="table container"> 
    <form action="#" method="post">    
        <tr>
            <td><input type="text" name="cari" placeholder="Pencarian" id=""></td>
            <td><input type="submit" value="Cari Data"></td>
        <td></td>
        <td></td>
        <td></td>
        <td><h2 class="kanan">Handle</h2></td>
    </tr>    

    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>kota</td>
        <td>Telepon</td>
    </tr>

<?php
// Menghapus data jika tombol hapus ditekan
if (isset($_POST['apus'])) {
    $id_to_delete = $_POST['id_to_delete']; // Ambil ID yang akan dihapus
    include "koneksi.php";
    $delete_query = "DELETE FROM supplier WHERE id_supplier = $id_to_delete"; // Sesuaikan nama kolom ID dengan yang ada di tabel
    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Data berhasil dihapus'); window.location='supplier.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}

// Menampilkan data
if (isset($_POST['cari'])) {
    $nama = $_POST['cari'];    
    include "koneksi.php";
    $filter = mysqli_query($conn, "SELECT * FROM supplier WHERE nama LIKE '%$nama%' ORDER BY nama DESC");
    $no = 1;
    while ($data = mysqli_fetch_array($filter)) {
        echo "<tr>
                <td>$no</td>
                <td>$data[nama]</td>
                <td>$data[alamat]</td>
                <td>$data[kota]</td>
                <td>$data[tlp]</td>
                <td>
                    <a href='?id=$data[id_supplier]' class='btn-warning kanan'>Edit</a> 
                    <form action='#' method='post' style='display:inline;'>
                        <input type='hidden' name='id_to_delete' value='$data[id_supplier]'>
                        <input class='btn-danger kanan' name='apus' type='submit' value='Hapus'>
                    </form>
                </td>
              </tr>";
        $no++;
    }
}
?>
</form>
</table>
</body>
</html>
