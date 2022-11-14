<!-- 
Nama: Rayhan Illyas Annabil
NIM: 24060120120004
LAB PBP B1 
-->

<?php
require_once('config.php');

$id = $_POST['id'];

//Assign a query
$query = "DELETE FROM irs WHERE id=" . $id . " ";

// //Execute the query
$result = $db->query($query);

if (!$result) {
    die("Could not query the database: <br>" . $db->error . "<br>Query: " . $query);
} else {
    //close db connection
    $db->close();
}
