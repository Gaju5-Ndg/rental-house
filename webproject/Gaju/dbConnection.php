<?php
$host="localhost";
$username="root";
$pwd="";
$dbname="house_rent";
$conn=mysqli_connect($host,$username,$pwd,$dbname);
if(!$conn){
    echo "connected";
}
else{
    echo "failed";
}
?>