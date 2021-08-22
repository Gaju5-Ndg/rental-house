<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Fixed Navigation Bar</title>
<meta name="description" content="An example of a fixed-position(sticky) top navigation bar that remains visible while the user scrolls the page.">
<meta name="author" content="Six Revisions">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->  
<link rel="stylesheet" href="assets/base.css">
<link rel="stylesheet" href="fixed-navigation-bar.css">
<link rel="shortcut icon" href="http://sixrevisions.com/favicon.ico">
</head>
<style>
    .Account {
  position: absolute;
  
  right: 0px;
  width: 200px;
  height: 120px;
  border: 0px solid green;
}
.Account1 {
  position: absolute;
  
  left: 5px;
  width: 200px;
  height: 120px;
  border: 0px solid green;
}
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<body>

<nav class="fixed-nav-bar">
  <div id="menu" class="menu">
    <a class="Account1" href="home.php">HOME</a>
    <!-- Example responsive navigation menu  -->
    <a class="show" href="#menu">Menu</a><a class="hide" href="#hidemenu">Menu</a>
    <ul class="menu-items">
      <li><a href="action_contact.php">Feedback</a></li>
      <li><a href="accountLogin.php">Manage system</a></li>
      <li class="Account"><a href="logtt.php" >Log Out</a></li>
    </ul>
    </div>
</div>
</nav>
<section class="content">
  <div class="description">
    <h1>Welcome to Admin Dashboard</h1>
    <a class="button" href="upload_house.php">Upload Houses</a>
    <a class="button" href="action_tenant.php">Manage system</a>
    <div class="">
    <a href="action_house.php">
    <a href="action_tenants.php">
  </div>
</section>
</body>
</html>