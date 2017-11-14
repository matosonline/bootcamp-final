<?php

    if(!isset($_SESSION['pages_visited'])) {
    $_SESSION['pages_visited'] = array("home");
    }   else {
            array_push($_SESSION['pages_visited'], "home");
    }

?>

<h1>This is the Home!</h1>