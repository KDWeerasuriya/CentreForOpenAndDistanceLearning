<!DOCTYPE html>
<html>
<head>
	<title>PAYMENT SLIPS</title>

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
<h2 style="text-align: center;"><b>DOWNLOAD STUDENTS' PAYMENT SLIPS</b></h2>
	

		<div class="p-5">
        <table border="2" style="width: 500px;height: 200px; text-align: center;">
        <tr>
        	<th>Dates</th>
        	<th>NIC</th>
        	<th>Action</th>
        </tr>
		

<?php
       
    include_once("includes/dbconnection.php");
   	
		$sup = $_GET["proid"]; 
		$Result = mysqli_query($Connection,"SELECT * FROM payment_slips WHERE program_id='$sup'");
		while($row=mysqli_fetch_array($Result)){

        ?>
           
        <?php
           echo "<tr>";
           echo "<td>".$row['dates']."</td>";
           echo "<td>".$row['nic']."</td>";
           $link = $row['file_path'];
		   
           echo "<td>";
           echo "<button type='submit' class='btn btn-sm' style='width: 100px;'><a href='codl2 php/$link'><b>DOWNLOAD</b></button>";
           echo "</td>"; 
        
           echo "</tr>";
           }
           ?>

       </table>

   		</div></div></div>
   		</div></div></div>

</body>
</html>