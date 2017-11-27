
   

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

										<?php if($details) :?>
										  <div class="media-body">
											<h5 class="media-heading"><strong>Discusion Title: <?php echo $details->ds_title; ?> </strong></h5>
                                              <label>Posted By: </label> <?php echo $details->username; ?><br>
                                             
                                            <p>
                                              <?php echo $details->ds_body; ?>
                                            </p>
                                            <div class="col-md-10">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="media-body">
                                                        <div class="media-heading">
                                                          <h2>Reply</h2>
                                                        </div>
                                                        <?php foreach($replies as  $reply):?>
                                                        <p>Username: <?php echo $reply['username']; ?></p>
                                                        <p><?php echo $reply['comment']; ?></p>
                                                        <hr>
                                                      <?php endforeach;?>
                                                    </div>
                                                </div>

                                            </div>

                                            <?php if($this->session->userdata('logged_in')): ?>
                                            <hr>
                                            <p><h3>Comment Here</h3></p> 
                                            <form action="<?php echo base_url(); ?>Discussions/comment" method="post" >
                                                
                                               <input type="hidden" name="ds_id" value="<?php echo $details->ds_id; ?>" />
                                               <input type="hidden" name="user_id" value="<?php echo $details->user_id; ?>" />
                                                <input type="hidden" name="ds_title" value="<?php echo $details->ds_title; ?>">
                                                <textarea id="body" type="text" class="form-control" name="comment"></textarea>
                                                <br>
                                             <button type="submit"  name="reply" class="btn btn-primary">Comment</button>
                                            </form>
                                        <?php else: ?>

                                               <a href="<?php echo base_url(); ?>User/login" class="btn btn-primary">Login</a><br>
                                                <a href="<?php echo base_url(); ?>user/register" class="btn btn-danger">Create an Account</a>
                                        <?php endif; ?> 

                                            </div>

                                          
                                       </div>

                                   <?php endif; ?>
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
<?php if(!$this->session->userdata('logged_in')):?>
                  
            <section>
              
                <div class="panel panel-default">
              <div class="panel-heading">NoticeBoard Forun Login</div>
              <div class="panel-body">

                <?php if(!$this->session->userdata('logged_in')): ?>

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
      <?php endif; ?>


            </div>

            </section>
            <?php endif; ?>

        </div>
        
        
    </div>

    </div><!-- /.container --> 
        