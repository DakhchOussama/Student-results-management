<?php
   session_start();
      define('USER', 'root');
      define('PASSWORD', '');
      define('HOST', 'localhost');
      define('DATABASE', 'system');
       
      try {
          $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
      } catch (PDOException $e) {
          exit("Error: " . $e->getMessage());
      }
        //echo $_POST['username'];

      if (isset($_POST['username']) && isset($_POST['password'])) {
       
          $username = $_POST['username'];
          $password = $_POST['password'];
          //echo $username."/ ".$password;
       
          //select from table etudiant
          $query_Etudiant = $connection->prepare("SELECT EtudiantId,Password,Nom_Prenom  FROM etudiant WHERE EtudiantId=:username and Password=:password");
          $query_Etudiant->bindParam("username", $username, PDO::PARAM_STR);
          $query_Etudiant->bindParam("password", $password, PDO::PARAM_STR);
          $query_Etudiant->execute();
          $result_Etudiant = $query_Etudiant->fetch(PDO::FETCH_ASSOC);
          /*-----------------------------------------------------------------*/

          //select from table admin
          $query_admin = $connection->prepare("SELECT AdminID,password FROM admin WHERE AdminID=:username and password=:password");
          $query_admin->bindParam("username", $username, PDO::PARAM_STR);
          $query_admin->bindParam("password", $password, PDO::PARAM_STR);
          $query_admin->execute();
          $result_admin = $query_admin->fetch(PDO::FETCH_ASSOC);
          /*-----------------------------------------------------------------*/

          //select from table profisseur
          $query_prof= $connection->prepare("SELECT ProfID,password,Nom_Prenom,Matiere FROM profisseur WHERE ProfID=:username and password=:password");
          $query_prof->bindParam("username", $username, PDO::PARAM_STR);
          $query_prof->bindParam("password", $password, PDO::PARAM_STR);
          $query_prof->execute();
          $result_prof = $query_prof->fetch(PDO::FETCH_ASSOC);
          /*-----------------------------------------------------------------*/



          if (!$result_prof && !$result_Etudiant && !$result_admin ) {
              header('Location: login.php');
              setcookie("login_error","Username or password is wrong", time()+(1));
          } else {

              if ($password==$result_Etudiant['Password'] && $username==$result_Etudiant['EtudiantId']) {

                  $_SESSION["username_E"]=$result_Etudiant['Nom_Prenom'];
                  //$_SESSION["photo"]=$result_Etudiant['user_image'];
                  $_SESSION["EtudiantId"]=$result_Etudiant['EtudiantId'];
                  //echo $_SESSION["username_E"];
                  header('Location: http://localhost:8080/NoteWebSite/home/index.php');
                  
              }else if ($password==$result_prof['password'] && $username==$result_prof['ProfID']){

                  $_SESSION["username_P"]=$result_prof['Nom_Prenom'];
                  //$_SESSION["photo"]=$result_prof['user_image'];
                  $_SESSION["ProfId"]=$result_prof['ProfID'];
                  $_SESSION['Matiere']=$result_prof['Matiere'];
                  header('Location: http://localhost:8080/NoteWebSite/home/prof/prof.php');
                  //echo $_SESSION["username_P"];
              }else if($password==$result_admin['password'] && $username==$result_admin['AdminID']){

                  $_SESSION["username_A"]="Admin";
                  //$_SESSION["photo"]=$result_admin['user_image'];
                  //echo $_SESSION["username_A"];
                  header('Location: http://localhost:8080/NoteWebSite/home/admin/admin.php');

              } else {
                  //header('Location: login.php');
              }
          }
      }
 

       
?>