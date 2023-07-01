<div class="card">
    <div class="card-header">
        <h4><?=getAddress();?></h4>
    </div>
    <div class="card-body">
        <form method="post" action="proses_tambah_siswa.php">
            <fieldset>
                <legend>A. Keterangan Pribadi Siswa</legend>
                <div class="form-group">
                    <label>NISN <font color="red">*</font></label>
                    <input type="text" class="form-control" name="nisn" required="required" id="nisn">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap <font color="red">*</font></label>
                    <input type="text" class="form-control" name="nm_lengk_siswa" required="required" id="nl">
                </div>
                <div class="form-group">
                    <label>Nama Panggilan <font color="red">*</font></label>
                    <input type="text" class="form-control" name="nm_pang_siswa" required="required" id="np">
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
                    <input type="text" class="form-control" name="tempat_lahir" required="required">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir <font color="red">*</font></label>
                    <input type="date" class="form-control" name="tgl_lahir" id="tanggal" required="required">
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
                    <input type="text" class="form-control" name="anak_ke">
                </div>
                <div class="form-group">
                    <label>Jumlah Saudara <font color="red">*</font></label>
                    <input type="text" class="form-control" name="jml_sdr">
                </div>
                <div class="form-group">
                    <label>Anak Yatim/Piatu/Yatim Piatu</label>
                    <select class="form-control" name="anak_yp">
                        <option>-</option>
                        <option>Yatim</option>
                        <option>Piatu</option>
                        <option>Yatim Piatu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Bahasa sehari-hari dirumah <font color="red">*</font></label>
                    <input type="text" class="form-control" name="bahasa" id="bhs">
                </div>
                <br>
                <legend>B. Keterangan Tempat Tinggal Siswa</legend>
                <div class="form-group">
                    <label>Alamat Peserta Didik <font color="red">*</font></label>
                    <textarea class="form-control" name="alamat_peserta_didik"></textarea>
                </div>
                <div class="form-group">
                    <label>Selama bersekolah tinggal dengan <font color="red">*</font></label>
                    <input type="text" class="form-control" name="tinggal_dg">
                </div>
                <div class="form-group">
                    <label>Jarak dari tempat tinggal ke sekolah <font color="red">*</font></label>
                    <input type="text" class="form-control" name="jarak">
                </div>
                <div class="form-group">
                    <label>Ke sekolah dengan <font color="red">*</font></label>
                    <select class="form-control" name="transportasi">
                        <option>Jalan Kaki</option>
                        <option>Kendaraan</option>
                    </select>
                </div>
                <br>
                <legend>C. Keterangan Jasmani dan Kesehatan Siswa</legend>
                <div class="form-group">
                    <label>Berat badan pada waktu diterima disekolah <font color="red">*</font></label>
                    <input type="text" class="form-control" name="bb_diterima" placeholder="kg">
                </div>
                <div class="form-group">
                    <label>Berat badan pada waktu meninggalkan sekolah</label>
                    <input type="text" class="form-control" name="bb_meninggalkan" placeholder="kg">
                </div>
                <div class="form-group">
                    <label>Tinggi badan pada waktu diterima disekolah <font color="red">*</font></label>
                    <input type="text" class="form-control" name="tb_diterima" placeholder="cm">
                </div>
                <div class="form-group">
                    <label>Tinggi badan pada waktu meninggalkan sekolah</label>
                    <input type="text" class="form-control" name="tb_meninggalkan" placeholder="cm">
                </div>
                <div class="form-group">
                    <label>Golongan Darah</label>
                    <input type="text" class="form-control" name="goldar">
                </div>
                <div class="form-group">
                    <label>Kelainan jasmaniah / lainnya</label>
                    <textarea class="form-control" name="kelainan"></textarea>
                </div>
                <br>
                <legend>D. Keterangan Tentang Siswa/Siswi</legend>
                <div class="form-group">
                    <label>Diterima disekolah ini sebagai siswa baru tanggal <font color="red">*</font></label>
                    <div class="form-group">
                        <label>Alamat Sekolah <font color="red">*</font></label>
                        <input type="text" class="form-control" name="alamat_sd">
                    </div>
                    <div class="form-group">
                        <label>Tanggal <font color="red">*</font></label>
                        <input type="text" class="form-control" name="tgl_ijazah_sd" id="tanggals">
                    </div>
                    <div class="form-group">
                        <label>No Ijazah <font color="red">*</font></label>
                        <input type="text" class="form-control" name="no_ijazah_sd">
                    </div>
                    <div class="form-group">
                        <label>Diterima disekolah ini sebagai siswa pindahan tanggal</label>
                        <input type="text" class="form-control" name="tgl_diterima_pindahan">
                    </div>
                    <div class="form-group">
                        <label>Dikelas</label>
                        <input type="text" class="form-control" name="kelas_diterima">
                        <div class="form-group">
                            <label>Alamat SD</label>
                            <input type="text" class="form-control" name="alamat_sd_pindahan">
                        </div>
                        <div class="form-group">
                            <label>Alasan pindah ke sekolah ini</label>
                            <input type="text" class="form-control" name="alasan_pindah">
                        </div>
                        <br>
                        <legend>E. Keterangan Tentang Orang Tua Kandung</legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ayah <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="nm_ayah" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir Ayah <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="tmpt_lhr_ayah">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir Ayah <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="tgl_lhr_ayah" id="tanggala">
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegaraan Ayah <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="kwn_ayah">
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan Tertinggi Ayah <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="pnd_ayah">
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan Ayah <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="pekerjaan_ayah">
                                </div>
                                <div class="form-group">
                                    <label>Penghasilan /bulan/tahun Ayah</label>
                                    <input type="text" class="form-control" name="penghasilan_ayah">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Ayah <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="alamat_ayah" id="tanggala">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ibu <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="nm_ibu" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir Ibu <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="tmpt_lhr_ibu">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir Ibu <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="tgl_lhr_ibu" id="tanggali">
                                </div>
                                <div class="form-group">
                                    <label>Kewarganegaraan Ibu <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="kwn_ibu">
                                </div>
                                <div class="form-group">
                                    <label>Pendidikan Tertinggi Ibu <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="pnd_ibu">
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan Ibu <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="pekerjaan_ibu">
                                </div>
                                <div class="form-group">
                                    <label>Penghasilan /bulan/tahun Ibu</label>
                                    <input type="text" class="form-control" name="penghasilan_ibu">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Ibu <font color="red">*</font></label>
                                    <input type="text" class="form-control" name="alamat_ibu">
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