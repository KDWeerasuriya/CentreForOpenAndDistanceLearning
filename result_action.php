<!DOCTYPE html>
<html language="en">
    <head>
        <title>RESULT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/news.css" type="text/css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     
    	<style type="text/css">
			#con{padding: auto;
				margin: 10px 250px 10px;
			}
			body{background-color: rgb(185, 194, 208);

			}
		</style>

	</head>
	
	<!--database connection -->
	<?php
	include_once("includes/dbconnection.php");
	?>

<body>

<!--HEADER START HERE-->
  <div class="col-md-12" style="height: auto;">
    <div style="background-color: rgb(27, 29, 69);">
      <div class="text-center p-3">
        
        <div class="card p-3" style="float: right;">
          <img src="images/logo_uwu.jpg" width="120" height="140" alt="" style="width:120px; height:160px;">
        </div>

        <div class="col text-center p-2">
          <div class="card card-body" style="background-color: rgb(27, 29, 69);"> 
            
            <div class="card">
            <h3 style="font-size: 60px; font-weight: bolder; color: #1c1c4a; text-shadow: 3px 3px 3px #ffc000;">UVA WELLASSA UNIVERSITY OF SRI LANKA</h3>
            </div>

            <div>
            <h2 style="font-size: 45px; font-family: times new roman;font-weight: bold;color: white;"><a href="#"></a>CENTRE FOR OPEN AND DISTANCE LEARNING (CODL)</h2>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

<div class="p-1"></div>

  <div class="card" style="background-color: rgb(27, 29, 69);">
    <div class="p-0">
      <div class="p-2" style="float: left;">
        <button type="button" class="btn btn-outline-secondary"><a href="index.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">HOMEPAGE</a></button>
        <button type="button" class="btn btn-outline-secondary" disabled><a style="color: yellow; font-weight: bold;">RESULT</a></button>
      </div>
      
      <div class="p-2" style="float: right;">
        <button type="button" class="btn btn-outline-secondary"><a href="login.html" class="text-decoration-none" style="color: yellow; font-weight: bold;">LOGIN</a></button>
      </div>
    </div>
  </div>
<!--HEADER END HERE-->

    <div>
    <div class="card bg-dark">
    
    <div id="con">
        <div class="card bg-light">
        <div class="card-Secondary">
        <h3 style="text-align: center;">AVAILBLE RESULT SHEETS</h3>

            <div class="p-5">
           <table align="center" border="2" style="height: auto;">
            <tr><th style="text-align: center;">Title</th><th style="text-align: center;">Program ID</th><th style="text-align: center;">Date</th><th style="text-align: center;">Action</th></tr>
        

<?php
       
    include_once("includes/dbconnection.php");
            
           $Result = mysqli_query($Connection,"SELECT * FROM result");

           while($row=mysqli_fetch_array($Result)){

           ?>
           

            <?php

           echo "<tr>";
           
           
           echo "<td>".$row['title']."</td>";
           echo "<td>".$row['program_id']."</td>";
           echo "<td>".$row['dates']."</td>";
           $niclink = $row['file_path'];
           
           echo "<td>";
           echo "<button type='submit' class='btn btn-sm' style='width: 300px;'><a href='$niclink'><b>CLICK TO DOWNLOAD</b></button>";
           echo "</td>";
        
           echo "</tr>";
           }
           ?>

       </table>
   </div></div></div></div></div>
    </div>

<!--footer -->
        <?php
        include_once("includes/footer.php");
        ?>

</body>
</html>