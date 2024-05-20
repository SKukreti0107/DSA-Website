<?php
error_reporting(0);
session_start();

$mysqli = new mysqli("localhost", "root", "@Ironman0107#", "webtechProject");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if(isset($_POST)){
    $data = file_get_contents("php://input");
    $ques = json_decode($data,true);
    $qId = $ques["qId"];
    $status = $ques["status"];
    $user_id = $_SESSION["user_id"];
}



$query = "INSERT INTO progress (q_id, status, u_id) VALUES ('$qId', '$status', '$user_id') ON DUPLICATE KEY UPDATE status = '$status'";

$result = $mysqli->query($query);

if ($result && $result->num_rows==1) {
    $row = $result->fetch_assoc();
}
?>
