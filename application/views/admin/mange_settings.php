 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              General Settings
            </h3>
            
          </div>
          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Company</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Users</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Bills</a>
                    </li>
                  </ul>
				  
                  <div class="tab-content" id="pills-tabContent"> <!--start of tabs-->
				  
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					
			<div class="col-lg-12 grid-margin stretch-card">
               <div class="mt-12">
                    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-10">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                             COMPANY ADDRESSES
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-10" class="collapse " role="tabpanel" aria-labelledby="heading-10" data-parent="#accordion-4">
                          
						  <div class="card-body">
					
					<?php $count = 0;foreach($comp_addres as $row){ $count++;?>
					<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">Address&nbsp;<?php echo $count;?></li>
                        <li class="breadcrumb-item"><?php echo $row['stt_com_name'];?></li>
                        <li class="breadcrumb-item active" aria-current="page" onclick="delet1()"><a href="#" >Delete</a></li>						
                      </ol>
                    </nav>
					<?php } ?>
					
                  <div class="row">
				  
							<form class="form"action="<?php echo base_url(); ?>Admin/manage_settings/saveaddress"  method="post" enctype="multipart/form-data">
							<div class="form-group row">
							  
							
							<div class="col-lg-12">
							  <label>New Address</label>
							  <div id="bloodhound">
								<input class="typeahead" type="text" name="address">
							  </div>
							</div>
							
						  </div>
							<button type="submit" class="btn btn-primary mb-2">save</button>
						  </form>
							  
                    </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-11">
                          <h6 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                              TRANSACTIONS LIMITS
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                          <div class="card-body">
                        <form class="form"action="<?php echo base_url(); ?>Admin/manage_settings/settings1"  method="post" enctype="multipart/form-data">    
							
							
				<div class="form-group">
				<label>Withdraw Max Limit</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input class="typeahead" type="text"  name="withlimit" value="<?php echo $this->db->get_where('settings' , array('type' =>'withdraw_amount'))->row()->description;?>">
						
                    </div>
                  </div>
				  
				  <div class="form-group">
				<label>Withdraw min Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input class="typeahead" type="text"  name="withminamnt" value="<?php echo $this->db->get_where('settings' , array('type' =>'withdraw_minamount'))->row()->description;?>">
						
                    </div>
                  </div>
				  
				  <div class="form-group">
				<label>Deposit Min Limit</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input class="typeahead" type="text"  name="depolimit" value="<?php echo $this->db->get_where('settings' , array('type' =>'deposit_amount'))->row()->description;?>">
						
                    </div>
                  </div>
				  
				  <div class="form-group">
				  <label>Withdraw times</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input class="typeahead" type="text" name="withtime" value="<?php echo $this->db->get_where('settings' , array('type' =>'withdraw_times'))->row()->description;?>">
							
                    </div>
                  </div>
							
				<div class="form-group">
				  <label>Transaction Percentage</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">%</span>
                      </div>
                      <input class="typeahead" type="text" name="withperce" value="<?php echo $this->db->get_where('settings' , array('type' =>'withdraw_perce'))->row()->description;?>">
									
                    </div>
                  </div>

					
					<div class="form-group">
				  <label>Trading Limit Times(Trade times)</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">%</span>
                      </div>
                      <input class="typeahead" type="text" name="tradelimit" value="<?php echo $this->db->get_where('settings' , array('type' =>'trade_limits'))->row()->description;?>">
									
                    </div>
                  </div>
							
                   <div class="form-group">
				  <label>Customer Care Link</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">%</span>
                      </div>
                      <input class="typeahead" type="text" name="customercare" value="<?php echo $this->db->get_where('settings' , array('type' =>'customerservice'))->row()->description;?>">
									
                    </div>
                  </div>  
					<div class="form-group">
					<label>Customer Care Link2 Telegram</label>
					<div class="input-group">
					  <div class="input-group-prepend">
						<span class="input-group-text">%</span>
					  </div>
					  <input class="typeahead" type="text" name="customercare2" value="<?php echo $this->db->get_where('settings' , array('type' =>'customerservice2'))->row()->description;?>">
									
					</div>
					</div> 				  
						

				<div class="form-group">
				  <label>Products Commission</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                      <input class="typeahead" type="text" name="procomission" value="<?php echo $this->db->get_where('settings' , array('type' =>'product_commission'))->row()->description;?>">
							
                    </div>
                  </div>
							<button type="submit" class="btn btn-primary mb-2">save</button>
							</form>
							
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                
            </div>
          
                      
                    </div>
					
					
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <div class="col-lg-12 grid-margin stretch-card">
               <div class="mt-12">
                    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-10">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#useleve" aria-expanded="true" aria-controls="collapse-10">
                             USER LEVELS
                            </a>
                          </h6>
                        </div>
                        <div id="useleve" class="collapse " role="tabpanel" aria-labelledby="heading-10" data-parent="#accordion-4">
                          
						  <div class="card-body">
					
					<?php $count = 0;foreach($user_lv as $row){ $count++;?>
					<nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item">Level&nbsp;<?php echo $count;?></li>
                        <li class="breadcrumb-item"><?php echo $row['lv_name'];?></li>
                        <li class="breadcrumb-item active" aria-current="page" onclick="delet1()"><a href="#" >Delete</a></li>						
                      </ol>
                    </nav>
					<?php } ?>
					
                  <div class="row">
				  
							<form class="form"action="<?php echo base_url(); ?>Admin/manage_settings/saveuserlv"  method="post" enctype="multipart/form-data">
							<div class="form-group row">
							  
							
							<div class="col-lg-12">
							  <label>User Levels</label>
							  <div id="bloodhound">
								<input class="typeahead" type="text" name="useleve">
							  </div>
							</div>
							
						  </div>
							<button type="submit" class="btn btn-primary mb-2">Add</button>
						  </form>
							  
                    </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                
            </div>
          
                    </div>
					
					
					
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                      <div class="media">
                        <img class="mr-3 w-25 rounded" src="../../images/samples/300x300/14.jpg" alt="sample image">
                        <div class="media-body">
                          <p>
                              I'm really more an apartment person. This man is a knight in shining armor. Oh I beg to differ, I think we have a lot to discuss. After all, you are a client. You all right, Dexter?
                          </p>
                          <p>
                              I'm generally confused most of the time. Cops, another community I'm not part of. You're a killer. I catch killers. Hello, Dexter Morgan.
                          </p>
                        </div>
                      </div>
                    </div>
					
					
					
					
                  </div>  <!--start of tabs-->
                </div>
              </div>
            </div>
          
		
		</div>
		
       
<script type="text/javascript">

function delet1(){

alert('jhjhjjjfgg');
 swal({
        text: 'Any fool can use a computer',
        button: {
          text: "OK",
          value: true,
          visible: true,
          className: "btn btn-primary"
        }
      });
	  
</script>
	  