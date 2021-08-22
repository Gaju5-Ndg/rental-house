<?php
$host='localhost';
$user='root';
$pass='';
$db='gn_house';
 
$con=mysqli_connect('host','root','pass','db');
if($con){
    echo'connnected successfully to my database';

$sql="INSERT INTO clients (username,email,phone_number,passcode);
$squery=mysqli_query($con,$sql);
if($squery){
    echo 'Data successfully inserted';
}
}

?>