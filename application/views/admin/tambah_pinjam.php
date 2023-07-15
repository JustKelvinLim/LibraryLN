<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Peminjaman</h6>
  </div>
  <div class="card-body">
  
    <div class="table-responsive">
    <?php 
    foreach($pinjam as $u){ ?>
        <form action="<?php echo base_url('index.php/Admin/aksi_tambah_pinjam')?>" method="post">
            <table class="table" width="100%" cellspacing="0">
            <tr>
                <td width="16%"><h4>Judul</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><select name="id_buku" class="form form-control">
                    <option value='<?= $u->id_buku?>'><?= $u->judul?></option>
                </select></td>
            </tr>
            <tr>
                <td width="16%"><h4>Nama Peminjam</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><select name="id_user" class="form form-control">
                    <option value='<?= $u->id_user?>'><?= $u->nama_user?></option>
                </select></td>
            </tr>
            <tr>
                <td width="16%"><h4>Jumlah Pinjam</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="number" class="form form-control" placeholder="Jumlah" name="jumlah"></td>
            </tr>
            <tr>
                <td width="20%"><h4>Tanggal Pinjam</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="date" class="form form-control" name="tanggal"></td>
            </tr> 
            <tr>
                <td colspan="3"><input type="submit" value="Simpan" class="btn btn-facebook btn-block"></td>
            </tr>
            </table>
            <?php }
            ?>
        </form>
        </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->