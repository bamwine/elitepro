 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Customers
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#saveModal" data-whatever="@fat">Add Client</button>
        
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Available Customers</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Client Id #</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Account Balance</th>
                            <th>Subodnates</th>
                            <th>Registration Date</th>                            
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php $count = 1;foreach($get_client as $row){?>
                        <tr>
                            <td><?php echo $row['clt_id'];?></td>
                            <td><?php echo $row['clt_name'];?></td>
                            <td><?php echo $row['clt_phone'];?></td>
                            <td><?php echo number_format($row['clt_bal'],3);?></td>
                            <td><?php echo $this->Admin_model->get_mysubonates($row['clt_ref']);?></td>
                            <td><?php echo $row['clt_created'];?></td>                            
                            <td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<?php // if($this->session->userdata('rights')=="super"){ ?>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="<?php echo base_url(); ?>Admin/mange_clients/viewerecords/<?php echo $row['clt_id'];?>"><i class="fa fa-edit"></i> Client Transactions</a>
													<a class="dropdown-item" href="<?php echo base_url(); ?>Admin/mange_clients/vieweditpwd/<?php echo $row['clt_id'];?>"><i class="fa fa-edit"></i> Reset Password</a>
													<a class="dropdown-item" href="<?php echo base_url(); ?>Admin/mange_clients/viewetask/<?php echo $row['clt_id'];?>"><i class="fa fa-edit"></i> Reset Task</a>
													<a class="dropdown-item" href="<?php echo base_url(); ?>Admin/mange_clients/viewedit/<?php echo $row['clt_id'];?>"><i class="fa fa-edit"></i> Edit client</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#editModal<?php echo $row['clt_id'];?>"><i class="fa fa-dollar-sign"></i> Add Money</a>
													<a class="dropdown-item" onclick="delet('<?php echo $row['clt_id'];?>')"><i class="fa fa-trash"></i> Delete</a>
													<a class="dropdown-item" onclick="lock('<?php echo $row['clt_status']=='open' ? 'locked' : 'open';?>,<?php echo $row['clt_id'];?>')"><i class="fa fa-<?php echo $row['clt_status']=='open' ? 'unlock' : 'lock';?>"></i>  <?php echo $row['clt_status']=='open' ? 'lock' : 'unlock';?> </a>
												</div><?php //} ?>
											</div>
											<span class="badge <?php echo $row['clt_status']=='open' ? 'badge-success' : 'badge-danger';?>"> <?php echo $row['clt_status'];?></span>
										</td>
                        </tr>
					

					
				<div class="modal fade" id="editModal<?php echo $row['clt_id'];?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ModalLabel">Add Money</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?php echo base_url(); ?>Admin/mange_clients/addmoney"  method="post" enctype="multipart/form-data">
							
							<div class="row">
							
							<div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">User ID:</label>
                              <input type="text" readonly class="form-control" name="userid" value="<?php echo $row['clt_id'];?>" >
                            </div>
                            <div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">Current Amount:</label>
                              <input type="text" class="form-control" name="name" readonly value="<?php echo $row['clt_bal'];?>" >
                            </div>
							</div>
							
							<div class="row">
                            <div class="form-group col-12">
                              <label for="recipient-name" class="col-form-label">Amount:</label>
                              <input type="number" class="form-control" name="moneyrem" />
                            </div>
							
							</div>
							
							
							
						<div class="form-group">
                          <button type="submit" name="add" class="btn btn-success">Add</button>
						  <button type="submit"  name="remove" class="btn btn-success">Remove</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
		
						
                      <?php }?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
	   
	   <div class="modal fade" id="saveModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ModalLabel">New Client</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?php echo base_url(); ?>Admin/mange_clients/save"  method="post" enctype="multipart/form-data">
							
							<div class="row">
							
							<div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">Client ID:</label>
                              <input type="text" readonly class="form-control" name="userid" value="<?php echo h_generate_clt_id();?>" >
                            </div>
                            <div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">Name:</label>
                              <input type="text" class="form-control" name="name" >
                            </div>
							</div>
							
							<div class="row">
                            <div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">Email:</label>
                              <input type="text" class="form-control" name="email">
                            </div>
							<div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">Password:</label>
                              <input type="text" class="form-control" name="Passwd">
                            </div>
							</div>
							
							
							
							
						<div class="form-group">
                          <button type="submit" class="btn btn-success">Save User</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  

				  
<script type="text/javascript">

function delet(id) {
	
  swal({
    title: 'Are you sure?',
    text: 'Once Changed, you will not be able to Undo!',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  })
    .then((willDelete) => {
      if (willDelete) {
		  
		  $.ajax({
			type:'POST',
            url: '<?php echo base_url(); ?>admin/mange_clients/delete',
			data:{'trid':id},			
            async: false,
            success: function (response)
            {
				
               // $('#amount').val(response*quantity);
		swal('Poof! Transaction has been made!', {
          icon: 'success',
        });
			location.href='<?php echo base_url(); ?>admin/mange_clients';	
            }
        });
		  
		  
        
      } else {
        swal('Action Has been Canceled!');
      }
    });
}


function lock(id) {
	const name=id.split(',');
  swal({
    title: 'Are you sure?',
    text: 'Once Changed, you will not be able to Undo!',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  })
    .then((willDelete) => {
      if (willDelete) {
		  
		  $.ajax({
			type:'POST',
            url: '<?php echo base_url(); ?>admin/mange_clients/lock',
			data:{'trid':name[0] ,'userid':name[1]},			
            async: false,
            success: function (response)
            {
				
               // $('#amount').val(response*quantity);
		swal('Poof! Transaction has been made!', {
          icon: 'success',
        });
			location.href='<?php echo base_url(); ?>admin/mange_clients';	
            }
        });
		  
		  
        
      } else {
        swal('Action Has been Canceled!');
      }
    });
}
</script>