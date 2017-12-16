<form>
                      
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
                    <label for="$City_Id">City</label>
                    <select class="form-control" name="city" id="$City_Id" required>
                        <option value="">Select a City</option>
                      <?php
                          //GET THE LIST OF CITIES;
                          $query = "SELECT * FROM _City;";
                          $result = $conn->query($query);
                          if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {
                                  echo '<option value="'.$row["id"].'">' .$row["City_Name"]. '</option>';
                              }
                          } else {
                              echo "0 results";
                          }
                      ?>
                    </select>
                  </div>
  
                  <div class="form-group">
                    <label for="$Role_Id">Role</label>
                    <select class="form-control" name="role" id="$Role_Id" required>
                        <option value="">Select a Role</option>
                       <?php
                        //GET THE LIST OF ROLES;
                        $query = "SELECT * FROM _Role;";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<option value="'.$row["id"].'">' .$row["Role_Name"]. '</option>';
                            }
                        } else {
                            echo "0 results";
                        }
                      ?> 
                    </select>
                  </div>
                  
                  <div class="form-group">
                      <label for="commentTextArea">Example textarea</label>
                      <textarea class="form-control" name="comments" id="commentTextArea" rows="3"></textarea>
                  </div>
                 </form>