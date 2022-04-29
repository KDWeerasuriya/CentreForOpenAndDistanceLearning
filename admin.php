<?php
session_start();
if(!isset($_SESSION['user'])){

	header('location:login.html');
}
?>



<!DOCTYPE html>
<html language="en">
	<head>
		<title>ADMINISTRATOR</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
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
	
<!-- navi bar -->
		<div class="p-2">
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <a class="navbar-brand" href="#" style="font-size: 18px;">UVA WELLASSA UNIVERSITY &nbsp;|&nbsp; ADMINISTRATOR</a>
            </nav>
		</div>
	
		<!-- <div class="container"> -->
			<div class="row">
				<div class="col-md-5" style="height: auto;">
		
					<div class="card h-100">
						<div class="p-2" style="background-color: rgb(27, 29, 69 );"> 
							<h4 style="text-align: center; font-size: xx-large; color: white; ">UPDATE PROGRAMS INFOMATION</h4>
						
							<div class="p-4">
								<div class="p-2">
									
									<div class="card card-body" style="background-color: rgb(184, 185, 196);">
									<h5 style="text-align: center;">ADD NEW PROGRAM</h5>
									<div class="p-2"></div>
									<div class="card card-body">
<!--program start-->
										<div class="card-deck">
										<div class="card bg-dark">
										<div class="card-body text-center">

											<form method="post">

											<div class="p-2">
											<input type="text" name="pid" style="width: 400px;" placeholder="Enter Program ID" required>
											</div>

											<div class="p-2">
											<input type="text" name="ptype" style="width: 400px;" placeholder="Enter Program Type" required>
											</div>

											<div class="p-2">
											<input type="text" name="pname" style="width: 400px;" placeholder="Enter Program Name" required>
											</div>

											</div>
											</div>
											</div>

											<div class="p-2">
											<button type="submit" class="btn btn-success btn-sm" style="width: 80px; float: right;" name="addpro"><b>ADD</b>

											<?php

											if(isset($_POST["addpro"])){
											$resid = $_POST["pid"];
											$restype = $_POST["ptype"];
											$resname = $_POST["pname"];

											$Result = mysqli_query($Connection,"INSERT INTO program_details (program_id,program_type,program_name) VALUES('$resid','$restype','$resname')");
											if($Result){

												echo "<script type='text/javascript'>
		                
												swal({ title: 'Program has been added!',text: '',icon: 'success',timer: 4000}).then(okay => {
												if (okay) {
		    									window.location.href = 'admin.php';}
												});
		    									</script>";
											}
											
											else{
												echo "<script type='text/javascript'>
		                
												swal({ title: 'Program added failed!',text: '',icon: 'error',timer: 3000}).then(okay => {
												if (okay) {
		    									window.location.href = 'admin.php';}
												});
		    									</script>";
												}
											}
											?>
												</button>&nbsp;

												<button type="reset" class="btn btn-warning btn-sm" style="width: 80px; float: right;"><b>RESET</b></button>

												</div>
												</form>

											</div>
										</div>
<!--DELETE PROGRAM-->
									<div class="p-2"></div>
									<div class="card h-100">
									<div class="card card-body" style="background-color: rgb(184, 185, 196);">
									<h5 style="text-align: center;">DELETE EXISTING PROGRAM</h5>
									<div class="p-2"></div>
									<div class="card card-body">
<!--program start-->
										<div class="card-deck">
										<div class="card bg-dark">
										<div class="card-body text-center">

											<form method="post">

											<div class="p-2">
												<select class="browser-default custom-select" name="proids" style="width: 250px;">
													<option selected>Select Program Name</option>
													<option> 

													<!--ALL PROGRAMS VIEW php code START-->
													<?php
													$Result = mysqli_query($Connection,"SELECT * FROM program_details");

													while($row=mysqli_fetch_array($Result)){
													echo "<li>".$row['program_name']."</li>";
													echo "<option>";
													
													}
													?>

													</option>
													</select>
											</div>

											</div>
											</div>
											</div>

											<div class="p-2">
											<button type="submit" class="btn btn-danger btn-sm" name="delid" style="width: 80px; float: right;"><b>DELETE</b>
												<?php
												if(isset($_POST["delid"])){

													$prodataa = $_POST["proids"];
												
													$Result = mysqli_query($Connection,"DELETE FROM program_details WHERE program_name='$prodataa'");
													//$Result = mysqli_query($Connection,"INSERT INTO announcement (title,descriptions,dates) VALUES('$a','$b','$date')");
														if($Result){

														echo "<script type='text/javascript'>
															                
														swal({ title: 'Selected program successfully deleted!',text: '',icon: 'success',timer: 3000}).then(okay => {
														if (okay) {
														window.location.href = 'admin.php';}
														});
														</script>";
														}
																								
														else{
														echo "<script type='text/javascript'>
															                
														swal({ title: 'program delete was failed!',text: '',icon: 'error',timer: 4000}).then(okay => {
														if (okay) {
														window.location.href = 'admin.php';}
														});
														</script>";
														}
													}

													?>
											
												</button>&nbsp;

												<button type="reset" class="btn btn-warning btn-sm" style="width: 80px; float: right;"><b>RESET</b></button>

												</div>
												</form>

											</div>
										</div>
									



<!--*******************-->
										</div>

									</div>
								</div>	
                        </div>
                    </div>
                </div>
                        

</div>
</div>
        
<!-- footer -->
	<div class="p-1"></div>
    <?php
    include_once("includes/footer.php");
    ?>
	
</body>	
</html>