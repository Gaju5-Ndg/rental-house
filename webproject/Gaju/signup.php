<?php
include_once 'dbConnection.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="style23.css">
<title>Sign up Page</title>
</head>
<body>
  <nav>
    <div class="log">
        <h1>GN's houses for rent</h1>
    </div>
    <div class="menu-items">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li> <a href="about.php" >About</a></li>
            <li><a href="contact.ph">Contact Us</a></li>
            <li><a href="signup.php">signup</a></li>
            <li> <a href="login.php">login </a></li>
            <li><a href="forrent.php">for rent</a></li>
        </ul>
    </div>
  </nav>
 <section class="login">
   <div class="form-container">
  <h2> Signup Here</h2>
  <form class="modal-content animate" action="login.php" method="post">

    <div class="container">
      <div class="form_control">
       <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required >
     </div>
     <div class="form_control">
      <label for="uname"><b>Email</b></label>
     <input type="email" placeholder="Enter Email" name="email" required>
    </div>
    <div class="form_control">
      <label for="phone"><b>Phone number</b></label>
     <input type="text" placeholder="Enter phone number" name="phone" required>
    </div>
     <div class="form_control">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required max="15">
     </div>
     <div class="form_control">
      <label for="psw"><b>Repeat Password</b></label>
      <input type="password" placeholder="Enter Password" name="confirmpsw" required max="15">
     </div>
      <button type="submit" class="btn lg-in">SignUp</button>
     <div class="rememberMe">
      <label for="rememberMe">Remember me</label>
      <input type="checkbox" checked="checked" name="remember"> 
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