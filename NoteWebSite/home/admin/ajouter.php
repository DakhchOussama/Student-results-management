<!DOCTYPE html>
<html>
<head>
  <title>Ajouter</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="admin.css" >
</head>

<body>
  <div class="header">
    <?php include 'header_prof.php'; ?>
  </div>
  <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#Ajouter_etudiant">Etudiant</a></li>
        <li class="tab"><a href="#Ajouter_Prof">Profisseur</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="Ajouter_etudiant"> 

          <form action="Ajouter_etudiant.php" method="post">
                <div class="top-row">
               
                <div class="field-wrap">
                  <label>
                    ID<span class="req">*</span>
                  </label>
                  <input type="text" name="ETudiantID" required autocomplete="off" />
                </div>
            
                <div class="field-wrap">
                    <label>
                      Password<span class="req">*</span>
                    </label>
                    <input type="password" name="password" required autocomplete="off"/>
                </div>
                </div>

              <div class="field-wrap">
                <label>
                  Nom_Prenom<span class="req">*</span>
                </label>
                <input type="text" name="Nom_Prenom"  required autocomplete="off"/>
              </div>
              
              <div class="field-wrap">
                <label>
                  Filiere<span class="req">*</span>
                </label>
                <input type="text" name="filiere" required autocomplete="off"/>
              </div>

             <div class="field-wrap">
                <label>
                  Niveau<span class="req">*</span>
                </label>
                <input type="text" name="Niveau" required autocomplete="off"/>
              </div>

              <div class="field-wrap">
                <label>
                  N_Telephone<span class="req">*</span>
                </label>
                <input type="Number" name="N_Telephone" required autocomplete="off"/>
              </div>
              <?php 
                if(isset($_COOKIE['success'])){
                  echo '<div class="alert alert-success" role="alert" >'.$_COOKIE['success'].'</div>';
                }
                if(isset($_COOKIE['ID_ERR'])){
                  echo '<div class="alert alert-danger" role="alert" >'.$_COOKIE['ID_ERR'].'</div>';
                }
               ?>
              <button type="submit" class="button button-block"/>AJOUTER</button>
          
          </form>



        </div>
        

        <div id="Ajouter_Prof">   
          <form action="Ajouter_Prof.php" method="post">

           <div class="field-wrap">
            <label>
              ID<span class="req">*</span>
            </label>
            <input type="text"required name="ProfID" autocomplete="off"/>
           </div>

           <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
           </div>

            <div class="field-wrap">
            <label>
              Nom_Prenom<span class="req">*</span>
            </label>
            <input type="text" name="Nom_Prenom" required autocomplete="off"/>
           </div>

            <div class="field-wrap">
            <label>
              N_Telephone<span class="req">*</span>
            </label>
            <input type="Number" name="N_Telephone" required autocomplete="off"/>
           </div>
          
          <div class="field-wrap">
            <label>
              Matiere<span class="req">*</span>
            </label>
            <input type="text" name="Matiere" required autocomplete="off"/>
          </div>
         
          <button class="button button-block"/>Ajouter</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>

</body>
</html>
