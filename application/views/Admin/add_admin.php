    <div class="col-sm-8 blog-main">
           <h1 class="page header"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h1>
		   <p>Welcome Admin</p>
		  		<div class="panel panel-default">
		<div class="panel-heading">Create An Admin Account.</div>
		<div class="panel-body">
		  <form class="form-group" method="post" action="<?php echo base_url(); ?>admin/add_admin">
            <p>
                <label for="first_name">Admin Username</label>
                <input class="form-control" name="admin_username" type="text"/>
            </p>  
            <p>
             <label for="email">Admin Email</label>
             <input type="email" name="admin_email" class="form-control"/>    
            </p>
            <p>
            <label for="password">Admin_Password</label>
            <input type="password" name="admin_password" class="form-control"/>    
            </p>  
                <p>
                <label>Confirm Password</label>
                <input type="password" name="password2" class="form-control"/>
              </p>
              <p>
                <input type="submit" value="Register" name="register" class="btn btn-primary"/>
              </p>
            </form>
        </div>

	</div>	
		   
		 
        <!-- /.blog-admin-main -->
			
			
		  
		   
		   
        </div><!-- /.blog-admin-main -->