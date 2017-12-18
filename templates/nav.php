
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/?page=home">
      <img src="https://i.pinimg.com/originals/f4/71/05/f47105435b3366273415431feaca45a2.jpg" width="60" height="60" alt="">
  </a>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/?page=home">Home <span class="sr-only">(current)</span></a>
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
          <span id="loggedUserEmail">
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