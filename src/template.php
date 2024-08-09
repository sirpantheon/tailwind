<?php
/*
Template Name: Template Test
*/
?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/output.css" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/druk-trial" rel="stylesheet">
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon_io/site.webmanifest">

  <link rel="stylesheet" id="sbi_styles-css" href="https://musiccitysf.com/wp-content/plugins/instagram-feed-pro/css/sbi-styles.min.css?ver=6.4" type="text/css" media="all">
  <script type="text/javascript">
/* <![CDATA[ */
 var gform;gform||(document.addEventListener("gform_main_scripts_loaded",function(){gform.scriptsLoaded=!0}),window.addEventListener("DOMContentLoaded",function(){gform.domLoaded=!0}),gform={domLoaded:!1,scriptsLoaded:!1,initializeOnLoaded:function(o){gform.domLoaded&&gform.scriptsLoaded?o():!gform.domLoaded&&gform.scriptsLoaded?window.addEventListener("DOMContentLoaded",o):document.addEventListener("gform_main_scripts_loaded",o)},hooks:{action:{},filter:{}},addAction:function(o,n,r,t){gform.addHook("action",o,n,r,t)},addFilter:function(o,n,r,t){gform.addHook("filter",o,n,r,t)},doAction:function(o){gform.doHook("action",o,arguments)},applyFilters:function(o){return gform.doHook("filter",o,arguments)},removeAction:function(o,n){gform.removeHook("action",o,n)},removeFilter:function(o,n,r){gform.removeHook("filter",o,n,r)},addHook:function(o,n,r,t,i){null==gform.hooks[o][n]&&(gform.hooks[o][n]=[]);var e=gform.hooks[o][n];null==i&&(i=n+"_"+e.length),gform.hooks[o][n].push({tag:i,callable:r,priority:t=null==t?10:t})},doHook:function(n,o,r){var t;if(r=Array.prototype.slice.call(r,1),null!=gform.hooks[n][o]&&((o=gform.hooks[n][o]).sort(function(o,n){return o.priority-n.priority}),o.forEach(function(o){"function"!=typeof(t=o.callable)&&(t=window[t]),"action"==n?t.apply(null,r):r[0]=t.apply(null,r)})),"filter"==n)return r[0]},removeHook:function(o,n,t,i){var r;null!=gform.hooks[o][n]&&(r=r=gform.hooks[o][n]).filter(function(o,n,r){return!!(null!=i&&i!=o.tag||null!=t&&t!=o.priority)}),gform.hooks[o][n]=r)}}); 
/* ]]> */
</script>
  <title>MCSF - Music City San Francisco</title>
	<style>
        .dropdown:hover .dropdown-book {
            display: block;
            transition: opacity 1s ease, transform 0.3s ease;
        }
        .dropdown-menu .dropdown-menu-mega {
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 1s ease, transform 0.3s ease;
        }

        .dropdown-menu.show .dropdown-menu-mega.show {
            display: block;
            opacity: 1;
            transform: translateY(0);
            transition: opacity 1s ease, transform 0.3s ease;
        }
    </style>
  
</head>

