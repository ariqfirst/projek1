<a href="?halaman=home">home</a>
<a href="?halaman=about">about</a>
<a href="?halaman=contact">contact</a>


<?php
if (isset($_GET['halaman'])) {
    if ($_GET['halaman']=="contact") {
        include"contact.php";
    }

    elseif ($_GET['halaman']=="about") {
        include"about.php";
    }

    elseif ($_GET['halaman']=="home") {
      include"home.php";

    }

    else {
        echo"halaman tidak ada";
    }
}
    



?>
