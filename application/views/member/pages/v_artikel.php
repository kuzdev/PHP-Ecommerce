<main id="main">

<section id="artikel">
    <div class="container" style="padding-top: 30px;">
        <div class="row">
        <?php
foreach ($data->result_array() as $i) :
    $id_artikel = $i['id_artikel'];
    $judul_artikel = $i['judul_artikel'];
    $isi_artikel = $i['isi_artikel'];
    $foto_artikel = $i['foto_artikel'];
?>

                                    
            <div class="col-lg-12 col-md-6 col-xs-12">
                <div class="card mt-3 mb-3" style="border: none; background:#f5f8fd">
                    <div class="row ">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <img src="<?php echo base_url() . 'uploads/artikel/'. $foto_artikel; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-lg-8 col-md-6 col-xs-12 px-3 mb-4">
                            <div class="card-block pt-0">
                                <h4 class="card-title"><?php echo $judul_artikel; ?></h4>
                                <p class="card-text text-justify"><?php echo word_limiter($this->typography->auto_typography($isi_artikel),50)?></p>
                               <a  class="btn btn-primary btn-sm" href="<?php echo base_url() . 'member/artikel/detail_artikel/'.$id_artikel; ?>"> Selengkapnya &rarr;</a>
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
          

        

          
          

        </div>
    </div>
</section>




</main><!-- End #main -->
