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
	<link rel="stylesheet" href="<?php echo base_url();?>phd/tailwind/sweetalert2.min.css">
	 <script src="<?php echo base_url();?>phd/tailwind/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>phd/tailwind/sweetalert2.all.min.js"></script>
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
    <title>Starting - Elite Site Optimizer</title>
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
            <div class="w-full" style="background: url('<?php echo base_url();?>phd/tailwind/starting_bg.png') 0% 0% / 100% no-repeat;">
              <div class="w-[90%] mx-auto pt-5">
                <div class="flex justify-between mb-3 items-center">
                  <div class="flex">
                    <div class="van-image van-image--round mr-3" style="width: 2.8rem; height: 2.8rem;">
                      <img src="<?php echo base_url();?>phd/tailwind/user.png" class="van-image__img" style="object-fit: cover;">
                      <!---->
                      <!---->
                    </div>
                    <div class="flex items-center">
                      <div class="text-black text-base font-semibold">Hi, <?php echo  $this->Client_model->get_clientdetails('clt_name'); ?></div>
                      <img class="w-5 ml-2" src="<?php echo base_url();?>phd/tailwind/welcome.png" alt="">
                    </div>
                  </div>
                  <div class="text-xs text-black">Welcome back</div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                  <div class="col-span-2 flex justify-between p-3 box-border rounded-xl shadow bg-white">
                    <div class="flex">
                      <div class="w-12 h-12 mr-2">
                        <img class="w-full h-full" src="<?php echo base_url();?>phd/tailwind/walbal.png" alt="">
                      </div>
                      <div class="flex flex-col justify-around">
                        <div class="text-black text-sm font-bold mb-1">Wallet Balance</div>
                        <div class="text-[#999] text-xs">Profits will be added here</div>
                      </div>
                    </div>
                    <div class="flex flex-col justify-around">
                      <div class="text-sm text-[#FAAF36] font-bold mb-1"><?php echo  number_format($this->Client_model->get_clientdetails('clt_bal'),3); ?></div>
                      <div class="text-[#999] text-right text-xs">USDT</div>
                    </div>
                  </div>
                  <div class="col-span-2 flex justify-between p-3 box-border rounded-xl shadow bg-white">
                    <div class="flex">
                      <div class="w-12 h-12 mr-2">
                        <img class="w-full h-full" src="<?php echo base_url();?>phd/tailwind/usdt.png" alt="">
                      </div>
                      <div class="flex flex-col justify-around">
                        <div class="text-black text-sm font-bold mb-1">Commission</div>
                        <div class="text-[#999] text-xs">Commission Earned</div>
                      </div>
                    </div>
                    <div class="flex flex-col justify-around">
                      <div class="text-sm text-[#FAAF36] font-bold mb-1"><?php echo  number_format($this->Client_model->get_clientdetails('clt_comsion'),3); ?></div>
                      <div class="text-[#999] text-right text-xs">USDT</div>
                    </div>
                  </div>
                </div>
                <div class="mt-5 mb-5 flex justify-start text-black font-bold text-base">
                  <div>Start Optimization</div>
                </div>
                <div class="flex flex-col p-3 bg-[url('<?php echo base_url();?>phd/tailwind/profile_bg2.png')]" style="background-size: 100% 100%;">
                  <div class="flex flex-col shadow box-border rounded-xl overflow-hidden">
                    <div class="flex items-center justify-between">
                      <div class="van-swipe w-full">
                        <div class="van-swipe__track" style="transition-duration: 500ms; transform: translateX(-876px); width: 1752px;">
                          <div class="van-swipe-item" style="width: 876px;">
                            <img class="w-full" src="<?php echo base_url();?>phd/tailwind/1.png" alt="">
                          </div>
                          <div class="van-swipe-item" style="width: 876px;">
                            <img class="w-full" src="<?php echo base_url();?>phd/tailwind/2.png" alt="">
                          </div>
                        </div>
                        <!---->
                      </div>
                    </div>
                  </div>
                  <div class="w-full mt-4 flex justify-between">
                    <div class="w-[22%] flex items-center">
                      <img class="w-full" src="<?php echo base_url();?>phd/tailwind/left.png" alt="">
                    </div>
                    <div class="w-[50%]">
                      <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="van-button van-button--default van-button--large van-button--round" style="color: white; background: #FAAF36; border-color: #FAAF36;">
                        <div class="van-button__content">
                          <!---->
                          <span class="van-button__text">
                            <span class="font-semibold text-black">Start <span class="ml-2"><?php echo $this->db->get_where('tasks' , array('clt_id' =>$clt_id =$this->session->userdata('cltid'),'created' =>date('Y-m-d')))->row()->count_id ?? '0';?>/<?php echo  $this->Client_model->get_clientdetails('clt_tasks'); ?></span>
                            </span>
                          </span>
                          <!---->
                        </div>
                      </button>
                    </div>
                    <div class="w-[22%] flex items-center">
                      <img class="w-full" src="<?php echo base_url();?>phd/tailwind/right.png" alt="">
                    </div>
                  </div>
                </div>
                
				<div class="mt-4">
                  <div class="w-[90%] h-10 rounded-xl mx-auto bg-[#e7e7e7]"></div>
                  <div class="mt-[-1.5rem] flex flex-col shadow p-4 box-border bg-white relative rounded-xl">
                    <div class="mb-2 text-black text-base font-bold">Notice</div>
                    <div class="text-[#666] text-sm font-semibold">Online Support Hours 10:00 - 22:59 <br> Please contact online support for your assistance! </div>
                  </div>
                </div>
              </div>
              <div class="mt-6 pb-4">
                <div class="w-full text-sm opacity-50 font-normal bottom-[2vh] text-center" style="color: rgb(153, 153, 153); font-size: 14px;">All Rights Reserved. Copyright © 2015 -2023 | Elite Site Optimizer</div>
              </div>
              <!---->
              <!---->
            </div>
          </div>
          <div class="van-tabbar__placeholder" style="height: 64px;">
            <div role="tablist" class="van-tabbar van-tabbar--fixed van-safe-area-bottom">
              <div role="tab" class="van-tabbar-item van-tabbar-item--active" tabindex="0" aria-selected="false" style="color: rgb(153, 153, 153);" >
               <a href="<?php echo base_url();?>Client/home"> <div class="van-badge__wrapper van-tabbar-item__icon">
                  <img src="<?php echo base_url();?>phd/tailwind/home.png" style="width: 1.6rem; height: 1.6rem;">
                  <!---->
                </div>
                <div class="van-tabbar-item__text">
                  <span>Home</span>
                </div></a>
              </div>
              <div role="tab" class="van-tabbar-item" tabindex="0" aria-selected="true" style="color: #FAAF36;">
                <div class="van-badge__wrapper van-tabbar-item__icon">
                  <img src="<?php echo base_url();?>phd/tailwind/starting_h.png" style="margin-top: -2rem; width: 3.5rem; height: 3.5rem;">
                  <!---->
                </div>
                <div class="van-tabbar-item__text">
                  <span>Starting</span>
                </div>
              </div>
			  
              <div role="tab" class="van-tabbar-item" tabindex="0" aria-selected="false" style="color: rgb(153, 153, 153);">
              <a href="<?php echo base_url();?>Client/records">  <div class="van-badge__wrapper van-tabbar-item__icon">
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
  </body>
  <?php include 'javascript.php';?>
   <script src="<?php echo base_url();?>phd/tailwind/sweetalert2@11.js"></script>
  <script src="<?php echo base_url();?>phd/tailwind/tabs_tabs_tabs.js"></script>
  <script src="<?php echo base_url();?>phd/tailwind/flowbite_1.8.0_flowbite.min.js"></script>
  <script type="text/javascript">



