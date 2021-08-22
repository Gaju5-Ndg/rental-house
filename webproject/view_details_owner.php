<?php
$conn = mysqli_connect('localhost', 'root', '', 'house_rent');
 //check for connection
 if(!$conn){
   die("connection failed");
 }
 else{

   }
   

   $r = "SELECT * FROM ownerWHERE owner_id=".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "owner_id: ".$d["owner_id"]."<br/>";
	   echo "fname: ".$d["fname"]."<br/>";
	   echo "Email: ".$d["email"]."<br/>";
      echo "password: ".$d["password"]."<br/>";
	   
   }
   
?>