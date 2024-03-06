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
  <title>Tambah Pengguna Baru</title>
</head>

<body>
  <?php include "navbar_baru.php" ?>
  <div class="container">
  <br>
  <center><h1>Tambah Pengguna Baru</h1></center><br>
  <form action="m_tambah_pengguna_baru.php" method="post">
    <center><table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-person-vcard-fill"></i></span>  
        <input type="text" name="nama_pengguna" id=""></td>
      </tr>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-person-fill-add"></i></span>  
        <input type="text" name="username_pengguna" id=""></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td class="input-group">
        <span class="input-group-text"><i class="bi bi-map"></i></span>  
        <input type="text" name="password_pengguna" id=""></td>
      </tr>
      <tr>
        <td>Status</td>
        <td>:</td>
        <td><select name="status" id="">
            <option value="Administrator">Administrator</option>
            <option value="Petugas">Petugas</option>
          </select></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Simpan" class="btn btn-success"></td>
      </tr>
    </table>
    </center>
  </form>
  </div>
</body>

</html>