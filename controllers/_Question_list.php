<?php
    require_once("db_connect.php");
    session_start();
    
    if( isset($_GET["current_user"]) && $_GET["current_user"] && isset($_SESSION["weird_session_name"]["username"]) ){
        
        $singleUserQuery = "SELECT DISTINCT a.Question, (SELECT Answer FROM _Vote WHERE id = (SELECT min(id) FROM _Vote) AND Q_id = Q_id) as Answer1, (SELECT Answer FROM _Vote WHERE id = (SELECT max(id) FROM _Vote) AND Q_id = Q_id) as Answer2 FROM _Question a INNER JOIN _Vote b ON b.Q_id = a.id";
        
        $result = $conn->query($singleUserQuery);
        
        if( $result->num_rows > 0){
            $temp = [];
            while($currentUserRow =$result->fetch_assoc()){
                array_push($temp, $currentUserRow);
            }
            $data = [
                "code" => 200, 
                "message" => "success",
                "data" => $temp
                ];
        }else{
            $data = [
                "code" => 800, 
                "message" => "error",
                "data" => "No results"
                ];
        }
    }
    
    $json_response = json_encode($data);
    $conn->close();
    echo $json_response;
    
?>