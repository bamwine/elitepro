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
    <title>Register - Elite Site Optimizer</title>
  </head>
  <body>
    <div id="app" data-v-app="">
      <div class="w-full min-h-[100vh] bg-[#F8F9FC]">
        <div data-v-37b13c1f="" class="w-full min-h-[100vh]">
          <!---->
          <div data-v-37b13c1f="">
            <div class="w-full min-h-[100vh] bg-[url('<?php echo base_url();?>phd/tailwind/register_bg.png')] bg-cover pt-16 relative pb-6">
              <div class="w-full flex justify-center">
                <img class="w-[50%]" src="<?php echo base_url();?>phd/tailwind/logo.png" alt="">
              </div>
              <div class="w-full box-border mt-16">
                <div class="text-[#122749] font-semibold text-xl text-center">Register Now</div>
              </div>
              <form class="w-full p-6 pt-8" action="<?php echo base_url(); ?>Client/register"  method="post" enctype="multipart/form-data" >
                <div class="bg-white rounded-xl shadow pb-9">
                  <div class="w-full flex flex-col p-4 box-border pb-8">
                    <div class="w-full flex items-center justify-between">
                      <div class="text-[#122749] font-semibold text-sm">Username</div>
                      <div class="w-[45%]">
                        <div class="van-cell van-field">
                          <!---->
                          <!---->
                          <div class="van-cell__value van-field__value">
                            <div class="van-field__body">
                              <input type="text" id="van-field-48-input" class="van-field__control van-field__control--right" placeholder="Username" name="unname">
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
                    <div class="w-full h-[1px] bg-[efefef] mt-4 mb-4"></div>
                    <div class="w-full flex items-center justify-between">
                      <div class="text-[#122749] font-semibold text-sm">Phone</div>
                      <div class="w-[45%]">
                        <div class="van-cell van-field">
                          <!---->
                          <!---->
                          <div class="van-cell__value van-field__value">
                            <div class="van-field__body">
                              <input type="text" inputmode="decimal" id="van-field-49-input" class="van-field__control van-field__control--right" placeholder="Phone" name="phone">
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
                    <div class="w-full h-[1px] bg-[efefef] mt-4 mb-4"></div>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <div class="w-full flex items-center justify-between">
                      <div class="text-[#122749] font-semibold text-sm">Transaction Password</div>
                      <div class="w-[45%]">
                        <div class="van-cell van-field">
                          <!---->
                          <!---->
                          <div class="van-cell__value van-field__value">
                            <div class="van-field__body">
                              <input type="password" id="van-field-50-input" class="van-field__control van-field__control--right" placeholder="Transaction Password" name="transactionpwd">
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
                    <div class="w-full h-[1px] bg-[efefef] mt-4 mb-4"></div>
                    <div class="w-full flex items-center justify-between">
                      <div class="text-[#122749] font-semibold text-sm">Password</div>
                      <div class="w-[45%]">
                        <div class="van-cell van-field">
                          <!---->
                          <!---->
                          <div class="van-cell__value van-field__value">
                            <div class="van-field__body">
                              <input type="password" id="van-field-51-input" class="van-field__control van-field__control--right" placeholder="Password" name="passwd">
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
                    <div class="w-full h-[1px] bg-[efefef] mt-4 mb-4"></div>
                    <div class="w-full flex items-center justify-between">
                      <div class="text-[#122749] font-semibold text-sm">Confirm Password</div>
                      <div class="w-[45%]">
                        <div class="van-cell van-field">
                          <!---->
                          <!---->
                          <div class="van-cell__value van-field__value">
                            <div class="van-field__body">
                              <input type="password" id="van-field-52-input" class="van-field__control van-field__control--right" placeholder="Confirm Password" name="cppasswd">
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
                    <div class="w-full h-[1px] bg-[efefef] mt-4 mb-4"></div>
                    <div class="w-full flex items-center justify-between">
                      <div class="text-[#122749] font-semibold text-sm">Gender</div>
                      <div class="text-base px-4 py-2">
                        <div class="w-full flex ">
                          <div class="flex items-center mr-4">
                            <input id="inline-radio" type="radio" value="male" name="gender" class="w-4 h-4 text-[#FFAA00] bg-gray-100 border-gray-300 focus:ring-[#FFAA00] dark:focus:ring-[#FFAA00] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                          </div>
                          <div class="flex items-center mr-4">
                            <input id="inline-2-radio" type="radio" value="female" name="gender" class="w-4 h-4 text-[#FFAA00] bg-gray-100 border-gray-300 focus:ring-[#FFAA00] dark:focus:ring-[#FFAA00] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="w-full h-[1px] bg-[efefef] mt-4 mb-4"></div>
                    <div class="w-full flex items-center justify-between">
                      <div class="font-semibold text-sm text-[#FAAF36]">Invite Code</div>
                      <div class="w-[45%]">
                        <div class="van-cell van-field">
                          <!---->
                          <!---->
                          <div class="van-cell__value van-field__value">
                            <div class="van-field__body">
                              <input type="text" id="van-field-53-input" class="van-field__control van-field__control--right" placeholder="Invite Code" name="invite_code">
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
                    <div class="w-full h-[1px] bg-[efefef] mt-4 mb-4"></div>
                    <div class="w-full flex justify-between">
                      <div role="checkbox" class="van-checkbox" tabindex="0" aria-checked="true">
                        <div class="van-checkbox__icon van-checkbox__icon--round van-checkbox__icon--checked" style="font-size: 18px;">
                          <i class="van-badge__wrapper van-icon van-icon-success" style="border-color: #FAAF36; background-color: #FAAF36;">
                            <!---->
                            <!---->
                            <!---->
                          </i>
                        </div>
                        <span class="van-checkbox__label">
                          <span class="text-[#122749] font-semibold text-sm">I agree with</span>
                          <span class="ml-2 text-[#FAAF36] text-sm underline font-bold">
                            <a href="<?php echo base_url();?>Client/terms">Terms and Conditions</a>
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="absolute mx-auto left-[-50%] right-[-50%] rounded-full w-16 h-16 flex items-center justify-center bg-[#FAAF36]">
                    <img class="w-[50%]" src="<?php echo base_url();?>phd/tailwind/go.png" alt="">
                  </button>
                </div>
                <div class="w-full mt-16">
                  <div class="text-lg text-[#122749] font-medium text-center register-btn underline">
                    <a href="<?php echo base_url();?>Client">Back to Login</a>
                  </div>
                </div>
              </form>
			  
            </div>
          </div>
          <!---->
        </div>
      </div>
    </div>
  </body>
  <?php include 'javascript.php';?>
  <script src="<?php echo base_url();?>phd/tailwind/tabs_tabs_tabs.js"></script>
</html>