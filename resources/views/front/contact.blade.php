<x-front-layout>

<div class="mt-2">
	

		<!-- --------------------- Main content of Contact PAGE ------------------------- -->
		@foreach($bg as $bgs)
		<div class="bg-cover bg-center height py-40 relative "style="background-image: url({{asset($bgs->contactbg)}});">
			<div class="absolute top-0 left-0 h-full w-full bg-black opacity-40 "></div>
			<div class="flex z-20 h-full w-full  justify-center items-center absolute top-0 left-0">
					<p class="text-4xl lg:text-6xl font-bold text-white shadow-4xl">Contact Us</p>
			</div>
		</div>
		@endforeach












		<div class="px-6 py-10 flex flex-col gap-10 w-full md:grid md:grid-cols-2 lg:grid lg:grid-cols-4 md:absolute top4 md:z-10">

			<div class="flex flex-col gap-3 bg-gray-100 text-center px-6 py-10 shadow-xl ">
				<h1 class="text-2xl font-bold">Address</h1>
				<p>Mariabad, Quetta, Pakistan</p>
			</div>
			
		
			<div class="flex flex-col gap-3 bg-gray-100 shadow-xl text-center px-8 py-10">
				<h1 class="text-2xl font-bold">Contact Number</h1>
				<p>032984386</p>
				<p>026292244</p>
			</div>
			<div class="flex flex-col gap-3 bg-gray-100 shadow-xl text-center px-8 py-10">
				<h1 class="text-2xl font-bold">Email Address</h1>
				<p>fkasf@gmail.com</p>
				<p>info@something.com</p>
			</div>
			<div class="flex flex-col gap-3 bg-gray-100 shadow-xl text-center px-8 py-10">
				<h1 class="text-2xl font-bold">Website</h1>
				<p>something.com</p>
			</div>
		</div>
		
			<div style="background-image: url('./image/map.png');" class="h-96 bg-cover bg-center relative mt-6 lg:mt-52 hidden md:block"></div>
	
	
	
	
	
	
	
	
	
			<div class=" md:px-20 md:py-10 md:mt-96 lg:mt-0 width mx-auto">
				<div class="bg-gray-100 ">
					<form action="savemsg" method="POST" class="flex flex-col gap-4 px-6 py-8">
						@csrf
							<input type="text" name="msgname" placeholder="Your Name" class="w-full p-3 border-2 shadow-lg">
							<input type="text" name="msgemail" placeholder="Your Email" class="w-full p-3 border-2 shadow-lg">
							<input type="text" name="msgsubject" placeholder="Subject" class="w-full p-3 border-2 shadow-lg">
							<textarea cols="30"  name="msgcontent" rows="5" placeholder="Message" class="w-full p-3 border-2 shadow-lg"></textarea>
							<input type="submit" value="Send Message" class="py-2 bg-sky-700 text-white rounded-full w-40 mx-auto shadow-sm hover:shadow-2xl hover:-translate-y-2 duration-500">
					</form>
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

</div>

</x-front-layout>