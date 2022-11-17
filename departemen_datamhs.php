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

                <!-- Topbar -->
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="card">
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

              <!-- General Form Elements -->
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>

</html>