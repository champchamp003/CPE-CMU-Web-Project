
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
	
  $sql = "SELECT * FROM freshmen where id='".$_GET["id"]."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc()
	
	
?>
    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
      <div class="container">
            <div class="row">
                  <div class="col-sm-4 col-xs-12">
                    <div class="freshmenPhoto">
                      <img src="<?=$row["img"]?>" alt="img class="img-rounded img-responsive">
                    </div>
                  </div>
                  <div class="col-sm-8 col-xs-12">
                    <div class="freshmenInfo">
                          <div class="freshmenProfession bg-color-3">รหัสนักศึกษา</div>
                          <div class="professionDetails"><?=$row["student_id"]?></div>
                          <h3><?=$row["firstname"]?> <?=$row["lastname"]?></h3>
                          <div class="freshmenProfession bg-color-3">ชื่อเล่น</div>
                          <div class="professionDetails"><?=$row["nickname"]?></div>
                          <div class="freshmenProfession bg-color-4">เพศ</div>
                          <div class="professionDetails"><?=$row["gender"]?></div>
                          <div class="freshmenProfession bg-color-6">อายุ</div>
                          <div class="professionDetails"><?=$row["age"]?></div>
                          <div class="freshmenProfession bg-color-7">โรงเรียน</div>
                          <div class="professionDetails"><?=$row["school"]?></div>
                          <div class="freshmenProfession bg-color-8">เข้าศึกษา</div>
                          <div class="professionDetails"><?=$row["entrane"]?></div>
                    </div>
                  </div>
            </div>
      </div>
    </section>
<?php $conn->close(); ?>
    