
<!-- Start Perkenalan -->
<div class="row">
  <div class="col px-5 py-3">
    <div class="row">
      <div class="container">
        <h2>Selamat Datang, <?=$u[0]->nama?>!</h2><hr />
          <div class="">
             <table class="table table-borderless table-sm">
                <tbody>
                   <tr>
                      <td class="col-5">Perolehan poin anda saat ini</td><td>: <?=$point?> pt</td>
                   </tr>
                </tbody>
             </table>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="container p-3">
        <h4>Status Submit</h4>
        <p>Chart yang memperlihatkan persentase anda dalam penyelesaian submit per kategori</p>
        <canvas id="chartUser"></canvas>
      </div>
    </div> 
    <div class="row">
      <div class="container">
        <div class="table-responsive-sm py-3">
          <h4>Rekomendasi Tutorial</h4>
          <p>Daftar tutorial pilihan untuk anda</p>
          <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tutorial</th>
                <th scope="col">Kategori</th>
                <th scope="col">Point</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($rekomen as $key => $value): ?>
              <tr scope="row">
                <td><?=$no++?></td>
                <td><a href="<?=site_url('latihan/?sel=').$value->id?>"><?=$value->tut?></a></td>
                <td><a href="<?=site_url('kategori/?c='.$value->catno)?>"><?=$value->cat?></a></td>
                <td><?=$value->point?></td>
              </tr>
              <?php endforeach ?>
            </tbody>
            <tfoot></tfoot>
          </table>
        </div>
      </div>
    </div> 	
  </div>
  <div class="col px-5">
    <div class="row">
      <div class="col"></div>
      <div class="col-md-auto mr-auto">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" style="right: 0">Petunjuk Singkat</button>
      </div>
    </div>
    <div class="row">
      <div class="container p-3">
        <h4>Apa Itu <b>Online Learning</b>?</h4>
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" >
                  Pengertian Online Learning
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
               Online Learning atau E-Learning adalah sebuah bentuk teknologi informasi yang diterapkan di bidang pendidikan berupa website yang dapat diakses di mana saja, merupakan cara dalam belajar mengajar dengan menggunakan media elektronik, khususnya menggunakan jaringan Internet sebagai sarana pembelajarannya. Atau E-Learning yakni suatu metode belajar mengajar, yang dimana melibatkan alat-alat elektronik sebagai media perantaranya “komputer, lapotop dll”, yang termasuk kedalam E-Learning misalnya seperti proses belajar mengajar berbasis web atau berbasis online.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button">
                  Tujuan Online / E-Learning
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Tujuan dari E-Learning salah satunya supaya materi pembelajaran dapat digunakan dan dipelajari oleh seluruh pihak yang membutuhkannya karena dengan E-Learning akan mempermudah dalam mengaksesnya dan proses pembelajaran dapat dilakukan akapa saja dan dimana saja selama ada koneksi internet. Dapat disimpulkan karakteristik dari E-Learning diantaranya seperti memanfaatkan jasa teknologi elektronik, memanfaatkan fungsi dari komputer dan menggunakan bahan-bahan ajaran yang sifatnya mandiri.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button">
                  Harapan
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
               Dengan adanya tutorial-tutorial dari berbagai macam jenis meteri sistem keamanan jaringan diharapkan dapat mendukung mahasiswa dalam mempelajari dan memahami materi-materi sistem keamanan jaringan dan dapat berkompetisi di dunia nyata
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr />
    </div>
    <div class="row">
      <div class="container">
          <div class="table-responsive-sm py-3">
            <h4>Tutorial Terkini</h4>
            <p>Sajian daftar tutorial terbaru dari admin</p>
            <table class="table">
                <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Daftar Tutorial</th>
                      <th scope="col">Point</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($recent_tuts as $key => $value) { ?>
                      <tr scope="row">
                        <td><?=$no?></td>
                        <td><a href="<?=site_url('latihan/?sel='.$value->id_tut)?>"><?=$value->name_tut?></a></td>
                        <td class="text-center"><?=$value->point?></td>
                        <td>
                        </td>
                      </tr>
                  <?php $no++;} ?>
                </tbody>
            </table>
          </div>
          <br />
      </div>
    </div>
    <div class="row">
      <div class="container p-2">
         <div class="table-responsive-sm">
           <h4>Peringkat Terkini</h4>
             <p>Peringkat user berdasarkan poin terbanyak</p>
             <table class="table">
                <thead>
                   <tr>
                      <th scope="col">#</th>
                      <th scope="col">User</th>
                      <th scope="col">Point</th>
                   </tr>
                </thead>
                <tbody>
                   <?php $no=1; 
                      foreach ($ranks as $key => $value) { ?>
                   <tr scope="row">
                      <td><?=$no?></td>
                      <td><?=$value->nama?></td>
                      <td><?=$value->total?></td>   
                   </tr>
                   <?php $no++; } ?>
                </tbody>
             </table>
         </div>
      </div>
    </div>
  </div>
</div>
<!-- End Perkenalan -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Untuk memulai, anda bisa langsung memilih tutorial dari kategori yang anda inginkan melalui menu di samping kiri. Bila menu tidak muncul, anda bisa memilih ikon menu yang berada di pojok kiri atas untuk menampilkan menu samping.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Oke</button>
      </div>
    </div>
  </div>
</div>