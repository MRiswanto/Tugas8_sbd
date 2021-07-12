<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas 8</title>
   <style>
      table {
            border-collapse: collapse;
      }
      th, td {
            font-size: 13px; 
            border: 1px solid; 
            padding: 3px 5px; 
      }
      th {
            background: #CCCCCC;
            font-size: 12px;
      }
   </style>
</head>
<body>
   <div class="container">
      <center><h1>Toko Baju</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM pembeli';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel Pembeli</h3>
         <table>
          <tr>
            <th>ID. Pembeli</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No. TLP</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pembeli'];?></td>
               <td><?= $row['nama'];?></td>
               <td><?= $row['email'];?></td>
               <td><?= $row['no_hp'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>

            <?php
            include("koneksi.php");
            // query untuk menampilkan data
            $sql = 'SELECT * FROM table_baju';
            $result = mysqli_query($conn, $sql);
            ?>
            <h3>Tabel Baju</h3>
            <table>
          <tr>
            <th>ID. Baju</th>
            <th>Merek Baju</th>
            <th>Size Baju</th>
            <th>Warna Baju</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_baju'];?></td>
               <td><?= $row['merk_baju'];?></td>
               <td><?= $row['size_baju'];?></td>
               <td><?= $row['warna_baju'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>

            <?php
            include("koneksi.php");
            // query untuk menampilkan data
            $sql = 'SELECT * FROM transaksi';
            $result = mysqli_query($conn, $sql);
            ?>
            <h3>Tabel Transaksi</h3>
            <table>
          <tr>
            <th>ID. Transaksi</th>
            <th>ID Baju</th>
            <th>ID Pembeli</th>
            <th>Tanggal</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_transaksi'];?></td>
               <td><?= $row['id_baju'];?></td>
               <td><?= $row['id_pembeli'];?></td>
               <td><?= $row['tanggal'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>