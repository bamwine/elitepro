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
					  <?php $count = 1;foreach($get_client as $row){?>
                        <tr>
                            <td><?php echo $this->Admin_model->get_clientdetails($row['clt_id'],"clt_name");?></td>
							<td><?php echo $this->Admin_model->get_prodctdetails($row['pro_id'],"pro_name");?></td>
                            <td>$<?php echo $this->Admin_model->get_prodctdetails($row['pro_id'],"pro_price");?></td>
                            <td>$<?php echo $this->Admin_model->get_prodctdetails($row['pro_id'],"pro_comsion");?></td>
                            <td><?php echo $row['date_transct'];?></td>
                            
                            
                            
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
       
	   


