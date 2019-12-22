<?php include 'dbCon.php';
$img=$_SERVER['QUERY_STRING'];

$sql="SELECT * FROM images where id = $img";
$result=mysqli_query($conn, $sql);  
while($row=mysqli_fetch_array($result)){
  $file=$row['image_path'];
}
echo $file;
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  header("Location: index2.php");
  //echo ("Deleted $file");
  }
?> 