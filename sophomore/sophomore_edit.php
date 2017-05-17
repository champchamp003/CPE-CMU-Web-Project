<?php

	/**************************connect database*********************************/
	
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
	
	$id = $_GET['id'];

	$sql = "UPDATE sophomore 	
			SET student_id = '$_POST[student_id]',
				firstname = '$_POST[firstname]',
			 	lastname = '$_POST[lastname]',
			 	nickname = '$_POST[nickname]',
			 	school = '$_POST[school]',
			 	entrance = '$_POST[entrance]'
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


  
