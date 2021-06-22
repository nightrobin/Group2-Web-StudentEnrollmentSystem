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
?>

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
        
        <form action="/action_page.php">
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