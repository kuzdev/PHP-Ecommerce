<!--  -->
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">KuzCommerce</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Produk</a></li>
                        <li class="breadcrumb-item active">Detil Data Produk</li>
                    </ol>
                </div>
                <h5 class="page-title">Detil Data Produk</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Produk</h4>
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
                                        Data</span></button>
                            </div>


                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive  text-justify"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Produk</th>
                                            <th class="text-center">Kategori</th>
                                            <th class="text-center">Thumbnail</th>
                                            <th class="text-center">Harga</th>
                                            <th class="text-center">Diskon</th>
                                            <th class="text-center">Deskripsi</th>
                                            <th class="text-center">Berat Produk</th>
                                            <th  class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-striped">
                                        <?php
                                    $no=1;
                                       foreach($data->result_array() as $i):
                                           $id_produk=$i['id_produk'];
                                           $nama_produk=$i['nama_produk'];
                                           $id_kategori=$i['nama_kategori'];
                                           $foto_produk=$i['foto_produk'];
                                           $harga=$i['harga'];
                                           $diskon=$i['diskon'];
                                           $deskripsi=$i['deskripsi'];
                                           $berat_produk=$i['berat_produk'];
                                   ?>
                                        <tr>
                                            <th class="text-center" scope="row"><?php echo $no++; ?></th>
                                            <td class="text-center"><?php echo $nama_produk;?></td>
                                            <td class="text-center"><?php echo $id_kategori;?></td>
                                            <td class="text-center"><?php echo $foto_produk;?></td>
                                            <!-- <td class="text-center"><img src="<?php echo base_url().'/uploads/produk/'.$i->foto_produk?>"></td> -->
                                            <td class="text-center"><?php echo $harga;?></td>
                                            <td class="text-center"><?php echo $diskon;?></td>
                                            <td class="text-center"><?php echo $deskripsi;?></td>
                                            <td class="text-center"><?php echo $berat_produk;?></td>


                                            <td  class="text-center">
                                                <span data-toggle="modal"
                                                    data-target="#modal-detail<?php echo $id_produk; ?>">
                                                    <button type="button" class="btn btn-small btn-info"
                                                        data-placement="top" title="Detail Data" data-toggle="tooltip">
                                                        <i class="mdi mdi-clipboard-text font-weight-bold text-white"></i>
                                                    </button>
                                                </span>

                                                <span data-toggle="modal"
                                                    data-target="#modal-edit<?php echo $id_produk;?>">
                                                    <button type="button" class="btn btn-small btn-warning"
                                                        data-placement="top" title="Edit Data" data-toggle="tooltip">
                                                        <i class="mdi mdi-lead-pencil font-weight-bold text-white"></i>
                                                    </button>
                                                </span>

                                                <span data-toggle="modal"
                                                    data-target="#modal-hapus<?php echo $id_produk;?>">
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
                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/produk/save'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk"
                            placeholder="Masukkan nama Produk" required />
                    </div>
                    
                   

                    <div class="form-group">
                        <label>Kategori</label>
                        <div class="form-group">
                            <select class="form-control" name="id_kategori" required>
                            
                                <?php foreach($combo as $cmb){ ?>
                                <option value="<?php echo $cmb->id_kategori ?>">
                                    <?php echo $cmb->nama_kategori?>
                                </option>
                                <?php } ?>             
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group mb-2">
                        <label>Thumbnail Produk</label>
                        <div class="custom-file">
                            <label class="custom-file-label" for="customFile">Pilih file Foto</label>
                            <input type="file" class="custom-file-input" id="customFile" name="foto_produk" required>
                        </div>
                    </div>
                    <!-- <div class="form-group mb-2">
                        <label>Foto Produk 1</label>
                        <div class="custom-file">
                            <label class="custom-file-label" for="customFile">Pilih file Foto</label>
                            <input type="file" class="custom-file-input" id="customFile" name="foto_artikel" required>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Foto Produk 2</label>
                        <div class="custom-file">
                            <label class="custom-file-label" for="customFile">Pilih file Foto</label>
                            <input type="file" class="custom-file-input" id="customFile" name="foto_artikel" required>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Foto Produk 3</label>
                        <div class="custom-file">
                            <label class="custom-file-label" for="customFile">Pilih file Foto</label>
                            <input type="file" class="custom-file-input" id="customFile" name="foto_artikel" required>
                        </div>
                    </div>
                 -->
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga"
                            placeholder="Masukkan nama Produk" required />
                    </div>
                    <div class="form-group">
                        <label>Diskon</label>
                        <input type="text" class="form-control" name="diskon"
                            placeholder="Masukkan nama Produk" required />
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi"
                            placeholder="Masukkan nama Produk" required />
                    </div>
                    <div class="form-group">
                        <label>Nilai Bobot</label>
                        <div>
                            <input type="number" name="berat_produk" class="form-control" step="0.1" min="0.1"
                                max="10" placeholder="Masukkan nilai bobot" required />
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label>Jumlah Stok</label>
                        <input type="text" class="form-control" name="nama_Produk"
                            placeholder="Masukkan nama Produk" required />
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" class="form-control" name="nama_Produk"
                            placeholder="Masukkan nama Produk" required />
                    </div>
                    <div class="form-group">
                        <label>Ukuran</label>
                        <input type="text" class="form-control" name="nama_Produk"
                            placeholder="Masukkan nama Produk" required />
                    </div> -->
                    
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
        $id_produk=$i['id_produk'];
        $nama_produk=$i['nama_produk'];
        $id_kategori=$i['id_kategori'];
        $foto_produk=$i['foto_produk'];
        $harga=$i['harga'];
        $diskon=$i['diskon'];
        $deskripsi=$i['deskripsi'];
        $berat_produk=$i['berat_produk'];
