<?php
$la = mysqli_query($connect, 'select * from tbadmin WHERE id_admin = ' .  $_SESSION['i_abis'] . ' ');
$da = $la->fetch_array(MYSQLI_ASSOC);
?>
<div class="card">
   <div class="card-header">
      <h4>
         <?= getAddress(); ?>
         <?php
         if ($da['akses_level'] === "Kurikulum") {
            echo "Wakasek Kurikulum";
         } else if ($da['akses_level'] === "TU") {
            echo "Tata Usaha";
         } else {
            echo $da['akses_level'];
         }
         ?>
      </h4>
   </div>
   <div class="card-body">
      <!-- <?= $_SESSION['i_abis'] ?> -->

      <h4><small><a href="index.php?hal=edit_admin&edit=<?= $_SESSION['i_abis'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a></small> Ubah Profil</h4>
      <div class="table-responsive">
         <table class="table table-striped table-hover ">
            <tr>
               <th>
               <td><b>NIP/NUPTK</b></td>
               </th>
               <td><?= $da['nip_nuptk']; ?></td>

            </tr>
            <tr>
               <th>
               <td><b>Nama</b></td>
               </th>
               <td><?= $da['nama_lengkap']; ?></td>
            </tr>
            <tr>
               <th>
               <td><b>Jenis Kelamin</b></td>
               </th>
               <td><?= $da['jenis_kelamin']; ?></td>
            </tr>
            <tr>
               <th>
               <td><b>Email</b></td>
               </th>
               <td><?= $da['email']; ?></td>
            </tr>
            <tr>
               <th>
               <td><b>Username</b></td>
               </th>
               <td><?= $da['username']; ?></td>
            </tr>
         </table>
      </div>


   </div>