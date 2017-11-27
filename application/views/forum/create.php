
   

    <div class="container mainbody-section">

    <div class="row">
    	<?php if($this->session->flashdata('Success')): ?>
					<?php echo '<div class="alert alert-success">' .$this->session->flashdata('Success'). '</div>'?>	
					<?php endif; ?>
        
        <!-- main section of notice and event -->
        <div class="col-md-7">
                        <div class="col-md-12">
										<div class="panel panel-default">
								  
								  <div class="panel-body">
										
										  <div class="media-body">
											<h5 class="media-heading"><strong>Create Discussion </strong></h5>
                                           	<form method="POST" action="create">
								<div class="form-group">
									<label>Though Title</label>
									<input type="text" name="title" class="form-control" placeholder="Enter Your Though Title"/>
								</div>
								
								<div class="form-group">
									<label>Though Body</label>
									<textarea id="body" rows="10" cols="70" class="form-control" name="body"></textarea>
								</div>
								<button type="submit"  name="create" class="btn btn-default">Create</button>
							 </form>
                                       </div>
								  </div>
								</div>

						</div>
            
            
                      
                
        </div>


          <!-- sidebar section -->
        <div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-heading">Summary of Notices On The Board</div>
              <div class="panel-body">
              	<?php foreach($list_NB as $list): ?>
                <a href="<?php echo base_url();?>notices/notice_details/<?php echo $list['notice_id']?>"><h4><?php echo $list['notice_title']; ?></h4></a>

            <?php endforeach; ?>
              </div>
            </div>
<?php if(!$this->session->userdata('Logged_in')):?>
                  
            <section>
              
                <div class="panel panel-default">
              <div class="panel-heading">NoticeBoard Forun Login</div>
              <div class="panel-body">

              	 <div class="block">
                               
            <h3>Login Form</h3>
            <form role="form" action="<?php echo base_url(); ?>User/login" method="post">
            <div class="form-group">
              <label for="Registration Number">Registration Number</label>
              <input name="reg_no" type="text" class="form-control" placeholder="Enter  Registration Number"/>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input name="password" type="password" class="form-control" placeholder="Enter Password"/>
            </div>
            <input value="Login" name="login" type="submit" class="btn btn-primary">
            </form>
            
                        
          </div>


            </div>

            </section>
            <?php endif; ?>

        </div>
        
        
    </div>

    </div><!-- /.container --> 
        
        