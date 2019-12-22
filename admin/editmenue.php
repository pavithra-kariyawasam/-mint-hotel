<?php session_start(); include 'check.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" 
      type="image/png" 
      href="images/logo.png">
<title>mint hotel ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body {
   
}
a{
	color:black;
}
#txtbox {
    
    height: 100px;
    
}

</style>


</head>
<body>

<div class="container" style="background-color: #e3e3e3;"><?php 
	include 'dbCon.php';
	//include 'index2.php';
	
	$_SESSION['menu_id']=$_SERVER['QUERY_STRING'];
	$menu_id=$_SESSION['menu_id'];		
	
	//echo $menu_id ;
	$sql="SELECT * FROM menues WHERE menu_id ='$menu_id'";
	//$sql="SELECT * FROM Car WHERE C_Id ='$newCarId' ";
	
	$result=mysqli_query($conn,$sql);

	//$result=$conn->query($sql);
	
	//$row = $result->fetch_assoc();
	if($row=$result->fetch_assoc()){
		//echo $row;
		$menu_id=$row['menu_id'];
		$menu_name=$row['menu_name'];
		$menu_price=$row['menu_price'];
		$rice_types=$row['rice_types'];
		$curries=$row['curries'];
		$desserts=$row['desserts'];
		$others=$row['others'];?>
		
<?php

	
	}?> 




		

    	

	 <div class="row">			
<div class="col-sm-2">
</div>

<div class="col-sm-3">
	<h3>Update Your Menue</h3>
</div>
</div>


	 <div class="row">
<div class="col-sm-3">
</div>
	 				
<div class="col-sm-5">
	
	

<form name="formEdit" action="editmenue2.php" method="POST">

	<div class="form-group">
    <label for="menu_id">menu_id:</label>
    <input type="text" class="form-control" name="menu_id"  value="<?php echo $menu_id ?>">
  </div>
  
  <div class="form-group">
    <label for="menu_name">menu_name:</label>
    <input type="text" class="form-control" name="menu_name" value="<?php echo $menu_name ?>">
  </div>
  
  	<div class="form-group">
    <label for="menu_price">menu_price:</label>
    <input type="text" class="form-control" name="menu_price" value="<?php echo $menu_price ?>">
  </div>
  
  	<div class="form-group">
    <label for="No_Orice_typesf_Pas">rice_types:</label>
    <input type="text" class="form-control" name="rice_types" value="<?php echo $rice_types ?>" id="txtbox">
  </div>
  
  	<div class="form-group">
    <label for="curries">curries:</label>
    <input type="text" class="form-control" name="curries"  value="<?php echo $curries ?>" id="txtbox">
  </div>
  
  
   <div class="form-group">
    <label for="desserts">desserts:</label>
    <input type="text" class="form-control" name="desserts" value="<?php echo $desserts ?>" id="txtbox">
  </div>
  
     <div class="form-group">
    <label for="others">others:</label>
    <input type="text" class="form-control" name="others" value="<?php echo $others ?>">
  </div>
  
 
  
  <button type="submit" class="btn btn-default" name="update">Update</button>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 


</form>

</div>
</div>



<?php if(isset($_POST['update'])){
		$menu_id= $_SESSION['menu_id'];
		

		$menu_name=$_POST['menu_name'];
		$menu_price=$_POST['menu_price'];
		$rice_types=$_POST['rice_types'];
		$curries=$_POST['curries'];
		$desserts=$_POST['desserts'];
		$others=$_POST['others'];
		
		$sql1="UPDATE menues SET 
		menu_id='',
		menu_name='$menu_name',
		menu_price= $menu_price ,
		rice_types= '$rice_types' ,
		curries= '$curries' ,
		desserts= '$desserts' ,
		others= '$others' 
		
		
		 WHERE menu_id='$menu_id' ";
		
		
		
		$sql="UPDATE menues SET menu_name='$menu_name',menu_price='$menu_price',rice_types='$rice_types',curries='$curries',desserts='$desserts',others='$others' WHERE menu_id='$menu_id'";
					
					
		if($result=mysqli_query($conn, $sql)){?>	
			<script>
				alert("Successfully Updated your record");
			</script>
			
			
<?php }
		else{
			
			echo "Badd";
		}
		
		//header("Location: afterloginHome.php");
	}?>
</div>
</body>
</html>



