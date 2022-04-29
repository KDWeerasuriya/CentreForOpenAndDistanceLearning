<?php
session_start();
if(!isset($_SESSION['user'])){

	header('location:login.html');
}
?>

<!DOCTYPE html>
<html language="en">
	<head>
		<title>OFFICER</title>
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
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
        <button type="button" class="btn btn-outline-secondary"><a href="news.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">NEWS</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="contact.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">CONTACT US</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="result.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">RESULT</a></button>
      </div>
      
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
			<a class="navbar-brand" href="#" style="font-size: 18px;">UVA WELLASSA UNIVERSITY &nbsp;|&nbsp; OFFICER</a>
		</nav>
	</div>

<!-- attendance box -->
	<!-- <div class="container"> -->
		<div class="row">
			<div class="col-md-5" style="height: auto;">

				<div class="card h-100" style="background-color: rgb(27, 29, 69 );">
					<div class="p-2">
						<h4 style="text-align: center; font-size: xx-large; color: white;">CONTENTS UPDATE</h4>

<!-- applicant and registered student info -->
	<div class="p-4">
		<div>

	
		<div class="p-2">
			<div class="card card-body" style="background-color: rgb(184, 185, 196);">
				<h5 style="text-align: center;">UPDATE NOTICE</h5>
				<div>
				<div class="card-deck" >
				<div class="card bg-light">
				<div class="card-body text-center bg-dark">

