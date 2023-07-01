			  <div class="card">
			      <?php
					$la = mysqli_query($connect,"select * from tbprofil ");
					$da = $la->fetch_array(MYSQLI_ASSOC);
				?>
			      <div class="card-header align-text-center">
			          <marquee behavior="alternate">
			              <h4> Selamat Datang Di Aplikasi Buku Induk Siswa <?=$da['nama_Sekolah']?></h4>
			          </marquee>
			      </div>
			      <div class="card-body">
			          <div class="table-responsive">
			              <table class="table table-striped table-hover ">

			                  <tr>
			                      <th>
			                      <td><b>Wilayah</b></td>
			                      </th>
			                      <td><?=$da['mkks'];?></td>
			                  </tr>
			                  <tr>
			                      <th>
			                      <td><b>NPSN Sekolah</b></td>
			                      </th>
			                      <td><?=$da['npsn'];?></td>
			                      <!-- <td rowspan="9">
								<div class="pull-right image">
									<img src="img/images.jpg" class="img-rounded" height="200" width="150" alt="User Image" />
								</div>
							</td> -->
			                  </tr>
			                  <tr>
			                      <th>
			                      <td><b>Nama Sekolah</b></td>
			                      </th>
			                      <td><?=$da['nama_Sekolah'];?></td>
			                  </tr>
			                  <tr>
			                      <th>
			                      <td><b>Alamat</b></td>
			                      </th>
			                      <td><?=$da['alamat'];?></td>
			                  </tr>
			                  <tr>
			                      <th>
			                      <td><b>NIP Kepala Sekolah</b></td>
			                      </th>
			                      <td><?=$da['nip_kepsek'];?></td>
			                  </tr>
			                  <tr>
			                      <th>
			                      <td><b>Nama Kepala Sekolah</b></td>
			                      </th>
			                      <td><?=$da['nama_kepsek']; ?></td>
			                  </tr>
			                  </tbody>
			              </table>
			          </div>

			      </div>
			  </div>