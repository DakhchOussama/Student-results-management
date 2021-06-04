
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
          </ul>

        <div class="clear"></div>
    </div>
      


    <div class="hea" id="home">
      <div class="logo" ><a href="index.html"><img width="300px" src="image/EnsaLogo.png"/></a> </div>

      
       <div class="profil_box">
        <?php 
          /*if(isset($_SESSION["photo"]) ){
           echo '<img src="data:image/jpg;base64,'.base64_encode( $_SESSION["photo"]).'" alt="profil_picure" class="profil_picure" /></br><a href="#" class="username">'.$_SESSION["username_E"].'</a>'; 
          }
          else{*/ echo '<img src="photos_profile/default.png" alt="profil_picure" class="profil_picure"/></br><p class="username">'.$_SESSION["username_E"].'</p>';
          //} 
          ?>
        
        </div>
        
        </div>
      
     <div class="headerbottom" >
      <div class="topnav">
         
      </div>   
    </div>
      

    </div>