<!--NOTICE LINK-->
	<div class="p-2">
		<form action="officer_php/officer_notice_action.php" method="post">
		<input type="text" name="tit" style="width: 430px;" placeholder="Write Notice Title" required>
		</div>

		<textarea type="text" name="annou" style="width: 430px; height: 120px;" placeholder="Write Description" required></textarea>
		</div>
		</div>
		</div>
		</div>

	<div class="p-2">		
		<button type="submit" class="btn btn-success btn-sm" style="width: 80px; float: right;"><b>PUBLISH</b></button>
		<button type="reset" class="btn btn-warning btn-sm" style="width: 80px; float: right;"><b>CLEAR</b></button>&nbsp;
		
		</form>

		</div>
		</div>
		</div>
		</div>


	<div class="p-2">
			<div class="p-2"></div>
			<div class="card card-body" style="background-color: rgb(184, 185, 196);">
				<h5 style="text-align: center;">UPDATE ANNOUNCEMENT</h5>
				<div>

					<div class="card-Secondary">
						<div class="card bg-light">
							<div class="card-body text-center bg-dark">
                                <div class="p-2">
                                    <form action="officer_php/officer_announcement_action.php" method="post">
                                    <input type="text" name="tit" style="width: 430px;" placeholder="Write Announcement Title" required>
                                	</div>

                                    <textarea type="text" name="annou" style="width: 430px; height: 120px;" placeholder="Write Description" required></textarea>
									</div>
									</div>
									</div>
									</div>

								<div class="p-2">
									<button type="submit" class="btn btn-success btn-sm" style="width: 80px; float: right;"><b>PUBLISH</b></button>&nbsp;
									<button type="reset" class="btn btn-warning btn-sm" style="width: 80px; float: right;"><b>CLEAR</b></button>
									</form>	
									</div>

								</div>
							</div>
						</div>


	<div class="p-2">
			<div class="p-4">
				<div class="card card-body" style="background-color: rgb(184, 185, 196);">
					<h5 style="text-align: center;">UPDATE CONTACT DETAILS</h5>
					<div>

						<div class="card-Secondary">
							<div class="card bg-light">
								<div class="card-body text-center bg-dark">
									<div class="p-2">

									<form method="post">
									
									<?php

									//if(isset($_POST["contactUpdate"])){
									/*if($res == 1){
										?>

									<div class="alert alert-success" style="width: 200px; float: left;">
									<strong><center>Success</center></strong>
									</div>

									<?php
									}
									?>
									
									<?php
									else($res == 2){
										?>

									<div class="alert alert-danger" style="width: 200px; float: left;">
									<strong><center>Faild</center></strong>
									</div>

									<?php
									}
									

								}*/
								?>

									<div class="p-2">
									<input type="text" name="inputtp" style="width: 405px;" placeholder="Write Telephone Number Here" required>
									</div>

									<div class="p-2">
									<input type="text" name="inputfax" style="width: 405px;" placeholder="Write Fax Number Here" required>
									</div>

									<div class="p-2">
									<input type="email" name="inputemail" style="width: 405px;" placeholder="Write E-mail Here" required>
									</div>

									<div class="p-2">
									<input type="text" name="inputweb" style="width: 405px;" placeholder="Write Web Address Here" required>
									</div>

									<div class="p-2">
									<textarea type="text" name="inputaddress" style="width: 405px; height: 120px;" placeholder="Write Postal Address Here" required></textarea>
									</div>

									</div>
									</div>
									</div>

									<div class="p-2">
									<button type="submit" class="btn btn-success btn-sm" style="width: 80px; float: right;" name="contactUpdate"><b>UPDATE</b>

									<?php

									if(isset($_POST["contactUpdate"])){
									$a = $_POST["inputtp"];
									$b = $_POST["inputfax"];
									$c = $_POST["inputemail"];
									$d = $_POST["inputweb"];
									$e = $_POST["inputaddress"];

									$Result = mysqli_query($Connection,"UPDATE contact SET telephone='$a',fax='$b',email='$c',website='$d',addresses='$e' WHERE contact_id='c1'");
									if($Result){

										echo "<script type='text/javascript'>
                
										swal({ title: 'Conatact details has been updated!',text: '',icon: 'success',timer: 3000}).then(okay => {
										if (okay) {
    									window.location.href = 'officer.php';}
										});
    									</script>";
									}
									
									else{
										echo "<script type='text/javascript'>
                
										swal({ title: 'Conatact details update was failed!',text: '',icon: 'error',timer: 3000}).then(okay => {
										if (okay) {
    									window.location.href = 'officer.php';}
										});
    									</script>";
										}
									}
									?>
										</button>&nbsp;

										<button type="reset" class="btn btn-warning btn-sm" style="width: 80px; float: right;"><b>CLEAR</b></button>

										</div>
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
						<!-- php code end-->

					</div>
				</div>
			</div>

	<!--Uplode Assignment -->
		<div class="col-md-7" style="height: auto;">
			<div class="card h-100" style="background-color: rgb(27, 29, 69 );">
				<div class="container p-3">
					<h4 style="text-align: center; font-size: xx-large; color: white;">STUDENTS INFORMATION</h4>
					<div class="col text-center p-4">
						<div class="card card-body" style="background-color: rgb(184, 185, 196);">
						
					<div class="card p-3">
					<h5 style="text-align: center;">SEARCH FOR SUPPORTIVE DOCUMENTS AND PAYMENT DETAILS</h5><br>
					<div class="container">
						<div class="card bg-dark">
  					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#home">Supportive Documents</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#menu1">Payment Slip</a>
					    </li>
					    <li class="nav-item">
					      <a class="nav-link" data-toggle="tab" href="#menu2">Payment</a>
					    </li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">

					  	<!--supportive document details search-->
					    <div id="home" class="container tab-pane active"><br>

					      <form action="supportive_doc_action.php" target="_blank" method="get">
							   <div class="p-2">
							   <select class="browser-default custom-select" name="proid" style="width: 250px;">
								  <option selected>Select Program ID</option>
								  <option> 

								<!--ALL PROGRAMS VIEW php code START-->
								<?php
								$Result = mysqli_query($Connection,"SELECT * FROM program_details");

								while($row=mysqli_fetch_array($Result)){
								echo "<li>".$row['program_id']."</li>";
								echo "<option>";
								
								}
								?>

								</option>
								</select>
								<button type="submit" class="btn btn-success btn-sm" value="SAVE" style="float:right-1";><b>SEARCH</b></button>
								
								</div>
								<div></div>
							</form>
					    </div>

					    <!--payment slip details search-->
					    <div id="menu1" class="container tab-pane fade"><br>

					      <form action="slip_action.php" target="_blank" method="get">
							   <div class="p-2">
							   <select class="browser-default custom-select" name="proid" style="width: 250px;">
								  <option selected>Select Program ID</option>
								  <option> 

								<!--ALL PROGRAMS VIEW php code START-->
								<?php
								$Result = mysqli_query($Connection,"SELECT * FROM program_details");

								while($row=mysqli_fetch_array($Result)){
								echo "<li>".$row['program_id']."</li>";
								echo "<option>";
								
								}
								?>

								</option>
								</select>
								<button type="submit" class="btn btn-success btn-sm" value="SAVE" style="float:right-1";><b>SEARCH</b></button>
								
								</div>
								<div></div>
							</form>
					    </div>

					    <!--payment details search-->
					    <div id="menu2" class="container tab-pane fade"><br>


						  <form action="paymentaction.php" target="_blank" method="get">
							   <div class="p-2">
							   <select class="browser-default custom-select" name="proid" style="width: 250px;">
								  <option selected>Select Program ID</option>
								  <option> 

								<!--ALL PROGRAMS VIEW php code START-->
								<?php
								$Result = mysqli_query($Connection,"SELECT * FROM program_details");

								while($row=mysqli_fetch_array($Result)){
								echo "<li>".$row['program_id']."</li>";
								echo "<option>";
								
								}
								?>

								</option>
								</select>
								<button type="submit" class="btn btn-success btn-sm" value="SAVE" style="float:right-1";><b>SEARCH</b></button>
								
								</div>
								<div></div>
							</form>
						</div></div>
							</div></div></div><br><br>


<!--*****************-->
						<div class="card p-3">
						<h5 style="text-align: center;">SEARCH FOR APPROVAL</h5><br>
						<div class="container">
						<div class="card bg-dark">
							<form action="approval_action.php" target="_blank" method="get">
							   <div class="p-2">
							   <select class="browser-default custom-select" name="app" style="width: 250px;">
								  <option selected>Select Program ID</option>
								  <option> 

								<!--ALL PROGRAMS VIEW php code START-->
								<?php
								$Result = mysqli_query($Connection,"SELECT program_id FROM program_details");

								while($row=mysqli_fetch_array($Result)){
								echo "<li>".$row['program_id']."</li>";
								echo "<option>";
								
								}
								?>

								</option>
								</select>
								<button type="submit" class="btn btn-success btn-sm" value="SAVE" style="float:right-1";><b>SEARCH</b></button>
								
								</div>
								<div></div>
							</form>
<!--*************-->


						</div></div></div>

					</div></div></div>

					</div></div></div></div>
        

		<!--footer -->
		<div class="p-1"></div>
        <?php
        include_once("includes/footer.php");
        ?>

</body>

</html>