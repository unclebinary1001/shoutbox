<?php
include 'database.php';


//Check if form submitted
if(isset($_POST['submit'])){

    $user =  mysqli_real_escape_string($con,$_POST['user']);
    $message =  mysqli_real_escape_string($con,$_POST['message']);

    
    echo "POST request received.<br>";
    echo "Username: " . htmlspecialchars($user) . "<br>";
    echo "Password: " . htmlspecialchars($message) . "<br>";
       
    //Set timezone
    date_default_timezone_set('Africa/Cairo');
    $time = date('H:i:s',time());

    //Validate input
    if(!isset($user)|| $user=='' || !isset($message) || $message==''){
        $error = "Please fill in your name and a message";
        header("Location: index.php?error=".$error);
        exit();
    }
    else{
        $query = "INSERT INTO shouts (user, message,time)
                VALUES ('$user','$message','$time')";

        if(!mysqli_query($con, $query)){ 
            die ('Error: '.mysqli_error($con));
        } else{
            header("Location: index.php");
            exit();
        }
    }
}
?>