<!DOCTYPE html>
<html language="en">
    <head>
        <title>APPLY FOR COURSES AND DIPLOMAS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/choose_apply.css" type="text/css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
        <button type="button" class="btn btn-outline-secondary"><a href="payment/check_nic.php" class="text-decoration-none" style="color: yellow; font-weight: bold;">PAYMENT SLIP UPLOAD</a></button>
        <button type="button" class="btn btn-outline-secondary" disabled><a style="color: yellow; font-weight: bold;">APPLY FOR COURSES AND DIPLOMAS</a></button>
        <button type="button" class="btn btn-outline-secondary"><a href="login.html" class="text-decoration-none" style="color: yellow; font-weight: bold;">LOGIN</a></button>
      </div>
    </div>
  </div>
<!--HEADER END HERE-->

<div class="p-1"></div>

    <div class="container-fluid bg" style="height: auto;">
    <div class="p-5">
    <div class="form-container p-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100 bg-light"><br>

    <h2 class='mb-1'>         
    <h3 style="text-align: center; color: rgb(0,0,0);"><b>CERTIFICATE COURSES</b></h3></h2><br>
            
    <!--CERTIFICATE COURSES php code -->
            <?php

            $Result = mysqli_query($Connection,"SELECT * FROM program_details WHERE program_type='CC'");

            while($row=mysqli_fetch_array($Result)){
                //echo '<li><a href="form_cetificates_courses.html">'.$row['course_name'].'</a></li>';
                $colorPic1 = '<a href="form_cetificates_courses.php">'.$row['program_name'].'</a>';
                echo "<h2 class='mb-1'>";
                echo "<button class='btn btn-outline-dark' type='button' style='width: 800px; height:40px;'>$colorPic1</p>";
                echo "</h2>";
                }
                echo "<br>";
            ?>

    <h2 class='mb-1'>
    <h3 style="text-align: center; color: rgb(0,0,0);"><b>SPECIAL COURSES ON DEMAND</b></h3>
    </h2><br>

    <!--SPECIAL COURSES ON DEMAND php code -->
            <?php

            $Result = mysqli_query($Connection,"SELECT * FROM program_details WHERE program_type='SC'");

            while($row=mysqli_fetch_array($Result)){
                //echo '<li><a href="form_cetificates_courses.html">'.$row['course_name'].'</a></li>';
                $colorPic3 = '<a href="form_cetificates_courses.php">'.$row['program_name'].'</a>';
                echo "<h2 class='mb-1'>";
                echo "<button class='btn btn-outline-dark' type='button' style='width: 800px; height:40px;'>$colorPic3</p>";
                echo "</h2>";
                }
                echo "<br>";
            ?>

    <h2 class='mb-1'>
        <h3 style="text-align: center; color: rgb(0,0,0);"><b>EXRENAL DEGREE PROGRAMMES</b></h3>
    </h2><br>
            
    <!--EXRENAL DEGREE PROGRAMMES php code -->
            <?phP

            $Result = mysqli_query($Connection,"SELECT * FROM program_details WHERE program_type='BA'");

            while($row=mysqli_fetch_array($Result)){
                $colorPic4 = '<a href="form_cetificates_courses.php">'.$row['program_name'].'</a>';
                echo "<h2 class='mb-1'>";
                echo "<button class='btn btn-outline-dark' type='button' style='width: 800px; height:40px;'>$colorPic4</p>";
                echo "</h2>";
                }
                echo "<br>";
            ?>

    <h2 class='mb-1'>
    <h3 style="text-align: center; color: rgb(0,0,0);"><b>DIPLOMA</b></h3></h2><br>
            
    <!--DIPLOMAS php code -->
            <?php

            $Result = mysqli_query($Connection,"SELECT * FROM program_details WHERE program_type='DI'");

            while($row=mysqli_fetch_array($Result)){
                //echo '<li><a href="form_cetificates_courses.html">'.$row['course_name'].'</a></li>';
                $colorPic5 = '<a href="form_cetificates_courses.php">'.$row['program_name'].'</a>';
                echo "<h2 class='mb-1'>";
                echo "<button class='btn btn-outline-dark' type='button' style='width: 800px; height:40px;'>$colorPic5</p>";
                echo "</h2>";
                }
                echo "<br>";
            ?>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!--Footer-->
    <div class="p-1"></div>
    <?php
    include_once("includes/footer.php");
    ?>

</body>
</html>