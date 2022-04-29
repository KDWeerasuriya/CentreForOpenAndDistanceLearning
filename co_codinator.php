<?php
session_start();
if(!isset($_SESSION['user'])){

	header('location:login.html');
}
?>


<!DOCTYPE html>
<html language="en">
	<head>
		<title>COURSE COORDINATOR</title>
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

		<style type="text/css">

			#scoller {
			  margin: 0 auto;
			  width:450px;
			  position:absolute;
			  bottom:0px;
			  top:0px;
			  overflow:auto
			}

			.btnD {
			  background-color: rgb(255,174,51);
			  border: none;
			  color: black;
			  padding: 10px 30px;
			  cursor: pointer;
			  font-size: 20px;
			}

		</style>
<script>
	
function f(){

	var a=parseInt(document.getElementById("a").value);
	var b=parseInt(document.getElementById("b").value);
	if(a>b){
		document.getElementById("c").disabled=false;
}
else{
	document.getElementById("c").disabled=true;
}
}

</script>
	</head>
	
	<!--DATABASE CONNECTION-->
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
        <button type="button" class="btn btn-outline-secondary"><a href="news.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">NEWS</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="contact.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">CONTACT US</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="result.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">RESULT</a></button>
        <button type="button" class="btn btn-outline-secondary" onclick="openWin()"><a class="text-decoration-none" style="color: yellow; font-weight: bold;">LIVE CHAT</a></button>
      </div>

      <!--script for chat box strat-->
      <script type="text/javascript">

      	function openWin(){
      		window.open("a_co_live_chat/chatindex.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=300,width=500,height=500");
      	}
      </script>
      <!--script for chat box strat-->

      
      <div class="p-2" style="float: right;">

        <form action="php/logout.php" method="post">
        <div>
        <div class="l_out" style="float: right;">
        <button type="submit" class="btn btn-warning" name="logout">Log out</button>
        </div>
        </div>
        </form>

      </div>
    </div>
  </div>

<!--HEADER END HERE-->

<!-- navil bar -->
		<div class="p-2">
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
				<a class="navbar-brand" href="#" style="font-size: 18px;">UVA WELLASSA UNIVERSITY &nbsp;|&nbsp; COURSE COORDINATOR</a>
			</nav>
		</div>
	
<!-- Download Assignment -->
		<div class="row">
				<div class="col-md-4" style="height: auto;">
		
		<div class="card h-100" style="background-color: rgb(27, 29, 69);">
			<div class="p-2"> 
				<h4 style="text-align: center; font-size: xx-large;color: white;">UPDATES</h4>

..............................
		<div class="p-2">
				<div class="card card-body" style="background-color: rgb(184, 185, 196);">
						<h4 style="text-align: center; font-size: xx-large; color: black; ">UPLOAD LECTURE NOTES</h4>
						<div>

						<form action="lec_note/lec_note_upload_action.php" method="post" enctype="multipart/form-data">	
							<div class="card-Secondary">
								<div class="card bg-light">
									<div class="card-body text-center">
										<select class="browser-default custom-select" name="upf1" required>
	              							<option selected>Select course, diploma or degree</option>
	             							<option>
		             							<!--ALL PROGRAMS ID VIEW php code START-->
		             							<?php

		             							$Result = mysqli_query($Connection,"SELECT program_id,program_name FROM program_details");

		             							while($row=mysqli_fetch_array($Result)){
		            							echo "<li>".$row['program_id']."</li>";
		            							echo "<option>";
		                
		             							}
		            							echo "<br>";
		            							?>
		            							<!--ALL PROGRAMS ID VIEW php code END-->

	            							</option>
            							</select>
            							<br><br>

            							<div class="form-group">
								        <div class="col-md-11">
								        <input type="text" class="form-control" name="upf2" placeholder="Write title for lecture notes" required>
								        </div>
								        </div>

										<!--lecture note upload-->
										<div class="form-group">
										<div class="col-md-11">

										<div class="input-group">
        								<div class="custom-file">
            							<input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="upf3" required>
            							<label class="custom-file-label" for="inputGroupFile01">Select file</label>
        								</div>
										</div></div></div>
										<br>
										
										</div></div></div></div>

		<div class="p-2">
			<button type="reset" class="btn btn-warning btn-sm" style="width: 110px; float: left;"><b>RESET DATA</b></button>
			<button type="submit" class="btn btn-success btn-sm" style="width: 110px; float: right;"><b>UPLOAD FILE</b></button>
			
		</div>

	</form>
		
	</div></div>

