<x-front-layout>



    <!-- --------------------- Main content of HOME PAGE ------------------------- -->
    @foreach($bg as $bgs)
    <div class="bg-cover bg-center h-96 relative"style="background-image: url({{asset($bgs->homebg)}});" x-data="{showorder: false}">
       <div class="absolute top-0 left-0 h-full w-full bg-black opacity-40 "></div>
        <div class="flex justify-center flex-col gap-4 absolute h-full w-full z-20 items-center">
            <p class=" text-4xl px-4 lg:text-6xl font-bold text-white shadow-4xl stroke-red-500">Feel Fashionable With Us!</p>
            <button class="text-white tracking-widest" @click="showorder = true">Order Now</button>
        </div>

        @endforeach
        <div class="fixed h-full w-full bg-black top-0 left-0 z-30 opacity-60" x-show="showorder"></div>
             <div class="fixed top-28 left-96 h-96 w-96 bg-white z-50 rounded-xl modalheight" x-show="showorder">
                    <form action="storeorder" method="POST" class="p-7 flex flex-col justify-between h-full">
                        @csrf
                        <button class="border border-black ml-auto px-3">X</button>
                        <input type="text" placeholder="Product" name="product">
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="Last Name" name="last_name">
                        <input type="email" placeholder="Email" name="email">
                        <input type="text" placeholder="Contact Number" name="contact_number">
                        <input type="text" placeholder="Quantity" name="quantity">
                        <input type="submit" value="Order" class="bg-blue-700 px-4 py-1 text-white">
                    </form>
             </div>
    </div>
    




    <div class="lg:grid lg:grid-cols-3 p-5 gap-5 flex flex-col">


      @foreach($products as $product)

         <!-- <swiper-container class="mySwiper" navigation="true">
                    <swiper-slide></swiper-slide>
                    <swiper-slide>Slide 3</swiper-slide>
                    <swiper-slide>Slide 4</swiper-slide>
                    <swiper-slide>Slide 5</swiper-slide>
                    <swiper-slide>Slide 6</swiper-slide>
           
    </swiper-container> -->
        
            <div style="background-image: url('{{asset($product->Image1)}}');" class="h-80 w-full bg-bottom bg-cover relative text-white">
                <div class="absolute top-0 left-0 h-full w-full bg-black opacity-30"></div>
                <div class="absolute top-0 left-0 z-20 h-full w-full flex flex-col justify-center px-4 gap-3">
                    <h1 class="text-4xl font-bold">{{$product->Name}}</h1>
                    <a href="productpage" class="font-thin tracking-widest">Shop Now</a>
                </div>
            </div>

    @endforeach
            
    </div>















    


<!-- ------------------------ Product Section ------------------------------ -->
    <div class="py-10 lg:px-40">
        <h1 class="text-2xl font-bold text-center border-b border-sky-800 w-40 mx-auto py-2">Products</h1>

        <div class="py-4 lg:grid lg:grid-cols-3 flex flex-col gap-12">



        @foreach($products as $product)

        <div>

            <swiper-container class="mySwiper" navigation="true">
                    <swiper-slide><img src="{{asset($product->Image1)}}" alt="" class="h-96 w-full"></swiper-slide>
                    <swiper-slide><img src="{{asset($product->Image2)}}" alt="" class="h-96 w-full"></swiper-slide>
                    <swiper-slide><img src="{{asset($product->Image3)}}" alt="" class="h-96 w-full"></swiper-slide>
            </swiper-container> 

                        
                        <div class="flex flex-col gap-4 border-x border-black p-3 shadow-4xl">
                            <h1 class="text-lg font-bold">{{$product->Name}}</h1>
                            <p>{{$product->Description}}</p>
                            <div class="flex justify-between tracking-widest items-center mt-6 text-sky-700">
                                <p>Price: ${{$product->Price}}</p>
                                <a href="productpage" class="border border-sky-700 px-4 py-1 rounded-lg hover:bg-sky-700 hover:text-white duration-300">Shop Now</a>
                            </div>
                        </div>

                    </div>

        @endforeach


        </div>
    </div> 
















    <div class="lg:p-10 py-10">
        <h1 class="text-4xl font-bold text-center">Men Products</h1>
        <div class=" flex flex-col lg:grid lg:grid-cols-3 items-center justify-center py-6 gap-6">


            @foreach($men as $man)
                <div>

                    <swiper-container class="mySwiper" navigation="true" class="">
                        <swiper-slide><img src="{{asset($man->Image1)}}" alt="" class="h-96 w-full"></swiper-slide>
                        <swiper-slide><img src="{{asset($man->Image2)}}" alt="" class="h-96 w-full"></swiper-slide>
                        <swiper-slide><img src="{{asset($man->Image3)}}" alt="" class="h-96 w-full"></swiper-slide>
                     </swiper-container> 

                     <div class="flex flex-col gap-2 p-4 w-full justify-start border-x border-b border-black">
                        <h1 class="text-lg font-bold text-center">{{$man->Name}}</h1>
                        <p>{{$man->Description}}</p>
                        <p class="font-semibold py-5">${{$man->Price}}</p>
                        <div class="flex gap-6 justify-between px-8">
                            <p>{{$man->color1}}</p>
                            <p>{{$man->color2}}</p>
                            <p>{{$man->color3}}</p>
                            <p>{{$man->color4}}</p>
                        </div>
                        <div class="flex gap-5 font-semibold justify-between px-8 py-6">
                            <a href="#">{{$man->size1}}</a>
                            <a href="#">{{$man->size2}}</a>
                            <a href="#">{{$man->size3}}</a>
                            <a href="#">{{$man->size4}}</a>
                            <a href="#">{{$man->size5}}</a>
                        </div>
    
                        <a href="productpage" class="text-center w-40 mx-auto py-1 border border-sky-700 text-sky-700 rounded-xl  hover:bg-sky-700 hover:text-white duration-300">Book Now</a>
                    </div>

                </div>

                @endforeach


        </div>

            

