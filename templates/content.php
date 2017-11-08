<div class="container-fluid">
    <div class="row">
        <div class="col">

            <?php
                $views = array("home", "portfolio", "contact");
            
                if( isset($_GET["page"]) && in_array($_GET["page"],$views) ) {
            
                require_once (__ROOT__.'/views/'.$_GET["page"].'.php');
                
                } else if (!isset($_GET["page"])) {
                    require_once (__ROOT__.'/views/home.php');    
                }else {
                    require_once (__ROOT__.'/views/404.php');    
                }
            ?>

        </div>
    </div>
</div>