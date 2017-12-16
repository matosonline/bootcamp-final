<!-- Signin Modal -->
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                
                <form id="loginForm">
                    <!-- Altered the modal so that it has a form -->
                    <div id="loginErrorMessage" class="alert alert-danger" role="alert">
                      Information missing, please check again.
                    </div>
                    <div id="loginErrorMessageInvalid" class="alert alert-danger" role="alert">
                      Wrong email and/or password, please check again.
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="staticEmail" value="email@example.com">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                      </div>
                      <!-- Altered the modal so that it has a form -->
                </form>
            
            </div>
            <div class="modal-footer">
            <!--  <a class="btn btn-link" href="/?page=signup role="button">SignUp</a> -->
              <a href="#" data-toggle="modal" data-target="#modalSup" class="button"><i class="fa fa-plus"></i>SignUp</a>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <!-- Altered the modal so that it has a form -->
              <button id="loginButton" type="button" class="btn btn-primary">Login</button>
              <!-- Altered the modal so that it has a form -->
            </div>
          </div>
        </div>
      </div>
<!-- Modal from bootstrap -->








<!-- Signup Modal II -->
      <div class="modal" id="modalSup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                
                <?php
  require_once(__ROOT__."/controllers/db_connect.php");
?>
              
<div class="row">
  <div class="col mx-auto">
    <form class="cmxform" id="signupForm" action="" method="post">
        
        <div class="form-group">
          <label for="Email">Email address (Username)</label>
          <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required/>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required/>
          <small id="passwordError" class="form-text text-muted">Password should be 7 or more characters</small>
        </div>
        
        <div class="form-group">
          <label for="First_Name">First Name</label>
          <input type="text" name="firstname" class="form-control" id="First_Name" placeholder="First Name" required/>
        </div>
        
        <div class="form-group">
          <label for="Last_Name">Last Name</label>
          <input type="text" name="lastname" class="form-control" id="Last_Name" placeholder="Last Name" required/>
        </div>
        

        <div class="form-group">
          <label for="City_Id">City</label>
          <select class="form-control" name="city" id="City_Id" required>
              <option value="">Select a City</option>
          </select>
        </div>


        <div class="form-group">
          <label for="Role_Id">Role</label>
            <select class="form-control" name="role" id="Role_Id" required>
            <option value="">Select a Role</option>
          </select>
        </div>
        
        <div class="form-group">
            <label for="commentTextArea">Comments</label>
            <textarea class="form-control" name="comments" id="commentTextArea" rows="3"></textarea>
        </div>
    <button type="submit" id="btn-save" name="btn-save" class="btn btn-primary submit" value="submit">Submit</button>
    </form>
  </div>            
    </div>          
              <?php
                  $conn->close();
              ?>
            
            </div>
          </div>
        </div>
      </div>
<!-- Modal from bootstrap -->