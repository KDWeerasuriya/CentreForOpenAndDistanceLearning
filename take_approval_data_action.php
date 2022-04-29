<?php
session_start();
if(!isset($_SESSION['user'])){

	header('location:login.html');
}
?>
  <?php
    include_once("includes/dbconnection.php");
    ?>
	

<!DOCTYPE html>
<html>
<head>
	<title>APPROVAL DATA COLLECTOR</title>
</head>
<body>

<?php

//user name genarator
function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring = $randstring."".$characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }

//
if(isset($_SESSION["appnic"])){

$appget = $_SESSION["appnic"];
$p = "";
$ResultApp = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE nic='$appget'");
			while($row = mysqli_fetch_array($ResultApp)){

			$outputid = $row["subject_type"];
			$outputininame = $row["initial_name"];
			$p = RandomString();
			
		}

//$outputid;
//split
$max = 0;
$ResultZ = mysqli_query($Connection,"SELECT * FROM user_account");
			while($row = mysqli_fetch_array($ResultZ)){

			$outputusername = $row["user_name"];
			$no=$outputusername.split("$outputid")[1];
			if($max<$no){
				$max=$no;
			}
		}
$max=$max+1;
$uname=$outputid."".$max;

$type = "student";
$ResultPass=mysqli_query($Connection,"INSERT INTO user_account values('$uname','$p','$type','$outputid')");

$fullpay = "0";
$curpay = "0";
$restpay = "0";
$ResultPay=mysqli_query($Connection,"INSERT INTO payment (initial_name,nic,user_name,program_id,full_payment,current_payment,rest_payment) values('$outputininame','$appget','$uname','$outputid','$fullpay','$curpay','$restpay')");

}
?>


</body>
</html>