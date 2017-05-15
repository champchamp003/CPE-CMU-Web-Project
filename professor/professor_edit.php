<?php
	
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

	$sql = "UPDATE professor 	
			SET firstname = '$_POST[firstname]',
			 	lastname = '$_POST[lastname]',
			 	position = '$_POST[position]',
			 	university = '$_POST[university]',
			 	specialist = '$_POST[specialist]'
			WHERE id=$id " ;
	// (firstname,lastname,position,university,specialist,img)
 //            =('".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["position"]."','".$_POST["university"]."','".$_POST["specialist"]."','".$target_file."') WHERE id=$id" ;img = $target_file

	if ($conn->query($sql) === TRUE) {
		header('Location:professor_form_edit.php?id='.$id);
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>