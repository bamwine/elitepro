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
    </style>
    <title>Vip Levels - Elite Site Optimizer</title>
  </head>
  <body>
    <div id="app" >
      <div class="w-full min-h-[100vh] bg-[#F8F9FC]">
        <div class="w-full min-h-[100vh]">
          <!---->
          <div>
            <div class="w-full h-full flex flex-col pb-6">
              <div>
                <div class="van-sticky">
                  <div class="van-nav-bar van-hairline--bottom van-safe-area-top  bg-[#000000] text-[#FFFFFF]">
                    <div class="van-nav-bar__content">
                    <a onclick="goBack()">  <div class="van-nav-bar__left van-haptics-feedback text-[#FFFFFF]">
                        <i class="fa fa-angle-left"></i>
                        <!---->
                      </div> </a>
                      <div class="van-nav-bar__title van-ellipsis text-[#FFFFFF]">Vip Levels</div>
                      <!---->
                    </div>
                  </div>
                </div>
              </div>
             <div class="w-full p-6 box-border flex flex-col">
                <div class="w-full mb-4 border bg-white rounded-xl shadow flex p-3">
                  <div class="flex mr-4">
                    <img class="w-16 h-16" src="<?php echo base_url();?>phd/tailwind/1683135431630339970.png" alt="">
                  </div>
                  <div class="flex flex-col">
                    <div class="flex items-center">
                      <div class="text-base text-[#333] font-semibold mr-2">VIP1</div>
                      <?php if($this->Client_model->get_clientdetails('clt_level')=="VIP1"){ ?>
						<span class="van-tag van-tag--round van-tag--default" style="background: #FFAA00;">Current</span>
						<?php } else {?>
						<a class="text-sm text-[#FFAA00] font-semibold mr-2 underline" href="<?php echo $this->db->get_where('settings' , array('type' =>'customerservice'))->row()->description;?>">Upgrade now</a>
						<?php }?>
                    </div>
                    <div class="mt-2 text-[#FFAA00] text-sm font-semibold">USDT 100</div>
                    <div class="mt-2 text-xs text-[#666]">Per Task Commission 0.4%</div>
                    <div class="mt-2 text-xs text-[#666]">40 Task Completed/Set</div>
                    <div class="mt-2 text-xs text-[#666]">Able to withdraw 4 times, 0% Charges</div>
                  </div>
                </div>
                <div class="w-full mb-4 border bg-white rounded-xl shadow flex p-3">
                  <div class="flex mr-4">
                    <img class="w-16 h-16" src="<?php echo base_url();?>phd/tailwind/1683135444978440962.png" alt="">
                  </div>
                  <div class="flex flex-col">
                    <div class="flex items-center">
                      <div class="text-base text-[#333] font-semibold mr-2">VIP2</div>
                       <?php if($this->Client_model->get_clientdetails('clt_level')=="VIP2"){ ?>
						<span class="van-tag van-tag--round van-tag--default" style="background: #FFAA00;">Current</span>
						<?php } else {?>
						<a class="text-sm text-[#FFAA00] font-semibold mr-2 underline" href="<?php echo $this->db->get_where('settings' , array('type' =>'customerservice'))->row()->description;?>">Upgrade now</a>
						<?php }?>
					  </div>
                    <div class="mt-2 text-[#FFAA00] text-sm font-semibold">USDT 500</div>
                    <div class="mt-2 text-xs text-[#666]">Per Task Commission 0.6%</div>
                    <div class="mt-2 text-xs text-[#666]">45 Task Completed/Set</div>
                    <div class="mt-2 text-xs text-[#666]">Able to withdraw 4 times, 0% Charges</div>
                  </div>
                </div>
                <div class="w-full mb-4 border bg-white rounded-xl shadow flex p-3">
                  <div class="flex mr-4">
                    <img class="w-16 h-16" src="<?php echo base_url();?>phd/tailwind/1683135461467660218.png" alt="">
                  </div>
                  <div class="flex flex-col">
                    <div class="flex items-center">
                      <div class="text-base text-[#333] font-semibold mr-2">VIP3</div>
                       <?php if($this->Client_model->get_clientdetails('clt_level')=="VIP3"){ ?>
						<span class="van-tag van-tag--round van-tag--default" style="background: #FFAA00;">Current</span>
						<?php } else {?>
						<a class="text-sm text-[#FFAA00] font-semibold mr-2 underline" href="<?php echo $this->db->get_where('settings' , array('type' =>'customerservice'))->row()->description;?>">Upgrade now</a>
						<?php }?>
					  </div>
                    <div class="mt-2 text-[#FFAA00] text-sm font-semibold">USDT 1500</div>
                    <div class="mt-2 text-xs text-[#666]">Per Task Commission 0.8%</div>
                    <div class="mt-2 text-xs text-[#666]">50 Task Completed/Set</div>
                    <div class="mt-2 text-xs text-[#666]">Able to withdraw 5 times, 0% Charges</div>
                  </div>
                </div>
                <div class="w-full mb-4 border bg-white rounded-xl shadow flex p-3">
                  <div class="flex mr-4">
                    <img class="w-16 h-16" src="<?php echo base_url();?>phd/tailwind/1683135471230297283.png" alt="">
                  </div>
                  <div class="flex flex-col">
                    <div class="flex items-center">
                      <div class="text-base text-[#333] font-semibold mr-2">VIP4</div>
                      <?php if($this->Client_model->get_clientdetails('clt_level')=="VIP4"){ ?>
						<span class="van-tag van-tag--round van-tag--default" style="background: #FFAA00;">Current</span>
						<?php } else {?>
						<a class="text-sm text-[#FFAA00] font-semibold mr-2 underline" href="<?php echo $this->db->get_where('settings' , array('type' =>'customerservice'))->row()->description;?>">Upgrade now</a>
						<?php }?>
					 </div>
                    <div class="mt-2 text-[#FFAA00] text-sm font-semibold">USDT 5000</div>
                    <div class="mt-2 text-xs text-[#666]">Per Task Commission 1%</div>
                    <div class="mt-2 text-xs text-[#666]">55 Task Completed/Set</div>
                    <div class="mt-2 text-xs text-[#666]">Able to withdraw 6 times, 0% Charges</div>
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
  <script src="<?php echo base_url();?>phd/tailwind/tabs_tabs_tabs.js"></script>
<script>
     function goBack() { window.history.back(); }
  </script>
</html>