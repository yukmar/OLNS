<div class="row">
	<div class="container">
		<?=$alert?>
		<h2>USER</h2> <hr />
	</div>
</div>
<div class="row">
	<div class="col-md-auto">
		<div class="container">
			<div class="table-responsive-sm">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">No.</th>
							<th scope="col">Username</th>
							<th scope="col">Nama</th>
							<th scope="col">Status</th>
							<th scope="col">Poin</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$no = 1;
					foreach ($users as $ob => $prop) { ?>
						<tr scope="row">
							<td><?=$no?></td>
							<td><a href="<?=site_url('user/?aksi=det&u='.$prop->username)?>"><?=$prop->username?></a></td>
							<td><?=$prop->nama?></td>
							<td><?=$prop->nama_priv?></td>
							<td class="text-center"><?=$prop->jumlah?></td>
						</tr>
					<?php $no++;}?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><?=$table_link?></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add User
				</button>
			</div>
		</div>
	</div>

	<div class="col">
		<?php if (isset($detail)) {
		foreach ($detail as $ob => $prop) { ?>
		<div class="container borderleft shadow p-3 mb-5 bg-white rounded">
			<div class="row">
				<!-- profil -->
				<div class="col-md-auto">
					<div class="container">
						<div class="table-responsive-sm">
							<table class="table table-borderless table-sm">
								<caption>PROFIL</caption>
								<tbody>
									<tr>
										<td>Username</td>
										<td>: <?=$prop->username?></td>
									</tr>
									<tr>
										<td>Nama</td>
										<td>: <?=$prop->nama?></td>
									</tr>
									<tr>
										<td>Status</td>
										<td>: <?=$prop->nama_priv?></td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>
											<div class="btn-group">
												<a class="btn btn-outline-primary btn-sm" href="<?=site_url('user/?aksi=ubah&u='.$prop->username)?>">
													<span class="oi oi-pencil"></span> Ubah</a>
												<a class="btn btn-outline-danger btn-sm" href="<?=site_url('user/delete/?u='.$prop->username)?>"><span class="oi oi-x"></span> Hapus</a>
											</div>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<!-- chart -->
				<canvas id="chartUser" class="col-7"></canvas>
			</div>
			<!-- rincian -->
			<div class="row">
				<div class="container">
					<div class="table-responsive-sm">
						<table class="table table-borderless table-sm">
							<thead>
								<tr>
									<td scope="col">#</td>
									<td scope="col">Nama Tutorial</td>
									<td scope="col">Poin</td>
								</tr>
							</thead>
							<tbody>
								<?php $no = $this->uri->segment(2)+1;
								foreach ($list_tut as $key => $value) { ?>
								<tr scope="row">
									<td><?=$no?></td>
									<td><a href="<?=site_url('banktuts/?id='.$value->id_tut)?>"><?=$value->name_tut?></a></td>
									<td><?=$value->point?></td>
								</tr>
								<?php $no++; }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<?php } } ?>
		

		<?php if (isset($user)) {
			foreach ($user as $key => $value) { ?>
		<div class="container">
		<form class="form-inline" method="POST" action="<?=site_url('user/ubah')?>">
			<input type="hidden" name="ubuser" value="<?=$value->username?>" />
			<div class="table-responsive-sm borderleft shadow p-3 mb-5 bg-white rounded">
				<table class="table table-borderless ">
					<thead>
						<tr>
							<th scope="col"><h3><b>Profile</b></h3></th>
						</tr>
					</thead>
					<tbody>
						<tr scope="row">
							<td class="col-2">Username</td>
							<td><input class="form-control" type="textbox"  value="<?=$value->username?>" disabled/></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input class="form-control" type="textbox" name="ubnama" value="<?=$value->nama?>"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input class="form-control" type="password" name="ubpass" value="<?=$value->password?>"></td>
						</tr>
						<tr>
							<td>Status</td>
							<td>
								<input type="radio" name="rdstat" value="1" <?=($value->nama_priv == 'admin') ? "checked" : "" ?> <?=($value->username == $this->session->userdata('user'))? 'disabled' : 'enabled' ?> /> Admin <br/>
								<input type="radio" name="rdstat" value="2" <?=($value->nama_priv == 'user') ? "checked" : "" ?> <?=($value->username == $this->session->userdata('user'))? 'disabled' : 'enabled' ?> /> User
							</td>
						</tr>
						<tr>
							<td colspan="2" class="text-right">
								<div class="btn-group">
									<button class="btn btn-outline-primary"><span class="oi oi-pencil"></span> Ubah</button>
									<a class="btn btn-outline-secondary" href="<?=site_url('user/?aksi=det&u='.$value->username)?>"><span class="oi oi-x"></span> Batal</a>
									</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</form>
		</div>
		<?php }} ?>
	</div>
</div>

<!-- Modal Add User -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <form method="POST" action="<?=site_url('user/tambah')?>">
      <div class="modal-body">
        	<div class="form-group">
        		<label>Username:</label>
        		<input type="textbox" name="tbuser" class="form-control" />
        	</div>
        	<div class="form-group">
        		<label>Nama:</label>
        		<input type="textbox" name="tbnama" class="form-control" />
        	</div>
        	<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="priv" id="inlineRadio1" value="1">
			  <label class="form-check-label" for="inlineRadio1">admin</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="priv" id="inlineRadio2" value="2">
			  <label class="form-check-label" for="inlineRadio2">user</label>
			</div>
        	<div>
        		<label>Password:</label>
        		<input type="password" name="tbpass" class="form-control" />
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Buat</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal Add User -->