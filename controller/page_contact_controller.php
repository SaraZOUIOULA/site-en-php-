<?php

if(isset($_POST['prenom']) || isset($_POST['nom'])){
    $inscription = fopen('logs/inscriptions'.date('d-m-Y').'.txt', 'a+');
    fputs($inscription, date("[d-m-Y | H:i]").' '.$_POST['prenom'].' '.$_POST['nom']. " s'est inscrit \n");
}

include './view/page_contact_view.php';

?>