<!DOCTYPE html>
<html language="en">
    <head>
        <title>FORM FOR CERTIFICATES COURSES</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/form_cetificates_courses.css" type="text/css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
    </head>

    <!--DATABASE CONNECTION-->
    <?php
  	include_once("includes/dbconnection.php");
  	?>

<body>

<!--javaScript for validation start-->
<script type="text/javascript">

  function val(){
    var iname = document.getElementById("i3").value;
    var fname = document.getElementById("i4").value;

    var nic = document.getElementById("i10").value;
    var nicl = nic.length;
    var nicOld = nic.substr(9,10);
    var nicOldInt = nic.substr(0,9);

    var tp = document.getElementById("i13").value;
    var len = tp.length;
    var status = tp.substr(0,3);

    if(iname==""){
      swal("Initial name cannot be empty","Try again!", "warning");
    }
    else if(fname==""){
      swal("Full name cannot be empty","Try again!", "warning");
    }
    else if(nic=""){
      swal("NIC number can not be empty","Try again!", "warning");
    }
    else if(nicOld!="v" && nicOld!="V"){
      swal("Incorrect NIC number","Try again!", "warning");
    }
    else if(isNaN(nicOldInt)){
      swal("NIC number format is invalid","Try again!", "warning");
    }
    else if(nicl!=10){
      swal("You entered NIC number is not correct format","Try again!", "warning")
    }
    else if(isNaN(tp)){
      swal("You can enter number only","Try again!", "warning");
    }
    else if(len!=10){
			swal("Telephone number is too large or small than its default value","Try again!", "warning");
		}
		else if(status!="071" && status!="070" && status!="077" && status!="076" && status!="075" && status!="078" && status!="072"){
			swal("You entered telephone number is not using in Sri Lanka.","Try again!", "warning");
		}
    /*else{
      swal("Your data successfully saved our database. Thank you.!");
    }*/
  }
</script>


