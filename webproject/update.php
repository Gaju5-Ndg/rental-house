<?php
$conn = mysqli_connect('localhost', 'root', '', 'house_rent');

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

        $Phone_Number = $_POST['phone_number'];
        $Address=$_POST['Address'];
        $Price= $_POST['Price'];
        
     $errors= array();
     if(empty($errors)==true){
     $sql = "UPDATE  houses for rent SET Phone_Number='$Phone_Number',Address='$Address',Price=' $Price',filenames=\"$name\" WHERE ID='$id'";
     if(mysqli_query($conn,$sql)) 
      {
        header("Location:action_page.php");
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
       <input type="text" name="Phone_Number" placeholder="Phone_Number" ><br>
        <input type="text" name="Address" placeholder="Address" >
        <br>
        
<br>
       <input type="text" name="Price" placeholder="Price"><br>
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
<p style="margin-top:450px"><?php include 'footer.php';?></p>
</html>
