<?php
    session_start();
    if(!isset($_SESSION["username"]) ){
    header("location: login.php");
    } 
    elseif($_SESSION["usertype"] == "student") {
        header("location: login.php");
    }

    $host ="localhost";
    $user = "root";
    $password = "";
    $db ="trainingproject";

    $data = mysqli_connect($host,$user,$password,$db);

    $id = $_GET['student_id'];
    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = mysqli_query($data,$sql);
    $info = $result->fetch_assoc();

?>

    

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        label{
            display: inline-block;
            width: 100px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_deg{
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
    <title>Admin Dashboard</title>
</head>
<body>
     <?php
    include"admin_sidebar.php";
    ?>
    <center>
        <br>
        <div class="container">
        <h1>Update Student</h1>
        <br>
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label for="">User Name</label>
                    <input type="text" name="name" value="<?php echo "{$info['username']}" ?>">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email" value="<?php echo "{$info['email']}" ?>">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="number" name="phone" value="<?php echo "{$info['phone']}" ?>">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name="password" value="<?php echo "{$info['password']}" ?>">
                </div>
                <div>
                    <input class="btn btn-success" type="submit" name="update" value="Update">
                </div>
            </form>
        </div>
    </div>
    </center>
    

</body>
</html>