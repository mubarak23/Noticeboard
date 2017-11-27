<div class="col-sm-8 blog-main">

           <h1 class="page header"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h1>
		   <p>Welcome Admin</p>
		   <h3>Latest Notice</h3>	
		   <table class="table table-striped">
			<tr>
				<th>Notice Title</th>
				<th>Notice From</th>
                <th>Notice To</th>
				<th>Date</th>
                <th>Permit</th>
                <th>Action</th>
			</tr>
            <?php foreach($notices as $notice):?>
			<tr>
				
				<td><a href="post.php"><?php echo $notice['notice_title'];?></a></td>
                <td><?php echo $notice['notice_from'];?></td>
				<td><?php echo $notice['notice_to']; ?></td>
				<td>2017</td>
                <td><a href="<?php echo base_url(); ?>Admin/notice_edit/<?php echo $notice['notice_id'];?>"><button class="btn btn-primary">Edit</button></a><br />
                </td>
                <td><a href="<?php echo base_url(); ?>Admin/notice_delete/<?php echo $notice['notice_id'];?>"><button class="btn btn-danger">Delete</button></a></td>
				
			</tr>
			<?php endforeach ?>
		   </table>
		 
        <!-- /.blog-admin-main -->
			
			
        	 <a class="btn btn-primary" href="<?php echo base_url();?>Admin/all_notice">View All Notice</a>
		   <hr>
		   <h3>Latest Discussions</h3>
			<table class="table table-striped">
			<tr>
				<th>Discussion ID</th>
				<th>Title</th>
				<th>Posted By</th>
			</tr>
			<?php foreach($discussion as $disc) :?>
			<tr>
				<td><?php echo $disc['ds_id']; ?></td>
				<td><?php echo $disc['ds_title']; ?></td>
				<td><?php echo $disc['username']; ?></td>
			</tr>
			<?php endforeach; ?>
		   </table>


		   
		   <a class="btn btn-primary" href="<?php echo base_url();?>Admin/all_dis">View All Discussions</a>
		   <hr>
		   <h3>Latest Users</h3>
			<table class="table table-striped">
			<tr>
				<th>User ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Reg Number</th>
			</tr>
			<?php foreach($Users as $user): ?>
			<tr>
				<td><?php echo $user['user_id']; ?></td>
				<td><?php echo $user['username']; ?></td>
				<td><?php echo $user['email']; ?></td>
				<td><?php echo $user['reg_no']; ?></td>
			</tr>
		<?php endforeach; ?>
		   </table>
		   <a href="<?php echo base_url(); ?>Admin/all_users" class="btn btn-primary">View All Users</a>
		   <hr>
        </div><!-- /.blog-admin-main -->
            
            
        </div>



    </div><!-- /.container -->