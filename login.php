<?php
session_start();

$userinfo = array(
                'admin'=>'password',
                'user'=>'password1'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:index.php' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
	
		$username = $_POST['username']; $password = $_POST['password'];
		#$userinfo[$_POST['username']] == $_POST['password']
    if($username === 'admin' && $password === 'password') {
        #$_SESSION['username'] = $_POST['username'];
        header("Location:contactus.php");
    }else {
        
        print( "<body style = \"font-family: arial; font-size: 1em; color: red\">
        Please enter valid Credentials" );
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">

    <!--<link href="../assests/scripts/glightbox.min.css" rel="stylesheet"> -->
    <link href="../assests/scripts/boxicons.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/> -->
    <title>Login</title>
</head>
        <title>Login</title>
    </head>
    <style>
        :root {
            --Sniglet-font: "Sniglet", cursive;
        }
    .loginForm {
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid black;
        border-radius: 5px;
        padding: 20px;
        width: 50%;
        flex-direction: column;
    }
    @media only screen and (min-width: 320px) and (max-width: 479px) {
        .loginForm {
            width: 100%;
        }
    }
    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .loginForm {
            width: 100%;
        }
    }
    @media only screen and (min-width: 768px) and (max-width: 979px) {
        .loginForm {
            width: 100%;
        }
    }
    #submit{
        margin-top: 2%;
        width: 30%;
        border-radius: 5px;
        height: 40px;
        background:#131113;
        color: white;
        font-size: 20px;
      
    }
</style>
    <body style="background-color: black">
   
        
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
                <a class="nav-link" href="login.php">Contact Us</a>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="gallery.html">Gallery</a>
                   <a class="dropdown-item" href="news.html">News</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">Social Media</a>
                </div>
             </li>
          </ul>
       </div>
    </nav>
		
       
  
       
        <div style=" display: flex; justify-content: center; align-items: center; height: 100vh; padding: 20px; width: 100%; flex-direction: column;">
        <form method="post" class="loginForm">
            <label>Enter User Name</label>
            <input name='username' type='text' style="width: 80%; border-radius: 5px; height: 40px; margin-bottom: 10px" id="username">
            <label>Enter Password</label>
            <input name='password' type='password' id="password" style="width: 80%; border-radius: 5px; height: 40px">
            <input type="submit" id = "submit" name="login" value="login" />
        </form>
        </div>
		
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
    </body>
</html>