<?php session_start();
    include 'check.php';
	include 'dbCon.php';
	$img=$_SERVER['QUERY_STRING'];

	$sql="SELECT * FROM images where id = $img";
	$result=mysqli_query($conn, $sql);  
	while($row=mysqli_fetch_array($result)){
 		 $file=$row['image_path'];
	}

	if (!unlink($file))
   {
  	
   }
     else
   {
  		header("Location: index2.php");
  //echo ("Deleted $file");
  	}
	$sql="DELETE FROM `images` WHERE id ='$img'";

	//$sql="DELETE FROM Car WHERE  ";
	
	$result=mysqli_query($conn,$sql);

	$result=$conn->query($sql);
	
	
	if($result){?>
		<script>alert("Image delete succesfull");</script>
	<?php } else{?>
	<script>alert("Image delete NOT succesfull");</script><?php }?> 
