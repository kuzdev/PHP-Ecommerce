<main id="main">

    <section id="artikel">
        <div class="container" style="padding-top: 20px;">
            <div class="row">

        
                <div class="col-md-12 col-sm-12 col-xs-12">
                <?php
                                    foreach ($query->result() as $i) 
                                     {
                                    ?>
                                      <input type="hidden" name="id_proyek" value="<?php echo $i->id_artikel; ?>">
                    <h5 class="display-6 mb-5 font-weight-bold text-center"><?php echo $i->judul_artikel; ?></h5>
                    <div class="card-page text-center">
                                      
                        <img src="<?php echo base_url() . 'uploads/artikel/'. $i->foto_artikel ?>" class="card-img-top" style="width: 700px;height:400px;object-fit:cover" alt="Foto Artikel">
                        <div class="card-body p-0 mt-3 pb-5 text-justify">
                            <p class="justify-content-center text-justify"> <?php echo $this->typography->auto_typography($i->isi_artikel)?></p>
                        </div>
                    </div>
                                    <?php } ?>
                </div>
              
            </div>
        </div>
    </section>




</main><!-- End #main -->