?>

<!-- DETAIL MODAL -->
<div id="modal-detail<?php echo $id_produk; ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                
            <div class="text-center">
                    <img class="img-fluid w-50 h-50" alt="100x100"
                        src="<?php echo base_url() . 'uploads/artikel/'. $foto_produk; ?>" data-holder-rendered="true">
                       
                </div>
            
                <div class="mt-4 mb-4 ml-4">
                    <input type="hidden" name="id_kriteria" value="<?php echo $id_produk;?>" />
                    
                    <h5 class="text-center"><?php echo $nama_produk; ?></h5>
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




<!-- EDIT MODAL -->
<?php
     foreach($data->result_array() as $i):
        $id_produk=$i['id_produk'];
        $nama_produk=$i['nama_produk'];
        $id_kategori=$i['id_kategori'];
        $foto_produk=$i['foto_produk'];
        $harga=$i['harga'];
        $diskon=$i['diskon'];
        $deskripsi=$i['deskripsi'];
        $berat_produk=$i['berat_produk'];
?>

<div id="modal-edit<?php echo $id_produk;?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/produk/apdet'?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk"
                            value="<?php echo $nama_produk;?>"  required />
                    </div>
                    
                    <div class="form-group">
                        <label>Kategori</label>
                        <div class="form-group">
                            <select class="form-control" name="id_kategori" required>
                            <?php foreach($combo as $cmb){ ?>

                            <option value="<?php echo $cmb->nama_kategori ?>">
                                <?php echo $cmb->nama_kategori?>
                            </option>
                            <?php } ?>                    
                            </select>
                        </div>
                    </div>
                    
                    <!-- <div class="form-group mb-2">
                        <label>Thumbnail Produk</label>
                        <div class="custom-file">
                            <label class="custom-file-label" for="customFile">Pilih file Foto</label>
                            <input type="file" class="custom-file-input" id="customFile" name="foto_produk" required>
                        </div>
                    </div> -->
                  
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga"
                            placeholder="<?php echo $harga;?>" required />
                    </div>
                    <div class="form-group">
                        <label>Diskon</label>
                        <input type="text" class="form-control" name="diskon"
                            placeholder="<?php echo $diskon;?>" required />
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi"
                            placeholder="<?php echo $deskripsi;?>" required />
                    </div>
                    <div class="form-group">
                        <label>Nilai Bobot</label>
                        <div>
                            <input type="number" name="berat_produk" class="form-control" step="0.1" min="0.1"
                                max="10" placeholder="<?php echo $berat_produk;?>" required />
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label>Thumbnail Artikel</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6 w-25 h-25">
                                <img class="img-thumbnail w-75 h-75"
                                    src="<?php echo base_url() . 'uploads/produk/'. $foto_produk;?>">
                                    <input type="hidden" value="<?php echo $foto_produk;?>" name="gambar">
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

<!-- batas modal edit -->

<?php
     foreach($data->result_array() as $i):
        $id_produk=$i['id_produk'];
        $nama_produk=$i['nama_produk'];
        $id_kategori=$i['id_kategori'];
        $foto_produk=$i['foto_produk'];
        $harga=$i['harga'];
        $diskon=$i['diskon'];
        $deskripsi=$i['deskripsi'];
        $berat_produk=$i['berat_produk'];
?>

<!-- Modal Hapus -->
<div id="modal-hapus<?php echo $id_produk;?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title mt-0 " id="myModalLabel">Hapus Data Kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/produk/delete/'.$id_produk;?>" method="post">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus <b
                            class="h6 bg-danger text-white pr-2 pl-2"><?php echo $nama_produk;?></b> dari data
                        Produk?</p>
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