     <div class="col-sm-8 blog-main">
           <h1 class="page header"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h1>
		   <p>Welcome Admin</p>
		  		<div class="panel panel-default">
		<div class="panel-heading">Publish A Notice.</div>
		<div class="panel-body">
		  <form class="form-group" method="post" action="<?php echo base_url(); ?>admin/post_notice">
            <p>
                <label for="first_name">Notice Title</label>
                <input class="form-control" name="notice_title" type="text"/>
            </p>
            <p>
            <label for="last_name">Notice From</label> 
            <input type="text" name="notice_from" class="form-control"/>    
            </p>  
            <p>
             <label for="email">Notice To</label>
             <input type="text" name="notice_to" class="form-control"/>    
            </p>
           <p>
             <label>Select Status</label>
             <select class="form-control" name="status">
                <option>Select Status</option>
                 <option value="1">Quick</option>
                 <option value="2">Warning</option>
                 <option value="3">Normal</option>
            </select>    
            </p>  
            <p>
             <label>Notice Details</label>
             <textarea name="notice_details" class="form-control"></textarea>   
            </p>
            <p>
            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id');?>" class="form-control"/>    
            </p>  
              <p>
                  <button type="submit" name = 'post' class="btn btn-lg btn-primary" >Post Notice</button>
              </p>
            </form>
        </div>

	</div>	
		   
		 
        <!-- /.blog-admin-main -->
  </div><!-- /.blog-admin-main -->