<?php
include "koneksi.php";

// kalau form dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama           =$_POST['nama'];
    $tugas          =$_POST['tugas'];
    $deadline       =$_POST['deadline'];
    
    //otomatis status = 'belum selesai'
            $sql = "INSERT INTO tugas (nama, tugas, deadline, status)
            VALUES ('$nama', '$tugas', '$deadline', 'belum selesai')";
            
            if (mysqli_query($koneksi, $sql)) {    
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal menambahkan data: " . mysqli_error($koneksi);
            }   
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Tugas</title>
</head>
<body>
    <h2>Tambah Tugas</h2>
    <form method="POST">
        <label>Nama:</label><br>
        <select name="nama" required>
            <option value="">--Pilih Nama--</option>
            <optin value="Ani">Ani</option>
            <optin value="Budi">Budi</option>
            <optin value="Citra">Citra</option>
            <optin value="Dewi">Dewi</option>
</select>
<br><br>
            <label>Tugas:</label><br><br>
                <input type="text" name="tugas" required><br><br>
            <label>Deadline:</label><br><br>
                <input type="date" name="status" required><br><br>
            <button type="submit">Tambah</button>
    </form>
    </body>
    </html>