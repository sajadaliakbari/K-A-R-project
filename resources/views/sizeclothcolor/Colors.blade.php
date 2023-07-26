<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Colors</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Colors</h6>
</nav>
<!-- End Navbar -->
</x-slot>

<!-- color registration form -->
<div class="container">
        <div class=" text-center mt-5 ">
            <h1 >Color Registration From</h1>
        </div>
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
            <form id="contact-form" role="form" action="/addColor" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="clr_name">Color Name</label>
                          <input id="clr_name" type="text" name="clr_name" class="form-control" placeholder="Please enter the color name*" required data-error="color is required.">  
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="color">Color</label>
                        <input type="color" class="form-control" name="color" id="inputGroupFile01" required >
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send pt-2 btn-block" value="Save" >
                    </div>
                </div>
            </div>
            </form>
          </div>
        </div>
    </div>
    </div>
</div>
</div>


<!-- colors table -->
<div class="row px-4 pt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Colors table</h6>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Color Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Color</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($colors as $product)
              <tr>
                <td>
                  <div class="d-flex px-2">
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{$product->id}}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2">
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{$product->clr_name}}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <button class="btn " style="background-color: {{$product->color}};"></button>
                </td>
                <td class="align-middle text-center">
                  <div class="d-flex align-items-center justify-content-center">
                    <a href="/edit_colors/{{$product->id}}/edit" class="me-2 text-xs font-weight-bold">Edit</a>
                    <h3>|</h3>
                    <a href="/edit_colors/{{$product->id}}/delete" class="me-2 text-xs font-weight-bold">Delete</a>
                  </div>
                </td>
              </tr>
              @endforeach
              </tbody>
              </table>
        </div>
      </div>
    </div>
  </div>
</div>

</x-bluetech-layout>