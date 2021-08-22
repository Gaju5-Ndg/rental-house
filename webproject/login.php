
<?php 
// ob_start();
session_start();
include('db_connect.php');

?>
<?php

//form Validation
$email=$password='';
$errors=array('email'=>'','password'=>'','incorrect'=>'');
if(isset($_POST['submit']))
{
    //check email
    if(empty($_POST['email']))
    {
        $errors['email']='An email is required';
    }
    else{
        $email=$_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
          }
    }
      //check password
      $password=$_POST['password'];
      if(empty($_POST['password']))
      {
          $errors['password']='Password is required';
          
      } 
      $passwordss=md5($password);
     $sql="SELECT tenant_id FROM tenant WHERE email='$email' and passwords='$passwordss' ";
     //getting result
     $result=mysqli_query($conn,$sql);
     //fetching results rows in array
     $users=mysqli_fetch_all($result,MYSQLI_ASSOC);
     //checking how many answers
     $count=mysqli_num_rows($result);
     // if results match
     if($count==1){




     // redirecting a user 
      if(array_filter($errors))
      {
          //check errors
      }
        else{
            //no errors
            $_SESSION["login"]="success";
            $_SESSION["id"]=$email;
            /* if($email=='bzkarim250@gmail.com')
            {
                header('Location:dash1.php');
            }
            else{ */
              header('Location:home.php');
            
        }
       // else{
           //$errors['incorrect']='Email or Password is incorrect';
        }
        
}


?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/login.css">
<link rel="stylesheet" href="Gaju/style23.css">
<title>Login Page</title>
</head>
<body>
  <nav>
    <div class="log">
        <h1>Houses for rent</h1>
    </div>
    <div class="menu-items">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li> <a href="#About.html" >About</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="signup.php">signup</a></li>
            <li> <a href="login.php">login </a></li>
            <li><a href="forrent.php">for rent</a></li>
        </ul>
    </div>
  </nav>
 <section class="login">
   <div class="form-container">
  <h2> Login Here</h2>
  <form class="modal-content animate" action="loginadmin2.php" method="POST">

    <div class="container">
    <label for="Admin"name="Admin">Admin</label>
    <a href="loginadmin2.php"><input type="radio"name="Admin"value="Admin"></a>
        <label for="owner"name="owner">Owner</label>
        
        <input type="radio"name="Admin"value="owner">
        <label for="user">Tenant</label>
        <input type="radio"name="Admin"value="user"><br>
        <p style="color:red"><?php //echo $errors['login']; ?></p>
      <div class="form_control">
       <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required maxlength="50">
     </div>
     <div class="form_control">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required max="15">
     </div>
      <button type="submit" class="btn lg-in" name="submit">Login</button>
     <div class="rememberMe">
      <label for="rememberMe">Remember me</label>
      <input type="checkbox" checked="checked" name="remember"> 
     <div class="forgot">
      <span class="psw">Forgot <a href="#">password?</a></span>
     </div>
     </div>
    </div>
    <div>

</div>
  </form>
   
</div>
 </section>

<footer>
  <p class="footer-content">Copyright &copy; 2021 </p>        
</footer>
</body>
</html>