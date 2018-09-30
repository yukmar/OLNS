
<!-- Start Perkenalan -->
<div class="row">
   <div class="col">
    <div class="row">
      <div class="container">
        <h2>Selamat Datang, <?=$u[0]->nama?>!</h2><hr />
          <div class="">
             <table class="table table-borderless table-sm">
                <tbody>
                   <tr>
                      <td class="col-1">Point</td><td>: <?=$point?></td>
                   </tr>
                </tbody>
             </table>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="container p-3">
        <canvas id="chartUser"></canvas>
      </div>
    </div>
  	
   </div>
   <div class="col">
      <div class="container p-3">
      <h4>Apa Itu <b>Online Learning</b>?</h4>
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h5 class="mb-0">
              <button class="btn btn-link" type="button" >
                Berawal dari Competitive Programming
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
             Competitive programming is a mind sport usually held over the Internet or a local network, involving participants trying to program according to provided specifications. Contestants are referred to as sport programmers. Competitive programming is recognized and supported by several multinational software and Internet companies, such as Google,[1][2] and Facebook.[3] There are several organizations who host programming competitions on a regular basis.

             A programming competition generally involves the host presenting a set of logical or mathematical problems to the contestants (who can vary in number from tens to several thousands), and contestants are required to write computer programs capable of solving each problem. Judging is based mostly upon number of problems solved and time spent for writing successful solutions, but may also include other factors (quality of output produced, execution time, program size, etc.) 
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button">
                Lanjutan Kedua
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              The aim of competitive programming is to write source code of computer programs which are able to solve given problems. A vast majority of problems appearing in programming contests are mathematical or logical in nature. Typical such tasks belong to one of the following categories: combinatorics, number theory, graph theory, geometry, string analysis and data structures. Problems related to artificial intelligence are also popular in certain competitions.

              Irrespective of the problem category, the process of solving a problem can be divided into two broad steps: constructing an efficient algorithm, and implementing the algorithm in a suitable programming language (the set of programming languages allowed varies from contest to contest). These are the two most commonly tested skills in programming competitions.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button">
                Lanjutan 3
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              In most contests, the judging is done automatically by host machines, commonly known as judges. Every solution submitted by a contestant is run on the judge against a set of (usually secret) test cases. Normally, contest problems have an all-or-none marking system, meaning that a solution is "Accepted" only if it produces satisfactory results on all test cases run by the judge, and rejected otherwise. However, some contest problems may allow for partial scoring, depending on the number of test cases passed, the quality of the results, or some other specified criteria. Some other contests only require that the contestant submit the output corresponding to given input data, in which case the judge only has to analyze the submitted output data.

              Online judges are online environments in which testing takes place. Online judges have ranklists showing users with the biggest number of accepted solutions and/or shortest execution time for a particular problem.[4] 
            </div>
          </div>
        </div>
      </div>
      </div>
      <hr />
   </div>
</div>
<!-- End Perkenalan -->

<div class="row">   
   <div class="col">
      <div class="container">
         <h4>Tutorial Terkini</h4>
         <div class="table-responsive-sm">
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
   <div class="col">
      <div class="container p-2">
         <h4>Peringkat Terkini</h4>
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