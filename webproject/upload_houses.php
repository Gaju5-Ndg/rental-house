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


     $Phone_Number = $_POST['phone_number'];
     $Adress=$_POST['Adress'];
     $Price= $_POST['Price'];
     
    $sql = "INSERT INTO house (phone_number,Adress,Price,filenames)
     VALUES ('  $Phone_Number','$Adress','$Price',\"$name\")";
      $q3=$conn->query($sql) or trigger_error($conn->error);
     //$result=mysqli_query($conn,$sql);
     if ($q3) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
      //closing connection
     mysqli_close($conn);

   }
}

?>
<html>


<body>

<div id="content" possition="center">
        <form  action="" method="POST" enctype="multipart/form-data">
       <input type="text" name="phone_number" placeholder="phone_number" ><br>
        <input type="text" name="Adress" placeholder="Adress" >
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




</body>
</html>