<?php
                //include("./config/config.php");
                require_once "config/config.php";

                $data = $_GET['kd_berita'];
                $query = mysqli_query($host, "DELETE FROM berita WHERE kd_berita = '$data' ") or die(mysqli_error($host));
//$query=mysqli_query($host, $data, "DELETE FROM berita WHERE kd_berita =$data") or die(mysqli_error($host));
if ($query) {
    header('Location: ./databerita.php');
} else {
    die('gagal dihapus');
}
?>
