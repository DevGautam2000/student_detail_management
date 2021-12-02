<?php
session_start();

require '../database/conn.php';
extract($_POST);

$sql = "SELECT * FROM creds WHERE Reg_No='$reg'";
$result = $conn->query($sql);
$error = "wrong password";

if ($result->num_rows > 0) {
    $res = $result->fetch_assoc();

    extract($res);
    if ($Reg_No == $reg && $Pass == $password) {

        $_SESSION["reg"] = $Reg_No;
        $_SESSION["email"] = $Email;
        $_SESSION["name"] = $S_Name;
        header("location: ../routes/home.php");
        die();
    } else {
        $_SESSION["error"] = $error;
        header("location: ../index.php");
        die();
    }
} else {
    $_SESSION["error"] = "user not found";
    header("location: ../index.php");
    die();
}

$conn->close();
