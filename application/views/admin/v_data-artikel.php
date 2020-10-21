<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">KPTI</a></li>
                        <li class="breadcrumb-item"><a href="#">Artikel </a></li>
                        <li class="breadcrumb-item active">Data Artikel </li>
                    </ol>
                </div>
                <h5 class="page-title">Data Artikel </h5>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title"> Artikel</h4>
                        <p class="text-muted m-b-30 font-14">
                            Data artikel tentang seputar property yang sudah diposting
                        </p>

                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive  text-justify"
                                style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Artikel</th>
                                        <th>Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data->result_array() as $i) :
                                        $id_artikel = $i['id_artikel'];
                                        $judul_artikel = $i['judul_artikel'];
                                        $isi_artikel = $i['isi_artikel'];
                                        $foto_artikel = $i['foto_artikel'];
                                    ?>

                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $judul_artikel; ?></td>


                                        <td class="text-center">

                                            <span data-toggle="modal"
                                                data-target="#modal-detail<?php echo $id_artikel; ?>">
                                                <button type="button" class="btn btn-small btn-info"
                                                    data-placement="top" title="Detail Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-clipboard-text font-weight-bold text-white"></i>
                                                </button>
                                            </span>

                                            <span data-toggle="modal"
                                                data-target="#modal-edit<?php echo $id_artikel; ?>">
                                                <button type="button" class="btn btn-small btn-warning"
                                                    data-placement="top" title="Edit Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-lead-pencil font-weight-bold text-white"></i>
                                                </button>
                                            </span>

                                            <span data-toggle="modal"
                                                data-target="#modal-hapus<?php echo $id_artikel; ?>">
                                                <button type="button" class="btn btn-small btn-danger"
                                                    data-placement="top" title="Hapus Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-delete font-weight-bold text-white"></i>
                                                </button>
                                            </span>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
foreach ($data->result_array() as $i) :
    $id_artikel = $i['id_artikel'];
    $judul_artikel = $i['judul_artikel'];
    $isi_artikel = $i['isi_artikel'];
    $foto_artikel = $i['foto_artikel'];
?>

<!-- DETAIL MODAL -->
<div id="modal-detail<?php echo $id_artikel; ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Detail Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                
            <div class="text-center">
                    <img class="img-fluid w-50 h-50" alt="100x100"
                        src="<?php echo base_url() . 'uploads/artikel/'. $foto_artikel; ?>" data-holder-rendered="true">
                       
                </div>
            
                <div class="mt-4 mb-4 ml-4">
                    <input type="hidden" name="id_kriteria" value="<?php echo $id_artikel;?>" />
                    
                    <h5 class="text-center"><?php echo $judul_artikel; ?></h5>
                </div>


                <div class="m-4">
                    <?php echo $this->typography->auto_typography($isi_artikel)?>
                </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endforeach; ?>




<?php
foreach ($data->result_array() as $i) :
    $id_artikel = $i['id_artikel'];
    $judul_artikel = $i['judul_artikel'];
    $isi_artikel = $i['isi_artikel'];
    $foto_artikel = $i['foto_artikel'];
?>

<!-- EDIT MODAL -->
<div id="modal-edit<?php echo $id_artikel;?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/artikel/update/'.$id_artikel;?>" method="post"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Judul Artikel</label>
                        <input type="hidden" name="id_artikel" value="<?php echo $id_artikel;?>" />
                        <input type="text" class="form-control" name="judul_artikel"
                            value="<?php echo $judul_artikel;?>" />
                        
                    </div>

                    <div class="form-group">
                        <label for=isi_artikel>Ringkasan berita</label>
                        <div>
                            <textarea id="elm1" name="isi_artikel" >
                            <?php echo $this->typography->auto_typography($isi_artikel)?></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <label>Thumbnail Artikel</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6 w-25 h-25">
                                <img class="img-thumbnail w-75 h-75"
                                    src="<?php echo base_url() . 'uploads/artikel/'. $foto_artikel;?>">
                                    <input type="hidden" value="<?php echo $foto_artikel;?>" name="gambar">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="foto_artikel">Pilih file Foto</label>
                                    <input type="file" class="custom-file-input" id="custom-file" name="foto_artikel">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endforeach; ?>





<?php
foreach ($data->result_array() as $i) :
    $id_artikel = $i['id_artikel'];
    $judul_artikel = $i['judul_artikel'];
    $isi_artikel = $i['isi_artikel'];
    $foto_artikel = $i['foto_artikel'];
?>

<!-- Modal Hapus -->
<div id="modal-hapus<?php echo $id_artikel; ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title mt-0 " id="myModalLabel">Hapus Artikel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/artikel/delete/' . $id_artikel; ?>" method="post">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus <b
                            class="h6 bg-danger text-white pr-2 pl-2"><?php echo $judul_artikel; ?></b> dari data
                        kriteria?</p>
                    <p class="text-danger text-left pt-1 mb-0">*Data yang dihapus tidak akan bisa
                        dikembalikan</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>