<?php
session_start(); //inisialisasi session
require_once('config.php');
$email = $_SESSION['username'];
$id_user = $_SESSION['user_id'];
$nim = $_SESSION['nim'];


$select = "SELECT mhs.foto AS foto, mhs.nama AS nama, mhs.status_mhs, mhs.nim, mhs.angkatan, mhs.alamat, mhs.hp, dosen.nama AS nama_dosen, provinsi.nama AS nama_provinsi, kabupaten.nama AS nama_kabupaten
          FROM mhs INNER JOIN provinsi ON mhs.id_provinsi = provinsi.id INNER JOIN kabupaten ON mhs.id_kabupaten = kabupaten.id INNER JOIN dosen ON mhs.nip = dosen.nip
          WHERE nim = '$nim'";
$result = $conn->query($select);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $foto = $row['foto'];
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
    $_SESSION['nama'] = $row['nama'];
  }
} else {
  $foto = "";
  $nama = "";
  $status_mhs = "";
  $nim = "";
  $angkatan = "";
  $alamat = "";
  $hp = "";
  $dosen = "";
  $provinsi = "";
  $kabupaten = "";
  $error = "Belum mengisi data, silahkan lakukan update data";
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

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
              <?php include('header.html'); ?>

              <?php include('data-diri.php'); ?>
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