</div>










<div class="lg:p-10 py-10" x-data="{showbooking: false}">
    <h1 class="text-4xl font-bold text-center">Women Products</h1>
    <div class=" flex flex-col lg:grid lg:grid-cols-3 items-center justify-center py-6 gap-6">



        @foreach($women as $woman)
            <div>

                <swiper-container class="mySwiper" navigation="true" class="">
                    <swiper-slide><img src="{{asset($woman->Image1)}}" alt="" class="h-96 w-full"></swiper-slide>
                    <swiper-slide><img src="{{asset($woman->Image2)}}" alt="" class="h-96 w-full"></swiper-slide>
                    <swiper-slide><img src="{{asset($woman->Image3)}}" alt="" class="h-96 w-full"></swiper-slide>
                 </swiper-container> 

                 <div class="flex flex-col gap-2 p-4 w-full justify-start border-x border-b border-black">
                    <h1 class="text-lg font-bold text-center">{{$woman->Name}}</h1>
                    <p>{{$woman->Description}}</p>
                    <p class="font-semibold py-5">${{$woman->Price}}</p>
                    <div class="flex gap-6 justify-between px-8">
                        <p>{{$woman->color1}}</p>
                        <p>{{$woman->color2}}</p>
                        <p>{{$woman->color3}}</p>
                        <p>{{$woman->color4}}</p>
                    </div>
                    <div class="flex gap-5 font-semibold justify-between px-8 py-6">
                        <a href="#">{{$woman->size1}}</a>
                        <a href="#">{{$woman->size2}}</a>
                        <a href="#">{{$woman->size3}}</a>
                        <a href="#">{{$woman->size4}}</a>
                        <a href="#">{{$woman->size5}}</a>
                    </div>

                    <button class="w-40 mx-auto py-1 border border-sky-700 text-sky-700 rounded-xl  hover:bg-sky-700 hover:text-white duration-300" @click="showbooking = true">Book Now</button>
                </div>

            </div>

            @endforeach


    </div>

   


</div>




















<div class="bg-black border-t-4 border-sky-700 text-center py-8  lg:py-12 flex flex-col gap-8">
    <h1 class="text-gray-400 lg:text-2xl md:text-xl">Follow Us</h1>
    <div class="flex gap-4 text-sky-700 justify-center lg:text-2xl md:text-xl">
            <a href="https://www.facebook.com">	<i class="fa-brands fa-facebook-square hover:text-white hover:-translate-y-2 duration-300"></i></a>
            <a href="https://instagram.com"><i class="fa-brands fa-instagram-square hover:text-white hover:-translate-y-2 duration-300"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp-square hover:text-white hover:-translate-y-2 duration-300"></i></a>
    </div>
    <p class="text-gray-400 text-xs">All rights reserved - Designed by <a href="https://www.facebook.com">Shokrullah Kosha</a> .</p>
</x-front-layout>