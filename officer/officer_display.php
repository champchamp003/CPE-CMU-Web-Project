
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
	
  $sql = "SELECT * FROM officer where id='".$_GET["id"]."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc()
	
	
?>
    <!-- MAIN SECTION -->
    <section class="mainContent full-width clearfix">
      <div class="container">
            <div class="row">
                  <div class="col-sm-4 col-xs-12">
                    <div class="teachersPhoto">
                      <img src="<?=$row["img"]?>" alt="img class="img-rounded img-responsive">
                    </div>
                  </div>
                  <div class="col-sm-8 col-xs-12">
                    <div class="teachersInfo">
                          <h3><?=$row["firstname"]?> <?=$row["lastname"]?></h3>
                          <div class="teachersProfession bg-color-3">ตำแหน่ง</div>
                          <div class="professionDetails"><?=$row["position"]?></div>
                    </div>
                  </div>
            </div>
      </div>
    </section>
<?php $conn->close(); ?>
    