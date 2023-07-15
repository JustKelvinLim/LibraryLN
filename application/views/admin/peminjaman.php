<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Peminjaman</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <a href="<?php echo base_url('index.php/admin/tambah_pinjam')?>" class="btn btn-success btn-icon-split">
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
              <th>Judul Buku</th>
              <th>Nama Peminjam</th>
              <th>Jumlah Pinjam</th>
              <th>Total</th>
              <th>Tanggal Peminjaman</th>
              <th>Action</th>
          </tr>
        </thead>
        <?php $no=1;
        foreach ($pinjam as $a) {
            
        ?>
        <tbody>
         <tr>
             <td><?= $no++ ?></td>
             <td><?= $a->judul?></td>
             <td><?= $a->nama_user?></td>
             <td><?= $a->jumlah?></td>
             <td><?= $a->total?></td>
             <td><?= $a->tanggal?></td>
             <td>
            </a>
            <a href="<?php echo base_url ('index.php/admin/hapus_pinjam/'.$a->id_pinjam)?>"
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