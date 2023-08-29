<link href="<?php echo base_url();?>phd/tailwind/toastr.css" rel="stylesheet" />
<style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>


<style>

@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600');
.custom-social-proof {
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 9999999999999 !important;
  font-family: 'Open Sans', sans-serif;
    //display: none;  /* Uncoment This Line to Hide Initially*/
    .custom-notification {
        width: 400px;
        border: 0;
        text-align: left;
        z-index: 99999;
        box-sizing: border-box;
        font-weight: 400;
        border-radius: 6px;
        box-shadow: 2px 2px 10px 2px hsla(0, 4%, 4%, 0.2);
        background-color: #fff;
        position: relative;
        cursor: pointer;
        .custom-notification-container {
            display: flex !important;
            align-items: center;
            height: 80px;
            .custom-notification-image-wrapper {
                img {
                    max-height: 75px;
                    width: 90px;
                    overflow: hidden;
                    border-radius: 6px 0 0 6px;
                    object-fit: cover;
                }
            }
            .custom-notification-content-wrapper {
                margin: 0;
                height: 100%;
                color: gray;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 0 6px 6px 0;
                flex: 1;
                display: flex !important;
                flex-direction: column;
                justify-content: center;
                .custom-notification-content {
                    font-family: inherit !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    font-size: 14px;
                    line-height: 16px;
                    small {
                        margin-top: 3px !important;
                        display: block !important;
                        font-size: 12px !important;
                        opacity: .8;
                    }
                }
            }
        }
        .custom-close {
            position: absolute;
            top: 8px;
            right: 8px;
            height: 12px;
            width: 12px;
            cursor: pointer;
            transition: .2s ease-in-out;
            transform: rotate(45deg);
            opacity: 0;
            &::before {
                content: "";
                display: block;
                width: 100%;
                height: 2px;
                background-color: gray;
                position: absolute;
                left: 0;
                top: 5px;
            }
            &::after {
                content: "";
                display: block;
                height: 100%;
                width: 2px;
                background-color: gray;
                position: absolute;
                left: 5px;
                top: 0;
            }
        }
        &:hover {
            .custom-close {
                opacity: 1;
            }
        }
    }
}

.poweredby{
    font-weight: 600;
    text-decoration: none;
    margin-left: 3px;
    color:  #3498db;
}
</style>
