
   

    <div class="container mainbody-section">

    <div class="row">
        
        <!-- main section of notice and event -->
        <div class="col-md-7">
                        
        			<div class="panel panel-default">
        				<div class="panel-heading">
									<h3 class="panel-title">
                                    	Create Account
                                    </h3>
								  </div>
								  
								  <div class="panel-body">

									   <form role="form"  method="POST" action="<?php echo base_url();?>User/register">
									<div class="form-group">
										<label>First Name*</label><input type="text" name="first_name" class="form-control" placeholder="Enter Your First Name"/>
									</div>
									<div class="form-group">
										<label>Last Name*</label><input type="text" name="last_name" class="form-control" placeholder="Enter Your Last Name"/>
									</div>
									<div class="form-group">
										<label>Email Address*</label><input type="text" name="email" class="form-control" placeholder="Enter Your Email"/>
									</div>
									<div class="form-group">
										<label>Choose Username*</label><input type="text" name="username" class="form-control" placeholder="Choose A Username"/>
									</div>
                                    <div class="form-group">
										<label>Registration Number*</label><input type="text" name="reg_no" class="form-control" placeholder="Enter Your Registration Number"/>
									</div>
                                    
									<div class="form-group">
										<label>Password*</label><input type="password" name="password" class="form-control" placeholder="Enter a password"/>
									</div>
									<div class="form-group">
										<label>Confirm Password*</label><input type="password" name="password2" class="form-control" placeholder="Confirm Password"/>
									</div>
									
									
									<input type="submit" name="register" class="btn btn-default" value="Register"/>
								</form>	
										 
								  </div>
								</div>

            
         
                       
                
        </div>

          <!-- sidebar section -->
        <div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-heading">Summary of Notices On The Board</div>
              <div class="panel-body">
              	<?php foreach($list_NB as $list): ?>
                <a href="<?php echo base_url();?>notices/notice_details/<?php echo $list['notice_id']?>"><h4><?php echo $list['notice_title']; ?></h4></a>

            <?php endforeach; ?>
              </div>
            </div>
<?php if(!$this->session->userdata('Logged_in')):?>
                  
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
            
                        
          </div>


            </div>

            </section>
            <?php endif; ?>

        </div>
        
        
    </div>

    </div><!-- /.container --> 
        
        