
<?php
$conn= mysqli_connect('localhost','root','','house_rent');
//check for connection
if(!$conn){
  die("connection failed");
}
else{

  }
$sql = "SELECT * FROM house";//your table called collage
$result = mysqli_query($conn,$sql);

if(!$result) {
echo "Something is wrong".mysqli_error($conn);}
    // output data of each row
else{?>
<table border="3" style="margin-left: 30%; background-color:;margin-top:70px;"cellspacing="4">
  <tr>
     <th>house_id</th>
 <th>filenames</th>
 <th>phone_number</th>
 <th>Adress</th>
 <th colspan="3">Action</th>
  </tr>
<?php
    while($row = mysqli_fetch_array($result)) {?>


<tr>
<td><?php echo $row["house_id"];?></td>
   <td><?php echo $row["filenames"];?></td>
   <td><?php echo $row["phone_number"];?></td>
   <td><?php echo $row["Adress"];?></td>
<td><a href="view_Deteatils_house.php?id=<?php echo $row['house_id']; ?>"><button style="background-color:black;">View</a></button></td>
<td><a href="update_create.php"><button style="background-color:black;">Update</a></button></td>
<td><a href="housedelete_create.php?id=<?php echo $row['house_id']; ?>"><button style="background-color:black;">Delete</a></button></td>
</tr>
<?php
}
echo "</table>";
  }
   //
?>
