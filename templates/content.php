
<?php

    $views = array("home","logout","signup","successful_signup","error_signup", "users", "candidate");
    $voter_views = ["users"];
    $admin_views = ["users", "candidate"];
    
    if( isset($_GET["page"]) && in_array($_GET["page"],$views) ){
        
        if( !in_array($_GET["page"],$voter_views) ){ /* and if is a voter*/
            require_once(__ROOT__.'/views/'.$_GET["page"].'.php');
        }elseif( !in_array($_GET["page"],$admin_views) ){ /* and if an admin */
            require_once(__ROOT__.'/views/'.$_GET["page"].'.php');
        }else{
            if( isset($_SESSION["weird_session_name"]) ){
                require_once(__ROOT__.'/views/'.$_GET["page"].'.php');
            }else{
                require_once(__ROOT__.'/views/home.php');
                setNavigation("home"); 
            }
        }
        
        if($_GET["page"] != "logout"){
            setNavigation($_GET["page"]);
        }
        
    } else if(!isset($_GET["page"])){
        
        require_once(__ROOT__.'/views/home.php');
        
        setNavigation("home");
    }else{
        
        require_once(__ROOT__.'/views/404.php');
        setNavigation("404");
    }
    
    function setNavigation($page){
        
        if( !isset($_SESSION['pages_visited']) )
        {
            $_SESSION['pages_visited'] = array($page);
        }else{
            array_push($_SESSION['pages_visited'], $page);
        }
        
    }
?>