<!--assignment download-->
		<div class="p-2">
				<div class="p-2">
				<div class="card card-body" style="background-color: rgb(184, 185, 196);">
					
					<h4 style="text-align: center; font-size: xx-large; color: black; ">DOWNLOAD ASSIGNMENT</h4><br>
						<div class="card" style="color: blue;"><br>
							<h6 style="text-align: center; font-size: small; color: red;"><b>Certificate Course in Agri-Business Management - CC_ABM</b></h6>
							
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='CC_ABM'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='CC_ABM'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->

							<h6 style="text-align: center; font-size: small; color: red; "><b>Certificate Course in English for Junior Executives - CC_EJE</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='CC_EJE'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='CC_EJE'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->


							<h6 style="text-align: center; font-size: small; color: red; "><b>Certificate Course in English for School Leavers - CC_ESL</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='CC_ESL'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='CC_ESL'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->


							<h6 style="text-align: center; font-size: small; color: red; "><b>Certificate Course in Java Application Development - CC_JAD</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='CC_JAD'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='CC_JAD'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->


							<h6 style="text-align: center; font-size: small; color: red; "><b>Certificate Course in Plant Tissue Culture - CC_PTC</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='CC_PTC'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='CC_PTC'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->


							<h6 style="text-align: center; font-size: small; color: red; "><b>Certificate Course in Robotics and Ardiuno Programming - CC_RAP</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='CC_RAP'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='CC_RAP'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->


							<h6 style="text-align: center; font-size: small; color: red; "><b>Certificate Course in Web Design - CC_WED</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='CC_WED'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='CC_WED'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->


							<h6 style="text-align: center; font-size: small; color: red; "><b>Certificate Course in Mobile Application Development - CC_MAD</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='CC_MAD'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='CC_MAD'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->


							<h6 style="text-align: center; font-size: small; color: red; "><b>Diploma in English - DI_ENG</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='DI_ENG'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='DI_ENG'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->



							<h6 style="text-align: center; font-size: small; color: red; "><b>Diploma in Hospitality, Tourism and Event Management - DI_HTE</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='DI_HTE'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='DI_HTE'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->



							<h6 style="text-align: center; font-size: small; color: red; "><b>Bachelor of Business Management - BA_BUM</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='BA_BUM'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='BA_BUM'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->



							<h6 style="text-align: center; font-size: small; color: red; "><b>Bachelor of Information Technology - BA_INT</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='BA_INT'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='BA_INT'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->



							<h6 style="text-align: center; font-size: small; color: red; "><b>Bachelor of Science in Agricultural Science - BA_SAS</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='BA_SAS'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='BA_SAS'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->



							<h6 style="text-align: center; font-size: small; color: red; "><b>100 hours short course on Agriculture and Bio System - SC_ABS</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='SC_ABS'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='SC_ABS'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->



							<h6 style="text-align: center; font-size: small; color: red; "><b>Certificate in History for School Teachers - SC_HST</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='SC_HST'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path FROM assignment WHERE program_id='SC_HST'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div><br>
							<!--DEGREE SCOLLER END-->


							<h6 style="text-align: center; font-size: small; color: red; "><b>Teacher Training programme in Science and Technology Grade 6-11 - SC_STG</b></h6>
							<!--DEGREE SCOLLER START-->
							<div class="card">
								<div class="card h-auto" id="scoller"><br>
								<div>
									<?php
						                $Result = mysqli_query($Connection,"SELECT title,file_path,user_name FROM assignment WHERE program_id='SC_STG'");
						                while($row=mysqli_fetch_array($Result)){
										$tit = $row["title"];
										$fileP = $row["file_path"];
										$un = $row["user_name"];

										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$un > $tit</b></div>";
										}
				                	?>
								</div></div>

								<div>
									<?php

						                $Result = mysqli_query($Connection,"SELECT title,file_path, FROM assignment WHERE program_id='SC_STG'");
						                while($row=mysqli_fetch_array($Result)){  	
										$tit = $row["title"];
										$fileP = $row["file_path"];

										echo "<b></b>";
										echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";		
										}
				                	?>
								</div>
							</div>
							<!--DEGREE SCOLLER END-->


						</div></div></div>
		
