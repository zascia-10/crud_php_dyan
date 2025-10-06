<?php
include 'koneksi.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    mysqli_query($koneksi, "UPDATE tugas SET
    status= 'selesai' WHERE id=$id");
}
header("Location: index.php");
exit;
?>