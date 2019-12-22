<?php session_start();
include 'dbCon.php'; //Establishing connection with our database
 
if(isset($_POST["submit"]))
{
if(empty($_POST["username"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];


// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

//$password = md5($password);

 
//Check username and password from database
$sql="SELECT A_Id FROM admin WHERE A_Name='$username' and Password='$password'";

//echo $password;
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
//If username and password exist in our database then create a session.
//Otherwise echo error.

if(mysqli_num_rows($result) == 1)
{
$_SESSION['username'] = $username; // Initializing Session
header("location: index2.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect username or password.";
}
 
}
}?>