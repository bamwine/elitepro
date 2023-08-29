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
    <title>Home - Elite Site Optimizer</title>
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
            <div class="w-full min-h-[88vh] relative bg-white">
              <div class="fixed flex overflow-hidden left-0 bottom-[10vh] p-3 pr-4 rounded-r-full bg-[#122749]" style="z-index: 3;">
                <div class="van-image van-image--round mr-3" style="width: 2.6rem; height: 2.6rem;">
                  <img src="<?php echo base_url();?>phd/tailwind/user.png" class="van-image__img" style="object-fit: cover;">
                  <!---->
                  <!---->
                </div>
                <div class="flex flex-col h-[2.6rem] justify-between">
                  <div class="flex items-center">
                    <div class="text-white text-base font-semibold">Hi, <?php echo  $this->Client_model->get_clientdetails('clt_name'); ?></div>
                    <img class="w-5 ml-2" src="<?php echo base_url();?>phd/tailwind/welcome.png" alt="">
                  </div>
                  <div class="text-white text-xs">Welcome Back</div>
                </div>
              </div>
              <div class="w-full">
                <div class="relative">
                  <div class="w-full h-full absolute top-0 flex flex-col p-4 pt-2 box-border" style="z-index: 3;">
                    <div class="flex flex-col mt-2">
                      <div class="top-text text-black text-2xl">
                        <span class="font-bold">Boost your organic </span>
                        <br>
                        <span class="font-bold">&amp; paid mobile</span>
                        <br>
                        <span class="font-bold">user acquisition</span>
                        <br>
                      </div>
                      <div class="text-black text-[10px] mt-4"> Get our free newsletter and the exclusive strategies out <br>1,000+ customers have used to expand internationally </div>
                    </div>
                  </div>
                  <img class="w-[60vw] home-bg absolute top-4 right-0" src="<?php echo base_url();?>phd/tailwind/bg_png.png" alt="">
                  <video class="w-full h-full" autoplay loop muted playsinline="" style="z-index: 1; width: 100%;" __idm_id__="1351687">
                    <source src="<?php echo base_url();?>phd/tailwind/bg_video.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
              <div class="w-full mx-auto flex flex-col bg-[#F5F5F5] pt-5 pb-2 relative">
                <div class="w-full pl-4 pr-4 absolute top-[-1.3rem]">
                  <div class="w-full rounded-full overflow-hidden shadow">
                    <div role="alert" class="van-notice-bar" style="color: var(--notice-color); background: var(--notice-bg);">
                      <img class="w-5 h-5 mr-2" src="<?php echo base_url();?>phd/tailwind/notice.png">
                      <div role="marquee" class="van-notice-bar__wrap">
                        <div class="van-notice-bar__content van-ellipsis" style="transition-duration: 0s;">
                          <div class="van-swipe notice-swipe">
                            <div class="van-swipe__track van-swipe__track--vertical" style="transition-duration: 0ms; transform: translateY(0px); height: 0px;"></div>
                            <!---->
                          </div>
                        </div>
                      </div>
                      <!---->
                    </div>
                  </div>
                </div>
                <div class="items-con flex p-4 pl-3 pr-3 font-light overflow-x-scroll">
                  <a class="ml-2 mr-2 flex flex-col items-center justify-around box-border p-2 pl-4 pr-4 text-[#11223E] bg-white rounded-xl shadow" href="<?php echo $this->db->get_where('settings' , array('type' =>'customerservice'))->row()->description;?>">
                    <img class="w-6" src="<?php echo base_url();?>phd/tailwind/service.png" alt="">
                    <span class="whitespace-nowrap text-xs mt-1">Service</span>
                  </a>
                  <a class="ml-2 mr-2 flex flex-col items-center justify-around box-border p-2 pl-4 pr-4 text-[#11223E] bg-white rounded-xl shadow" href="<?php echo base_url();?>Client/events">
                    <img class="w-6" src="<?php echo base_url();?>phd/tailwind/Event.png" alt="">
                    <span class="whitespace-nowrap text-xs mt-1">Event</span>
                  </a>
                  <a class="ml-2 mr-2 flex flex-col items-center justify-around box-border p-2 pl-4 pr-4 text-[#11223E] bg-white rounded-xl shadow" href="<?php echo base_url();?>Client/withdraw">
                    <img class="w-6" src="<?php echo base_url();?>phd/tailwind/Withdrawal.png" alt="">
                    <span class="whitespace-nowrap text-xs mt-1">Withdrawal</span>
                  </a>
                  <a class="ml-2 mr-2 flex flex-col items-center justify-around box-border p-2 pl-4 pr-4 text-[#11223E] bg-white rounded-xl shadow" href="<?php echo base_url();?>Client/deposite">
                    <img class="w-6" src="<?php echo base_url();?>phd/tailwind/Deposit.png" alt="">
                    <span class="whitespace-nowrap text-xs mt-1">Deposit</span>
                  </a>
                  <a class="ml-2 mr-2 flex flex-col items-center justify-around box-border p-2 pl-4 pr-4 text-[#11223E] bg-white rounded-xl shadow" href="<?php echo base_url();?>Client/tc">
                    <img class="w-6" src="<?php echo base_url();?>phd/tailwind/T&C.png" alt="">
                    <span class="whitespace-nowrap text-xs mt-1">T &amp; C</span>
                  </a>
                  <a class="ml-2 mr-2 flex flex-col items-center justify-around box-border p-2 pl-4 pr-4 text-[#11223E] bg-white rounded-xl shadow" href="<?php echo base_url();?>Client/cert">
                    <img class="w-6" src="<?php echo base_url();?>phd/tailwind/Certificate.png" alt="">
                    <span class="whitespace-nowrap text-xs mt-1">Certificate</span>
                  </a>
                  <a class="ml-2 mr-2 flex flex-col items-center justify-around box-border p-2 pl-4 pr-4 text-[#11223E] bg-white rounded-xl shadow" href="<?php echo base_url();?>Client/faq">
                    <img class="w-6" src="<?php echo base_url();?>phd/tailwind/FAQs.png" alt="">
                    <span class="whitespace-nowrap text-xs mt-1">FAQs</span>
                  </a>
                  <a class="ml-2 mr-2 flex flex-col items-center justify-around box-border p-2 pl-4 pr-4 text-[#11223E] bg-white rounded-xl shadow" href="<?php echo base_url();?>Client/about">
                    <img class="w-6" src="<?php echo base_url();?>phd/tailwind/About.png" alt="">
                    <span class="whitespace-nowrap text-xs mt-1">About</span>
                  </a>
                </div>
              </div>
              <div class="bg-white">
                <div class="w-[90%] mx-auto">
                  <a class="w-[90%] mx-auto" href="<?php echo base_url();?>Client/vips">
                    <div class="flex justify-between pt-4 pb-2 text-base text-black font-semibold">
                      <div class="w-[35%]">Vip Levels</div>
                      <div class="w-[65%] text-right flex justify-end items-center">
                        <div>View More</div>
                        <img class="w-5 ml-2" src="<?php echo base_url();?>phd/tailwind/more1.png" alt="">
                      </div>
                    </div>
                  </a>
                </div>
                <div class="items-con flex overflow-x-scroll p-4">
                  <div class="vip-item flex flex-col box-border rounded-xl p-4 bg-[#122749] shadow mr-3">
                    <img class="w-20 mb-4" src="<?php echo base_url();?>phd/tailwind/1683135431630339970.png" alt="">
                    <div class="text-white font-medium">VIP1</div>
                    <div class="text-white w-28 text-xs mt-3">0.40% commission rate. 40 orders per day.</div>
                  </div>
                  <div class="vip-item flex flex-col box-border rounded-xl p-4 bg-[#122749] shadow mr-3">
                    <img class="w-20 mb-4" src="<?php echo base_url();?>phd/tailwind/1683135444978440962.png" alt="">
                    <div class="text-white font-medium">VIP2</div>
                    <div class="text-white w-28 text-xs mt-3">0.60% commission rate. 45 orders per day.</div>
                  </div>
                  <div class="vip-item flex flex-col box-border rounded-xl p-4 bg-[#122749] shadow mr-3">
                    <img class="w-20 mb-4" src="<?php echo base_url();?>phd/tailwind/1683135461467660218.png" alt="">
                    <div class="text-white font-medium">VIP3</div>
                    <div class="text-white w-28 text-xs mt-3">0.80% commission rate. 50 orders per day.</div>
                  </div>
                  <div class="vip-item flex flex-col box-border rounded-xl p-4 bg-[#122749] shadow mr-3">
                    <img class="w-20 mb-4" src="<?php echo base_url();?>phd/tailwind/1683135471230297283.png" alt="">
                    <div class="text-white font-medium">VIP4</div>
                    <div class="text-white w-28 text-xs mt-3">1.00% commission rate. 55 orders per day.</div>
                  </div>
                </div>
                <div class="mt-6 pb-6">
                  <div class="w-full text-sm opacity-50 font-normal bottom-[2vh] text-center" style="color: rgb(153, 153, 153); font-size: 14px;">All Rights Reserved. Copyright © 2015 -2023 | Elite Site Optimizer</div>
                </div>
              </div>
              <div class="van-overlay" style="z-index: 2020; display: none;">
                <!---->
              </div>
              <div role="dialog" tabindex="0" class="van-popup van-popup--center van-dialog van-dialog--round-button" style="z-index: 2020; display: none;">
                <!---->
                <div class="van-dialog__content">
                  <img class="w-full" src="<?php echo base_url();?>phd/tailwind/1689860425949618106.jpg">
                </div>
                <div class="mt-4 w-full flex items-center justify-center">
                  <i class="van-badge__wrapper van-icon van-icon-close" style="color: rgb(153, 153, 153); font-size: 24px;">
                    <!---->
                    <!---->
                    <!---->
                  </i>
                </div>
                <!---->
              </div>
              <!---->
              <!---->
            </div>
          </div>
		  <!--div id="snackbar">Some text some message..</div-->
          <div class="van-tabbar__placeholder" style="height: 64px;">
            <div role="tablist" class="van-tabbar van-tabbar--fixed van-safe-area-bottom">
              <div role="tab" class="van-tabbar-item van-tabbar-item--active" tabindex="0" aria-selected="true" style="color: #FAAF36;">
                <div class="van-badge__wrapper van-tabbar-item__icon">
                  <img src="<?php echo base_url();?>phd/tailwind/home_h.png" style="width: 1.6rem; height: 1.6rem;">
                  <!---->
                </div>
                <div class="van-tabbar-item__text">
                  <span>Home</span>
                </div>
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
			  
              <div role="tab" class="van-tabbar-item" tabindex="0" aria-selected="false" style="color: rgb(153, 153, 153);">
                <a href="<?php echo base_url();?>Client/records"><div class="van-badge__wrapper van-tabbar-item__icon">
                  <img src="<?php echo base_url();?>phd/tailwind/records.png" style="width: 1.6rem; height: 1.6rem;">
                  <!---->
                </div>
                <div class="van-tabbar-item__text">
                  <span>Records</span>
                </div></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    
	</div>
	<section class="custom-social-proof">
    <div class="custom-notification">
      <div class="custom-notification-container">
        <div class="custom-notification-image-wrapper">
          <img id="map1" src="https://wiki.openstreetmap.org/w/images/d/d1/Tile_osm-no-label.png" style="width: 50px; height: 50px">
        </div>
        <div class="custom-notification-content-wrapper">
          <p class="custom-notification-content">
            Someone from <span id="country">Nepal</span><br>recently <span id="product"> deposited 300UDS</span>
            <small>
            
              <span id="time">1</span> hour ago &nbsp; 
              <i class="fa fa-check-circle"></i> Verified by <a class="poweredby" href="https://elitesiteoptimizer.tech/" target="_blank">Elite Site Optimizer</a>
            </small>
          </p>
        </div>
      </div>
      <div class="custom-close"></div>
    </div>
  </section>
  </body>
  <?php include 'javascript.php';?>
  <script src="<?php echo base_url();?>phd/tailwind/tabs_tabs_tabs.js"></script>
  <script src="<?php echo base_url();?>phd/tailwind/flowbite_1.8.0_flowbite.min.js"></script>
</html>