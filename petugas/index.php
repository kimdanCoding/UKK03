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
  <title>Petugas</title>
</head>

<body>
  <?php include "navbar_baru.php"; ?>
  <div class="container"> <br>
  <h1>Dasboard</h1>
   <br>
  
  <div class="card">
  <div class="card-header">
    ID : <?= $_SESSION['id_login']; ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"> Pengguna :</h5>
    <p class="card-text">  <?= $_SESSION['nama_pengguna']; ?></p>
  </div>
</div>
</div>
</body>

</html>