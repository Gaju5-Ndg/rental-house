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
           <li><a href="home.php">Home</a></li>
           <li> <a href="#about" >About</a></li>
           <li><a href="contact_page.html">Contact Us</a></li>
           <li><a href="signup.php">signup</a></li>
           <li> <a href="login.php">login </a></li>
           <li><a href="forrent.php">for rent</a></li>
       </ul>
   </div>
 </nav>


<section class="hero_section" id="hero_section">
    <div class="w3-content">
        <img class="mySlides" src="./images/house.jpg" >
        <img class="mySlides" src="./images/h1.jpg" >
        <img class="mySlides" src="./images/h2.jpg" >
        <img class="mySlides" src="./images/house3.jpg" >
        <img class="mySlides" src="./images/house4.jpg" >
        <img class="mySlides" src="./images/house5.jpg" >
        <img class="mySlides" src="./images/house6.jpg" >
        <img class="mySlides" src="./images/house7.jpg" >
        <img class="mySlides" src="./images/house8.jpg" >
        <img class="mySlides" src="./images/h9.jpg" >
        <img class="mySlides" src="./images/h10.jpg" >
      </div>
</section>

<section class="about" id="about">

    <h1 class="about_title">About Us</h1>
<p class="about_us">
   GN's houses for rent is a real estates company that rents houses at affordable prices in Rwanda!!
</p>

</section>

<section class="Contact" id="contact">
    <div class="background">
        <div class="container">
          <div class="screen">
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>CONTACT</span>
                  <span>US</span>
                </div>
                <div class="app-contact">CONTACT INFO : +250786632360</div>
              </div>
              <div class="screen-body-item">
                <div class="app-form">
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="NAME" value="Krisantus Wanandi">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="EMAIL">
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" placeholder="CONTACT NO">
                  </div>
                  <div class="app-form-group message">
                    <input class="app-form-control" placeholder="MESSAGE">
                  </div>
                  <div class="app-form-group buttons">
                    <button class="app-form-button">CANCEL</button>
                    <button class="app-form-button" >SEND</button>
                  </div>
                </div>
              </div>
            </div>
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