</div></div></div></div>


<!--Students Information-->
	<div class="col-md-8" style="height: auto;">
		<div class="card h-100" style="background-color: rgb(27, 29, 69 );">
			<div class="container p-2">
				<h4 style="text-align: center; font-size: xx-large;color: white;">STUDENTS INFORMATION</h4>

	<div class="col text-center p-3">
	<div class="card card-body" style="background-color: rgb(184, 185, 196);">
						
	<div class="p-1">
	<div class="accordion img" id="accordionExample">

      <div class="card">
        <div class="card-header" id="headingOne">
        	<h2 class="mb-1">
        		<button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="width: 800px;"><b>INSERT ATTENDANCE</b></button>
        	</h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            
        <!--insert attendance-->
            
        <form method="post">

        <div class="p-2">
		   <select class="browser-default custom-select" name="proid" style="width: 250px;">
			  <option selected>Select Program ID</option>
			  <option>

			<!--ALL PROGRAMS VIEW php code START-->
			<?php

			$ResultA = mysqli_query($Connection,"SELECT * FROM program_details");

			while($row=mysqli_fetch_array($ResultA)){
			echo "<li>".$row['program_id']."</li>";
			echo "<option>";
			
			}
			?>



			<!--ALL PROGRAMS VIEW php code END-->

			</option>
			</select>

			<button type="submit" class="btn btn-success btn-sm" name="attproid" value="SAVE" style="float:right-1";>SEARCH</button>

			<?php

			if(isset($_POST["attproid"])){

			$getproid = $_POST["proid"];

			$ResultB = mysqli_query($Connection,"SELECT * FROM program_fixed_attendance_data WHERE program_id='$getproid'");
			while($row=mysqli_fetch_array($ResultB)){

			$outputid = $row["whole_co_attende"];
			
		}
			echo "</div>";

			echo "<div class='p-2'>";
		   	echo "<input type='text' name='fullattend' style='width: 250px;' value='$outputid' placeholder='Total Attendance for a program' id='a' onkeyup='f()'>";
		   	echo "</div>";

		}
		   ?>

		   <div class="p-2">
		   <select class="browser-default custom-select" name="stid" style="width: 250px;">
			  <option selected>Select Student ID</option>
			  <option>

			<!--ALL PROGRAMS VIEW php code START-->
			<?php

			$Result = mysqli_query($Connection,"SELECT * FROM user_account WHERE user_type='student' AND program_id='$getproid'");

			while($row=mysqli_fetch_array($Result)){
				$selectstproid = $row["program_id"];
			echo "<li>".$row['user_name']."</li>";
			echo "<option>";
			
			}
			?>

			<!--ALL PROGRAMS VIEW php code END-->

			</option>
			</select>
			</div>

			<div class="p-2">
			<input type="text" name="stattend" style="width: 250px;" placeholder="Student Attendance" id="b" onkeyup="f()">
			</div>

  			<div class="p-3">
  			<button type="reset" class="btn btn-warning btn-sm" style="float:left-1";>CLEAR DATA</button>
			<button type="submit" class="btn btn-success btn-sm" value="SAVE" name='MM' style="float:right-1"; id="c">SUBMIT</button>
			</div>
		 

			<?php
			if(isset($_POST["MM"])){

			$a=$_POST["fullattend"];
			$b=$_POST["stattend"];
			$c=$_POST["stid"];
			#$d=$selectstproid;
			$d=$_POST["proid"];

			$e=($b/$a)*100;

			$Result=mysqli_query($Connection,"INSERT INTO attendance (whole_co_attende,stu_attendance,attend_presentage,program_id,student_id) values('$a','$b','$e','$d','$c')");

			if($Result){
				echo "<script type='text/javascript'>
                
				swal({ title: 'Attendance successfully inserted!',text: '',icon: 'success'}).then(okay => {
				if (okay) {
    			window.location.href = 'co_codinator.php';}
				});
    			</script>";
				
				/*echo "Success";
				echo ("<br>");*/
			}
			else{
				echo "<script type='text/javascript'>
                
				swal({ title: 'An error occured!',text: '',icon: 'error'}).then(okay => {
				if (okay) {
    			window.location.href = 'co_codinator.php';}
				});
    			</script>";
			/*echo"Fail";*/

			}

			}
			?>

		</form>
            
        </div></div></div></div>


        <!--Result inserting-->
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-1">
            <button class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: 800px;"><b>INSERT RESULT</b></button>
            </h2>
          </div>

          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">


