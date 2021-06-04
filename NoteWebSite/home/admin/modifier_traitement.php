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

	if(isset($_POST['Password']) and isset($_POST['Nom_Prenom']) and isset($_POST['N_Telephone']) and isset($_POST['Matiere']) and isset($_SESSION['id'])){
		$sql="UPDATE `profisseur` SET `Password`='".$_POST['Password']."',`Nom_Prenom`='".$_POST['Nom_Prenom']."',`N_Telephone`=".$_POST['N_Telephone'].",`Matiere`='".$_POST['Matiere']."' WHERE ProfID='".$_SESSION['id']."'";
		$result = mysqli_query($conn,$sql);
		//$row= mysqli_fetch_array($result);

		//echo $_SESSION['id']."/".$_POST['Password']."/".$_POST['Nom_Prenom']."/".$_POST['N_Telephone']."/".$_POST['Matiere'];
		header('Location: modifier_P.php');
		setcookie("success","La rocket est bien modifie", time()+(1));

	}else{
		header('Location: modifier_P.php');
		setcookie("err","SVP remplir tout les champs", time()+(1));
	}
?>