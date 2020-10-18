
<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Pemira 2020 | Login </title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gadget Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Meta tags -->
    <!-- font-awesome icons -->
    <link href="<?php echo base_url('assets/login/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="<?php echo base_url('assets/login/css/style.css')?>" rel='stylesheet' type='text/css' media="all">
</head>
<body>
    <h1 class="error"></h1>
	<!---728x90--->
    <div class="w3layouts-two-grids">
	<!---728x90--->
        <div class="mid-class">
            <div class="img-right-side">
                
                <img src="<?php echo base_url('assets/img/logo_statis/pemira.png')?>" class="img-fluid" alt="">
            </div>
            <div class="txt-left-side">
                <h2> Login </h2>
                <form method="post" action="<?php echo site_url('Login/loginpemilih') ?>">
                    
                    <div class="form-left-to-w3l">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <input type="text" name="pmlh_nim" id="pmlh_nim" placeholder="Masukkan nim" required="">

                        <div class="clear"></div>
                    </div>
                    <div class="form-left-to-w3l ">

                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <input type="text" name="pmlh_kode" id="pmlh_kode" placeholder="Masukkan kode" required="">
                        <div class="clear"></div>
                    </div>
                    
                    <div class="btnn">
                        <button id="btnLogin" name="submit" style="background-color:purple" type="submit">Login </button>
                    </div>
                </form>
                
                <div class="clear"></div>
            </div>
        </div>
    </div>
	<!---728x90--->
    <footer class="copyrigh-wthree">
        <p>
            © 2020 Pemilihan Raya | MPM
        </p>
    </footer>
</body>

</html>