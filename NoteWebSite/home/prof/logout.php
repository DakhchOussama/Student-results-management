<?php

	session_start();
    session_destroy();
    unset($_SESSION["username_P"]);
    unset($_SESSION["ProfId"]);
   

    header('Location: http://localhost:8080/NoteWebSite/authentification/login.php');

?>