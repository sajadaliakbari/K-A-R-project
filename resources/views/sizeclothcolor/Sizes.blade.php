<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Sizes</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Sizes</h6>
</nav>
<!-- End Navbar -->
</x-slot>

<!-- size registration form -->
<div class="container">
        <div class=" text-center mt-5 ">
            <h1 >Size Registration From</h1>
        </div>
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
            <div class = "container">
            <form id="contact-form" role="form" action="/addSize" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="size">Size</label>
                            <input id="size" type="text" name="size" class="form-control" placeholder="Please enter the size *" required data-error="size is required.">
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="size_des">Size Description</label>
                        <textarea name="size_des" id="" cols="30" rows="2" placeholder="Enter description" required></textarea>
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

<!-- sizes table -->
<div class="row px-4 pt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Sizes table</h6>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Size</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($sizes as $product)
              <tr>
                <td>
                  <div class="d-flex px-2">
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{$product->id}}</h6>
                    </div>
                  </div>
                </td>
                <td>
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{$product->size}}</h6>
                    </div>
                </td>
                <td>
                  <span class="text-xs font-weight-bold">{{$product->size_des}}</span>
                </td>
                <td class="align-middle text-center">
                  <div class="d-flex align-items-center justify-content-center">
                    <a href="/edit_size/{{$product->id}}/edit" class="me-2 text-xs font-weight-bold">Edit</a>
                    <h3>|</h3>
                    <a href="/edit_size/{{$product->id}}/delete" class="me-2 text-xs font-weight-bold">Delete</a>
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