			  <div class="card">
			      <div class="card-header">
			          <h4><?=getAddress();?></h4>
			      </div>
			      <div class="card-body">

			          <ul class="nav nav-tabs">
			              <li class="active"><a data-toggle="tab" href="#diri" class="active show" aria-expanded="true">Data
			                      Diri</a></li>
			              <li><a data-toggle="tab" href="#nilai" aria-expanded="false">Data Nilai</a></li>
			          </ul>

			          <div class="tab-content">
			              <div id="diri" class="tab-pane fade active show">
			                  <a href="print_data_diri.php?&id_siswa=<?=$_GET['id_siswa'];?>&print=ok"
			                      style="padding:10px;border:1px solid #aaa;border-radius:4px;margin-top:10px;"><i
			                          class="fa fa-print"></i></a>
			                  <?php include "data_diri_bukuinduk.php"; ?>
			              </div>
			              <div id="nilai" class="tab-pane fade">
			                  <a href="print_data_nilai.php?&ids=<?=$_GET['ids'];?>&print=ok"
			                      style="padding:10px;border:1px solid #aaa;border-radius:4px;margin-top:10px;"><i
			                          class="fa fa-print"></i></a>
			                  <?php include "data_nilai_bukuinduk.php"; ?>
			              </div>
			          </div>

			      </div>
			  </div>