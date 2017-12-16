<div class="container-fluid clearfix">
    <div class="row">
        <div class="col">
<?php

    $views = array("home","portfolio","logout","signup","successful_signup","error_signup","users","user_profile");
    $private_views = ["users","user_profile"];
    
    if( isset($_GET["page"]) && in_array($_GET["page"],$views) ){
        
        if( !in_array($_GET["page"],$private_views) ){
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
        </div>
    </div>
</div>