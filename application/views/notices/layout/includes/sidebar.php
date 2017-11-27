 <!-- sidebar section -->
        <div class="col-md-3">
            <div class="sidebar">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="block">
						<h3>Forum Login</h3>
						<form role="form" method="post" action="<?php echo base_url(); ?>user/login">
						<div class="form-group">
							<label for="exampleinputUsername">Username</label>
							<input name="reg_no" type="text" class="form-control" placeholder="Enter  Username"/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" class="form-control" placeholder="Enter Password"/>
						</div>
						<button name="login" type="submit" class="btn btn-primary">Login</button>
						<a class="btn btn-default" href="<?php echo base_url(); ?>User/register">Create Account</a>
						</form>
					</div>
					   
                    </div>
                </div>
					
			</div>
        </div>
        
        
    </div>

    </div><!-- /.container -->