
	<!-- Start Perkenalan -->
	<div class="row">
		<section class="container">
			<h1><?=$cat_name?></h1>
			<p>Definition</p>
			<p><?=$desc?></p>
		</section>
	</div>
	<!-- End Perkenalan -->

	<!-- start daftar tutorial -->
   <div class="row">
      <div class="container">
         <table class="table">
            <thead class="thead-dark">
               <tr>
                  <th scope="col">No</th>
                  <th scope="col">Title</th>
                  <th scope="col">Point</th>
                  <th scope="col">Status</th>
               </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            foreach ($list_tut as $ob => $list) { ?>
               <tr>
                  <td scope="row"><?=$no?></td>
                  <td><a href="<?=site_url('latihan/?sel='.$list->id_tut)?>"><?=$list->name_tut?></a></td>
                  <td><?=$list->point?></td>
                  <td><?php echo ($list->username) ? 'selesai' : '-' ; ?></td>
               </tr>
            <?php $no++;} ?>
            </tbody>
         </table>
      </div>
   </div>
   <!-- end daftar tutorial -->