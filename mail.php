<?php
//get data from form  

$email= $_POST['email'];

$to = "$email";
$subject = "Mail From website";
$txt =" Thanks for subscribing !! ";
$headers = "From: managemyngo@gmail.com" . "\r\n" .
"CC: chaitra692001@gmail.com";
"CC: ieeshasree24@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>


