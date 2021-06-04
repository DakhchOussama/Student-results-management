<?php

	session_start();
    session_destroy();
    unset($_SESSION["username"]);
    unset($_SESSION["photo"]);
    unset($_SESSION["EtudiantId"]);

    header('Location: http://localhost:8080/NoteWebSite/authentification/login.php');

?>