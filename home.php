<?php
    require ('confighome.php');

    if(isset($_POST['submit'])){
    $name= $_POST['Name'];
    $email = $_POST['Email'];
    $rate = $_POST['Rate'];
    $description = $_POST['Destription'];

    $sql = "INSERT INTO hm (Name, Email, Rate, Description) VALUES ('$name', '$email', '$rate', '$description')";
    $result = mysqli_query($conn, $sql);
    }


?>