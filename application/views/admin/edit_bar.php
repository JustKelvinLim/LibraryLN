<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Barang</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <?php 
    foreach($buku as $u){ ?>
        <form action="<?php echo base_url('index.php/admin/update_buku')?>" method="post">
                <table class="table" width="100%" cellspacing="0">
            <tr>
                <td width="16%"><h4>No Distributor</h4></td>
                <td width="1%"><h4>:</h4></td>
                <input type="hidden" name="id_buku" value="<?php echo $u->id_buku ?>">
                <td><input type="number" class="form form-control" placeholder="No Distributor" name="id_dist" value="<?php echo $u->id_dist;?>"></td>
            </tr>
            <tr>
                <td width="16%"><h4>Judul</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="text" class="form form-control" placeholder="Judul" name="judul" value="<?php echo $u->judul;?>"></td>
            </tr>
            <tr>
                <td width="16%"><h4>No ISBN</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="text" class="form form-control" placeholder="No ISBN" name="no_isbn" value="<?php echo $u->no_isbn;?>"></td>
            </tr>
            <tr>
                <td width="16%"><h4>Penulis</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="text" class="form form-control" placeholder="Penulis" name="penulis" value="<?php echo $u->penulis;?>"></td>
            </tr>
            <tr>
                <td width="16%"><h4>Penerbit</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="text" class="form form-control" placeholder="Penerbit" name="penerbit" value="<?php echo $u->penerbit;?>"></td>
            </tr>
            <tr>
                <td width="16%"><h4>Stok</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="number" class="form form-control" placeholder="Stok" name="stok" value="<?php echo $u->stok;?>"></td>
            </tr>
            <tr>
                <td width="20%"><h4>Tanggal Terbit</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="date" class="form form-control" name="tahun" value="<?php echo $u->tahun;?>"></td>
            </tr> <tr>
                <td width="16%"><h4>Harga Pokok</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="number" class="form form-control" placeholder="Harga Awal" name="harga_pokok" value="<?php echo $u->harga_pokok;?>"></td>
            </tr> <tr>
                <td width="16%"><h4>Harga Jual</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="number" class="form form-control" placeholder="Harga Awal" name="harga_jual" value="<?php echo $u->harga_jual;?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Simpan" class="btn btn-facebook btn-block"></td>
            </tr>
            </table>
             
            <?php }?>
        </form>
        </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->