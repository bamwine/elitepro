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
    <script src="<?php echo base_url();?>phd/tailwind/cdn.tailwindcss.com_3.3.3.js" />
    </script>
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
    </style>
    <title>Login - Elite Site Optimizer</title>
  </head>
  <body>
    <div id="app" data-v-app="">
      <div class="w-full min-h-[100vh] bg-[#F8F9FC]">
        <div class="w-full min-h-[100vh]">
          <!---->
          <div>
            <div class="w-full min-h-[100vh] pb-10 bg-[url('tailwind/login_bg.png')] bg-cover pt-32 relative">
              <div class="fixed top-2 right-5 h-9 flex items-center justify-center">
                <div>
                  <img class="w-10" src="<?php echo base_url();?>phd/tailwind/kf.png" alt="">
                </div>
              </div>
              <div class="w-full flex justify-center">
                <img class="w-[50%]" src="<?php echo base_url();?>phd/tailwind/logo.png" alt="">
              </div>
              <div class="w-full box-border mt-28">
                <div class="text-[#10274A] font-semibold text-2xl text-center">Login Now</div>
              </div>
              <div class="w-full p-6 pt-8">
                <form class="bg-white rounded-xl shadow pb-9" action="<?php echo base_url(); ?>Client/processLogin"  method="post" enctype="multipart/form-data" >
                  <div class="w-full flex flex-col p-4 box-border">
                    <div class="w-full flex items-center justify-between">
                      <div class="text-[#122749] font-semibold text-base">Username/Phone</div>
                      <div>
                        <div class="van-cell van-field">
                          <!---->
                          <!---->
                          <div class="van-cell__value van-field__value">
                            <div class="van-field__body">
                              <input type="text" id="van-field-46-input" class="van-field__control van-field__control--right" placeholder="Username/Phone" name="uname">
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
                    <div class="w-full h-[1px] bg-[#EFEFEF] mt-4 mb-4"></div>
                    <div class="w-full flex items-center justify-between">
                      <div class="text-[#122749] font-semibold text-base">Password</div>
                      <div>
                        <div class="van-cell van-field">
                          <!---->
                          <!---->
                          <div class="van-cell__value van-field__value">
                            <div class="van-field__body">
                              <input type="password" id="van-field-47-input" class="van-field__control van-field__control--right" placeholder="Password" name="password">
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
                    <div class="w-full h-[1px] bg-[#EFEFEF] mt-4 mb-4"></div>
                  </div>
                  <button  type="submit" class="absolute mx-auto left-[-50%] right-[-50%] rounded-full w-16 h-16 flex items-center justify-center bg-[#FAAF36]">
                    <img class="w-[50%]" src="<?php echo base_url();?>phd/tailwind/go.png" alt="">
                  </button>
                </form>
				
                <!---->
                <div class="w-full mt-20">
                  <div class="text-lg text-[#10274A] font-medium text-center register-btn underline">
                    <a href="<?php echo base_url();?>Client/auth">Register</a>
                  </div>
                </div>
              </div>
              <div class="absolute w-full text-sm opacity-50 font-normal bottom-[2vh] text-center" style="color: rgb(255, 255, 255); font-size: 14px;">All Rights Reserved. Copyright © 2015 -2023 | Elite Site Optimizer</div>
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
  <script src="tailwind/tabs_tabs_tabs.js"></script>
</html>