<?php 
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username= $_POST['username'];
    $password= $_POST['password'];

    if (!empty($username) && !empty($password)) {
        echo"DATA BERHASIL <br>
        nama:$username <br>,
        id-obat:$password";
    }
    else {
        echo"harap diisi";
    }
}

else {
    echo"hanya pendukung method post";
}

  ?>