<?php 

if(!empty($_GET['id'])){

    include_once('../serve/config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM users WHERE   id = $id";
    $res = $conn->query($sqlSelect);
    
    if($res->num_rows > 0){

        $sqlDelete = "DELETE FROM users  WHERE id = $id";
        $resultDelete = $conn->query($sqlDelete);
        
        }
    }
    header('Location: system.php');


?>