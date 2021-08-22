
<?php
$conn= mysqli_connect('localhost','root','','house_rent');
//check for connection
if(!$conn){
  die("connection failed");
}
else{

  }
$sql = "SELECT * FROM contactus";//your table called collage
$result = mysqli_query($conn,$sql);

if(!$result) {
echo "Something is wrong".mysqli_error($conn);}
    // output data of each row
else{?><center>
<table border="3" style="margin-left: 30%; background-color:;margin-top:70px;"cellspacing="4">
  <tr>
     <th>id</th>
 <th>email</th>
 <th>subjects</th>
 <th>messages</th>
 <th colspan="3">Action</th>
  </tr></center>
<?php
    while($row = mysqli_fetch_array($result)) {?>


<tr>
<td><?php echo $row["First Name"]; ?></td>
   <td><?php echo $row["Last Name"]; ?></td>
   <td><?php echo $row["Country"]; ?></td>
   <td><?php echo $row["Subject"]; ?></td>
<td><a href="view_Deatils_contacts.php?id=<?php echo $row['id']; ?>"><button style="background-color:black;">View</a></button></td>

<td><a href="tenantDelete_contacts.php?id=<?php echo $row['id']; ?>"><button style="background-color:black;">Delete</a></button></td>
</tr>
<?php
}
echo "</table>";
  }
   //
?>