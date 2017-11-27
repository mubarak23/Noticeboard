  <!-- sidebar section -->
        <div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-heading">Summary of Notices On The Board</div>
              <div class="panel-body">
                <h4>Final Year Project Submission</h4>
                <h4>Final Year Project Submission</h4>
                <h4>Final Year Project Submission</h4>
              </div>
            </div>

            <section>
              
                <div class="panel panel-default">
              <div class="panel-heading">NoticeBoard Forun Login</div>
              <div class="panel-body">

                   <div class="block">
                               
            <h3>Login Form</h3>
            <form role="form" action="<?php echo base_url(); ?>User/login" method="post">
            <div class="form-group">
              <label for="Registration Number">Registration Number</label>
              <input name="reg_no" type="text" class="form-control" placeholder="Enter  Registration Number"/>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input name="password" type="password" class="form-control" placeholder="Enter Password"/>
            </div>
            <input value="Login" name="login" type="submit" class="btn btn-primary">
            </form>
            
            <a class="btn btn-default" href="<?php echo base_url(); ?>User/register">Create Account</a>
            
                        
          </div>

            </div>

            </section>

        </div>
        
        
    </div>

    </div><!-- /.container -->