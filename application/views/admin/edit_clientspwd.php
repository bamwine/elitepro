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
              <h4 class="card-title">Edit Customers</h4>
              <div class="row">
                <div class="col-12">
				
				<?php $count = 1;foreach($get_client as $row){?>

                    <form action="<?php echo base_url(); ?>Admin/mange_clients/editpwd"  method="post" enctype="multipart/form-data">
							
							<div class="row">
							
							<div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Client ID:</label>
                              <input type="text" readonly class="form-control" name="userid" value="<?php echo $row['clt_id'];?>" >
                            </div>
                            <div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Account Password </label>
                              <input type="text" class="form-control"  id="clt_passwd" name="clt_passwd" value="<?php echo $row['clt_passwd'];?>" >
                            </div>
							<div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Transaction Password:</label>
                              <input type="text" class="form-control"  id="clt_btc_paswd" name="clt_btc_paswd" value="<?php echo $row['clt_btc_paswd'];?>" >
                            </div>
							
							</div>
							
							
							<div class="row">
							<div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Wallet Name </label>
                              <input type="text" class="form-control" readonly id="" name="" value="<?php echo $row['clt_btc_wallet'];?>" >
                            </div>
							
                            <div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Wallet Address </label>
                              <input type="text" class="form-control" readonly id="" name="" value="<?php echo $row['clt_btc_add'];?>" >
                            </div>
							
							<div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Apply Negative Task At:</label>
                              <input type="text" class="form-control"  name="clt_negtask" value="<?php echo  $row['clt_negtask'];?>" >
                            </div>
							
							<div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Negative product Name:</label>
                              <input type="text" class="form-control"  name="clt_negpro" placeholder="Applications ....." value="<?php echo  $row['clt_negpro'];?>" >
                            </div>
							
							</div>
							
							
							
						<div class="form-group">
                          <button type="submit" class="btn btn-success">Edit Client</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                          </form>
                        
                <?php }?>
				</div>
              </div>
            </div>
          </div>
        </div>
       
	   
