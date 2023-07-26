<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Product</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Product</h6>
</nav>
<!-- End Navbar -->
</x-slot>

<div class="container mt-6">
  <div class="w-full">
    <div class="">
      <div class="card" style="width: 40rem;">
        <img src="{{asset($product->Image1)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Product Name: {{$product->Name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Price: {{$product->Price}}</h6>
          <p class="card-text">{{$product->Description}}</p>
          <p class="card-text">Category: {{$product->category_id}}</p>
          <p class="card-text">Sizes: {{$product->size1}} {{$product->size2}} {{$product->size3}} {{$product->size4}} {{$product->size5}}</p>
          <a href="#" class="btn mr-2"><i class="fas fa-link"></i> Visit Site</a>
          <a href="#" class="btn "><i class="fab fa-github"></i> Github</a>
        </div>
      </div>
    </div>    
  </div>
</div>
</x-bluetech-layout>
