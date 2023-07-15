<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Buku</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
   <br>
                  <br>
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>No</th>
              <th>Judul Buku</th>
              <th>No ISBN</th>
              <th>Penulis</th>
              <th>Penerbit</th>
              <th>Tahun</th>
              <th>Stok</th>
              <th>Harga</th>
              <th>Action</th>
          </tr>
        </thead>
        <?php $no=1;
        foreach ($buku as $a) {
            
        ?>
        <tbody>
         <tr>
             <td><?= $no++ ?></td>
             <td><?= $a->judul?></td>
             <td><?= $a->no_isbn?></td>
             <td><?= $a->penulis?></td>
             <td><?= $a->penerbit?></td>
             <td><?= $a->tahun?></td>
             <td><?= $a->stok?></td>
             <td><?= $a->harga_jual?></td>
             <td>
             <a href="<?php echo base_url ('index.php/user/edit_bar/'.$a->id_buku)?>" 
             class="btn btn-primary btn-icon-split"><span class="icon text-white-50">
                      <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Edit</span>
                  </a></a>
            <a href="<?php echo base_url ('index.php/user/hapus_bar/'.$a->id_buku)?>"
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