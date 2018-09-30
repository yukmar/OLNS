<!-- Tabel Daftar Kategori -->
<?=$alert?>
<h2 class="sub-header">KATEGORI</h2><hr />
<div class="row">
	<div class="col-md-auto">
		<div class="container">
			<div class="table-responsive-sm">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Kategori</th>
							<th scope="col">Jumlah Soal</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($cat_list as $item => $val) { ?>
							<tr scope="row">
								<td><?=$no?></td>
								<td><a href="<?=site_url('kategori/?cat='. $val->id_cat)?>"><?=$val->name_cat?></a></td>
								<td class="text-center"><a href="<?=site_url('kategori/?aksi=det&no='.$val->id_cat)?>"><?=$val->jumlah?></a></td>
								<td>
								</td>
							</tr>
						<?php $no++;}?>
					</tbody>
				</table>
			</div>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcatModal">Tambah Kategori</button><br />
		</div>
	</div>
	<div class="col">
		<div class="container">
			<?php 
			if (isset($spec_cat)) {
			foreach ($spec_cat as $key => $value) { ?>
			<div class="table-responsive-sm borderleft shadow p-3 mb-5 bg-white rounded">
				<table class="table table-borderless">
					<thead>
						<tr>
							<th scope="col" colspan="2"><h3><?=$value->name_cat?></h3></th>
						</tr>
					</thead>
					<tbody>
							<tr scope="row">
								<td class="col-md-auto"><b>Nama Kategori</b></td>
								<td>: <?=$value->name_cat?></td>
							</tr>
							<tr scope="row">
								<td><b>Deskripsi</b></td>
								<td>: <?=$value->desc_cat?></td>
							</tr>
							<tr>
								<td colspan="2" class="text-right">
									<div class="btn-group">
								<a class="btn btn-outline-primary btn-sm" href="<?=site_url('kategori/?aksi=ubah&no='.$value->id_cat)?>"><span class="oi oi-pencil"></span> Ubah</a>
								<a class="btn btn-outline-danger btn-sm" href="<?=site_url('kategori/hapus/?cat='.$value->id_cat)?>"><span class="oi oi-x"></span> Hapus</a>
								</div>
								</td>
							</tr>						
					</tbody>
				</table>
			</div>
			<?php }} ?>
			<?php if (isset($ubdt)) {
			foreach ($ubdt as $oj => $val) { ?>
				<div class="table-responsive-sm borderleft shadow p-3 mb-5 bg-white rounded">
					<h2>UBAH</h2>
				<form class="form-inline" method="POST" action="<?=site_url('kategori/ubah')?>">
					<input type="hidden" class="form-control" name="nocat" value="<?=$val->id_cat?>" />
				<table class="table table-borderless">
					<thead>
						<tr>
							<th scope="col" colspan="2"><h3></h3></th>
						</tr>
					</thead>
					<tbody>
							<tr scope="row">
								<td class="col-md-auto">Nama Kategori</td>
								<td><input type="textbox" name="tbname" class="form-control" value="<?=$val->name_cat?>"></td>
							</tr>
							<tr scope="row">
								<td>Deskripsi</td>
								<td><textarea class="form-control" name="tbdesc" style="width: 100%; height: 10rem;"><?=$val->desc_cat?></textarea></td>
							</tr>
							<tr>
								<td colspan="2" class="text-right">
									<div class="btn-group">
								<button type="submit" class="btn btn-outline-primary btn-sm"><span class="oi oi-pencil"></span> Ubah</button>
								<a class="btn btn-outline-danger btn-sm" href="<?=site_url('kategori')?>"><span class="oi oi-x"></span> Batal</a>
								</div>
								</td>
							</tr>						
					</tbody>
				</table>
				</form>
			</div>
			<?php } } ?>
			<!-- start php -->
			<?php if (isset($detdt)) {?>
			<div class="table-responsive-sm borderleft shadow p-3 mb-5 bg-white rounded">
				<table class="table table-borderless">
					<thead>
						<tr>
							<td scope="col">#</td>
							<td scope="col">Nama Tutorial</td>
							<td scope="col">Point</td>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
			foreach ($detdt as $key => $value) { ?>
						<tr scope="row">
							<td><?=$no?></td>
							<td><a href="<?=site_url('banktuts/?aksi=det&id='.$value->id_tut)?>"><?=$value->name_tut?></a></td>
							<td><?=$value->point?></td>
						</tr>
						<?php $no++; }?>
					</tbody>
				</table>
			</div>
			<?php } ?>
			<!-- end php -->
		</div>
	</div>
</div>
<!-- End Tabel -->

<!-- Modal Tambah Kategori -->
<div class="modal fade" id="addcatModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Kategori</h5>
			</div>
			<form method="POST" action="<?=site_url('kategori/tambah')?>">
				<div class="modal-body">
					<div class="form-group">
						<label>Nama Kategori</label>
						<input type="textbox" class="form-control" name="tbcat" />
					</div>
					<div class="form-group">
						<label>Deskripsi Kategori</label>
						<textarea class="form-control" name="tbdesc" row="10" col="80"></textarea>
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
<!-- End Modal -->