<?php

require_once('config.php');


if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $query = "UPDATE pkl SET verif = 'Sudah' WHERE nim = '$nim'";
    
    $result = $conn->query($query);
    if (!$result) {
        die("Could not query the database: <br>" . $conn->error . "<br>Query: " . $query);
    } else {
        $conn->close();
        header('Location: dosen_verif_pkl.php');
    }
}
?>