<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="payment.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="social.css">
<link rel="stylesheet" href="gridhome.css">
<link rel="stylesheet" href="search.css">
<link rel="stylesheet" href="footer.css">
<script src="https://kit.fontawesome.com/07796c0bdb.js" crossorigin="anonymous"></script>
</head>
<body >
    <div class="topnav" style="position:fixed;">
        <nav style="font-size: xx-large;">
            <ul class="text-alg" style="background-color: rgb(14, 59, 80);">
                <input style="width: 20%;" type="text" placeholder="Search...">
            <a href="home.php">Home</a>
            <a href="#about" >About</a>
           <a href="contact.html">Contact Us</a>
           <a href="signup.php">signup</a>
           <a href="login.php">login </a>
           <a href="for rent.html">for rent</a>
                    
        </ul>
        </nav>
    </div>
<h2 style="margin-top: 120px;">Payment Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Customer Details</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Gaju Nadege">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="gaju@gmail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="555 W. 20th Street">
            <label for="city"><i class="fa fa-institution"></i> Province</label>
            <input type="text" id="city" name="city" placeholder="west">

            <div class="row">
              <div class="col-50">
                <label for="district">District</label>
                <input type="text" id="state" name="state" placeholder="Rubavu ">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-mastercard" style="color:grey;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Gaju">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="111-111-111">
            </div>
            </div>
          </div>
          
        </div>
       
      </form>
      <div class="col-25">
        <div class="container"style="position:fixed;margin-left:0px">
           <h4>Cart <span class="price" style="color:black"><i class="fa fa-renting-card"></i> <b>4</b></span></h4>
           <br/><br/> <p><a href="#">Product 1</a> <span class="price">RWF100,000</span></p>
          <p><a href="#">Product 2</a> <span class="price">RWF160,000</span></p>
          <p><a href="#">Product 3</a> <span class="price">RWF140,000</span></p>
          <p><a href="#">Product 4</a> <span class="price">RWF200,000</span></p>
          <hr>
          <p>Total <span class="price" style="color:black"><b>RWF500,000</b></span></p>
        </div>
      </div>
    </div>
    
  </div>
</div>
<input type="submit" value="Confirm Payment" class="btn"> <br/><br/><br/><br/><br/><br/>
<div class="forfooter grid-container">
        <a href="https://www.snapchat.com/gajunad5"><i class="fab fa-twitter" style="background-color:rgb(14, 59, 80);font-size: 20px;padding: 20px;"></i></a>
        <a href="https://www.instagram.com/gaju_5/"><i class="fab fa-instagram" style="background-color:rgb(14, 59, 80);font-size: 20px;padding: 20px;"></i></a>
        <a href="https://www.linkedin.com/in/nadege-gaju-a4501b9877/"><i class="fab fa-linkedin" style="background-color:rgb(14, 59, 80);font-size: 20px;padding: 20px;"></i></a>
        <i class="fab fa-whatsapp"  style="background-color:rgb(14, 59, 80);font-size: 20px;padding: 20px;">+250786632360</i></div>
</div>
  </div>
</body>
</html>