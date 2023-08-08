<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$role= $_POST['role'];
$phone= $_POST['phone'];
$practice= $_POST['practice'];
$website= $_POST['website'];
$system= $_POST['system'];
$notes= $_POST['notes'];

$to = "Carrie@modernbillingsolutions.com";
$subjectLine = "Contact Form Modern Billing Solutions: " . $subject;
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nRole =" . $role . "\r\nPhone = " . $phone . "\r\nPractice = " . $practice . "\r\nWebsite = " . $website . "\r\nSystem = " . $system . "\r\nNote = " . $notes;
$headers = "From: info@ericweaver.us";
if($email!=NULL){
    mail($to,$subjectLine,$txt,$headers);
}
//redirect
header("Location:./contact");
?>