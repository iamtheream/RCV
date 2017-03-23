<?php
//add the recipient's address here
//$myemail = 'ivan@alzurovideoproduction.com';
$myemail = 'iamtheream@gmail.com';

//grab named inputs from html then post to #thanks
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$company = strip_tags($_POST['company']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
$validate = strip_tags($_POST['validate']);
echo "<span class=\"alert alert-success\" >Your message has been received and we will get back to you shortly.</span><br><br>";
//echo "<stong>Name:</strong> ".$name."<br>";   
//echo "<stong>Email:</strong> ".$email."<br>"; 
//echo "<stong>Message:</strong> ".$content."<br>";

if(isset($_POST['interested'])) { // honey pot check
    die();
} else {
//generate email and send!
$to = $myemail;
$email_subject = "Contact form: $name";
$email_body = "You have received a new message on RichmondCorporateVideo.com \n".
"Name: $name \n ".
"Company: $company \n ".
"Email: $email \n ".
"Message: $message \n ";
"Validation: $validate \n ";
$headers = "From: Richmond Corporate Video\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}}
?>