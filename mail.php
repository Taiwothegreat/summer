<?php
if($_SERVER["REQUEST_METHOD"]==='POST'){
    $fname=htmlspecialchars($_POST['fname']);
    $to="taiwoomosehin6@gmail.com";
    $from="taiwolink@yahoo.com";
    $subject="Registration Form";
    $message="First Name:$fname\n";
    $headers="From:$from\n";
    $headers .="Reply-To:$to\n";
    if(mail($to,$subject,$message,$headers)){
        echo "message sent";
    }
    else{
        echo "message not sent";
    }
    
}
?>