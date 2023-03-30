<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once '../connection.php';
        $id = $_POST["id"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $fechaNac = $_POST["fechaNac"];
        $titulo = $_POST["titulo"];
        $email = $_POST["email"];
        $facultad = $_POST["facultad"];

        $my_query = "UPDATE coordinador SET nombres = '".$nombres."', apellidos = '".$apellidos."', fechaNac = '".$fechaNac."', titulo = '".$titulo."', email = '".$email."', facultad = '".$facultad."' WHERE id = ".$id;
        $result = $mysql->query($my_query);

        if($result === false){
            echo 'error';
            echo $result;
        }
    } else {
        echo 'unknown error';
    }

?>