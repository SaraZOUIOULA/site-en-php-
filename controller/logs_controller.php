<?php

function myReadDir($path) {
    $content = scandir($path);
    $dir = [];
 
    foreach ($content as $elem_name) {
        $elem = [];
        $elem['name'] = $elem_name;
        if (is_dir($path.'/'.$elem_name) && $elem_name != '.' && $elem_name != '..') {
            $elem['type'] = 'directory';
            $elem['content'] = myReadDir($path.'/'.$elem_name);
            $dir[] = $elem;
        }
        elseif ($elem_name != '.' && $elem_name != '..') {
            $elem['type'] = 'file';
            $dir[] = $elem;
        }
 
    }
    return $dir;
}

$listLogs=myReadDir('D:\MAMP\htdocs\logs');
//var_dump($listLogs);

include'./view/logs_view.php';
?>