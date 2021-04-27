<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connected";
}else{
    echo "no connection";
}

mysqli_select_db($con,'ngodb');

$user = $_POST['user'];
$email = $_POST['email'];
$comments = $_POST['comments']; 

$query = " insert into userinfo (user,email,comments) 
values ('$user', '$email', '$comments')";

mysqli_query($con, $query);
include("mail.php");

header('location:index.html');

?>