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
                    <!-- If there is success variable, show message -->
                    
                    <div class="card-header">Data Mahasiswa Skripsi</div>
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
                                <th scope="col">Bukti</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $query = "SELECT * FROM skripsi as s INNER JOIN mhs as m ON s.nim = m.nim WHERE s.verif = 'Sudah'";
                            $result = $conn->query($query);
                            $i = 1;
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<th>".$i."</th>";
                                echo "<td>".$row['nama']."</td>";
                                echo "<td>".$row['nim']."</td>";
                                echo "<td>".$row['angkatan']."</td>";
                                echo "<td>".$row['lama_studi']." Semester</td>";
                                echo "<td>".$row['tanggal_sidang']."</td>";
                                echo "<td>".$row['nilai']."</td>";
                                echo "<td>".$row['id_status']."</td>";
                                echo '<td><a class="btn btn-info" href="upload/' .$row['scan'] . '">Lihat</a></td>';
                                echo "</tr>";
                                $i++;
                            }
                            echo '</tbody>';
                            echo '</table>';
        
                            $result->free();
                            $conn->close();
                            ?>
                            </tbody>
                        </table> 
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