<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "trainingproject";

$data = mysqli_connect($host, $user, $password, $db);


if($data === false) {
    die("Connection Error");
}


?>