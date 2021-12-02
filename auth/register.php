<?php
session_start();

require('../database/conn.php');
$msg = "";
$pass = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
$con_pass = $_POST['confirm_password'];

if ($con_pass == $pass) {
    $sql = "INSERT INTO `creds`(`Reg_No`, `S_Name`, `Email`, `Pass`) VALUES ('$reg','$name','$email','$pass')";

    if ($conn->query($sql)) {
        $msg = "New record created successfully";
    } else {
        $msg = "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "password do not match";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .banner {
            height: 70px;
            width: 30%;
            border: 4px solid green;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
        }

        a {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="banner">
        <?php echo $msg ?>
    </div>
    <a href="../index.php">go to login</a>
</body>

</html>