<?php
session_start();
if(!isset($_SESSION['user'])){

	header('location:login.html');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>APPROVAL STATUS</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>

		<style type="text/css">
			body{background-color: rgb(184, 185, 196);

			}
		</style>

</head>
<body>

  <!--database connection -->
  <?php
  include_once("includes/dbconnection.php");
  ?>
  

<form action="take_approval_data_action.php" target="_blank" method="post">
<?php
$getid = $_GET["app"];
$checkpaid=0;
?>


<br>
<h2 style="text-align: center;"><b>APPLICANT APPROVAL SESSION</b></h2>

<div class="p-5">
<table border="4" style="width: auto;height: 200px; text-align: center;">
<tr><th>NIC</th><th>Subject Name</th><th>Initial Name</th><th>Contact</th><th>Email</th><th>Status</th><th>Approval Status</th></tr>


<?php

$Result = mysqli_query($Connection,"SELECT * FROM applicant_details where subject_type='$getid'");

	while($row = mysqli_fetch_array($Result)){
		echo "<tr>";
		$appnic = $row["nic"];
		$_SESSION["appnic"] = $appnic;
	echo "<td>".$appnic."</td>";
	echo "<td>".$row['subject_name']."</td>";
	echo "<td>".$row['initial_name']."</td>";
	echo "<td>".$row['contact_number']."</td>";
	echo "<td>".$row['email']."</td>";

	echo "<td>";

$Resultd = mysqli_Query($Connection,"SELECT nic FROM payment_slips where nic='$appnic'");

$c = false;

while($row = mysqli_fetch_array($Resultd)){
	$c = true;
	//$ut=$row["nic"];

}


 // user found
 if ($c) {
			$checkpaid=1;
			
          }
        else {
            $checkpaid=2;
            }

	//check either paid or not
	if($checkpaid==1){
	
	echo"<div class='card bg-success' style='auto;height:45px;'>";
			echo "<div class='card-body text-center'>";
				echo "<p>PAID</p>";
			echo "</div>";
			echo "</div>";

	}

	if($checkpaid==2){

	echo"<div class='card bg-danger' style='width:auto;height:45px;'>";
	echo "<div class='card-body text-center'>";
		echo "<p>UNPAID</p>";
	echo "</div>";
	echo "</div>";

	}
	echo "</td>";
	

	echo "<td>";
    echo "<button type='submit' class='btn btn-warning' name='giveapproval' style='width: 140px;'><b>GIVE APPROVAL</b></button>";
    echo "</td>";
	echo "</tr>";							
}

?>

</div>
</form>

</body>
</html>