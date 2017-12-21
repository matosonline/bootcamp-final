<?php
?>

<div class="container-fluid">
    <div class="row" id="candidate">
        <div class="col-sm-12 col-lg-6 mx-auto">
            
            <h1 class="text-center">Additional Questions</h1>
            
            <p id="alert" style="display:none" class="alert alert-success text-center"><span id="show"></span> </p>

                <form>
                    <div class="form-group">
                        <label  class="col-sm-4 control-label" for="question">What's on your mind?</label>
                        <div class="col">
                            <input type="text" class="form-control" id="question" placeholder="Type Here"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="answer1" >Answer 1</label>
                        <div class="col">
                            <input type="text" class="form-control" id="answer1" placeholder="Type Here"/>
                        </div>
                        <label class="col-sm-4 control-label" for="answer2" >Answer 2</label>
                        <div class="col">
                            <input type="text" class="form-control" id="answer2" placeholder="Type Here"/>
                        </div>
                    </div>
                </form>
            
            <div class="buttons">
                <button type="button" class="btn btn-primary" id="btn-qst">Add Question</button>
            </div>

        </div>
    </div>
</div>