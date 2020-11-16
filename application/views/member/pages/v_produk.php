<main id="main">

    <!-- ======= Produk Section ======= -->
    <section id="produk" class="produk section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Produk Terbaik Untuk Anda</h3>
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
                <div class="col-md-4 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                    <a href="<?= base_url('member/produk/detail_produk/'. $id_produk)?>">
                        <div class="card" >
                            <img class="card-img-top" style="width: 100%; height:300px; background-size:cover;"
                                src="<?php echo base_url() . 'uploads/produk/' . $foto_produk; ?>" alt="Foto Produk">
                            <div class="card-body p-3">
                                <h5 class="card-title mb-1 font-weight-bold" style="font-size: 14px;">
                                    <?php echo word_limiter($nama_produk, 10); ?></h5>
                                <p class="text-muted mb-0"><small class="font-weight-bold">Kategori: 
                                        <?php echo $id_kategori; ?> <?php echo $berat_produk; ?>kg</small>
                                </p>
                                 <h4 class="card-text mt-2 mb-2 font-weight-bold" style="color: orange;">Rp.
                                    <?php echo $harga; ?> </h4>
                                <div class="row pt-1 pb-1 mb-2" style=" color: black;">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-6 pr-0">
                                        <h6 class="card-text mb-0" style="color: black;">Luas :
                                            <b><?php echo $deskripsi; ?> m<sup>2</sup></b>
                                        </h6>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-6 pr-0">
                                        <h6 class="card-text mb-0" style="color: black;">Sertifikat :
                                            <b><?php echo $deskripsi; ?></b> </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Produk Section -->

</main><!-- End #main -->

