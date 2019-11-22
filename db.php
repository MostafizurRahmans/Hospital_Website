<?php 
	$dep = $doc = $name = $phone = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

  		$dep = test_input($_POST['info_form_dep']);
  		$doc = test_input($_POST['info_form_doc']);
  		$name = test_input($_POST['name']);
  		$phone = test_input($_POST['phone']);
  		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "hospital";

	//Connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	if (mysqli_connect()){
			# code...
			
			$sql = "INSERT into appointment (departmentName,doctorName,patientName,phone) values(?, ?, ?, ?)";
			//Prepare Statement
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sssi", $dep, $doc, $name, $phone);
			$stmt->execute();
			$stmt->close();
			$conn->close();
			echo "<script type='text/javascript'>
				  alert('You have got an Appointment.').onClick=window.location.replace('index.php');
			  	  </script>$doc";
			}
	}
  	function test_input($data) {
  		if(empty($data)){
  			echo "<script type='text/javascript'>
					alert('All fields are required').onClick=window.location.replace('index.php');
			  	 </script>";
			
  		}else{
  			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
  		}

  		
	}





/*
$dep = $_POST['info_form_dep'];
$doc = $_POST['info_form_doc'];
$name = $_POST['name'];
$phone = $_POST['phone'];

	if(!empty($dep) || !empty($doc) || !empty($name) || !empty($phone)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "hospital";

		//Connection

		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
		if (mysqli_connect()){
			# code...
			echo "Connected";
			$sql = "INSERT into appointment (departmentName,doctorName,patientName,phone) values(?, ?, ?, ?)";
			//Prepare Statement
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sssi", $dep, $doc, $name, $phone);
			$stmt->execute();
			$stmt->close();
			$conn->close();
			echo "<script type='text/javascript'>
					
				alert('You have got an Appointment.').onClick=window.location.replace('index.php');
			  </script>$doc";

		}else{

		}
		
	}else{
		echo "<script type='text/javascript'>
				alert('All fields are required');
			  </script>";
		die();
	}
	*/
 ?>