<!DOCTYPE html>
<html language="en">
    <head>
        <title>PAYMENT</title>
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
     
	</head>
	
	<!--database connection -->
	<?php
	include_once("includes/dbconnection.php");
	?>

<body>

<!--SCRIPTING START-->
<script>
	function fun(v){
	
	var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
	if(xhr.readyState==4){
	document.getElementById("showcase").innerHTML=xhr.responseText;
	//document.getElementById("btnList").remove();
	}
	}

	if(v!="default"){
		xhr.open("GET",v+".php",true);
		
	}
	else{
		
		LoadP();
	}
	
	xhr.send(null);
	return true;
	
	}

	function LoadP(){
	var xhr=new XMLHttpRequest();
	xhr.onreadystatechange=function(){
	if(xhr.readyState==4){
	document.getElementById("showcase").innerHTML=xhr.responseText;
	//document.getElementById("btn1").style.background="gray";
	//ocument.getElementById("btn1").disabled="disabled";
	}
	}
	
	xhr.open("GET","dashboard1.php",true);
	
	xhr.send(null);
	return false;


}

</script>
<!--SCRIPTING END-->


	<div id="header-wrapper">
		<div id="logo">
			<nav class="navbar navbar-expand-sm bg-light navbar-light" style="width: 1550px;">
				<div class="col text-center">
					<div style="text-align: center; font-size: 60px; font-weight: bolder; color: #1c1c4a; text-shadow: 3px 2px 0px #ff751a;">UVA WELLASSA UNIVERSITY
						<img src="images/logo_uwu.jpg" width="120" height="140" alt="" style="width:115px;height:120px;">
					</div>
				</div>
			</nav>

			<h2 style="font-size: 36px; color: white;"><a href="#"></a>CENTRE FOR OPEN AND DISTANCE LEARNING (CODL)</h2>
		</div>

    <div class="p-2">
      <div class="p-2" class="nav" style="float: left;">
        <button type="button" class="btn btn-outline-secondary"><a href="index.html" class="text-decoration-none">HOMEPAGE</a></button>
        <button type="button" class="btn btn btn-outline-secondary"><a href="news.php" class="text-decoration-none">NEWS</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="contact.php" class="text-decoration-none">CONTACT US</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="result.php" class="text-decoration-none">RESULT</a></button>
      </div>

      <div class="p-2" class="nav" style="float: right;">
        <button type="button" class="btn btn-outline-secondary"><a href="choose_apply.php" class="text-decoration-none">APPLY FOR COURSES AND DIPLOMAS</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="login.html" class="text-decoration-none">LOGIN</a></button>
      </div>

    </div>

  </div>


 
    
      <div id="content" align="center">
         <div action="php/news.php" method="post">
            <div class="p-2">
		      <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
		          <h3 class='mb-1'><b>PAYMENT DETAILS</b></h3>
		      </nav>
           </div>


		 <div class="p-4">
            <div class="row">
		
              <div class="col-md-5" style="height: auto;">
                <div class="card h-100">
	
					<div class="accordion " id="accordionExample">
				  
						<div class="card">
						<div class="card bg-secondary text-white" style="width:600px;">
						       <div class="card-header" id="headingOne">
							       <h2 class="mb-1">
							<button class="btn btn-outline-dark" type="button" style="width: 525px"; data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="width: auto;"><b>CERTIFICATE COURSES</b></button>
							       </h2>
						      </div>
						
						  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
							  <h5><b><u>AVAILABLE CERTIFICATE COURSES</b></u></h5><br>
				  
							  <!--AVAILABLE CERTIFICATE COURSES php code -->
							  <?php
							  //$Connection = mysqli_connect("localhost","root","","codl_information_management_system");
				  
							  $Result = mysqli_query($Connection,"select*from certificates_courses");
				  
							  while($row=mysqli_fetch_array($Result)){
								$resulttest4="<b><p style='text-align:left'>".$row['course_name']."</b><br>";

								 

								  

								//$colorPic1 = '<a href="form_cetificates_courses.html">'.$row['course_name'].'</a>';
								echo "<h2 class='mb-1'>";
								echo "<button class='btn btn-info' type='button' style='width: 500px; height:40px;'onclick='fun('student_data');'>$resulttest4</p>";
								echo "</h2>";
								  
								}
								echo "<br>";
							  ?>
				  
				  </div>
							</div>
						  </div>
						</div>

						<div class="card">
							<div class="card bg-secondary text-white">
							  <div class="card-header" id="headingFour">
								<h2 class="mb-1">
								  <button class="btn btn-outline-dark" type="button" style="width: 525px"; data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="width: auto;"><b>SPECIAL COURSES ON DEMAND</b></button>
								</h2>
								</div>
				  
							  <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
								  <h5><b><u>SPECIAL COURSES ON DEMAND</u></b></h5>
				  
							  <!--SPECIAL COURSES ON DEMAND php code -->
							  <?php
				  
							  $Result = mysqli_query($Connection,"select*from special_course");
				  
							  while($row=mysqli_fetch_array($Result)){

						
								$resulttest3= "<b><p style='text-align:left'>".$row['course_name']."</p></b>";

								  

								//$colorPic1 = '<a href="form_cetificates_courses.html">'.$row['course_name'].'</a>';
								echo "<h2 class='mb-1'>";
								echo "<button class='btn btn-info' type='button' style='width: 525px; height:40px;'onclick='fun('student_data');'>$resulttest3</p>";
								echo "</h2>";

								  
								 
								}
							  ?>
							  </div>
								</div>
							  </div>
							</div>
				  
						  <div class="card">
						  <div class="card bg-secondary text-white">
							<div class="card-header" id="headingTwo">
							  <h2 class="mb-1">
							  <button class="btn btn-outline-dark" type="button" style="width: 525px"; data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: auto;"><b>DIPLOMAS</b></button>
							  </h2>
							</div>
				  
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							  <div class="card-body">
								<h5><u>DIPLOMAS</u></h5>
				  
							  <!--UPCOMING DIPLOMAS php code-->
							  <?php
				  
							  $Result = mysqli_query($Connection,"select*from upcoming_diploma");
				  
							  while($row=mysqli_fetch_array($Result)){
							
								$resulttest2="<b><p style='text-align:left'>".$row['diploma_name']."</b></p>";

								//$colorPic1 = '<a href="form_cetificates_courses.html">'.$row['course_name'].'</a>';
								echo "<h2 class='mb-1'>";
								echo "<button class='btn btn-info' type='button' style='width: 500px; height:40px;'onclick='fun('student_data');'>$resulttest2</p>";
								echo "</h2>";
											
								  
								}
							  ?>
								</div>
							  </div>
							</div>
						  </div>
				  
						  <div class="card">
						  <div class="card bg-secondary text-white">
							<div class="card-header" id="headingThree">
							  <h2 class="mb-1">
							  <button class="btn btn-outline-dark" type="button" style="width: 525px"; data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="width: auto;"><b>EXRENAL DEGREE PROGRAMMES</b></button>
							  </h2>
							</div>
				  
						  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
							<h5><u>UPCOMING EXRENAL DEGREE PROGRAMMES</u></h5>
				  
							  <!--UPCOMING EXRENAL DEGREE PROGRAMMES php code -->
							  <?php
				  
							  $Result = mysqli_query($Connection,"select*from upcoming_external_degree"); 

							  $i=0;
							  
							  while($row=mysqli_fetch_array($Result)){

								$rr[]=[$row];

								$resulttest = "<b><p style='text-align:left'>".$row['degree_name']."</p></b>";
								
								$rr[i]=$resulttest;
								$i++;


								

								




								//$array = "<b><p style='text-align:left'>".$row['degree_name']."</p></b>";
							//$colorPic1 = '<a href="form_cetificates_courses.html">'.$row['course_name'].'</a>';

							for ($x = 0; $x <= $row; $x++) {
				
								echo "<h2 class='mb-1'>";
                echo "<button class='btn btn-info' type='button' style='width: 500px; height:40px;'onclick='fun('student_data');'>$rr</p>";
                echo "</h2>";
								}

                
								  
								}
							  ?>
				  </div>
							</div>
						  </div>
						</div>
				  
						
				  
				  


               
          
           
          </div>
		
          </div>

		  <div class="col-md-7" style="height: 800px;">
                <div class="card h-100"></div></div>
        </div>
		</div>  

<!--footer -->
        <?php
        include_once("includes/footer.php");
        ?>

</body>

</html>

onclick="fun('student_data');"