<?php
session_start();
include_once 'dbConnection.php';

$uname=$_POST['uname'];
$pwd=$_POST['psw'];

if(empty($uname) || empty($pwd))
{
    header("Location:login.php?error=empty");
    exit();
}
else
{
    $sql="SELECT* FROM user WHERE names='$uname'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<1)
    {
        header("Location:login.php?error=invalidNames");
        exit();
    }
    else
    {
        while($row=mysqli_fetch_assoc($result))
        {
            if($pwd==$row['password'])
            {
               $_SESSION['name']=$row['names'];
               header("Location:about.php");
               exit();
            }
            else
            {
                header("Location:login.php?error=wrongpsw");
                exit();
            }
        }
    }
}
?>