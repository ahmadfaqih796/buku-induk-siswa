					
					
					<br>
					<table class="table table-bordered">
					<tr>
						<td>Semester</td>
						<td>
						<input type="hidden" name="ids" id="ids" value="<?=$_GET['ids'];?>">
						<select name="semester" class="form-control" id="pilih-semester" style="width:70px">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
						</select>
						</td>
					</tr>
					</table>
					
					<div class="box-nilai-siswa">
					<?php include "ambil_nilai_siswa.php"; ?>
					</div>