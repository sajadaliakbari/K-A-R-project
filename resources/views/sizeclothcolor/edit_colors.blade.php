<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Size</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Edit Size</h6>
</nav>
<!-- End Navbar -->
</x-slot>

<div class="container">
        <div class=" text-center mt-5 ">
            <h1 >Color editing From</h1>
        </div>
    <div class="row ">
      <div class="col-md-6 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
            <div class = "container">
            <form id="contact-form" role="form" action="/updateColors/{{$product->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Color Name</label>
                            <input id="name" type="text" name="clr_name" class="form-control" placeholder="Please enter color name *" required data-error="Cloth name is required." value="{{$product->clr_name}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Color</label>
                            <input id="name" type="color" name="color" class="form-control"  required data-error="Cloth name is required." value="{{$product->color}}">
                        </div>
                    </div>
                </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Save" >
                    </div>
            </div>
        </div>
         </form>
        </div>
            </div>
    </div>

    </div>
</div>

</x-bluetech-layout>