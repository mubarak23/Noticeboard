    <div class="col-sm-8 blog-main">
           <h1 class="page header"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h1>
		   <p>Welcome Admin</p>
		  		<div class="panel panel-default">
		<div class="panel-heading">Publish A Notice.</div>
		<div class="panel-body">
        <?php if($notice_edit):?>
		  <form class="form-group" method="post" action="<?php echo base_url(); ?>admin/notice_edit/
          <?php echo $notice_edit->notice_id; ?>" >
            <p>
                <label for="first_name">Notice Title</label>
                <input class="form-control" name="notice_title" type="text" value="<?php echo $notice_edit->notice_title; ?>"/>
            </p>
            <p>
            <label for="last_name">Notice From</label> 
            <input type="text" name="notice_from" class="form-control"
             value="<?php echo $notice_edit->notice_from; ?>"/>    
            </p>  
            <p>
             <label for="email">Notice To</label>
             <input type="text" name="notice_to"
              value="<?php echo $notice_edit->notice_to; ?>" class="form-control"/>    
            </p>
           <p>
             <label>Select Status</label>
             <select class="form-control" name="status">
                <option value="<?php echo $notice_edit->status_id ?>">
				<?php echo $notice_edit->status_id; ?></option>
                 <option value="1">Quick</option>
                 <option value="2">Warning</option>
                 <option value="3">Normal</option>
            </select>    
            </p>  
            <p>
             <label>Notice Details</label>
             <textarea name="notice_details" class="form-control">
			 <?php echo $notice_edit->notice_details; ?></textarea>   
            </p>
            <p>
            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id');?>" class="form-control"/>    
            </p>  
              <p>
                  <button type="submit" name = 'edit_notice' class="btn btn-lg btn-primary" >Edit Notice</button>
              </p>
            </form>
            <?php endif; ?>
        </div>

	</div>	
		   
		 
        <!-- /.blog-admin-main -->
  </div><!-- /.blog-admin-main -->