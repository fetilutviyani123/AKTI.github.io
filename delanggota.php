<?php
require_once "config/config.php";

$data = $_GET['kd_anggota'];
$query = mysqli_query($host, "DELETE FROM anggota WHERE kd_anggota = '$data' ") or die(mysqli_error($host));
if ($query) {
    header('Location: ./dataanggota.php');
} else {
    die('gagal dihapus');
}
?>
