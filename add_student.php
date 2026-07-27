<?php
    session_start();
    if(!isset($_SESSION["username"]) ){
    header("location: login.php");
    } 
    elseif($_SESSION["usertype"] == "student") {
        header("location: login.php");
    }

    $host = "localhost";
    $user = "root";
    $password="";
    $db = "trainingproject";

    $data = mysqli_connect ($host,$user,$password,$db);

    if (isset($_POST["add_student"])) {
        $username = $_POST["name"];
        $user_email = $_POST["email"];
        $user_phone = $_POST["phone"];
        $user_password = $_POST["password"];
        $usertype = "student";

        $sql = "INSERT INTO user (username, email, phone, password ) VALUES ('$username', '$user_email', '$user_phone', '$user_password')";
        $result = mysqli_query($data,$sql);

        if ($result) {
            echo"Data Uploaded Successfully.";
        } else {
            echo "Uploaded Failed";

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">

    <style>
        label {
           display: inline-block;
           text-align: right;
           width: 100px;
           padding-top: 10px;
           padding-bottom: 10px; 
        }
        .div_deg{
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: skyblue;
            width: 400px;
            
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Dashboard</title>
</head>
<body>
     <?php
    include"admin_sidebar.php";
    ?>
    <br>
    <br>
     <center>
        <h1>Add Student</h1>
    <div class="div_deg">
       

      
        

        <div>
            <form action="#" method="POST">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div>
                    <label for="">Phone</label>
                    <input type="text" name="phone">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <input type="submit" name="add_student" value="Add Student" class="btn btn-primary">
                </div>
            </form>
        </div>
          </center> 
    </div>
    

</body>
</html>