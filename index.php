<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Login</title>
</head>

<body>


    <form action="./auth/login.php" method="post" id="login-form">

        <div class="wrapper">
            <label for="reg">Reg No</label>
            <input type="text" id="reg" name="reg" required>
        </div>
        <div class="wrapper">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <?php
            if (isset($_SESSION["error"])) {
                $error = $_SESSION["error"];
                echo "<div>$error</div>";
            }
            ?>
        </div>
        <button type="submit">login</button>
        <button type="button" onclick="nav(this)">create account</button>
    </form>

    <script>
        function nav(e) {
            location.href = "./routes/register.php"
        }
    </script>
</body>

</html>

<?php
unset($_SESSION["error"]);
?>