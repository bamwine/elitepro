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
    <title>FAQs - Elite Site Optimizer</title>
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
                      <div class="van-nav-bar__title van-ellipsis text-[#FFFFFF]">FAQs</div>
                      <!---->
                    </div>
                  </div>
                </div>
              </div>
            <div class="w-full p-6 box-border flex flex-col font-montserrat text-[#666]">
                <p>Notice to Agents/Users</p>
                <p>I.Platform Operation Hours</p>
                <p>1.1) Platform optimization working hours 10:00-23:00</p>
                <p>1.2) Agent/User Withdrawal Time 10:00-23:00</p>
                <p>1.3) Customer service online time 10:00-23:00</p>
                <p>II. Combination App</p>
                <p>2.1) Agents/users encountering combination apps need to clear the negative balance of their accounts before they can submit orders for combination apps and continue to complete all tasks.</p>
                <p>2.2) All apps are randomly assigned by the system, agents/users cannot request for a combination app or request to reject a combination app.</p>
                <p>2.3) The value of all apps is randomly assigned by the system according to the balance of the agent/user's account, and it is impossible for the user to be assigned a combination of apps in every set of tasks</p>
                <p>2.4) All users have the same chance of being assigned a combination of apps in a task, regardless of your VIP level.</p>
                <p>III. Password</p>
                <p>3.1) The login password and withdrawal password of the Agent/User account cannot be the same.</p>
                <p>3.2) If the agent/user forget any password, please contact the customer service to reset the password, you need to provide the user name and registered mobile phone number, the registered mobile phone number needs to be consistent with WhatsAPP, in order to ensure the safety of the agent's/user's funds.</p>
                <p>3.3) If you forget your login password or withdrawal password and enter it incorrectly 3 times, your account will be temporarily frozen.</p>
                <p>IV. Deposit/Withdrawal</p>
                <p>4.1) Before making a deposit, the Agent/User needs to contact the customer service to provide the latest developer's USDT address to make a deposit, as the developer's USDT may be changed at any time.</p>
                <p>4.2) The developer's wallet transfers a huge amount of money every day, so if the developer's USDT address is abnormal, it is normal, and the agent/user can ask the customer service to provide the developer's new USDT address again.</p>
                <p>4.3) Agents/users are required to provide a screenshot of the transfer with TXID after completing the transfer to the developer, otherwise the developer will not be able to audit your transfer, as there are many users on the platform, and the developer receives a lot of transfers every minute.</p>
                <p>4.4) Withdrawal requirements, agents/users need to complete a set of all tasks before applying for withdrawal</p>
                <p>4.5) After submitting the withdrawal application, the customer service will notify the developer at the first time for the agent/user to make a full refund and complete the transfer within one hour, if you do not receive the money within one hour, please contact the customer service to consult the reason in time!</p>
                <p>V. Agent/User VIP Levels</p>
                <p>5.1) The VIP level is determined by the amount of money you deposit before starting each task.</p>
                <p>5.2) The number of tasks for each level is as follows: VIP1-40 VIP2-45 VIP3-50 VIP4-55</p>
                <p>5.3) The commission rate for each level is: VIP1-0.4% VIP2-6% VIP3-8% VIP4-1%.</p>
                <p>(5.4) The base salary for each level is as follows: VIP1-100USDT VIP2-200USDT VIP3-300USDT VIP4-400USDT</p>
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