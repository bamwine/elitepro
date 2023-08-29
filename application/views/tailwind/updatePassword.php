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
    </style>
    <title>Update Password - Elite Site Optimizer</title>
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
                      <div class="van-nav-bar__title van-ellipsis text-[#FFFFFF]">Update Password</div>
                      <!---->
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full pl-6 pr-6 box-border flex flex-col">
             <form class="w-full flex flex-col mt-6" action="<?php echo base_url(); ?>Client/updatePassword/update"  method="post" enctype="multipart/form-data" >
              <div class="w-full flex flex-col">
                <div class="text-[#666] font-semibold text-base pl-4">Old Password</div>
                <div class="w-full mt-2 overflow-hidden shadow">
                  <div class="van-cell van-field">
                    
                    <div class="van-cell__value van-field__value">
                      <div class="van-field__body">
                        <input type="password" name="currentpass" id="van-field-1-input" class="van-field__control" placeholder="Old Password">
                        
                      </div>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="w-full flex flex-col mt-4">
                <div class="text-[#666] font-semibold text-base pl-4">New Password</div>
                <div class="w-full mt-2 overflow-hidden shadow">
                  <div class="van-cell van-field">
                    
                    <div class="van-cell__value van-field__value">
                      <div class="van-field__body">
                        <input type="password" id="van-field-2-input" name="newpass" class="van-field__control" placeholder="New Password">
                        
                      </div>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="w-full flex flex-col mt-4">
                <div class="text-[#666] font-semibold text-base pl-4">Confirm New Password</div>
                <div class="w-full mt-2 overflow-hidden shadow">
                  <div class="van-cell van-field">
                    
                    <div class="van-cell__value van-field__value">
                      <div class="van-field__body">
                        <input type="password" id="van-field-3-input" name="confirmnewpass" class="van-field__control" placeholder="Confirm New Password">
                        
                      </div>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="w-full mt-6">
                <button type="submit" class="van-button van-button--default van-button--large" style="color: white; background: #FAAF36; border-color: #FAAF36;">
                  <div class="van-button__content">
                    
                    <span class="van-button__text">
                      <span class="">Update</span>
                    </span>
                    
                  </div>
                </button>
              </div>
            </form>
          </div>
        
            </div>
          </div>
          <!---->
        </div>
      </div>
    </div>
  </body>
<?php include 'javascript.php';?>  
<script src="<?php echo base_url();?>phd/tailwind/tabs_tabs_tabs.js"></script>
<script> function goBack() { window.history.back(); } </script>
</html>