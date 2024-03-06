<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script></head>
<body>    
	<nav class="navbar navbar-expand-sm navbar-light bg-primary">
	  <div class="container-fluid ">
      <i class="bi bi-shop"></i> &nbsp;
		<a class="navbar-brand " href="index.php">Dashboard administrator</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
		  <ul class="navbar-nav ">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="v_registrasi.php">Registrasi</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" href="v_daftar_barang.php">Pendataan barang</a>
			</li>
            <li class="nav-item">
			  <a class="nav-link active" href="v_daftar_pelanggan.php">Daftar pelanggan</a>
			</li>
            <li class="nav-item">
			  <a class="nav-link active" href="v_daftar_penjualan.php">Data Penjualan</a>
			</li>
            <li class="nav-item">
            <a class="btn btn-outline-danger" href="logout.php" style="color: red;">Logout</a>
			</li>			
		  </ul>		  
		</div>
	  </div>
	</nav>
</body>
</html>