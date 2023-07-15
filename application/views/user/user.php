<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <a href="<?php echo base_url('index.php/user/tambah_us')?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah</span>
                  </a><br>
                  <br>
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Jenis Kelamin</th>
              <th>Level</th>
              <th>Action</th>
          </tr>
        </thead>
        <?php $no=1;
        foreach ($user as $a) {
            
        ?>
        <tbody>
         <tr>
             <td><?= $no++ ?></td>
             <td><?= $a->nama_user?></td>
             <td><?= $a->alamat_user?></td>
             <td><?= $a->jk?></td>
             <td><?= $a->level?></td>
              <td>
             <a href="<?php echo base_url ('index.php/user/edit_us/'.$a->id_user)?>" 
             class="btn btn-primary btn-icon-split"><span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a></a>
            <a href="<?php echo base_url ('index.php/user/hapus_us/'.$a->id_user)?>"
             class="btn btn-danger btn-icon-split"><span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Delete</span>
                  </a></a>
                    
             </td>
         </tr>
        </tbody>
        <?php }?>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->