<body
  class="bg-primary flex flex-col justify-center font-druk-bold tracking-wide font-extrabold transition-all ease-in">

  <!-- menu -->
  <nav
        class="bg-primary min-w-full h-[100px] items-center lg:gap-2 min-[768px]:gap-0 flex md:justify-start min-[100px]:justify-between sm:justify-between fixed top-0 z-50 min-[100px]:p-0 min-[245px]:px-2">


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Menu mobile
                const navLinks = document.querySelector('.nav-links');
                const menuButton = document.querySelector('ion-icon[name="menu"]');
                if (menuButton && navLinks) {
                    menuButton.addEventListener('click', function () {
                        navLinks.classList.toggle('top-[15vw]');
                    });
                }

                // Dropdown booknow
                const button = document.getElementById('menu-button');
                const menu = document.querySelector('.dropdown-menu');
                if (button && menu) {
                    button.addEventListener('click', function () {
                        menu.classList.toggle('hidden');
                    });
                }

                // Dropdown mega
                const buttonMega = document.getElementById('menu-button-mega');
                const menuMega = document.querySelector('.dropdown-menu-mega');
                if (buttonMega && menuMega) {
                    buttonMega.addEventListener('click', function () {
                        menuMega.classList.toggle('hidden');
                    });
                }
            });
        </script>

        <div>
            <!-- dropdown -->

            <div class="relative inline-block text-left dropdown md:w-[8vw] min-[768px]:w-[6vw] justify-center items-center">
                <button
                    class="sm:inline-flex focus:border-none min-[100px]:hidden items-center justify-center focus:ring-0 w-full border-none  text-primary transition duration-500 ease-in border-2  font-druk-trial font-normal md:text-xl lg:text-xl text-xl tracking-widest focus:outline-none focus:ring-offset-0 focus:bg-primary"
                    id="menu-button-mega" aria-expanded="true" aria-haspopup="true">

                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/MCSF-Redish-logo.png"
                        class="md:w-[8vw] min-[100px]:w-[8vw] xl:w-20 min-[768px]:w-[5vw]" alt="logo">

                </button>

                <div class="dropdown-menu-mega origin-top-right absolute left-0 shadow-lg font-druk-text-trial bg-primary ring-1 w-[100vw] h-[80vh] ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button-mega" tabindex="-1">
                    <div class="w-full flex justify-start items-start">
                        <div class="w-[20vw] flex flex-col justify-start h-[80vh]">
                            <div class="flex justify-center flex-col w-full h-[45%] items-center ">

                                <div class="flex justify-center items-center flex-col ">

                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/MCSF-Redish-logo.png" class="md:w-[8vw] m-10" alt="logo" />

                                    <div class="flex justify-center items-center gap-1">

                                        <a href="https://www.facebook.com/MusicCitySF/"
                                            class=" border-2 border-primary hover:opacity-75 duration-500 transition rounded-full ">
                                            <svg class="w-[3vw] flex justify-center items-center" viewBox=" 0 0 48 48"
                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>Facebook</title>
                                                <g id="Icon/Social/facebook-black" stroke="none" stroke-width="1"
                                                    fill="none" fill-rule="evenodd">
                                                    <path
                                                        d="M30.0793333,40 L30.0793333,27.608 L34.239,27.608 L34.8616667,22.7783333 L30.0793333,22.7783333 L30.0793333,19.695 C30.0793333,18.2966667 30.4676667,17.344 32.4726667,17.344 L35.0303333,17.3426667 L35.0303333,13.0233333 C34.5876667,12.9646667 33.0696667,12.833 31.3036667,12.833 C27.6163333,12.833 25.0923333,15.0836667 25.0923333,19.2166667 L25.0923333,22.7783333 L20.922,22.7783333 L20.922,27.608 L25.0923333,27.608 L25.0923333,40 L30.0793333,40 Z M9.766,40 C8.79033333,40 8,39.209 8,38.234 L8,9.766 C8,8.79033333 8.79033333,8 9.766,8 L38.2336667,8 C39.209,8 40,8.79033333 40,9.766 L40,38.234 C40,39.209 39.209,40 38.2336667,40 L9.766,40 Z"
                                                        id="Shape" fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </a>

                                        <a href="https://www.instagram.com/musiccitysanfrancisco/"
                                            class=" border-2 border-primary hover:opacity-75 duration-500 transition rounded-full ">
                                            <svg class="w-[3vw]" viewBox="0 0 48 48" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>Instagram</title>
                                                <g id="Icon/Social/instagram-black" stroke="none" stroke-width="1"
                                                    fill="none" fill-rule="evenodd">
                                                    <path
                                                        d="M25.6440564,8.00125481 C28.524689,8.00651102 29.1340343,8.02966857 30.5968,8.09632 C32.29984,8.17376 33.46272,8.44448 34.48064,8.84 C35.5328,9.24896 36.42496,9.79584 37.31456,10.68544 C38.20416,11.57504 38.75136,12.4672 39.16,13.51936 C39.55552,14.53728 39.82592,15.70016 39.90368,17.4032 C39.9747749,18.9634834 39.9963833,19.5527641 39.9995653,22.9632797 L39.9995653,25.0367203 C39.9963833,28.4472359 39.9747749,29.0365166 39.90368,30.5968 C39.82592,32.29984 39.55552,33.46272 39.16,34.48064 C38.75136,35.5328 38.20416,36.42496 37.31456,37.31456 C36.42496,38.20416 35.5328,38.75104 34.48064,39.16 C33.46272,39.55552 32.29984,39.82624 30.5968,39.90368 C29.0365166,39.9747749 28.4472359,39.9963833 25.0367203,39.9995653 L22.9632797,39.9995653 C19.5527641,39.9963833 18.9634834,39.9747749 17.4032,39.90368 C15.70016,39.82624 14.53728,39.55552 13.51936,39.16 C12.4672,38.75104 11.57504,38.20416 10.68544,37.31456 C9.79584,36.42496 9.24864,35.5328 8.84,34.48064 C8.44448,33.46272 8.17408,32.29984 8.09632,30.5968 C8.02966857,29.1340343 8.00651102,28.524689 8.00125481,25.6440564 L8.00125481,22.3559436 C8.00651102,19.475311 8.02966857,18.8659657 8.09632,17.4032 C8.17408,15.70016 8.44448,14.53728 8.84,13.51936 C9.24864,12.4672 9.79584,11.57504 10.68544,10.68544 C11.57504,9.79584 12.4672,9.24896 13.51936,8.84 C14.53728,8.44448 15.70016,8.17376 17.4032,8.09632 C18.8659657,8.02966857 19.475311,8.00651102 22.3559436,8.00125481 Z M25.0186977,10.8832675 L22.9813023,10.8832675 C19.6322732,10.8861221 19.0771566,10.9057829 17.53472,10.976 C15.97472,11.04736 15.12736,11.30784 14.56384,11.52704 C13.81696,11.81728 13.28384,12.16416 12.72416,12.72384 C12.16416,13.28384 11.81728,13.81696 11.52704,14.56352 C11.30816,15.12736 11.04704,15.97472 10.97632,17.53472 C10.9058103,19.0771566 10.8861244,19.6322732 10.8832677,22.9813023 L10.8832677,25.0186977 C10.8861244,28.3677268 10.9058103,28.9228434 10.97632,30.46528 C11.04704,32.02528 11.30816,32.87264 11.52704,33.43648 C11.81728,34.18304 12.16416,34.71616 12.72416,35.27616 C13.28384,35.83584 13.81696,36.18272 14.56384,36.47296 C15.12736,36.69216 15.97472,36.95264 17.53472,37.024 C19.076864,37.0942171 19.6319556,37.1138779 22.9812271,37.1167325 L25.0187729,37.1167325 C28.3680444,37.1138779 28.923136,37.0942171 30.46528,37.024 C32.02528,36.95264 32.87264,36.69216 33.43616,36.47296 C34.18304,36.18272 34.71616,35.83584 35.27584,35.27616 C35.83584,34.71616 36.18272,34.18304 36.47296,33.43648 C36.69184,32.87264 36.95296,32.02528 37.02368,30.46528 C37.0941897,28.9228434 37.1138756,28.3677268 37.1167323,25.0186977 L37.1167323,22.9813023 C37.1138756,19.6322732 37.0941897,19.0771566 37.02368,17.53472 C36.95296,15.97472 36.69184,15.12736 36.47296,14.56352 C36.18272,13.81696 35.83584,13.28384 35.27584,12.72384 C34.71616,12.16416 34.18304,11.81728 33.43616,11.52704 C32.87264,11.30784 32.02528,11.04736 30.46528,10.976 C28.9228434,10.9057829 28.3677268,10.8861221 25.0186977,10.8832675 Z M24,15.78384 C28.53792,15.78384 32.21632,19.46224 32.21632,23.99984 C32.21632,28.53776 28.53792,32.21616 24,32.21616 C19.46208,32.21616 15.78368,28.53776 15.78368,23.99984 C15.78368,19.46224 19.46208,15.78384 24,15.78384 Z M24,18.66672 C21.0544,18.66672 18.66656,21.05456 18.66656,23.99984 C18.66656,26.94544 21.0544,29.33328 24,29.33328 C26.9456,29.33328 29.33344,26.94544 29.33344,23.99984 C29.33344,21.05456 26.9456,18.66672 24,18.66672 Z M32.540928,13.539232 C33.601088,13.539232 34.460928,14.398752 34.460928,15.459232 C34.460928,16.519392 33.601088,17.379232 32.540928,17.379232 C31.480448,17.379232 30.620928,16.519392 30.620928,15.459232 C30.620928,14.398752 31.480448,13.539232 32.540928,13.539232 Z"
                                                        id="Shape" fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </a>

                                        <a href="https://www.tiktok.com/@musiccitysf"
                                            class=" border-2 border-primary hover:opacity-75 duration-500 transition rounded-full ">
                                            <svg class="w-[3vw]" viewBox="0 0 48 48" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>Tiktok</title>
                                                <g id="Icon/Social/tiktok-black" stroke="none" stroke-width="1"
                                                    fill="none" fill-rule="evenodd">
                                                    <path
                                                        d="M38.0766847,15.8542954 C36.0693906,15.7935177 34.2504839,14.8341149 32.8791434,13.5466056 C32.1316475,12.8317108 31.540171,11.9694126 31.1415066,11.0151329 C30.7426093,10.0603874 30.5453728,9.03391952 30.5619062,8 L24.9731521,8 L24.9731521,28.8295196 C24.9731521,32.3434487 22.8773693,34.4182737 20.2765028,34.4182737 C19.6505623,34.4320127 19.0283477,34.3209362 18.4461858,34.0908659 C17.8640239,33.8612612 17.3337909,33.5175528 16.8862248,33.0797671 C16.4386588,32.6422142 16.0833071,32.1196657 15.8404292,31.5426268 C15.5977841,30.9658208 15.4727358,30.3459348 15.4727358,29.7202272 C15.4727358,29.0940539 15.5977841,28.4746337 15.8404292,27.8978277 C16.0833071,27.3207888 16.4386588,26.7980074 16.8862248,26.3604545 C17.3337909,25.9229017 17.8640239,25.5791933 18.4461858,25.3491229 C19.0283477,25.1192854 19.6505623,25.0084418 20.2765028,25.0219479 C20.7939283,25.0263724 21.3069293,25.1167239 21.794781,25.2902081 L21.794781,19.5985278 C21.2957518,19.4900128 20.7869423,19.436221 20.2765028,19.4380839 C18.2431278,19.4392483 16.2560928,20.0426009 14.5659604,21.1729264 C12.875828,22.303019 11.5587449,23.9090873 10.7814424,25.7878401 C10.003907,27.666593 9.80084889,29.7339663 10.1981162,31.7275214 C10.5953834,33.7217752 11.5748126,35.5530237 13.0129853,36.9904978 C14.4509252,38.4277391 16.2828722,39.4064696 18.277126,39.8028054 C20.2711469,40.1991413 22.3382874,39.9951517 24.2163416,39.2169177 C26.0948616,38.4384508 27.7002312,37.1209021 28.8296253,35.4300711 C29.9592522,33.7397058 30.5619062,31.7522051 30.5619062,29.7188301 L30.5619062,18.8324027 C32.7275484,20.3418321 35.3149087,21.0404263 38.0766847,21.0867664 L38.0766847,15.8542954 Z"
                                                        id="Fill-1" fill="#FFF"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="text-white justify-center items-center w-full mt-16 ml-16" role="none">
                                <ul class="flex flex-col justify-between h-[30vh]">
                                    <li class="text-2xl hover:text-gray-400"><a
                                            href="https://musiccitysf.com/about-us/">ABOUT
                                            US</a></li>
                                    <li class="font-normal text-xl  hover:text-gray-400"><a
                                            href="https://musiccitysf.com/about-us/history/">Our History</a></li>
                                    <li class="font-normal text-xl  hover:text-gray-400"><a
                                            href="https://musiccitysf.com/about-us/contact-us/">Contact Us</a></li>
                                    <li class="font-normal text-xl  hover:text-gray-400"><a
                                            href="https://musiccitysf.com/about-us/media/">Media</a></li>
                                    <li class="font-normal text-xl  hover:text-gray-400"><a
                                            href="https://musiccitysf.com/about-us/faq/">FAQ</a></li>
                                    <li
                                        class="font-normal text-xl mt-5 uppercase cursor-pointer bg-white text-primary w-[10vw] hover:bg-primary hover:text-white p-2 text-center border-2 duration-500 transition ">
                                        <a href="https://musiccitysf.com/about-us/contact-us/">Contact
                                            Us</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="w-full h-full flex flex-wrap ">

                            <div class="py-1 text-white justify-center items-center w-[20%] m-9 " role="none">
                                <ul class="flex flex-col justify-between h-[30vh]">
                                    <div>
                                        <li class="text-2xl hover:text-gray-400"><a
                                                href="https://musiccitysf.com/hotel/">HOTEL &
                                                HOSTEL</a></li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/hotel#rooms">Our Rooms</a></li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/hotel/explore/">Explore San Francisco</a>
                                        </li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/about-us/contact-us/">Contac Us</a></li>
                                    </div>

                                    <li
                                        class="font-normal text-xl mt-5 uppercase cursor-pointer bg-white text-primary w-[10vw] hover:bg-primary hover:text-white p-2 text-center border-2 duration-500 transition ">
                                        <a href="https://musiccitysf.com/hotel#rooms">BOOK NOW</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="py-1 text-white justify-center items-center w-[20%] m-9" role="none">
                                <ul class="flex flex-col justify-between h-[30vh]">

                                    <div>
                                        <li class="text-2xl hover:text-gray-400"><a
                                                href="https://musiccitysf.com/rehearsal/">REHEARSAL</a></li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/rehearsal/studios/">Our Studios</a></li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/rehearsal/sessions/">MCSF Sessions</a>
                                        </li>
                                    </div>

                                    <li
                                        class="font-normal text-xl mt-5 cursor-pointer uppercase bg-white text-primary w-[10vw] hover:bg-primary hover:text-white p-2 text-center border-2 duration-500 transition ">
                                        <a href="https://musiccitysf.com/rehearsal/studios">RESERVE NOW</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="py-1 text-white justify-center items-center w-[20%] m-9" role="none">
                                <ul class="flex flex-col justify-between h-[30vh]">
                                    <div>
                                        <li class="text-2xl hover:text-gray-400"><a
                                                href="https://musiccitysf.com/mcsf-venue/">VENUE</a></li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/mcsf-venue/upcoming-events/">Upcoming
                                                Events</a></li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/mcsf-venue/past-events/">Past Events</a>
                                        </li>
                                    </div>

                                    <li
                                        class="font-normal text-xl mt-5 uppercase cursor-pointer bg-white text-primary w-[10vw] hover:bg-primary hover:text-white p-2 text-center border-2 duration-500 transition ">
                                        <a href="https://musiccitysf.com/mcsf-venue/upcoming-events">GET TICKET</a>S
                                    </li>
                                </ul>
                            </div>

                            <div class="py-1 text-white justify-center items-center w-[20%] m-9" role="none">
                                <ul class="flex flex-col justify-between h-[30vh]">

                                    <div>
                                        <li class="text-2xl hover:text-gray-400"><a
                                                href="https://musiccitysf.com/hall-of-fame/">HALL OS FAME</a></li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/hall-of-fame/#gallery">Hall of Fame</a>
                                        </li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/hall-of-fame/#wall">Brick Wall</a></li>
                                    </div>

                                    <li
                                        class="font-normal text-xl mt-5 uppercase cursor-pointer bg-white text-primary w-[10vw] hover:bg-primary hover:text-white p-2 text-center border-2 duration-500 transition ">
                                        <a
                                            href="https://www.eventbrite.com/e/san-francisco-music-hall-of-fame-gallery-tickets-511127354677">RESERVE
                                            NOW</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="py-1 text-white justify-center items-center w-[20%] m-9 h-[40vh]" role="none">
                                <ul class="flex flex-col justify-between h-[30vh]">
                                    <div>
                                        <li class="text-2xl hover:text-gray-400"><a
                                                href="https://musiccitysf.com/entertainment/">ENTERTAINMENT</a></li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/entertainment/#events">Community
                                                Events</a>
                                        </li>
                                        <li class="font-normal text-xl mt-2 hover:text-gray-400"><a
                                                href="https://musiccitysf.com/entertainment/#submit">artist
                                                Submissions</a>
                                        </li>

                                    </div>
                                    <li
                                        class="font-normal text-xl mt-5 uppercase cursor-pointer bg-white text-primary w-[10vw] hover:bg-primary hover:text-white p-2 text-center border-2 duration-500 transition ">
                                        <a href="https://musiccitysf.com/entertainment/#events">GET TICKETS</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="py-1 text-white justify-center items-center w-[20%] m-9" role="none">
                                <ul>
                                    <li class="text-2xl hover:text-gray-400"><a
                                            href="https://musiccitysf.org/restaurant/">RESTAURANT</a></li>
                                    <li class="font-normal text-xl mt-2 hover:text-gray-400"><a>Coming Soon</a></li>

                                </ul>
                            </div>

                            <div class="py-1 text-white justify-center items-center w-[20%] m-9" role="none">
                                <ul>
                                    <li class="text-2xl hover:text-gray-400"><a
                                            href="https://musiccitysf.org/education/">EDUCATION</a></li>
                                    <li class="font-normal text-xl mt-2 hover:text-gray-400"><a>Coming Soon</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- dropdown -->

        </div>

        <div class="grow w-full flex nav-links md:static min-[100px]:h-[50vh] min-[100px]:pb-4 md:pb-0 md:h-full absolute items-center left-0 top-[-1000%] justify-center bg-primary 
              duration-500 transition-all ease-in z-50 ">
      <ul
        class="flex items-center justify-between min-[100px]:w-full sm:w-full md:flex-row flex-col md:gap-[0vw] md:min-w-full
                md:border-l-2 border-l-0  md:h-10  md:pl-[5px] bg-primary  min-[100px]:h-full flex-nowrap text-nowrap font-druk-text-trial">
        <li class="p-[2px]">
          <a href="https://musiccitysf.com/hotel/"
            class="text-white hover:text-gray-300 duration-500 sm:text-[12px] lg:text-[15px] bg-primary h-full w-full ">Hotel
            &amp;
            Hostel</a>
        </li>
        <li class="p-[2px]">
          <a href="https://musiccitysf.com/rehearsal/"
            class="text-white hover:text-gray-300 duration-500 min-[100px]:text-[12px] lg:text-[15px] bg-primary h-full w-full">Rehearsal</a>
        </li>
        <li class="p-[2px]">
          <a href="https://musiccitysf.com/mcsf-venue/"
            class="text-white hover:text-gray-300 duration-500 min-[100px]:text-[12px] lg:text-[15px] bg-primary h-full w-full">Venue</a>
        </li>
        <li class="p-[2px]">
          <a href="https://musiccitysf.com/hall-of-fame/"
            class="text-white hover:text-gray-300 duration-500 min-[100px]:text-[12px] lg:text-[15px] bg-primary h-full w-full">Hall of Fame</a>
        </li>
        <li class="p-[2px]">
          <a href="https://musiccitysf.com/entertainment/"
            class="text-white hover:text-gray-300 duration-500 min-[100px]:text-[12px] lg:text-[15px] bg-primary h-full w-full">Entertainment</a>
        </li>
        <li class="p-[2px]">
          <a href="https://www.musiccitysf.org/restaurant"
            class="text-white hover:text-gray-300 duration-500 min-[100px]:text-[12px] lg:text-[15px] bg-primary h-full w-full">Restaurant</a>
        </li>
        <li class="p-[2px]">
          <a href="https://musiccitysf.com/about-us/media/"
            class="text-white hover:text-gray-300 duration-500 min-[100px]:text-[12px] lg:text-[15px] bg-primary h-full w-full">Media</a>
        </li>
      </ul>
        </div>
        <div class="md:w-[300px] min-[100px]:w-full sm:w-[50%] flex justify-around">
            <ul class="flex w-full justify-around items-center md:justify-start md:items-center min-[768px]:justify-center">
                <li>
                    <ion-icon onclick="onToggleMenu(this)" name="menu"
                        class="text-white min-[100px]:text-xl text-3xl min-[100px]:flex  md:hidden"></ion-icon>
                </li>
                <li>
                    <button
                        class="bg-white text-nowrap text-primary min-[768px]:text-xs min-[768px]:mr-1 duration-500 py-1 px-3 border-2 hover:bg-primary hover:text-white transition 
                  font-druk-trial font-normal lg:text-xl tracking-widest lg:mr-3 min-[100px]:text-[.8rem] sm:text-2xl"><a
                            href="https://www.eventbrite.com/o/music-city-san-francisco-12803819712">GET
                            TICKETS</a></button>
                </li>
                <li>
                    <div class="relative inline-block text-left dropdown">
                        <button
                            class="min-[100px]:text-[.8rem] sm:text-2xl min-[768px]:text-xs inline-flex justify-center w-full bg-white text-primary duration-500 py-1 px-3 border-2 hover:bg-primary 
                            hover:text-white transition font-druk-trial font-normal lg:text-xl tracking-widest text-nowrap focus:outline-none focus:ring-0 focus:ring-offset-0 focus:bg-primary"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            BOOK NOW
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <div class="dropdown-book origin-top-right absolute right-0 w-[300px] shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <a href="https://musiccitysf.com/hotel/#rooms"
                                    class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 text-nowrap"
                                    role="menuitem" tabindex="-1" id="menu-item-0">BOOK A HOTEL ROOM</a>
                                <a href="https://musiccitysf.com/rehearsal/studios/"
                                    class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 text-nowrap"
                                    role="menuitem" tabindex="-1" id="menu-item-1">BOOK A REHEARSAL STUDIO</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

  <!-- menu -->

  <!-- hero -->

  <section class="hero min-h-[100vh] flex min-[100px]:h-[100vh] min-[100px]:h-[70vh]  ">
    <div class="relative flex items-center justify-center w-full">
      <div class="absolute w-full h-full">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/filtro.png" class="relative w-full h-full top-0 left-0 z-10 sm:object-cover">
      </div>
      <div class="relative flex z-30 justify-center items-center text-white w-full h-full ">

        <div
          class="flex md:justify-between w-4/5 md:h-[70%] md:pt-32 h-full sm:flex-col md:flex-row min-[100px]:flex-col min-[100px]:py-[10vh] md:mt-0">

          <div class="flex flex-col md:w-4/12 w-full justify-end h-full ">
            <div
              class="font-druk-trial tracking-wide md:text-[5vw] font-normal md:leading-20 leanding-3 
              flex flex-col md:justify-start md:items-start items-center p-0 m-0 md:text-left text-center min-[100px]:text-5xl min-[100px]:mt-[15vh] md:mt-0">
              <p>WELCOME<br />TO THE MOST<br />MUSICAL<br />PLACE IN SF.</p>
            </div>
            <P class="flex flex-col w-full md:justify-start justify-center md:items-start items-center sm:text-xl pt-5 
            md:text-left text-center text-nowrap min-[100px]:text-xs ">
              <span>A cool f*cking place to stay,<br />enjoy & play good music.<br />It's like Disney for music
                lovers!</span>
            </P>
          </div>

          <div class="md:w-4/12 w-full flex md:items-center items-center h-full md:justify-center justify-center">
            <div class="md:w-[23vw] w-[35%] h-full ">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/MCSF-Redish-logo.png" alt="logo">
            </div>
          </div>

          <div class="md:w-3/12 flex md:items-end items-center md:justify-end justify-center text-2xl">
            <button class="bg-white text-black hover:bg-primary hover:text-white  border-2 border-white transition 
              font-druk-trial font-normal duration-500 px-12 py-2 min-[100px]:mb-[5vh] md:mt-0"><a
                href="https://musiccitysf.com/about-us/">ABOUT</a></button>
          </div>

        </div>
      </div>

    </div>

    <video src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/VID-20240724-WA0004.mp4" muted loop autoplay class="absolute z-0 w-auto min-w-full 
    h-[100vh] object-cover">
    </video>

  </section>

  <!-- hero -->
  
  <!-- venue -->

  <style>
      @media only screen and (max-width: 800px) {
      .eaw-ulx {
        display: flex;
        height: 60vh;
        width: 1000px;
        flex-wrap: nowrap;
        overflow-y: scroll;
        overflow-x: hidden;
        flex-direction:row;
        font-size: 1rem;

      }
      .eaw-li__wrap{
        width: 100vw !important;
        font-size: .8rem !important;
        margin-bottom: 3em;
        font-weight: 200 !important;
      }
      .eaw-title{
        font-size: medium !important;
        font-weight: 200 !important;
      }
    }
    .eaw-ulx{
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        font-family: "Druk textwide";
        border:none;
        border-bottom: none;
    }
    .widget-container .eaw-block a{
        font-family: "Druk medium";
        text-transform: uppercase;
        font-size: 30px !important;
        letter-spacing: .1rem;
    }
    .eaw-li__wrap{
        width: 33%;
        border: none;
        border-bottom: none;
    }
    .eaw-li__wrap:hover{
        opacity: 0.8
    }
    .widget{
        width: 80%;
        align-items: center;
        border: none;
        border-bottom: none;
    }
    .shortcode{
        display: flex;
        align-items: center;
        justify-content: center;
        border:none;
        border-bottom: none;
    }
    .eaw-block a{
        color:white;
        border:none;
        border-bottom: none;
    }
    .eaw-block a:hover{
        color:white;
    }
    .eaw-summary{
        color:white;
        border:none;
        border-bottom: none;
    }
    .eaw-booknow{
        display: none;
        border:none;
        border-bottom: none;
    }
    .elementor-widget-container .eaw-block .eaw-thumb {
        width: 100%;
        border: none;
        border-bottom: none;
    }
    .widget-container .eaw-block .eaw-li__wrap{
        border: none;
        border-bottom: none;
    }

    .evb_mcsf .eaw-title {
        font-family: 'druk trial';
        letter-spacing: 1px;
        font-size: 22px;
        text-transform: uppercase;
    }

    .evb_mcsf time {
        font-family: 'druk trial'; !important;
    }

    #eventbrite{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .wfea eaw-block evb_mcsf{
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #evb_mcsf_item{
        width: 80vw
    }
    .eaw-li__wrap {
      width: 25vw;
      height: 35vh;
      border: 0px;
    }

    .widget .eaw-block .eaw-thumb {
      border: none !important;
      width: 100%;
    }

    .eaw-thumb {
      border: none !important;
      width: 100% !important;
      height: 100% !important;
    }

    .eaw-img {
      border: none !important;
      width: 100% !important;
      height: 100% !important;
    }

    .eaw-li__wrap {
      border: none !important;
    }

    .eaw-time {
      color: white !important;
    }
    .eaw-li__flex{
      width: 100%;
    }
  </style>

  <section
    class="bg-primary min-w-full md:h-[160vh] min-[100px]:h-[90vh] flex justify-center flex-col items-center font-druk-text-trial text-white">
    <div class="flex flex-col w-[80%] md:justify-start md:items-start min-[100px]:justify-items-center leading-3">
      <span class="text-4xl font-druk-trial font-normal md:mb-5 mt-6 min-[100px]:text-center">Venue/</span>
      <span class="min-[100px]:w-full min-[100px]:text-4xl md:text-4xl sm:text-center md:text-left">UPCOMING
        EVENTS</span>
    </div>
    <div class="w-[80%] h-[70%] mt-3">
      <p><?php echo do_shortcode( '[wfea limit="9" status="live,started" excerpt="false" readmore="false" booknow_text="Book now »" newtab="true" tickets="true" cssID="evb_mcsf_item" css_class="evb_mcsf" ]' ); ?></p>
    </div>

    <div
      class="w-[80%] flex border-2 mt-3 border-white hover:border-gray-400 hover:text-gray-400 transition duration-500 cursor-pointer">
      <a href="https://www.eventbrite.com/o/music-city-san-francisco-12803819712"
        class="w-full flex justify-end items-end"><button class="p-2">SHOW MORE</button></a>
    </div>

  </section>

  <!-- venue -->

  <!-- rehearsal -->

  <section class="min-w-full bg-primary md:h-[80vh] min-[100px]:h-[100vh] z-40 flex min-[100px]:flex-col md:flex-row  ">

    <div class="object-cover md:h-[80vh] min-[100px]:h-[50vh] v-[50vw] md:flex items-center justify-center ">
      <div class="absolute w-full md:h-[80vh] min-[100px]:h-[50vh] z-50">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/filtro.png" class="relative w-full h-full top-0 left-0 z-10 object-cover ">
      </div>
      <video src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/Reharsal 16x9.mp4" alt="rehearsal studios" muted loop autoplay
        class="object-cover h-[80vh] w-full md:absolute z-10">
      </video>
    </div>


    <div class="md:w-[50vw] w-full min-[100px]:h-[80vh]  text-white items-center justify-center bg-primary flex flex-col 
    md:absolute right-0 h-[80vh] sm:h-[80vh] min-[100px]:p-6">
      <div class=" md:h-1/3 flex md:w-full flex-col justify-between leading-[3vh] sm:items-center md:items-start ">
        <span class="md:text-2xl font-bold min-[100px]:text-center md:text-left min-[100px]:text-base">Rehearsal Studios /</span>
        <span class="sm:text-6xl font-druk-trial  font-normal flex-nowrap  min-[100px]:text-center md:text-left min-[100px]:text-5xl">TAKE YOUR REHEARSAL
          <br />TO THE NEXT LEVEL /</span>
        <div class="leading-[3vh] pt-4 w-full justify-center items-center min-[100px]:text-center flex">
          <p class="font-normal sm:w-[90%] sm:text-xl min-[100px]:text-[15px] md:text-left min-[100px]:w-full flex sm:w-full sm:text-center md:text-sm min-[100px]:text-center md:text-left">
          Whether you're a solo project or a
            band, uor brand-new music
            <br />rehearsal studios are affordable for all musicians.
          </p>
        </div>
      </div>
      <div class="flex items-end justify-end md:w-4/6 mt-28 min-[100px]:w-full">
        <button class="md:w-36 flex min-[100px]:w-full font-druk-trial font-normal p-2 text-2xl border-2 justify-center items-center 
          hover:text-primary hover:bg-white hover:border-primary transition duration-500"><a
            href="https://musiccitysf.com/rehearsal/studios/">SEE ALL STUDIOS</a></button>
      </div>
    </div>

  </section>

  <!-- rehearsal -->

  <!-- hotel -->
  <style>
    .carousel-item {
      min-width: calc(100% / 4);
    }
  </style>

  <section
    class="flex flex-col md:flex-row bg-secondary min-w-full md:h-[90vh] min-[100px]:h-[70vh] h-[100vh] min-[100px]:m-0 min-[100px]:p-0 items-center justify-center">
    <div class="absolute md:w-full md:h-full min-[100px]:h-[100vh] ">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/Site_BG_RED.png" class="relative w-full h-full top-0 left-0 z-10 object-cover ">
    </div>
    <div class="flex flex-col text-white justify-center items-start w-[80%] h-[90%] z-20 ">
      <div class="flex flex-col md:items-start md:justify-start md:w-[35%] w-full min-[100px]:justify-center min-[100px]:items-center">
		<div
          class="flex flex-col font-druk-trial tracking-wide text-[5vw] font-normal w-full leading-[4vh] 
        justify-start p-0 m-0 sm:items-center md:items-start min-[100px]:justify-center min-[100px]:items-center min-[100px]:text-center">
          <span class="sm:text-4xl font-bold md:mb-5 min-[100px]:text-2xl">Hotel /</span>
          <span class="sm:text-7xl font-druk-trial font-normal sm:text-center md:text-left min-[100px]:text-3xl ">THE
            ONLY
            <br />HOTEL THAT
            <br />ROCKS
          </span>
        </div>

        <div
          class=" min-[100px]:leading-3 sm:w-full sm:items-center md:items-start min-[100px]:justify-center min-[100px]:items-center">
          <div
            class="flex flex-col font-medium mt-5 sm:text-center md:text-left md:items-start md:justify-start min-[100px]:justify-center min-[100px]:items-center">
            <p class="leading-5 min-[100px]:text-center md:text-left min-[100px]:text-sm">We're the only music-themed hotel & hostel
              <br />in San Francisco built directly into Music City
              <br />San Francisco!
            </p>
          </div>

          <div class="flex flex-col font-medium mt-3 sm:text-center md:text-left">
            <p class="leading-5 min-[100px]:text-center md:text-left min-[100px]:text-sm">Travel and make new friends by staying in our
              <br />hostel rooms, jam with the SF local talent in
              <br />the rehearsal studios or karaoke rooms, and
              <br />experience live music like no hotel has ever
              <br />done before in our on-site venues!
            </p>

          </div>
        </div>
        <div class="flex w-full justify-end items-end mt-4 min-[100px]:w-full  ">
          <button class="md:w-36 flex font-druk-trial font-normal p-2 text-2xl border-2 justify-center items-center 
          hover:text-primary hover:border-primary transition duration-500 min-[100px]:w-full "><a
              href="https://musiccitysf.com/hotel/#rooms">OUR
              ROOMS</a></button>
        </div>
      </div>
    </div>

    <div class="md:absolute md:right-0 hidden md:flex z-20 ">
      <div class="md:relative w-[60vw] max-w-5xl overflow-hidden md:h-[70vh] md:h-[50vh] flex z-50">
        <div id="carousel" class="flex transition-transform duration-300 md:h-full items-end  ">
          <div class="carousel-item flex-shrink-0 py-2 px-2 md:w-[35%] md:h-[60vh] ">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel-1.png" alt="Item 1" class="w-full h-[55vh] object-cover ">
          </div>
          <div class="carousel-item flex-shrink-0 py-2 px-2 w-[35%] h-[60vh] ">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel-2.png" alt="Item 2" class="w-full h-[55vh] object-cover">
          </div>
          <div class="carousel-item flex-shrink-0 py-2 px-2 w-[35%] h-[60vh] ">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel-3.png" alt="Item 3" class="w-full h-[55vh] object-cover">
          </div>
          <div class="carousel-item flex-shrink-0 py-2 px-2 w-[35%] h-[60vh] ">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel-4.png" alt="Item 4" class="w-full h-[55vh] object-cover">
          </div>
          <div class="carousel-item flex-shrink-0 py-2 px-2 w-[35%] h-[60vh] ">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel-1.png" alt="Item 5" class="w-full h-[55vh] object-cover">
          </div>
          <div class="carousel-item flex-shrink-0 py-2 px-2 w-[35%] h-[60vh] r">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/carousel/carousel-2.png" alt="Item 6" class="w-full h-[55vh] object-cover">
          </div>
        </div>

        <button onclick="prevSlide()" class="md:absolute bottom-[-1vh] left-[60%] transform -translate-y-1/2 bg-white text-black px-2 hover:bg-primary hover:text-white transition duration-500
          rounded-full shadow-md focus:outline-none">
          &lt;
        </button>
        <button onclick="nextSlide()" class="md:absolute bottom-[-1vh] right-[25%] transform -translate-y-1/2 bg-white text-black px-2 hover:bg-primary hover:text-white transition duration-500
          rounded-full shadow-md focus:outline-none">
          &gt;
        </button>
      </div>
      <script>
        let currentSlide = 0;
        const totalItems = document.querySelectorAll('#carousel .carousel-item').length;
        const visibleItems = 3; // Quantos itens são visíveis de cada vez

        function updateCarousel() {
          document.getElementById('carousel').style.transform = `translateX(-${currentSlide * (100 / visibleItems)}%)`;
        }

        function nextSlide() {
          currentSlide = (currentSlide + 1) % (totalItems / visibleItems);
          updateCarousel();
        }

        function prevSlide() {
          currentSlide = (currentSlide - 1 + (totalItems / visibleItems)) % (totalItems / visibleItems);
          updateCarousel();
        }

        // Initialize carousel
        updateCarousel();
      </script>

    </div>

  </section>

  <!-- hotel -->

  

  <!-- hall of fame -->
  <section class="flex bg-primary sm:h-[90vh] min-w-full min-[100px]:h-[70vh] justify-center text-white z-30">
      <div class=" w-[80vw] h-full py-16 relative flex min-[100px]:flex-col md:flex-row justify-between z-40 ">

      <div class="md:w-2/3 flex flex-col md:h-4/5 sm:text-2xl min-[100px]:w-full xl:pt-[10vh] md:text-left min-[100px]:text-center min-[100px]:text-sm">
        <span>Experience the bay
          <br />area music's legacy/
        </span>
      </div>
      <div class="md:w-full md:h-4/5 flex justify-center items-center md:text-7xl font-druk-text-trial font-normal 
        tracking-normal min-[100px]:w-full min-[100px]:text-3xl text-nowrap">
        <span>HALL OF FAME</span>
      </div>
      <div class="md:w-2/4 md:h-4/5 flex justify-end items-end min-[100px]:w-full">
        <button class="text-white duration-500 py-2 px-9 border-2 hover:bg-white hover:text-primary md:w-full font-druk-trial font-normal 
          hover:border-primary transition md:text-2xl text-3xl tracking-widest min-[100px]:w-full text-nowrap"><a
            href="https://musiccitysf.com/hall-of-fame/">LEARN MORE</a>
        </button>
      </div>
    </div>
    </div>

    <div class="absolute w-full h-[90vh] z-30">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/filtro.png" class="relative w-full h-full top-0 left-0 z-10 object-cover ">
    </div>

    <video src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/Hall 16x9.mp4" muted loop autoplay
      class="flex absolute w-auto min-w-full min-h-full object-cover z-20 ">
    </video>
  </section>
  <!-- hall of fame -->

  <!-- about -->
  <section class="flex bg-secondary md:h-[80vh]  min-w-full z-40 md:flex-row flex-col items-center min-[100px]:h-[100vh]
  justify-center">

    <div class="md:absolute w-[80vw] md:h-[80vh] min-[100px]:h-[50vh] justify-center items-center md:pt-[17vh] py-5">
      <div>
        <div class="flex flex-col text-white justify-center items-start w-[80%] md:h-[90%] h-[45vh] min-[100px]:w-full">
          <div class="flex flex-col items-start justify-center w-full md:w-[38vw] md:h-full ">
            <div class="flex flex-col font-druk-trial tracking-wide text-[5vw] font-normal md:leading-[9vh] 
              leading-[5vh] justify-start p-0 m-0 min-[100px]:w-full sm:items-center md:items-start">
              <span
                class="sm:text-4xl font-druk-trial font-normal md:mb-5 md:text-left min-[100px]:text-center min-[100px]:text-3xl">About/</span>
              <span
                class="min-[100px]:w-full min-[100px]:text-5xl md:text-6xl sm:text-center md:text-left min-[100px]:text-center ">WE
                KEEP THE
                <br /> CANDLE
                BURNING</span>
            </div>

            <div class="leading-[3vh] w-full">
              <div
                class=" md:text-left min-[100px]:text-center w-full flex flex-col justify-center items-center md:leading-5 font-medium my-3 sm:text-center md:text-left ">
                <p class="min-[100px]:w-[70%] sm:w-full min-[100px]:text-xs sm:text-[15px] md:text-[12px] lg:text-[15px]">Music City San Francisco is the a music HUB that San Francisco
                  <br />has been waiting for. Founded by musician Rudy colombini, MCSF
                  <br />is designed with the community in mind, built to to keep the
                  <br />Bay Area Legacy alive!
                </p>
              </div>

            </div>
            <div class="flex w-full justify-end items-end md:my-5 min-[100px]:m-0">
              <button class="md:w-36 flex font-druk-trial font-normal p-2 text-2xl border-2 justify-center items-center 
                hover:text-primary hover:border-primary transition duration-500 min-[100px]:w-full"><a
                  href="https://musiccitysf.com/about-us/">LEARN MORE</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="w-[50vw] h-full md:flex hidden">

    </div>
    <div class="w-full md:h-[80vh] md:w-[50vw] min-[100px]:h-[50vh] bg-gray-950 flex justify-end items-end z-0">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/colombini.png" alt="Rudy-Colombini" class="w-full h-full object-cover mask-circle" />
    </div>


  </section>
  <!-- about -->

  <!-- instagram -->
  <style>
        #sb_instagram {
          height: 80%;
          color: white;
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
          padding: 20px 0 20px 0;

        }

        .sbi_link {
          display: flex;
          justify-content: start;
          gap: 5px;
        }

        .svg-inline--fa {
          width: 3vw;
          display: none;
        }

        #sbi_images {
          display: flex;
          flex-wrap: wrap;
          flex-direction: row;
          width: 50vw;
          justify-content: center;
          align-items: center;
          height: 40vh;
          margin-bottom: 7px;
        }

        .sbi_item {
          width: 30%;
          height: 47%;
        }

        .sbi_inner_wrap {
          width: 100%;
          height: 100%;
        }

        .sbi_photo_wrap {
          width: 100%;
          display: flex;
          flex-direction: column-reverse;
          flex-wrap: wrap;
          height: 100%;
          background-color: black;
        }

        .sbi-screenreader {
          display: none;
        }

        .sbi_date {
          display: none;
        }

        .sbi_caption {
          display: none;
        }

        .sbi_photo {
          width: 100%;
          height: 100%;
          background-color: black;
          object-fit: contain;
        }

        .sbi_photo img {
          width: 100%;
          height: 100%;
          background-color: black;
          object-fit: cover;
        }
      </style>

  <section class="bg-primary min-w-full h-[80vh] flex items-center justify-center ">
    <div
      class="flex md:w-[70%] bg-secondary md:h-[70%] py-5 min-[100px]:w-full min-[100px]:h-full min-[100px]:flex-col md:flex-row justify-center items-center">
      <ul
        class="md:w-[70%] min-[100px]:w-[80%] min-[100px]:h-[80%] md:h-full flex justify-center items-center sm:flex-wrap min-[100px]:flex-nowrap gap-5 min-[100px]:flex-col md:flex-row">
        <li class="bg-primary sm:w-[30%] sm:h-[45%] min-[100px]:w-full min-[100px]:h-[30%]">
          <a class="w-full h-full" href="https://www.instagram.com/reel/C9qb1ajyzib/">
            <img class="w-full h-full object-cover"
              src="https://musiccitysf.com/wp-content/uploads/sb-instagram-feed-images/451971424_1622259215010372_672620187000202787_nlow.webp" />
          </a>
        </li>
        <li class="bg-primary sm:w-[30%] sm:h-[45%] min-[100px]:w-full min-[100px]:h-[30%]">
          <a class="w-full h-full" href="https://www.instagram.com/reel/C9vpspHS3KX/">
            <img class="w-full h-full object-cover"
              src="https://musiccitysf.com/wp-content/uploads/sb-instagram-feed-images/452528759_1214118673057054_7792700828721978146_nlow.webp" />
          </a>
        </li>
        <li class="bg-primary sm:w-[30%] sm:h-[45%] min-[100px]:w-full min-[100px]:h-[30%]">
          <a class="w-full h-full" href="https://www.instagram.com/reel/C9p32ePSLPo/">
            <img class="w-full h-full object-cover"
              src="https://musiccitysf.com/wp-content/uploads/sb-instagram-feed-images/452232518_496582186381140_698131357287060370_nlow.webp" />
          </a>
        </li>
        <li class="bg-primary sm:w-[30%] sm:h-[45%] min-[100px]:w-full min-[100px]:h-[30%] min-[100px]:hidden sm:flex min-[812px]:flex ">
          <a class="w-full h-full" href="https://www.instagram.com/reel/C9kyNxNyGQ_/">
            <img class="w-full h-full object-cover"
              src="https://musiccitysf.com/wp-content/uploads/sb-instagram-feed-images/451730480_1207355997266283_8756129115321909578_nlow.webp" />
          </a>
        </li>
        <li class="bg-primary sm:w-[30%] sm:h-[45%] min-[100px]:w-full min-[100px]:h-[30%] min-[100px]:hidden sm:flex min-[768px]:hidden min-[812px]:flex">
          <a class="w-full h-full" href="https://www.instagram.com/reel/C9iFG4hvZDd/">
            <img class="w-full h-full object-cover"
              src="https://musiccitysf.com/wp-content/uploads/sb-instagram-feed-images/451416901_2292461091145921_2067427294379394446_nlow.webp" />
          </a>
        </li>
        <li class="bg-primary sm:w-[30%] sm:h-[45%] min-[100px]:w-full min-[100px]:h-[30%] min-[100px]:hidden sm:flex min-[768px]:hidden min-[812px]:flex">
          <a class="w-full h-full" href="https://www.instagram.com/reel/C9gP8JDy1nv/">
            <img class="w-full h-full object-cover"
              src="https://musiccitysf.com/wp-content/uploads/sb-instagram-feed-images/451378808_1188698582322135_3762280051090328266_nlow.webp" />
          </a>
        </li>
      </ul>

      <div
        class="md:h-full md:w-[30%] md:pr-7 text-white flex justify-between min-[100px]:w-[80%] min-[100px]:flex-col md:flex-col">
        <p class="text-nowrap md:text-[2vw] min-[100px]:text-center sm:text-left">FOLLOW US ON <br /> INSTAGRAM</p>

        <button
          class="md:text-nowrap md:w-full border-2 p-2 md:mb-3 md:text-[1vw] min-[100px]:text-xs min-[100px]:text-wrap">
          <a
            href="https://www.instagram.com/musiccitysanfrancisco/">@<strong>music</strong>city<strong>san</strong>francisco</a>
        </button>
      </div>

    </div>
  </section>

  <!-- instagram -->

  <!-- mapa -->

  <section class="bg-white w-full h-[80vh] flex md:flex-row flex-col ">
    <div class="md:w-[50vw] md:h-[80vh] w-[100%] h-[50%] md:relative">
      <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3" class="object-cover md:h-[80vh] h-full">
        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3" class="h-full"></div>
        <script>(function () {
            var setting = { "query": "1355 Bush Street, São Francisco, CA, EUA", "width": "100%", "height": "100%", "satellite": false, "zoom": 14, "placeId": "ChIJ_7IFYZSAhYARqoNE6W1P-iA", "cid": "0x20fa4f6de94483aa", "coords": [37.7885599, -122.4195169], "cityUrl": "/us/ca/san-francisco", "cityAnchorText": "Mapa de São Francisco, Califórnia, Estados Unidos", "lang": "pt", "queryString": "1355 Bush Street, São Francisco, CA, EUA", "centerCoord": [37.7885599, -122.4195169], "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3", "embed_id": "1133063" };
            var d = document;
            var s = d.createElement('script');
            s.src = 'https://1map.com/js/script-for-user.js?embed_id=1133063';
            s.async = true;
            s.onload = function (e) {
              window.OneMap.initMap(setting)
            };
            var to = d.getElementsByTagName('script')[0];
            to.parentNode.insertBefore(s, to);
          })();</script><a href="https://1map.com/pt/map-embed">1 Map</a>
      </div>
    </div>
    <div class="md:w-[40%] xl:w-[48%] md:h-full w-full h-[50%] xl:h-[100%] flex items-center  ">
      <div class="md:w-full w-[50%] min-[100px]:hidden sm:flex">
        <img src="../assets/FIND.png" class="rotate-[270deg] md:h-[17vh] object-contain ">
      </div>
      <div class="h-[50%] w-full flex min-[100px]:justify-ceenter min-[100px]:items-center ">
        <ul
          class="flex flex-col justify-between items-start font-druk-wide-trial min-[100px]:w-[50vw] sm:w-[75vw] sm:flex font-normal xl:h-[100%] xl:m-0 md:h-[50%] md:mt-[9vh] text-nowrap ">
          <li class="flex items-center justify-center">
            <ion-icon name="pin" class="sm:text-2xl min-[100px]:text-xs"></ion-icon>
            <div class="flex flex-col ml-3 min-[100px]:text-xs">
              <strong>1355 Bush St.</strong>
              <strong>San Francisco, CA, 94109</strong>
            </div>
          </li>
          <li class="flex items-center justify-center">
            <ion-icon name="clock" class="sm:text-4xl min-[100px]:text-xs "></ion-icon>
            <div class="flex flex-col ml-3">
              <p class="font-normal min-[100px]:text-xs"><strong>Monday - Friday:</strong> 10 am - 10 pm</p>
              <p class="font-normal min-[100px]:text-xs"><strong>Weekends:</strong> 10 am - 10 pm</p>
            </div>
          </li>
          <li class="flex items-center justify-center">
            <ion-icon name="call" class="sm:text-4xl min-[100px]:text-sm"></ion-icon>
            <div class="ml-3 font-normal min-[100px]:text-xs">
              <p>(415) 767 - 0799</p>
            </div>
          </li>
          <li class="flex items-center justify-center">
            <ion-icon name="mail" class="sm:text-4xl min-[100px]:text-sm"></ion-icon>
            <div class="ml-3 font-normal min-[100px]:text-xs">
              <p>info@musiccitysf.org</p>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </section>

  <!-- mapa -->

  <!-- subscribe -->

  <style>
    .gform_title {
        display: none;
    }

    .gform-field-label {
            display: none;
          }

          .gfield-choice-input {
            display: none;
          }

          #gform_1 {
            padding: 5px;
            display: flex;
            color: white;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            border: 2px solid white;
          }

          .gfield_label .gform-field-label .gfield_label_before_complex {
            display: none;
          }

          #input_1_2 {
            background-color: transparent;
            color: white;
            font-size: small;
            width: 30vw;
            border: none;
            font-size: large;
            
          }
          #gform_submit_button_1{
            font-size: 2rem;
          }

          #input_1_2::placeholder {
            color: white;
          }
          #input_1_2:focus {
            outline: none;
          }
          .gform_title{
            display: none;
          }
          @media only screen and (max-width: 600px) {
            #input_1_2 {
              font-size:small;
              width: 60vw;
            }
          }
  </style>

  <section class="bg-secondary min-w-full h-[50vh] flex justify-center items-center">
    <div class="w-[80%] flex md:flex-row flex-col justify-between items-center ">
      <div
        class="md:w-[50vw] md:h-[25vh] w-full md:justify-end justify-center items-center md:items-start flex flex-col min-[100px]:justify-between min-[100px]:h-full
        font-druk-trial tracking-wide md:text-[4vw] text-white font-normal md:leading-[8vh] leading-[4vh] mb-4 md:mb-0 text-6xl min-[100px]:w-full">
        <h2 class="text-[70%] font-druk-trial font-normal mb-5 min-[100px]:text-xl md:text-[90%] text-nowrap">
          Subscribe/</h2>
        <p
          class="md:text-[100%] md:text-5xl min-[100px]:text-xs font-druk-trial font-normal min-[100px]:text-xl xl:text-[100%] lg:text-[100%] text-nowrap">
          BE THE FIRST TO KNOW UPCOMING <br>
          EVENTS, DISCOUNTS, AND UPDATES.</p>
      </div>
      <div class="md:w-[40vw] md:h-[25vh] w-full flex items-end justify-items-end justify-end min-[100px]:w-full ">
        
            <?php echo do_shortcode( '[gravityform id="1" title="true"]' ); ?>
      </div>
    </div>
  </section>

  <!-- subscribe -->

  <!-- footer -->

  <section
    class="bg-primary min-w-full md:h-[50vh] min-[100px]:h-[60vh] flex justify-center items-center text-white font-druk-bold font-medium">
    <div class="w-[80%] flex md:flex-row min-[100px]:flex-col justify-items-center">

      <div class="md:w-[40vw] md:h-[27vh] h-[20vh] sm:mt-8 min-[100px]:mt-0 flex justify-between items-center sm:flex-col min-[100px]:flex-row">

        <ul class="flex justify-between w-full min-[100px]:text-xs sm:text-sm min-[100px]:flex-col sm:flex-row ">
          <li class="transition duration-500 hover:opacity-70 cursor-pointer "><a class="border-b-2"
              href="https://musiccitysf.com/about-us/history/">Our History</a></li>
          <li class="transition duration-500 hover:opacity-70 cursor-pointer"><a class="border-b-2"
              href="https://musiccitysf.com/about-us/contact-us/">Contact US</a></li>
          <li class="transition duration-500 hover:opacity-70 cursor-pointer"><a class="border-b-2"
              href="https://musiccitysf.com/about-us/media/">Media</a></li>
          <li class="transition duration-500 hover:opacity-70 cursor-pointer"><a class="border-b-2"
              href="https://musiccitysf.com/about-us/faq/">FAQ</a></li>
        </ul>
        <div class="flex justify-between w-full leading-5 items-center min-[100px]:text-xs sm:text-sm min-[100px]:flex-col-reverse sm:flex-row">
          <p>Privacy Policy<br /> Terms and Conditions<br /> Accessibility</p>
          <div class="flex justify-center items-center min-[100px]:text-xs sm:text-sm">

            <a href="https://www.facebook.com/MusicCitySF/">
              <svg class="sm:w-[5vw] min-[100px]:w-[45px] flex justify-center items-center" viewBox=" 0 0 48 48" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Facebook</title>
                <g id="Icon/Social/facebook-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path
                    d="M30.0793333,40 L30.0793333,27.608 L34.239,27.608 L34.8616667,22.7783333 L30.0793333,22.7783333 L30.0793333,19.695 C30.0793333,18.2966667 30.4676667,17.344 32.4726667,17.344 L35.0303333,17.3426667 L35.0303333,13.0233333 C34.5876667,12.9646667 33.0696667,12.833 31.3036667,12.833 C27.6163333,12.833 25.0923333,15.0836667 25.0923333,19.2166667 L25.0923333,22.7783333 L20.922,22.7783333 L20.922,27.608 L25.0923333,27.608 L25.0923333,40 L30.0793333,40 Z M9.766,40 C8.79033333,40 8,39.209 8,38.234 L8,9.766 C8,8.79033333 8.79033333,8 9.766,8 L38.2336667,8 C39.209,8 40,8.79033333 40,9.766 L40,38.234 C40,39.209 39.209,40 38.2336667,40 L9.766,40 Z"
                    id="Shape" fill="#FFF"></path>
                </g>
              </svg>
            </a>

            <a href="https://www.instagram.com/musiccitysanfrancisco/">
              <svg class="sm:w-[5vw] min-[100px]:w-[45px]" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Instagram</title>
                <g id="Icon/Social/instagram-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path
                    d="M25.6440564,8.00125481 C28.524689,8.00651102 29.1340343,8.02966857 30.5968,8.09632 C32.29984,8.17376 33.46272,8.44448 34.48064,8.84 C35.5328,9.24896 36.42496,9.79584 37.31456,10.68544 C38.20416,11.57504 38.75136,12.4672 39.16,13.51936 C39.55552,14.53728 39.82592,15.70016 39.90368,17.4032 C39.9747749,18.9634834 39.9963833,19.5527641 39.9995653,22.9632797 L39.9995653,25.0367203 C39.9963833,28.4472359 39.9747749,29.0365166 39.90368,30.5968 C39.82592,32.29984 39.55552,33.46272 39.16,34.48064 C38.75136,35.5328 38.20416,36.42496 37.31456,37.31456 C36.42496,38.20416 35.5328,38.75104 34.48064,39.16 C33.46272,39.55552 32.29984,39.82624 30.5968,39.90368 C29.0365166,39.9747749 28.4472359,39.9963833 25.0367203,39.9995653 L22.9632797,39.9995653 C19.5527641,39.9963833 18.9634834,39.9747749 17.4032,39.90368 C15.70016,39.82624 14.53728,39.55552 13.51936,39.16 C12.4672,38.75104 11.57504,38.20416 10.68544,37.31456 C9.79584,36.42496 9.24864,35.5328 8.84,34.48064 C8.44448,33.46272 8.17408,32.29984 8.09632,30.5968 C8.02966857,29.1340343 8.00651102,28.524689 8.00125481,25.6440564 L8.00125481,22.3559436 C8.00651102,19.475311 8.02966857,18.8659657 8.09632,17.4032 C8.17408,15.70016 8.44448,14.53728 8.84,13.51936 C9.24864,12.4672 9.79584,11.57504 10.68544,10.68544 C11.57504,9.79584 12.4672,9.24896 13.51936,8.84 C14.53728,8.44448 15.70016,8.17376 17.4032,8.09632 C18.8659657,8.02966857 19.475311,8.00651102 22.3559436,8.00125481 Z M25.0186977,10.8832675 L22.9813023,10.8832675 C19.6322732,10.8861221 19.0771566,10.9057829 17.53472,10.976 C15.97472,11.04736 15.12736,11.30784 14.56384,11.52704 C13.81696,11.81728 13.28384,12.16416 12.72416,12.72384 C12.16416,13.28384 11.81728,13.81696 11.52704,14.56352 C11.30816,15.12736 11.04704,15.97472 10.97632,17.53472 C10.9058103,19.0771566 10.8861244,19.6322732 10.8832677,22.9813023 L10.8832677,25.0186977 C10.8861244,28.3677268 10.9058103,28.9228434 10.97632,30.46528 C11.04704,32.02528 11.30816,32.87264 11.52704,33.43648 C11.81728,34.18304 12.16416,34.71616 12.72416,35.27616 C13.28384,35.83584 13.81696,36.18272 14.56384,36.47296 C15.12736,36.69216 15.97472,36.95264 17.53472,37.024 C19.076864,37.0942171 19.6319556,37.1138779 22.9812271,37.1167325 L25.0187729,37.1167325 C28.3680444,37.1138779 28.923136,37.0942171 30.46528,37.024 C32.02528,36.95264 32.87264,36.69216 33.43616,36.47296 C34.18304,36.18272 34.71616,35.83584 35.27584,35.27616 C35.83584,34.71616 36.18272,34.18304 36.47296,33.43648 C36.69184,32.87264 36.95296,32.02528 37.02368,30.46528 C37.0941897,28.9228434 37.1138756,28.3677268 37.1167323,25.0186977 L37.1167323,22.9813023 C37.1138756,19.6322732 37.0941897,19.0771566 37.02368,17.53472 C36.95296,15.97472 36.69184,15.12736 36.47296,14.56352 C36.18272,13.81696 35.83584,13.28384 35.27584,12.72384 C34.71616,12.16416 34.18304,11.81728 33.43616,11.52704 C32.87264,11.30784 32.02528,11.04736 30.46528,10.976 C28.9228434,10.9057829 28.3677268,10.8861221 25.0186977,10.8832675 Z M24,15.78384 C28.53792,15.78384 32.21632,19.46224 32.21632,23.99984 C32.21632,28.53776 28.53792,32.21616 24,32.21616 C19.46208,32.21616 15.78368,28.53776 15.78368,23.99984 C15.78368,19.46224 19.46208,15.78384 24,15.78384 Z M24,18.66672 C21.0544,18.66672 18.66656,21.05456 18.66656,23.99984 C18.66656,26.94544 21.0544,29.33328 24,29.33328 C26.9456,29.33328 29.33344,26.94544 29.33344,23.99984 C29.33344,21.05456 26.9456,18.66672 24,18.66672 Z M32.540928,13.539232 C33.601088,13.539232 34.460928,14.398752 34.460928,15.459232 C34.460928,16.519392 33.601088,17.379232 32.540928,17.379232 C31.480448,17.379232 30.620928,16.519392 30.620928,15.459232 C30.620928,14.398752 31.480448,13.539232 32.540928,13.539232 Z"
                    id="Shape" fill="#FFF"></path>
                </g>
              </svg>
            </a>

            <a href="https://www.tiktok.com/@musiccitysf">
              <svg class="sm:w-[5vw] min-[100px]:w-[45px]" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Tiktok</title>
                <g id="Icon/Social/tiktok-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path
                    d="M38.0766847,15.8542954 C36.0693906,15.7935177 34.2504839,14.8341149 32.8791434,13.5466056 C32.1316475,12.8317108 31.540171,11.9694126 31.1415066,11.0151329 C30.7426093,10.0603874 30.5453728,9.03391952 30.5619062,8 L24.9731521,8 L24.9731521,28.8295196 C24.9731521,32.3434487 22.8773693,34.4182737 20.2765028,34.4182737 C19.6505623,34.4320127 19.0283477,34.3209362 18.4461858,34.0908659 C17.8640239,33.8612612 17.3337909,33.5175528 16.8862248,33.0797671 C16.4386588,32.6422142 16.0833071,32.1196657 15.8404292,31.5426268 C15.5977841,30.9658208 15.4727358,30.3459348 15.4727358,29.7202272 C15.4727358,29.0940539 15.5977841,28.4746337 15.8404292,27.8978277 C16.0833071,27.3207888 16.4386588,26.7980074 16.8862248,26.3604545 C17.3337909,25.9229017 17.8640239,25.5791933 18.4461858,25.3491229 C19.0283477,25.1192854 19.6505623,25.0084418 20.2765028,25.0219479 C20.7939283,25.0263724 21.3069293,25.1167239 21.794781,25.2902081 L21.794781,19.5985278 C21.2957518,19.4900128 20.7869423,19.436221 20.2765028,19.4380839 C18.2431278,19.4392483 16.2560928,20.0426009 14.5659604,21.1729264 C12.875828,22.303019 11.5587449,23.9090873 10.7814424,25.7878401 C10.003907,27.666593 9.80084889,29.7339663 10.1981162,31.7275214 C10.5953834,33.7217752 11.5748126,35.5530237 13.0129853,36.9904978 C14.4509252,38.4277391 16.2828722,39.4064696 18.277126,39.8028054 C20.2711469,40.1991413 22.3382874,39.9951517 24.2163416,39.2169177 C26.0948616,38.4384508 27.7002312,37.1209021 28.8296253,35.4300711 C29.9592522,33.7397058 30.5619062,31.7522051 30.5619062,29.7188301 L30.5619062,18.8324027 C32.7275484,20.3418321 35.3149087,21.0404263 38.0766847,21.0867664 L38.0766847,15.8542954 Z"
                    id="Fill-1" fill="#FFF"></path>
                </g>
              </svg>
            </a>

          </div>
        </div>
      </div>

      <div class="sm:w-[21vw] h-full flex justify-center items-center align-center min-[100px]:w-[100%]">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/MCSF-Redish-logo.png" class="object-cover flex w-full md:pt-[5vh] min-[100px]:w-[20vw] sm:w-full">
      </div>
      <div class="md:w-[39vw] md:h-[34vh] sm:h-[20vh] md:py-[3vh] min-[100px]:text-xs relative flex sm:justify-end sm:items-end sm:text-sm min-[100px]:justify-center min-[100px]:items-center min-[100px]:h-[10vh]">
        <p>© 2024 Music City San Francisco</p>
      </div>
    </div>
  </section>

  <!-- footer -->

</body>

</html>