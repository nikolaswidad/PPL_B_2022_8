<?php
session_start(); //inisialisasi session
require_once 'config.php';
$nim = $_SESSION['username'];
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

        <!-- Sidebar -->
        <!-- Sidebar -->
    <?php include('departemen_nav.html')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            <?php include('header.html')?>
            
            <div class="card">
                    <!-- If there is success variable, show message -->
                    
                    <div class="card-header">Data Mahasiswa</div>
                    <div class="form-group row mt-2">
                    <div class="col-sm-10">
                      <input type="text" name="keyword" class="form-control" id="">
                    </div>
                    <input type="submit" value="Cari">
                  </div>
                
            <br>
                    <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Lama Studi</th>
                            <th scope="col">Tanggal Sidang</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Status</th>
                            <th scope="col">Verif</th>
                            <th scope="col">Bukti</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        
                        

                        

                        
                    

                        if(isset($_GET['keyword'])){
                            $cari = $_GET['cari_jenis_barang'];
                            $data = mysqli_query($conn, "SELECT * FROM mhs INNER JOIN skripsi ON skripsi.nim = mhs.nim WHERE mhs.nama LIKE '%".$Cari."%'");
                        }else{
                            $data = mysqli_query($conn, "SELECT * FROM mhs INNER JOIN skripsi ON skripsi.nim = mhs.nim");
                        }
                        $no = 1;
                        while ($row = mysqli_fetch_array($data)) {
                            echo "<tr>";
                            echo "<th>".$no."</th>";
                            echo "<td>".$row['nama']."</td>";
                            echo "<td>".$row['nim']."</td>";
                            echo "<td>".$row['angkatan']."</td>";
                            echo "<td>".$row['lama_studi']." Semester</td>";
                            echo "<td>".$row['tanggal_sidang']."</td>";
                            echo "<td>".$row['nilai']."</td>";
                            echo "<td>".$row['id_status']."</td>";
                            echo "<td>".$row['verif']."</td>";
                            echo '<td><a class="btn btn-info" href="#">Lihat</a></td>';
                            echo '<td><a class="btn btn-warning" href="verif_skripsi.php?nim='.$row["nim"].'">Verif</a></td>';
                            echo "</tr>";
                            $no++;
                            
                        }
                        echo '</tbody>';
                        echo '</table>';
    
                        $data->free();
                        $conn->close();

                        
                       
                        ?>
                        </tbody>
                        </table> 
                    </div>

                </div>

                <!-- Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

              <!-- General Form Elements -->
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
                    <a class="btn btn-primary" href="index.php">Logout</a>
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