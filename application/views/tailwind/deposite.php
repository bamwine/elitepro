<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="viewport-fit=cover">
    <meta name="viewport" content="width=device-width" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <?php include 'css.php';?>
	<link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/daisyui@3.5.0_dist_full.css">
    <link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/tailwind.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/flowbite_1.8.0_flowbite.min.css">
    <script src="<?php echo base_url();?>phd/tailwind/vue@3.3.4_dist_vue.global.min.js"></script>
    <script src="<?php echo base_url();?>phd/tailwind/axios@1.4.0_dist_axios.min.js"></script>
    <script src="<?php echo base_url();?>phd/tailwind/custom.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/custom.css">
    <script src="<?php echo base_url();?>phd/tailwind/cdn.tailwindcss.com_3.3.3.js" />
    </script>
    <link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/fontawesome-free-6.4.2/css/all.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/vant@4.6.4_lib.css">
    <script src="<?php echo base_url();?>phd/tailwind/vant@4.6.4_lib.js"></script>
    
	<style>
      body {
        background-color: white;
      }

      #app {
        margin: 0 auto;
        width: 100%;
      }

      @media (min-width: 640px) {
        #app {
          width: 1000px;
        }
      }

      .active-button {
        background: white !important;
        color: #3730a3;
      }
	  
	   .van-tab {
      cursor: pointer;
      padding: 10px 15px;
      color: #666;
      position: relative;
    }

    .van-tab.active {
      color: orange;
      background-color: transparent;
    }

    .van-tab.active::after {
      content: "";
      display: block;
      width: 30%;
      height: 2px;
      background-color: orange;
      position: absolute;
      bottom: -4px;
      left: 35%;
    }

    .van-tab-line {
      display: none;
      height: 2px;
      background-color: orange;
      position: relative;
    }

    .van-tab.active + .van-tab-line {
      display: block;
    }

    .tab-content {
      display: none;
      padding: 20px;
    }
	  
    </style>
    <title>Deposit- Elite Site Optimizer</title>
  </head>
  <body>
    <div id="app">
      <div class="w-full min-h-[100vh] bg-[#F8F9FC]">
        <div class="w-full min-h-[100vh]">
          <!---->
          <div>
            <div class="w-full h-full">
              <div>
                <div class="van-sticky">
                  <div class="van-nav-bar van-hairline--bottom van-safe-area-top  bg-[#000000] text-[#FFFFFF]">
                    <div class="van-nav-bar__content">
                     <a onclick="goBack()"> <div class="van-nav-bar__left van-haptics-feedback text-[#FFFFFF]">
                        <i class="fa fa-angle-left"></i>
                        <!---->
                      </div></a>
                      <div class="van-nav-bar__title van-ellipsis text-[#FFFFFF]">Deposit</div>
                      <!---->
                    </div>
                  </div>
                </div>
              </div>
               <div class="van-tabs">
      <div class="van-tabbar" style="border-color: #fafbfd; background: #fafbfd;">
        <div class="van-tab" onclick="changeTab(0)" id="tab0">Deposit</div>
        <div class="van-tab" onclick="changeTab(1)" id="tab1">History</div>
        
      </div>
      
      <div class="van-tab-content">
        <div class="tab-content" id="tabContent0">
          <div id="deposite_tab" role="tabpanel" class="van-tab__panel" tabindex="0" aria-labelledby="deposite" style="">
                    <div class="p-4 box-border flex flex-col">
                      <div class="flex flex-col justify-between p-4 box-border rounded-xl bg-[url('<?php echo base_url();?>phd/tailwind/bg3.png')] bg-cover shadow">
                        <div class="text-white opacity-70 text-sm font-semibold">Account Amount</div>
                        <div class="flex mt-4">
                          <div class="text-white text-3xl font-bold flex items-center"><?php echo  $this->Client_model->get_clientdetails('clt_bal'); ?></div>
                          <div class="text-white text-sm font-bold flex items-center ml-2 pt-[12px]">USDT</div>
                        </div>
                      </div>
                      <div class="w-full mt-6">
                        <a type="button" class="van-button van-button--default van-button--large" style="color: white; background: #FAAF36; border-color: #FAAF36;" href="<?php echo $this->db->get_where('settings' , array('type' =>'customerservice'))->row()->description;?>">
                          <div class="van-button__content">
                            <!---->
                            <span class="van-button__text">
                              <span class="font-semibold text-white">Contact Customer Service</span>
                            </span>
                            <!---->
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                 
        </div>
        <div class="tab-content" id="tabContent1">
          <div id="history_tab" role="tabpanel"  class="van-tab__panel" tabindex="0" aria-labelledby="history" style="">
                    <div class="h-[74vh] overflow-y-scroll">
                      <div class="w-full pl-6 pr-6 pt-6 box-border flex flex-col">
                        
                        <div class="van-pull-refresh">
                          <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                            <div class="van-pull-refresh__head"></div>
                            <div role="feed" class="van-list" aria-busy="false">
                                <?php 
							foreach($clientdepos as $row){
									?>
							  <div>
                                <div class="w-full mb-4 bg-white rounded-xl shadow flex flex-col p-3">
                                  <div class="flex justify-between">
                                    <div class="text-sm font-semibold text-[#999]"><?php echo  $row['tr_id']; ?></div>
                                  </div>
                                  <div class="flex text-base text-[#FAAF36] font-semibold items-center mt-3">USDT <?php echo  $row['tr_amount']; ?></div>
                                  <div class="flex justify-between mt-3">
                                    <div class="text-sm font-normal text-[#999]"><?php echo  $row['tr_update']; ?></div>
                                  </div>
                                </div>
                              </div>
							  <?php 
							}
							?>
                              
                              <!---->
                              <div class="van-list__finished-text">No more data...</div>
                              <!---->
                              <div class="van-list__placeholder"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
        </div>
        
      </div>
    </div>
  
              <!---->
              <!---->
            </div>
          </div>
          <!---->
        </div>
      </div>
    </div>
	  <script>
    function changeTab(tabIndex) {
      const tabContents = document.querySelectorAll('.tab-content');
      const tabs = document.querySelectorAll('.van-tab');

      tabContents.forEach((content, index) => {
        if (index === tabIndex) {
          content.style.display = 'block';
        } else {
          content.style.display = 'none';
        }
      });

      tabs.forEach((tab, index) => {
        if (index === tabIndex) {
          tab.classList.add('active');
        } else {
          tab.classList.remove('active');
        }
      });
    }

    // Set Tab 1 as default selected
    window.onload = function () {
      changeTab(0);
    };
  </script>
<?php include 'javascript.php';?>  
<script src="<?php echo base_url();?>phd/tailwind/tabs_tabs_tabs.js"></script>
<script> function goBack() { window.history.back(); } </script>
</html>