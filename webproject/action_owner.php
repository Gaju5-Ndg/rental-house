<?php
$conn= mysqli_connect('localhost','Gaju','1234','house_rent');
//check for connection
if(!$conn){
  die("connection failed");
}
else{

  }
$sql = "SELECT * FROM owner";//your table called collage
$result = mysqli_query($conn,$sql);

if(!$result) {
echo "Something is wrong".mysqli_error($conn);}
    // output data of each row
else{?>
<table border="3" style="margin-left: 30%; background-color:;margin-top:70px;"cellspacing="4">
  <tr>
     <th>owner_id</th>
 <th>fname</th>
 <th>email</th>
 <th>password</th>
 <th colspan="3">Action</th>
  </tr>
<?php
    while($row = mysqli_fetch_array($result)) {?>


<tr>
<td><?php echo $row["owner_id"];?></td>
   <td><?php echo $row["fname"];?></td>
   <td><?php echo $row["email"];?></td>
   <td><?php echo $row["password"];?></td>
<td><a href="view_Deatils_owner.php?id=<?php echo $row['owner_id']; ?>"><button style="background-color:black;">View</a></button></td>
<td><a href="update_create.php"><button style="background-color:black;">Update</a></button></td>
<td><a href="ownerdelete_create.php?id=<?php echo $row['owner_id']; ?>"><button style="background-color:black;">Delete</a></button></td>
</tr>
<?php
}
echo "</table>";
  }
   //
?>
