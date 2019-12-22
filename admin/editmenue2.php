<?php 
	include 'dbCon.php';
session_start();

	
	

    if(isset($_POST['update'])){

      

       $menu_id=$_SESSION['menu_id'];
       $menu_name=$_POST['menu_name'];
       $menu_price=$_POST['menu_price'];
       $rice_types=$_POST['rice_types'];
       $curries=$_POST['curries'];
       $desserts=$_POST['desserts'];
       $others=$_POST['others'];

	//$sql=" UPDATE `room` SET `price`='$p' WHERE `roomid`='$roomid' ";
	$sql="UPDATE menues SET menu_name='$menu_name',menu_price='$menu_price',rice_types='$rice_types',curries='$curries',desserts='$desserts',others='$others' WHERE menu_id='$menu_id'";
	

	$result=$conn->query($sql);
	
	if($result){
	
	?>
	 <script language="javascript" type="text/javascript">
        
        alert('Menue Change sucsessfull....');
    
                      window.location='index2.php';

    </script>

	<?php
	}

    else{
     ?>
        	 <script language="javascript" type="text/javascript">
        
        alert('Menue Change not sucsessfull....');
    
                      window.location='editmenue.php';

    </script>
<?php
    }
    }
	?>