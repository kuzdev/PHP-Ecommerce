<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">KPTI</a></li>
                        <li class="breadcrumb-item"><a href="#">Artikel</a></li>
                        <li class="breadcrumb-item active">Buat Artikel</li>
                    </ol>
                </div>
                <h5 class="page-title">Buat Artikel</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
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
</div>