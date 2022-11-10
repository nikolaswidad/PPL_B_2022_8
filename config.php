<?php

$conn = mysqli_connect('localhost','root','','ppl_project');
if($conn->connect_errno){
    die("Cannot Connect: <br/>". $conn->connect_error);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>