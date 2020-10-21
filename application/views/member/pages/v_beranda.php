<!-- ======= Info Section ======= -->
<!-- <section id="info" class="clearfix">
    <div class="container text-center">
        <div class="intro-info">
            <h2 class="mb-0">AFQOZ Collection's <br> <span>Enjoy the Shopping</span><br>
                <h3 class="mt-0">Ecommerce Applications, Payment Gateway and Goods Tracking </h3>
            </h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">Pilih Rekomendasi</a>
            </div>
        </div>
    </div>
</section> -->
<!-- End Info -->

<section >
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo base_url('assets/slider/4.jpg') ?>" class="d-block w-100"  >
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url('assets/slider/4.jpg') ?>" class="d-block w-100"  >
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url('assets/slider/4.jpg') ?>" class="d-block w-100"  >
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</section>

<section id="about-me" class="about-me wow fadeInUp">
    <div class="container">
        <header class="section-header">
            <h4><b>Brands</b></h4>
        </header>

        <div class="owl-carousel clients-carousel align-center">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-1.jpeg') ?>"
                    alt="Orange Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-2.png') ?>" alt="Kans Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-3.png') ?>" alt="YanPro Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-4.jpg') ?>" alt="ATM Property">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-5.png') ?>"
                    alt="Jayantaka Property">
                <img class="w-100 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-6.jpg') ?>"
                    alt="Nitro Property">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-7.jpg') ?>"
                    alt="BLD Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-8.jpeg') ?>" alt="">
                <img src="<?php echo base_url('assets/frondend/img/clients/client-3.png') ?>" alt="">
        </div>

    </div>
</section><!-- End Clients Section -->

<main id="main">

    <!-- ======= Produk Section ======= -->
    <section id="produk" class="produk section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Produk Terbaik</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </header>


            <div class="row">

                <?php
                foreach ($data->result_array() as $i) :
                    $id_produk=$i['id_produk'];
                    $nama_produk=$i['nama_produk'];
                    $id_kategori=$i['id_kategori'];
                    $foto_produk=$i['foto_produk'];
                    $harga=$i['harga'];
                    $diskon=$i['diskon'];
                    $deskripsi=$i['deskripsi'];
                    $berat_produk=$i['berat_produk'];
                ?>
                <div class="col-md-3 col-lg-3  wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="card" >
                            <img class="card-img-top" style="width: 100%; height:300px;background-size:cover;"
                                src="<?php echo base_url() . 'uploads/produk/' . $foto_produk; ?>" alt="Foto Produk">
                            <div class="card-body p-3">
                                <h5 class="card-title mb-1 font-weight-bold" style="font-size: 14px;"><b>
                                    <?php echo word_limiter($nama_produk, 10); ?></b></h5>
                                <p class="text-muted mb-0"><small class="font-weight-bold">Kategori: 
                                        <?php echo $id_kategori; ?> <?php echo $id_kategori; ?>kg</small>
                                </p>
                                <h4 class="card-text mt-2 mb-2 font-weight-bold" style="color: orange;">Rp.
                                    <?php echo $harga; ?></h4>

                                <!-- <div class="row pt-1 pb-1 mb-2" style=" color: black;">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-6 pr-0">
                                        <h6 class="card-text mb-0" style="color: black;">Luas :
                                            <b><?php echo $deskripsi; ?> m<sup>2</sup></b>
                                        </h6>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-6 pr-0">
                                        <h6 class="card-text mb-0" style="color: black;">Detil :
                                            <b><?php echo $deskripsi; ?></b> </h6>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Produk Section -->

    

    <!-- ======= Artikel Section ======= -->
    <section id="artikel" class="artikel wow fadeInUp">
        <div class="container">
            <header class="section-header">
                <h3>Artikel Terkait</h3>
                <p>Beberapa kumpulan artikel tentang investasi property</p>
            </header>

            <ul id="artikel-list" class="wow fadeInUp">
                <?php
                foreach ($query->result() as $i) 
                { ?>
                <li>
                    <a data-toggle="collapse" class="collapsed alink"
                        href="#artikel<?php echo $i->id_artikel;?>"><?php echo $i->judul_artikel; ?><i
                            class="ion-android-remove"></i></a>
                    <div id="artikel<?php echo $i->id_artikel;?>" class="collapse" data-parent="#artikel-list">
                        <p>
                        <?php echo word_limiter($i->isi_artikel,25); ?>
                            <a href="<?php echo base_url() . 'member/artikel/detail_artikel/'.$i->id_artikel; ?>"> Selengkapnya &rarr;</a>
                        </p>
                    </div>
                </li>

                                     <?php } ?>

            </ul>

        </div>
    </section><!-- End F.A.Q Section -->



    <!-- ======= About-me Section ======= -->
    <section id="about-me" class="about-me wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h4>Brands</h4>
            </header>

            <div class="owl-carousel clients-carousel align-center">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-1.jpeg') ?>"
                    alt="Orange Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-2.png') ?>" alt="Kans Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-3.png') ?>" alt="YanPro Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-4.jpg') ?>" alt="ATM Property">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-5.png') ?>"
                    alt="Jayantaka Property">
                <img class="w-100 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-6.jpg') ?>"
                    alt="Nitro Property">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-7.jpg') ?>"
                    alt="BLD Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-8.jpeg') ?>" alt="">
                <img src="<?php echo base_url('assets/frondend/img/clients/client-3.png') ?>" alt="">
            </div>

        </div>
    </section><!-- End Clients Section -->



</main><!-- End #main -->
