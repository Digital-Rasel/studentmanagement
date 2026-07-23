<?php
    error_reporting(0);
    session_start();
    session_destroy();

    if ($_SESSION["message"]) {
    $message = $_SESSION["message"];
    echo"<script type='text/javascript'> 
    alert('$message');
    </script>";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
</head>
<body>
    <nav>
        <label class="logo" >RO Training School</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section-1 ">
        <label class="img_text">We Teach for Better</label>
        <img class="main_img" src="school.PNG" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <img class="welcome_img" src="playground.jpg" alt="">
        </div>
        <div class="col-md-8">
            <h1>Welcome to RO,BAF</h1>
            <p>The Bangladesh Air Force (BAF) was officially formed on 28 September 1971 during the Bangladesh Liberation War. It consisted of revolting Bengali officers and airmen who defected from the Pakistan Air Force at Dimapur Airport in the Indian state of Nagaland.[9] It was launched formally by flying three repaired vintage aircraft on 8 October 1971.</p>
        </div>
        </div>
    </div>
    
        <div class="container">
            <center>
        <h1>Our Trainers</h1>
    </center>
            <div class="row">
                <div class="col-md-4">
                <img class="teacher" src="teacher.png" alt="">
                <p>The Bangladesh Air Force (BAF) was officially formed on 28 September 1971 during the Bangladesh Liberation War. It consisted of revolting Bengali officers and airmen who defected from the Pakistan Air Force at Dimapur Airport in the Indian state of Nagaland.</p>
                </div>
                <div class="col-md-4">
                <img class="teacher" src="teacher.png" alt="">
                <p>The Bangladesh Air Force (BAF) was officially formed on 28 September 1971 during the Bangladesh Liberation War. It consisted of revolting Bengali officers and airmen who defected from the Pakistan Air Force at Dimapur Airport in the Indian state of Nagaland.</p>
                </div>
                <div class="col-md-4">
                   <img class="teacher" src="teacher.png" alt=""> 
                   <p>The Bangladesh Air Force (BAF) was officially formed on 28 September 1971 during the Bangladesh Liberation War. It consisted of revolting Bengali officers and airmen who defected from the Pakistan Air Force at Dimapur Airport in the Indian state of Nagaland.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <center>
        <h1>Our Courses</h1>
    </center>
            <div class="row">
                <div class="col-md-4">
                <img class="teacher" src="digital_marketing.png" alt="">
                <h3>Digital Marketing</h3>
                </div>
                <div class="col-md-4">
                <img class="teacher" src="graphic_design.png" alt="">
                <h3>Graphics Design</h3>
                </div>
                <div class="col-md-4">
                   <img class="teacher" src="web_development.png" alt=""> 
                   <h3>Web Development</h3>
                </div>
            </div>
        </div>

        <center>
            <h1 class="adm">Admission Form</h1>
        </center>
        <div align="center" class="admission_form">
            <form action="data_check.php" method="POST">
                <div class="adm_int">
                    <label class="label_text" >Name</label>
                    <input  class="input_deg" type="text" name="name">
                </div>
                <div class="adm_int">
                    <label class="label_text">Email</label>
                    <input class="input_deg" type="email" name="email">
                </div>
                <div class="adm_int">
                    <label class="label_text">Phone</label>
                    <input class="input_deg" type="text" name="phone">
                </div>
                <div class="adm_int">
                    <label class="label_text">Message</label>
                    <textarea class="input_txt" name="message"></textarea>
                </div>
                <div class="adm_int" id="submit_btn">
                    <input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
                </div>
            </form>
        </div>

        <footer>
            <h3 class="footer_text">All @copyright reserved by RO,BAF</h3>
        </footer>
    
</body>
</html>