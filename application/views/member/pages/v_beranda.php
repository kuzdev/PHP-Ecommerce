<section id="slider">
    <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo base_url('assets/slider/tkp4.jpg') ?>" class="d-block w-100 boradius"  >
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url('assets/slider/tkp-sepatu.jpg.webp') ?>" class="d-block w-100 boradius"  >
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url('assets/slider/tkp5.webp') ?>" class="d-block w-100 boradius"  >
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url('assets/slider/tkp-tas.webp') ?>" class="d-block w-100 boradius"  >
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
    </div>
</section> <br>

<section class="container" >
    <div class="row">
        <div class="col">
            <header id="search" class="section-header">
                <h6><b>Cari Produk Sesukamu!</b></h6>
            </header>
            <div class="boxContainer">
                <table class="elementContainer">
                    <tr>
                        <td class="putihtxt">
                            <input type="text" placeholder="  Search.." class="search putihtxt">
                        </td>
                        <td>
                            <a href="#"><i class="material-icons fa fa-search"> </i></a>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- <div>
                <div class="">
                <H6>Belanja Asikk dengerin Prambors!</H6>
                    <table class="elementContainer">
                        <tr>
                            <td>
                                <div class="spinner-grow text-danger" role="status"><span class="sr-only"></span></div>
                            </td>
                            <td class="putihtxt">
                                <audio controls="true" autoplay="true" name="media" >
                                <source src="https://masima.rastream.com/masima-pramborsjakarta" type="audio/mpeg"></audio>
                            </td>
                        </tr>
                    </table>
                </div>
            </div> -->
        </div>
       
        <div class="col">
            <header id="kategori" class="section-header">
                <h6><b>Kategori Pilihan</b></h6>
            </header>
            <div class=" scroller boradius">
                <div class="kategori rounded">
                    <img src="<?php echo base_url('assets/frondend/img/kategori/jaket.jpg') ?>" class=" w-100 boradius" >
                </div>
                <div class="kategori">
                    <img src="<?php echo base_url('assets/frondend/img/kategori/kemeja.jpg') ?>" class=" w-100 boradius" >
                </div>
                <div class="kategori">
                    <img src="<?php echo base_url('assets/frondend/img/kategori/tasbag.jpeg') ?>" class=" w-100 boradius" >
                </div>
                <div class="kategori">
                    <img src="<?php echo base_url('assets/frondend/img/kategori/kaosBagus.jpg') ?>" class=" w-100 boradius" >
                </div>
                <div class="kategori">
                    <img src="<?php echo base_url('assets/frondend/img/kategori/kolor.jpg') ?>" class=" w-100 boradius" >
                </div>
        </div>
    </div>
</section>


<!-- bagian promo card -->
<section >
    <div class="container">
        <header id="promo" class="section-header">
            <h6 class="mt-1"><b>Big Sale 50% OFF</b></h6>
        </header>
        <div class="scroller boradius">
            <div class="scrhol">
                <img src="<?php echo base_url('assets/slider/tkp4.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="scrhol">
                <img src="<?php echo base_url('assets/slider/tkp1.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="scrhol">
                <img src="<?php echo base_url('assets/slider/tkp2.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="scrhol">
                <img src="<?php echo base_url('assets/slider/tkp1.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="scrhol">
                <img src="<?php echo base_url('assets/slider/tkp2.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="scrhol">
                <img src="<?php echo base_url('assets/slider/tkp1.jpg') ?>" class=" w-100 boradius" >
            </div>
        </div>
    </div>
</section> <br>
<!-- end promo -->

<!-- bagian paling laku -->
<section id="scroller">
    <div class="container">
        <header class="section-header">
            <h6><b>Paling laku gaiis!!</b></h6>
        </header>
        <div class=" scroller boradius">
            <?php
                foreach ($data->result_array() as $i) :
                    $id_produk=$i['id_produk'];
                    $nama_produk=$i['nama_produk'];
                    $foto_produk=$i['foto_produk'];
            ?>
            <div class=" ">
                <div class="card card-medi">
                    <img src="<?php echo base_url() . 'uploads/produk/' . $foto_produk; ?>" class=" w-100 fokat boradius">
                </div>
                <div class="card-body p-1">
                    <h5 class="card-title mb-1 font-weight-bold" style="font-size: 14px;"><b>
                    <?php echo word_limiter($nama_produk, 10); ?></b></h5>
                </div>
            </div>

            <!-- <div class="card-medi">
                <img src="<?php echo base_url('assets/frondend/img/kategori/jaket.jpg') ?>" class=" w-100 fokat boradius" >
            </div>
            <div class="card-medi">
                <img src="<?php echo base_url('assets/frondend/img/kategori/kemeja.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="card-medi">
                <img src="<?php echo base_url('assets/frondend/img/kategori/tasbag.jpeg') ?>" class=" w-100 boradius" >
            </div>
            <div class="card-medi">
                <img src="<?php echo base_url('assets/frondend/img/kategori/kaosBagus.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="card-medi">
                <img src="<?php echo base_url('assets/frondend/img/kategori/kolor.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="card-medi">
                <img src="<?php echo base_url('assets/frondend/img/kategori/kaosMurah.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="card-medi">
                <img src="<?php echo base_url('assets/frondend/img/kategori/kaos1.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="card-medi">
                <img src="<?php echo base_url('assets/frondend/img/kategori/kaos2.jpg') ?>" class=" w-100 boradius" >
            </div>
            <div class="card-medi">
                <img src="<?php echo base_url('assets/frondend/img/kategori/kaos3.jpg') ?>" class=" w-100 boradius" >
            </div> -->
        <?php endforeach; ?>

    </div>
</section> <br>


    <!-- ======= brands Section ======= -->
<section id="about-me" class="about-me wow fadeInUp">
    <div class="container">
        <header class="section-header">
            <h4>Brands</h4>
        </header>
        <div class="owl-carousel clients-carousel align-center">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-1.jpeg') ?>" alt="Orange Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-2.png') ?>" alt="Kans Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-3.png') ?>" alt="YanPro Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-4.jpg') ?>" alt="ATM Property">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-5.png') ?>" alt="Jayantaka Property">
                <img class="w-100 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-6.jpg') ?>" alt="Nitro Property">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-7.jpg') ?>" alt="BLD Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-8.jpeg') ?>" alt="">
                <img src="<?php echo base_url('assets/frondend/img/clients/client-3.png') ?>" alt="">
        </div>
    </div>
</section><!-- End brands Section -->

<main id="main">
    <!-- ======= Produk Section ======= -->
    <section id="produk" class="produk section-bg">
        <div class="container">
            <header class="section-header">
                <h4>Produk Terbaik</h4>
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
                        
                <div class="col  wow bounceInUp " data-wow-duration="1.4s">
                    <div class="box">
                        <div class="card ">
                            <img class="card-img-top fotoproduk" 
                                src="<?php echo base_url() . 'uploads/produk/' . $foto_produk; ?>" alt="Foto Produk">
                            <div class="card-body p-3">
                                <h5 class="card-title mb-1 font-weight-bold" style="font-size: 14px;"><b>
                                    <?php echo word_limiter($nama_produk, 10); ?></b></h5>
                                <p class="text-muted mb-0"><small class="font-weight-bold">Kategori: 
                                        <?php echo $id_kategori; ?></small>
                                </p>
                                <h5 class="card-text mt-2 mb-2 font-weight-bold" style="color: orange;">Rp.
                                    <?php echo $harga; ?></h5>
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
        <div class="container ">
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

</main><!-- End #main -->
<br>