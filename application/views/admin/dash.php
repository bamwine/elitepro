<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Dashboard
            </h3>
          </div>
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          New users
                        </p>
                        <h2><?php echo $usercount;?>.00</h2>
                        <label class="badge badge-outline-info badge-pill">Successful </label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                          Deposits
                        </p>
                        <h2>$<?php echo $depositcount;?></h2>
                        <label class="badge badge-outline-info badge-pill">Successful </label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                          WithDraw
                        </p>
                        <h2>$<?php echo $withdcount;?></h2>
                        <label class="badge badge-outline-danger badge-pill">Successful </label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-check-circle mr-2"></i>
                          Pending
                        </p>
                        <h2>$<?php echo $pendingcount;?></h2>
                        <label class="badge badge-outline-success badge-pill">Successful </label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-chart-line mr-2"></i>
                          Income
                        </p>
                        <h2>$<?php echo $incomecount;?></h2>
                        <label class="badge badge-outline-success badge-pill">Successful on withdraw </label>
                      </div>
                      
                  </div>
                </div>
              </div>
            </div>
          </div>
          
		   
		  <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">
                    <i class="fas fa-chart-pie"></i>
                    Daily Sales status
                  </h4>
                  <div class="flex-grow-1 d-flex flex-column justify-content-between">
                    <canvas id="sales-status-chart" class="mt-3"></canvas>
                    <div class="pt-4">
                      <div id="sales-status-chart-legend" class="sales-status-chart-legend"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
			 
			<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body d-flex flex-column">
                  <h4 class="card-title">
                    <i class="fas fa-tachometer-alt"></i>
                    Daily Sales
                  </h4>
                  <p class="card-description">Daily sales for the past one month</p>
                  <div class="flex-grow-1 d-flex flex-column justify-content-between">
                    <canvas id="daily-sales-chart" class="mt-3 mb-3 mb-md-0"></canvas>
                    <div id="daily-sales-chart-legend" class="daily-sales-chart-legend pt-4 border-top"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
		  <div class="row">
            <div class="col-md-12 grid-margin ">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <i class="fas fa-table"></i>
                    Sales Data
                  </h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Amount</th>                          
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="font-weight-bold">
                            Deposits
                          </td>
                          <td class="text-muted">
                            $<?php echo $depositcount;?>
                          </td>
                          
                          <td>
                            <label class="badge badge-success badge-pill">10 in processing</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            WithDraws
                          </td>
                          <td class="text-muted">
                            $<?php echo $withdcount;?>
                          </td>
                          
                          <td>
                            <label class="badge badge-success badge-pill">20 in processing</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Pending
                          </td>
                          <td class="text-muted">
                            $<?php echo $pendingcount;?>
                          </td>
                          
                          <td>
                            <label class="badge badge-warning badge-pill">10 in processing</label>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-weight-bold">
                            Income
                          </td>
                          <td class="text-muted">
                            $<?php echo $incomecount;?>
                          </td>
                          
                          <td>
                            <label class="badge badge-warning badge-pill"> 30 in processing</label>
                          </td>
                        </tr>
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
		  </div>
          
		   
		</div>