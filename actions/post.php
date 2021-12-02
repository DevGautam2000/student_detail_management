<?php


require("../database/conn.php");

for ($i = 1; $i <= $_POST['student_nos']; $i++) {
    $reg = $_POST["stu_" . $i . "_reg"];
    $name = $_POST["stu_" . $i . "_name"];
    $sub1 = $_POST["stu_" . $i . "_sub1"];
    $sub2 = $_POST["stu_" . $i . "_sub2"];
    $sub3 = $_POST["stu_" . $i . "_sub3"];

    $sql = "INSERT INTO `student_details`(`Reg_No`, `S_Name`, `Sub1`, `Sub2`, `Sub3`) VALUES ('$reg','$name','$sub1','$sub2','$sub3')";
    if ($conn->query($sql)) {
        $msg = "New record created successfully";
    } else {
        $msg = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>

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
    <a href="../routes/home.php">go to home</a>
</body>

</html>