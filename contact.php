<!DOCTYPE html>
<html language="en">
    <head>
        <title>CONTACT US</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/contact.css" type="text/css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
        <button type="button" class="btn btn-outline-secondary" disabled><a style="color: yellow; font-weight: bold;">CONTACT US</a></button>
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
    
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">

                <form class="form-container" class="justify-content-center">
                    <div class="loghead1">
                    <label for="loghead2"><b>CONTACT US</b></label>
                    </div><br>

                    <div class="form-group">
                      <label>

<!--DATABASE CONNECTION FOR CONTACT DETAILS START-->

                          <b>Director / CODL</b><br>

                            <?php
                            $Result = mysqli_query($Connection,"SELECT * FROM contact");
                            while($row=mysqli_fetch_array($Result)){
                            echo "Telephone: ".$row['telephone']."";
                            echo "<br>";
                            }
                            ?>

                            <?php
                            $Result = mysqli_query($Connection,"SELECT * FROM contact");
                            while($row=mysqli_fetch_array($Result)){
                            echo "Fax: ".$row['fax']."";
                            echo "<br>";
                            }
                            ?>

                            <?php
                            $Result = mysqli_query($Connection,"SELECT * FROM contact");
                            while($row=mysqli_fetch_array($Result)){
                            echo "E-mail: <a href>".$row['email']."</a>";
                            }
                            ?>

                      </label>
                    </div>

                    <div class="form-group">
                      <label>
                        <b>Website</b><br>

                            <?php
                            $Result = mysqli_query($Connection,"SELECT * FROM contact");
                            while($row=mysqli_fetch_array($Result)){
                            echo "<a href>".$row['website']."</a>";
                            }
                            ?>

                      </label>
                    </div>

                    <div class="form-group">
                        <label>
                            <b>Postal address</b><br>

                            <?php
                            $Result = mysqli_query($Connection,"SELECT * FROM contact");
                            while($row=mysqli_fetch_array($Result)){
                            echo $row['addresses'];
                            }
                            ?>

<!--DATABASE CONNECTION FOR CONTACT DETAILS END-->

                        </label>
                      </div>
                </form>

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12"></div>
        </div>
    </div>


    <?php
    include_once("includes/footer.php");
    ?>
    
</body>
</html>