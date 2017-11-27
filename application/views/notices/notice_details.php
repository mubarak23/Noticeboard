    <div class="container mainbody-section">

    <div class="row">
        
        <!-- main section of notice and event -->
        <div class="col-md-9">
                        <div class="col-md-12">
										<div class="panel panel-default">
                                        <?php if($details): ?>
								  <div class="panel-heading">
									<h3 class="panel-title">Title:
                                    <?php echo $details->notice_title; ?>
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
                                            <label>Notice From:</label>
                                             <?php echo $details->notice_from ?><br>
                                            <label>Notice To:</label> <?php echo $details->notice_to; ?><br>
                                            <br/>
                                              <label>Details:</label> <?php echo $details->notice_details; ?>
                                      </div>
								  </div>
                                  <?php endif; ?>
								</div>

						</div>
            
            			
            
            	
            
                
        </div>