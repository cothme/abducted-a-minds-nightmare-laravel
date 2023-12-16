<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link href="{{asset('js/navbar.js')}}">
    <style type="text/css">
        @font-face {
            font-family: AileronLight;
            src: url('{{asset('/fonts/Aileron-Light.woff2')}}');
        }
        @font-face{
            font-family: Noto Sans JP;
            src: url('{{asset('/fonts/NotoSansJP-VariableFont_wght.ttf')}}');
            font-weight: 300;
        }
        </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                        abductedblack: "#212529",
                        abductedpink: "#C63D65",
                        abducteddarkpink: "#803047",
                        abducteddarkerpink: "#45232D",
                    },
                    screens: {
                        'xsm': '375px',
                    },
                    fontFamily: {
                        sans: ['AileronLight']
                    },
                    backgroundImage: {
                        'spacebg': "url('/local_images/space_bg.jpg')",
                    }
                },    
            },
        };
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Mind's Nightmare</title>
</head>
<body class="bg-spacebg">
    {{--Big Screen Nav--}}
    <nav class="p-5 bg-abductedblack shadow items-center ">
        <div class="flex items-center justify-between w-full">
            <div class="flex items-center">
                <span class="text-2xl text-white font-bold">
                    <a href="/">
                        <img src="{{ asset('local_images/syncotech_logo_white.png')}}" alt="" class="w-16 h-16 mr-4">
                    </a>  
                </span>
                <ul class="hidden lg:flex text-white text-2xl">
                    <li class="hover:text-abductedpink duration-100 mr-4">
                        <a href="">HOME</a>
                    </li>
                    <li class="hover:text-abductedpink duration-100 mr-4">
                        <a href="">ABOUT</a>
                    </li>
                    <li class="hover:text-abductedpink duration-100 mr-4">
                        <a href="">GALLERY</a>
                    </li>
                    <li class="hover:text-abductedpink duration-100 mr-4">
                        <a href="">COMMUNITY</a>
                    </li>
                    <li class="hover:text-abductedpink duration-100 mr-4">
                        <a href="">DOWNLOAD</a>
                    </li>
                </ul>
            </div>
            <a href="/login" class="hidden lg:block lg:flex lg:items-center h-12 px-6 m-2 
                            text-lg rounded-lg text-indigo-100 bg-abductedpink 
                            hover:bg-abducteddarkpink active:bg-abducteddarkerpink">Login</a>
            <div class="block lg:hidden">
                <button id="burger-icon" class="text-white focus:outline-none">
                    <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    {{--Small Screen Nav--}}
    <div id="responsive-menu" class="hidden lg:hidden bg-abductedblack text-white text-2xl
                                    transition-opacity duration-300 opacity-0 opacity-1">
        <ul class="flex flex-col ml-4">
            <li class="hover:text-abductedpink duration-100 mb-2">
                <a href="">HOME</a>
            </li>
            <li class="hover:text-abductedpink duration-100 mb-2">
                <a href="">ABOUT</a>
            </li>
            <li class="hover:text-abductedpink duration-100 mb-2">
                <a href="">GALLERY</a>
            </li>
            <li class="hover:text-abductedpink duration-100 mb-2">
                <a href="">COMMUNITY</a>
            </li>
            <li class="hover:text-abductedpink duration-100 mb-2">
                <a href="">DOWNLOAD</a>
            </li>
        </ul>
        <a href="/login" class="h-12 px-6 m-2 
                            text-lg rounded-lg text-indigo-100 bg-abductedpink 
                            hover:bg-abducteddarkpink active:bg-abducteddarkerpink">Login</a>
    </div>              
</body>
    <main>
        {{$slot}} 
    </main>
    <footer class="lg:fixed sm:fixed xsm:fixed md:fixed bottom-0 left-0 w-full 
                flex flex-col items-center justify-start  
                bg-abductedblack text-white md:justify-center">
    <div class="flex-row mt-4">
        <ul class="center flex">
            <li>
                <img src="{{ asset('local_images/synco_tech.png') }}" class="w-16 h-16 mr-4 mb-4" />
            </li>
            <li>
                <img src="{{ asset('local_images/feu_logo.png') }}" class="w-16 h-16 mr-4 mb-4" />
            </li>
            <li>
                <img src="{{ asset('local_images/clientlogo.png') }}" class="w-16 h-16 mb-4" />
            </li>
        </ul>
    </div>
    <div class="h-px bg-white w-1/2 mb-4"></div>
    <div class="flex-row mb-2">
        <p class="text-lg text-center">&copy; 2023 SYNC-O TECH INC ALL RIGHTS RESERVED</p>
    </div>
</footer>
</body>
</html>
<script>
    document.getElementById('burger-icon').addEventListener('click', function() {
        var responsiveMenu = document.getElementById('responsive-menu');
            responsiveMenu.classList.toggle('hidden');
        setTimeout(function() {
            responsiveMenu.classList.toggle('opacity-0');
            responsiveMenu.classList.toggle('opacity-1');
        }, 10);
    });
</script>