<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <?php include "navbar_baru.php"; ?>
  <div class="container">
  <br>
  <center><h1>Tambah Barang</h1></center><br>
  <form action="m_tambah_barang.php" method="post">
    <center><table>
      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-bag-check-fill"></i></span>  
        <input type="text" name="nama_barang" id=""></td>
      </tr>
      <tr>
        <td>Stok Barang</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-123"></i></span>  
        <input type="text" name="stok_barang" id=""></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-tag-fill"></i></span>  
        <input type="text" name="harga_barang" id=""></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
      </tr>
    </table>
    </center>
    </div>
</body>

</html>