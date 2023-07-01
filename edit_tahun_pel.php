			  <div class="card">
                <div class="card-header">
                  <h4>Edit Tahun Pelajaran</h4>
                </div>
                <div class="card-body">
					
					<?php
						$idt = $_GET['edit'];
						$tampil=mysqli_query($connect,"select * from tbth_pelajaran where id_thpelajaran ='$idt'"); 
						$data=$tampil->fetch_array(MYSQLI_ASSOC);
					?> 
					<form method="post" action="proses_edit_tahun_pel.php?idt=<?php echo $data['id_thpelajaran']; ?>">
					<div class="form-group">
						<label>Tahun Pelajaran</label>
						<input type="text" class="form-control" name="th_pelajaran" value="<?php echo $data['th_pelajaran'];?>">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Edit"> 
						<input type="reset" class="btn btn-danger" value="Batal">
					</div>
					</form>
				</div>
              </div>