<div>
  <div class="p-5" style="background-color: #06053a;">
    <div class="p-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card h-100">

    <form action="php/application_action.php" method="post" enctype="multipart/form-data">     
      <div class="card" style="background-color: #bcd3ec;">

        <h2 style="text-align: center;">Centre For Open and Distance Learning<br>Uva Wellassa University of Sri Lanka</h2>
        <p style="text-align: center;"><img src="images/logo_uwu.jpg" alt="" style="width:120px; height: 130px;"></p>
        <h4 style="text-align: center;"><u>Application Form for Applying Courses, Diplomas , Degrees</u></h4><br>

        <strong style="color: red; font-size: large;">Feilds marked with an asterisk (*) are required.</strong>

        <div class="form-group">
          <div class="col-md-11"><b>
            <label>Course Applied For: <strong style="color: red; font-size: x-large;">*</strong></label>

            <select class="browser-default custom-select" name="inf1">
              <option selected>Select your course, diploma or degree</option>

              <option>

              <!--ALL PROGRAMS VIEW php code START-->
              <?php

              $Result = mysqli_query($Connection,"SELECT * FROM program_details");

              while($row=mysqli_fetch_array($Result)){
                echo "<li>".$row['program_name']."</li>";
                echo "<option>";
                
              }
              ?>
              <!--ALL PROGRAMS VIEW php code END-->

              </option>
              
            </select>
            
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-11"><div>
            <label>Course Code: <strong style="color: red; font-size: x-large;">*</strong><h6 style="font-style: italic;">(Use this <a href="programe.php" target="blankpage" style="text-decoration: underline;">link</a> to find your course, diploma, degree code)</h6></label>

            <select class="browser-default custom-select" name="inf2">
              <option selected>Select your course code, diploma code or degree code</option>

              <option>

              <!--ALL PROGRAMS ID VIEW php code START-->
              <?php

              $Result = mysqli_query($Connection,"SELECT * FROM program_details");

              while($row=mysqli_fetch_array($Result)){
                echo "<li>".$row['program_id']."</li>";
                echo "<option>";
                
              }
              echo "<br>";
              ?>
              <!--ALL PROGRAMS ID VIEW php code START-->

              </option>

              </select>
              
          </div>
        </div><br>


        <div class="form-group">
          <h6><u>Part I - Personal Details</h6></u>
        </div>

        <div class="form-group">
          <div class="col-md-11">
            <label>1. Name of Applicant (with initials) ( Rev./ Mr./ Mrs./ Ms.): <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="text" class="form-control" name="inf3" id="i3" required>
          </div>
        </div>
    
        <div class="form-group">
          <div class="col-md-11">
            <label>2. Applicant’s Full Name: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="text" class="form-control" name="inf4" id="i4" required>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-md-3">
            <label>3. Date of Birth: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="date" class="form-control" name="inf5" required>
          </div>
        </div>	
    
        <div class="form-group">
          <div class="col-md-3">
            <label>4. Age as at applying date: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="date" class="form-control" name="inf6" required>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-md-3">
            <label>5. Gender: <strong style="color: red; font-size: x-large;">*</strong></label>
            <select class="form-control" name="inf7" required>
                <option selected>Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-3">
            <label>6. Civil Status: <strong style="color: red; font-size: x-large;">*</strong></label>
            <select class="form-control" name="inf8" required>
                <option selected>Select</option>
                <option value="married">Married</option>
                <option value="unmarried">Unmarried</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-3">
            <label>7. Nationality: <strong style="color: red; font-size: x-large;">*</strong></label>
            <select class="form-control" name="inf9" required>
              <option selected>Select</option>
              <option value="sinhala">Sinhala</option>
              <option value="tamil">Tamil</option>
              <option value="muslim">Muslim</option>
          </select>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-md-3">
            <label>8. NIC No: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="text" class="form-control" placeholder="Ex: 980000000V" name="inf10" id="i10" required>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-md-3">
            <label>9. NIC Issue Date: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="date" class="form-control" name="inf11" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-11">
            <label>10. Attach a image of the Your National Identity Card <strong style="color: red; font-size: x-large;">*</strong></label>

        <!-- <div class="col-md-11"> -->
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="inf12" required>
              <label class="custom-file-label" for="inputGroupFile01">Insert the National Identity Card image</label>
          </div>
          </div></div><br>

        <div class="form-group">
          <div class="col-md-3">
            <label>11. Contact Number: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="text" class="form-control" placeholder="Mobile" name="inf13" id="i13" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-5">
            <label>12. Email: <strong style="color: red; font-size: x-large;">*</strong></label>
            <input type="email" class="form-control" name="inf14" required>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-5">
            <label>13. Address: <strong style="color: red; font-size: x-large;">*</strong></label>
            <textarea class="form-control" name="inf15" required></textarea>
          </div>
        </div><hr/>

        <h6><u>Part II – Educational Qualifications</h6></u><br>

        <div class="form-group">
          <div class="col-md-11">
            <label>14. Please attach image of the G.C.E.(A/L) Examination result sheet image <strong style="color: red; font-size: x-large;">*</strong></label>

            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="inf16" required>
                <label class="custom-file-label" for="inputGroupFile01">G.C.E. Advanced Level – (Please attach a certified copy of A/L Certificate)</label>
              </div>
            </div></div><br>

        <div class="form-group">
          <div class="col-md-11">
            <label>15. Please attach image of the G.C.E.(O/L) Examination result sheet image <strong style="color: red; font-size: x-large;">*</strong></label>

            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="inf17" required>
                <label class="custom-file-label" for="inputGroupFile01">G.C.E. Ordinary Level – (Please attach a certified copy of O/L Certificate)</label>
              </div>
            </div></div><br>

        <div class="form-group">
          <div class="col-md-11">
            <label class="control-label">16. Any Other Qualifications / working experience:</label>
            <textarea class="form-control" name="inf18"></textarea>
          </div>
        </div><hr>

        <h6><u>Part III – Other Qualifications/Details</h6></u><br>

        <div class="form-group">
          <div class="col-md-11">
            <label class="control-label">17. Present Employment Details, if applicapable (institute, post, employer etc.)</label>
            <textarea class="form-control" name="inf19"></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-11">
          <label class="control-label">18. Have you previously applied for admission to this programme</label>
          </div>
          <div class="col-md-3">
          <select class="form-control" name="inf20">
            <option selected>Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-11">
          <label class="control-label">19. Are you a currently registered or previously registered student for another course at the Center for Open and  Distance Learning of this University</div></label>
          <div class="col-md-3">  
          <select class="form-control" name="inf21">
              <option selected>Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
          </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-11">
          <label class="control-label">20. Any other Relevant information that you wish to inform</label>
          <textarea class="form-control" name="inf22"></textarea>
          </div>
        </div><hr/>

        <h6><u>Part VI – Applicant’s Declaration</h6></u><br>

        <div class="form-group">
          <div class="col-md-11">
          <label class="control-label" align="justify">I certify that all particulars given by me in this form are true and accurate. I am also aware that if any particulars given by me in this application are found to be false or inaccurate prior to my admission, my application will be rejected and that if such information is found to be false or inaccurate after my admission, I will be dismissed from the degree programme concerned without any compensation. In the event of my being selected for admission, I shall abide by the Statutes, By-laws, Regulation and Rules of the University concerned in so far as they are applicable to me.</label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-11">
          <div class="form-check">
          <input class="form-check-input" type="checkbox" name="inf23" required>
          <label class="form-check-label" for="gridCheck" style="font-style: italic;">I read the instructions which given with this application and clearly understood.</label>
          </div>
          </div>
        </div><hr/>
      </br>

        <div class="col-md-11">
        <h6 style="color: rgb(138, 25, 25);" align="justify"><b>Note:</b>	Applicant should attach duly certified copies of the NIC, Results Sheet of G.C.E.(A/L)Examination, Results Sheet of G.C.E.(O/L)Examination, and any other certificate which need to prove the qualifications with the application.</h6>
        <h6 style="color: rgb(138, 25, 25);"><b>IMPORTANT:</b> Incomplete applications will be rejected without any notification.</h6>
        </div><br>

        <div class="form-group">
          <div class="col-md-12">
            <button type="submit" class="btn btn-warning" style="float: left;"><a href="choose_apply.php" class="text-decoration-none">PREVIOUS PAGE</a></button>&nbsp;
            <button type="reset" class="btn btn-danger" style="float: center;">CLEAR DATA</button>
            <button type="submit" class="btn btn-success" style="float: right;" onclick="val();">SUBMIT APPLICATION</button>
          </div>
        </div>
        
    </form>

                    
  </div>
</div>
</div>
</div>

</div>
</div>

    </body>
</html>