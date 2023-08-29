 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Products
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#saveModal" data-whatever="@fat">Add Product</button>
        
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Available Products</h4>
              <div class="row">
               
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr class="bg-primary text-white">
                                <th>Image</th>
                                <th>Product Name</th>                                
                                <th>Base Price</th>                                
                                <th>Commission</th>
								<th>Date Created</th>
                                <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
							<?php 

							foreach($clientprod as $row){

							?>
							
                            <tr>
                                <td><img src="<?php echo base_url().$row['pro_pic']?>" alt="logo"/></td>
                                <td><?php echo $row['pro_name'];?></td>                                
                                <td>USDT<?php echo $row['pro_price'];?></td>
								<td>USDT<?php echo $row['pro_comsion'];?></td>
                                <td><?php echo $row['pro_date'];?></td>                                
                                <td class="text-right">
                                  
                                  <a class="btn btn-light" onclick="failedrxt('<?php echo $row['phd_id'];?>')">
                                    <i class="fa fa-times text-danger" ></i>Remove
                                  </a>
                                </td>
                            </tr>
					<?php

					}

					?>	
                            
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
                          <h5 class="modal-title" id="ModalLabel">New Product</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?php echo base_url(); ?>Admin/market/save"  method="post" enctype="multipart/form-data">
							
							<div class="row">
							
							<div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Product Name:</label>
                              <input type="disabled"  class="form-control" name="proname" value ="Applications <?php echo generateRandomNumber();?>" >
                            </div>
                            <div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Price:</label>
                              <input type="number" class="form-control" name="propric" required >
                            </div>
							 <div class="form-group col-4">
                              <label for="recipient-name" class="col-form-label">Commission:</label>
                              <input type="text" class="form-control" name="procomssion" required >
                            </div>
							</div>
							
							<div class="row">
                            <div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">Description:</label>
                              <textarea  class="form-control" name="desc"></textarea>
                            </div>
							
							<div class="row">
                            <div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">Picture:</label>
                              <input type="file" class="form-control" name="pic">
                            </div>
							
							</div>
							
							
							
							
						<div class="form-group">
                          <button type="submit" class="btn btn-success">Save Product</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
      

<script type="text/javascript">


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
            url: '<?php echo base_url(); ?>admin/market/delete',
			data:{'trid':id},			
            async: false,
            success: function (response)
            {
				
               // $('#amount').val(response*quantity);
		swal('Poof! Transaction has been made!', {
          icon: 'success',
        });
			location.href='<?php echo base_url(); ?>admin/market';	
            }
        });
		  
		  
        
      } else {
        swal('Action Has been Canceled!');
      }
    });
}



</script>                  	   