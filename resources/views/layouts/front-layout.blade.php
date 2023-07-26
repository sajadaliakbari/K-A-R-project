<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
	<title>Document</title>
</head>
<body>	


    <!-- -----------------This is the navbar------------- -->
    <div class="lg:px-12 py-8 lg:grid lg:grid-cols-12 px-6" x-data="{showNav: false}">
            <div class="lg:col-span-3 items-center flex justify-between">
                <img src="" alt="Logo"> 
                <i class="fa-solid fa-bars lg:opacity-0" x-on:click="showNav = !showNav"></i>
            </div>



            <div class="col-span-7 lg:grid grid-cols-3 items-center text-lg font-semibold hidden">
                <a href="homepage" class=" ">Home</a>
                <a href="productpage" class="">Product</a>
                <a href="contactpage" class="">Contact</a>
								
            </div>


           


            <div class="col-span-2 justify-end lg:flex hidden">
                <i class="fa-solid fa-user"></i>
								@if (Route::has('login'))
                <div class="p-3 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">User name</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>


            

            <!-- ------------------------- Nabbar For Small Devices ------------------ -->

            <div class="" x-show="showNav"  x-transition.scale.30>
                <div class="flex flex-col gap-4 text-lg font-semibold lg:hidden p-6" x-show="showNav"  x-transition.scale.30>
                    <a href="homepage" class="">Home</a>
                    <a href="productpage" class="">Product</a>
                    <a href="contactpage" class="">Contact</a>
                    <a href="" class="mt-4">Login</a>
                </div>
            </div>

    </div>






<div>


			{{$slot}}

            <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

</div>
</body>
</html>