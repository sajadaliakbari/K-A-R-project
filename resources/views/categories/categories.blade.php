<x-bluetech-layout>
        <x-slot name="nav">
        <!-- Navbar -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Categories</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Categories</h6>
        </nav>
        <!-- End Navbar -->
        </x-slot>

        <div class="container">
            <div class=" text-center mt-5 ">
                <h1 >Category Registration From</h1>
            </div>
            <!--  form -->
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                        <div class = "container">
                            <form action="/saveCategory" method="POST" enctype="multipart/form-data" id="contact-form" role="form">
                                @csrf
                                <div class="controls">
                                    <h4>
                                        Category
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" type="text" name="name" class="form-control" placeholder="Please enter category name *" required="required" data-error="Product category is required.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" name="description" class="form-control" placeholder="Write the description here." rows="4" required="required" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">   
                                            <div class="">
                                                <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Save" >
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        
        <!-- list of categories -->
        <div class="row px-4 my-5">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0">
                  <h6>Categories table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7 text-center">id</th>
                          <th class="text-uppercase text-secondary font-weight-bolder opacity-7 text-center ">Name</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Description</th>
                          <th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categories as $category)
                        <tr>
                          <td>
                            <p class="align-middle text-center  font-weight-bold mb-0">{{$category->id}}</p>
                          </td>
                          <td>
                            <p class="align-middle text-center font-weight-bold mb-0">{{$category->c_name}}</p>
                          </td>
                          <td class="align-middle text-center">
                            <p class=" font-weight-bold mb-0">{{$category->c_description}}</p>
                          </td>
                          <td class="align-middle text-center">
                            <div>
                                <a href="/edit/{{$category->id}}/category" class="btn btnbtn btn-success">Edit</a>
                                <!-- <button type="button" @click="open = ! open">Launch modal</button> -->
                                <a href="/delete/{{$category->id}}/category" class="btn btn-danger">Delete</a>
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

</div>





</x-bluetech-layout>