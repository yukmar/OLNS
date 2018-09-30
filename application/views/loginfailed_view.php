<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/custom.css')?>">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="alert alert-danger" role="alert">
				Gagal Login. Silahkan Coba Lagi!
			</div>
			<form method="POST" action="<?=site_url('welcome/login')?>">
				<div class="form-group">
					<label>Username:</label>
					<input type="textbox" name="tbuser" class="form-control" />
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="textbox" name="tbpuser" class="form-control" />
				</div>
				<button type="submit" class="btn btn-primary">Sign In</button>
			</form>
		</div>
	</div>
</div>

<script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery-slim.min.js')?>"></script>
<script src="<?=base_url('assets/js/popper.min.js')?>"></script>
<script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
</body>
</html>