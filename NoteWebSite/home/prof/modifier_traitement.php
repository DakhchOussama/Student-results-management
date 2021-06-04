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

	if(isset($_SESSION['idEtud']) and isset($_POST['EtudiantID']) and isset($_POST['EtudiantNote'])){
		
		$sql="UPDATE `note` SET `EtudiantId`='".$_POST['EtudiantID']."',`Note`=".$_POST['EtudiantNote']." WHERE EtudiantId='".$_SESSION['idEtud']."' and ProfID='".$_SESSION['username_P']."'";
		$result = mysqli_query($conn,$sql);
		header('Location: modifier.php');
		setcookie("success","La rocket est bien modifie", time()+(1));

	}else{
		header('Location: modifier.php');
		setcookie("err","SVP remplir tout les champs", time()+(1));
	}
?>