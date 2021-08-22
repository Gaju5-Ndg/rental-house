<?php
 $conn= mysqli_connect('localhost','root','','house_rent');
 //check for connection
 if(!$conn){
   die("connection failed");
 }
 else{

   }
   
   $r = "SELECT * FROM house WHERE house_id=".$_GET['id'];
   
   $dx = mysqli_query($conn, $r);
   if(!$dx){
	   echo "Failed";
   }
   while($d = mysqli_fetch_array($dx)){
	   echo "house_id: ".$d["house_id"]."<br/>";
	   echo "filenames: ".$d["filenames"]."<br/>";
	   echo "phone_number: ".$d["phone_number"]."<br/>";
     echo "Adress: ".$d["Adress"]."<br/>";
     echo "Price: ".$d["Price"]."<br/>";
	   
   }
   
?>