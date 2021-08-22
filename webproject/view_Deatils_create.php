<?php
 $conn= mysqli_connect('localhost','Gaju','1234','house_rent');
 //check for connection
 if(!$conn){
   die("connection failed");
 }
 else{

   }
   
   $r = "SELECT * FROM tenant WHERE tenant_id=".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "tenant_id: ".$d["tenant_id"]."<br/>";
	   echo "fname: ".$d["fname"]."<br/>";
	   echo "Email: ".$d["email"]."<br/>";
     echo "phone_number: ".$d["phone_number"]."<br/>";
      echo "passwords: ".$d["passwords"]."<br/>";
	   
   }
   
?>