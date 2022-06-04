<?php

$connection = mysqli_connect("localhost", "root", "", "website_users");


echo "<br/>";
echo "<br/>";

if($connection){
    echo "Database Connected";
}else{
    echo "Connection Failed";
}


?>