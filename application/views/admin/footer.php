
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <script>document.write(new Date().getFullYear())</script>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">PHD Enterprise LTD </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url();?>phd/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>phd/admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>phd/admin/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>phd/admin/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url();?>phd/admin/js/misc.js"></script>
  <script src="<?php echo base_url();?>phd/admin/js/settings.js"></script>
  <script src="<?php echo base_url();?>phd/admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url();?>phd/admin/js/alerts.js"></script>
  <script src="<?php echo base_url();?>phd/admin/js/data-table.js"></script>
  <script src="<?php echo base_url();?>phd/admin/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="<?php echo base_url();?>phd/admin/js/toastr.min.js"></script>

<script type="text/javascript">
	var baseurl = '<?php echo base_url(); ?>';
</script>

		
<script type="text/javascript">
<?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('failed')){  ?>
    toastr.error("<?php echo $this->session->flashdata('failed'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>
</script>


<script type="text/javascript">
	if ($("#sales-status-chart").length) {
      var pieChartCanvas = $("#sales-status-chart").get(0).getContext("2d");
      var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: {
          datasets: [{
            data: [<?php echo number_format($incomecount,3);?>, <?php echo $withdcount;?>,<?php echo $depositcount;?>, <?php echo number_format($commissiocount,3);?>],
            backgroundColor: [
              '#392c70',
              '#04b76b',
              '#ff5e6d',
              '#eeeeee'
            ],
            borderColor: [
              '#392c70',
              '#04b76b',
              '#ff5e6d',
              '#eeeeee'
            ],
          }],
      
          // These labels appear in the legend and in the tooltips when hovering different arcs
          labels: [
            'Income',
            'With Draws',
            'Deposits',
            'commission Paid'
          ]
        },
        options: {
          responsive: true,
          animation: {
            animateScale: true,
            animateRotate: true
          },
          legend: {
            display: false
          },
          legendCallback: function(chart) { 
            var text = [];
            text.push('<ul class="legend'+ chart.id +'">');
            for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
              text.push('<li><span class="legend-label" style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '"></span>');
              if (chart.data.labels[i]) {
                text.push(chart.data.labels[i]);
              }
              text.push('<label class="badge badge-light badge-pill legend-percentage ml-auto">'+ chart.data.datasets[0].data[i] + '%</label>');
              text.push('</li>');
            }
            text.push('</ul>');
            return text.join("");
          }
        }
      });
      document.getElementById('sales-status-chart-legend').innerHTML = pieChart.generateLegend();
    }
	/////////////////////////////////////////////////////
	
	
	if ($("#daily-sales-chart").length) {
      var dailySalesChartData = {
        datasets: [{
          data: [<?php echo $incomecount;?>, <?php echo $withdcount;?>,<?php echo $depositcount;?>, <?php echo $commissiocount;?>],
          backgroundColor: [
            '#392c70',
            '#04b76b',
            '#e9e8ef',
            '#ff5e6d'
          ],
          borderWidth: 0
        }],
    
        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
          'Income',
            'With Draws',
            'Deposits',
            'commission Paid'
        ]
      };
      var dailySalesChartOptions = {
        responsive: true,
        maintainAspectRatio: true,
        animation: {
          animateScale: true,
          animateRotate: true
        },
        legend: {
          display: false
        },
        legendCallback: function(chart) { 
          var text = [];
          text.push('<ul class="legend'+ chart.id +'">');
          for (var i = 0; i < chart.data.datasets[0].data.length; i++) {
            text.push('<li><span class="legend-label" style="background-color:' + chart.data.datasets[0].backgroundColor[i] + '"></span>');
            if (chart.data.labels[i]) {
              text.push(chart.data.labels[i]);
            }
            text.push('</li>');
          }
          text.push('</ul>');
          return text.join("");
        },
        cutoutPercentage: 70     
      };
      var dailySalesChartCanvas = $("#daily-sales-chart").get(0).getContext("2d");
      var dailySalesChart = new Chart(dailySalesChartCanvas, {
        type: 'doughnut',
        data: dailySalesChartData,
        options: dailySalesChartOptions
      });
      document.getElementById('daily-sales-chart-legend').innerHTML = dailySalesChart.generateLegend();
    }
	
</script>

</body>


</html>
