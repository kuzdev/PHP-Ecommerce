<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">KuzCommerce</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Kategori</a></li>
                        <li class="breadcrumb-item active">Detil Data Kategori</li>
                    </ol>
                </div>
                <h5 class="page-title">Data Kategori</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Kategori</h4>
                        <p class="text-muted m-b-30 font-14">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aspernatur impedit aliquid,
                            officiis debitis quidem? Earum autem recusandae a dolor doloribus voluptas voluptates enim
                            natus soluta vitae, aut quis consectetur!
                        </p>


                        <div class="table-responsive">
                            <div class="text-center p-4 float-right">

                                <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal"
                                    data-target="#modal-tambah"><i
                                        class="mdi mdi-plus p-1 font-weight-bold"></i><span>Tambah
                                        Kategori</span></button>
                            </div>


                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive  text-justify"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">ID Kategori</th>
                                            <th class="text-center">Nama Kategori</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                    $no=1;
                                       foreach($data->result_array() as $i):
                                           $id_kategori=$i['id_kategori'];
                                           $nama_kategori=$i['nama_kategori'];
                                   ?>
                                        <tr>
                                            <th class="text-center" scope="row"><?php echo $no++; ?></th>
                                            <td class="text-center"><?php echo $id_kategori;?></td>
                                            <td class="text-center"><?php echo $nama_kategori;?></td>

                                            <td class="text-center">
                                                <span data-toggle="modal"
                                                    data-target="#modal-edit<?php echo $id_kategori;?>">
                                                    <button type="button" class="btn btn-small btn-warning"
                                                        data-placement="top" title="Edit Data" data-toggle="tooltip">
                                                        <i class="mdi mdi-lead-pencil font-weight-bold text-white"></i>
                                                    </button>
                                                </span>

                                                <span data-toggle="modal"
                                                    data-target="#modal-hapus<?php echo $id_kategori;?>">
                                                    <button type="button" class="btn btn-small btn-danger"
                                                        data-placement="top" title="Hapus Data" data-toggle="tooltip">
                                                        <i class="mdi mdi-delete font-weight-bold text-white"></i>
                                                    </button>
                                                </span>

                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- batas nampilin tabel -->

<!-- tambah data nih -->
<div id="modal-tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/kategori/save'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori"
                            placeholder="Masukkan nama kategori" required />
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="float-right">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary waves-effect m-l-5">
                            Batal
                        </button>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Tambah
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 
<!-- batas modal buat input data -->

<?php
     foreach($data->result_array() as $i):
        $id_kategori=$i['id_kategori'];
        $nama_kategori=$i['nama_kategori'];
?>
<!-- Modal Hapus -->
<div id="modal-hapus<?php echo $id_kategori;?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title mt-0 " id="myModalLabel">Hapus Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/kategori/delete/'.$id_kategori;?>" method="post">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus <b
                            class="h6 bg-danger text-white pr-2 pl-2"><?php echo $id_kategori;?></b> dari data
                        kategori?</p>
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
<?php endforeach;?>

<!-- edit kategori -->

<?php
     foreach($data->result_array() as $i):
        $id_kategori=$i['id_kategori'];
        $nama_kategori=$i['nama_kategori'];
?>
<!-- Modal edit -->
<div id="modal-edit<?php echo $id_kategori;?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title mt-0 " id="myModalLabel">Edit Data Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/kategori/update'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_produk"
                            placeholder="<?php echo $nama_kategori;?>" required />
                    </div>


                </div>
                <div class="modal-footer">
                    <div class="float-right">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary waves-effect m-l-5">
                            Batal
                        </button>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endforeach; ?>

            