<!DOCTYPE html>
<html>
<head>
	<title>SUPPORTIVE DOCUMENT</title>

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

<br>
<h2 style="text-align: center;"><b>DOWNLOAD STUDENTS' SUPPORTIVE DOCUMENTS</b></h2>
		<div class="card-Secondary">

			<div class="p-5">
           <table border="2" style="width: 500px;height: 200px; text-align: center;">
           	<tr><th>Initial Name</th><th>NIC</th><th>NIC Image</th><th>A/L Certificate Image</th><th>O/L Certificate Image</th></tr>
		

<?php
       
    include_once("includes/dbconnection.php");
   	
		$sup = $_GET["proid"];  
		$Result = mysqli_query($Connection,"SELECT * FROM applicant_details WHERE subject_type='$sup'");
		while($row=mysqli_fetch_array($Result)){

        ?>
           
        <?php
           echo "<tr>";
           echo "<td>".$row['initial_name']."</td>";
           echo "<td>".$row['nic']."</td>";
           $niclink = $row['nic_image'];
           $allink = $row['al_image'];
           $ollink = $row['ol_image'];
		   
           echo "<td>";
           echo "<button type='submit' class='btn btn-sm' style='width: 100px;'><a href='codl2 php/$niclink'><b>DOWNLOAD</b></button>";
           echo "</td>";

           echo "<td>";
           echo "<button type='submit' class='btn btn-sm' style='width: 100px;'><a href='codl2 php/$allink'><b>DOWNLOAD</b></button>";
           echo "</td>";

           echo "<td>";
           echo "<button type='submit' class='btn btn-sm' style='width: 100px;'><a href='codl2 php/$ollink'><b>DOWNLOAD</b></button>";
           echo "</td>";

           echo "</tr>";
           }
           ?>

       </table>
       
   </div></div></div>
    </div>

</body>
</html>