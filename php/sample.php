<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contactusdb";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        echo "Error";
    }
    else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
    }
    $sql = "INSERT INTO customers_(sr_no, cust_name, cust_email, cust_phone, cust_message)VALUES ('NULL', '$name', '$email', '$phone', '$message')";
    mysqli_query($conn, $sql);
?>