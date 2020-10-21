                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Input Masks</h4>
                                            <p class="text-muted m-b-30 font-14">Input masks can be used to force the
                                                user to enter data conform a specific format. Unlike validation, the
                                                user can't enter any other key than the ones specified by the mask.
                                            </p>
            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="p-20">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label>Nama Toko</label>
                                                                    <input type="text" class="form-control" name="nama_produk"
                                                                    placeholder="Masukkan nama Toko" required />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Provinsi</label>
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
            
                                                        </form>
                                                    </div>
                                                </div>
            
                                                <div class="col-lg-6">
                                                    <div class="p-20">
                                                    <form action="#">
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
            
                                                        </form>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>