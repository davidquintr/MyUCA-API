<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once '../connection.php';
        $id = $_POST["id"];
        $my_query = "delete from coordinador where id =".$id;
        $result = $mysql->query($my_query);

        if($result == false){
            echo 'error';
        }
        
    } else {
        echo 'unknown error';
    }

?>