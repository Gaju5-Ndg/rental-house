<?php
session_start();

include_once 'dbConnection.php';

echo 'hhhhh';
$check=$_POST['Admin'];
$username=$_POST['uname'];
$password=$_POST['psw'];
if($_POST['submit']=='Admin')
{
  $sql="SELECT* FROM admin WHERE email='$username';";
  $grab = mysqli_query($conn, $sql);
  if(mysqli_num_rows($grab)<1)
  {
    header("Location:login.php?error=adminwrong");
    exit();
  }
  else
  { while($row=mysqli_fetch_assoc($grab))
    {
      if($password==$row['password'])
      {
        header("Location:upload.php");
        exit();
      }
      else
      {
        echo "invalid";
      }
    }
}
}
else
{
  echo 'error-1';
}

?>