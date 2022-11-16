<?php
session_start(); //inisialisasi session
require_once('config.php');
$email = $_SESSION['username'];
$id_user = $_SESSION['user_id'];
$nim = $_SESSION['nim'];
var_dump($nim);

$select = "SELECT * FROM mhs WHERE id_user = '$id_user'";
$result = $conn->query($select);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $nama = $row['nama'];
    $status_mhs = $row['status_mhs'];
    $nim = $row['nim'];
    $angkatan = $row['angkatan'];
    $alamat = $row['alamat'];
    $hp = $row['hp'];
  }
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
    <?php include('mhs_nav.html'); ?>

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
                <div class="card-body">
                  <!-- /* TODO definisikan method dan actions */ -->
                  <form name="daftar" method="POST" action="" >
                    
                    <div class="row mb-3">
                      <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-10">                        
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $nama; ?>" readonly>
                        <div id="error_name" style="color: red;">
                          <?php if (isset($error_nama))  echo $error_nama ?>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                      <div class="col-sm-10">                        
                        <input type="text" name="nim" id="nim" class="form-control" value="<?php echo $nim; ?>" readonly>
                        <!-- <div id="error_name" style="color: red;">
                          <?php if (isset($error_nim))  echo $error_nim ?>
                        </div> -->
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                      <div class="col-sm-10">  
                        <input type="text" name="angkatan" id="angkatan" class="form-control" value="<?php echo $angkatan; ?>" readonly>
                        <div id="error_name" style="color: red;">
                          <?php if (isset($error_angkatan))  echo $error_angkatan ?>
                        </div>
                      </div>
                    </div>
                    
                    <!-- get status -->
                    <div class="row mb-3">
                      <label for="status_mhs" class="col-sm-2 col-form-label">Status Mahasiswa</label>
                      <div class="col-sm-10">  
                        <input type="text" name="status_mhs" id="status_mhs" class="form-control" value="<?php echo $status_mhs; ?>" readonly>
                        <div id="error_status_mhs" style="color: red;">
                          <?php if (isset($error_status_mhs))  echo $error_status_mhs ?>
                        </div>
                      </div>
                    </div>

                      
                      <div class="row mb-3">
                        <label for="hp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">    
                          <input type="text" name="hp" id="hp" class="form-control" value="0<?php echo $hp; ?>" readonly>
                          <div id="error_name" style="color: red;">
                            <?php if (isset($error_hp))  echo $error_hp ?>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">                        
                        <input type="text" name="email" id="email" class="form-control" value="<?php if (isset($email)) echo $email; ?>" readonly>
                        <!-- <div id="error_name" style="color: red;">
                          <?php if (isset($error_email))  echo $error_email ?>
                        </div> -->
                      </div>
                    </div>
                      <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">    
                          <textarea name="alamat" id="alamat" rows="3" class="form-control" readonly><?php echo $alamat; ?></textarea>
                          <div id="error_alamat" style="color: red;">
                            <?php if (isset($error_alamat))  echo $error_alamat ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <a href="mhs_data-diri.php" class="btn btn-primary container-fluid">Belum Input Data</a>
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