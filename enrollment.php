<!DOCTYPE html>
<html>

<head>
  <div>
    <h1><B>MANILA STATE UNIVERSITY</B></h1>
    <h5><B>ONLINE ENROLLMENT A.Y 2021-2022</B></h4>
  </div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<style>
  body {
    font-family: Courier New;
    background-image: url("https://image.freepik.com/free-vector/abstract-black-red-shiny-tech-fold-shadow-background_1408-564.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    color: ivory;
  }

  h1,
  h5 {
    font-family: Courier New;
    color: ivory;
    text-align: center;
    border-radius: 10px;
    border-color: #B22222;
  }

  .container {
    border: 3px double;
    border-radius: 10px;
    border-color: #B22222;
    background-color: #f2f2f2;
    background-color: rgba(0, 0, 0, 0.4);
    width: 80%;
    height: 40%;
    margin: 0% 10% 1%;
    padding: 3%;
  }

  .col-25,
  h3 {
    float: left;
    width: 100%;
    margin-top: 3px;
    margin-left: 15%;

  }

  .col-75 {
    float: left;
    width: 100%;
    margin-top: 3px;
    margin-left: 35%;
  }

  .col-26 {
    float: left;
    width: 100%;
    margin-top: 3px;
    margin-left: 40%;
  }

  .row:after {
    content: "";
    display: inline;
    clear: both;
  }

  .btn-secondary {
    float: right;
    border-color: #B22222;
    border-radius: 8px;
    background-color: ivory;
    padding: 14px;
    font-size: 16px;
    color: #B22222;
    width: 10%;
    cursor: pointer;
  }

  .btn:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background-origin: ivory;
  }
</style>

<body>

  <?php
  require 'dbConnect.php';
  $generated = generateApplicantNo();
?>

  <div class="container">
    <form action="/action_page.php">
      <div class="row">
        <h3><B>STUDENT'S INFORMATION</B></h3>
        <div class="col-25">
          <label for="fname"><B>Last Name</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="LastName" name="lastname" placeholder="Last name.." size="40" value="" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname"><B>First Name</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="FirstName" name="firstname" placeholder="First name.." size="40" value="" required>
        </div>
      </div>

      <div class="row">
        <div class="col-25"><B>Middle Name</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="MiddleName" name="middlename" placeholder="Middle name.." size="40" value="" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25"><B>Suffix</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="SuffixName" name="suffixname" placeholder="Jr., II, III.." size="40">
        </div>
        <div class="col-25"><label><B>Learner's Reference Number (LRN)</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="LRN" name="lrn" placeholder="LRN..." size="40" value="" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25"><label><B>Age</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="Age" name="age" placeholder="Age..." value="" required>
        </div>
        <div class="col-25"><label><B>Gender</B></label>
        </div>
        <div class="col-75">
          <input type="radio" name="options" id="Gender" autocomplete="off"><B> Male</B>
          <input type="radio" name="options" id="Gender" autocomplete="off"><B> Female</B>
        </div>
        <div class="col-25"><label><B>Nationality</B></label>
        </div>
        <div class="col-75">
          <input type="text" name="natio" id="Nationality" placeholder="Filipino, American, Japanese, etc..." size="40"
            value="" required>
        </div>
        <div class="col-25"><label><B>Address</B></label>
        </div>
        <div class="col-75">
          <input type="text" name="address" id="Address" placeholder="unit #,street, brgy. #, City..." size="40"
            value="" required>
        </div>
        <div class="col-25"><label><B>Email</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="Email" name="email" placeholder="Gmail, Outlook, etc..." size="40" value="" required>
        </div>
        <div class="col-25"><label><B>Phone Number</B></label>
        </div>
        <div class="col-75">
          <input type="text" name="phone" id="PhoneNumber" placeholder="..." size="40" value="" required>
        </div>
        <div class="col-25"><label><B>Status</B></label>
        </div>
        <div class="col-75">
          <input type="radio" name="optionsq" id="Status" autocomplete="off"><B> Single</B>
          <input type="radio" name="optionsq" id="Status" autocomplete="off"><B> Married</B>
          <input type="radio" name="optionsq" id="Status" autocomplete="off"><B> Separated</B>
          <input type="radio" name="optionsq" id="Status" autocomplete="off"><B> Divorced</B>
        </div>
        <h3><B><br>FAMILY BACKGROUND</B></h3>
        <div class="col-25"><label><B>Mother's Maiden Name</B></label>
        </div>
        <div class="col-75">
          <input type="text" name="mmn" id="MotherName" placeholder="Mother's Name" size="40" value="" required>
        </div>
        <div class="col-25"><label><B>Address</B></label>
        </div>
        <div class="col-26">
          <input type="text" name="madd" id="MotherAddress" placeholder="Address" size="35" value="" required>
        </div>
        <div class="col-25"><label><B>Contact Number</B></label>
        </div>
        <div class="col-26">
          <input type="text" name="mcn" id="MotherContact" placeholder="Contact Number" size="35" value="" required>
        </div>
        <div class="col-25"><label><B>Occupation</B></label>
        </div>
        <div class="col-26">
          <input type="text" name="moccu" id="MotherOccupation" placeholder="Occupation" size="35" value="" required>
        </div>
        <div class="col-25"><label><B>Father's Name</B></label>
        </div>
        <div class="col-75">
          <input type="text" name="fn" id="FatherName" placeholder="Father's Name" size="40" value="" required>
        </div>
        <div class="col-25"><label><B>Address</B></label>
        </div>
        <div class="col-26">
          <input type="text" name="fadd" id="FatherAddress" placeholder="Address" size="35" value="" required>
        </div>
        <div class="col-25"><label><B>Contact Number</B></label>
        </div>
        <div class="col-26">
          <input type="text" name="fcn" id="FatherContact" placeholder="Contact Number" size="35" value="" required>
        </div>
        <div class="col-25"><label><B>Occupation</B></label>
        </div>
        <div class="col-26">
          <input type="text" name="foccu" id="FatherOccupation" placeholder="Occupation" size="35" value="" required>
        </div>
        <div class="col-md-12 text-center">
          <a href="secondpage.html"
            class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><B>Next</B></a>
        </div>

      </div>

      <button type="button" onclick="my_button_click_handler">Submit</button>
      <script>
        function my_button_click_handler ()
        {
          var jsonObj = {
            "lastName": document.getElementById("LastName").value,
            firstName
            middleName
            suffix
            LRN
            age
            gender
            nationality
            address
            email
            phoneNumber
            status
            mMaidenName
            mAddress
            mContactNumber
            mOccupation
            fAddress
            fContactNumber
            fOccupation
            jhsAddress
            jhsSchoolYear
            shsAddress
            shsSchoolYear
            gwaMath
            gwaScience
            gwaEnglish
            gwaFilipino
            gwa
            firstChoice
            secondChoice
            thirdChoice
            password
          };
        var jsonString = JSON.stringify(jsonObj);
        $.ajax({
            url:"dbRegister.php",    //the page containing php script
            type: "post",    //request type,
            dataType: 'json',
            data: {"register": jsonString},
            success: function(response) {
              console.log(response);
              document.getElementById("labelStatus").value = response; } // labelStatus: to create
        });
        }
      </script>
</body>

</html>