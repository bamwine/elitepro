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
    <title>Personal Information - Elite Site Optimizer</title>
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
                      <div class="van-nav-bar__title van-ellipsis text-[#FFFFFF]">Modify information</div>
                      <!---->
                    </div>
                  </div>
                </div>
              </div>
               <div class="w-full p-6 box-border flex flex-col">
            <div class="flex flex-col bg-white shadow rounded">
              <a href="<?php echo base_url();?>Client/profile2"> 
			  <div class="flex items-center justify-between p-4 box-border border-b-[1px] border-[#EBEBEB]">
                <div class="flex items-center">
                  <div class="text-black text-sm font-medium">Modify Personal Information</div>
                </div>
                <i class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(153, 153, 153); font-size: 16px;">
                  
                </i>
              </div></a>
              <div class="flex items-center justify-between p-4 box-border border-b-[1px] border-[#EBEBEB]">
                <div class="flex items-center">
                  <div class="text-black text-sm font-medium">Username</div>
                </div>
                <div class="text-[#666] text-sm font-medium"><?php echo  $this->Client_model->get_clientdetails('clt_name'); ?></div>
              </div>
              <div class="flex items-center justify-between p-4">
                <div class="flex items-center">
                  <div class="text-black text-sm font-medium">Phone</div>
                </div>
                <div class="text-[#666] text-sm font-medium"><?php echo  $this->Client_model->get_clientdetails('clt_phone'); ?></div>
              </div>
            </div>
            <div class="mt-4 flex flex-col bg-white shadow rounded">
            <a href="<?php echo base_url();?>Client/updatePassword"> 
			<div class="flex items-center justify-between p-4 box-border border-b-[1px] border-[#EBEBEB]">
                <div class="flex items-center">
                  <div class="text-black text-sm font-medium">Update Password</div>
                </div>
                <i class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(153, 153, 153); font-size: 16px;">
                  
                </i>
              </div></a>
              <a href="<?php echo base_url();?>Client/updateTransaction"> 
			  <div class="flex items-center justify-between p-4 box-border">
                <div class="flex items-center">
                  <div class="text-black text-sm font-medium">Update Transaction Password</div>
                </div>
                <i class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(153, 153, 153); font-size: 16px;">
                  
                </i>
              </div></a>
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
<script> function goBack() { window.history.back(); } </script>
</html>