function showAlert(commsval,prodval) {
	//alert(commsval);
	var mySplitResult =commsval.split(',')
	//mySplitResult[0];
	//alert(mySplitResult[0]);
	
	 $.ajax({
			type:'POST',
            url: '<?php echo base_url(); ?>Client/task_man',
			data:{'commssion':mySplitResult[0],'prod_id':mySplitResult[1]},			
            async: false,
            success: function (response)
            {
				
             
			window.location.href="<?php echo base_url(); ?>Client/start"	
            }
        });

    }
</script>


<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
           <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
			<h2 class="font-semibold text-base">Task Submission</h2>
			<div class="flex items-center space-x-4 p-3">
                        <img class="w-24 h-24 rounded-full shadow-lg" src="<?php echo base_url().$clientprod->pro_pic?? '' ?>"  alt="Elite Site Optimizer">
                        <div class="flex flex-col space-y-1">
                            <span class="font-bold">Applications <?php echo generateRandomNumber();?></span>
                            <span class="text-sm">USDT <?php echo $clientprod->pro_price ?? '';?></span>
							<span class="text-sm"><div role="radiogroup" class="van-rate van-rate--readonly" tabindex="0" aria-disabled="false" aria-readonly="true">
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
                              </span>
                        </div>
                    </div>
			
               <div class="p-1 border-t border-b text-xs text-gray-700">
          <div class="flex justify-center pb-3 text-black">
      <div class="text-center mr-3 border-r pr-3">
        <h2 class="font-semibold text-base">Total Amount</h2>
        <p>USDT &nbsp; <?php echo $clientprod->pro_price ?? ''?></p>
      </div>
      <div class="text-center">
        <h2 class="font-semibold text-base">Commission</h2>
        <p>USDT &nbsp; <?php echo $clientprod->pro_comsion ?? '';?></p>
      </div>
  	</div>        
        </div>
				
				<div class="p-1 border-t border-b text-xs text-gray-700">
          <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                         Created At
					</div>
                    <div class="flex-1 min-w-0">
                        
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        <?php echo $clientprod->pro_date ?? ''?>
                    </div>
                </div>        
        </div>
				
                 <div class="p-1 border-t border-b text-xs text-gray-700">
          <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                         Task Code
					</div>
                    <div class="flex-1 min-w-0">
                        
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                       	<?php echo h_generate_transct_id() ?? '';?>
                    </div>
                </div>        
        </div>
				<h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400"></h3>
                <button type="button" onclick="showAlert('<?php echo $clientprod->pro_comsion;?>,<?php echo $clientprod->phd_id;?>')" class="van-button van-button--default van-button--large rounded-lg border" style="color: white; background: #FAAF36; border-color: #FAAF36;" >
                          <div class="van-button__content">
                            <!---->
                            <span class="van-button__text">
                              <span class="font-semibold text-white">submit</span>
                            </span>
                            <!---->
                          </div>
                        </button>
              </div>
        </div>
    </div>
</div>

</html>