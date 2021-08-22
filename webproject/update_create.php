<?php

$conn= mysqli_connect('localhost','Gaju','1234','house_rent');
//check for connection
if(!$conn){
    echo 'connection error:'. mysqli_connect_error();

}
else{
  
}
?>
<?php include 'navigation bar.php';?>
<?php

//insert item data
/*
if(isset($_POST['submit']))
{    
     $product_name = $_POST['product_name'];
     $serial_no=$_POST['serial_no'];
     $brand = $_POST['brand'];
     $category=$_POST['category'];
     $price=$_POST['price'];
     $manufacturer=$_POST['manufactuer']; */

// upload image

     if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $tmp=explode('.',$_FILES['image']['name']);
        $file_ext = end($tmp);
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"images/".$file_name);
           $name="images/".$file_name;
          
          // $sql="INSERT INTO product(filename) values (\"$name\")";
           //$q3=$conn->query($sql) or trigger_error($conn->error);// error test

          // if($q3)
          // {
              //echo "Success";
          // }
       // }else{
         //  print_r($errors);
        //}
     //}
     if(isset($_FILES['upload'])){

$house_id= $_POST['house_id'];
     $District = $_POST['District'];
     $Sector=$_POST['Sector'];
     $cell= $_POST['Cell'];
     $price= $_POST['price'];
     
     
     $errors= array();
     if(empty($errors)==true){
     $sql = "UPDATE  tenant SET fname='$fname',email='$email',phone_number=' $phone_number' WHERE tenant_id='$id'";
     if(mysqli_query($conn,$sql)) 
      {
        header("Location:action_create.php");
       exit();
      }
      else
      {
          echo $id;
      }
       
       
   }else{
      print_r($errors);
   }
 }}
     }
?>

<html>


<body>

<div id="content" possition="center">
        <form  action="" method="POST" enctype="multipart/form-data">
       <input type="text" name="fname" placeholder="fname" ><br>
        <input type="text" name="email" placeholder="email" >
        <input type="text" name="phone_number" placeholder="phone_number" >
        <input type="text" name="passwords" placeholder="passwords" >
        <br>
        
<br>
       <input type="file" 
                   name="image" 
                   value="" />
  
            <div>
                <button type="submit"
                        name="upload">
                  UPLOAD
                </button>
            </div>
        </form>
</div>
<p style="margin-top:450px">
</body>
</html>