<?php

include ('connection.php');

if (isset($_POST['submit'])) {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];  

    $que = "INSERT INTO contactus (Name, Email, Message) VALUES ('$name','$email','$message')";
    $result = mysqli_query($conn, $que);

    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>