<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>View Information</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
</head>

<style>
    .container {
    border: 3px double;
    border-radius: 10px;
    border-color: #B22222;
    background-color: rgba(255, 255, 255, 0.604);
    width: 80%;
    height: 40%;
    margin: 10% 10% 2%;
    padding: 3%;
    }
    
    span{
        color: black;
        margin-left:5%;
      }
    .buttons {
        float:right;
        height: 45px;
        width: 300px;
        font-size: 15px;
        color: ivory;
        background-color: rgba(0, 0, 0, 0.4);
        background-repeat: no-repeat;
        background-size: 490px 150px;
        margin-top: 30%;
        margin-left: 30%;
        margin-right:10%;
        display: block;
}
    </style>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.php"><img src="images/logo1.png" alt="Manila State University"></a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li><a href="index.php">Log Out</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->

            <!-- start home-social -->
    <ul class="home-social">
        <li>
            <a href="#"><i class="im im-facebook" aria-hidden="true"></i><span>Facebook Page</span></a>
        </li>
        <li>
            <a href="#"><i class="im im-twitter" aria-hidden="true"></i><span>Twittter</span></a>
        </li>
        <li>
            <a href="#"><i class="im im-instagram" aria-hidden="true"></i><span>Instagram</span></a>
        </li>
    </ul>
            <!-- end home-social -->

    <!-- home
   ================================================== -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll"
        data-image-src="images/bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                
        </div> <!-- end home-content -->

        <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "records";
    {
    /*<!-- Connect to database
    ================================================== -->*/
    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbName']);
    // Check connection
    if ($conn->connect_error)
    {
    die("Connection failed: " . $conn->connect_error);
    echo("Cannot connect!");
    }
}

    $query = "SELECT * FROM `studInfo` WHERE `applicantNumber` = '1234'";

    $comments = mysql_query($query);

    while($row = mysql_fetch_array($comments, MYSQL_ASSOC))
{
  $lastname = $row['lastName'];
  $firstName = $row['firstname'];
  $$middleName = $row['middlename'];
  $suffix = $row['suffix'];
  $LRN = $row['LRN'];
  $age = $row['age'];
  $gender = $row['gender'];
  $nationality = $row['nationality'];
  $address = $row['address'];
  $email = $row['email'];
  $phoneNumber = $row['phoneNumber'];
  $status = $row['status'];
  $applicantNumber = $row['applicantNumber'];
  $mMaidenName = $row['mMaidenName'];
  $mAddress = $row['mAddress'];
  $mContactNumber = $row['mContactNumber'];
  $mOccupation = $row['mOccupation'];
  $fName = $row['fName'];
  $fContactNumber = $row['fContactNumber'];
  $fOccupation = $row['fOccupation'];
  $jhsAddress = $row['jhsAddress'];
  $jhsSchoolYear = $row['jhsSchoolYear'];
  $shsAddress = $row['shsAddress'];
  $shsSchoolYear = $row['shsSchoolYear'];
  $firstChoice = $row['firstChoice'];
  $secondChoice = $row['secondChoice'];
  $thirdChoice = $row['thirdChoice'];
  $gwaMath = $row['gwaMath'];
  $gwaScience = $row['gwaScience'];
  $gwaEnglish = $row['gwaEnglish'];
  $gwaFilipino = $row['gwaFilipino'];
  $gwa = $row['gwa'];
  $password = $row['password'];


  $lastname = htmlspecialchars($row['lastName'],ENT_QUOTES);
  $firstName = htmlspecialchars($row['firstName'],ENT_QUOTES);
  $middleName = htmlspecialchars($row['middleName'],ENT_QUOTES);
  $suffix = htmlspecialchars($row['suffix'],ENT_QUOTES);
  $LRN = htmlspecialchars($row['LRN'],ENT_QUOTES);
  $age = htmlspecialchars($row['age'],ENT_QUOTES);
  $gender = htmlspecialchars($row['gender'],ENT_QUOTES);
  $nationality= htmlspecialchars($row['nationality'],ENT_QUOTES);
  $address = htmlspecialchars($row['address'],ENT_QUOTES);
  $email = htmlspecialchars($row['email'],ENT_QUOTES);
  $phoneNumber = htmlspecialchars($row['phoneNumber'],ENT_QUOTES);
  $status = htmlspecialchars($row['status'],ENT_QUOTES);
  $applicantNumber = htmlspecialchars($row['applicantNumber'],ENT_QUOTES);
  $mMaidenName = htmlspecialchars($row['mMaidenName'],ENT_QUOTES);
  $mAddress = htmlspecialchars($row['mAddress'],ENT_QUOTES);
  $mContactNumber = htmlspecialchars($row['mContactNumber'],ENT_QUOTES);
  $mOccupation = htmlspecialchars($row['mOccupation'],ENT_QUOTES);
  $fName = htmlspecialchars($row['fName'],ENT_QUOTES);
  $fAddress = htmlspecialchars($row['fAddress'],ENT_QUOTES);
  $fContactNumber = htmlspecialchars($row['fContactNumber'],ENT_QUOTES);
  $jhsAddress = htmlspecialchars($row['jhsAddress'],ENT_QUOTES);
  $jhsSchoolYear = htmlspecialchars($row['jhsSchoolYear'],ENT_QUOTES);
  $shsAddress = htmlspecialchars($row['shsAddress'],ENT_QUOTES);
  $shsSchoolYear = htmlspecialchars($row['shsSchoolYear'],ENT_QUOTES);
  $firstChoice = htmlspecialchars($row['firstChoice'],ENT_QUOTES);
  $secondChoice = htmlspecialchars($row['secondChoice'],ENT_QUOTES);
  $thirdChoice = htmlspecialchars($row['thirdChoice'],ENT_QUOTES);
  $gwaMath = htmlspecialchars($row['gwaMath'],ENT_QUOTES);
  $gwaScience = htmlspecialchars($row['gwaScience'],ENT_QUOTES);
  $gwaEnglish = htmlspecialchars($row['gwaEnglish'],ENT_QUOTES);
  $gwaFilipino = htmlspecialchars($row['gwaFilipino'],ENT_QUOTES);
  $fOccupation = htmlspecialchars($row['gwa'],ENT_QUOTES);
  $fOccupation = htmlspecialchars($row['password'],ENT_QUOTES);


  echo "  <div style='margin:30px 0px;'>
      Last Name: $lastname<br />
      First Name: $firstName<br />
      Middle Name: $middleName<br />
      Suffix: $suffix<br />
      LRN: $LRN<br />
      Age: $age<br />
      Gender: $gender<br />
      Nationality: $nationality<br />
      Address: $address <br />
      Email: $email<br />
      Phone Number: $phoneNumber <br />
      Status: $status <br />
      Application Number: $applicantNumber <br />
      Mother's Name: $mMaidenName <br />
      Address: $mAddress <br />
      Contact Number: $mContactNumber <br />
      OCcupation: $mOccupation<br />
      Father's Name: $fName <br />
      Contact Number: $fContactNumber <br />
      OCcupation: $fOccupation<br />
      Address: $jhsAddress<br />
      School Year: $jhsSchoolYear <br />
      Address: $shsAddress <br />
      School Year: $shsSchoolYear <br />
      First Choice: $firstChoice<br />
      Second Choice: $secondChoice<br />
      Third Choice: $thirdChoice<br />
      Mathematics: $gwaMath <br />
      Science: $gwaScience <br />
      English: $gwaEnglish<br />
      Filipino: $gwaFilipino <br />
      GWA: $gwa <br />
      Password: $password<br />

    </div>
  ";
}

