<?php
    
    $valid_users = Array(
        "email" => "test@gmail.com", 
        "password" => "12345"
        );
    
    //Expecting a POST call
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
        if(isset($_POST["email_info"]) && isset($_POST["password_info"])){
            
            if($valid_users["email"] == $_POST["email_info"] && $valid_users["password"] == $_POST["password_info"]){ 
                $_SESSION["user"] = $_POST["email_info"];
                
                $data = [
                    "code" => 200, 
                    "message" => "success",
                    "data" => $_POST["email_info"]
                    ];
            }else{
                $data = [
                    "code" => 800, 
                    "message" => "error",
                    "data" => "Invalid information"
                    ];
            }
        }
        echo json_encode($data);   
        
    }else{
        header('Location: /');    
    }
    
    //$_POST
    
    
    //Validate data from POST

    //Reply with SUCCESS or FAILURE
?>