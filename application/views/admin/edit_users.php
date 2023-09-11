 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Edit Users
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                
				
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Users</h4>
              <div class="row">
                <div class="col-12">
				
				<?php $count = 1;foreach($get_client as $row){?>

                    <form action="<?php echo base_url(); ?>Admin/mange_user/edit"  method="post" enctype="multipart/form-data">
							
							<div class="row">
							
							<div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">User ID:</label>
                              <input type="text" readonly class="form-control" name="userid" value="<?php echo $row['user_id'];?>" >
                            </div>
                            <div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">Name:</label>
                              <input type="text" class="form-control" name="name" value="<?php echo $row['user_name'];?>" >
                            </div>
							</div>
							
							<div class="row">
                            <div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">Email:</label>
                              <input type="text" class="form-control" name="email" value="<?php echo $row['user_email'];?>">
                            </div>
							<div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">Password:</label>
                              <input type="text" class="form-control" name="Passwd">
                            </div>
							</div>
							
							
							<div class="form-group">
							<label for="exampleFormControlSelect2">User Level:</label>
							<select class="form-control" name="level">
														
							<?php 
								$clas = $this->db->get('user_levels')->result_array();
								foreach($clas as $row3){
										?>
                               <option value="<?php echo $row3['lv_name'];?>" <?php if($row['user_level'] == $row3['lv_name'])echo 'selected';?> > <?php echo $row3['lv_name'];?> </option>                                 
													
                                                
							<?php
							}
						  ?>
							
							</select>
							</div>
							
						<div class="form-group">
                          <button type="submit" class="btn btn-success">Save User</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                          </form>
                            
                <?php }?>
				</div>
              </div>
            </div>
          </div>
        </div>
       
	   
<script type="text/javascript">

    function calculatevip() {
		
      var clientbalance = document.getElementById("clt_bal");     
      var cltbal = parseFloat(clientbalance.value);

      

      var level;
	  var ordersperday;
	  var commssion;
	  var money;

      if (cltbal <= 499) {
        level = "VIP1";	
		ordersperday=40;
		commssion=0.20;
		money="0 AND 499";
      } else if (cltbal >= 500 && cltbal <= 1499) {
        level = "VIP2";
		ordersperday=45;
		commssion=0.28;
		money="500 AND 1499";
      } else if (cltbal >= 1500 && cltbal <= 4999) {
        level = "VIP3";
		ordersperday=50;
		commssion=0.35;
		money="1500 AND 4999";
      } else if (cltbal > 5000) {
        level = "VIP4";
		ordersperday=55;
		commssion=0.5;
		money="5000 AND 100000";
      } 

	 document.getElementById("clt_level").value=level;
	 document.getElementById("clt_tasks").value=ordersperday;
	 document.getElementById("clt_comsion").value=commssion;	
	 document.getElementById("clt_money").value=money;
	 
	 
    }
	

  </script>