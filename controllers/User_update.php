<?php

        if(!empty($newUsername)){
        
           $query = "UPDATE _Users SET Email = '$newUsername' WHERE id = '".$this->id."' ";
           
           if($conn->query($query)) {
               $this->username = $newUsername;
               return true;
           }else{
               return false;
           }
        }

?>