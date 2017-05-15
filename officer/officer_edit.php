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

	$sql = "UPDATE officer 	
			SET firstname = '$_POST[firstname]',
			 	lastname = '$_POST[lastname]',
			 	position = '$_POST[position]'
			WHERE id=$id " ;

	//$sql = "INSERT INTO officer (firstname,lastname,position,img)
            //VALUES ('".$_POST["firstname"]."', '".$_POST["lastname"]."','".$_POST["position"]."','".$target_file."')";

	if ($conn->query($sql) === TRUE) {
		header('Location:officer_form_edit.php?id='.$id);
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>


  
