<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Skripsi Mahasiswa</h1>
    </div>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Data Mahasiswa Skripsi</h1> -->
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                Total
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    $query = "SELECT * FROM skripsi WHERE verif = 'Sudah'";
                                    $result = $conn->query($query);
                                        
                                    $total = $result->num_rows;
                                    echo $total." Mahasiswa";
                                    $result->free();
                                    
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Sedang Ambil
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?php
                                            $query = "SELECT * FROM skripsi WHERE verif = 'Sudah' AND id_status = 'Sedang Ambil'";
                                            $result = $conn->query($query);
                                                
                                            $aktif = $result->num_rows;
                                            echo $aktif." Mahasiswa";
                                            $result->free();

                                            $persentase_aktif = ($aktif/ $total)*100;
                                            
                                        ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: <?php echo $persentase_aktif;?>%" aria-valuenow="10" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-toggle-on fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lulus Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Lulus</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    $query = "SELECT * FROM skripsi WHERE verif = 'Sudah' AND id_status = 'Lulus'";
                                    $result = $conn->query($query);
                                        
                                    $lulus = $result->num_rows;
                                    echo $lulus." Mahasiswa";
                                    $result->free();
                                    
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Drop Out Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Belum Ambil
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?php
                                            $query = "SELECT * FROM skripsi WHERE verif = 'Sudah' AND id_status = 'Belum Ambil'";
                                            $result = $conn->query($query);
                                                
                                            $total_mhs = $result->num_rows;
                                            echo $total_mhs." Mahasiswa";
                                            $result->free();
                                            
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bars fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Skripsi Mahasiswa</h6>
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
        </div>

</div>
<!-- /.container-fluid -->
