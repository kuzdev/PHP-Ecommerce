<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>KPTI||Dashboard Pengelola Proyek</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?php echo base_url('assets/backend/images/favicon.ico') ?>">

    <!-- DataTables -->
    <link href="<?php echo base_url('assets/backend/plugins/datatables/dataTables.bootstrap4.min.css') ?>"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/backend/plugins/datatables/buttons.bootstrap4.min.css') ?>" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assets/backend/plugins/datatables/responsive.bootstrap4.min.css') ?>"
        rel="stylesheet" type="text/css" />

    <!-- Dropzone css -->
    <link href="<?php echo base_url('assets/backend/plugins/dropzone/dist/dropzone.css') ?>" rel="stylesheet"
        type="text/css">

    <!--Morris Chart CSS -->
    <link href="<?php echo base_url('assets/backend/plugins/morris/morris.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/backend/plugins/sweet-alert2/sweetalert2.min.css') ?>" rel="stylesheet"
        type="text/css">

    <link href="<?php echo base_url('assets/backend/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/backend/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/backend/css/style.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/backend/css/custom.css') ?>" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <div class="left-side-logo d-block d-lg-none">
                <div class="text-center">

                    <a href="index.html" class="logo"><img
                            src="<?php echo base_url('assets/backend/images/logo-dark.png')?>" height="20"
                            alt="logo"></a>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="<?php echo base_url('member/dashboard') ?>" class="waves-effect">
                                <i class="mdi mdi-home"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <div class="topbar-left	d-none d-lg-block">
                        <div class="text-center">

                            <a href="index.html" class="logo"><img
                                    src="<?php echo base_url('assets/backend/images/logo.png')?>" height="20"
                                    alt="logo"></a>
                        </div>
                    </div>

                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">


                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                                    data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <img src="<?php echo base_url('assets/backend/images/member.png')?>"
                                        alt="user" class="rounded-circle">
                                    <span class="p-1 text-white"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <div class="dropdown-item text-center pb-3 pt-3">
                                        <img src="<?php echo base_url('assets/backend/images/member.png')?>"
                                            alt="user" class="rounded-circle pb-2 w-75">
                                        <p class="h6 mb-0"></p>
                                        <small></small>
                                    </div>

                                    <div class="dropdown-item">
                                        <a class="text-dark" href="#"><i
                                                class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    </div>

                                    <div class="dropdown-item">
                                        <a class="text-dark" href="<?=site_url('login/logout_member')?>"><i
                                                class="mdi mdi-logout m-r-5 text-muted"></i>
                                            Logout</a>
                                    </div>



                                </div>
                            </li>

                        </ul>


                        <div class="clearfix"></div>

                    </nav>

                </div>
