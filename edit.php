<?php
include "koneksi.php";
//cek apakah ada id di URL
if (!isset($_GET['id'])) {
}
$id = (int) $_GET['id'];
//ambil data lama
$sql ="SELECT * FROM tugas WHERE id=$id";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) == 0) {
    die("Data tidak ditemukan!");
}
$data = mysqli_fetch_assoc($result);
//jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $nama         = $_POST['nama'];
     $tugas        = $_POST['tugas'];
     $deadline     = $_POST['deadline'];
     
     $update       = "UPDATE tugas SET
     nama ='$nama', 
     tugas='$tugas', 
     deadline='$deadline'
     WHERE id=$id";  
    if ($mysqli->query($koneksi, $update)) {
     header("Location: index.php"); 
     exit();            
} else {
    echo "Gagal update data: " . mysqli_error($koneksi);
}
}
?>

<!DOCTYPE html>
<html>
<head>     
    <title>Edit Tugas</title>
</head>
<body>
    <h1>Edit Tugas</h1>
    <form method="post">
        <label>Nama:</label><br><br> 
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br><br>
        <label>Tugas:</label><br><br>
            <input type="text" name="tugas" value="<?php echo $data['tugas']; ?>" required><br><br>
        <label>Deadline:</label><br><br>
            <input type="text" name="deadline" value="<?php echo $data['deadline']; ?>" required><br><br>

        <button type="submit">Simpan Perubahan</button>
</form>
</body>
</html>  