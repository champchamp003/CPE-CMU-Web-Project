<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Senior</title>
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
      </head>
      <body data-spy="scroll">
        <!-- Static navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="../index.html"><img src="../img/logo.png" alt = "img" width = "140"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav scroll-to navbar-right">
                        <li><a href="../admin/index.html">Admin</a></li>
                        <li><a href="#add">Add</a></li>
                        <li><a href="#list">List</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <section id="add" class="about-section" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 center-title text-center">
                        <h3><br>Add</h3>
                        <span class="center-line"></span>
                    </div>
                </div><!--section title-->
                <div class="row">
                  <div class="col-xs-offset-1 col-xs-10">
                <div class="panel panel-default formPanel">
                          <div class="panel-heading bg-color-1 border-color-1">
                            <h3 class="panel-title">นักศึกษาปีที่ 4</h3>
                          </div>
                          <div class="panel-body">
                                <form action="senior_add.php" method="POST" role="form" enctype="multipart/form-data">
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">รหัสนักศึกษา</label>
                                           <input type="text" class="form-control" name="student_id" placeholder="รหัสนักศึกษา" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">ชื่อ</label>
                                           <input type="text" class="form-control" name="firstname" placeholder="ชื่อ" required>
                                        </div>
                                      </div>
                                       <div class="form-group formField">
                                        <div class="col-xs-12">
                                              <label for="">นามสกุล</label>
                                               <input type="text" class="form-control" name="lastname" placeholder="นามสกุล" required>
                                        </div>
                                      </div>
                                      
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                              <label for="">ชื่อเล่น</label>
                                               <input type="text" class="form-control" name="nickname" placeholder="ชื่อเล่น" required>
                                        </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">จบจากโรงเรียน</label>
                                           <input type="text" class="form-control" name="school" placeholder="จบจากโรงเรียน" required>
                                        </div>
                                      </div>
                                      <div class="form-group formField">
                                        <div class="col-xs-12">
                                           <label for="">การเข้าศึษา</label> <br>
                                           <label><input type="radio" name="entrance" value="รับตรง">รับตรง&nbsp;&nbsp;</label>
                                            <label><input type="radio" name="entrance" value="แอดมิชชั่น">แอดมิชชั่น&nbsp;&nbsp;</label>
                                            <label><input type="radio" name="entrance" value="โควตา">โควตา&nbsp;&nbsp;</label>
                                            <label><input type="radio" name="entrance" value="ไม่ระบุ">-ไม่ระบุ-&nbsp;&nbsp;</label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-xs-12">
                                              <label for="">รูปภาพ</label>
                                              <input type="file" name="img" id="img" required>
                                            </div>
                                      </div>
                                      <div class="form-group formField">
                                            <div class="col-xs-12">
                                              <label></label>
                                                <input type="submit" class="btn btn-primary btn-block bg-color-3 border-color-3" value="Submit">
                                            </div>
                                      </div>
                                </form>
                   </div>
                </div>
             </div>  
         </div>
     </div>
 
</section><!--about us-->

<section id="list" class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 center-title text-center">
                <h3>List</h3>
                <span class="center-line"></span>
            </div>
        </div><!--section title-->
        <div class="row">
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "group6";
            $conn = new mysqli($servername, $username, $password,$dbname);
            mysqli_set_charset($conn, "utf8");

    // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT * FROM senior";
            $result = $conn->query($sql);
            ?>
            <div class="col-xs-12">
                <h3 class="color-1">จำนวนนักศึกษาปีที่ 4 รวมทั้งสิ้น <?=$result->num_rows?> คน</h3>
                <div class="table-responsive">
                  <table class="table table-curved">
                    <thead>
                      <tr>
                        <th class="col-sm-2"><h4>Student ID</h4></th>
                        <th class="col-sm-2"><h4>ชื่อ</h4></th>
                        <th class="col-sm-2"><h4>นามสกุล</h4></th>
                        <th class="col-sm-2"><h4>ชื่อเล่น</h4></th>
                        <th class="col-sm-2"><h4>รูปภาพ</h4></th>
                        <th class="col-sm-2"><h4>แก้ไข</h4></th>
                        <th class="col-sm-2"><h4>ลบ</h4></th>
                    </tr>
                </thead>
                <tbody>
                   <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?=$row["student_id"]?></td>
                        <td><?=$row["firstname"]?></td>
                        <td><?=$row["lastname"]?></td>
                        <td><?=$row["nickname"]?></td>
                        <td><img src="<?=$row["img"]?>" width="48" >
                        <td><a href="senior_form_edit.php?id=<?=$row["id"]?>"><i class="fa fa-pencil-square-o"></td>
                        <td><a href="senior_delete.php?id=<?=$row["id"]?>"><i class="fa fa-times"></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div><?php $conn->close(); ?><!--img-service box-->
</div>
</div>  
</section><!--about us-->

<!-- Bootstrap js-->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!--easing plugin for smooth scroll-->
<script src="../js/jquery.easing.1.3.min.js" type="text/javascript"></script>
<script src="../js/jquery.backstretch.min.js" type="text/javascript"></script>
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


