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
    $password = "";
    $db ="trainingproject";

    $data = mysqli_connect ($host, $user, $password, $db);
    $sql = "SELECT * FROM user";

    $result = mysqli_query($data, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
</head>
<body>
     <?php
    include"admin_sidebar.php";
    ?>
    <center> 
    <div class="container">
        <h1>Student Data</h1>
        
        <table class="table table-bordered table-success table-striped" >
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
            </tr>
            <?php
            while ($info = $result->fetch_assoc()) {

            ?>
            <tr>
                <td><?php echo "{$info['username']}" ?> </td>
                <td><?php echo "{$info['email']}" ?> </td>
                <td><?php echo "{$info['phone']}" ?> </td>
                <td><?php echo "{$info['password']}" ?> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    
    </div>
    </center>
    

</body>
</html>