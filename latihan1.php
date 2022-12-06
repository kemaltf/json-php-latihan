<?php 
$text = file_get_contents('data/donuts.json');
$menus = json_decode($text, true);
// var_dump($menus);
// echo $menus['menu'][0]['nama'];
$menus = $menus['menu'];
; ?>


<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Muli|Sniglet" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		body {
			font-family: 'Muli', sans-serif;
		}

	</style>
  <title>JCO web</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<div class="container">
	  <a class="navbar-brand" href="#"><img src="logo.png" width="40"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Donuts <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Jcoffee</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Jcronut</a>
	      </li>
	    </ul>
	    <span class="navbar-text">
	      JCO <strong>Indonesia</strong>
	    </span>
	  </div>
		</div>
	</nav>

	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<h3>J.CO <u>Product</u></h3>
			</div>
		</div>
		<div class="row">
			<?php foreach($menus as $menu) : ?>
			<div class="col-sm-3 text-center mt-2">
				<div class="card">
				  <div class="card-header">
				    <?=$menu['nama'] ; ?>
					
				  </div>
				  <div class="card-body">
				    <img src="images/<?=$menu['gambar'];?>" alt="<?=$menu['nama'] ; ?>" width="200">
				    <p><strong class="badge badge-warning"><h5><?=$menu['kategori'] ; ?></h5></strong></p>
				    <p class="card-text"><?=$menu['deskripsi'];?></p>
				    <a href="#" class="btn btn-primary">See detail</a>
				  </div>
				</div>
			</div>
			<?php  endforeach ; ?>
		</div>
	</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>