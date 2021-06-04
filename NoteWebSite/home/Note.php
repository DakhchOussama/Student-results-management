
		<?php include'Header.php'?>
        <title>note</title>
    <link rel="stylesheet" href="notestyle.css">
    <link rel="stylesheet" href="css/style-index.css" >
    <link rel="stylesheet" type="text/css" href="css/notestyle.css">
    
    </head>
    <body>
		<?php		
				$con=mysqli_connect("localhost","root","","system");
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
					

				$result_branch=mysqli_query($con,"select NomFiliere FROM filiere 
												 where FiliereID=(select FiliereID 
												 				from etudiant 
												  				where 
												  				EtudiantId ='".$_SESSION["EtudiantId"]."')"
											);

				
				//$result=mysqli_query($con,"select FiliereID from etudiant");
				$branch = mysqli_fetch_array($result_branch);
				 //echo $row['FiliereID']; 
		  	?>

			
	    	<table  class="table">
		   	<tr >
		   		<th class="thead2">Féliére</th>
		   		<!-- Student Branch -->
		   		<th colspan="13" class="thead1"><?php echo $branch['NomFiliere']; ?></th> 
		   	</tr>		

			  <tr >
			  	<th class="thead2">LES MODULES</th>
			  	<!-- Modules -->
			  	<?php
				    $result_Module=mysqli_query($con,"select Nom FROM modules 
														 where FiliereID=(select FiliereID 
														 				from etudiant 
														  				where 
														  				EtudiantId ='".$_SESSION["EtudiantId"]."')");
				    while($module=mysqli_fetch_array($result_Module)){
		    	?>
			   <th class="thead4" colspan="3"><?php echo $module['Nom']; ?></th>
			    <!-- <th class="thead4" colspan="3">#####</th>
			    <th class="thead4" colspan="3">#####</th>
			    <th class="thead4" colspan="3">#####</th>-->
			<?php } ?>
			  </tr>
			    	
		  	<tr class="tbody">
			  	<!-- les élèments des modules -->
			    <th class="thead2">LES ELEMENTS DES MODULES</th>
			    	<?php
			    		$result_Matiere=mysqli_query($con,"select NomMatiere,MatiereID FROM matiere 
														 where FiliereID=(select FiliereID 
														 				from etudiant 
														  				where 
														  				EtudiantId ='".$_SESSION["EtudiantId"]."')");

			    		while($Matiere=mysqli_fetch_array($result_Matiere)){

			    			if (isset($Matiere['MatiereID'])) {
			    				echo "<th>".$Matiere['NomMatiere']."</th>";	
			    			}else{
			    				echo "<th>######</th>";
			    			}
			    		}
			    	?>
			    
				<!--<th>######</th>
			    <th class="thead3">#####</th>
			    <th>#####</th>
			    <th class="thead3">#####</th>
			    <th>#####</th>
			    <th class="thead3">#####</th>
			    <th>#####</th>
			    <th class="thead3">#####</th>
			    <th>#####</th>
			    <th class="thead3">#####</th>
			    <th>#####</th>-->
			    
		  </tr> 
		  <tr class="tbody">
		  	<!-- Note-->
		    <th class="thead2">Note</th>
		    <?php 
			    $result = mysqli_query($con,"SELECT Note FROM note where Etudiantid='".$_SESSION["EtudiantId"]."'" );

			    while($row = mysqli_fetch_array($result))
				{ 
					if (isset($row['Note'])) {

						echo "<td>". $row['Note']."</td>";
					}
			?> 
		    
		    
		   <!-- <td class="thead3">#####</td>
		    <td>#####</td>
		    <td class="thead3">#####</td>
		    <td>#####</td>
		    <td class="thead3">#####</td>
		    <td>#####</td>
		    <td class="thead3">#####</td>
		    <td>#####</td>
		    <td class="thead3">#####</td>
		    <td>#####</td>-->
		  <?php } ?>
		  <tr class="tbody">
		  	<!-- Profisseur -->
		  	
		    <th class="thead2">PROFISSEUR</th>
		    
		    <td class="thead3"><?php   //echo $row['Nom_Prenom']; ?></td>
		    <!--<td>#####</td>
		    <td class="thead3">#####</td>
		    <td>#####</td>
		    <td class="thead3">#####</td>
		    <td>#####</td>
		    <td class="thead3">#####</td>
		    <td>#####</td>
		    <td class="thead3">#####</td>
		    <td>#####</td>
		    <td class="thead3">#####</td>
		    <td>#####</td>-->
		  </tr> 
		  <?php 
				//} 
		  		mysqli_close($con); 
		  ?> 
		</table>












		<!--<?php
				/*$con=mysqli_connect("localhost","root","","system");
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				$result = mysqli_query($con,"SELECT nom,note FROM test" );
				

			  $items = 0;
			  
			 if (mysqli_num_rows($result) > 0) {

			 echo '<table border="1">';
			 while($row = mysqli_fetch_array($result)){

			 $note = $row['note'];
			 $name=$row['nom'];
			        echo "<tr>";
			       

			                    echo "<td align='center'>".$name."</td>";
			                   
			}//end while loop
			     echo "</tr>";
			      echo "<tr>";
			       
								echo "<td align='center'>".$note."</td>";
			                    
			      echo "</tr>";
			    echo '</table>';
			}else{ echo 'no records found'; }*/

		?>-->
	</body>

</html>