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
    <link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/daisyui@3.5.0_dist_full.css">
    <link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/tailwind.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/flowbite_1.8.0_flowbite.min.css">
   
    <script src="<?php echo base_url();?>phd/tailwind/custom.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/custom.css">
    <script src="<?php echo base_url();?>phd/tailwind/cdn.tailwindcss.com_3.3.3.js" />
    </script>
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
   
	<title>Records - Elite Site Optimizer</title>
  </head>
  <body>
    <div id="app" data-v-app="">
      <div class="w-full min-h-[100vh] bg-[#F8F9FC]">
        <div class="w-full min-h-[100vh]">
          <div class="w-full flex justify-between items-center p-3 py-3 box-border bg-[white]">
            <div class="w-[9rem]">
              <img class="w-full" src="<?php echo base_url();?>phd/tailwind/logo.png" alt="">
            </div>
            <a href="<?php echo base_url();?>Client/my" class="w-[2rem]">
              <img class="w-full" src="<?php echo base_url();?>phd/tailwind/me.png" alt="">
            </a>
            <!---->
            <!---->
          </div>
          <div>
            <div class="w-full">
              <div class="van-tabs">
      <div class="van-tabbar">
        <div class="van-tab" onclick="changeTab(0)" id="tab0">All</div>
        <div class="van-tab" onclick="changeTab(1)" id="tab1">Pending</div>
        <div class="van-tab" onclick="changeTab(2)" id="tab2">Completed</div>
        <div class="van-tab" onclick="changeTab(3)" id="tab3">Undone</div>
      </div>
      <div class="van-tab-line"></div>
      <div class="van-tab-content">
        <div class="tab-content" id="tabContent0">
										<?php 
foreach($clientrecords as $row){
?>
					<div>
                          <div class="w-full flex justify-between items-center mb-2">
                            <div class="text-[#666] text-sm font-medium"><?php echo  $row['date_transct']; ?></div>
                            <div class="text-white text-xs rounded p-1 bg-[#FAAF36] font-medium"><?php echo  $row['status']=="success" ? 'Completed' : 'Pending'; ?></div>
                            
                          </div>
                          <div class="w-full flex flex-col mb-6 shadow bg-white overflow-hidden rounded-xl p-3 box-border">
                            <div class="flex">
                              <div class="mr-4" style="width: 6rem;">
                                <div class="van-image" style="width: 6rem; height: 6rem; overflow: hidden; border-radius: 0.4rem;">
                                  <img class="van-image__img" style="object-fit: cover;"  src="<?php echo base_url().$this->Client_model->get_prodctdetails($row['pro_id'],'pro_pic');?>" >
                                  
                                </div>
                              </div>
                              <div class="flex flex-col h-[6rem] justify-between">
                                <div class="flex flex-col">
                                  <div class="text-[#666] text-base font-semibold whitespace-nowrap w-[52vw] overflow-hidden text-ellipsis"><?php echo $this->Client_model->get_prodctdetails($row['pro_id'],'pro_name');?></div>
                                  <div class="text-[#666] text-sm mt-2">USDT <?php echo $this->Client_model->get_prodctdetails($row['pro_id'],'pro_price');?></div>
                                </div>
                                <div role="radiogroup" class="van-rate van-rate--readonly" tabindex="0" aria-disabled="false" aria-readonly="true">
                                  <div role="radio" class="van-rate__item" tabindex="0" aria-setsize="5" aria-posinset="1" aria-checked="true" style="padding-right: 2px;">
                                    <i class="van-badge__wrapper van-icon van-icon-star van-rate__icon van-rate__icon--full" style="color: rgb(255, 210, 30); font-size: 18px;">
                                    </i>
                                    
                                  </div>
                                  <div role="radio" class="van-rate__item" tabindex="0" aria-setsize="5" aria-posinset="2" aria-checked="true" style="padding-right: 2px;">
                                    <i class="van-badge__wrapper van-icon van-icon-star van-rate__icon van-rate__icon--full" style="color: rgb(255, 210, 30); font-size: 18px;">
                                      
                                    </i>
                                    
                                  </div>
                                  <div role="radio" class="van-rate__item" tabindex="0" aria-setsize="5" aria-posinset="3" aria-checked="true" style="padding-right: 2px;">
                                    <i class="van-badge__wrapper van-icon van-icon-star van-rate__icon van-rate__icon--full" style="color: rgb(255, 210, 30); font-size: 18px;">
                                      
                                    </i>
                                    
                                  </div>
                                  <div role="radio" class="van-rate__item" tabindex="0" aria-setsize="5" aria-posinset="4" aria-checked="true" style="padding-right: 2px;">
                                    <i class="van-badge__wrapper van-icon van-icon-star van-rate__icon van-rate__icon--full" style="color: rgb(255, 210, 30); font-size: 18px;">
                                      
                                    </i>
                                    
                                  </div>
                                  <div role="radio" class="van-rate__item" tabindex="0" aria-setsize="5" aria-posinset="5" aria-checked="true">
                                    <i class="van-badge__wrapper van-icon van-icon-star van-rate__icon van-rate__icon--full" style="color: rgb(255, 210, 30); font-size: 18px;">
                                      
                                    </i>
                                    
                                  </div>
                                </div>
                              
							  </div>
                            </div>
                            <div class="mt-5 grid grid-cols-5 gap-2">
                              <div class="col-span-2 flex flex-col">
                                <div class="text-xs text-[#666] font-medium">Total Amount</div>
                                <div class="mt-2 text-sm text-[#FAAF36] font-semibold">USDT <?php echo $this->Client_model->get_prodctdetails($row['pro_id'],'pro_price');?></div>
                              </div>
                              <div class="col-span-2 flex flex-col">
                                <div class="text-xs text-[#666] font-medium">Commission</div>
                                <div class="mt-2 text-sm text-[#FAAF36] font-semibold">USDT <?php echo $this->Client_model->get_prodctdetails($row['pro_id'],'pro_comsion');?></div>
                              </div>
                              <div class="col-span-1 flex justify-end items-center">
                                
                              </div>
                            </div>
                          </div>
                        </div>
          <?php 
}
?>  
        </div>
        <div class="tab-content" id="tabContent1">
           <div class="van-list__finished-text">No more data...</div>         
        </div>
        <div class="tab-content" id="tabContent2">
          					<?php 
