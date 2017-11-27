<div class="col-sm-8 blog-main">

           <h1 class="page header"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h1>
		   <p>Welcome Admin</p>
		   <h3>All Users</h3>	
			 <hr>
		   <h3>Latest Users</h3>
			<table class="table table-striped">
			<tr>
				<th>User ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Reg Number</th>
			</tr>
			<?php foreach($all_users as $user): ?>
			<tr>
				<td><?php echo $user['user_id']; ?></td>
				<td><?php echo $user['username']; ?></td>
				<td><?php echo $user['email']; ?></td>
				<td><?php echo $user['reg_no']; ?></td>
			</tr>
		<?php endforeach; ?>
		   </table>
		   <hr>
        </div><!-- /.blog-admin-main -->
            
            
        </div>



    </div><!-- /.container -->