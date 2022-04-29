<!DOCTYPE html>
<html language="en">
	<head>
		<title>HOMEPAGE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <style type="text/css">
      .timestyle{
        text-align: left;
        color: yellow;
        font-family: serif;
      }
    </style>

	</head>

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
            <div class="timestyle">
            <?php
            date_default_timezone_set('Asia/Colombo');
            echo "". date("l ") . date("| Y m d ") . date("| h:i A"). "<br>";
            ?>
            </div>
            <br>
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
        <button type="button" class="btn btn-outline-secondary" disabled><a style="color: yellow; font-weight: bold;">HOMEPAGE</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="news.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">NEWS</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="contact.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">CONTACT US</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="result.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">RESULT</a></button>
      </div>
      
      <div class="p-2" style="float: right;">
        <button type="button" class="btn btn-outline-secondary"><a href="payment/check_nic.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">PAYMENT SLIP UPLOAD</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="choose_apply.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">APPLY FOR COURSES AND DIPLOMAS</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="login.html" class="text-decoration-none" style="color: yellow; font-weight: bold;">LOGIN</a></button>
      </div>
    </div>
  </div>
<!--HEADER END HERE-->

		<div class="col text-center p-4" >
			<img src="images/homepage_background.jpg" width="100%" height="500" alt="" />
		</div>
    	

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="col text-center p-2">
			<button type="button" class="btn btn-outline-secondary" disabled><a style="color: yellow; font-weight: bold;">INTRODUCTION</a></button>
			<button type="button" class="btn btn-outline-secondary"><a href="programe.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">PROGRAMMES</a></button>
			
		</div>
		</nav>

		<div class="col text-center p-5">
			<p align="justify">Centre for Open and Distance Learning (CODL) is the latest initiative of Uva Wellassa University of Sri Lanka which handles all the External Degree Programmes, Diploma Courses, Certificate Courses and other training programmes offered by the university. The CODL shall be headed by a Director (a Senior Lecturer) appointed by the University Council and three other Deputy Directors for managing, coordinating and guiding for Examinations, Learning resources, and Training for the smooth function of the centre. The entity of the CODL will also comprise a Senior Assistant Registrar, a Senior Assistant Bursar for financial and general administration. For academic administration and also to maintain the quality of the programmes offered by the Centre, a separate Board of Study shall be appointed with the expansion of the centre.<br>
			The main purpose of establishing CODL is in particular to widen the access to higher education through open and distance learning to the highest number possible at an affordable cost on flexible conditions and make it to be more accessible to students of all age groups. Hence establishing and maintaining the CODL will not be a burden to degree awarding university as all the courses are fee-levying. The most the significant aspect of all these external programmes be it a Bachelor Degree, Postgraduate Degree, Diploma or any other such courses is that they are designed based on market surveys which are approved by the University Grant Commission in Sri Lanka. Hence, the certificate holders of these respective courses shall undoubtedly gain crest recognition at wherever they produce their certificates in seeking employments.<br>

			Hence, the CODL shall follow the definition ‘Open and Distance Learning refers to providing learning opportunities in an environment where there is a separation of teacher in time and / or place and learning is achieved through the use of a variety of media, including print and electronic media which requires specialized division of labour in the production and delivery of courses. Throughout the learning period, two way communications is maintained allowing learners and tutors to interact with one another on occasional face-to-face meetings. Finally, the learning process and outcome are certified by means of evaluation by a specified institution or agency’<br>

			(Source: Quality assurance Toolkit for Distance Higher Education Institutions and Programmes published by the Commonwealth of Learning 2009)</p>
			
		</div>
		
		<!--footer start-->
		<?php
      	include_once("includes/footer.php");
		?>
		<!--footer end-->


		  
		</div>
		</div>
		</div>

<!--footer -->
    <?php
    include_once("includes/footer.php");
    ?>

</body>
</html>
