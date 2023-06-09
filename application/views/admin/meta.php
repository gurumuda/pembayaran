<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/template/admin/')?>assets/images/favicon.png">
    <title>Admin Pembayaran</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/admin/')?>assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/admin/')?>assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/admin/')?>assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/admin/')?>assets/libs/quill/dist/quill.snow.css">
    <link href="<?= base_url('assets/template/admin/')?>assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/template/admin/')?>dist/css/style.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/template/admin/')?>assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/admin/')?>assets/extra-libs/multicheck/multicheck.css">
    <link href="<?= base_url('assets/template/admin/')?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== --> 
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div class="flash_error" data-flash_error="<?= $this->session->flashdata('error'); ?>"></div>
    <div class="flash_success" data-flash_success="<?= $this->session->flashdata('success'); ?>"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">