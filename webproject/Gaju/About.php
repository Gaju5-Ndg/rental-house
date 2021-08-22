<?php
  // connect to the database
	$conn = mysqli_connect('localhost', 'gaju', 'gaju', 'gn');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>
     GN's houses for rent | About
     </title>
     <link rel="stylesheet" href="style.css">
 </head>
 
 <header>
     <nav class="nav-menu">
       <ul >
        <li><a href="Home.html">Home</a></li>
        <li> <a href="About.html" >About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="signup.html">signup</a></li>
        <li> <a href="login.html">login </a></li>
        <li><a href="for rent.html">for rent</a></li>
        
       </ul>
     </nav>
   </header>
 <section>
   <h1><b>Houses for rent</B></h1>
     <br>
   <div style="display:flex;grid-gap:10px;margin-right:20px;">
     <img src="h1.jpg"width="300" height="200">
 <p>GN's houses for rent is a legal website that rents beautiful unfurnished houses at affordable prices in Rwanda.
 The goal of this is to provide superior service throughout the process of renting houses,this website help people to find new houses quickly. 

 </P>
 <P> <B>make your home at any of these places in rwanda </p>
 </div>
 </section>
 </body>
 </html>

          </div>
         
        </div>
      </div>
      
</section>
<footer>
    <p class="footer-content">Copyright &copy; 2021 </p>        
</footer>
<script src="./js/script.js"></script>
</body>
</html>