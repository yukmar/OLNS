		</div>
		<!-- end of main content -->
    </div> <!-- from header row atasnya sidebar-->
</div> <!-- from header container-fluid-->

<nav class="navbar navbar-dark bg-dark">
  <small class="form-text text-muted">&copy yukmar 2018</small>
</nav>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('assets/js/jquery-slim.min.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

    <script>
      $(document).ready(() => {

        <?php
        if (isset($jumtut) && isset($jumsub)) { ?>
          let cTut = document.getElementById('chartTut').getContext('2d');
          let propcTut = new Chart(cTut, {
            type: 'pie',
            data:{
              labels: <?=json_encode($label)?> ,
              datasets:[{
                label: 'Total Tutorial',
                data:<?=json_encode($jumtut)?>,
                backgroundColor: <?=json_encode($warna)?>
              }],
            },
            options: {
              title: {
                display: true,
                text: 'Jumlah Tutorial'
              }
            }
          });

          let cSub = document.getElementById('chartSub').getContext('2d');
          let propcSub = new Chart(cSub, {
            type: 'pie',
            data:{
              labels: <?=json_encode($label)?> ,
              datasets:[{
                label: 'Total Submit',
                data:<?=json_encode($jumsub)?>,
                backgroundColor: <?=json_encode($warna)?>
              }],
            },
            options: {
              title: {
                display: true,
                text: 'Jumlah Submit'
              }
            }
          });

        <?php } ?>
        
        <?php
        if (isset($jumsub_user)) { ?>
          let cUser = document.getElementById('chartUser').getContext('2d');
          let propcSub = new Chart(cUser, {
            type: 'radar',
            data:{
              labels: <?=json_encode($label)?> ,
              datasets:[{
                label: 'Total Submit (%)',
                data: <?=json_encode($jumsub_user)?>,
                backgroundColor: <?=json_encode(sprintf('#%06X', mt_rand(0, 0xFFFFFF)))?>,
                borderColor: <?=json_encode(sprintf('#%06X', mt_rand(0, 0xFFFFFF)))?>
              }],
            },
            options: {
              responsive: true,
              scales: {
                yAxes: [{
                  display: true,
                  ticks: {
                    beginAtZero: true,
                    max: 100
                  }
                }]
              },
            }
          });
        <?php } ?>        

        let link_home_kat = 0;
        $('.row_cat').on('click', () => {
          console.log('clicked');
        });

      });
    </script>
  </body>
</html>
