<?php

$passwordHash='$2y$10$SCOanWrhmvbwGfTcMCc/5eq1co1ZfkF4TuO5sarF.vs/PcCwAckQG';
if (isset($_POST['email'])) {
     
    if (
            password_verify($_POST['mot_de_passe'], $passwordHash)
            &&
            $_POST['email'] === 'mail@mail.fr'
       ) {
        $_SESSION['firstName']="Bernard";
        $_SESSION['lastName'] ="DUBOIS";
        echo 'Bienvenue '.$_SESSION['firstName'].' '.$_SESSION['lastName'];
        $myLogs = fopen('logs/connexion'.date('d-m-Y').'.txt', 'a+');
        fputs($myLogs, date("[d-m-Y | H:i]").' '.$_SESSION['firstName'].' '.$_SESSION['lastName']. " s'est connecté \n");
    }
}else {
    $myLogs = fopen('logs/connexion'.date('d-m-Y').'.txt', 'a+');
    fputs($myLogs, date("[d-m-Y | H:i]")." Inconnu a visité la page \n");
}

include './view/connexion_view.php';
?>