<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')?>" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url('assets/image/51g20oqa4si01.png')?>">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">
</head>

<body class="bg-gradient-info">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="form-group row">
            <div class="col-lg-5 d-none d-lg-block"><img src="<?php echo base_url('assets/image/crop.jpg')?>"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-justify">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="<?php echo base_url('index.php/C_login/aksi_register')?>" method="post">
              <table>
              <tr>
                   <td><input type="text"  name="nama_user" class="form-control form-control" id="exampleFirstName" placeholder="Nama User" style="width:500px;">
                   </td>
                 </tr>
                 <tr>
                   <td><input type="text"  name="alamat_user" class="form-control form-control" id="exampleFirstName" placeholder="Alamat User" style="width:500px;">
                   </td>
                 </tr>
                 <tr>
                <td><select name="jk" class="form-control form-control" placeholder="Jenis Kelamin"  style="width:500px;">
                    <option >Pilih Jenis Kelamin</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select></td>
                 </tr>
                  <tr>
                   <td><input type="text"  name="username" class="form-control form-control" id="exampleFirstName" placeholder="Username" style="width:500px;">
                   </td>
                 </tr>
                 <tr>
                  <td><input type="password" name="password" class="form-control form-control" placeholder="Password" id="exampleInputPassword" style="width:500px;"></td>
                </tr>
                <tr>
                  <td><input class="btn btn-info btn-user btn-block" style="width:500px;" type="submit" name="Register" value="Register"></td>
                </tr>
              </table>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('index.php/C_login')?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin-2.min.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('https://code.jquery.com/jquery-3.2.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js')?>"></script>

</body>

</html>
