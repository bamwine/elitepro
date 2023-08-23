 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Failed Tranactions
            </h3>
            
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Available Tranactions</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Account #</th>
							<th>Address (BTC) #</th>
                            <th>Amount</th>
							<th>Tranaction Type</th>
                            <th>Date</th>							
                            <th>Approved By</th>                            
                            <th>Status</th>
                            
                        </tr>
                      </thead>
                      <tbody>
					  <?php $count = 1;foreach($clientfailed as $row){?>
                        <tr>
                            <td><?php echo $this->Admin_model->get_clientdetails($row['tr_clt_id'],"clt_email");?></td>
							<td><?php echo $row['tr_clt_address'];?></td>
                            <td><?php echo $row['tr_amount'];?></td>
							<td><?php echo $row['tr_type'];?></td>
                            <td><?php echo $row['tr_update'];?></td>							
                            <td><?php echo $row['tr_approved_by'];?></td>
                            
                            <td>
                              <label class="badge <?php echo $this->Admin_model->get_badge($row['tr_status']);?>"><?php echo $row['tr_status'];?></label>
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
       
	  