foreach($clientrecords as $row){
?>
					<div>
                          <div class="w-full flex justify-between items-center mb-2">
                            <div class="text-[#666] text-sm font-medium"><?php echo  $row['date_transct']; ?></div>
                            <div class="text-white text-xs rounded p-1 bg-[#FAAF36] font-medium"><?php echo  $row['status']=="success" ? 'Completed' : 'Pending'; ?></div>
                            
                          </div>
                          <div class="w-full flex flex-col mb-6 shadow bg-white overflow-hidden rounded-xl p-3 box-border">
                            <div class="flex">
                              <div class="mr-4" style="width: 6rem;">
                                <div class="van-image" style="width: 6rem; height: 6rem; overflow: hidden; border-radius: 0.4rem;">
                                  <img class="van-image__img" style="object-fit: cover;"  src="<?php echo base_url().$this->Client_model->get_prodctdetails($row['pro_id'],'pro_pic');?>" >
                                  
                                </div>
                              </div>
                              <div class="flex flex-col h-[6rem] justify-between">
                                <div class="flex flex-col">
                                  <div class="text-[#666] text-base font-semibold whitespace-nowrap w-[52vw] overflow-hidden text-ellipsis"><?php echo $this->Client_model->get_prodctdetails($row['pro_id'],'pro_name');?></div>
                                  <div class="text-[#666] text-sm mt-2">USDT <?php echo $this->Client_model->get_prodctdetails($row['pro_id'],'pro_price');?></div>
                                </div>
                                <div role="radiogroup" class="van-rate van-rate--readonly" tabindex="0" aria-disabled="false" aria-readonly="true">
                                  <div role="radio" class="van-rate__item" tabindex="0" aria-setsize="5" aria-posinset="1" aria-checked="true" style="padding-right: 2px;">
                                    <i class="van-badge__wrapper van-icon van-icon-star van-rate__icon van-rate__icon--full" style="color: rgb(255, 210, 30); font-size: 18px;">
                                    </i>
                                    
                                  </div>
                                  <div role="radio" class="van-rate__item" tabindex="0" aria-setsize="5" aria-posinset="2" aria-checked="true" style="padding-right: 2px;">
                                    <i class="van-badge__wrapper van-icon van-icon-star van-rate__icon van-rate__icon--full" style="color: rgb(255, 210, 30); font-size: 18px;">
                                      
                                    </i>
                                    
                                  </div>
                                  <div role="radio" class="van-rate__item" tabindex="0" aria-setsize="5" aria-posinset="3" aria-checked="true" style="padding-right: 2px;">
                                    <i class="van-badge__wrapper van-icon van-icon-star van-rate__icon van-rate__icon--full" style="color: rgb(255, 210, 30); font-size: 18px;">
                                      
                                    </i>
                                    
                                  </div>
                                  <div role="radio" class="van-rate__item" tabindex="0" aria-setsize="5" aria-posinset="4" aria-checked="true" style="padding-right: 2px;">
                                    <i class="van-badge__wrapper van-icon van-icon-star van-rate__icon van-rate__icon--full" style="color: rgb(255, 210, 30); font-size: 18px;">
                                      
                                    </i>
                                    
                                  </div>
                                  <div role="radio" class="van-rate__item" tabindex="0" aria-setsize="5" aria-posinset="5" aria-checked="true">
                                    <i class="van-badge__wrapper van-icon van-icon-star van-rate__icon van-rate__icon--full" style="color: rgb(255, 210, 30); font-size: 18px;">
                                      
                                    </i>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mt-5 grid grid-cols-5 gap-2">
                              <div class="col-span-2 flex flex-col">
                                <div class="text-xs text-[#666] font-medium">Total Amount</div>
                                <div class="mt-2 text-sm text-[#FAAF36] font-semibold">USDT <?php echo $this->Client_model->get_prodctdetails($row['pro_id'],'pro_price');?></div>
                              </div>
                              <div class="col-span-2 flex flex-col">
                                <div class="text-xs text-[#666] font-medium">Commission</div>
                                <div class="mt-2 text-sm text-[#FAAF36] font-semibold">USDT <?php echo $this->Client_model->get_prodctdetails($row['pro_id'],'pro_comsion');?></div>
                              </div>
                              <div class="col-span-1 flex justify-end items-center">
                                
                              </div>
                            </div>
                          </div>
                        </div>
          <?php 
}
?>
        </div>
        <div class="tab-content" id="tabContent3">
           <div class="van-list__finished-text">No more data...</div>
        </div>
      </div>
    </div>
  
            </div>
          </div>
          <div class="van-tabbar__placeholder" style="height: 64px;">
            <div role="tablist" class="van-tabbar van-tabbar--fixed van-safe-area-bottom">
              <div role="tab" class="van-tabbar-item" tabindex="0" aria-selected="false" style="color: rgb(153, 153, 153);">
                <a href="<?php echo base_url();?>Client/home"><div class="van-badge__wrapper van-tabbar-item__icon">
                  <img src="<?php echo base_url();?>phd/tailwind/home.png" style="width: 1.6rem; height: 1.6rem;">
                  <!---->
                </div>
                <div class="van-tabbar-item__text">
                  <span>Home</span>
                </div></a>
              </div>
              <div role="tab" class="van-tabbar-item" tabindex="0" aria-selected="false" style="color: rgb(153, 153, 153);">
               <a href="<?php echo base_url();?>Client/start"> <div class="van-badge__wrapper van-tabbar-item__icon">
                  <img src="<?php echo base_url();?>phd/tailwind/starting.png" style="margin-top: -2rem; width: 3.5rem; height: 3.5rem;">
                  <!---->
                </div>
                <div class="van-tabbar-item__text">
                  <span>Starting</span>
                </div></a>
              </div>
              <div role="tab" class="van-tabbar-item van-tabbar-item--active" tabindex="0" aria-selected="true" style="color: #FAAF36;">
                <div class="van-badge__wrapper van-tabbar-item__icon">
                  <img src="<?php echo base_url();?>phd/tailwind/records_h.png" style="width: 1.6rem; height: 1.6rem;">
                  <!---->
                </div>
                <div class="van-tabbar-item__text">
                  <span>Records</span>
                </div>
              </div>
            </div>
          </div>
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

    // Set "All" Tab as default selected
    window.onload = function () {
      changeTab(0);
    };
  </script>
  <script src="<?php echo base_url();?>phd/tailwind/tabs_tabs_tabs.js"></script>
  <script src="<?php echo base_url();?>phd/tailwind/flowbite_1.8.0_flowbite.min.js"></script>
</html>