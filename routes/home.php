<?php
session_start();
extract($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/home.css">
    <title>Student </title>
    <script src="../scripts/home.js" defer></script>
</head>

<body>

    <div id="bar">
        Welcome to Student Information System

        <div>

            <a href="../auth/logout.php">
                <button type="submit">logout</button>
            </a>

        </div>
    </div>
    <main>


        <div class="wrapper">
            <button type="submit" onclick="nav(this)">Data Entry</button>
            <button type="submit" onclick="nav(this)">Data Retrieval</button>
        </div>

        <div class="sports_container">
            <h3>Sports Person</h3>

            <div class="sports">

            </div>
        </div>

    </main>
    <footer>
        <span class="detail"><?php
                                echo $name
                                ?></span>
        <span class="detail"><?php
                                echo $reg;
                                ?></span>
        <span class="detail"><?php
                                echo $email
                                ?></span>
    </footer>
</body>


</html>
<?php
unset($_SESSION["error"]);
?>