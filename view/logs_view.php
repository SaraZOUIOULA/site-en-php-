<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs</title>
</head>
<body>
    <h1>Liste Logs </h1>
    <p>voilà la liste des gens qui ont visité les pages d'incription et de connextion :</p>
    <?php
    if(isset($_POST['modifier']) && isset($_POST['text'])  &&isset($_POST['file'])){
        file_put_contents('./logs/'.$_POST['file'],date("[d-m-Y | H:i]").$_POST['text'].'<br>', FILE_APPEND);
    }
    if(isset($_POST['supprimer']) && isset($_POST['nbLigne']) && isset($_POST['file']) ){
        $file = file('./logs/'.$_POST['file']);
        unset($file[$_POST['nbLigne']-1]);
        file_put_contents('./logs/'.$_POST['file'],implode("", $file));
    }
    foreach($listLogs as $log){
       
        echo"<form action='/liste-logs'  method='POST'>";
        echo"<fieldset>";

        $myfile = fopen('./logs/'.$log['name'], "r");
        if ($myfile) {
            $i=0;
            while (($line = fgets($myfile)) !== false) {
                $i++;
                echo "<span>ligne ".$i." | </span>".$line."<br>";
            }
        fclose($myfile);
        }
        echo"</fieldset>";
        echo"<input type='text' display='hidden' value='".$log['name']."' name='file'>";
        echo"<input type='textarea' name='text'>";
        echo"<input type='submit' value='modifier' name='modifier'>";
        echo " ";
        echo"<input type='number' name='nbLigne' min='0'>";
        echo"<input type='submit' value='supprimer' name='supprimer'>";
        echo"</form>";
        echo"<br>";}
    ?>
</body>
</html>