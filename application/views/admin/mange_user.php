 <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              System Users
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#saveModal" data-whatever="@fat">Add User</button>
        
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">System Users</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>User Id #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Google Key</th>
                            <th>Level</th>
                            <th>Date Created</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php $count = 1;foreach($get_user as $row){?>
                        <tr>
                            <td><?php echo $row['user_id'];?></td>
                            <td><?php echo $row['user_name'];?></td>
                            <td><?php echo $row['user_email'];?></td>
                            <td><?php echo $row['user_googlekey'];?></td>
                            <td><?php echo $row['user_level'];?></td>
                            <td><?php echo $row['user_created'];?></td>
                            <td>
                              <label class="badge badge-info"><?php echo $row['user_state'];?></label>
                            </td>
                            <td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<?php if($this->session->userdata('rights')=="super"){ ?>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#editModal<?php echo $row['user_id'];?>"><i class="fa fa-pencil"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleModal<?php echo $row['user_id'];?>"><i class="fa fa-trash"></i> Delete</a>
												</div><?php }?>
											</div>
										</td>
                        </tr>
						
				<div class="modal fade" id="editModal<?php echo $row['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ModalLabel">Edit User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
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
                               <option value="<?php echo $row3['lv_name'];?>" <?php if($row['lv_name'] == $row3['lv_name'])echo 'selected';?> > <?php echo $row3['lv_name'];?> </option>                                 
													
                                                
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
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
						
				<div id="deleModal<?php echo $row['user_id'];?>" class="modal fade delete-modal" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-body text-center">
									 <form action="<?php echo base_url(); ?>Admin/mange_user/delete/<?php echo $row['user_id'];?>" method="post" enctype="multipart/form-data">
										<img src="<?php echo base_url();?>phd/admin/images/sent.png" alt="" width="50" height="46">
										<h3>Are you sure want to delete this User?</h3>
										<div class="m-t-20"> <a href="" class="btn btn-white" data-dismiss="modal">Close</a>
											<button type="submit"  class="btn btn-danger">Delete</button>
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
                          <h5 class="modal-title" id="ModalLabel">New User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?php echo base_url(); ?>Admin/mange_user/save"  method="post" enctype="multipart/form-data">
							
							<div class="row">
							
							<div class="form-group col-6">
                              <label for="recipient-name" class="col-form-label">User ID:</label>
                              <input type="text" readonly class="form-control" name="userid" value="<?php echo h_generate_user_id() ?>" >
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
							<label for="exampleFormControlSelect2">User Level:</label>
							<select class="form-control" name="level">
							
							
							<?php 
								$clas = $this->db->get('user_levels')->result_array();
								foreach($clas as $row3){
										?>
                               <option value="<?php echo $row3['lv_name'];?>"> <?php echo $row3['lv_name'];?> </option>                                 
													
                                                
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
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  