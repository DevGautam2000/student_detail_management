<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <title>Register</title>
</head>

<body style="height:80vh">


    <form action="../auth/register.php" method="post" id="login-form" style="height:500px">

        <div class="wrapper">
            <label for="reg">Reg No</label>
            <input type="text" id="reg" name="reg" required>
        </div>
        <div class="wrapper">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="wrapper">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="wrapper">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="wrapper">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit">register</button>
    </form>

</body>

</html>