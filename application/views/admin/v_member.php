<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">KPK</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Member</a></li>
                        <li class="breadcrumb-item active">Member</li>
                    </ol>
                </div>
                <h5 class="page-title">Member</h5>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Member</h4>
                        <p class="text-muted m-b-30 font-14">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aspernatur impedit aliquid,
                            officiis debitis quidem? Earum autem recusandae a dolor doloribus voluptas voluptates enim
                            natus soluta vitae, aut quis consectetur!
                        </p>


                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive  text-justify"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Member</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Alamat </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                     $no=1;
                                    foreach($data->result_array() as $i):
                                            $id_member=$i['id_member'];
                                            $nama_member=$i['nama_member'];
                                            $username_member=$i['username_member'];
                                            $email_member=$i['email'];
                                            $alamat_member=$i['alamat'];
                                    ?>

                                    <tr>
                                        <th scope="row" class="text-center"><?php echo $no++; ?></th>
                                        <td><?php echo $nama_member;?></td>
                                        <td><?php echo $username_member;?></td>
                                        <td><?php echo $email_member;?></td>
                                        <td><?php echo $alamat_member;?></td>                    
                                    </tr>
                                    <?php endforeach;?>
                                 
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container fluid -->
</div> <!-- Page content Wrapper -->