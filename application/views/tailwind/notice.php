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
    <title>Notifications - Elite Site Optimizer</title>
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
                      <div class="van-nav-bar__title van-ellipsis text-[#FFFFFF]">Notifications</div>
                      <!---->
                    </div>
                  </div>
                </div>
              </div>
            <div class="w-full pl-6 pr-6 pt-6 box-border flex flex-col">
            <div>
              <div class="van-sticky"></div>
            </div>
            <div class="van-pull-refresh">
              <div class="van-pull-refresh__track" style="transition-duration: 0ms;">
                <div class="van-pull-refresh__head"></div>
                <div role="feed" class="van-list" aria-busy="false">
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
          <!---->
        </div>
      </div>
    </div>
  </body>
   <script src="<?php echo base_url();?>phd/tailwind/tabs_tabs_tabs.js"></script>
<script> function goBack() { window.history.back(); } </script>
</html>