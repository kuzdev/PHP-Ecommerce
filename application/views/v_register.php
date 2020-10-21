<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>KPTI||Dashboard Login Admin</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?php echo base_url('assets/backend/images/favicon.ico') ?>">


    <link href="<?php echo base_url('assets/backend/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/backend/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/backend/css/style.css') ?>" rel="stylesheet" type="text/css">



</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

<div class="accountbg">

    <div class="content-center">
        <div class="content-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8">
                        <div class="card">
                            <div class="card-body">

                                <h3 class="text-center mt-0 m-b-15">
                                    <a href="#" class="logo logo-admin"><img src="<?php echo base_url('assets/backend/images/logo-dark.png') ?>"
                                            height="30" alt="logo"></a>
                                </h3>

                                <h4 class="text-muted text-center font-18"><b>Register</b></h4>

                                <div class="p-3">
                                    <form action="<?php echo base_url().'register/create_regis'?>" method="post">

                                    <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="nama_member" required
                                                    placeholder="Masukkan Nama">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="username_member" required
                                                    placeholder="Masukkan username">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="email" name="email" required
                                                    placeholder="Masukkan Email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" name="password_member" required
                                                    placeholder="Masukkan password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="alamat" required
                                                    placeholder="Masukkan Alamat">
                                            </div>
                                        </div>

                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light"
                                                    type="submit">Register</button>
                                            </div>
                                        </div>

                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-12 m-t-20 text-center">
                                                <a href="<?php echo base_url('login') ?>" class="text-muted">Already have account?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
</div>

    <!-- jQuery  -->
    <script src="<?php echo base_url('assets/backend/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/modernizr.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/detect.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/fastclick.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/jquery.slimscroll.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/jquery.blockUI.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/waves.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/jquery.nicescroll.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/jquery.scrollTo.min.js') ?>"></script>

    <!-- App js -->
    <script src="<?php echo base_url('assets/backend/js/app.js') ?>"></script>



</body>

</html>