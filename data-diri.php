<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading
    <h1 class="h3 mb-2 text-gray-800">Tables</h1> --
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hai, <?php echo $_SESSION['username']; ?></h1>
        <a href="mhs_data-diri.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Update Data</a>
    </div>
    <p class="mb-4">Selamat Datang di Sistem Informasi Akademik Prestasi Informatika Universitas Diponegoro</p>

    <!-- DataTales Example -->
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
                <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <p class="form-control"><?php echo $nama; ?></p>                        
                </div>
                </div>
                <div class="row mb-3">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">                        
                    <p class="form-control"><?php echo $nim; ?></p>      
                </div>            
                </div>
                <div class="row mb-3">
                <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                <div class="col-sm-10">
                    <p class="form-control"><?php echo $angkatan; ?></p>       
                </div>
                </div>
                
                <!-- get status -->
                <div class="row mb-3">
                <label for="status_mhs" class="col-sm-2 col-form-label">Status Mahasiswa</label>
                <div class="col-sm-10">  
                    <p class="form-control"><?php echo $status_mhs; ?></p> 
                </div>
                </div>
                <div class="row mb-3">
                <label for="nip" class="col-sm-2 col-form-label">Dosen Wali</label>
                <div class="col-sm-10">  
                    <p class="form-control"><?php echo $dosen; ?></p> 
                </div>
                </div>

                
                <div class="row mb-3">
                <label for="hp" class="col-sm-2 col-form-label">Nomor HP</label>
                <div class="col-sm-10">    
                    <p class="form-control"><?php echo $hp; ?></p>  
                </div>
                </div>
                <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">                        
                    <p class="form-control"><?php echo $email; ?></p>  
                    </div>
                </div>
                <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">    
                    <p class="form-control"><?php echo $alamat; ?></p>  
                </div>
                </div>
                <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Provinsi</label>
                <div class="col-sm-10">    
                    <p class="form-control"><?php echo $provinsi; ?></p>  
                </div>
                </div>
                <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                <div class="col-sm-10">    
                    <p class="form-control"><?php echo $kabupaten; ?></p>  
                </div>
                </div>
                <br>

            </form>
        </div>
    </div>

</div>