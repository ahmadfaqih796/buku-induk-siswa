			  <div class="card">
			      <div class="card-header">
			          <h4>Edit Kelas</h4>
			      </div>
			      <div class="card-body">
			          <?php
						$ik =$_GET['edit'];
						$tampil= mysqli_query($connect,"select * from tbkelas where id_kelas ='$ik'"); 
						$data=$tampil->fetch_array(MYSQLI_ASSOC);
					?>
			          <form method="post" action="proses_edit_kelas.php?ik=<?php echo $data['id_kelas']; ?>">
			              <div class="form-group">
			                  <label>Kelas</label>
			                  <select name="kelas" id="select" class="form-control">
			                      <?php
							  if ($data['kelas']=="I")
							  {
								$opt1="selected";
							  }
							  else 	
							  {
								$opt1="";
							  }
							  if ($data['kelas']=="II")
							  {
								$opt2="selected";
							  }
							  else
							  {
								$opt2="";
							  }
							   if ($data['kelas']=="III")
							  {
								$opt3="selected";
							  }
							  else
							  {
								$opt3="";
							  }
							if ($data['kelas']=="IV")
						   {
							 $opt4="selected";
						   }
						   else
						   {
							 $opt4="";
						   }
							if ($data['kelas']=="V")
					   		{
						 	$opt5="selected";
					   		}
					   		else
					   		{
						 	$opt5="";
					   		}
							if ($data['kelas']=="VI")
				   			{
					 		$opt6="selected";
				   			}
				   			else
				   			{
					 		$opt6="";
				   			}
							  ?>
			                      <option>&nbsp;</option>
			                      <option value="I" <?php echo "$opt1";?>>I</option>
			                      <option value="II" <?php echo "$opt2";?>>II</option>
			                      <option value="III" <?php echo "$opt3";?>>III</option>
			                      <option value="IV" <?php echo "$opt1";?>>IV</option>
			                      <option value="V" <?php echo "$opt2";?>>V</option>
			                      <option value="VI" <?php echo "$opt3";?>>VI</option>
			                  </select>
			              </div>
			              <div class="form-group">
			                  <label>Ruang</label>
			                  <input type="text" class="form-control" name="ruang" value="<?php echo $data['ruang'];?>">
			              </div>
			              <div class="form-group">
			                  <input type="submit" class="btn btn-primary" value="Edit">
			                  <input type="reset" class="btn btn-danger" value="Batal">
			              </div>
			          </form>
			      </div>
			  </div>