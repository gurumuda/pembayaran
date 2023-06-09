<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/template/admin/')?>assets/images/favicon.png">
    <title>Login | Pembayaran</title>
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/template/admin/')?>dist/css/style.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/admin/')?>assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div class="flash" data-flash="<?= $this->session->flashdata('error'); ?>"></div>
      
      
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="<?= base_url()?>assets/images/logo-icon.png" alt="homepage" class="light-logo" /><img src="<?= base_url()?>assets/images/logo-text.png" alt="logo" /></span>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" id="loginform" action="<?php echo base_url('login'); ?>" method="post">
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input name="username" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input name="password" type="password" class="form-control form-control-lg form-password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
                                </div>
                                <input type="checkbox" class="form-checkbox"><span style="color: #afafaf"> Tampilkan Password</span>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        
                                        <button class="btn btn-success float-right" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        
    </div>
   
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- this page js -->
    <script src="<?= base_url('assets/template/admin/')?>assets/libs/toastr/build/toastr.min.js"></script>
  
   <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){
        
        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>

  <script>
    const flash_error = $('.flash').data('flash');
    if (flash_error) {
        toastr.error(flash_error)
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){       
        $('.form-checkbox').click(function(){
            if($(this).is(':checked')){
                $('.form-password').attr('type','text');
            }else{
                $('.form-password').attr('type','password');
            }
        });
    });
</script>

</body>

</html>