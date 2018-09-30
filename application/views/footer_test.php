<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

    <script>
    	$(document).ready(() => {
    		let cTut = document.getElementById('chartTut').getContext('2d');
			let propcTut = new Chart(cTut, {
		  	type: 'bar',
		  	data:{
		    	labels: <?=json_encode($label)?> ,
		    	datasets:[{
		      	label: 'Total Tutorial',
		      	data:<?=json_encode($jumsub)?>,
		      	backgroundColor: 'green'
		    	}],
		  	}
			});
    	});
      
    </script>
</body>
<html>