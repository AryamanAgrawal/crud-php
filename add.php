<?php
    include 'db.php';
    
    if(isset($_POST['send'])){
        $name = htmlspecialchars($_POST['task']);  
        $sql = "insert into task (name) value ('$name')";
        $val = $db->query($sql);        
        if($val){
            header('location: index.php');
        }
    }
?>