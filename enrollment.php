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
    font-family: Montserrat;
    background-image: url("https://image.freepik.com/free-vector/abstract-black-red-shiny-tech-fold-shadow-background_1408-564.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    color: ivory;
  }
  h1, h5 {
    font-family: Montserrat;
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
    font-size:17px;
  }

  .col-75 {
    float: left;
    width: 100%;
    margin-top: 3px;
    margin-left: 45%;
  }

  .col-26 {
    float: left;
    width: 100%;
    margin-top: 3px;
    margin-left: 45%;
  }

  .row:after {
    content: "";
    display: inline;
    clear: both;
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
        <h3><B><br>EDUCATIONAL BACKGROUND</B></h3>
        <div class="col-25">
          <label><B>Junior High School</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="JHS" placeholder="Junior High..." size="40" value="" required>
        </div>
        <div class="col-25"><label><B>Address</B></label>
        </div>
        <div class="col-26">
          <input type="text" id="JHSAddress" placeholder="Address..." size="40" value="" required>
        </div>
        <div class="col-25"><label><B>School Year</B></label>
        </div>
        <div class="col-26">
          <input type="text" id="JHSsy" placeholder="School Year..." size="40" value="" required> 
        </div>
        <div class="col-25">
          <label><B>Senior High School</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="SHS" placeholder="Senior High..." size="40" value="" required>
        </div>
        <div class="col-25"><label><B>Address</B></label>
        </div>
        <div class="col-26">
          <input type="text" id="SHSAddress" placeholder="Address..." size="40" value="" required>
        </div>
        <div class="col-25"><label><B>School Year</B></label>
        </div>
        <div class="col-26">
          <input type="text" id="SHSsy" placeholder="School Year..." size="40" value="" required>
        </div>
        <h3><B>GENERAL WEIGHTED AVERAGE</B></h3>
        <div class="col-25">
          <label><B>Mathematics</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="MAve" placeholder="Math Average..." size="20" value="" required>
        </div>
        <div class="col-25">
          <label><B>English</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="EAve" placeholder="English Average..." size="20" value="" required>
        </div>
        <div class="col-25">
          <label><B>Science</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="SAVe" placeholder="Science Average..." size="20" value="" required>
        </div>
        <div class="col-25">
          <label><B>Filipino</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="FAve" placeholder="Filipino Average..." size="20" value="" required>
        </div>
        <div class="col-25">
          <label><B>Overall GWA</B></label>
        </div>
        <div class="col-75">
          <input type="text" id="GWA" placeholder="Overall Average..." size="20" value="" required>
        </div>
        <h3><B>COURSE SELECTION</B></h3>
        <div class="col-25">
          <label><B>First Choice</B></label><br>
          <form name="stdntdetails" action="study.php" method="post">
            <select name="department">
                <option value="default">SELECT A COURSE</option>
                <option value="BSARCH">CAUP-Bachelor of Science in Architecture</option>
                <option value="BEEd">CE-Bachelor of Elementary Education </option>
                <option value="BECEd">CE-Bachelor of Early Childhood Education </option>
                <option value="BSNEd">CE-Bachelor of Special Needs Education </option>
                <option value="BSEd-Eng">CE-Bachelor of Secondary Education major in English </option>
                <option value="BSEd-Fil">CE-Bachelor of Secondary Education major in Filipino </option>
                <option value="BSEd-Math">CE-sBachelor of Secondary Education major Mathematic </option>
                <option value="BSEd-Sciences">CE-Bachelor of Secondary Education major in Sciences </option>
                <option value="BSEd-SS">CE-Bachelor of Secondary Education major in Social Studies </option>
                <option value="BPE">CE-Bachelor of Physical Education </option>
                <option value="BSCHE">CET-Bachelor of Science in Chemical Engineering</option>
                <option value="BSCE">CET-Bachelor of Science in Civil Engineering</option>
                <option value="BSCpE">CET-Bachelor of Science in Computer Engineering</option>
                <option value="BSCS">CET-Bachelor of Science in Computer Science </option>
                <option value="BSEE">CET-Bachelor of Science in Electrical Engineering </option>
                <option value="BSECE">CET-Bachelor of Science in Electronics Engineering</option>
                <option value="BSIT">CET-Bachelor of Science in Information Technology</option>
                <option value="BSMFGE">CET-Bachelor of Science in Manufacturing Engineering </option>
                <option value="BSME">CET-Bachelor of Science in Mechanical Engineering</option>
                <option value="BAC">CHASS-Bachelor of Arts in Communication</option>
                <option value="BACPR">CHASS-Bachelor of Arts in Communication Major in Public Relations</option>
                <option value="BAPR">CHASS-Bachelor of Arts in Public Relations</option>
                <option value="BSN">CN-Bachelor of Science in Nursing</option>
                <option value="BSPT">CPT-Bachelor of Science in Physical Therapy</option>
                <option value="BSBIO">Bachelor of Science in Biology</option>
                <option value="BSCHEM">Bachelor of Science in Chemistry</option>
                <option value="BSMATH">Bachelor of Science in Mathematics</option>
                <option value="BSPSY">Bachelor of Science in Psychology</option>
            </select>
            <input type="submit" id="FC" name="submit"/>
        </form>
        </div>
        <div class="col-25">
          <label><B>Second Choice</B></label>
          <form name="stdntdetails" action="study.php" method="post">
            <select name="department">
              <option value="default">SELECT A COURSE</option>
              <option value="BSARCH">CAUP-Bachelor of Science in Architecture</option>
              <option value="BEEd">CE-Bachelor of Elementary Education </option>
              <option value="BECEd">CE-Bachelor of Early Childhood Education </option>
              <option value="BSNEd">CE-Bachelor of Special Needs Education </option>
              <option value="BSEd-Eng">CE-Bachelor of Secondary Education major in English </option>
              <option value="BSEd-Fil">CE-Bachelor of Secondary Education major in Filipino </option>
              <option value="BSEd-Math">CE-Bachelor of Secondary Education major Mathematics </option>
              <option value="BSEd-Sciences">CE-Bachelor of Secondary Education major in Sciences </option>
              <option value="BSEd-SS">CE-Bachelor of Secondary Education major in Social Studies </option>
              <option value="BPE">CE-Bachelor of Physical Education </option>
              <option value="BSCHE">CET-Bachelor of Science in Chemical Engineering</option>
              <option value="BSCE">CET-Bachelor of Science in Civil Engineering</option>
              <option value="BSCpE">CET-Bachelor of Science in Computer Engineering</option>
              <option value="BSCS">CET-Bachelor of Science in Computer Science </option>
              <option value="BSEE">CET-Bachelor of Science in Electrical Engineering </option>
              <option value="BSECE">CET-Bachelor of Science in Electronics Engineering</option>
              <option value="BSIT">CET-Bachelor of Science in Information Technology</option>
              <option value="BSMFGE">CET-Bachelor of Science in Manufacturing Engineering </option>
              <option value="BSME">CET-Bachelor of Science in Mechanical Engineering</option>
              <option value="BSME">CET-Bachelor of Science in Mechanical Engineering</option>
              <option value="BAC">CHASS-Bachelor of Arts in Communication</option>
              <option value="BACPR">CHASS-Bachelor of Arts in Communication Major in Public Relations</option>
              <option value="BAPR">CHASS-Bachelor of Arts in Public Relations</option>
              <option value="BSN">CN-Bachelor of Science in Nursing</option>
              <option value="BSPT">CPT-Bachelor of Science in Physical Therapy</option>
              <option value="BSBIO">Bachelor of Science in Biology</option>
              <option value="BSCHEM">Bachelor of Science in Chemistry</option>
              <option value="BSMATH">Bachelor of Science in Mathematics</option>
              <option value="BSPSY">Bachelor of Science in Psychology</option>
            </select>
            <input type="submit" id="SC" name="submit"/>
        </form>
        </div>
        <div class="col-25">
          <label><B>Third Choice</B></label>
          <form name="stdntdetails" action="study.php" method="post">
            <select name="department">
              <option value="default">SELECT A COURSE</option>
              <option value="BSARCH">CAUP-Bachelor of Science in Architecture</option>
              <option value="BEEd">CE-Bachelor of Elementary Education </option>
              <option value="BECEd">CE-Bachelor of Early Childhood Education </option>
              <option value="BSNEd">CE-Bachelor of Special Needs Education </option>
              <option value="BSEd-Eng">CE-Bachelor of Secondary Education major in English </option>
              <option value="BSEd-Fil">CE-Bachelor of Secondary Education major in Filipino </option>
              <option value="BSEd-Math">CE-Bachelor of Secondary Education major Mathematics </option>
              <option value="BSEd-Sciences">CE-Bachelor of Secondary Education major in Sciences </option>
              <option value="BSEd-SS">CE-Bachelor of Secondary Education major in Social Studies </option>
              <option value="BPE">CE-Bachelor of Physical Education </option>
              <option value="BSCHE">CET-Bachelor of Science in Chemical Engineering</option>
              <option value="BSCE">CET-Bachelor of Science in Civil Engineering</option>
              <option value="BSCpE">CET-Bachelor of Science in Computer Engineering</option>
              <option value="BSCS">CET-Bachelor of Science in Computer Science </option>
              <option value="BSEE">CET-Bachelor of Science in Electrical Engineering </option>
              <option value="BSECE">CET-Bachelor of Science in Electronics Engineering</option>
              <option value="BSIT">CET-Bachelor of Science in Information Technology</option>
              <option value="BSMFGE">CET-Bachelor of Science in Manufacturing Engineering </option>
              <option value="BSME">CET-Bachelor of Science in Mechanical Engineering</option>
              <option value="BSME">CET-Bachelor of Science in Mechanical Engineering</option>
              <option value="BAC">CHASS-Bachelor of Arts in Communication</option>
              <option value="BACPR">CHASS-Bachelor of Arts in Communication Major in Public Relations</option>
              <option value="BAPR">CHASS-Bachelor of Arts in Public Relations</option>
              <option value="BSN">CN-Bachelor of Science in Nursing</option>
              <option value="BSPT">CPT-Bachelor of Science in Physical Therapy</option>
              <option value="BSBIO">Bachelor of Science in Biology</option>
              <option value="BSCHEM">Bachelor of Science in Chemistry</option>
              <option value="BSMATH">Bachelor of Science in Mathematics</option>
              <option value="BSPSY">Bachelor of Science in Psychology</option>
            </select>
            <input type="submit" id="TC" name="submit"/>
        </form>
        </div>
        <div class="col-25">
              <label><B>Password</B></label>
            </div>
            <div class="col-75">
              <input type="text" id="Password" placeholder="Password..." size="30" value="" required>
            </div>
            <div class="col-25">
            <button type="button" onclick="my_button_click_handler" style="float:right;">Submit</button>
  </div>
      <script>
        function my_button_click_handler ()
        {
          var jsonObj = {
            "lastName": document.getElementById("LastName").value,
            "firstName": document.getElementById("FirstName").value,
            "middleName": document.getElementById("MiddleName").value,
            "suffix": document.getElementById("SuffixName").value,
            "LRN": document.getElementById("LRN").value,
            "age": document.getElementById("Age").value,
            "gender": document.getElementById("Gender").value,
            "nationality": document.getElementById("Nationality").value,
            "address": document.getElementById("Address").value,
            "email": document.getElementById("Email").value,
            "PhoneNumber": document.getElementById("PhoneNumber").value,
            "status": document.getElementById("Status").value,
            "mMaidenName": document.getElementById("MotherName").value,
            "mAddress": document.getElementById("MotherAddress").value,
            "mContactNumber": document.getElementById("MotherContact").value,
            "mOccupation": document.getElementById("MotherOccupatio").value,
            "fName": document.getElementById("FatherName").value,
            "fAddress": document.getElementById("FatherAddress").value,
            "fContactNumber": document.getElementById("FatherContact").value,
            "fOccupation": document.getElementById("FatherOccupation").value,
            "jhsAddress": document.getElementById("JHSAddress").value,
            "jhsSchoolYear": document.getElementById("JHSsy").value,
            "shsAddress": document.getElementById("SHSAddress").value,
            "shsSchoolYear": document.getElementById("SHSsy").value,
            "gwaMath": document.getElementById("MAve").value,
            "gwaScience": document.getElementById("SAve").value,
            "gwaEnglish": document.getElementById("EAve").value,
            "gwaFilipino": document.getElementById("FAve").value,
            "gwa": document.getElementById("GWA").value,
            "firstChoice": document.getElementById("FC").value,
            "secondChoice": document.getElementById("SC").value,
            "thirdChoice": document.getElementById("TC").value,
            "password": document.getElementById("Password").value,
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