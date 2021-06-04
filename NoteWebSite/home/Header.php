
<?php 
  session_start();
?>


  <body>
<div class="header">

    <div class="headertop" > 
          <ul id="home">
            
              <li class="homel"><a href="index.php">Home</a></li>
              <li><a href="Calendriet.php">Calendriet</a></li>
              <li><a href="Note.php">Note </a></li>
              <li class="logout"><a href="Logout.php">Logout</a></li>
              
              <div class="social">
                <li ><a href="https://web.facebook.com/LÉcole-Nationale-des-Sciences-Appliquées-de-Berrechid-231100540271005/?_rdc=1&_rdr" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-youtube"></a></li>
              </div>
                  
        <div class="clear"></div>
          </ul>

        <div class="clear"></div>
    </div>
      


    <div class="hea" id="home">
      <div class="logo" ><a href="index.html"><img width="300px" src="image/EnsaLogo.png"/></a> </div>

      
       <div class="profil_box">
        <?php 
          //echo "<p>".$_SESSION["username_E"]."</p>";
          if(isset($_SESSION["photo"]) ){
           echo '<img src="data:image/jpg;base64,'.base64_encode( $_SESSION["photo"]).'" alt="profil_picure" class="profil_picure" /></br><a href="#" class="username">'.$_SESSION["username_E"].'</a>'; 
          }
          else{ echo '<img src="photos_profile/default.png" alt="profil_picure" class="profil_picure"/></br><p class="username">'.$_SESSION["username_E"].'</p>';
          } 
          ?>
        
        </div>
        
        </div>
      
     <div class="headerbottom" >
      <div class="topnav">
         
      </div>   
    </div>
      

    </div>
