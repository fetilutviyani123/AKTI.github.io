<?php
                require_once "config/config.php";

                $data = $_GET['kd_kritik'];
                $query = mysqli_query($host, "DELETE FROM kritiksaran WHERE kd_kritik = '$data' ") or die(mysqli_error($host));
if ($query) {
    header('Location: ./datakritiksaran.php');
} else {
    die('gagal dihapus');
}
?>
