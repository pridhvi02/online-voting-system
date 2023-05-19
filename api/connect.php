<?php


$connect = mysqli_connect("localhost","root","","voting1") or die("connection failed");

if($connect){
    echo "Connected";
}
else{
    echo "not connected";
}


?>