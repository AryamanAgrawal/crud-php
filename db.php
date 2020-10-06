<?php
    $db = new Mysqli;
    $db->connect('localhost', 'root', '', 'crud');
    if(!$db){
        echo "Not connected to Database";
    }
?>