<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Sign Up - SETU - "Mihajlo Pupin"</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext"
        rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Favicon  -->
    <link rel="icon" href="images/icon.ico" />
</head>

<body data-target=".fixed-top">

    <div id="kopcence">
        <button class="koroniste">
            <a href="https://koronavirus.gov.mk/" target="_blank">Covid-19</a>
        </button>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="images/logo.png" alt="alternative" /></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Teaching</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="obrazovniprofili.php"><span class="item-text">Educational
                                Profiles</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="https://schools.mk/" target="_blank"><span class="item-text">Help
                                with online classes</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
               <!-- Dropdown Menu -->
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">News</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="novosti.php"><span class="item-text">All news</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="oglasnatabla.php"><span
                                class="item-text">Bulletin board</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->
                <li class="nav-item">
                    <a class="nav-link" href="zanas.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt.php">Contact</a>
                </li>
                <li class="nav-item">
                    <button onclick="location.href = '/zapisise.php';" class="jazici"
                        style="background: url(images/MKD.svg)"><a href="index.php"></a></button>
                </li>
                <li class="nav-item">
                    <button onclick="location.href = 'zapisise.php';" class="jazici"
                        style="background: url(images/USA.svg)"><a href="index.php"></a></button>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navbar -->

    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="blinking">Be IN, Study in "Pupin"</h1>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </header>
    <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <button class="btnn btnn-one">Location</button>
                        <div id="popup-one" class="popup">
                            <div class="popup__content">
                                <i class="popup__close"></i>
                                <p class="desen-tekst">SETUGS - "Mihajlo Pupin" - Skopje is located near gas station
                                    "Makpetrol" at the entrance of "Madzari". Bus lines: 45, 50, 52, 53, 55, 62, 65

                                </p>
                            </div>
                        </div>
                        <a href="index.php">Home</a><i class="fa fa-angle-right"></i><span>Sign Up</span>
                    </div>
                    <!-- end of breadcrumbs -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <!-----------------GLAVEN DEL-------------------->

                    <div class="text-container">

                        <ul class="list-unstyled li-space-lg indent">
                            <li class="media">
                                <div class="media-body">
                                    <h2><b class="zapisise-reden">1.</b> Choose your direction</h2>
                                </div>
                                <br>
                                <br>
                            </li>
                            <form action="/web/upisi.php" method="POST" id="contact_form">
                                <div class="gender-details">
                                    <h4>Four years</h4>

                                    <input type="radio" name="struka" value="kta" id="dot-1">
                                    <input type="radio" name="struka" value="telekomunikacii" id="dot-2">
                                    <input type="radio" name="struka" value="energeticar" id="dot-3">
                                    <div class="category">
                                        <label for="dot-1">
                                            <span class="dot one"></span>
                                            <span class="gender">Еlectrical technician for Computer technology and
                                                automation</span>
                                        </label>
                                        <label for="dot-2">
                                            <span class="dot two"></span>
                                            <span class="gender">Еlectrical technician for Electronics and
                                                telecommunications</span>
                                        </label>
                                        <label for="dot-3">
                                            <span class="dot three"></span>
                                            <span class="gender">Еlectrical technician for energetics</span>
                                        </label>
                                    </div>

                                    <hr class="line-heading">

                                    <h4>Three years</h4>
                                    <input type="radio" name="struka" value="elektromehanicar" id="dot-4">
                                    <input type="radio" name="struka" value="monter" id="dot-5">

                                    <div class="category">
                                        <label for="dot-4">
                                            <span class="dot four"></span>
                                            <span class="gender">Electromechanic</span>
                                        </label>
                                        <label for="dot-5">
                                            <span class="dot five"></span>
                                            <span class="gender">Electromonter for electroenergetic networks(EVN)</span>
                                        </label>
                                    </div>

                                    <hr class="line-heading">

                                    <h4>Part-time</h4>
                                    <input type="radio" name="struka" value="vonreden" id="dot-6">
                                    <div class="category">
                                        <label for="dot-6">
                                            <span class="dot six"></span>
                                            <span class="gender">Part-time student</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="user-details">
                                    <br>
                                    <li class="media">
                                        <div class="media-body">
                                            <h2> <b class="zapisise-reden">2.</b> Enter your information</h2>
                                        </div>
                                    </li>
                                    <div class="input-box">
                                        <span class="details">First Name</span>
                                        <input type="text" name="firstname" placeholder="Enter your firstname" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Last Name</span>
                                        <input type="text" name="lastname" placeholder="Enter your lastname" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Email</span>
                                        <input type="text" name="email" placeholder="Enter your email" required>
                                    </div>
                                    <!----->
                                    <div class="input-box">
                                        <span class="details">Phone Number</span>
                                        <input type="text" name="number" placeholder="Enter your phone number" required>
                                    </div>
                                </div>

                                <div class="button" id="isprati">
                                    <input type="submit" name="insert" value="Submit">
                                </div>
                            </form>
                        </ul>
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of text container -->
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>SETU - "Mihajlo Pupin" - Skopje</h4>
                        <p class="white">Let your future develop with us, and we will make technology your best friend.
                            Take a step forward in your future career.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Social links</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <span class="fa-stack">
                                    <a href="https://www.facebook.com/mihajlo.pupin.skopje" target="_blank">
                                        <i class="fab fa-facebook-f fa-stack-2x"></i>
                                    </a>
                                </span>
                            </li>
                            <span class="fa-stack">
                                <a href="https://www.youtube.com/channel/UCmIdl1dDac00yN0pggUVP5w?view_as=subscriber"
                                    target="_blank">
                                    <i class="fab fa-youtube fa-stack-2x"></i>
                                </a>
                            </span>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Useful links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="https://lms.schools.mk/" target="_blank">National
                                    platform</a>
                            </li>
                            <li>
                                <a class="white" href="https://ednevnik.edu.mk/" target="_blank">E-diary</a>
                            </li>
                            <li class="media">
                                <a class="white" href="http://mon.gov.mk/" target="_blank">MON</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Location</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                            <a style="color: #fff;">Municipality of Gazi Baba
                                    st. "Blagoja Stefkovski" No. 6 | 1000
                                    Skopje, Republic of Macedonia</a>
                            </li>

                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">All rights reserved © 2021</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Scripts -->
    <script src="js/popup.js"></script>
    <script src="js/prijavise.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/morphext.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>