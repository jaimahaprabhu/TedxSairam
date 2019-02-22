<?php
	session_start();
	ob_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			User ID Validation
		</title>
	
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	<body>
	  


		<?php
	    $servername = "localhost";
    $username = "tedxsrisairam_ssec";
    $password = "e5cs051@";
    $dbname = "tedxsrisairam_jm";
    // Create connection
    
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} else {
		//echo "connected";	}
			$phone = $_POST["phone"];
				$phone1 = $_POST["phone1"];
			$name = $_POST["name"];
			$name1 = $_POST["name1"];
			$college = $_POST["college"];
			$dept = $_POST["dept"];
		    $email = $_POST["email"];
        $year=$_POST["year"];
	       $sql= "INSERT INTO `registration` (`name`,`name1`,`email`,`phone`,`phone1`,`dept`,`year`,`college`) VALUES ('$name','$name1','$email','$phone','$phone1','$dept','$year','$college')" ;		
		if ($conn->query($sql) === TRUE) {
    print "Thankyou !!! you registered successfully.you will be confirmed by confirmation mail . go to home page" ;	
    		
		header("Location: ../inex.html?status='success'");

}
	}

		?>
	 
	</body>
</html>

