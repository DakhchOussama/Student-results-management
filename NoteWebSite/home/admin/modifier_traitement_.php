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

	if(isset($_SESSION['idE']) and isset($_POST['PASSW']) and isset($_POST['Nom_Pre']) and isset($_POST['Niveau_']) and isset($_POST['N_te']) and isset($_POST['Fil'])){

		$sql="UPDATE `etudiant` SET `Password`='".$_POST['PASSW']."',`Nom_Prenom`='".$_POST['Nom_Pre']."',`FiliereID`='".$_POST['Fil']."',`Niveau`='".$_POST['Niveau_']."',`N_Telephone`=".$_POST['N_te']." WHERE `EtudiantId`='".$_SESSION['idE']."'";

		$result = mysqli_query($conn,$sql);
		header('Location: modifier_E.php');
		setcookie("success","La rocket est bien modifie", time()+(1));
	}else{
		header('Location: modifier_E.php');
		setcookie("err","SVP remplir tout les champs", time()+(1));	
	}

?>