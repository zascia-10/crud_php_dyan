<?php
require "koneksi.php";
$sql = "SELECT id, judul, nama_pengarang, penerbit, tahun_terbit FROM buku ORDER BY id DESC";
$result = $mysqli->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html Lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Daftar Buku</title>
</head>
<body> 
    <h1>Daftar Buku</h1>
    <!--Tambah Tombol/link-->
    <p><a href="tambah.php">+ Tambah Buku</a></p>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Judul</th>
            <th>Nama Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
</tr>
<?php foreach ($rows as $row): ?>
    <tr>
        <td><?php echo $row['judul']; ?></td>
        <td><?php echo $row['nama_pengarang']; ?></td>
        <td><?php echo $row['penerbit']; ?></td> 
        <td><?php echo $row['tahun_terbit']; ?></td> 
        <td>
            <button onclick="confirmDelete(<?php echo $row ['id']; ?>)">Hapus</button>
       </td>
</tr>
        <?php endforeach; ?>  
    <!--membuat fungsi javascript-->
 <script>
      function confirmDelete(id) {
        if (confirm("Yakin ingin menghapus buku ini?")) {
            window.location = "hapus.php?id=" + id;
        }
      }
      </script>
    </table>
</body>
</html>


        
         