<?php

include_once 'dbConnection.php';

$uname=$_POST['uname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$psw=$_POST['psw'];
$confirmPsw=$_POST['confirmpsw'];

if(empty($uname) || empty($email) || empty($psw) || empty($confirmPsw) || empty($phone))
{
    header("Location:signup.php?error=empty");
    exit();
}
else
{
    if($psw!=$confirmPsw)
    { 
      header("Location:signup.php?error=invalidpsw");
      exit();
    }
    else
    {
        $time=date('m/d/Y h:i:s a', time());
        $sql="INSERT INTO user(names,email,password,phone_number,created_at) VALUES('$uname','$email','$psw','$phone','$time')";
        mysqli_query($conn,$sql);
        header("Location:signup.php?error=none");
        exit();
    }
}
?>