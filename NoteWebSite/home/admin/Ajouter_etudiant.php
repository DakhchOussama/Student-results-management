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

	$sql_="Select EtudiantId from etudiant where EtudiantId ='".$_POST['ETudiantID']."'";
	$result = mysqli_query($conn,$sql_);
	$row = mysqli_fetch_assoc($result);
	//echo $row['EtudiantId'];

	if(!$row['EtudiantId']){

		if(isset($_POST['ETudiantID']) and isset($_POST['password']) and isset($_POST['Nom_Prenom']) and isset($_POST['filiere']) and isset($_POST['Niveau']) and isset($_POST['N_Telephone']))
		{
				$sql="INSERT INTO `etudiant`(`EtudiantId`, `Password`, `Nom_Prenom`, `FiliereID`, `Niveau`, `N_Telephone`) VALUES('".$_POST['ETudiantID']."','".$_POST['password']."','".$_POST['Nom_Prenom']."','".$_POST['filiere']."','".$_POST['Niveau']."',".$_POST['N_Telephone'].")";

							if ($conn->query($sql) === TRUE) {
							    echo "New record created successfully";
							    setcookie("success","New record created successfully", time()+(1));
							    header('Location: ajouter.php');
							} else {
							    echo "Error: " . $sql . "<br>" . $conn->error;
							}
			}else{
				header('Location: ajouter.php');
				setcookie("Filling_ERR","you should fill all input", time()+(1));
					
			}
							
			
	}else{
		header('Location: ajouter.php');
		setcookie("ID_ERR","you had insert an existing ID", time()+(1));	
		//echo "nothing";	
	}		
	

?>