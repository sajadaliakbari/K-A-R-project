<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
      <li class="breadcrumb-item text-sm text-white active" aria-current="page">Input Pattern</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0">Input Pattern</h6>
  </nav>
<!-- End Navbar -->
</x-slot>

<!---============~Pattern Input~===========--->
<h2 class="p-6">Input Pattern</h2>
<div class="flex flex-wrap justify-center">
  @if(isset($message))
    <div class="h-14 w-52 sm:w-52 bg-slate-600">
    <h3 class=" text-lg">{{ $message }}</h3>
    </div>
  @endif
  
  @if($errors->any())
  <ul class="text-amber-400 m-2">
      @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
  @endif
</div>

<form action="/pattern" method="POST" enctype='multipart/form-data' class="flex flex-wrap justify-center">
  @csrf
  <div class="w-72 shadow-sm">
    <div class="h-20 bg-teal-600 grid place-items-center p-3">
      <i class="fa fa-upload text-slate-300"></i>
      <p class="text-2xl text-slate-300">Up load</p>
    </div>
      <div class="input_field flex flex-col w-max mx-auto text-center">
        <svg class="text-indigo-500 w-24 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
        </svg>
        <label>
            <input class="text-sm cursor-pointer w-36 hidden" type="file" name="image" multiple />
            <div class="file bg-indigo-600 text-white border border-gray-300 rounded font-semibold cursor-pointer p-1 px-3 hover:bg-indigo-500">Select</div>
        </label>
        <div class="title text-indigo-500 uppercase">or drop files here</div>
      </div>
    <div class="px-2 pb-2">
    <label for="first_name" class="block text-sm font-medium text-gray-700">Name</label>
    <input type="text" name="name" class="h-12 w-full rounded-md border shadow-lg mb-2">
    <label for="first_name" class="block text-sm font-medium text-gray-700">Description</label>
    <textarea name="description" id="" cols="30" rows="10" class="h-28 w-full rounded-md
    border shadow-lg mb-2"></textarea>
    <div class="grid place-content-end">
    <button class="bg-indigo-600 hover:bg-indigo-700 rounded-md text-white text-md px-3 py-1">
        Submit
    </button>
    </div>
    </div>
  </div>
</form>
<!---============~End Input~===========--->


<!---=======--~Pattern list~--=======--->

<h2 class="p-6">Pattern List</h2>
<div class="flex flex-wrap justify-center gap-3">
  @foreach($patterns as $pattern)
    <div class="card">
      <div class="shadow-lg">
      <img class="h-64 w-full object-cover"
      src="{{$pattern->image}}" alt="Pro" srcset="">
      </div>
      <div class="text-black flex p-2 gap-4 relative">
        <div class="font-bold overflow-hidden w-full start-0">
          {{$pattern->name}}
        </div>
        <details class="w-32">
        <a href="/pattern/{{$pattern->id}}/edit">Edit</a>
        <a href="/pattern/{{$pattern->id}}/delete">Delete</a>
        </details>
      </div>
      <div class="text-sm text-gray-600 p-2">
      {{$pattern->description}}
    </div>
  </div>
  @endforeach
</div>
<!---============~End list~===========--->

</x-bluetech-layout>