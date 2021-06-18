<!DOCTYPE html>
<html>
    <head>
        <div>
        <h1><B>MANILA STATE UNIVERSITY</B></h1>
        <h5><B>ONLINE ENROLLMENT A.Y 2021-2022</B></h4>
        </div>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <style>
        body{
            font-family: Courier New;
            background-image: url("https://farm1.staticflickr.com/334/19877230064_a6013cc6b2_z.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            color:ivory;
        }
        h1, h5{
            font-family: Courier New;
            color: ivory;
            background-color:rgba(0,0,0, 0.4);
            text-align: center;
            border-radius: 10px;
            border-color:#B22222;
        }
        .container {
            border: 3px double;
            border-radius: 10px;
            border-color:#B22222;
            background-color: #f2f2f2;
            background-color: rgba(0,0,0, 0.4);
            width: 80%;
            height: 40%;
            margin:0% 10% 1%;
            padding: 3%;
        }
        .col-25, h3 {
            float: left;
            width: 100%;
            margin-top: 3px; 
            margin-left:15%;
            
        }
        .col-75 {
            float: left;
            width: 100%;
            margin-top: 3px;
            margin-left:35%;
        }
        .col-26{
            float: left;
            width: 100%;
            margin-top: 3px; 
            margin-left:40%;
        }
        .row:after {
            content: "";
            display:inline;
            clear: both;
        }
        .btn-secondary{
            float:right;
            border-color:#B22222;
            border-radius: 8px;
            background-color: ivory;
            padding: 14px 28px;
            font-size: 16px;
            color:#B22222;
            width:15%;
            cursor: pointer;
        }
        .btn:hover {
            box-shadow:0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            background-origin:ivory;
        }
    </style>
    <body>
        <div class="container">
            <form action="/action_page.php">
              <div class="row">
                 <h3><B>STUDENT'S INFORMATION</B></h3>
                <div class="col-25">
                  <label for="fname"><B>Last Name</B></label>
                </div>
                <div class="col-75">
                  <input type="text" id="lname" name="lastname" placeholder="Last name.."size="40" value=""required>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="lname"><B>First Name</B></label>
                </div>
                <div class="col-75">
                  <input type="text" id="fname" name="firstname" placeholder="First name.." size="40" value=""required>
                </div>
              </div>

              <div class="row">
                <div class="col-25"><B>Middle Name</B></label>
                </div>
                <div class="col-75">
                  <input type="text" id="mname" name="middlename" placeholder="Middle name.."size="40" value=""required>
                </div>
              </div>
              <div class="row">
                <div class="col-25"><B>Suffix</B></label>
                </div>
                <div class="col-75">
                  <input type="text" id="sname" name="suffixname" placeholder="Jr., II, III.."size="40">
                </div>
                <div class="col-25"><label><B>Learner's Reference Number (LRN)</B></label>
                </div>
                <div class="col-75">
                  <input type="text" id="LRN" name="lrn" placeholder="LRN..."size="40" value=""required>
                </div>
              </div>
              <div class="row">
              <div class="col-25"><label><B>Age</B></label>
              </div>
              <div class="col-75">
                <input type="text" id="Age" name="age"placeholder="Age..." value=""required>
              </div>
                  <div class="col-25"><label><B>Gender</B></label>
                </div>
              <div class="col-75">
                <input type="radio" name="options" id="option3" autocomplete="off"><B> Male</B>
                <input type="radio" name="options" id="option3" autocomplete="off"><B> Female</B>
              </div>
                <div class="col-25"><label><B>Nationality</B></label>
              </div>
              <div class="col-75">
                <input type="text" name="natio" id="Nationality" placeholder="Filipino, American, Japanese, etc..."size="40" value=""required>
              </div>
                <div class="col-25"><label><B>Address</B></label>
              </div>
              <div class="col-75">
                <input type="text" name="address" id="Address" placeholder="unit #,street, brgy. #, City..."size="40" value=""required>
              </div>
                <div class="col-25"><label><B>Email</B></label>
              </div>
              <div class="col-75">
                <input type="text" id="Email" name="email" placeholder="Gmail, Outlook, etc..."size="40" value=""required>
              </div>
                <div class="col-25"><label><B>Phone Number</B></label>
              </div>
                <div class="col-75">
                <input type="text" name="phone" id="Phone Number" placeholder="..."size="40" value=""required>
              </div>
                <div class="col-25"><label><B>Status</B></label>
              </div>
              <div class="col-75">
                <input type="radio" name="optionsq" id="option3" autocomplete="off"><B> Single</B>
                <input type="radio" name="optionsq" id="option3" autocomplete="off"><B> Married</B>
                <input type="radio" name="optionsq" id="option3" autocomplete="off"><B> Separated</B>
                <input type="radio" name="optionsq" id="option3" autocomplete="off"><B> Divorced</B>
              </div>
                <h3><B><br>FAMILY BACKGROUND</B></h3>
                <div class="col-25"><label><B>Mother's Maiden Name</B></label>
              </div>
                <div class="col-75">
                <input type="text" name="mmn" id="Mname" placeholder="Mother's Name"size="40" value=""required>
              </div>
              <div class="col-25"><label><B>Address</B></label>
              </div>
                <div class="col-26">
                <input type="text" name="madd" id="Address" placeholder="Address"size="35" value=""required>
              </div>
              <div class="col-25"><label><B>Contact Number</B></label>
              </div>
                <div class="col-26">
                <input type="text" name="mcn"id="Cnumber" placeholder="Contact Number"size="35" value=""required> 
              </div>
              <div class="col-25"><label><B>Occupation</B></label>
              </div>
                <div class="col-26">
                <input type="text" name="moccu" id="Occupation" placeholder="Occupation"size="35" value=""required>
              </div>
              <div class="col-25"><label><B>Father's Name</B></label>
              </div>
                <div class="col-75">
                <input type="text" name="fn" id="Mname" placeholder="Father's Name"size="40" value=""required>
              </div>
              <div class="col-25"><label><B>Address</B></label>
              </div>
                <div class="col-26">
                <input type="text" name="fadd"id="Address" placeholder="Address"size="35" value=""required>
              </div>
              <div class="col-25"><label><B>Contact Number</B></label>
              </div>
                <div class="col-26">
                <input type="text" name="fcn" id="Cnumber" placeholder="Contact Number"size="35" value=""required>
              </div>
              <div class="col-25"><label><B>Occupation</B></label>
              </div>
                <div class="col-26">
                <input type="text" name="foccu" id="Occupation" placeholder="Occupation"size="35" value=""required>
              </div>
                <div class="col-md-12 text-center">
                <a href="file:///C:/Users/alexandra/Desktop/PE%20Exercises/Group2-Web-StudentEnrollmentSystem/secondpage.html" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><B>Next</B></a>
              </div>
              
              </div>
              
    <!-----database ---->
  <?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "d_connect";

  $conn = new mysqli_connect($servername, $username, $password, $dbname);
  
  if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
  }
  ?>
</body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</html>