<!--result code heare-->
			<div class="card p-2">
						<form method="post" enctype="multipart/form-data">

									<div class="p-2">
										<select class="browser-default custom-select" name="reid" style="width: 250px;" required>
	              							<option selected>Select Program ID</option>
	             							<option>
		             							<!--ALL PROGRAMS ID VIEW php code START-->
		             							<?php

		             							$Result = mysqli_query($Connection,"SELECT program_id FROM program_details");

		             							while($row=mysqli_fetch_array($Result)){
		            							echo "<li>".$row['program_id']."</li>";
		            							echo "<option>";
		                
		             							}
		            							echo "<br>";
		            							?>
		            							<!--ALL PROGRAMS ID VIEW php code END-->

	            							</option>
            							</select>
            						</div>

            							<div class="row">
            							<div class="col-4"></div>
            							<div class="p-4">
								        <input type="text" class="form-control" name="retit" placeholder="Enter title of the result sheet" style="width: 250px;" required>
								        </div>
								        <div class="col-4"></div></div>

										<!--lecture note upload-->
										<div class="form-group">
										<div class="col-md-12">

										<div class="input-group">
        								<div class="custom-file">
            							<input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="refile" required>
            							<label class="custom-file-label" for="inputGroupFile01">Select file</label>
        								</div>
										</div></div></div>
										<br>
										

		<div class="p-2">
			<button type="reset" class="btn btn-warning btn-sm" style="width: 110px; float: left;"><b>RESET DATA</b></button>
			<button type="submit" class="btn btn-success btn-sm" name="resultdata" style="width: 110px; float: right;"><b>UPLOAD FILE</b></button>	
		</div>

	</div></div>

		</div></form>
	</div></div></div>

	</div></div>

	<?php
	if(isset($_POST["resultdata"])){

			$getid = $_POST["reid"];
			$gettit = $_POST["retit"];

			//up3-lecture_note file
			$file = $_FILES["refile"]["tmp_name"];
			$name1 = $getid;
			$name2 = $gettit;
			$path1 = "result_sheet_pdf_file/".$name1.$name2."_Result Sheet.pdf";
			$r = move_uploaded_file($file, $path1);

			$date = date('Y-m-d');
			$Result=mysqli_query($Connection,"INSERT INTO result (title,program_id,dates,file_path) values('$gettit','$getid','$date','$path1')");

			if($Result){
				echo "<script type='text/javascript'>
                
				swal({ title: 'File successfully added!',text: '',icon: 'success'}).then(okay => {
				if (okay) {
    			window.location.href = 'co_codinator.php';}
				});
    			</script>";
				
				/*echo "Success";
				echo ("<br>");*/
			}
			else{
				echo "<script type='text/javascript'>
                
				swal({ title: 'An error occured!',text: '',icon: 'error'}).then(okay => {
				if (okay) {
    			window.location.href = 'co_codinator.php';}
				});
    			</script>";
			/*echo"Fail";*/

			}

			}
	?>
		
		</div>
		</div>
		</div>
		</div>
	
<!--FOOTER HERE-->
	<div class="p-1"></div>
	<?php
	include_once("includes/footer.php");
	?>
	
</body>
</html>