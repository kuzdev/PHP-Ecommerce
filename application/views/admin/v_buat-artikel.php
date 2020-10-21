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
                <form action="<?php echo base_url() . 'admin/artikel/save'?>" method="post" enctype="multipart/form-data">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 ">Post Artikel</h4>
                            <p class="text-muted m-b-30 font-14">Form upload untuk artikel tentang seputar property</p>

                            <div class="form-group">
                                <label>Judul Artikel</label>
                                <input type="text" class="form-control input-bottom" name="judul_artikel" required placeholder="Tuliskan Judul Artikel" />
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Artikel</label>
                                <div>
                                    <textarea id="elm1" name="isi_artikel"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label>Thumbnail Artikel</label>
                            <div class="custom-file">
                                <label class="custom-file-label" for="customFile">Pilih file Foto</label>
                                <input type="file" class="custom-file-input" id="customFile" name="foto_artikel" required>

                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light btn-block">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>