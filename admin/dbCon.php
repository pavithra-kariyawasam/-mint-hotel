<?php
    $host="localhost:3306";
    $Hname="mintbanq_mint";
    $Hpwd="mint@123";
    $conn=mysqli_connect($host,$Hname,$Hpwd);
	
	if(!mysqli_connect($host,$Hname,$Hpwd) || !mysqli_select_db($conn,"mintbanq_mint")){

        echo "Failed";
    }
    

?>
