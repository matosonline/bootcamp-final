<?php

    require_once("../controllers/db_connect.php");
    session_start();

        //ALL USERS
        $anotherQuery = "SELECT * FROM _Role WHERE id=1;";
        
        $result = $conn->query($anotherQuery);
        
        if( $result->num_rows > 0 ){
    
            $jsonArray = [];
            while($row = $result->fetch_assoc()){
                array_push($jsonArray, $row);

            }
            
            $data = [
                "code"      => 200, 
                "message"   => "success",
                "data"      => $jsonArray
                ];
            
        }else{
            $data = [
                "code"      => 800, 
                "message"   => "error",
                "data"      => "No results"
                ];
        }

    $json_response = json_encode($data);
    $conn->close();
    echo $json_response;
    
?>