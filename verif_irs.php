<?php

require_once('config.php');


if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $check = "SELECT * FROM irs WHERE nim = '$nim'";
    $check_query = $conn->query($check);
    $row = mysqli_fetch_array($check_query);
    if($row['verif'] == 'Sudah'){
        $query = "UPDATE irs SET verif = 'Belum' WHERE nim = '$nim'";
    } else {
        $query = "UPDATE irs SET verif = 'Sudah' WHERE nim = '$nim'";
    }
    
    $result = $conn->query($query);
    if (!$result) {
        die("Could not query the database: <br>" . $conn->error . "<br>Query: " . $query);
    } else {
        $conn->close();
        header('Location: dosen_verif_irs.php');
    }
}
?>