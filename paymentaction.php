 <!DOCTYPE html>
<html language="en">
    <head>
      <title>PAYMENT DETAILS</title>
    
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
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
	
    <style type="text/css">
      body{background-color: rgb(184, 185, 196);

      }
    </style>
        
    </head>


<body>

<br>
<h2 style="text-align: center;"><b>PAYMENT DETAILS INSERTING</b></h2>

<div class="p-5">
       
<table border="2" style="text-align:center;">
<tr>
<th>Initial Name</th>
<th>NIC</th>
<th>User Name</th>
<th>Program ID</th>
<th>Full Payment</th>
<th>Paid Amount</th>
<th>Due payment</th>
<th>Action</th>

</tr>
<tr>

<?php
       
    include_once("includes/dbconnection.php");
   	
			$sell=$_GET["proid"];
            
		   $Result = mysqli_query($Connection,"SELECT * FROM payment WHERE program_id='$sell'");

		   while($row=mysqli_fetch_array($Result)){
           
           ?>
           <form action="pay.php" method="get">
           <?php
           
           echo "<tr>";
           
		   echo "<td>".$row['initial_name']."<input type='text' name='proid'  value='".$sell."' hidden></td>";
           
           echo "<td>".$row['nic']."</li>";  
           echo "<td>"."<input type='text' name='ininame'  value='".$row['user_name']."'></td>";
           echo "<td>".$row['program_id']."</td>";
           echo "<td>".$row['full_payment']."</td>";
           echo "<td>"."<input type='text' name='currentpy'></td>";
           echo "<td>".$row['rest_payment']."</td>";
		   
           
           echo "<td>";
           echo "<button type='submit' class='btn btn-success btn-sm' name='pyupdate' style='width: 80px; float:right;'><b>SUBMIT</b></button>";
            echo "</td>";
            
        
           echo "</tr>";
           ?>
           </form>
           <?php
           }         
           ?>
</tr>

</table>
</div>
        
</body>
</html