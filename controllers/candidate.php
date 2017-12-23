<?php
    require_once("db_connect.php");
    
    //receive data from ajax and insert into db
    if($_REQUEST['question']) {
        $question   = $_REQUEST['question'];
        $answer1    = $_REQUEST['answer1'];
        $answer2    = $_REQUEST['answer2'];
        
        // $sql    = "INSERT INTO _Question VALUES('','$question')";
        
        $sql    = "INSERT INTO _Question (Question) VALUE ('$question'); CREATE TABLE _Qtemp (id int); INSERT INTO _Qtemp (SELECT MAX(id) FROM _Question); INSERT INTO _Vote (Q_id) SELECT id FROM _Qtemp; UPDATE _Vote SET Answer = '$answer1' WHERE Q_id = (SELECT id FROM _Qtemp); INSERT INTO _Vote (Q_id) SELECT id FROM _Qtemp; UPDATE _Vote SET Answer = '$answer2' WHERE Q_id = (SELECT id FROM _Qtemp) AND Answer = ''; DROP TABLE _Qtemp;";

        $query  = mysqli_multi_query($conn,$sql);
        if($query) {
            echo $query;
        }
    }
?>