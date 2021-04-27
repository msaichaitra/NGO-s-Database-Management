<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="ngodb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "connected";
}
else
{
    echo"not connected";
}
?>