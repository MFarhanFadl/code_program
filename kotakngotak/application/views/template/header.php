<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>src/bootsrap/css/bootstrap.min.css">
    <script type="text/javascript" src="<?= base_url(); ?>src/bootsrap/js/bootstrap.min.js"></script>

    <!-- Boku no CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>src/css/style2.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

    <title><?php echo $judul ?></title>
  </head>
  <body class="mb-3">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<div class="container ">
	  <a class="navbar-brand" href="<?= base_url(); ?>">Warehouse</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav ml-auto">
	      <a class="nav-item nav-link" href="<?= base_url(); ?>">Home<span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link" href="<?= base_url(); ?>Barang">List Barang</a>
	      <a class="nav-item nav-link" href="#">Cari Barang</a>
	    </div>
	  </div>
  </div>
</nav>