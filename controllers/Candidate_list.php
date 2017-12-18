<?php
    require_once("db_connect.php");
    session_start();
    
    if( isset($_GET["current_user"]) && $_GET["current_user"] && isset($_SESSION["weird_session_name"]["Email"]) ){
        
        $singleUserQuery = "SELECT Email, First_Name, Last_Name, _Role.Role_Name, _City.City_Name";
        $singleUserQuery .= "FROM _Users, _Role, _City ";
        $singleUserQuery.= "WHERE _Users.Role_Id = _Role.id AND _Users.City_Id = _City.id AND _Users.Email = '".$_SESSION["weird_session_name"]["Email"]."';";
        
        $result = $conn->query($singleUserQuery);
        
        if( $result->num_rows > 0){
            $currentUserRow = $result->fetch_assoc();
            
            $data = [
                "code" => 200, 
                "message" => "success",
                "data" => $currentUserRow
                ];
        }else{
            $data = [
                "code" => 800, 
                "message" => "error",
                "data" => "No results"
                ];
        }
        //echo $singleUserQuery;
    }else{
        //ALL USERS
        $anotherQuery = "SELECT Email, First_Name, Last_Name, _Role.Role_Name, _City.City_Name FROM _Users, _Role, _City WHERE _Users.Role_Id = _Role.id AND _Users.City_Id = _City.id;";
        
        $result = $conn->query($anotherQuery);
        
        if( $result->num_rows > 0 ){
    
            $jsonArray = [];
            while($row = $result->fetch_assoc()){
                array_push($jsonArray, $row);
            }
            
            $data = [
                "code" => 200, 
                "message" => "success",
                "data" => $jsonArray
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