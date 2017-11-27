    <div class="container mainbody-section">

    <div class="row">
        
        <!-- main section of notice and event -->
        <div class="col-md-9">
                        <div class="col-md-12">
										<div class="panel panel-default">
                                        <?php foreach($notices as $notice): ?>
								  <div class="panel-heading">
									<h3 class="panel-title">Title:
                                    <?php echo $notice['notice_title'];?>
                                    </h3>
								  </div>
								  <div class="panel-body">
										<div class="media-left media-middle">
											<a href="#">
											  <i class="fa fa-user fa-5x fa-border"></i>
											</a>
										  </div>
										  <div class="media-body">
											<h5 class="media-heading"><strong></strong></h5>
                                            <label>Notice From:</label> <?php echo $notice['notice_from'];?><br>
                                              <label>Notice To:</label> <?php echo $notice['notice_to']; ?><br>
                                              <label>Status:</label> <?php echo $notice['mode'];?> 
                                              <br>
                                              
											 <a href="<?php echo base_url();?>notices/notice_details/<?php echo $notice['notice_id']?>" class="btn btn-info" role="button">View Notice</a>
										  </div>
								  </div>
                                  <?php endforeach; ?>
                                  
								</div>

						</div>
            
            			
            
            	
            
                
        </div>
        