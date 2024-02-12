<?php
                require_once "config/config.php";

                $data = $_GET['kd_admin'];
                $query = mysqli_query($host, "DELETE FROM admin WHERE kd_admin = '$data' ") or die(mysqli_error($host));
if ($query) {
    header('Location: ./dataadmin.php');
} else {
    die('gagal dihapus');
}
?>
