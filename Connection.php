<?php

$host = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($host, $username, $password, "phpmyadmin");


echo "<br/>";
echo "<br/>";

if($con){
    echo " ";
}else{
    echo "Connection Failed";
}


?>