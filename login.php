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
    <title>Log In</title>
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
    .form-signin{
        border: 3px double;
        border-radius: 10px;
        border-color: #B22222;
        width: 60%;
        height: 50%;
        padding: 3%;
        margin-top:20%;
    }
    h4{
        font-family: Montserrat;
        color:white;
        text-align:left;
        
    }
    .form-signin, .sr-only{
        font-family: Montserrat;
        color:white;
        text-align:right;
        float: right;
    }
</style>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <nav class="header-nav-wrap">
            <ul class="header-nav">
                
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <!-- home
   ================================================== -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll"
        data-image-src="images/bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <div class="text-center" cz-shortcut-listen="true">
                    <form class="form-signin">
                        <h4 id="h4" class="h4 mb-3 font-weight-normal">Log In Account</h4>
                            <label for="uname" class="sr-only"><br>Applicant No.</label>
                            <input type="text" id="uname" class="form-control" placeholder="Applicant..." required="" autofocus="" size="35" style="color:white;">
        
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password..." required="" size="35" style="color:white;">
        
                            <a href="sample.php"><button type="button" type="login" style="color:ivory; border-color:#B22222;">Log in</button></a>
                            <br>
                            <a href="enrollment.php"><u><font color="white">Not a Student? Click here to Enroll Now!</font></u></a>
                        </div>    
                    </form>
                </div>
    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="images/logo.png" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="#0">
                            <i class="im im-facebook" aria-hidden="true"></i>
                            <span>MSU Facebook Page</span>
                        </a></li>
                    <li><a href="#0">
                            <i class="im im-twitter" aria-hidden="true"></i>
                            <span>MSU Twitter</span>
                        </a></li>
                    <li><a href="#0">
                            <i class="im im-instagram" aria-hidden="true"></i>
                            <span>MSU Instagram</span>
                        </a></li>>
                </ul>

            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© 2021</span>
                    <span>Designed by GROUP 2</span>
                </div>
                <div style="font-size: 10px;">
                    <span>Leader: JONN CHRISTOPHER R. SALVADOR
                        <br> Members: Shellamie Akmad | Alexandra Jane Arivas
                        <br> Carl Myrvin Lafiguera | Ana Pauline Medina | Francheska Yvette Navarro | Eldrin Dave Ramos
                        <br> Jen Aira Reyes | Emmalyn Suyat | John Paul Torres
                    </span>
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up"
                            aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>