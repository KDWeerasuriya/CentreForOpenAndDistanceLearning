<?php
session_start();
if(!isset($_SESSION['user'])){

	header('location:login.html');
}
?>


<!DOCTYPE html>
<html language="en">
	<head>
		<title>STUDENT ACCOUNT</title>
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

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
		<style type="text/css">

			#scoller {
			  margin: 0 auto;
			  width:490px;
			  position:absolute;
			  bottom:0px;
			  top:0px;
			  overflow:auto
			}

              hr.style-eight {
              height: 10px;
              border: 1;
              box-shadow: inset 0 9px 9px -3px rgba(0, 0, 0);
              -webkit-border-radius: 5px;
              -moz-border-radius: 5px;
              -ms-border-radius: 5px;
              -o-border-radius: 5px;
              border-radius: 5px;
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

	</head>

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
        <button type="button" class="btn btn-outline-secondary"><a href="payment/check_nic.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">PAYMENT SLIP UPLOAD</a></button>
        <button type="button" class="btn btn-outline-secondary" onclick="openWin()"><a class="text-decoration-none" style="color: yellow; font-weight: bold;">LIVE CHAT</a></button>
      </div>

			<!--**********script for chat box strat***********-->
      <script type="text/javascript">

      	function openWin(){
      		window.open("a_st_live_chat/chatindex.php", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=300,left=500,width=500,height=500");
      	}
      </script>
      <!--***********script for chat box end***********-->


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
	<div class="p-2" >
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<!-- Brand -->
	<a class="navbar-brand" href="#" style="font-size: 18px;">UVA WELLASSA UNIVERSITY &nbsp;|&nbsp; STUDENT | WELCOME

				<?php
		  			if(isset($_SESSION["user"])){
		  			$un= $_SESSION["user"];
		  			echo "<b>".$un."</b>";
				}
				else{
					echo "user";
					}
					?>
</a>
		
	</div>
	</nav> 

<!-- attendance box -->
    	<div class="row">
			<div class="col-md-4" style="height: auto;">
            	<div class="card h-100" style="background-color: rgb(27, 29, 69);"><br>
			   		<div><h4 style="text-align: center; font-size: xx-large; color: white;">ATTENDANCE</h4></div>
  						<div class="p-2" >			   
			   			<div class="card bg-light">
						<div class="card-body text-center">
							<p style="font-style: italic; text-align: left; font-size: 16px;"><b>IMPORTANT :</b></p>
				  			<p style="font-style: italic; text-align: left; font-size: 15px;"><b><mark>Attendance will be calculating end of the semester.</mark></b>
				  			<h6 style="color: red;"><b>As well as percentage of your attendances should be 80% or above to eligible for examination.</b></h6>
						</div>
					</div>
				</div>

<!-- attendance -->



<?php
    $Result = mysqli_query($Connection,"SELECT * FROM attendance where student_id='$un'");
    while($row=mysqli_fetch_array($Result)){

	$p = $row["attendance_id"];
	$q = $row["whole_co_attende"];
	$r = $row["stu_attendance"];
	$s = $row["attend_presentage"];
	$u = $row["program_id"];
	$y = $row["student_id"];
	}
								
	?>

	<div class="p-2" >
		<div class="card bg-info">
			<div class="card-body text-center">
				<p class="card-text" style="text-align: left;">Total conducted days for a program = <b><mark><?php echo "$q"; ?></mark></b></p>
				<p class="card-text" style="text-align: left;">Your total participation = <b><mark><?php echo "$r"; ?></b> </mark></p>
				<p class="card-text" style="text-align: left;">Percentage of your attendances = <b><mark><?php echo "$s"; ?> %</b></mark></p>
			</div>
		</div>
	</div>
	
<!-- eligibility -->
	<div class="p-2">

	<?php

if(79<$s){
	
	echo"<div class='card bg-success'>";
			echo "<div class='card-body text-center'>";
				echo "<b><marquee scrollamount=10><p class='card-text'>YOU ARE ELIGIBLE FOR THE EXAMINATION</p></marquee></b>";
			echo "</div>";
			echo "</div>";
}
else{

	echo"<div class='card bg-danger'>";
	echo "<div class='card-body text-center'>";
		echo "<b><marquee scrollamount=10><p class='card-text'>YOU ARE NOT ELIGIBLE FOR THE EXAMINATION</p></marquee></b>";
	echo "</div>";
	echo "</div>";
}
?>
	
	
	</div>
			  
	<div class="p-2" >
        <div class="card bg-light" style="width: auto;">
			<div class="card-body">

<!--OFFICER ANNOUNCEMENT VIEWER PHP START -->
				<?php
                $Result = mysqli_query($Connection,"SELECT * FROM announcement order by announcement_id DESC LIMIT 3;");
                while($row=mysqli_fetch_array($Result)){
				$p = $row["announcement_id"];
				$q = $row["title"];
				$r = $row["descriptions"];
				$s = $row["dates"];
				
				echo "<p style='color:red;'>$s</p>";

				echo "<b><mark>$q</mark></b>";
				echo "<br>";

				echo "$r";
				echo "<hr class='style-eight' />";
				}
				?>
<!--OFFICER ANNOUNCEMENT VIEWER PHP END -->

			</div>
		</div>
	</div>
</div>
</div>


<!--*inner queary for display the program name-->
			<?php
                $Result = mysqli_query($Connection,"SELECT program_details.program_name FROM user_account,program_details where user_account.user_name='$un' && user_account.program_id=program_details.program_id");
                while($row=mysqli_fetch_array($Result)){
				$p = $row["program_name"];
			
				}
				?>
		
<!-- course head -->
	<div class="col-md-8" style="height: 600px;">
        <div class="card h-100" style="background-color: rgb(27, 29, 69);">
			<div class="p-2">
                <div class="card" style="background-color: rgb(27, 29, 69);">
					<div class="card-body text-center">
					  <p class="card-text">
						<input type="text" value="<?php echo $p;?>" style="width: 800px;text-align: center; font-weight: bold; font-size: 22px;"></p>
					</div>
				</div>
			</div>

<!-- Downlode Letchers Notes -->
	<div class="container">
    	<div class="row">
        	<div class="col-md-6" style="height: auto;">
            	<div class="card h-100" id="scoller"><br>
                	<h3 style="text-align: center;"><b>DOWNLOAD LECTURE NOTES</b></h3><br>
                	
                	<?php


		                $Result = mysqli_query($Connection,"SELECT title,file_path FROM lecture_note where program_id='$u'");
		                while($row=mysqli_fetch_array($Result)){
						$tit = $row["title"];
						$fileP = $row["file_path"];

							echo "<b></b>";
							echo "<div class='p-1'><a href='codl2 php/$fileP' target='_blank' class='btnD fa fa-download'></a><b>$tit</b></div>";
							echo "<hr class='style-eight'/>";
						
						}
						
                	?>

            	</div>
			</div>
			
 <!--Uplode Assignment -->
    <div class="col-md-6" style="height: auto;">
        <div class="card h-100"><br>
			<h3 style="text-align: center;"><b>UPLOAD ASSIGNMENT</b></h3><br>
			
			<form action="lec_note/assignment_upload_action.php" method="post" enctype="multipart/form-data">	
				<div class="card-Secondary">
					<div class="card bg-light">
						<div class="card-body text-center">

								<!--u=program_id-->
								<!--un=user_name-->
								<input type="text" value="<?php echo $u;?>" disabled>
								<input type="text" value="<?php echo $un;?>" disabled>

								<input type="text" value="<?php echo $u;?>" name="as0" hidden>
								<input type="text" value="<?php echo $un;?>" name="as1" hidden>
								<br><br>

            					<div class="form-group">
									<div class="col-md-11">
								        <input type="text" class="form-control" name="as2" placeholder="Enter title for your assignment" required>
								    </div>
								</div>

								<!--lecture note upload-->
								<div class="form-group">
								<div class="col-md-11">

								<div class="input-group">
        						<div class="custom-file">
            					<input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="as3" required>
            					<label class="custom-file-label" for="inputGroupFile01">Select Assignment</label>
        						</div>
								</div></div></div><br>
										
								</div>
								</div>
								</div>

								<div class="p-1" style="text-align: center;">
								<button type="reset" class="btn btn-warning btn-sm" style="width: 110px;"><b>RESET DATA</b></button>
								<button type="submit" class="btn btn-success btn-sm" style="width: 110px;"><b>UPLOAD FILE</b></button>
								
								</div>
								<div class="p-3"></div>
			</form>




    </div>
    </div>
    </div>
	</div>
    </div>
    </div>  
	</div>

 <!--footer -->
 	<div class="p-1"></div>
 	<?php
 	include_once("includes/footer.php");
 	?>

</body>
</html>
