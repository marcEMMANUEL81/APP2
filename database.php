<?php

try {
    $conn = mysqli_connect('localhost', 'root', '', 'appsiteweb');

    $NOM = $_POST['userName'];
    $PREN = $_POST['userSurname'];
    $MAIL = $_POST['userMail'];
    $PASSWORD = $_POST['userPassword'];
    $CELL = $_POST['userCell'];
    
    $req = "INSERT INTO utilisateur (userName, userSurname, userMail, userPassword, userCell) values ('$NOM', '$PREN', '$MAIL', '$PASSWORD', '$CELL')";
    
    $res = mysqli_query($conn, $req);
    header('Location: index.html?success=Inscription Réussie');

} catch (Exception $e) {
    die('Erreur: ' . $e -> getMessage());
}


?> 