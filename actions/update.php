<?php
session_start();
require('../database/conn.php');
$msg = "";
$id = $_SESSION['id'];
$name = $_POST['s_name'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];

$sql = "UPDATE `student_details` SET `S_Name`='$name',`Sub1`='$sub1',`Sub2`='$sub2',`Sub3`='$sub3' WHERE `Reg_No`='$id'";

if ($conn->query($sql)) {
    $msg = "updated successfully";
} else {
    $msg = "Error Occurred";
}
$_SESSION['msg'] = $msg;
header("location: ../routes/retrieval.php");
$conn->close();
