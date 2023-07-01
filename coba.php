			  <!DOCTYPE html>
			  <html>

			  <head>
			      <title>Menampilkan Datepicker di Modal Bootstrap</title>
			      <link rel="stylesheet" href="datepicker/css/bootstrap.css">
			      <link rel="stylesheet" href="datepicker/css/datepicker.css">
			      <script src="datepicker/js/bootstrap.js"></script>
			      <script src="datepicker/js/jquery.js"></script>

			      <style>
			      .datepicker {
			          z-index: 1151;
			      }
			      </style>
			      <script>
			      $(function() {
			          $("#tanggal").datepicker({
			              format: 'yyyy/dd/mm'
			          });
			      });
			      </script>
			  </head>

			  <body>
			      <div class="card">
			          <div class="card-header">

			          </div>
			          <div class="card-body">
			              <form method="post" action="proses_tambah_siswa.php">
			                  <fieldset>
			                      <legend>A. Keterangan Pribadi Siswa</legend>
			                      <div class="form-group">
			                          <label>NISN <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="nisn">
			                      </div>
			                      <div class="form-group">
			                          <label>Nama Lengkap <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="nm_lengk_siswa">
			                      </div>
			                      <div class="form-group">
			                          <label>Nama Panggilan <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="nm_pang_siswa">
			                      </div>
			                      <div class="form-group">
			                          <label>Jenis Kelamin <font color="red">*</font></label>
			                          <div class="well well-sm" style="background:#eee;padding:10px;border-radius:4px;">
			                              <input type="radio" class="flat" name="jk" value="Laki-laki" checked> Laki-laki
			                              &nbsp;&nbsp;&nbsp;&nbsp;
			                              <input type="radio" class="flat" name="jk" value="Perempuan"> Perempuan
			                          </div>
			                      </div>
			                      <div class="form-group">
			                          <label>Tempat Lahir <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="tempat_lahir">
			                      </div>
			                      <div class="form-group">
			                          <label>Tanggal Lahir <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="tgl_lahir" id="tanggal">
			                      </div>
			                      <div class="form-group">
			                          <label>Agama <font color="red">*</font></label>
			                          <select class="form-control" name="agama">
			                              <option>Islam</option>
			                              <option>Budha</option>
			                              <option>Kristen</option>
			                              <option>Katolik</option>
			                              <option>Hindu</option>
			                          </select>
			                      </div>
			                      <div class="form-group">
			                          <label>Anak Ke <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <div class="form-group">
			                          <label>Jumlah Saudara <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <div class="form-group">
			                          <label>Anak Yatim/Piatu/Yatim Piatu</label>
			                          <select class="form-control" name="anak_yp">
			                              <option>Yatim</option>
			                              <option>Piatu</option>
			                              <option>Yatim Piatu</option>
			                          </select>
			                      </div>
			                      <div class="form-group">
			                          <label>Bahasa sehari-hari dirumah <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <br>
			                      <legend>B. Keterangan Tempat Tinggal Siswa</legend>
			                      <div class="form-group">
			                          <label>Alamat Peserta Didik <font color="red">*</font></label>
			                          <textarea class="form-control" name="username"></textarea>
			                      </div>
			                      <div class="form-group">
			                          <label>Selama bersekolah tinggal dengan <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <div class="form-group">
			                          <label>Jarak dari tempat tinggal ke sekolah <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <div class="form-group">
			                          <label>Ke sekolah dengan <font color="red">*</font></label>
			                          <select class="form-control" name="anak_yp">
			                              <option>Jalan Kaki</option>
			                              <option>Kendaraan</option>
			                          </select>
			                      </div>
			                      <br>
			                      <legend>C. Keterangan Jasmani dan Kesehatan Siswa</legend>
			                      <div class="form-group">
			                          <label>Berat badan pada waktu diterima disekolah <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username" placeholder="kg">
			                      </div>
			                      <div class="form-group">
			                          <label>Berat badan pada waktu meninggalkan sekolah</label>
			                          <input type="text" class="form-control" name="username" placeholder="kg">
			                      </div>
			                      <div class="form-group">
			                          <label>Tinggi badan pada waktu diterima disekolah <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username" placeholder="cm">
			                      </div>
			                      <div class="form-group">
			                          <label>Tinggi badan pada waktu meninggalkan sekolah</label>
			                          <input type="text" class="form-control" name="username" placeholder="cm">
			                      </div>
			                      <div class="form-group">
			                          <label>Kelainan jasmaniah / lainnya</label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <br>
			                      <legend>D. Keterangan Tentang Pendidikan Sebelumnya</legend>
			                      <div class="form-group">
			                          <label>Diterima disekolah ini sebagai siswa baru tanggal <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <div class="form-group">
			                          <label>Asal Sekolah Dasar <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <div class="form-group">
			                          <label>Alamat Sekolah <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <div class="form-group">
			                          <label>Tanggal <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <div class="form-group">
			                          <label>No Ijazah <font color="red">*</font></label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <div class="form-group">
			                          <label>Diterima disekolah ini sebagai siswa pindahan tanggal</label>
			                          <input type="text" class="form-control" name="username">
			                      </div>
			                      <div class="form-group">
			                          <label>Dikelas</label>
			                          <input type="text" class="form-control" name="username">
			                          <div class="form-group">
			                              <label>Asal SD / No Ijazah</label>
			                              <input type="text" class="form-control" name="username">
			                          </div>
			                          <div class="form-group">
			                              <label>Alamat SD</label>
			                              <input type="text" class="form-control" name="username">
			                          </div>
			                          <div class="form-group">
			                              <label>Alasan pindah ke sekolah ini</label>
			                              <input type="text" class="form-control" name="username">
			                          </div>
			                          <br>
			                          <legend>E. Keterangan Tentang Orang Tua Kandung</legend>
			                          <div class="row">
			                              <div class="col-md-6">
			                                  <div class="form-group">
			                                      <label>Nama Ayah <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Tempat Lahir Ayah <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Tanggal Lahir Ayah <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Kewarganegaraan Ayah <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Pendidikan Tertinggi Ayah <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Pekerjaan Ayah <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Penghasilan /bulan/tahun Ayah</label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Alamat Ayah <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                              </div>
			                              <div class="col-md-6">
			                                  <div class="form-group">
			                                      <label>Nama Ibu <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Tempat Lahir Ibu <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Tanggal Lahir Ibu <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Kewarganegaraan Ibu <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Pendidikan Tertinggi Ibu <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Pekerjaan Ibu <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Penghasilan /bulan/tahun Ibu</label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                                  <div class="form-group">
			                                      <label>Alamat Ibu <font color="red">*</font></label>
			                                      <input type="text" class="form-control" name="username">
			                                  </div>
			                              </div>
			                          </div>

			                          <div class="form-group">
			                              <input type="submit" class="btn btn-primary" value="Simpan">
			                              <input type="reset" class="btn btn-danger" value="Batal">
			                              <div style="font-size:13px;font-style:italic;">
			                                  <font color="red">*</font> Wajib diisi
			                              </div>
			                          </div>
			                  </fieldset>
			              </form>
			          </div>
			      </div>
			      <!--javascript here-->
			      <script src="datepicker/js/bootstrap-modal.js"></script>
			      <script src="datepicker/js/bootstrap-transition.js"></script>
			      <script src="datepicker/js/bootstrap-datepicker.js"></script>
			  </body>

			  </html>