<?php
	/**********************image upload***********************/
	$target_dir = "sophomore/";
	$target_file = $target_dir.basename($_FILES["img"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	
	/*************************ตรวจสอบว่าเป็น file ที่ upload เป็นรูปภาพ***********************************/
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	exit(1);
    } else {
    /*******************************ตรวจสอบว่า upload file สำเร็จหรือไม่********************************/
		if (move_uploaded_file($_FILES["img"]["tmp_name"],$target_file)) {
			//echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
			exit(1);
		}
}
	/**********************end image upload**********************/

	
	
	/**************************connect database*********************************/
	
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
	
	$id = $_GET['id'];

	$sql = "UPDATE sophomore 	
			SET img = '$target_file'
			WHERE id=$id " ;
	//$sql = "INSERT INTO freshman (student_id,firstname,lastname,nickname,school,entrance,img)
            //VALUES ('".$_POST["student_id"]."','".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["nickname"]."','".$_POST["school"]."','".$_POST["entrance"]."','".$target_file."')";

	if ($conn->query($sql) === TRUE) {
		header('Location:sophomore_form_edit.php?id='.$id);
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>


  
