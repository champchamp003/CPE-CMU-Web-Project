<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Professor</title>
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- font awesome for icons -->
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="../css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- owl slider css -->
        <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="../css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!-- jQuery UI -->
        <link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css" media="screen">
        <!--lightbox-->
        <link href="../lightbox2/dist/css/lightbox.css" rel="stylesheet">
        <!-- custom css-->
        <link href="../css/restaurant-onepage-dark.css" rel="stylesheet" type="text/css" media="screen">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#"><img src="../img/logo.png" alt = "img" width = "140"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav scroll-to navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#Freshmen">Freshmen</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "phpbasic";
            $conn = new mysqli($servername, $username, $password,$dbname);
            mysqli_set_charset($conn, "utf8");

    // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT * FROM freshman";
            $result = $conn->query($sql);
            ?>
            
        <section id="freshmen" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 center-title text-center">
                        <h3><br>Freshmen</h3>
                        <span class="center-line"></span>
                    </div>
                </div><!--section title-->
                
                <div class="row">
                 <?php while($row = $result->fetch_assoc()): ?>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="img-service-box">
                            <img src="<?=$row["img"]?>" width="200" height="200" class="img-circle " alt="">
                            <span class="center-line"></span>
                            <h3><?=$row["firstname"]?></h3>
                            <h3><?=$row["lastname"]?></h3>
                        </div>
                    </div>
                <?php endwhile; ?>
 
        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>
        <!-- Bootstrap js-->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!--easing plugin for smooth scroll-->
        <script src="../js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="../js/jquery.backstretch1.min.js" type="text/javascript"></script>
        <!--flex slider plugin-->
        <script src="../js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--owl carousel slider js-->
        <script src="../js/owl.carousel.min.js" type="text/javascript"></script>
        <!-- jQuery UI -->
        <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
        <!--pace plugin-->
        <script src="../js/pace.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="../js/wow.min.js" type="text/javascript"></script> 
        <!--popup js-->
        <script src="../lightbox2/dist/js/lightbox.min.js" type="text/javascript"></script>
        <!--cantact form script-->
        <script src="../js/contact_me.js" type="text/javascript"></script>
        <script src="../js/jqBootstrapValidation.js" type="text/javascript"></script>
        <!--restaurant custom js-->
        <script src="../js/restaurant-custom.js" type="text/javascript"></script>

    </body>
</html


