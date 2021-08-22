<?php
session_start();
include_once 'dbConnection.php';

$uname=$_POST['uname'];
$pwd=$_POST['psw'];

if(empty($uname) || empty($pwd))
{
    header("Location:Admin Dash.php?error=empty");
    exit();
}
else
{
    $sql="SELECT* FROM user WHERE names='$uname'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)<1)
    {
        header("Location:Admin Dash.php?error=invalidNames");
        exit();
    }
    else
    {
        while($row=mysqli_fetch_assoc($result))
        {
            if($pwd==$row['password'])
            {
               $_SESSION['name']=$row['names'];
               header("Location:Admin Dash.php");
               exit();
            }
            else
            {
                header("Location:Admin Dash.php?error=wrongpsw");
                exit();
            }
        }
    }
}
?>