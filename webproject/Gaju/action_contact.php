<?php include 'navigation bar.php';?>
<?php
$conn = mysqli_connect('localhost', 'gaju', 'gaju', 'gn');

//check for connection
if(!$conn){
  die("connection failed");
}
else{

  }
$sql = "SELECT * FROM contact";
$result = mysqli_query($conn,$sql);

if(!$result) {
echo "Something is wrong".mysqli_error($conn);}
    // output data of each row
else{?><center>
<table border="3" style="margin-left: 30%; background-color:;margin-top:70px;"cellspacing="4">
  <tr>
     <th>id</th>
 <th>yourname</th>
 <th>Email</th>
 <th>Phone_Number</th>
 <th>Messages</th>
 <th colspan="3">Action</th>
  </tr></center>
<?php
    while($row = mysqli_fetch_array($result)) {?>


<tr>
<td><?php echo $row["ID"]; ?></td>
   <td><?php echo $row["yourname"]; ?></td>
   <td><?php echo $row["Email"]; ?></td>
   <td><?php echo $row["Phone_Number"]; ?></td>
   <td><?php echo $row["messages"]; ?></td>
<td><a href="view_Deatils_contact.php?id=<?php echo $row['ID']; ?>"><button style="background-color:black;">View</a></button></td>
<td><a href="adUpdate.php"><button style="background-color:black;">Update</a></button></td>
<td><a href="userDelete_contact.php?id=<?php echo $row['ID']; ?>"><button style="background-color:black;">Delete</a></button></td>
</tr>
<?php
}
echo "</table>";
  }
   //
?>
