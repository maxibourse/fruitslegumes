<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $titre ?></title>
	<link href="<?php echo base_url()?>dist/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url()?>dist/css/jumbotron.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/js/css/craftyslide.css" />
	
	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/js/craftyslide.js"></script>	
	<script src="assets/js/fonctions.js"></script>	
</head>
<body>	
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/fruitslegumes/index.php">Aux BeauFruits & Légumes</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
</br>