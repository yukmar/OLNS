<div class="row">
	<section class="p-2">
		<h2>Dashboard</h2>
	</section>
</div>
<div class="row">
	<div class="col-2">
		<table class="table table-borderless table-sm">
			<tbody>
				<tr>
					<td>Jumlah Tutorial</td>
					<td>: <?=$count_tutorial?></td>
				</tr>
				<tr>
					<td>Jumlah User</td>
					<td>: <?=$count_user?></td>
				</tr>
				<tr>
					<td>Jumlah Submit</td>
					<td>: <?=$count_submit?></td>
				</tr>
				<tr>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- chart banyaknya tutorial per kategori -->
	<div class="col-5">
		<canvas id="chartTut"></canvas>
	</div>

	<!-- chart banyaknya submit per kategori -->
	<div class="col-5">
		<canvas id="chartSub"></canvas>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="container">
			<div class="table-responsive-sm">
				<table class="table table-hover">
					<caption>Tabel Kategori</caption>
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Kategori</th>
							<th scope="col">Total Tutorial</th>
							<th scope="col">Total Submit</th>
						</tr>
					</thead>
					<tbody>
					<?php $no = $this->uri->segment(2)+1;
					foreach ($table_item as $key => $value) { ?>
						<tr scope="row">
							<td><?=$no++?></td>
							<td><?=$value->name_cat?></td>
							<td><a href="<?=site_url('kategori/?aksi=det&no='.$value->id_cat)?>"  class="row_cat"><?=$value->jumtut?></a></td>
							<td><?=$value->jumsub?></td>
						</tr>
					<? } ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4"><?=$table_link?></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>	
	</div>
	<div class="col">
		<div class="row">
			<div class="container">
				<div class="table-responsive-sm">
					<table class="table table-hover">
						<caption>Recent New User</caption>
						<thead>
							<tr>
								<td scope="col">#</td>
								<td scope="col">User</td>
								<td scope="col">Waktu Join</td>
							</tr>
						</thead>
						<tbody>
							<?php $no=1;
							foreach ($recent_joined as $key => $value) { ?>
							<tr scope="row">
								<td><?=$no++?></td>
								<td><a href="<?=site_url('user/?aksi=det&u='.$value->username)?>"><?=$value->username?></a></td>
								<td><?=$value->waktu_dibuat?></td>
							</tr>
							 <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="table-responsive-sm">
					<table class="table table-hover">
						<caption>Recent Submit</caption>
						<thead>
							<tr>
								<td scope="col">#</td>
								<td scope="col">User</td>
								<td scope="col">Tutorial</td>
								<td scope="col">Waktu Submit</td>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($recent_submitted as $key => $value) { ?>
								<tr scope="row">
									<td><?=$no++?></td>
									<td><a href="#"><?=$value->username?></a></td>
									<td><a href="#"><?=$value->name_tut?></a></td>
									<td><?=$value->date_submit?></td>
								</tr>
							<? } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="table-responsive-sm">
					<table class="table table-hover">
						<caption>User Submit Terbanyak</caption>
						<thead>
							<tr>
								<td scope="col">#</td>
								<td scope="col">User</td>
								<td scope="col">Total Submit</td>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($biguser as $key => $value) { ?>
								<tr scope="row">
									<td><?=$no++;?></td>
									<td><a href="#"><?=$value->username?></a></td>
									<td><?=$value->total?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<!-- when clicked -->
		<?php $no=0;
		if (isset($item_tut)) { ?>
	<div class="container" id="list_tutpercat">
		<div class="table-responsive-sm borderleft shadow p-3 mb-5 bg-white rounded">
			<table class="table table-borderless">
				<caption>Tabel Tutorial</caption>
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Daftar Tutorial</th>
						<th scope="col">Point</th>
						<th scope="col">Total Submit</th>
					</tr>
				</thead>
				<tbody>
		<?php	foreach ($item_tut as $key => $value) { ?>
					<tr scope="row">
						<td><?=$no++?></td>
						<td><?=$value->name_tut?></td>
						<td><?=$value->point?></td>
						<td><?=$value->jumsub?></td>
					</tr>
		<?php	} ?>
				</tbody>
			</table>
		</div>
	</div>
	<?php } ?>
</div>
