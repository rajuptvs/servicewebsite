<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="reglog.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $emailID    = stripslashes($_REQUEST['email']);
        $emailID    = mysqli_real_escape_string($con, $emailID);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $firstName = stripslashes($_REQUEST['firstname']);
        $firstName = mysqli_real_escape_string($con, $firstName);
        $lastName = stripslashes($_REQUEST['lastname']);
        $lastName = mysqli_real_escape_string($con, $lastName);
        $homeAddress = stripslashes($_REQUEST['homeadd']);
        $homeAddress = mysqli_real_escape_string($con, $homeAddress);
        $homePhone = stripslashes($_REQUEST['homeph']);
        $homePhone = mysqli_real_escape_string($con, $homePhone);
        $cellPhone = stripslashes($_REQUEST['mobile']);
        $cellPhone = mysqli_real_escape_string($con, $cellPhone);







        
        $query    = "INSERT into `Users` (firstName,lastName,emailID,homeAddress,homePhone,cellPhone,password,username)
                     VALUES ('$firstName','$lastName' ,'$emailID','$homeAddress','$homePhone','$cellPhone','" . md5($password) . "',  '$username')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="firstname" placeholder="First Name">
        <input type="text" class="login-input" name="lastname" placeholder="Last Name">
        <input type="text" class="login-input" name="email" placeholder="Email Address">
        <input type="text" class="login-input" name="homeadd" placeholder="Home Address">
        <input type="number" class="login-input" name="homeph" placeholder="Home Phone">
        <input type="number" class="login-input" name="mobile" placeholder="Mobile Phone">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>