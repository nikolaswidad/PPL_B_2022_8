<?php
session_start(); //inisialisasi session
require_once('config.php');
$email = $_SESSION['username'];
$id_user = $_SESSION['user_id'];
$nim = $_SESSION['nim'];

$select = 'SELECT * FROM mhs WHERE nim="' . $nim . '"';

$ress = $conn->query($select);

if ($ress->num_rows > 0) {
  while ($row = $ress->fetch_assoc()) {
    $foto = $row['foto'];
    $nama = $row['nama'];
    $status_mhs = $row['status_mhs'];
    $nim = $row['nim'];
    $angkatan = $row['angkatan'];
    $alamat = $row['alamat'];
    $hp = $row['hp'];
    $nip = $row['nip'];
    $id_status = $row['status_mhs'];
    $provinsi = $row['id_provinsi'];
    $kabupaten = $row['id_kabupaten'];
  }
}
// var_dump($id_status);
// var_dump($provinsi);
// var_dump($kabupaten);
// var_dump($foto);
// var_dump($nip);
 var_dump($nim);

// Check if already submit the form
if (isset($_POST['submit'])) {
  $submit = true;

  $nama = $conn->real_escape_string(trim($_POST['nama']));
  $nim = $conn->real_escape_string(trim($_POST['nim']));
  $angkatan = $conn->real_escape_string(trim($_POST['angkatan']));
  $status_mhs = $conn->real_escape_string(trim($_POST['status_mhs']));
  $nip = $conn->real_escape_string(trim($_POST['nip']));
  $hp = $conn->real_escape_string(trim($_POST['hp']));
  $email = $conn->real_escape_string(trim($_POST['email']));
  $alamat = $conn->real_escape_string(trim($_POST['alamat']));
  $provinsi = $conn->real_escape_string(trim($_POST['provinsi']));
  $kabupaten = $conn->real_escape_string(trim($_POST['kabupaten']));

  $foto = $_POST['foto'];
  $lokasi_file = $_FILES['foto']['tmp_name'];
  $foto = $_FILES['foto']['name'];
  $dir = "upload/$foto";


  // If submit is true, insert the data
  if ($submit) {

    // Membuat data mahasiswa yang sudah tersambung ke user_id
    // $query = "INSERT INTO mhs (id_user, foto, nama, nim, angkatan, status_mhs, nip, hp, email, alamat, id_provinsi, id_kabupaten) VALUES ('$id_user' ,'$namefile', '$nama', '$nim', '$angkatan', '$status_mhs', '$nip', '$hp', '$email', '$alamat', $provinsi, $kabupaten)";
    $query = "UPDATE mhs SET foto = '$foto', id_user = '$id_user', nama = '$nama', angkatan = '$angkatan', 
     status_mhs = '$status_mhs', nip = '$nip', hp = '$hp', email = '$email', alamat = '$alamat', id_provinsi = '$provinsi', id_kabupaten = '$kabupaten' WHERE nim = '$nim'  ";
    move_uploaded_file($lokasi_file,$dir);
    
    $result = $conn->query($query);

    if ($result) {
      $success = true;
      header('location: mhs_view_data-diri.php');
    }

    // if (!$result) {
    //   $success = false;
    //   $error_message = "Data Sudah Ada";
    // } else {
    //   $success = true;
    //   header('location: mhs_view_data-diri.php');
    // }

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

                <div class="card-header">Masukkan Data Diri</div>
                  <div class="card-body">
                    <!-- /* TODO definisikan method dan actions */ -->
                    <form name="daftar" method="POST" action=""  enctype="multipart/form-data">
                      <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Upload Foto</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" id="foto" name="foto" value="<?php if (isset($foto)) echo $foto; ?>">
                        </div>
                      </div>
                      
                      <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">                        
                          <input type="text" name="nama" id="nama" class="form-control" value="<?php if (isset($nama)) echo $nama; ?>">
                          <div id="error_name" style="color: red;">
                            <?php if (isset($error_nama))  echo $error_nama ?>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">                        
                          <input type="text" name="nim" id="nim" class="form-control" value="<?php if (isset($nim)) echo $nim; ?>">
                          <!-- <div id="error_name" style="color: red;">
                            <?php if (isset($error_nim))  echo $error_nim ?>
                          </div> -->
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                        <div class="col-sm-10">  
                          <input type="text" name="angkatan" id="angkatan" class="form-control" value="<?php if (isset($angkatan)) echo $angkatan; ?>">
                          <div id="error_name" style="color: red;">
                            <?php if (isset($error_angkatan))  echo $error_angkatan ?>
                          </div>
                        </div>
                      </div>
                      
                      <!-- get status -->
                      <div class="row mb-3">
                        <label for="status_mhs" class="col-sm-2 col-form-label">Status Mahasiswa</label>
                        <div class="col-sm-10">  
                          <select name="status_mhs" id="status_mhs" class="form-control">
                            <option value="none" <?php if (!isset($id_status)) echo 'selected="true"'; ?> selected disabled>Pilih Status</option>
                            <option value="Aktif" <?php if (isset($id_status) && $id_status == 'Aktif') echo 'selected="true"'; ?>>Aktif</option>
                            <option value="Cuti"<?php if (isset($id_status) && $id_status == 'Cuti') echo 'selected="true"'; ?>>Cuti</option>
                            <option value="Mangkir"<?php if (isset($id_status) && $id_status == 'Mangkir') echo 'selected="true"'; ?>>Mangkir</option>
                            <option value="DO"<?php if (isset($id_status) && $id_status == 'DO') echo 'selected="true"'; ?>>DO</option>
                            <option value="Undur Diri"<?php if (isset($id_status) && $id_status == 'Undur Diri') echo 'selected="true"'; ?>>Undur Diri</option>
                            <option value="Lulus"<?php if (isset($id_status) && $id_status == 'Lulus') echo 'selected="true"'; ?>>Lulus</option>
                            <option value="Meninggal"<?php if (isset($id_status) && $id_status == 'Meninggal') echo 'selected="true"'; ?>>Meninggal</option>
                          </select>
                          <div id="error_status_mhs" style="color: red;">
                            <?php if (isset($error_status_mhs))  echo $error_status_mhs ?>
                          </div>
                        </div>
                      </div>

                      <!-- get dosen -->
                      <div class="row mb-3">
                        <label for="nip" class="col-sm-2 col-form-label">Dosen Wali</label>
                        <div class="col-sm-10">  
                          <select name="nip" id="nip" class="form-control">
                            <option value="" <?php if (!isset($nip)) echo 'selected="true"'; ?> >Pilih Dosen Wali</option>
                            <?php 
                            $query = "SELECT * FROM dosen";
                            $result = mysqli_query($conn, $query);
                            while ($row = $result->fetch_object()) {
                              echo "<option value='" . $row->nip . "'  >" . $row->nama . "</option>";
                            }
                            ?>
                          </select>
                          <div id="error_nip" style="color: red;">
                            <?php if (isset($error_nip))  echo $error_nip ?>
                          </div>
                        </div>
                      </div>
                        
                        <div class="row mb-3">
                          <label for="hp" class="col-sm-2 col-form-label">Nomor HP</label>
                          <div class="col-sm-10">    
                            <input type="text" name="hp" id="hp" class="form-control" value="<?php if (isset($hp)) echo $hp; ?>">
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
                            <textarea name="alamat" id="alamat" rows="3" class="form-control"><?php if (isset($alamat)) echo $alamat; ?></textarea>
                            <div id="error_alamat" style="color: red;">
                              <?php if (isset($error_alamat))  echo $error_alamat ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                          <div class="col-sm-10">    
                            <select onchange="getKabupaten()" name="provinsi" id="provinsi" class="form-control">
                              <option value="">Pilih Provinsi</option>
                              <!-- /* TODO tampilkan daftar provinsi menggunakan ajax */ -->
                              <!-- DONE: Ditaruh di body onload -->
                            </select>
                            <div id="error_provinsi" style="color: red;">
                              <?php if (isset($error_provinsi))  echo $error_provinsi ?>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="kabupaten" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                          <div class="col-sm-10">    
                            <select name="kabupaten" id="kabupaten" class="form-control">
                            <option value="">Pilih Kota/Kabupaten</option>
                            <!-- /* TODO tampilkan daftar kabupaten berdasarkan pilihan provinsi sebelumnya, menggunakan ajax*/ -->
                            <!-- DONE: onchange bagian provinsi -->
                            </select>
                            <div id="error_kabupaten" style="color: red;">
                              <?php if (isset($error_kabupaten))  echo $error_kabupaten ?>
                            </div>
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



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>