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
    <!-- MAIN SECTION -->
     <section class="mainContent full-width clearfix">
          <div class="container">
                <div class="row">
                     <div class="col-xs-12">
                        <h3 class="color-1">จำนวนนักศึกษา <?=$result->num_rows?> คน</h3>
                        <div class="table-responsive">
                              <table class="table table-curved">
                                    <thead>
                                          <tr>
                                                <th class="col-sm-2 bg-color-1">รหัสนักศึกษา</th>
                                                <th class="col-sm-2 bg-color-1">ชื่อ</th>
                                                <th class="col-sm-2 bg-color-2">นามสกุล</th>
                                                <th class="col-sm-2 bg-color-5">ชื่อเล่น</th>
                                                <th class="col-sm-2 bg-color-6">เพศ</th>
                                                <th class="col-sm-2 bg-color-1">อายุ</th>
                                                <th class="col-sm-2 bg-color-2">โรงเรียน</th>
                                                <th class="col-sm-2 bg-color-5">การเข้าศึกษา</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                    	 <?php while($row = $result->fetch_assoc()): ?>
                                    		<tr>
                                            	<td><a href="profile5.php?id=<?=$row["id"]?>"><?=$row["firstname"]?></a></td>
                                            	<td><a href="profile5.php?id=<?=$row["id"]?>"><?=$row["lastname"]?></a></td>
                                                <td><?=$row["position"]?></td>
                                                <td><?=$row["university"]?></td>
                                            </tr>
                                         <?php endwhile; ?>
                                    </tbody>
                               </table>
                       </div>
                  </div>
          </div>
    </section>
<?php $conn->close(); ?>
