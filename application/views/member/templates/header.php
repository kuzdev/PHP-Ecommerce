<?php
$hal = $this->uri->segment(1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AFQOZ Collection+</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/frondend/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/font-awesome/css/font-awesome.min.css') ?>"
        rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/venobox/venobox.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/owl.carousel/assets/owl.carousel.min.css') ?>"
        rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/slick/slick.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/slick/slick-theme.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/frondend/css/style.css') ?>" rel="stylesheet">

<!-- style tambahan buat nav mobile -->
<link rel="shortcut icon" href="<?php echo base_url('assets/backend/images/afqoz.png') ?>">
<link href="<?php echo base_url('assets/backend/css/icons.css') ?>" rel="stylesheet" type="text/css">
<!-- <link href="<?php echo base_url('assets/backend/css/style.css') ?>" rel="stylesheet" type="text/css"> -->

</head>
<!-- ======= Header ======= -->
<header id="header" >

    <!-- <div id="topbar">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div> -->
   

    <div class="container">
    <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="<?php echo base_url() ?>" class="scrollto"><span>AFQOZ+</span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="<?=($hal=='member/beranda')?'active':'';?>"><a
                        href="<?php echo base_url('member/beranda') ?>">Beranda</a></li>
                <li class="<?=($hal=='member/produk')?'active':'';?>"><a
                        href="<?php echo base_url('member/produk') ?>">Produk</a></li>
                <li class="<?=($hal=='member/artikel')?'active':'';?>"><a
                        href="<?php echo base_url('member/artikel') ?>">Artikel</a></li>
                <li><a href="#" class=" waves-effect waves-light" data-toggle="modal" data-target="#tentang-kami">Tentang</a>
                </li>
                <li class="">
                    <a class="" 
                       data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-shopping noti-icon "></i> Keranjang
                        <!-- <span class="badge badge-success badge-pill noti-icon-badge">3</span> -->
                    </a>
                </li>

                <?php 
					if ($this->session->userdata('user')) {
					?>
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<!-- <?php echo "($this->session->userdata('user'))" ?> -->
                            <i class="fa fa-user-circle"></i> My Account
                            
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item text-dark" href="<?php echo base_url('member/akunku') ?>"><i class="mdi mdi-camera-front-variant"></i> <?=@$_SESSION['user'];?></a>
                            <a class="text-dark" href="<?=site_url('member/pesanan')?>"><i class="mdi mdi-paper-cut-vertical"></i> Pesanan Saya</a>
                            <a class="dropdown-item text-dark" href="<?php echo base_url('member/riwayat') ?>"><i class="mdi mdi-bulletin-board"></i> Riwayat Pesan</a>
                            <a class="text-dark" href="<?=site_url('login/logout')?>"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
						</div>
					</li>
				<?php
					}else{
				?>
				<li class="nav-item">
					 <a href="<?php echo base_url('login') ?>" class="btn btn-sm btn-primary mr-2 ml-2 mb-1 mt-1" style="color: white;">LOGIN</a></li>
				</li>
				<?php
				}
				?>
                </li>

                

            </ul>
        </nav><!-- .main-nav -->
    
    </div>
</header><!-- #header -->


<!--  Modal content for the above example -->
<div id="tentang-kami"  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true"> <br><br>
    <div class="modal-dialog modal-lg">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Informasi Singkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <h4>Info Sistem</h4>
                <p>Cras mattis consectetur purus sit amet fermentum.
                    Cras justo odio, dapibus ac facilisis in,
                    egestas eget quam. Morbi leo risus, porta ac
                    consectetur ac, vestibulum at eros.</p>
                    
                    <h4>Info Metode </h4>
                <p>Praesent commodo cursus magna, vel scelerisque
                    nisl consectetur et. Vivamus sagittis lacus vel
                    augue laoreet rutrum faucibus dolor auctor.</p>
                    
                    <h4>Info Perusahaan</h4>
                <p>Aenean lacinia bibendum nulla sed consectetur.
                    Praesent commodo cursus magna, vel scelerisque
                    nisl consectetur et. Donec sed odio dui. Donec
                    ullamcorper nulla non metus auctor
                    fringilla.</p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>