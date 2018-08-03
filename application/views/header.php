<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/all.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">


    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url() ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>PLG</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Pariwisata</b> Palembang</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- User Account: style can be found in dropdown.less -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user-circle-o"></i>
                            <span class="hidden-xs"><?php echo $this->session->userdata('userdata')->useralias;?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <p>
                                    <?php echo $this->session->userdata('userdata')->useralias;?> - <?php echo ucfirst($this->session->userdata('userdata')->category);?>
                                    <small>
                                        <?php
                                        date_default_timezone_set('Asia/Jakarta');
                                        echo $date = date('m/d/Y h:i:s a', time());
                                        ?>
                                    </small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="<?php echo base_url("Login/logout");?>" class="btn btn-default btn-flat">Keluar <i class="fa fa-sign-out"></i></a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>