<?php

include 'dbCon.php';

$user_check=$_SESSION['username'];
 
$sql = "SELECT A_Name FROM admin WHERE A_Name='$user_check' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
$login_user=$row['A_Name'];
 
if(!isset($user_check))
{
header("Location: index.php");
}?>