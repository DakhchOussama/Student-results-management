

<?php
				$con=mysqli_connect("localhost","root","","system");
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				$a="L123";
				$result = mysqli_query($con,"SELECT Note,Nom_Prenom FROM note,profisseur where Etudiantid='".$a."'and note.ProfID=profisseur.ProfID" );	

						//."and note.ProfID=profisseur.ProfID" ,Nom_Prenom

				while($row = mysqli_fetch_array($result))
				{
					echo $row['Note']." ";
					
				}
				while($row = mysqli_fetch_array($result))
				{
					echo $row['Nom_Prenom']." ";
				}

				mysqli_close($con);

				
?>