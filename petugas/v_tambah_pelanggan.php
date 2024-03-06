<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pelanggan Baru</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <?php include "navbar_baru.php" ?>
  <div class="container">
    <br>
  <center><h1>Tambah Pelanggan Baru</h1> <br>
  <form action="m_tambah_pelanggan.php" method="post">
    <input type="hidden" name="id_login" value="<?= $_SESSION['id_login'] ?>">
    <center><table>
      <tr>
        <td>Id Pelanggan    </td>
        <td> : </td>
        <td class="input-group">
          <span class="input-group-text"><i class="bi bi-person-vcard-fill"></i></span>
          <input type="text" name="id_pelanggan" id="" value="<?= date('mis'); ?>" readonly></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-person-fill-add"></i></span>  
        <input type="text" name="nama_pelanggan" id=""></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-map"></i></span>  
        <input type="text" name="alamat_pelanggan" id=""></td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-telephone-plus"></i></span>
          <input type="text" name="telepon_pelanggan" id=""></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
      </tr>
    </table>
    </center>
  </form>
  </div>
  </center>
</body>

</html>