<?php
    require_once("db_connect.php");
    session_start();
    
    if( isset($_GET["current_user"]) && $_GET["current_user"] && isset($_SESSION["weird_session_name"]["username"]) ){
        
        $singleUserQuery = "SELECT DISTINCT a.id as Q_id, a.Question as Question, (SELECT id FROM _Vote WHERE Q_id = a.id ORDER BY id ASC LIMIT 0, 1) as Aid1, (SELECT Answer FROM _Vote WHERE Q_id = a.id ORDER BY id ASC LIMIT 0, 1) as Answer1, (SELECT id FROM _Vote WHERE Q_id = a.id ORDER BY id DESC LIMIT 0, 1) as Aid2, (SELECT Answer FROM _Vote WHERE Q_id = a.id ORDER BY id DESC LIMIT 0, 1) as Answer2 FROM _Question a";
        
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