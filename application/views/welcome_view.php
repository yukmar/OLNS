<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/custom.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/open-iconic-master/font/css/open-iconic-bootstrap.css')?>">
</head>

<body class="landing">
<di
<!-- start of navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand" href="<?=site_url()?>">
				<img src="<?=base_url('assets/img/logoum.png')?>" width="120" height="50" class="d-inline-block" /> <span class="text-primary">Elektro UM</span>
			</a>
		<button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navToggled" aria-controls="navToggled" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse justify-content-end" id="navToggled">
			<ul class="navbar-nav text-right">
				<!-- <li class="nav-item"> -->
					<!-- <a class="nav-link" href="#">About</a> -->
				<!-- </li> -->
				<li class="nav-item">
					<button class="btn btn-outline-info" type="button" data-toggle="modal" data-target="#loginmodal">MASUK</button>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- end of navbar -->

<div class="row d-flex justify-content-center">
	<div class="container-fluid">
		<div class="row justify-content-center mr-auto" style="position: absolute; z-index: 2;">
	<?=$alert?>
</div>
		<div class="cover text-white text-center" style="position: relative; z-index: 1;">
			<h1 class="display-1 ">Online Learning</h1>
			<h1>Security Network</h1>
			<button type="button" class="btn btn-outline-danger" data-target="#modalsignup" data-toggle="modal" ><b>DAFTAR!</b></button>
		</div>
	</div>
</div>
<!-- start modal login -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="<?=site_url('welcome/login')?>">
				<div class="modal-body align-self-center">
					<div class="form-group">
							<div class="form-inline">
								<label class="mr-2">Username:</label>
								<input type="textbox" name="tbuser" class="form-control" />
							</div>
					</div>
					<div class="form-group">
							<div class="form-inline">
								<label class="mr-2">Password:</label>
								<input type="Password" name="tbpuser" class="form-control" />
							</div>
					</div>				
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">MASUK</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- end modal login -->

<!-- modal register -->
<div class="modal fade" id="modalsignup" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title text-center"><h3>DAFTAR</h3></div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="<?=site_url('welcome/create_newuser')?>">
			<div class="modal-body">
				 <div class="form-group">
				 	<label>Username</label>
				 	<input type="textbox" name="newuser" class="form-control" />
				 	<small class="form-text text-muted">Sangat dianjurkan menggunakan username yang unik</small>
				 </div>
				 <div class="form-group">
				 	<label>Nama</label>
				 	<input type="textbox" name="newnama" class="form-control" />
				 	<small class="form-text text-muted">Nama pengguna</small>
				 </div>
				 <div class="form-group">
				 	<label>Password</label>
				 	<input type="Password" name="newpass" class="form-control">
				 </div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="submit">Daftar</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- end modal register -->
<script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery-slim.min.js')?>"></script>
<script src="<?=base_url('assets/js/popper.min.js')?>"></script>
<script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
</body>
</html>