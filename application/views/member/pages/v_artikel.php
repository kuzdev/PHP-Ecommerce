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
        <div class="mr-2 mb-4 ml-2 mt-1">
            <div class="card col-md-6" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . 'uploads/artikel/'. $foto_artikel; ?>" class="card-img mt-2" 
                        style="width: 100%; height:180px;object-fit:cover">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $judul_artikel; ?></h5>
                            <p class="card-text text-justify"><?php echo word_limiter($this->typography->auto_typography($isi_artikel),10)?></p>
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
