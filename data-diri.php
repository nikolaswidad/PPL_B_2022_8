<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Diri</h6>
        </div>
        <div class="card-body">
            <?php if ($error) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error?>  
                </div>
            <?php endif; ?>

            <form name="daftar" method="POST" action="" >
                <div class="row mb-3">
                    <div class="col-xl-3 col-lg-7">
                        <?php 
                            echo "<img class='img-thumbnail' src='upload/$foto'/>";
                            ?>
                    </div>
                    <br>
                    <div class="col-xl">
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <p class="form-control"><?php echo $nama; ?></p>                        
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">NIM</label>
                            <div class="col-sm-10">
                                <p class="form-control"><?php echo $nim; ?></p>
                            </div>                        
                        </div>
                        <div class="row">
                            <label for="angkatan" class="col-sm-4 col-form-label">Angkatan</label>
                            <div class="col-sm-10">
                                <p class="form-control"><?php echo $angkatan; ?></p>       
                            </div>
                        </div>
                        <div class="row">
                            <label for="status_mhs" class="col-sm-5 col-form-label">Status Mahasiswa</label>
                            <div class="col-sm-10">  
                                <p class="form-control"><?php echo $status_mhs; ?></p> 
                            </div>
                        </div>
                        <div class="row">
                                <label for="hp" class="col-sm-4 col-form-label">Nomor HP</label>
                                <div class="col-sm-10">    
                                    <p class="form-control"><?php echo $hp; ?></p>  
                                </div>
                        </div>
                    </div>
                        
                        <div class="col-xl">               
                            <div class="row">
                                <label for="nip" class="col-sm-4 col-form-label">Dosen Wali</label>
                                <div class="col-sm-10">  
                                    <p class="form-control"><?php echo $dosen; ?></p> 
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-10">                        
                                        <p class="form-control"><?php echo $emailmhs; ?></p>  
                                    </div>
                            </div>
                            <div class="row">
                                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                <div class="col-sm-10">    
                                    <p class="form-control"><?php echo $alamat; ?></p>  
                                </div>
                            </div>
                            <div class="row">
                                <label for="alamat" class="col-sm-4 col-form-label">Provinsi</label>
                                <div class="col-sm-10">    
                                    <p class="form-control"><?php echo $provinsi; ?></p>  
                                </div>
                            </div>
                            <div class="row">
                                <label for="alamat" class="col-sm-4 col-form-label">Kota/Kabupaten</label>
                                <div class="col-sm-10">    
                                    <p class="form-control"><?php echo $kabupaten; ?></p>  
                                </div>
                            </div>
                        </div>

            </form>
        </div>
    </div>

</div>