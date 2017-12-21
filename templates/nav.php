
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" ;>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/?page=home">
      <img src="/assets/imgs/fv.png" width="75" height="75" alt="">
      Vote for Front-End VS Back-End Development
  </a>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#frontEnd">Front-End <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#backEnd">Back-End <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#contactUs">Contact Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#results">Results <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <!-- Modal from bootstrap / Button trigger modal -->

      <button id="loginModalButton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
      Login
      </button>

      <!-- Modal from bootstrap / Button trigger modal -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <span class="text-white bg-dark" id="loggedUserEmail" >
          <?php
            if( isset($_SESSION["weird_session_name"]) ){
                echo $_SESSION["weird_session_name"]["firstname"];
                echo "<script type='text/javascript'>var loggedIn = true;</script>";
              }else{
                echo "<script type='text/javascript'>var loggedIn = false;</script>";
              }
          ?>
          </span>
        </li>
      </ul>
      
      <a id="logoutButton" class="btn btn-primary" href="/views/logout.php">
        Logout
      </a>

    </form>
  </div>
</nav>

