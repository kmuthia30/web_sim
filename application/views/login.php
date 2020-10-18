
<!DOCTYPE html>
<html>
<head>
  <!--head-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>SIM</b> v 1.0</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Log In Sistem Informasi MPM</p>

    <form method="post" action="<?php echo site_url('Login/loginprodi') ?>">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="prd_email" required placeholder="Masukkan email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="prd_password" required placeholder="Masukkan password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button name="submit" type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!--js-->
<?php $this->load->view("_partials/js.php") ?>
</body>
</html>
