<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "connected";
}else{
    echo "no connection";
}

mysqli_select_db($con,'ngodb');

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$bloodgroup = $_POST['bloodgroup'];

$query = " insert into forminfo (name,email,address,city,pincode,bloodgroup) 
    values ('$name', '$email', '$address', '$city', '$pincode' ,'$bloodgroup')";

mysqli_query($con, $query);

header('location:index.html');

?>