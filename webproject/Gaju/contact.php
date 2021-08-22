<?php

	// connect to the database
	$conn = mysqli_connect('localhost', 'gaju', 'gaju', 'gn');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

$email = $name = $phone= $messages = '';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['names']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $messages = mysqli_real_escape_string($conn, $_POST['messages']);
    // create sql
    $sql = "INSERT INTO contact(names,email,phone,messages) VALUES('$name','$email','$phone','$messages')";

    // save to db and check
    if(mysqli_query($conn, $sql)){
      // success
      header('location: home.php');
    } else {
      echo 'query error: '. mysqli_error($conn);
    }
    
} // end POST check





?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Creating Fixed Header and Footer with CSS</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 <nav>
   <div class="log">
       <h1>GN's houses for rent</h1>
   </div>
   <div class="menu-items">
       <ul>
           <li><a href="/home.html">Home</a></li>
           <li> <a href="/abt.html" >About</a></li>
           <li><a href="contact.html">Contact Us</a></li>
           <li><a href="signup.html">signup</a></li>
           <li> <a href="login.html">login </a></li>
           <li><a href="for rent.html">for rent</a></li>
       </ul>
   </div>
 </nav>
 <span>CONTACT</span>
                  <span>US</span>
            <form action="contact.php" method="POST">

                <div class="app-contact">CONTACT INFO : +250786632360</div>
              <div class="screen-body-item"></div>
                <div class="app-form"></div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="NAME" value="kelly"name="name">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="EMAIL"name="email">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="CONTACT NO"name="phone">
                  </div>
                  <div class="app-form-group message">
                    <textarea class="app-form-control" placeholder="MESSAGE"name="messages"> </textarea>
                  </div>
                  <div class="app-form-group buttons">
                      <button class="app-form-button">CANCEL</button>
                       <button class="app-form-button" name="submit" type="submit">SEND</button>
                  </div>
</form>
</section>
<footer>
    <p class="footer-content">Copyright &copy; 2021 </p>        
</footer>
<script src="./js/script.js"></script>
</body>
</html>