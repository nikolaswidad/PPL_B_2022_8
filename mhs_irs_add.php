<?php
session_start(); //inisialisasi session
require_once('../config.php');
$nim = $_SESSION['nim'];

// Check if already submit the form
if (isset($_POST['submit'])) {
  $submit = true;
  // Check if smt is empty
  if (empty($_POST['smt'])) {
    $error_smt = "Semester tidak boleh kosong";
    $submit = false;
  } else {
    $smt = $conn->real_escape_string(trim($_POST['smt']));
  }

  // Check if sks is empty
  if (empty($_POST['sks'])) {
    $error_sks = "SKS tidak boleh kosong";
    $submit = false;
  } else {
    $sks = $conn->real_escape_string(trim($_POST['sks']));
  }

  // If submit is true, insert the data
  if ($submit) {

    // Membuat data mahasiswa yang sudah tersambung ke user_id
    $query = "INSERT INTO irs (nim, smt, sks) VALUES ('$nim', '$smt', '$sks')";

    $result = $conn->query($query);

    if (!$result) {
      $success = false;
      $error_message = "Gagal menyimpan!";
    } else {
      $success = true;
      // Clear all the input
      $smt = "";
      $sks = "";
    }

    $conn->close();
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

<body id="page-top">
    
    <!-- Page Wrapper -->
    <div id="wrapper">
    <?php include('mhs_nav.html'); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include('header.html'); ?>
                <div class="container-fluid">



                    <!-- Page Heading -->
              <!-- General Form Elements -->
              <!-- General Form Elements -->

              <div class="card">
                <!-- If there is success variable, show message -->
                <?php if (isset($success)) : ?>
                  <?php if ($success) : ?>
                    <div class="alert alert-success" role="alert">
                      Berhasil Menambahkan
                    </div>
                  <?php else : ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $error_message ?>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>

                <div class="card-header">Masukkan Data IRS</div>
                <div class="card-body">
                  <!-- /* TODO definisikan method dan actions */ -->
                  <form name="daftar" method="POST" action="">
                      
                    <div class="row mb-3">
                          <label for="name" class="col-sm-2 col-form-label">Semester</label>
                          <div class="col-sm-10">                        
                              <input type="text" name="smt" id="smt" class="form-control" value="<?php if (isset($smt)) echo $smt; ?>">
                              <div id="error_name" style="color: red;">
                                <php if (isset($error_smt))  echo $error_smt ?>  
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                      <label for="sks" class="col-sm-2 col-form-label">Jumlah SKS</label>
                      <div class="col-sm-10">                        
                          <input type="text" name="sks" id="sks" class="form-control" value="<?php if (isset($sks)); ?>">
                          <!-- <div id="error_name" style="color: red;">
                              <?php if (isset($error_sks))  echo $error_sks ?>
                            </div> -->
                        </div>
                    </div>
                    <div class="row mb-3" action="upload.php" method="post" enctype="multipart/form-data">
                      <label for="inputNumber" class="col-sm-2 col-form-label">Upload Foto</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    </div>
                    <br>
                    <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary container-fluid">Simpan</button>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>