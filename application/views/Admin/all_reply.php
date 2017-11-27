<div class="col-sm-8 blog-main">

           <h1 class="page header"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h1>
		   <p>Welcome Admin</p>
		   <h3>Latest Notice</h3>	
		   <table class="table table-striped">
			<tr>
				<th>Reply ID</th>
				<th>Discussion ID</th>
                <th>Discussion Title</th>
				<th>User ID</th>
                <th>Comment</th>
                
			</tr>
            <?php foreach($all_reply as $reply):?>
			<tr>
                <td><?php echo $reply['reply_id'];?></td>
				<td><?php echo $reply['ds_id']; ?></td>
				<td><?php echo $reply['ds_title']; ?></td>
				<td><?php echo $reply['user_id']; ?></td>
				<td><?php echo $reply['comment']; ?></td>
			</tr>
			<?php endforeach ?>
		   </table>
	
        </div><!-- /.blog-admin-main -->
            
            
        </div>



    </div><!-- /.container -->