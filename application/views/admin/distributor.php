<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel buku</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <a href="<?php echo base_url('index.php/admin/tambah_bar')?>" class="btn btn-success btn-icon-split">
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
              <th>Distributor</th>
              <th>Alamat</th>
              <th>No Telp</th>
              <th>Action</th>
          </tr>
        </thead>
        <?php $no=1;
        foreach ($dist as $a) {
            
        ?>
        <tbody>
         <tr>
             <td><?= $no++ ?></td>
             <td><?= $a->nama_dist?></td>
             <td><?= $a->alamat?></td>
             <td>0<?= $a->telp?></td>
             
             <td>
             <a href="<?php echo base_url ('index.php/admin/edit_bar/'.$a->id_dist)?>" 
             class="btn btn-primary btn-icon-split"><span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a></a>
            <a href="<?php echo base_url ('index.php/admin/hapus_bar/'.$a->id_dist)?>"
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