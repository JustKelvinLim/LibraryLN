<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')?>" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo base_url('assets/image/51g20oqa4si01.png')?>">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">
</head>

<body class="bg-gradient-info">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">


      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="form-group row">
            <div class="col-lg-5 d-none d-lg-block"><img src="<?php echo base_url('assets/image/709581.jpg')?>"></div>
            <div class="col-lg-7">
              <div class="p-5">
                <div class="text-justify">
                  <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                </div>
                <form class="form-signin" method="POST" action="<?php echo base_url() ?>index.php/C_login/">
                 <table>
                  <tr>
                   <td><input type="text"  name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="Username" style="width:500px;">
                   </td>
                 </tr>
                 <tr>
                  <td><input type="password" name="password" class="form-control form-control-user" placeholder="Password" id="exampleInputPassword" style="width:500px;"></td>
                </tr>
                <tr>
                  <td><div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" style="width:500px;">
                    <label class="custom-control-label" >Remember Me</label>
                  </div></td>
                </tr>
                <tr>
                  <td><input class="btn btn-info btn-user btn-block" style="width:500px;" type="submit" name="login" value="Login"></td>
                </tr>
                <tr> <td><?php if(isset($error)) echo "<b><span style='color:red;'>$error</span></b>";
                if(isset($logout)) echo "<b><span style='color:red;'>$logout</span></b>"; ?></td></tr>
              </table>
            </form>
            <hr>
            <div class="text-center">
                    <a class="small" href="<?php echo base_url('index.php/C_login/register')?>">Create an Account!</a>
                  </div>
          </div>
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