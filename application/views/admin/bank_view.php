<?=$alert?>

<!-- Tabel Daftar Tutorial -->
<div class="row">
	<div class="col px-3">
		<h2 class="sub-header">BANK TUTORIAL</h2><hr />
	</div>
	<div class="col mr-auto">
		<form>
			<div class="input-group"></div>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-md-auto">
		<div class="container">
			<div class="table-responsive-sm">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nama Tutorial</th>
							<th scope="col">Kategori</th>
							<th scope="col">Point</th>
							<th scope="col">Submit</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = $this->uri->segment(2)+1;
						foreach ($dt as $ob => $prop) { ?>
						 	<tr scope="row">
						 		<td><?=$no?></td>
						 		<td><a href="<?=site_url('banktuts/?aksi=det&id='.$prop->id_tut)?>"><?=$prop->name_tut?></a></td>
						 		<td><?=$prop->name_cat?></td>
						 		<td class="text-center"><?=$prop->point?></td>
						 		<td class="text-center"><a href="<?=site_url('banktuts/?aksi=detuser&id='.$prop->id_tut)?>"><?=$prop->jumsub?></a></td>
						 	</tr>
						 <?php $no++; } ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="5"><?=$table_link?></td>
						</tr>
					</tfoot>
				</table>
			</div>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addtutModal">Tambah Tutorial</button><br />
		</div>
	</div>
	<div class="col">
		<div class="container">
			<?php if (isset($dtdet)) {
			foreach ($dtdet as $ob => $val) { ?>
			<div class="table-responsive-sm borderleft shadow p-3 mb-5 bg-white rounded">
				<table class="table table-borderless" >
					<thead>
						<tr>
							<th scope="col" colspan="3"><h2 class="text-center">Rincian Tutorial</h2></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><b>Nama Tutorial</b></td>
							<td><?=$val->name_tut?></td>
						</tr>
						<tr>
							<td><b>Kategori</b></td>
							<td><?=$val->name_cat?></td>
						</tr>
						<tr>
							<td><b>Point</b></td>
							<td><?=$val->point?></td>
						</tr>
						<tr>
							<td><b>Deskripsi Tutorial</b></td>
							<td><?=$val->desc_tut?></td></td>
						</tr>
						<tr>
							<td><b>PDF</b></td>
							<td><iframe src="<?=$val->pdf?>" width="380" height="480"></iframe></td>
						</tr>
						<tr>
							<td><b>Video</b></td>
							<td>
								<div class="embed-responsive embed-responsive-16by9">
									<iframe src="<?=$val->video?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
							</td>
						</tr>
						<tr>
							<td><b>Kunci</b></td>
							<td><?=$val->keys?></td>
						</tr>
						<tr>
							<td colspan="2" class="text-right">
								<div class="btn-group">
							 		<a class="btn btn-outline-primary btn-sm" href="<?=site_url('banktuts/?aksi=ubah&id='.$val->id_tut)?>"><span class="oi oi-pencil"></span> Ubah</a>
							 		<a class="btn btn-outline-danger btn-sm" href="<?=site_url('banktuts/hapus/?id='.$val->id_tut)?>"><span class="oi oi-x"></span> Hapus</a>
							 </div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php }} ?>

			<?php if (isset($dtubah)) {
			foreach ($dtubah as $key => $val) { ?>
			<div class="table-responsive-sm borderleft shadow p-3 mb-5 bg-white rounded">
				<form method="POST" action="<?=site_url('banktuts/ubah')?>">
					<input type="hidden" name="ubno" value="<?=$val->id_tut?>">
				<table class="table table-borderless" >
					<thead>
						<tr>
							<th scope="col" colspan="2"><h2 class="text-center">Rincian Tutorial</h2></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><b>Nama Tutorial</b></td>
							<td><input type="textbox" name="ubname" class="form-control" value="<?=$val->name_tut?>"></td>
						</tr>
						<tr>
							<td><b>Kategori</b></td>
							<td><select class="custom-select" name="nocat">
									<?php foreach ($kat as $key => $value) {
										if ($value->name_cat == $val->name_cat) { ?>
											<option value="<?=$value->id_cat?>" selected><?=$value->name_cat?></option>
										<?php } else { ?>
											<option value="<?=$value->id_cat?>"><?=$value->name_cat?></option>
										<?php }
									} ?>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Point</b></td>
							<td><input type="textbox" name="ubpoint" class="form-control" value="<?=$val->point?>"></td>
						</tr>
						<tr>
							<td><b>Deskripsi Tutorial</b></td>
							<td><textarea name="ubdesc" class="form-control" style="width:20rem; height: 30rem;"><?=$val->desc_tut?></textarea></td>
						</tr>
						<tr>
							<td><b>PDF</b></td>
							<td>
								<input type="textbox" name="ubpdf" class="form-control" value="<?=$val->pdf?>">
								<small id="pdfhelp" class="form-text text-muted">Link yang dimasukkan adalah link embedded</small>
							</td>
						</tr>
						<tr>
							<td><b>Video</b></td>
							<td><input type="textbox" name="ubvideo" class="form-control" value="<?=$val->video?>"><small id="vidhelp" class="form-text text-muted">Link yang dimasukkan adalah link embedded</small>
							</td>
						</tr>
						<tr>
							<td><b>Kunci</b></td>
							<td><input type="textbox" name="ubkey" class="form-control" value="<?=$val->keys?>"></td>
						</tr>
						<tr>
							<td colspan="2" class="text-right">
								<div class="btn-group">
									<button type="submit" class="btn btn-outline-primary btn-sm"><span class="oi oi-pencil"></span> Ubah</button>
										<a class="btn btn-outline-danger btn-sm" href="<?=site_url('banktuts/?aksi=det&id='.$val->id_tut)?>"><span class="oi oi-x"></span> Batal</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				</form>
			</div>
			<?php }} ?>

			<?php if (isset($list_u)) {
				$no = 1; ?>
				<div class="table-responsive-sm borderleft shadow p-3 mb-5 bg-white rounded">
					<table class="table table-borderless">
						<thead>
							<tr>
								<td scope="col">#</td>
								<td scope="col">Daftar User</td>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($list_u as $key => $value) { ?>
							<tr scope = "row">
								<td><?=$no?></td>
								<td><a href="<?=site_url('user/?u='.$value->username)?>"><?=$value->nama?></a></td>
							</tr>
							<?php $no++; }?>
						</tbody>
					</table>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- End Tabel -->

<!-- Modal Tambah TUtorial-->
<div class="modal fade" id="addtutModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Tutorial</h5>
			</div>
			<form method="POST" action="<?=site_url('banktuts/do_tambah')?>">
				<div class="modal-body">
					<div class="form-group">
						<label>Nama Tutorial</label>
						<input type="textbox" class="form-control" name="tbnametut" />
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select class="form-control" name="tbcat">
							<?php foreach ($pilih_kategori as $key => $value): ?>
								<option><?=$value->name_cat?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label>Point</label>
						<input type="textbox" class="form-control" name="tbpoint" />
					</div>
					<div class="form-group">
						<label>Deskripsi Tutorial</label>
						<textarea class="form-control" name="tbdesc" row="10" col="80"></textarea>
					</div>
					<div class="form-group">
						<label>PDF</label>
						<input type="textbox" class="form-control" name="tbpdf" />
					</div>
					<div class="form-group">
						<label>Video</label>
						<input type="textbox" class="form-control" name="tbvid" />
					</div>
					<div class="form-group">
						<label>Kunci</label>
						<input type="textbox" class="form-control" name="tbkunci" />
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