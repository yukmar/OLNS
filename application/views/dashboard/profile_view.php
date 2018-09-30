<?=$alert?>
<div class="row">
	<div class="col-6">
		<div class="container">
			<h1>Profile</h1>
			<table class="table table-borderless table-sm">
				<?php foreach ($user as $dt => $val) { ?>
				<tr>
					<td class="col-1">Username </td>
					<td>: <?=$val->username?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>: <?=$val->nama?></td>
				</tr>
				<tr>
					<td>Point </td>
					<td>: <?=$points?></td>
				</tr>
				<?php } ?>
			</table>
			<a href="<?=site_url('profile/?aksi=ubah')?>" class="btn btn-outline-primary">Ubah</a>
		</div>
	</div>
	<div class="col">
	<?php if (isset($u_dt)) {
	foreach ($u_dt as $key => $value) { ?>
	<div class="table-responsive-sm borderleft shadow p-3 mb-5 bg-white rounded">
		<h4>Ubah</h4>
		<form class="form-inline" method="POST" action="<?=site_url('profile/ubah')?>">
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td>Username</td>
						<td>: <input type="textbox" name="usn" value="<?=$value->username?>" disabled></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>: <input type="textbox" name="ubnama" value="<?=$value->nama?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>: <input type="Password" name="ubpass" value="<?=$value->password?>"></td>
					</tr>
					<tr>
						<td colspan="2" class="text-right">
							<button type="submit" class="btn btn-outline-primary">Ubah</button>
							<a href="<?=site_url('profile')?>" class="btn btn-outline-secondary"><span class="oi oi-x"></span> Batal</a>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
	<?php }} ?>
	</div>
</div>
<div class="row">
	<div class="container logsubmit">
		<h5>Riwayat Submit Key</h5>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Kategori</th>
					<th scope="col">Nama Tutorial</th>
					<th scope="col">Waktu Submit</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$no = 1;
			foreach ($log as $ob => $prop) { ?>
				<tr>
					<td scope="row"><?=$no?></td>
					<td><a href="<?=site_url('kategori/?c=').$prop->id_cat ?>"><?=$prop->name_cat?></a></td>
					<td><a href="<?=site_url('latihan/?sel=').$prop->id_tut ?>"><?=$prop->name_tut?></a></td>
					<td><?=$prop->date_submit?></td>
				</tr>
			<?php $no++;} ?>
			</tbody>
		</table>
	</div>
</div>