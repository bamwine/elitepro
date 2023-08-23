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
    <script src="<?php echo base_url();?>phd/tailwind/cdn.tailwindcss.com_3.3.3.js" /></script>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/vant@4.6.4_lib.css">
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
      bottom: -0.2px;
      left: 35%;
    }

    .tab-content {
      display: none;
      padding: 20px;
    }
    
    .nested-tab {
      cursor: pointer;
      padding: 10px 15px;
      color: orange;
      background-color: transparent;
      border: 1px solid orange;
      position: relative;
    }

    .nested-tab.active {
      color: white;
      background-color: orange;
      border: none;
    }

    .nested-tab-content {
      display: none;
      padding: 20px;
    }
    </style>
    <title>Withdraw - Elite Site Optimizer</title>
  </head>
  <body>
    <div id="app" data-v-app="">
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
                      <div class="van-nav-bar__title van-ellipsis text-[#FFFFFF]">Withdraw</div>
                      <!---->
                    </div>
                  </div>
                </div>
              </div>
              <div class="van-tabs van-tabs--line">
                
                <div class="van-tabs">
      <div class="van-tabbar" style="border-color: #fafbfd; background: #fafbfd;">
        <div class="van-tab" onclick="changeTab(0)" id="tab0">Withdraw</div>
        <div class="van-tab" onclick="changeTab(1)" id="tab1">History</div>
      </div>
      <div class="van-tab-line"></div>
      <div class="van-tab-content">
        <div class="tab-content" id="tabContent0">
         <div id="withdraw_tab" role="tabpanel" class="van-tab__panel" tabindex="0" aria-labelledby="withdraw" style="">
                    <div class="p-4 box-border flex flex-col">
                      <div class="flex flex-col justify-between p-4 box-border rounded-xl bg-[url('<?php echo base_url();?>phd/tailwind/bg3.png')] bg-cover shadow mb-4">
                        <div class="text-white opacity-70 text-sm font-semibold">Account Amount</div>
                        <div class="flex mt-4 mb-4">
                          <div class="text-white text-3xl font-bold flex items-center"><?php echo $this->session->userdata('balance');?></div>
                          <div class="text-white text-sm font-bold flex items-center ml-2 pt-[12px]">USDT</div>
                        </div>
                        <div class="text-white opacity-70 text-xs font-semibold">You will receive your withdrawal within an hour</div>
                      </div>
                      <div class="w-full">
                        <!---->
                        <div class="w-full mt-4 box-border flex flex-col">
                          <div class="w-full flex flex-col">
                            <!---->
                            <div class="w-full flex flex-col mt-2">
                              <div class="text-[#666] font-semibold text-base pl-4">Withdraw Amount</div>
                              <div class="w-full mt-2 overflow-hidden shadow">
                                <div class="van-cell van-field">
                                  <!---->
                                  <!---->
                                  <div class="van-cell__value van-field__value">
                                    <div class="van-field__body">
                                      <input type="text" id="van-field-9-input" class="van-field__control" placeholder="Withdraw Amount">
                                      <!---->
                                      <!---->
                                      <div class="van-field__button">
                                        <button type="button" class="van-button van-button--primary van-button--small" style="color: white; background: #FAAF36; border-color: #FAAF36;">
                                          <div class="van-button__content">
                                            <!---->
                                            <span class="van-button__text">
                                              <span class="text-base uppercase">All</span>
                                            </span>
                                            <!---->
                                          </div>
                                        </button>
                                      </div>
                                    </div>
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </div>
                            <div class="w-full flex flex-col mt-2">
                              <div class="text-[#666] font-semibold text-base pl-4">Transaction Password</div>
                              <div class="w-full mt-2 overflow-hidden shadow">
                                <div class="van-cell van-field">
                                  <!---->
                                  <!---->
                                  <div class="van-cell__value van-field__value">
                                    <div class="van-field__body">
                                      <input type="password" id="van-field-10-input" class="van-field__control" placeholder="Transaction Password">
                                      <!---->
                                      <!---->
                                      <!---->
                                    </div>
                                    <!---->
                                    <!---->
                                  </div>
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </div>
                            <div class="w-full mt-6">
                              <button type="button" class="text-white font-bold block w-full rounded bg-[#FFAA00] hover:bg-[#FFAA00]   p-4   " data-te-ripple-init> Withdraw </button>
                            </div>
                            <!---->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
        </div>
        <div class="tab-content" id="tabContent1">
          <div class="van-tabs">
            <div class="van-tabbar">
              <div class="van-tab nested-tab" onclick="changeNestedTab(0)" id="nestedTab0">Reviewing</div>
              <div class="van-tab nested-tab" onclick="changeNestedTab(1)" id="nestedTab1">Success</div>
              <div class="van-tab nested-tab" onclick="changeNestedTab(2)" id="nestedTab2">Reject</div>
            </div>
            <div class="van-tab-content">
              <div class="tab-content nested-tab-content" id="nestedTabContent0">
                <div>
                                <div class="w-full mb-4 bg-white rounded-xl shadow flex flex-col p-3">
                                  <div class="flex justify-between">
                                    <div class="text-sm font-semibold text-[#999]">202307224634046201530982400</div>
                                  </div>
                                  <div class="flex text-base text-[#FAAF36] font-semibold items-center mt-3">USDT 1060</div>
                                  <div class="flex justify-between mt-3">
                                    <div class="text-sm font-normal text-[#999]">2023-07-22 10:22:20</div>
                                  </div>
                                </div>
                              </div>
                              <!---->
                              <div class="van-list__finished-text">No more data...</div>
              </div>
              <div class="tab-content nested-tab-content" id="nestedTabContent1">
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
              </div>
              <div class="tab-content nested-tab-content" id="nestedTabContent2">
                <h2>Reject Content</h2>
                <p>This is the content of Reject tab.</p>
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
        </div>
      </div>
    </div>
  </body>
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

    function changeNestedTab(nestedTabIndex) {
      const nestedTabContents = document.querySelectorAll('.nested-tab-content');
      const nestedTabs = document.querySelectorAll('.nested-tab');

      nestedTabContents.forEach((content, index) => {
        if (index === nestedTabIndex) {
          content.style.display = 'block';
        } else {
          content.style.display = 'none';
        }
      });

      nestedTabs.forEach((tab, index) => {
        if (index === nestedTabIndex) {
          tab.classList.add('active');
        } else {
          tab.classList.remove('active');
        }
      });
    }

    // Set "All" Tab as default selected
    window.onload = function () {
      changeTab(0);
    };
  </script>
<?php include 'javascript.php';?>  
<script src="<?php echo base_url();?>phd/tailwind/tabs_tabs_tabs.js"></script>
<script> function goBack() { window.history.back(); } </script>
</html>