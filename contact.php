<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "laurakioko105@mail.com";
$subject = "NEW BOOKING REQUEST";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@stayhostels.org" . "\r\n" .
"CC: kiokoeddie254@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:payment.html");
?>