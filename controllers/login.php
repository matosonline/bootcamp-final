<?php
    require_once("db_connect.php");
    session_start();
    
    //Validated method POST (if GET, user is redirected to home page)
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        //Validated the information inside the POST variable (email & password)
        if(isset($_POST["email_info"]) && isset($_POST["password_info"])){
            
            $username   = $_POST["email_info"];
            $password   = $_POST["password_info"];
            
            $newQuery = "SELECT id, Email, First_Name, Last_Name, Role_Id FROM _Users WHERE _Users.Email = '$username' AND _Users.password = '$password';";
            
            $result = $conn->query($newQuery);
            
            //Validated email & password against "database"
            if($result->num_rows > 0){
                
                $row = $result->fetch_assoc();
                
                //Created the session (if user valid)
                if(!isset($_SESSION["weird_session_name"]))
                {
                    $_SESSION["weird_session_name"] =   [
                                                            "username"  => $row["Email"],
                                                            "role_id"   => $row["Role_Id"],
                                                            "firstname" => $row["First_Name"],
                                                            "lastname"  => $row["Last_Name"],
                                                            "userid"    => $row["id"]
                                                        ];
                }
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
            
        }else{
        //END - Validated the information inside the POST variable (email & password)
        $data = [
                "code" => 900, 
                "message" => "error",
                "data" => "Wrong or corrupt information"
                ];
        }
        
        $conn->close();
        //Encoded the response message (JSON)
            echo json_encode($data);
        //END - Encoded the response message (JSON)
        
    }else{
        
        header('Location: /');
    }
    //END - Validated method POST (if GET, user is redirected to home page)
    
    
?>