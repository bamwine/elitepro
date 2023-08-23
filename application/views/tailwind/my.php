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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
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
    <title>My - Elite Site Optimizer</title>
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
                      <div class="van-nav-bar__title van-ellipsis text-[#FFFFFF]">My</div>
                      <!---->
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full bg-[url(<?php echo base_url();?>phd/tailwind/profile_bg.png)]" style="background-size: auto 100%;">
                <div class="w-[90%] mt-4 mx-auto flex flex-col overflow-hidden rounded-xl bg-[url(<?php echo base_url();?>phd/tailwind/profile_bg1.png)] bg-cover">
                  <div class="w-full mx-auto p-4 box-border flex flex-col relative">
                    <img src="<?php echo base_url();?>phd/tailwind/1683135444978440962.png" class="w-[4rem] h-[4rem] absolute top-0 right-4" alt="">
                    <div class="flex pl-1 pr-1">
                      <div class="van-image van-image--round mr-4" style="width: 4rem; height: 4rem;">
                        <img src="<?php echo base_url();?>phd/tailwind/user.png" class="van-image__img" style="object-fit: cover;">
                        <!---->
                        <!---->
                      </div>
                      <div class="flex flex-col justify-center">
                        <div class="flex items-center">
                          <div class="text-white font-semibold text-lg"><?php echo $this->session->userdata('username');?></div>
                        </div>
                        <div class="text-[#999] text-xs whitespace-nowrap mt-1">Invitation Code: <span class="text-white font-semibold"><?php echo $this->session->userdata('incode');?></span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex flex-col items-center pl-1 pr-1">
                      <div class="w-full flex justify-between">
                        <div class="text-[#999] text-xs whitespace-nowrap">Credit Score:</div>
                        <div class="ml-2 text-xs text-white font-semibold">100% </div>
                      </div>
                      <div class="w-full mt-2">
                        <div class="van-progress" style="height: 8px;">
                          <span class="van-progress__portion" style="width: 100%; background: #FAAF36;"></span>
                          <!---->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full flex items-center pt-4 pb-4 box-border overflow-hidden">
                    <div class="w-[50%] flex flex-col justify-center items-center">
                      <div class="text-white text-sm font-semibold">Wallet Amount</div>
                      <div class="text-xs text-[#FAAF36] mt-1">
                        <span class="text-sm font-semibold"><?php echo $this->session->userdata('balance');?></span>
                        <span class="opacity-80 ml-1">USDT</span>
                      </div>
                    </div>
                    <div class="w-[1px] h-8 bg-[#EBEBEB]"></div>
                    <div class="w-[50%] flex flex-col justify-center items-center">
                      <div class="text-white text-sm font-semibold">Commission</div>
                      <div class="text-xs text-[#FAAF36] mt-1">
                        <span class="text-sm font-semibold">0</span>
                        <span class="opacity-80 ml-1">USDT</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-col w-[90%] mx-auto mt-2">
                <div class="mt-4 mb-4 text-black text-base font-semibold">My Financial</div>
                <div class="flex flex-col shadow rounded bg-white">
                  <a href="<?php echo base_url();?>Client/deposite"> 
				  <div class="flex items-center justify-between p-4 box-border border-b-[1px] border-[#EBEBEB]">
                    <div class="flex items-center">
                      <img class="w-6 h-6 mr-3" src="<?php echo base_url();?>phd/tailwind/Deposit1.png" alt="">
                      <div class="text-black text-sm font-medium">Deposit</div>
                    </div>
                    <i class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(153, 153, 153); font-size: 16px;">
                      <!---->
                      <!---->
                      <!---->
                    </i>
                  </div></a>
                <a href="<?php echo base_url();?>Client/withdraw">  
					<div class="flex items-center justify-between p-4 box-border">
                    <div class="flex items-center">
                      <img class="w-6 h-6 mr-3" src="<?php echo base_url();?>phd/tailwind/Withdrawal1.png" alt="">
                      <div class="text-black text-sm font-medium">Withdraw</div>
                    </div>
                    <i class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(153, 153, 153); font-size: 16px;">
                      
                    </i>
                  </div></a>
                </div>
                <div class="mt-4 mb-4 text-black text-base font-semibold">My Detail</div>
                <div class="flex flex-col shadow rounded bg-white">
                  <a href="<?php echo base_url();?>Client/profileItem"> 
				  <div class="flex items-center justify-between p-4 box-border border-b-[1px] border-[#EBEBEB]">
                    <div class="flex items-center">
                      <img class="w-6 h-6 mr-3" src="<?php echo base_url();?>phd/tailwind/EditPersonal1.png" alt="">
                      <div class="text-black text-sm font-medium">Personal Information</div>
                    </div>
                    <i class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(153, 153, 153); font-size: 16px;">
                     
                    </i>
                  </div></a>
                  <div class="flex items-center justify-between p-4 box-border">
                    <div class="flex items-center">
                      <img class="w-6 h-6 mr-3" src="<?php echo base_url();?>phd/tailwind/LinkCard1.png" alt="">
                      <div class="text-black text-sm font-medium">Payment Methods</div>
                    </div>
                    <i class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(153, 153, 153); font-size: 16px;">
                      
                    </i>
                  </div>
                </div>
                <div class="mt-4 mb-4 text-black text-base font-semibold">Other</div>
                <a href="https://api.whatsapp.com/send/?phone=%2B447411722539&text&type=phone_number&app_absent=0">
				<div class="flex flex-col shadow rounded bg-white">
                  <div class="flex items-center justify-between p-4 box-border border-b-[1px] border-[#EBEBEB]">
                    <div class="flex items-center">
                      <img class="w-6 h-6 mr-3" src="<?php echo base_url();?>phd/tailwind/ContactUs1.png" alt="">
                      <div class="text-black text-sm font-medium">Contact Us</div>
                    </div>
                    <i class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(153, 153, 153); font-size: 16px;">
                      
                    </i>
                  </div></a>
				  
                  <a href="<?php echo base_url();?>Client/notice"> 
				  <div class="flex items-center justify-between p-4 box-border">
                    <div class="flex items-center">
                      <img class="w-6 h-6 mr-3" src="<?php echo base_url();?>phd/tailwind/Notifications1.png" alt="">
                      <div class="text-black text-sm font-medium">Notifications</div>
                    </div>
                    <i class="van-badge__wrapper van-icon van-icon-arrow" style="color: rgb(153, 153, 153); font-size: 16px;">
                     
                    </i>
                  </div></a>
                </div>
                <div class="w-full mt-10" style="border: 1px solid rgb(175, 175, 199); border-radius: 6px; overflow: hidden;">
                  <div href="" onclick="showAlert()" type="button" class="van-button van-button--default van-button--large" style="color: white; background: white; border-color: white;">
                    <div class="van-button__content">
                      <!---->
                      <span class="van-button__text">
                        <span class="font-semibold text-black">Logout</span>
                      </span>
                      <!---->
                    </div>
                  </div>
                </div>
                <div class="mt-6">
                  <div class="w-full text-sm opacity-50 font-normal bottom-[2vh] text-center" style="color: rgb(153, 153, 153); font-size: 14px;">All Rights Reserved. Copyright © 2015 -2023 | Elite Site Optimizer</div>
                </div>
              </div>
              <div class="van-overlay" role="button" tabindex="0" style="z-index: 2026; display: none;">
                <!---->
              </div>
              <div role="dialog" tabindex="0" class="van-popup van-popup--bottom" style="z-index: 2026; height: 30%; display: none;">
                <div class="w-full h-full p-4 box-border">
                  <div class="w-full flex flex-col mt-8">
                    <div class="text-[#666] font-semibold text-base pl-4">Transaction Password</div>
                    <div class="w-full mt-2 overflow-hidden shadow">
                      <div class="van-cell van-field">
                        <!---->
                        <!---->
                        <div class="van-cell__value van-field__value">
                          <div class="van-field__body">
                            <input type="password" id="van-field-45-input" class="van-field__control" placeholder="Transaction Password">
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
                    <button type="button" class="van-button van-button--default van-button--large van-button--round" style="color: white; background: #FAAF36; border-color: #FAAF36;">
                      <div class="van-button__content">
                        <!---->
                        <span class="van-button__text">
                          <span class=""  >Submit</span>
                        </span>
                        <!---->
                      </div>
                    </button>
                  </div>
                </div>
                <i class="van-badge__wrapper van-icon van-icon-cross van-popup__close-icon van-popup__close-icon--top-right van-haptics-feedback" role="button" tabindex="0">
                  <!---->
                  <!---->
                  <!---->
                </i>
              </div>
              <div>
                <!---->
                <!---->
              </div>
              <!---->
              <!---->
            </div>
          </div>
          <!---->
        </div>
      </div>
    </div>
  </body>
  <?php include 'javascript.php';?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="<?php echo base_url();?>phd/tailwind/tabs_tabs_tabs.js"></script>
<script>function goBack() { window.history.back();}</script>
<script type="text/javascript">



function showAlert() {
      Swal.fire({
  
  text: "Are you sure you want to logout?",  
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'confirm'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});
    }
</script>
</html>