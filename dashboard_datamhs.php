<!-- Begin Page Content -->
<div class="container-fluid">

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
                                Total
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    $query = "SELECT * FROM mhs";
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
                                Aktif
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?php
                                            $query = "SELECT * FROM mhs WHERE status_mhs ='Aktif'";
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
                                    $query = "SELECT * FROM mhs WHERE status_mhs ='Lulus'";
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
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Drop Out
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?php
                                            $query = "SELECT * FROM mhs WHERE status_mhs ='DO'";
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
                            <i class="fas fa-power-off fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Content Bawah Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                Cuti
                            </div>
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
                        <div class="col-auto">
                            <i class="fas fa-pause fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
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
                        <div class="col-auto">
                            <i class="fas fa-ghost fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Undur Diri Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
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
                        <div class="col-auto">
                            <i class="fas fa-sign-out-alt fa-2x text-gray-300"></i>
                            <i class="fa-solid fa-"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meninggal Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
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
                        <div class="col-auto">
                            <i class="fas fa-star-of-life fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Status Mahasiswa</h6>
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
                        <th scope="col">Status</th>
                        <th scope="col">Detail Info</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM mhs ORDER BY angkatan";
                        $result = $conn->query($query);
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th>".$i."</th>";
                            echo "<td>".$row['nama']."</td>";
                            echo "<td>".$row['nim']."</td>";
                            echo "<td>".$row['angkatan']."</td>";
                            echo "<td>".$row['status_mhs']."</td>";
                            echo '<td><a class="btn btn-info" href="dosen_view_data-diri.php?nim='.$row['nim'].'">Lihat</a></td>';
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