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

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="data">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Mahasiswa</h1>
                    </div>
                    
                    <!-- Content Row -->
                    <div class="row">
                        
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Total</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $query = "SELECT * FROM mhs";
                                                    $result = $conn->query($query);
                                                     
                                                    $total_mhs = $result->num_rows;
                                                    echo $total_mhs." Mahasiswa";
                                                    $result->free();
                                                    
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

    
                    </div>
                </div>
                <div class="status">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Status Mahasiswa</h1>
                    </div>
                    
                    <!-- Content Row -->
                    <div class="row">
                        
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Aktif</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $query = "SELECT * FROM mhs WHERE status_mhs ='Aktif'";
                                                    $result = $conn->query($query);
                                                     
                                                    $total_mhs = $result->num_rows;
                                                    echo $total_mhs." Mahasiswa";
                                                    $result->free();
                                                    
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Cuti</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $query = "SELECT * FROM mhs WHERE status_mhs ='Cuti'";
                                                    $result = $conn->query($query);
                                                     
                                                    $total_mhs = $result->num_rows;
                                                    echo $total_mhs." Mahasiswa";
                                                    $result->free();
                                                    
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Mangkir</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $query = "SELECT * FROM mhs WHERE status_mhs ='Mangkir'";
                                                    $result = $conn->query($query);
                                                     
                                                    $total_mhs = $result->num_rows;
                                                    echo $total_mhs." Mahasiswa";
                                                    $result->free();
                                                    
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                DO</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $query = "SELECT * FROM mhs WHERE status_mhs ='DO'";
                                                    $result = $conn->query($query);
                                                     
                                                    $total_mhs = $result->num_rows;
                                                    echo $total_mhs." Mahasiswa";
                                                    $result->free();
                                                    
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Undur Diri</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $query = "SELECT * FROM mhs WHERE status_mhs ='Undur Diri'";
                                                    $result = $conn->query($query);
                                                     
                                                    $total_mhs = $result->num_rows;
                                                    echo $total_mhs." Mahasiswa";
                                                    $result->free();
                                                    
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Lulus</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $query = "SELECT * FROM mhs WHERE status_mhs ='Lulus'";
                                                    $result = $conn->query($query);
                                                     
                                                    $total_mhs = $result->num_rows;
                                                    echo $total_mhs." Mahasiswa";
                                                    $result->free();
                                                    
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Meninggal</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                    $query = "SELECT * FROM mhs WHERE status_mhs ='Meninggal'";
                                                    $result = $conn->query($query);
                                                     
                                                    $total_mhs = $result->num_rows;
                                                    echo $total_mhs." Mahasiswa";
                                                    $result->free();
                                                    
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="pkl">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Mahasiswa PKL</h1>
                    </div>
                    
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                                Belum Ambil</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                                $query = "SELECT * FROM pkl WHERE id_status ='Belum Ambil'";
                                                $result = $conn->query($query);

                                                $status_pkl = $result->num_rows;
                                                $result->free();
                                                echo $status_pkl." Mahasiswa";
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Sedang Ambil</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                $query = "SELECT * FROM pkl WHERE id_status ='Sedang Ambil'";
                                                $result = $conn->query($query);

                                                $status_pkl = $result->num_rows;
                                                $result->free();
                                                echo $status_pkl." Mahasiswa";
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                                Sudah Ambil</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                $query = "SELECT * FROM pkl WHERE id_status ='Lulus'";
                                                $result = $conn->query($query);

                                                $status_pkl = $result->num_rows;
                                                $result->free();
                                                echo $status_pkl." Mahasiswa";
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                    </div>
                </div>
                <div class="skripsi">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Skripsi Mahasiswa</h1>
                    </div>
                    
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                                Belum Ambil</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                $query = "SELECT * FROM skripsi WHERE id_status ='Belum Ambil'";
                                                $result = $conn->query($query);

                                                $status_skripsi = $result->num_rows;
                                                $result->free();
                                                echo $status_skripsi." Mahasiswa";
                                            ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Sedang Ambil</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                $query = "SELECT * FROM skripsi WHERE id_status ='Sedang Ambil'";
                                                $result = $conn->query($query);

                                                $status_skripsi = $result->num_rows;
                                                $result->free();
                                                echo $status_skripsi." Mahasiswa";
                                            ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                                Lulus</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                $query = "SELECT * FROM skripsi WHERE id_status ='Lulus'";
                                                $result = $conn->query($query);

                                                $status_skripsi = $result->num_rows;
                                                $result->free();
                                                echo $status_skripsi." Mahasiswa";
                                            ?>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                    </div>
                </div>




            </div>

        <!-- Content Wrapper -->

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