<?php include'header.php'; ?> 

	<section class="login-page">
  	 <form method="post" action="AjouterNote.php">
  	 	 <div class="box">
  	 	 	   <div class="form-head">
  	 	 	   	  <h2>Ajouter Une note</h2>
  	 	 	   </div>
  	 	 	   <div class="form-body">
  	 	 	   	  <input type="text" name="EtudiantId" placeholder="ID d'etudiant" required autocomplete="off"/>
                  <input type="text" name="note" placeholder="Note" required autocomplete="off"/> 
  	 	 	   </div>
  	 	 	   <div class="form-footer">
  	 	 	   	  <button type="submit">Ajouter</button>
  	 	 	   </div>
  	 	 </div>
  	 </form>
  </section>
      </div>
    </body>
</html>