
<?php
     
    include_once("includes/dbconnection.php");
   	


if(isset($_GET["pyupdate"])){
$c = $_GET["proid"];
$a = $_GET["currentpy"];
$b = $_GET["ininame"];



	$Result = mysqli_query($Connection,"SELECT * FROM payment where user_name='$b' ");
$p=0;
			while($row=mysqli_fetch_array($Result)){
		
			$p=$row["current_payment"];
            $r=$row["rest_payment"];
			}
$newP=$p+$a;
$rp=$r-$a;





$Result = mysqli_query($Connection,"UPDATE payment SET current_payment ='$newP',rest_payment='$rp' WHERE user_name='$b'");
		if($Result){
				header("location:paymentaction.php?proid=$c");			
	  }else{
	    
          }
	}

?>