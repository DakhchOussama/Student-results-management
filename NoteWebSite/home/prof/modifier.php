<?php 
	
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

	include'header.php'; 
?> 
	<p class="modification">modification de la table du note</p>
	<table id="customer">
	  <tr>
	    <th>Etudiant ID</th>
	    <th>Note</th>
	    <th>Modifier</th>
	  </tr>
	  
	  		<?php
	  			$sql="select * from note where ProfID='".$_SESSION["username_P"]."'";
	  			$result = mysqli_query($conn,$sql);

	  			while($row = mysqli_fetch_assoc($result)){
	  		?>
	  		
	  		<tr>
	  		 <form method="post" action="modifier.php">
	  			<td><input type="hidden" name="id_etud" value="<?php echo $row['EtudiantId'] ?>"><?php echo $row['EtudiantId'] ?></input></td>
	  			<td><input type="hidden" name="Note_etud" value="<?php echo $row['Note'] ?>"><?php echo $row['Note'] ?></input></td>
	  			<td><button class="bt">afficher</button></td>
	  		 </form>
	  		 </tr>
	  		
	  		<?php } 
	  		  if(isset($_POST['id_etud'])){
	  			$_SESSION['idEtud']=$_POST['id_etud']; 
	  		  }
	  		?>
	  		<tr>
	  		 <form method="post" action="modifier_traitement.php" >
	  			<td><input type="text" name="EtudiantID" placeholder="Etudiant ID" value="<?php if(isset($_POST['id_etud'])){ echo $_POST['id_etud']; }?>"required autocomplete="off"></input></td>
	  			<td><input type="text" name="EtudiantNote" placeholder="La note" value="<?php if(isset($_POST['Note_etud'])){ echo $_POST['Note_etud']; }?>"required autocomplete="off"></input></td>

	  			<td><button class="bt">Modifier</button></td>
	  		 </form>
	  		</tr>
  </table>
		
		  <?php
				if(isset($_COOKIE['success'])) {

					echo "<div id='alert' class='alert alert-success' role='alert'>".$_COOKIE['success']."</div>";

				}else if(isset($_COOKIE['err'])){

					echo "<div class='alert alert-danger' role='alert'>".$_COOKIE['err']."</div>";
				}
		  ?>


	      </div>
    </body>
</html>