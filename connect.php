<?php

	$name = $_POST['name'];
	$age = $_POST['age'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
    $goal = $_POST['goal'];
	// Database connection
	$conn = new mysqli('localhost','root','','login');
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users2(name, age, height, weight, goal) values(?, ?, ?,?, ?)");
	$stmt->bind_param("siiis", $name, $age, $height, $weight, $goal);
	$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

	}
	
?>
