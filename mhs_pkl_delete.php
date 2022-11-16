<?php

require_once('config.php');

session_start();
$nim = $_SESSION['nim'];

if (isset($_GET['id'])) {
    $smt = $_GET['id'];
    $query = "DELETE FROM pkl WHERE nim = '" . $nim . "'";
    $result = $conn->query($query);
    if (!$result) {
        die("Could not query the database: <br>" . $db->error . "<br>Query: " . $query);
    } else {
        $conn->close();
        header('Location: mhs_pkl.php');
    }
}
