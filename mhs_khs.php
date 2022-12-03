<?php

session_start(); //inisialisasi session
require_once('config.php');
$email = $_SESSION['username'];
$id_user = $_SESSION['user_id'];
$nim = $_SESSION['nim'];
$nama = $_SESSION['nama'];



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
                <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                    href="https://datatables.net">official DataTables documentation</a>.</p> -->
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data KHS Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                                <a class="btn btn-primary mb-3" href="mhs_khs_add.php">+ Tambah Data KHS</a>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM</th>
                                                <th>Semester</th>
                                                <th>Beban SKS</th>
                                                <th>SKS Kumulatif</th>
                                                <th>IP</th>
                                                <th>IPK</th>
                                                <th>Scan</th>
                                                <th>Verifikasi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query = "SELECT * FROM khs WHERE nim = '$nim' ORDER BY smt ";
                                                $result = $conn->query($query);
                                                $i = 1;
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>".$i."</td>";
                                                    echo "<td>".$row['nim']."</td>";
                                                    echo "<td>".$row['smt']."</td>";
                                                    echo "<td>".$row['sks']."</td>";
                                                    echo "<td>".$row['sks_kumulatif']."</td>";
                                                    echo "<td>".$row['ip']."</td>";
                                                    echo "<td>".$row['ipk']."</td>";
                                                    echo '<td><a href="upload/' .$row['scan'] . '">' .$row
                                                    ['scan'].'</a></td>';
                                                    echo "<td>".$row['verif']."</td>";
                                                    echo '<td>
                                                    <a class="btn btn-danger btn-sm" href="mhs_khs_delete.php?id=' . $row["smt"] . '">Hapus</a>
                                                    </td>';
                                                    echo "</tr>";
                                                    $i++;
                                                }
                                                ?>
                                                <!-- <a class="btn btn-warning btn-sm" href="mhs_irs_edit.php?smt='.$row["smt"].'">Edit</a> -->
                                        </tbody>    
                                    </table>
                                    <br>
                                    <?php echo 'Jumlah Data = ' . $result->num_rows;
                    
                                    $result->free();
                                    $conn->close();
                                    ?>
                                    <br><br>
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