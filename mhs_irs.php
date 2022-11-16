<?php

session_start(); //inisialisasi session
require_once('config.php');
$email = $_SESSION['username'];
$id_user = $_SESSION['user_id'];
$nim = $_SESSION['nim'];
var_dump($nim);


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
                    <div class="s">
                        <div class="container">
                            <div class="card mt-4">
                                <div class="card-header">DATA IRS</div>
                                <div class="card-body">
                                    <br>
                                    <a class="btn btn-primary mb-3" href="mhs_irs_add.php">+ Tambah Data IRS</a>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM</th>
                                                <th>Semester</th>
                                                <th>Beban SKS</th>
                                                <th>Scan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $query = "SELECT * FROM irs WHERE nim = '$nim' ORDER BY smt ";
                                            $result = $conn->query($query);
                                            $i = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>".$i."</td>";
                                                echo "<td>".$row['nim']."</td>";
                                                echo "<td>".$row['smt']."</td>";
                                                echo "<td>".$row['sks']."</td>";
                                                echo '<td><a href="upload/' .$row['scan'] . '">' .$row
                                                ['scan'].'</a></td>';
                                                echo '<td>
                                                <a class="btn btn-danger btn-sm" href="mhs_irs_delete.php?id=' . $row["smt"] . '">Delete</a>
                                                </td>';
                                                echo "</tr>";
                                                $i++;
                                            }
                                            foreach($conn->query("SELECT SUM(sks) FROM irs WHERE nim = '$nim'") as $sum_sks);
                                            ?>
                                            <!-- <a class="btn btn-warning btn-sm" href="mhs_irs_edit.php?smt='.$row["smt"].'">Edit</a> -->


                                        
                                    </table>
                                    <br>
                                    <?php echo 'Jumlah Data = ' . $result->num_rows; ?>
                                    <br>
                                    <?php
                                    echo 'SKS Kumulatif = '.$sum_sks['SUM(sks)'];

                                    $result->free();
                                    $conn->close();
                                    ?>
                                    <br><br>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
                        <script>
                            function deleteData(id) {
                                var conf = confirm("Are you sure, do you really want to delete Customer?");
                                if (conf == true) {
                                    $.ajax({
                                        url: "delete_post.php",
                                        type: "POST",
                                        data: {
                                            id: id
                                        },
                                        success: function(data) {
                                            $("#delete" + id).hide('slow');
                                        }
                                    });
                                }
                            }
                        </script>
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