<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/wp-content/themes/nichebusiness/assetstent/themes/nichebusiness/assets/css/style.css">


    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --color-dark-blue: #162A55;
            --color-blue: #1C4DAF;
            --color-yellow: #D5C107;
            --color-green: #1A8B33;
            --color-red: #B0192A;

            --font-montserrat: "Montserrat", sans-serif;
            --font-open-sans: "Open Sans", sans-serif;
        }
    </style>
    <title>Niche Business</title>
</head>
<body class="relative">

<header id="header" class="p-[20px] w-full fixed top-0 z-10">
    <div class="flex gap-[30px] md:gap-0 justify-between">
        <div class="logo bg-white shadow px-[20px] md:px-[30px] py-[20px] rounded-br-[30px]">
            <img class="max-h-[50px] md:max-h-[70px]" src="/wp-content/themes/nichebusiness/assetstent/themes/nichebusiness/assets/images/logo.png" alt="Niche Business Logo" />
        </div>
        <div class="navigation bg-white shadow rounded-bl-[30px] overflow-hidden h-full">
            <div class="hidden lg:block">
                <ul class="flex justify-between items-center text-center">
                    <li><a href="#achieve" class="flex py-[30px] px-[15px] lg:px-[20px] font-montserrat font-bold text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px]">About Us</a></li>
                    <li><a href="#process" class="flex py-[30px] px-[15px] lg:px-[20px] font-montserrat font-bold text-[16px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Process to Success</a></li>
                    <li><a href="#offer" class="flex py-[30px] px-[15px] lg:px-[20px] font-montserrat font-bold text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Our Offer</a></li>
                    <li><a href="#" class="flex py-[30px] px-[15px] lg:px-[20px] font-montserrat font-bold text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px]">News</a></li>
                    <li><a href="#contact" class="flex py-[30px] px-[15px] lg:px-[20px] font-montserrat font-bold text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Contact Us</a></li>
                    <li><a href="#contact" class="block w-full h-full bg-green font-bold text-white cursor-pointer p-[30px]">Schedule an Appointment</a></li>
                </ul>
            </div>
            <div class="mobile-nav flex items-center lg:hidden">
                <button class="p-[20px] text-white bg-green font-montserrat font-bold text-[14px] md:text-[16px] lg:text-[18px]">
                    Schedule an Appointment
                </button>
                <button class="p-[20px] cursor-pointer" onclick="toggleMenu()">
                    <svg class="w-[25px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                        <path d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<section id="mobile_menu" class="shadow">
    <ul class="flex flex-col text-center">
        <li><a href="#achieve" class="flex py-[15px] px-[15px] lg:px-[20px] font-montserrat font-bold text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px]">About Us</a></li>
        <li><a href="#process" class="flex py-[15px] px-[15px] lg:px-[20px] font-montserrat font-bold text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Process to Success</a></li>
        <li><a href="#offer" class="flex py-[15px] px-[15px] lg:px-[20px] font-montserrat font-bold text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Our Offer</a></li>
        <li><a href="#" class="flex py-[15px] px-[15px] lg:px-[20px] font-montserrat font-bold text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px]">News</a></li>
        <li><a href="#contact" class="flex py-[15px] px-[15px] lg:px-[20px] font-montserrat font-bold text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Contact Us</a></li>
        <li><a href="#contact" class="block w-full h-full bg-green font-bold text-white cursor-pointer py-[30px] px-[20px] text-[14px] md:text-[16px] lg:text-[18px] xl:text-[20px]">Schedule an Appointment</a></li>
    </ul>
</section>

<main>