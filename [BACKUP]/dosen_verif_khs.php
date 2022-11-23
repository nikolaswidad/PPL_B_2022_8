<?php
session_start(); //inisialisasi session
require_once 'config.php';
$nim = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('href.html');?>
    
</head>

<body id="page-top">
    
    <!-- Page Wrapper -->
    <div id="wrapper">
        
        <?php include('dosen_nav.html');?>
        
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            
            <!-- Main Content -->
            <div id="content">
                <?php include('header.html');?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Verifikasi Data KHS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">      
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Angkatan</th>
                                    <th scope="col">Verif</th>
                                    <th scope="col">Scan</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if(isset($_GET['keyword'])){
                                        $cari = $_GET['cari_jenis_barang'];
                                        $data = mysqli_query($conn, "SELECT * FROM mhs INNER JOIN khs ON khs.nim = mhs.nim WHERE mhs.nama LIKE '%".$Cari."%'");
                                    }else{
                                        $data = mysqli_query($conn, "SELECT * FROM mhs INNER JOIN khs ON khs.nim = mhs.nim");
                                    }
                                    $no = 1;
                                    while ($row = mysqli_fetch_array($data)) {
                                        echo "<tr>";
                                        echo "<th>".$no."</th>";
                                        echo "<td>".$row['nama']."</td>";
                                        echo "<td>".$row['nim']."</td>";
                                        echo "<td>".$row['angkatan']."</td>";
                                        echo "<td>".$row['verif']."</td>";
                                        echo '<td><a class="btn btn-info" href="upload/' .$row['scan'] . '">Lihat</a></td>';
                                        echo '<td><a class="btn btn-warning" href="verif_khs.php?nim='.$row['nim'].'">Verif</a>
                                        <a class="btn btn-danger" href="cancel_verif_khs.php?nim='.$row["nim"].'">Cancel</a> </td>';
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>