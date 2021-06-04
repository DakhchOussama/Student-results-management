<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="profstyle.css" >
    <title>
        ENSA BERRECHID
      </title>
      <link rel = "icon" href = "ENSAb2.png" type = "image/x-icon"> 
  </head>
  <style>
#customer {
  position: relative;
  left:215px;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 600px;
  margin-left: 100px;
  text-align: center;
}

#customer td, #customer th {
  border: 1px solid #ddd;
}

#customer tr:nth-child(even){background-color: #f2f2f2;}

#customer tr:hover {background-color: #ddd;}

#customer th {
  position: relative;
  padding-left: 50px;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #372289;
  color: white;
}
.modification{
  position: relative;
  font-size: 30px;
  text-align: center;
  margin-top: 50px;
  margin-bottom: 30px;
  font-family:"Futura pt", "Futura","Helvetica", "Sans serif";
  color: #483D8B;
}
.bt{
  position: relative;
  background-color:#483D8B;
  border:none;
  width: 60px;  
  height: 30px;
  color: #fff;
  font-size: 13px;
  margin-bottom: 10px;
}

.bt:hover{
  cursor: pointer;
}
.alert{
  width: 600px;
  margin-top: 20px;
  margin-left: 315px;
}
</style>
<body>
     <div class="header">

    <div class="headertop" > 
        <ul id="home">
          <li ><a class="active" href="prof.php">Home</a></li>       
          <li><a href="ajouter.php">AJOUTER</a></li>
          <li><a href="modifier.php">MODIFIER</a></li>  
          <li><a href="logout.php">Logout</a></li>
          <li><p><?php echo "M.".$_SESSION["username_P"]."/".$_SESSION['Matiere']; ?></p></li>               
          <div class="clear"></div>
        </ul>
    </div>