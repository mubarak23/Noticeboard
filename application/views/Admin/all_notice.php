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
            <?php foreach($all_notices as $notice):?>
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
	
        </div><!-- /.blog-admin-main -->
            
            
        </div>



    </div><!-- /.container -->