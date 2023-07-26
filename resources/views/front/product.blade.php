<x-front-layout>





		<!-- --------------------- Main content of SERVICE PAGE ------------------------- -->
		@foreach($bg as $bgs)
		<div class="bg-cover bg-center height py-40 relative z-0"style="background-image: url({{asset($bgs->productbg)}});">
					<div class="absolute top-0 left-0 h-full w-full bg-black opacity-40 "></div>
					<div class="h-full w-full absolute top-0 left-0 z-20 flex flex-col justify-center items-center">
							<p class=" lg:text-6xl text-4xl font-bold text-white shadow-4xl ">Our Porducts</p>
				</div>
		</div>

		@endforeach












		<div class="py-12">
			<h1 class="text-3xl font-bold text-center">Top Trending</h1>

			<div class="lg:px-20 py-6 lg:grid lg:grid-cols-4 gap-5 flex flex-col">


			@foreach($product as $products)

						<div>
							 <div style="background-image: url('{{asset($products->Image1)}}');" class="bg-cover bg-center h-96 w-full relative">
								<div class="absolute top-0 left-0 h-full w-full bg-gradient-to-t  to-transparent opacity-90 mix-multiply "></div>
								<div class="absolute top-0 left-0 h-full w-full flex flex-col justify-end items-center z-20 text-white py-3">
									<a href=""><i class="fa-solid fa-cart-shopping fa-2x hover:-translate-y-2 duration-300"></i></a>
								</div>
							 </div>


							 <div class="flex flex-col gap-3 py-4 px-4">
									<h1 class="text-3xl font-thin tracking-widest">{{$products->Name}}</h1>
									<p class="tracking-widest text-lg font-thin">Rs. {{$products->Price}}</p>
									<div class="flex justify-between">
											<span class="w-5 h-5  rounded-full" style="background-color: {{$products->color1}};"></span>
											<span class="w-5 h-5  rounded-full" style="background-color: {{$products->color2}};"></span>
											<span class="w-5 h-5  rounded-full" style="background-color: {{$products->color3}};"></span>
											<span class="w-5 h-5  rounded-full" style="background-color: {{$products->color4}};"></span>
									</div>
									<div class="flex justify-between">
										<p class="font-semibold">{{$products->size1}}</p>
										<p class="font-semibold">{{$products->size2}}</p>
										<p class="font-semibold">{{$products->size3}}</p>
										<p class="font-semibold">{{$products->size4}}</p>
										<p class="font-semibold">{{$products->size5}}</p>
									</div>
							 </div>

						</div>

			@endforeach


		</div>
	</div>











		<div class="py-12 lg:px-20 px-3" x-data="{showmodal: false}">
					<h1 class="text-3xl font-semibold  text-sky-900">Our <span class="border-b border-black py-2 text-black">Products</span></h1>

					<div class="py-4 lg:grid lg:grid-cols-3 flex flex-col gap-12" x-data="{showbooking: false}">



				@foreach($webproducts as $products)		
						<div>

							<swiper-container class="mySwiper" navigation="true" class="">
								<swiper-slide><img src="{{asset($products->Image1)}}" alt="" class="h-96 w-full"></swiper-slide>
								<swiper-slide><img src="{{asset($products->Image2)}}" alt="" class="h-96 w-full"></swiper-slide>
								<swiper-slide><img src="{{asset($products->Image3)}}" alt="" class="h-96 w-full"></swiper-slide>
						 </swiper-container> 

								
								<div class="flex flex-col gap-4 border-x border-black p-3 shadow-4xl">
													<h1 class="text-lg font-bold">{{$products->Name}}</h1>
													<p>{{$products->Description}}</p>

													<div class="flex gap-5 font-semibold justify-between px-8 border border-black rounded-2xl py-1">
														<span class="w-5 h-5  rounded-full" style="background-color: {{$products->color1}};"></span>
														<span class="w-5 h-5  rounded-full" style="background-color: {{$products->color2}};"></span>
														<span class="w-5 h-5  rounded-full" style="background-color: {{$products->color3}};"></span>
														<span class="w-5 h-5  rounded-full" style="background-color: {{$products->color4}};"></span>
													</div>
												<div class="flex gap-5 font-semibold justify-between px-8 border border-black rounded-2xl py-1">
													<a href="#">{{$products->size1}}</a>
													<a href="#">{{$products->size2}}</a>
													<a href="#">{{$products->size3}}</a>
													<a href="#">{{$products->size4}}</a>
													<a href="#">{{$products->size5}}</a>
											</div>
													<div class="flex justify-between tracking-widest items-center mt-6 text-sky-700">
															<p>Price: ${{$products->Price}}</p>
															<button @click="showbooking= true" class="border border-sky-700 px-4 py-1 rounded-lg hover:bg-sky-700 hover:text-white duration-300">Purchase</button>
													</div>
								</div>
						
						</div>
				@endforeach




				<button @click="showmodal = true" class=" flex gap-3 justify-center items-center py-4 text-sky-700 mx-auto font-semibold text-2xl" >More <i class="fa-solid fa-arrow-right-long font-thin mt-2"></i></button>

		<!-- --------------------------------- Modal for Products ---------------------  -->
							<div class="h-screen w-full bg-black opacity-70 fixed top-0 left-0 lg:p-10  " x-show="showmodal" x-transition></div>
							<div class="bg-white  modalheight fixed overflow-y-scroll lg:p-10 z-50 p-5 " x-show="showmodal"  x-transition>
								<div class="flex justify-between">
									<h1 class="text-center lg:text-3xl font-bold">List of all Products</h1>
									<button @click="showmodal = false" class="px-3 py-1 border border-sky-700 text-sky-700"><i class="fa-solid fa-xmark"></i></button>
								</div>							
									

														<div class="py-4 lg:grid lg:grid-cols-3 flex flex-col gap-12">

											@foreach($allproduct as $allpro)
															<div>

																<swiper-container class="mySwiper" navigation="true" class="">
																	<swiper-slide><img src="{{asset($allpro->Image1)}}" alt="" class="h-96 w-full"></swiper-slide>
																	<swiper-slide><img src="{{asset($allpro->Image2)}}" alt="" class="h-96 w-full"></swiper-slide>
																	<swiper-slide><img src="{{asset($allpro->Image3)}}" alt="" class="h-96 w-full"></swiper-slide>
															 </swiper-container> 

																	
																	<div class="flex flex-col gap-4 border-x border-black p-3 shadow-4xl">
																			<h1 class="text-lg font-semibold">{{$allpro->Name}}</h1>
																			<p>{{$allpro->Description}}</p>
																			<div class="flex justify-between tracking-widest items-center mt-6 text-sky-700">
																					<p>Price: ${{$allpro->Price}}</p>
																					<button @click="showbooking = true" class="border border-sky-700 px-4 py-1 rounded-lg hover:bg-sky-700 hover:text-white duration-300 text-sm">Shop Now</button>
																			</div>
																	</div>

															</div>


												@endforeach


									</div>
							</div>
		












			<div class="fixed top-0 left-0 bg-black opacity-60 h-full w-full z-40 lg:p-12" x-show="showbooking"></div>
                <div class="fixed top-0 left-0 h-full w-full bg-white p-6 z-50 overflow-y-scroll" x-show="showbooking">


                    <form action="storebooking" method="POST" class="flex flex-col justify-between gap-4 ">
                        @csrf
                        <button class="border border-black px-2 ml-auto" x-show="showbooking">x</button>
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="Last Name" name="last_name">
                        <input type="email" placeholder="Email" name="email">
                        <input type="text" placeholder="Contact Number" name="contact_number">
                        <select name="size" id="">
                            <option value="" selected disabled>Size</option>
														@foreach($size as $sizes)
                            <option value="">{{$sizes->size}}</option>
														@endforeach
                        

                        </select>

                        <select name="color" id="">
                            <option value="" selected disabled>Color</option>
														@foreach($colors as $color)
                            <option value="">{{$color->clr_name}}</option>
														@endforeach

                        </select>

                        <select name="pattern" id="">
                            <option value="" selected disabled>Pattern</option>
                            @foreach($style as $pattern)
                            <option value=""><img src="{{asset($pattern->image)}}" class="h-24 w-24" alt=""></option>
														@endforeach

                        </select>

                        <select name="cloth" id="">
                            <option value="" selected disabled>Cloth Style</option>
                            @foreach($cloths as $cloth)
                            <option value="">{{$cloth->c_name}}</option>
														@endforeach

                        </select>
                        <input type="text" placeholder="Quantity" name="quantity">
                        <input type="submit" value="Book" class="bg-blue-700 text-white py-1 text-center">
                    </form>

                    
                </div>




					</div>

		</div>












						

















		<div style="background-image: url('image/faq.JPG');" class="bg-cover bg-center px-6 py-12  flex flex-col gap-6  relative ">
			<div class="bg-black opacity-50 w-full h-full absolute  top-0 left-0"></div>
			<div class="flex flex-col gap-3 lg:gap-8 text-center text-white">
					<h1 class=" text-3xl md:text-4xl lg:text-5xl font-black font-serif capitalize tracking-widest z-20">FAQs</h1>
					<h1 class="text-xl lg:text-2xl font-bold z-20">Do not hesitate to ask any question you have!</h1>
					<a href="contact.html" class="bg-sky-700 text-sm text-white w-32 lg:w-40 lg:text-lg rounded-full py-1 animate-pulse duration-300 mx-auto hover:bg-gray-600 hover:-translate-y-2">Contact Now</a>
					<div class="text-left lg:px-12 mt-8 flex flex-col gap-6 z-20">
							<div>
								<h1 class="text-lg font-bold">What are your hours of operation?</h1>
								<p cal>Company Name is open Monday - Friday, from 7 A.M - 5 P.M, and on Saturdays from 9 A.M - 2 P.M. We are closed on Sundays.</p>
							</div>
							<div>
								<h1 class="text-lg font-bold">How many years of experience do you have?</h1>
								<p>Clear Painting has been in the industry for seven years.</p>
							</div>
							<div>
								<h1 class="text-lg font-bold">How will I know how much the job will cost?</h1>
								<p>We offer free quotes. If you send us photos or videos, we may be able to quote without coming to the job address..</p>
							</div>
							<div>
								<h1 class="text-lg font-bold">Can CP carry out smaller jobs or only large projects? </h1>
								<p>We can help you with the smaller jobs that you have been putting off for ages, we understand that the little things make a big difference.</p>
							</div>
							<div>
								<h1 class="text-lg font-bold">How soon can CP attend to quote for me? </h1>
								<p>If the job is urgent, we can sometimes arrive the same day. If not, then normally within 48 hours of contact.  </p>
							</div>
		
					</div>
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
		</div>



</x-front-layout>