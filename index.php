<?php if (!isset($username)) $username = ""; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title>PHP Form Validation</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="img_container">
                <img src="face-avatar.jpg" alt="Avatar">
            </div>
            <form action="results.php" method="POST">
                <input type="text" name="user_name" id="" placeholder="Username" value="<?php echo htmlspecialchars($username) ?>"><br />
                <?php if (isset($name_error)) { ?>
                    <p><?php echo $name_error ?></p>
                <?php } ?>

                <input type="password" name="user_password" id="" placeholder="Password"><br />
                <?php if (isset($password_error)) { ?>
                    <p><?php echo $password_error ?></p>
                <?php } ?>

                <input class="register_button" name="submit" type="submit" value="Register">
            </form>
        </div>
    </div>
</body>

</html>