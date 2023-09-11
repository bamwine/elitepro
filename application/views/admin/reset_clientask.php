 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Edit Client
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                
				
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Client Task</h4>
              <div class="row">
                <div class="col-12">
				
				<?php //$count = 1;foreach($get_client as $row){?>

                    <form action="<?php echo base_url(); ?>Admin/mange_clients/editask"  method="post" enctype="multipart/form-data">
						<div class="row">
							
							
							<div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Client ID:</label>
                              <input type="text" readonly class="form-control" name="userid" value="<?php echo $userid;?>" >
                            </div>
                            
							<div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Current Tasks:</label>
                              <input type="text" class="form-control"  name="count" value="<?php echo $get_client->count_id ?? '';?>" >
                            </div>
							
						
							
						<div class="form-group col-4">
                          <button type="submit" class="btn btn-success">Edit Task</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                          
                   
						</div>	
							
                      </form>
                     <?php// }?>   
                
				</div>
              </div>
            </div>
          </div>
        </div>
       
	   
