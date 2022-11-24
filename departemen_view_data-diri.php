<?php
session_start(); //inisialisasi session
require_once('config.php');
$email = $_SESSION['username'];
$id_user = $_SESSION['user_id'];
$nim = $_GET['nim'];

$select = "SELECT mhs.nama AS nama, mhs.status_mhs, mhs.nim, mhs.angkatan, mhs.alamat, mhs.hp, dosen.nama AS nama_dosen, provinsi.nama AS nama_provinsi, kabupaten.nama AS nama_kabupaten
          FROM mhs INNER JOIN provinsi ON mhs.id_provinsi = provinsi.id INNER JOIN kabupaten ON mhs.id_kabupaten = kabupaten.id INNER JOIN dosen ON mhs.nip = dosen.nip
          WHERE nim = '$nim'";
$result = $conn->query($select);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $nama = $row['nama'];
    $status_mhs = $row['status_mhs'];
    $nim = $row['nim'];
    $angkatan = $row['angkatan'];
    $alamat = $row['alamat'];
    $hp = $row['hp'];
    $dosen = $row['nama_dosen'];
    $provinsi = $row['nama_provinsi'];
    $kabupaten = $row['nama_kabupaten'];
    $error = "";
  }
} else {
  $nama = "";
  $status_mhs = "";
  $nim = "";
  $angkatan = "";
  $alamat = "";
  $hp = "";
  $dosen = "";
  $provinsi = "";
  $kabupaten = "";
  $error = "Belum Mengisi Data";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIAP-SIAP</title>
    <?php include('href.html')?>

</head>

<body id="page-top" onload="getProvinsi()">
    
    <!-- Page Wrapper -->
    <div id="wrapper">
    <?php include('departemen_nav.html'); ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            <?php include('header.html'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
              <!-- General Form Elements -->
              <!-- General Form Elements -->
              <div class="card">
                <!-- If there is success variable, show message -->
                <?php if (isset($success)) : ?>
                  <?php if ($success) : ?>
                    <div class="alert alert-success" role="alert">
                      Berhasil mendaftar
                    </div>
                  <?php else : ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $error_message ?>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>

                <div class="card-header">Data Diri</div>
                <div class="card-header"><?php echo $error;?></div>
                <div class="card-body">
                  <!-- /* TODO definisikan method dan actions */ -->
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
                    <a href="departemen_datamhs.php" class="btn btn-primary container-fluid">Kembali</a>
                  </form>
                </div>
              </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>