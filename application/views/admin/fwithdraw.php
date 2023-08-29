 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Withdraws
            </h3>
            
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Available Withdraws</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Account #</th>
							<th>ClientWallet Address  #</th>
                            <th>Requested (USDT)</th>
							<th>Acual Amount (USDT)</th>
                            <th>Date</th>
                            <th>Approved By</th>                            
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php $count = 1;foreach($clientwith as $row){?>
                        <tr>
                            <td><?php echo $this->Admin_model->get_clientdetails($row['tr_clt_id'],"clt_name");?></td>
							<td><?php echo $row['tr_clt_address'];?></td>
                            <td><?php echo $row['tr_amount'];?></td>
							<td><?php echo $this->Admin_model->getpercetile($row['tr_amount']);?></td>
                            <td><?php echo $row['tr_update'];?></td>
                            <td><?php echo $row['tr_approved_by'];?></td>
                            
                            <td>
                              <label class="badge <?php echo $this->Admin_model->get_badge($row['tr_status']);?>"><?php echo $row['tr_status'];?></label>
                            </td>
                            <td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa <?php if($row['tr_lock']==1){ echo "fa-lock";} else { echo "fa-ellipsis-v";} ?>"></i></a>												
												<?php if($row['tr_lock']==0){ ?>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" onclick="inprogress('<?php echo $row['tr_id'];?>');" ><i class="fa fa-retweet"></i> InProgress</a>
													<a class="dropdown-item" href="#" onclick="successrxt('<?php echo $row['tr_id'];?>,<?php echo $row['tr_clt_id'];?>,<?php echo $row['tr_amount'];?>,<?php echo "withdraw";?>')"><i class="fa fa-check"></i> successful</a>
													<a class="dropdown-item" href="#" onclick="failedrxt('<?php echo $row['tr_id'];?>,<?php echo $row['tr_clt_id'];?>,<?php echo $row['tr_amount'];?>')" ><i class="fa fa-trash"></i> Failed</a>
												</div>
												<?php }?>
											</div>
										</td>
                        </tr>
						
						
                      <?php }?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
	   
	   
<script type="text/javascript">

function inprogress(id) {
	
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
            url: '<?php echo base_url(); ?>admin/manage_status/inprogress',
			data:{'trid':id},			
            async: false,
            success: function (response)
            {
				
               // $('#amount').val(response*quantity);
		swal('Poof! Transaction has been made!', {
          icon: 'success',
        });
			location.href='<?php echo base_url(); ?>admin/manage_withdraw';	
            }
        });
		  
		  
        
      } else {
        swal('Action Has been Canceled!');
      }
    });
}


function failedrxt(id) {
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
            url: '<?php echo base_url(); ?>admin/manage_status/failed',
			data:{'trid':name[0],'userid':name[1],'amount':name[2]},			
            async: false,
            success: function (response)
            {
				
               // $('#amount').val(response*quantity);
		swal('Poof! Transaction has been made!', {
          icon: 'success',
        });
			location.href='<?php echo base_url(); ?>admin/manage_withdraw';	
            }
        });
		  
		  
        
      } else {
        swal('Action Has been Canceled!');
      }
    });
}


function successrxt(id,userid,amount,tasks) {
	// alert(id);
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
            url: '<?php echo base_url(); ?>admin/manage_status/success',
			data:{'trid':name[0],'userid':name[1],'amount':name[2],'task':name[3]},			
            async: false,
            success: function (response)
            {
				
               // $('#amount').val(response*quantity);
		swal('Poof! Transaction has been made!', {
          icon: 'success',
        });
			location.href='<?php echo base_url(); ?>admin/manage_withdraw';	
            }
        });
		  
		  
        
      } else {
        swal('Action Has been Canceled!');
      }
    });
}

</script>                  