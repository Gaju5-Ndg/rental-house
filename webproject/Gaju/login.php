<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/login.css">
<link rel="stylesheet" href="style.css">
<title>Login Page</title>
</head>
<body>
  <nav>
    <div class="log">
        <h1>GN's houses for rent</h1>
    </div>
    <div class="menu-items">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li> <a href="#about" >About</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="signup.php">signup</a></li>
            <li> <a href="login.php">login </a></li>
            <li><a href="for rent">for rent</a></li>
        </ul>
    </div>
  </nav>
 <section class="login">
   <div class="form-container">
  <h2> Login Here</h2>
    <form class="modal-content animate" action="login1.php" method="POST">
    <div class="container">
        <input type="radio" name="Admin" value="Admin">
        <label for="Admin"name="Admin">Admin</label>
        <label for="user">Tenant</label>
        <input type="radio" name="Admin" value="user"><br>
        <!-- <p style="color:red"></p> -->
      <div class="form_control">
       <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname">
     </div>
     <div class="form_control">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
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