
	<!-- Start Perkenalan -->
	<div class="row">
		<section class="container">
         <?=$alert?>
			<h1><?=$title?></h1>
         <h3>Point: <?=$point?></h3>
			<p>Instruction</p>
			<p><?=$desc?></p>
		</section>
	</div>
	<!-- End Perkenalan -->

	<!-- Start PDF & video -->
	<div class="row">
	 	<div class="col ml-4" id="media-pdf">
	 		<iframe src="<?=$pdf?>" width="640" height="480"></iframe>
		</div>
		<div class="col" id="vid-tutorial">
			<iframe width="460" height="360" src="<?=$vid?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
   	</div>
   	<!-- End PDF & video -->

   	<!-- Start kolom verifikasi kunci latihan -->
   	<div class="row">
   		<div class="container">
   			<form method="get" action="submit_key/">
   				<div class="row">
   					<div class="col-auto">
   						<label>Enter The Key: </label>
   					</div>
   					<div class="col">
   						<input type="textbox" name="tbkey" class="form-control">
                     <input type="hidden" name="no" value="<?=$no?>" />
   					</div>
   					<div class="col">
   						<button type="submit" class="btn btn-primary" <?=$bs?>/>Send</button>
   					</div>
   				</div>
   			</form>
   		</div>
   	</div>
   	<!-- End kolom verifikasi kunci latihan -->