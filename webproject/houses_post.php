<?php
$conn = mysqli_connect('localhost', 'Gaju', '1234', 'house_rent');
//check for connection
if(!$conn){
    echo 'connection error:'. mysqli_connect_error();

}
else{
   echo 'connection successfuly';
}
?>

<?php
$sql='SELECT house_id filenames,phone_number,Adress,Price FROM  house';

//$sql= mysql_query("SELECT id,fname,lname,email,sex,age,created_at FROM  users", $conn);
//query for result
$result=mysqli_query($conn,$sql);
//query to fetch results
$dsply=mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($login);

/* foreach($dsply as $dsply) { //the 1st login is for table name 
    
echo htmlspecialchars($dsply['id']); //login is that varialble used to fetch data 
echo "<br>";
 echo htmlspecialchars($dsply['fname']); 
 echo "<br>";
 echo htmlspecialchars($dsply['lname']); 
 echo "<br>";
 echo htmlspecialchars($dsply['email']); 
 echo "<br>";
 echo htmlspecialchars($dsply['sex']); 
 echo "<br>";
 echo htmlspecialchars($dsply['age']); 
 echo "<br>";
 echo htmlspecialchars($dsply['created_at']);
    
 }  */
?>




<html>
<style>
body {margin:1px;}

div.polaroid {
  width: 60%;
  background-color: none;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
div.polaroid img {
  border: 1px solid #ddd;
  border-radius: 9px;
  padding: 5px;
 height: 40%;
  width: 50%;
  font: left;
}
div.polaroid button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 16px;
}
div.polaroid button a {
    text-decoration: none;
}
 </style>
<body>
  

        <?php foreach($dsply as $dsply): ?> 
          
<div class="polaroid"><img src="<?php echo htmlspecialchars($dsply['filenames'])?>"style ="border: 1px solid #ddd;"> <br/>
        <b>Phone:<?php echo htmlspecialchars($dsply['phone_number'])?> <br>
        <b>Address: <?php echo htmlspecialchars($dsply['Adress'])?> </b><br/>
        
        <b> Price: <?php echo htmlspecialchars($dsply['Price'])?> RWF </b>
        </p>
        </div>             
     <?php endforeach; ?>
        

</body>
</html>