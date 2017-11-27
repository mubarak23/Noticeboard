<div class="col-sm-8 blog-main">

           <h1 class="page header"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h1>
		   <p>Welcome Admin</p>
			
		   <hr>
		   <h3>All Discussions</h3>
			<table class="table table-striped">
			<tr>
				<th>Discussion ID</th>
				<th>Title</th>
				<th>Posted By</th>
			</tr>
			<?php foreach($all_dis as $disc) :?>
			<tr>
				<td><?php echo $disc['ds_id']; ?></td>
				<td><?php echo $disc['ds_title']; ?></td>
				<td><?php echo $disc['username']; ?></td>
			</tr>
			<?php endforeach; ?>
		   </table>
        </div><!-- /.blog-admin-main -->
            
            
        </div>



    </div><!-- /.container -->