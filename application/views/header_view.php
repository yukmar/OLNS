<!DOCTYPE html>
<html>
<head>
	<title>Online Learning Network Security</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/custom.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/open-iconic-master/font/css/open-iconic-bootstrap.css')?>">
</head>
<body class="bg-dashboard">
	<!-- top navbar -->
	<!-- <span class="p-3 mb-2 text-white text-center side-menu" data-toggle="collapse" data-target="#sidebar_collapse" aria-controls="navToggled" aria-expanded="false">
		<b>MENU</b> <span class="oi oi-chevron-bottom"></span>
	</span> -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div>
			<span class="btn btn-outline-info py-2 text-center" data-toggle="collapse" data-target="#sidebar_collapse" aria-controls="navToggled" aria-expanded="false">
			<b>MENU</b> <span class="oi oi-chevron-bottom"></span>
		</span>
		</div>
		<div class="container">
			<a class="navbar-brand" href="<?=site_url()?>">
				<img src="<?=base_url('assets/img/logoum.png')?>" width="100" height="40" class="d-inline-block" /> Online Learning Security Network
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navToggled" aria-controls="navToggled" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse justify-content-end" id="navToggled">
				<ul class="navbar-nav text-right">
					<?php if ($stat == 2) { ?>
					<li class="nav-item"><a class="nav-link" href="<?=site_url('profile')?>">Profile</a></li>
					<? } ?>
					<li class="nav-item"><a class="nav-link" href="<?=site_url('logout')?>">Log out</a></li>
				</ul>
			</div>
		</div>	
	</nav>

	<!-- side bar -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-auto sidebarr collapse" id="sidebar_collapse">
			<ul class="nav flex-column">
				<li class="nav-item"><a href="<?=site_url()?>"><h5>Home</h5></a></li>
				<?php if ($stat == 1) { ?>
					<li class="nav-item">
						<a class="nav-link" href="<?=site_url('user')?>"><span class="oi oi-person"></span></span> Users</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=site_url('kategori')?>"><span class="oi oi-chevron-right"></span> Kategori</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=site_url('banktuts')?>"><span class="oi oi-folder"></span></span> Bank Tutorial</a>
					</li>
				<? } else {
					if (isset($menu)) {
						foreach ($menu as $key => $value) { ?>
					<li class="nav-item">
						<a class="nav-link" href="<?=site_url('kategori/?c='.$value->id_cat)?>"><span class="oi oi-chevron-right"></span> <?=$value->name_cat?></a>
					</li>
				<?php		}
					}
				} ?>
				
			</ul>
		</div>
	<!-- maincontent -->

	<!-- main contents start here -->
		<div class="col" id="maincontent">