<?php
   $conn = mysqli_connect('localhost', 'gaju', 'gaju', 'gn');

   //check for connection
   if(!$conn){
     die("connection failed");
   }
   else{
  
     }
   
   $r = "DELETE FROM contact WHERE id =".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed ".mysqli_error($conn);
   }else{
	   header('location:action_contact.php');
   }
       
   
?>