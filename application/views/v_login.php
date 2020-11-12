<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>AFQOZ Login</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?php echo base_url('assets/backend/images/afqoz.png') ?>">


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

    <!-- Begin page -->
    <div class="accountbg">

        <div class="content-center">
            <div class="content-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-8">
                           
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group m-t-10 mb-0 row">
                                                        <div class="col-sm-7 m-t-20">
                                                            <a href="<?php echo base_url('member/beranda') ?>" class="text-muted"><i class="fa fa-chevron-circle-left"></i> Home</a>
                                                        </div>
                                    </div> <br>
                                    <h3 class="text-center mt-0 m-b-15">
                                        <a href="#" class="logo logo-admin"><img
                                                src="<?php echo base_url('assets/backend/images/afqoz.png') ?>"
                                                height="70" alt="logo"></a>
                                    </h3>

                                    <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>

                                    <form action="<?php echo base_url().'login/auth'?>" method="post"
                                        class="form-horizontal m-t-20">
                                        <div>
                                <p><?php echo $this->session->flashdata('msg');?></p>
                            </div>
                                        <div class="p-2">
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input type="text" name="username" class="form-control" required
                                                        placeholder="Username">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Password" required>
                                                </div>
                                            </div>



                                            <div class="form-group text-center row m-t-20">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="submit">Log In</button>
                                                </div>
                                            </div>

                                            <div class="form-group m-t-10 mb-0 row">
                                                    <div class="col-sm-7 m-t-20">
                                                        <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot password?</a>
                                                    </div>
                                                    <div class="col-sm-5 m-t-20">
                                                        <a href="<?php echo base_url().'register'?>" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                                    </div>
                                            </div>
                                        </div>
                                    </form>

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