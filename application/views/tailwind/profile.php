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
    <script src="<?php echo base_url();?>phd/tailwind/vue@3.3.4_dist_vue.global.min.js"></script>
    <script src="<?php echo base_url();?>phd/tailwind/axios@1.4.0_dist_axios.min.js"></script>
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
                    <a  onclick="goBack()">  <div class="van-nav-bar__left van-haptics-feedback text-[#FFFFFF]">
                        <i class="fa fa-angle-left"></i>
                        <!---->
                      </div> </a>
                      <div class="van-nav-bar__title van-ellipsis text-[#FFFFFF]">Personal Information</div>
                      <!---->
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full pl-6 pr-6 mt-6 box-border flex flex-col">
            <div class="w-full flex flex-col">
              <div class="w-full flex flex-col items-center justify-center">
                <div class="van-uploader">
                  <div class="van-uploader__wrapper">
                    <div class="van-uploader__input-wrapper">
                      <div class="w-20 h-20 ml-6 p-2 mr-6 border-2 rounded-full border-[rgba(255,255,255,.2)]">
                        <img class="w-full h-full rounded-full" src="<?php echo base_url();?>phd/tailwind/user.png" alt="">
                      </div>
                      <input type="file" class="van-uploader__input" accept="image/*">
                    </div>
                  </div>
                </div>
                <div class="text-[#666] text-sm mt-2 flex items-center">
                  <div class="mr-1">Tap to change</div>
                  <i class="van-badge__wrapper van-icon van-icon-edit" style="font-size: 16px;">
                    <!---->
                    <!---->
                    <!---->
                  </i>
                </div>
              </div>
              <!---->
              <!---->
              <div class="w-full mt-6">
                <button type="button" class="van-button van-button--default van-button--large" style="color: white; background: #FAAF36; border-color: #FAAF36;">
                  <div class="van-button__content">
                    <!---->
                    <span class="van-button__text">
                      <span class="font-oswald">Update</span>
                    </span>
                    <!---->
                  </div>
                </button>
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