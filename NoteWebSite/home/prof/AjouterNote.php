<?php 
session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "system";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

		if(isset($_POST['EtudiantId'])  and isset($_POST['note']))
		{
				$sql="INSERT INTO `note`(`EtudiantId`, `MatiereID`, `ProfID`, `Note`) VALUES ('".$_POST['EtudiantId']."','".$_SESSION["Matiere"]."','".$_SESSION["username_P"]."',".$_POST['note'].")";

							if ($conn->query($sql) === TRUE) {
							    // echo "New record created successfully";
							    echo $_SESSION["Matiere"];
							    setcookie("success","New record created successfully", time()+(1));
							    header('Location: ajouter.php');
							} else {
							    echo "Error: " . $sql . "<br>" . $conn->error;
							}
			}else{
				//echo "nothing";
				header('Location: ajouter.php');
				setcookie("Filling_ERR","you should fill all input", time()+(1));
					
			}		

?>