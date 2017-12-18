<?php

require_once("db_connect.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        $firstname = test_input($_POST["firstname"]);
        $lastname = test_input($_POST["lastname"]);
        $city_id = test_input($_POST["city"]);
        $role_id = test_input($_POST["role"]);
        $comments = test_input($_POST["comments"]);
        
        if(empty($email) || empty($password) || empty($firstname) || empty($lastname) || empty($city_id) || empty($role_id)) {
            echo "Missing data, please fix or go away!";
            die();
        }
        if(strlen($password) < 7) {
            echo "Invalid Password, please fix and try again";
            die();
        }
        $sql = "INSERT INTO _Users (Email, Password, First_Name, Last_Name, Role_Id, City_Id, comments) VALUES ('$email', '$password', '$firstname', '$lastname', '$role_id', '$city_id', '$comments')";

    if ($conn->multi_query($sql) === TRUE) {

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

    $conn->close();
  
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>