<?php
   $conn= mysqli_connect('localhost','Gaju','1234','house_rent');
   //check for connection
   if(!$conn){
     die("connection failed");
   }
   else{
  
     }
   
   $r = "DELETE FROM ownr WHERE owner_id =".$_GET['id'];
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($conn);
   }else{
	   header('location:action_owner.php');
   }
       
   
?>