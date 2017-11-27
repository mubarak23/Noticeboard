    <div class="col-sm-8 blog-main">
           <h1 class="page header"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h1>
		   <p>Welcome Admin</p>
		  		<div class="panel panel-default">
		<div class="panel-heading">Create An User Account.</div>
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
		   
		 
        <!-- /.blog-admin-main -->
			
			
		  
		   
		   
        </div><!-- /.blog-admin-main -->