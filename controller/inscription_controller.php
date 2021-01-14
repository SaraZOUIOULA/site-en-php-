<?php

if(!isset($_POST['submit'])){
    $inscription = fopen('logs/inscriptions'.date('d-m-Y').'.txt', 'a+');
    fputs($inscription, date("[d-m-Y | H:i]")." Un inconnu a visité la page d'inscription \n");
}

include './view/inscription_view.php';

?>