mysql_close($con);
    
?>
        
        echo " <form action="/action_page.php">
            <div class="container">
                <div class="row">
            <h3><B>STUDENT'S INFORMATION</B></h3>
                <span>Application No.:</span><br>
                <span>Name:</span><br>
                <span>Learner's Reference No.:</span><br>
                <span>Age:</span><br>
                <span>Gender:</span><br>
                <span>Nationality:</span><br>
                <span>Address:</span><br>
                <span>Email:</span><br>
                <span>Phone:</span><br>
                <span>Status:</span><br>
            <h3><B>FAMILY BACKGROUND</B></h3>
                <span>Mother's Name:</span><br>
                <span>Address:</span><br>
                <span>Contact No.:</span><br>
                <span>Occupation:</span><br>
                <span>Father's Name:</span><br>
                <span>Address:</span><br>
                <span>Contact No.:</span><br>
                <span>Occupation:</span><br>
            <h3><B>EDUCATIONAL BACKGROUND</B></h3>
                <span>Junior High School:</span><br>
                <span>Address:</span><br>
                <span>School Year:</span><br>
                <span>Senior High School:</span><br>
                <span>Address:</span><br>
                <span>School Year:</span><br>
            <h3><B>GENERAL WEIGHTED AVERAGE</B></h3>
                <span>Mathematics:</span><br>
                <span>English:</span><br>
                <span>Science:</span><br>
                <span>Filipino:</span><br>
                <span>GWA:</span><br>
            <h3><B>COURSE SELECTION</B></h3>
                <span>First Choice:</span><br>
                <span>Second Choice:</span><br>
                <span>Third Choice:</span><br>
        </div>
        <br><span>================================================================================</span>
        <h3><B>Enrollment Process</B></h3>
        <span>  <br>Thank you for choosing Manila State University!
                <br>Your application is being processed by the admin.Once you are accepted, an email will be sent to your email account regarding your Enrollment. 
                <br>*Please take note that the University will never ask for the password of your account.*</span>
                

    </div>
    </section> <!-- end s-home -->

    <!-- Java Script
    ================================================== -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>