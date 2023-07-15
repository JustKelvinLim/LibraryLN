<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <?php 
    foreach($user as $u){ ?>
        <form action="<?php echo base_url('index.php/admin/update_user')?>" method="post">
            <table class="table" width="100%" cellspacing="0">
            <tr>
                <td width="16%"><h4>Nama</h4></td>
                <td width="1%"><h4>:</h4></td>
                <input type="hidden" name="id_user" value="<?php echo $u->id_user;?>">
                <td><input type="text" class="form form-control" placeholder="Nama User"  name="nama_user" value="<?php echo $u->nama_user;?>"></td>
            </tr>
            <tr>
                <td width="16%"><h4>Alamat</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="text" class="form form-control" placeholder="Alamat" name="alamat_user" value="<?php echo $u->alamat_user;?>"></td>
            </tr> 
            <tr>
                <td width="16%"><h4>Jenis Kelamin</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><select name="jk" value="<?php echo $u->jk;?>" class="form form-control">
                    <option>Pilih</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select></td>
            </tr>
            <tr>
                <td width="16%"><h4>Username</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="input" class="form form-control" placeholder="Username" value="<?php echo $u->username;?>" name="username"></td>
            </tr> <tr>
                <td width="16%"><h4>Password</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><input type="password" class="form form-control" placeholder="Password" name="password"></td>
            </tr> 
            <tr>
                <td width="16%"><h4>Level</h4></td>
                <td width="1%"><h4>:</h4></td>
                <td><select name="level" value="<?php echo $u->level;?>" class="form form-control">
                    <option>Pilih</option>
                    <option value="1">Administrator</option>
                    <option value="2">Petugas</option>
                    <option value="0">User</option>
                </select></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Update" class="btn btn-facebook btn-block"></td>
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