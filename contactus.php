<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>contactus</title>
	<!--<link href="stylecontact.css" rel="stylesheet">-->
	<link href="login.css" rel="stylesheet">
	 <link href="css/bootstrap-4.4.1.css" rel="stylesheet">

</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
				 
             </li>
			  
			  <li class="nav-item active">
                <a class="nav-link" href="about.html">About Us&nbsp;<br>
                </a>
				 
             </li>
			  <li class="nav-item active">
                <a class="nav-link" href="products.html">Services&nbsp; <span class="sr-only">(current)</span></a>
				 
             </li>
             <li class="nav-item active">
                <a class="nav-link" href="contactus.php">Contact Us</a>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="gallery.html">Gallery</a>
                   <a class="dropdown-item" href="#">Email Us</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">Social Media</a>
                </div>
             </li>
          </ul>
       </div>
    </nav>
<div id = "info">
    <div class="portlet-body">
		
		<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover">Sign Up </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="rblogo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="post" action="password.php" name="signin">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>



     </div>
 </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
