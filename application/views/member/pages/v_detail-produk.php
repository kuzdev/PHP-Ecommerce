<main id="main">


    <!-- ======= Produk Section ======= -->
    <section id="produk" class="produk" style="padding-top: 90px;">
    <?php
                                    foreach ($query->result() as $i) 
                                     {
                                    ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-6 col-xs-12 pt-2 pb-3">
                    <div class="container card-box pb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 pl-0 pr-0">
                                <div class="container p-0">
                                    <div class="slider-for" style="height: 260px; width: 100%;">
                                        <div>
                                            <img class="img-fluid" style="width: 100%; height: 270px;"
                                                src="<?php echo base_url() . 'uploads/produk/'. $i->fotoproyek1 ?>">
                                        </div>
                                        <div>
                                            <img class="img-fluid" style="width: 100%; height: 270px;"
                                                src="<?php echo base_url() . 'uploads/produk/'. $i->fotoproyek2 ?>">
                                        </div>
                                        <div>
                                            <img class="img-fluid" style="width: 100%; height: 270px;"
                                                src="<?php echo base_url() . 'uploads/produk/'. $i->fotoproyek3 ?>">
                                        </div>
                                        <div>
                                            <img class="img-fluid" style="width: 100%; height: 270px;"
                                                src="<?php echo base_url() . 'uploads/produk/'. $i->fotoproyek4 ?>">
                                        </div>
                                        <div>
                                            <img class="img-fluid" style="width: 100%; height: 270px;"
                                                src="<?php echo base_url() . 'uploads/produk/'. $i->fotoproyek5 ?>">
                                        </div>

                                    </div>
                                    <div class="container">
                                        <div class="slider-nav pt-2">
                                            <div>
                                                <img class="img-fluid p-1" style="width: 100%; height: 100px;"
                                                    src="<?php echo base_url() . 'uploads/produk/'. $i->fotoproyek1 ?>">
                                            </div>
                                            <div>
                                                <img class="img-fluid p-1" style="width: 100%; height: 100px;"
                                                    src="<?php echo base_url() . 'uploads/produk/'. $i->fotoproyek2 ?>">
                                            </div>
                                            <div>
                                                <img class="img-fluid p-1" style="width: 100%; height: 100px;"
                                                    src="<?php echo base_url() . 'uploads/produk/'. $i->fotoproyek3 ?>">
                                            </div>
                                            <div>
                                                <img class="img-fluid p-1" style="width: 100%; height: 100px;"
                                                    src="<?php echo base_url() . 'uploads/produk/'. $i->fotoproyek4 ?>">
                                            </div>
                                            <div>
                                                <img class="img-fluid p-1" style="width: 100%; height: 100px;"
                                                    src="<?php echo base_url() . 'uploads/produk/'. $i->fotoproyek5 ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 pt-2 pb-2">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-xs-12 pt-3 pb-3">
                                        <h4><?php echo $i->nama_proyek; ?></h4>
                                        <span class="h6 font-weight-bold"><?php echo $i->judul_proyek; ?></span>
                                        <p class="text-muted mb-2"><small><?php echo $i->kabupaten_proyek; ?>,<?php echo $i->provinsi_proyek; ?></small></p>
                                        <hr width="100%" class="m-0">
                                    </div>
                                </div>
                                <span class="badge badge-success p-2">Tersedia</span>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-xs-12 pt-2 pb-2">
                    <div class="container card-box">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-xs-12 p-3 "
                                style="background-color: #f39c12; width: 100%;">
                                <p class="h5 font-weight-bold mb-2 text-center" style="color: white;">Dijual Harga Total</p>
                                <p class="h4 font-weight-bold text-center" style="color: white;">Rp <?php echo $i->harga_total_proyek;?> </p>
                            </div>

                            <div class="col-lg-12 col-md-6 col-xs-12 pl-0 pr-0 pt-3 pb-3">
                                <div class="container">
                                    <p class="h6 font-weight-bold mb-0">Pemasang Iklan</p>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-xs-12 w-50 mt-3">
                                            <img class="img-circle"
                                                src="https://images.pexels.com/photos/3354346/pexels-photo-3354346.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                                alt="Luas Tanah"
                                                style="border-radius: 50%;width: 60px; height: 60px; margin-right: 10px; margin-left: 10px;">
                                        </div>
                                        <div class="col-lg-8 col-md-6 col-xs-12 w-50 mt-3">
                                            <p class="h4 font-weight-bold"><?php echo $i->nama_pengelola;?></p>
                                            <p class="h6 font-weight-bold"><?php echo $i->nama_kantor;?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr width="100%">
                            <div class="col-lg-12 col-md-6 col-xs-12  pl-3 pr-3 pt-3 pb-4">
                                <button type="button" class="btn btn-danger btn-block"><?php echo $i->nomor_hp;?></button>
                                <button type="button" class="btn btn-success btn-block">WA Hubungi Kami</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           <div class="container">
           <div class="row">
                <div class="col-lg-9 col-md-6 col-xs-12 pt-3 pb-3" style="background-color: #2d98da;">
                    <span class="h5" style="color: white;">Detail Produk</span>
                </div>
                <div class="col-lg-9 col-md-6 col-xs-12 p-0 border">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-6 col-xs-12 pt-4 pb-4 ">
                                <p class="h6 font-weight-bold">Spesifikasi</p>
                            </div>
                            <div class="col-lg-10 col-md-6 col-xs-12 pt-4 pb-4 ">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-xs-12 w-50 pr-0">
                                        <ul style="list-style: none; padding-inline-start:0px">
                                            <li class="display-6">Sertifkat</li>
                                            <li class="display-6">Luas Tanah</li>
                                            <li class="display-6">Luas Depan</li>
                                           
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-xs-12 w-50 pl-0">
                                        <ul style="list-style: none; padding-inline-start:0px">
                                            <li class="display-6">: <b><?php echo $i->sertifikat_proyek;?></b> </li>
                                            <li class="display-6">: <b><?php echo $i->luastanah_proyek;?>m<sup>2</sup></b></li>
                                            <li class="display-6">: <b><?php echo $i->lebar_depan_proyek;?>m<sup>2</sup></b></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-xs-12 w-50 pr-0">
                                        <ul style="list-style: none; padding-inline-start:0px">
                                            <li class="display-6">Fasilitas terdekat</li>
                                            <li class="display-6">Jarak Pusat Kota</li>
                                            <li class="display-6">Harga/m</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-xs-12 w-50 pl-0">
                                        <ul style="list-style: none; padding-inline-start:0px">
                                            <li class="display-6">: <b><?php echo $i->fasilitas_proyek;?></b> Fasilitas</li>
                                            <li class="display-6">: <b><?php echo $i->jarak_proyek;?></b> Km</li>
                                            <li class="display-6">: Rp. <b><?php echo $i->harga_m_proyek;?></b></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-xs-12 p-0 border">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-6 col-xs-12 pt-4 pb-4 ">
                                <p class="h6 font-weight-bold">Deskripsi</p>
                            </div>
                            <div class="col-lg-10 col-md-6 col-xs-12 pt-2 pb-4 ">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-xs-12">
                                        <p class="display-6 text-justify mb-3"><?php echo $this->typography->auto_typography($i->deskripsi_proyek); ?></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </div>
        </div>
        <?php } ?>
    </section><!-- End Produk Section -->





</main><!-- End #main -->