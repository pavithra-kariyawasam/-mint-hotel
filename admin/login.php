<?php
include('loginS.php'); // Include Login Script
if ((isset($_SESSION['username']) != '')) 
{
header('Location: index2.php');
}
?>
 
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta charset="utf-8">
<link rel="icon" 
      type="image/png" 
      href="images/logo.png">
<title>Mint hotel-admin panel</title>
<link rel="stylesheet" href="style.css" type="text/css" />
 <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h1{
            text-align: center;
            color: #017572;
         }
      </style>
<meta charset="utf-8">
<title>PHP Login Form with Session</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
 
<body>

<div class = "container">
<h1 class = "form-signin-heading">Login Form</h1>
<br><br>
<form class = "form-signin" method="post" action="">
<label>Username:</label><br>
<input class = "form-control"  type="text" name="username" placeholder="username" /><br><br>
<label>Password:</label><br>
<input  class = "form-control" type="password" name="password" placeholder="password"/>  <br><br>
<input class = "btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login" /> 
</form>
</div>


</body>
</html>