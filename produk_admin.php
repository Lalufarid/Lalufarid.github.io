<?php 
// require 'functions.php';

$kopi = query("SELECT * FROM produk");
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title> Halaman Pegawai </title>
</head>
<body>

 <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="KOPI/logo.png" width="160">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="#" id="nav">KOPI <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#" id="nav">ARTIKEL <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#" id="nav">PANDUAN <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#" id="nav">PESANAN <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#" id="nav">AKUN SAYA <span class="sr-only">(current)</span></a>
      </div>
    </div>
    </div>
  </nav>
  <!--navbar-->

	<div class="row mt-3">
    <div class="col-md-2 bg-light">
      <div class="list-group list-group-flush p-2 pt-3">
      <a href="#" class="list-group-item list-group-item-action" id="SideBarHead">KATEGORI</a>
      <a href="pesanan_admin.php" class="list-group-item list-group-item-action" id="SideBar">PESANAN</a>
      <a href="produk_admin.php" class="list-group-item list-group-item-action" id="SideBar">PRODUK</a>
      </div>
    </div>
    <div class="col-md-10">
      
       <!--Pesanan-->
           <div class="row">
              <div class="col">
                 <h1 class="text-center mt-4" id="admin">PRODUK </h1>
                 <hr>
              </div>
            </div>
      <!--Pesanan-->
          
        <!--navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container-fluid">
            <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav mr-auto">
                <a class="nav-item nav-link active" href="halaman_tambah.php" id="nav1">Tambah Data <span class="sr-only">(current)</span></a>
              </div>
            </div>
            </div>
          </nav>
          <!--navbar-->
           
          <div class="container-fluid">
          	<table class="table mt-2 mb-4">
          	<thead class="thead">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Aksi</th>
              <th scope="col">Produk</th>
              <th scope="col">Stock Produk</th>
              <th scope="col">Harga Produk</th>
              <th scope="col">Brand</th>
            </tr>
          	</thead>
          	<?php $i = 1; ?>
			<?php foreach ( $kopi as $row) : ?>
          	<tbody>
            <tr>
              <td scope="row"> <?= $i?> </td>
              <td>
              	<a href="halaman_ubah.php?id_produk=<?= $row["id_produk"]; ?>">Ubah | </a>
              	<a href="halaman_hapus.php?id_produk=<?= $row["id_produk"]; ?>" onclick="return confirm('Yakin ?');">hapus</a>
              </td>
              <td> <img src="<?= $row["gambar_produk"]; ?>" width="50"> <p> <?= $row["nama_produk"]; ?></p> </td>
              <td> <?= $row["stock_produk"]; ?> </td>
              <td> <?= $row["harga_produk"]; ?> </td>
              <td> <?= $row["brand"]; ?> </td>
            </tr>
            <?php $i++; ?>
			<?php endforeach; ?>
          	</tbody>
        	</table>
      	</div>

        <!--pagination-->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
        <!--pagination-->

          </div>
        </div>
        <!--SideBar-->



	
		
	


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>