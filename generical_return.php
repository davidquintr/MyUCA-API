<?php
    $result = $mysql -> query($my_query);
    if($mysql -> affected_rows > 0){
        $json = "[";
        while($row = $result -> fetch_assoc()){
            $json = $json.json_encode($row);
            $json = $json.",";
        }
        $json = substr(trim($json),0,-1);
        $json .= "]";
    } else {
        return;
    }
    echo $json;

?>