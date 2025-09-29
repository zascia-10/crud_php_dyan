<?php
require "koneksi.php";
$id = (int) $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $judul         = $_POST['judul'];
     $pengarang     = $_POST['nama_pengarang'];
     $penerbit      = $_POST['penerbit'];
     $tahun_terbit  = $_POST['tahun_terbit'];
     $sql = "UPDATE buku
     SET  judul='$judul', nama_pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun_terbit'
     WHERE id=$id";  
     $mysqli->query($sql);
     header("Location: index.php");          
}
$result = $mysqli->query("SELECT * FROM buku WHERE id=$id");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>     
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form method="post">
        <label>Judul: <input type="text" name="judul" value="<?php echo $data['judul']; ?>"></label><br><br>
        <label>Nama Pengarang: <input type="text" name="nama_pengarang" value="<?php echo $data['nama_pengarang']; ?>"></label><br><br>
        <label>Penerbit: <input type="text" name="penerbit" value="<?php echo $data['penerbit']; ?>"></label><br><br>
        <label>Tahun Terbit: <input type="text" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>"></label><br><br>
        <button type="submit">Update</button>
</form>
<p><a href="index.php">Kembali ke Daftar Buku</a></p>
</body>
</html>  