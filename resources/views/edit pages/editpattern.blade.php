<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Pattern</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Edit Pattern</h6>
</nav>
<!-- End Navbar -->
</x-slot>


<!---============~Pattern Input~===========--->
<h2 class="p-6">Edit Pattern</h2>
<form action="/pattern/{{$pattern->id}}/update" method="POST" enctype='multipart/form-data' class="flex flex-wrap justify-center gap-3">
  @csrf
  <div class="w-72 shadow-sm">
    <div class="h-20 bg-teal-600 grid place-items-center p-3">
      <i class="fa fa-upload text-slate-300"></i>
      <p class="text-2xl text-slate-300">Up load</p>
    </div>
    <div class="w-max text-center">
      <label>
          <input class="text-sm cursor-pointer w-36 hidden" type="file" name="image" multiple />
          <div class="file bg-indigo-600 text-white border border-gray-300 rounded font-semibold cursor-pointer p-1 px-3 hover:bg-indigo-500">Select</div>
      </label>
      <img src="{{asset($pattern->image)}}" alt="" class="h-full w-72">
    </div>
    <hr class="bg-slate-300">
    <div class="p-3">
    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
    <input type="text" name="name" value="{{$pattern->name}}" class="h-12 w-full rounded-md border shadow-lg mb-2">
    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
    <input type="text" name="description" value="{{$pattern->description}}" class="h-12 w-full rounded-md border shadow-lg mb-2">
    <div class="grid place-content-end">
    <button class="bg-indigo-600 hover:bg-indigo-700 rounded-md text-white text-md px-3 py-1">
        Update
    </button>
    </div>
    </div>
  </div>
</form>
<!---============~End Input~===========--->

</x-bluetech-layout>