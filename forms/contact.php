<?php
if($_POST["submit"]) {
    
    $recipient="muhtasim.mzs16@gmail.com"; 

    $subject= $_POST["subject"]; 
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";

    mail($recipient, $subject, $mailBody);
    sleep(1);
    // header("Location:http://blog.antonyraphel.in/sample/"); // Set here redirect page or destination page
}
?>