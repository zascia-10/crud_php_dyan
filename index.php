<?php
require "koneksi.php";
$sql = "SELECT id, nama, tugas, deadline, status FROM tugas ORDER BY id ASC";
$result = $mysqli->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html Lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Daftar Tugas</title>
</head>
<body>
    <h2>Daftar Tugas</h2>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Tugas</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Aksi</th>
</tr>
<?php foreach ($rows as $row): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['tugas']; ?></td>
        <td><?php echo $row['deadline']; ?></td> 
        <td><?php echo $row['status']; ?></td> 
        <td>
            <?php if($row['status'] === 'selesai'); ?>
            Tugas Selesai
       <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
       <a href="hapus.php?id=<?= $row['id'] ?>"
       onclick="return confirm('Yakin hapus tugas ini?')">Hapus</a>
       <a href="selesai.php?id=<?= (int)$row['id'] ?>">Tandai Selesai</a>
</td>

</tr>
        <?php endforeach; ?>  
    <!--membuat fungsi javascript-->
 <script>
      function confirmDelete(id) {
        if (confirm("Yakin ingin menghapus tugas ini?")) {
            window.location = "hapus.php?id=" + id;
        }
      }
      </script>
    </table>
</body>
</html>


        
         