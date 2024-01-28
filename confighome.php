<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "home";

    $con = new mysqli( $servername, $username, $password, $dbname);

    if($con->connect_error){
        die("connection fail".$con->connect_error);
    }
?>