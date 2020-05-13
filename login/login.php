<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css">

    <title>halaman Login!</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  		<a class="navbar-brand" href="../home/home.php"><img src="logo fix.png" width="125px"></a>
  		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   	    	 <span class="navbar-toggler-icon"></span>
  		</button>
 		 <div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav ml-auto">
    	 		<li class="nav-item">
        		 <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
      			</li>
		       <li class="nav-item">
		       		 <a class="nav-link" href="../keranjangg/keranjang.php""><i class="fas fa-dolly-flatbed"></i></a>
		      </li>
		      <li class="nav-item active">
		        	<a class="nav-link" href="../kopi/kopi.php">KOPI <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        	<a class="nav-link" href="../artikel2/artikel2.php">ARTIKEL</a>
		      </li>
		      <li class="nav-item">
		        	<a class="nav-link" href="../panduan/panduan.php">PANDUAN</a>
		      </li>
		       <li class="nav-item">
		        	<a class="nav-link" href="../login/login.php">MASUK</a>
		      </li>
    	</ul>
 	 </div>
</nav>





  <section class="login">
   <div class="container">
   	<div class="row">
   		<div class="col-sm-12 text-center">
   			<h2>CUSTOMER LOGIN</h2>
   			<hr>
   		</div>
   	</div>

   	<div class="row">
   		<div class="col-sm-2"></div>
   		<div class="col-sm-8">
   			<form>
   	 			<div class="form-group">
	   	 			  <label>username</label>
	   	 			  <input type="text" name="" class="form-control" placeholder="Masukkan Username Anda">
   	 			</div>
   	 			<div class="form-group">
			   	 	  <label>password <!-- <a class="forgot" href="">forgot your pass ?</a> --></label>
			   	 	  <input type="password" name="" class="form-control" placeholder="Masukkan password Anda">
   	 			</div>
   	 		</form>
 			<div class="row">
	   	 		<div class="col-sm-6">
	   	 			<button type="submit" class="btn btn-primary">LOGIN</button>
	   	 	 	</div> 
	   	 		<div class="col-sm-6">
	   	 	 		 <p class="sign">new customer? <a href="../registrasi/registrasi2.php">sign up</a></p>
	   	 	 	</div>  
   	 		</div>
   		</div>
   	</div>
   </div>
   </section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				 <h5>TENTANG KAMI</h5>
				 <a href="#">tentang kami</a>  
			</div>
			<div class="col-sm-2">
				<h5>BANTUAN</h5>
				<a href="">cara pembayaran</a><br>
				<a href="">kontak kami</a>
			</div>
			<div class="col-sm-2">
				 <h5>INFORMASI</h5>
				 <a href="#">artikel</a>
				 <a href="#">Panduan Menyeduh</a> 
			</div>
			<div class="col-sm-3"> 
				<p class="fot">Daftar dan dapatkan kopi pilihan dari roster terbaik</p>
				<button type="submit" class="btn btn-warning">Daftar</button>
			</div>
			<div class="col-sm-1">
				 <hr class="garis"> 
			</div>
			<div class="col-sm-2">
				 <h5>SOSIAL MEDIA</h5>
				 <a href="#"> <i class="fa-3x fab fa-facebook "></i></a>
				 <a href="#"><i class="fa-3x fab fa-instagram ml-3"></i></a>  
			</div>
		</div>
	</div>
</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>