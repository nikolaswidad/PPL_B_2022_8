<?php

require_once 'config.php';

// Get the kabupaten from table kabupaten based on the provinsi id and echo the result
$id_provinsi = $_GET['id_provinsi'];
$query = "SELECT * FROM kabupaten WHERE id_provinsi = $id_provinsi";
$result = mysqli_query($conn, $query);
if (!$result) {
  die("Could not query the database: <br/>" . $db->error);
} else {
  echo "<option disabled selected value=''>Pilih Kabupaten</option>";
  while ($row = $result->fetch_object()) {
    echo "<option value='" . $row->id . "'>" . $row->nama . "</option>";
  }
}
