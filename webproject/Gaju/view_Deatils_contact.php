<?php
 $conn = mysqli_connect('localhost', 'gaju', 'gaju', 'gn');

 //check for connection
 if(!$conn){
   die("connection failed");
 }
 else{

   }
   
   $r = "SELECT * FROM contact WHERE ID=".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "ID: ".$d["ID"]."<br/>";
	   echo "yourname: ".$d["yourname"]."<br/>";
	   echo "Email: ".$d["Email"]."<br/>";
      echo "Phone_Number: ".$d["Phone_Number"]."<br/>";
	   echo "messages: ".$d["messages"]."<br/>";
   }
   
?>