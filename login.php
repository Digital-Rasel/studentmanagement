<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<style>
    h6{
        color: red;
    }
</style>
</head>
<body background="login.jpg" class="body_deg">
    <center>
        <div class="form_deg">
            <center class="title_deg">
                Login Form
                <h6>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION["loginMessage"];
                    ?>
                </h6>
            </center>
            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label class="label_deg">Password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    
                    <input type="submit" class="btn btn-primary" name="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>