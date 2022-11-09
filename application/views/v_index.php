<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rumah Sakit aja dah.</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets2/materialize/css/materialize.min.css" media="screen,projection" />
	<link href="<?php echo base_url()?>assets2/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>assets2/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
	<link href="<?php echo base_url()?>assets2/css/flexslider.css" rel="stylesheet" /> 
	<link href="<?php echo base_url()?>assets2/css/style.css" rel="stylesheet" />
</head>
<body>

	<div id="wrapper" class="home-page"> 
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href=""><i class="icon-info-blocks material-icons">local_hospital</i>RS.PUNYA <b>SAYANG</b></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a class="waves-effect waves-light btn-large" href="">Home</a></li>
							<li><a class="waves-effect waves-dark" href="<?php echo base_url().'web/about'?>">Layanan</a></li>
							<li><a class="waves-effect waves-dark" href="informasi.php">Jadwal Dokter</a></li>
							<li><a class="waves-effect waves-dark" href="<?php echo base_url().'web/tentang' ?>">Tentang</a></li>
							<li><a class="waves-effect waves-dark" href="<?php echo base_url().'Login'?>">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="main-slider" class="flexslider">
				<ul class="slides">
				</li>
				<img src="<?php echo base_url()?>assets2/img/slides/4.jpeg" width="100%" height="50%">
				<li>
				</div>
				<div id="main-slider" class="flexslider">
				<ul class="slides">
				<img src="<?php echo base_url()?>assets2/img/slides/5.jpg" width="100%" height="50%">
				<li>
				</div>
		</header>

		<?php include 'v_layanan.php'; ?>
		<?php include 'tentang/v_tentang.php'; ?>
   
	