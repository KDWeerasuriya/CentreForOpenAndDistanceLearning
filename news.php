<!DOCTYPE html>
<html language="en">
    <head>
        <title>NEWS</title>
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
        
        <style type="text/css">

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
        <button type="button" class="btn btn-outline-secondary" disabled><a style="color: yellow; font-weight: bold;">NEWS</a></button>
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
<!--HEADER START HERE-->

  <div class="imagebg img" style="height: auto;">
    <div id="content" align="center">
        
        <div class="p-2">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<a class="navbar-brand" href="#"><b>GENERAL ANNOUNCEMENTS</b></a>
		</nav>
	</div>
          <div class="p-2">
            <div class="row">
              <div class="col-md-4">
                <div class="card h-100" style="background-color: rgb(27, 29, 69);">

                  <table class="table table-bordered bg-light" style="width: 470px;">
                  <div class="p-2">
                  <h3 style="text-align: center; color: white;"><b>NOTICE</b></h3></div></div>
                    <tbody style="background-color: rgb(184, 185, 196);">
                      <tr>
                        <td>
                          <div id="content" class="card p-2">

<!--OFFICER ANNOUNCEMENT VIEWER PHP START -->
				  <?php
          $Result = mysqli_query($Connection,"select*from notice order by notice_id DESC LIMIT 3;");
          while($row=mysqli_fetch_array($Result)){
          $p = $row["notice_id"];
          $q = $row["title"];
          $r = $row["descriptions"];
          $s = $row["dates"];
          echo "<p style='color:red;'><mark>$s</mark></p>";
          
          echo "<b>$q</b>";
          echo "<br>";
          //echo "<br>";

          echo "$r";
          echo "<hr class='style-eight' />";
          }
          ?>
<!--OFFICER ANNOUNCEMENT VIEWER PHP END -->

                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
            
<!--notice box -->
    <div class="col-md-8" style="height: auto;">
      <div class="card h-100">
      <div class="p-2" style="background-color: rgb(27, 29, 69 );">
        <h3 style="text-align: center; font-size: xx-large; color: white;"><b>INFORMATION GALLERY</b></h3></div>

            <div class="card text-white" style="background-color: rgb(27, 29, 69 );">
          <div class="card-body">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="newsimg/ACC-Abm.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="newsimg/sss.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="newsimg/BBM.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="newsimg/PTC.jpg" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          
          </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>

<!--footer -->
    <?php
    include_once("includes/footer.php");
    ?>

</body>
</html>