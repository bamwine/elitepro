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

                    <form action="<?php echo base_url(); ?>Admin/mange_clients/edit"  method="post" enctype="multipart/form-data">
							
							<div class="row">
							
							<div class="form-group col-3">
                              <label for="recipient-name" class="col-form-label">Client ID:</label>
                              <input type="text" readonly class="form-control" name="userid" value="<?php echo $row['clt_id'];?>" >
                            </div>
                            <div class="form-group col-3">
                              <label for="recipient-name" class="col-form-label">Level: </label>
                              <input type="text" class="form-control" readonly onchange="calculatevip()" id="clt_level" name="clt_level" value="<?php echo $row['clt_level'];?>" >
                            </div>
							<div class="form-group col-3">
                              <label for="recipient-name" class="col-form-label">Task:</label>
                              <input type="text" class="form-control" readonly id="clt_tasks" name="clt_tasks" value="<?php echo $row['clt_tasks'];?>" >
                            </div>
							<div class="form-group col-3">
                              <label for="recipient-name" class="col-form-label">Commission:</label>
                              <input type="text" class="form-control" readonly onchange="calculatevip()" id="clt_comsion" name="clt_comsion" value="<?php echo $row['clt_comsion_level'];?>">
                            </div>
							</div>
							
							<div class="row">
                            <div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Account Balance:</label>
                              <input type="text" class="form-control"  onload="calculatevip();" onchange="calculatevip();" id="clt_bal" name="clt_bal" value="<?php echo $row['clt_bal'];?> ">
                            </div>
							<div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Your Current Commission:</label>
                              <input type="text" class="form-control"   id="clt_comsionow" name="clt_comsionow" value="<?php echo $row['clt_comsion'];?> ">
                            </div>
							<div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Level Money:</label>
                              <input type="text" class="form-control" readonly onchange="calculatevip()" id="clt_money" name="clt_level_money"  value="<?php echo $row['clt_level_money'];?> ">
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
		money="5000 AND 1000000";
      } 

	 document.getElementById("clt_level").value=level;
	 document.getElementById("clt_tasks").value=ordersperday;
	 document.getElementById("clt_comsion").value=commssion;	
	 document.getElementById("clt_money").value=money;
	 
	 
    }
	

  </script>