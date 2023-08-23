 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Customers Commission on Products
            </h3>
            
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Customers Incomes</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Account #</th>
							<th>Product</th>
                            <th>Product Price</th>                            
                            <th>Commssion</th>
							<th>Date</th>                            
                            
                        </tr>
                      </thead>
                      <tbody>
					  <?php $count = 1;foreach($getadesnow as $row){?>
                        <tr>
                            <td><?php echo $this->Admin_model->get_clientdetails($row['inc_person'],"clt_email");?></td>
							<td><?php echo $this->Admin_model->get_prodctdetails($row['inc_item'],"pro_name");?></td>
                            <td>$<?php echo $this->Admin_model->get_prodctdetails($row['inc_item'],"pro_price");?></td>
                            <td>$<?php echo $row['inc_amount'];?></td>
                            <td><?php echo $row['inc_date'];?></td>
                            
                            
                            
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


function successrxt(id,userid,amount,tasks) {
	
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