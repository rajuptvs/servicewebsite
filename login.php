<?php
session_start();

$userinfo = array(
                'admin'=>'password',
                'user'=>'password1'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
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
    <link href="../assests/scripts/aos.css" rel="stylesheet">
    <link href="../assests/scripts/bootstrap.min.css" rel="stylesheet">
    <link href="../assests/scripts/bootstrap-icons.css" rel="stylesheet">
    <!--<link href="../assests/scripts/glightbox.min.css" rel="stylesheet"> -->
    <link href="../assests/scripts/boxicons.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/> -->
    <title>GrammerSchool</title>
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
        background:#E79A88;
        color: whitesmoke;
        font-size: 20px;
        font-family: var(--Sniglet-font);
    }
</style>
    <body>
    <header>
        <div class="container-fluid">
        <nav class="navbar navbar-expand-lg ">
            <img src="https://img.icons8.com/carbon-copy/50/000000/school.png"/>
            <a class="navbar-brand" href="#">Grammar School</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scrollto active" href="../Index.php"> Home</a>
                    </li>  
                </ul>
            </nav>
        </div>
       
    </header>
       
        <div style=" display: flex; justify-content: center; align-items: center; height: 100vh; padding: 20px; width: 100%; flex-direction: column;">
        <form method="post" class="loginForm">
            <label>Enter User Name</label>
            <input name='username' type='text' style="width: 80%; border-radius: 5px; height: 40px; margin-bottom: 10px" id="username">
            <label>Enter Password</label>
            <input name='password' type='password' id="password" style="width: 80%; border-radius: 5px; height: 40px">
            <input type="submit" id = "submit" name="login" value="login" />
        </form>
        </div>
    </body>
</html>