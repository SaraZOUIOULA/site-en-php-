<?php

include 'layout/header.php';
$lien='';
if(isset(explode ("?" , $_SERVER['REQUEST_URI'])[1])){
    $lien="?".explode("?",$_SERVER['REQUEST_URI'])[1];
    var_dump($lien);
}

switch($_SERVER['REQUEST_URI']){
    case '/'.$lien:
        include 'controller/home_controller.php';
        break;
    case '/inscription'.$lien:
        include 'controller/inscription_controller.php';
        break;
    case '/connexion'.$lien:
        include 'controller/connexion_controller.php';
        break;
    case '/page_contact'.$lien:
        include 'controller/page_contact_controller.php';
        break;
    case '/liste-logs'.$lien:
        include 'controller/logs_controller.php';
        break;
    default:
        include 'controller/erreur_controller.php';
        break;
}

include 'layout/footer.php';

?>