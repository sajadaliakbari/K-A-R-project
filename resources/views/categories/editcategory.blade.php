<x-bluetech-layout>
        <x-slot name="nav">
        <!-- Navbar -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Category</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Edit Category</h6>
        </nav>
        <!-- End Navbar -->
        </x-slot>

        <div class="container">
            <div class=" text-center mt-5 ">
                <h1 >Edit Category</h1>
            </div>
            <!--  form -->
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                        <div class = "container">
                            <form action="/update/{{$category->id}}/category" method="POST" enctype="multipart/form-data" id="contact-form" role="form">
                                @csrf
                                <div class="controls">
                                    <h4>
                                        Category
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input id="name" type="text" name="name" class="form-control" placeholder="Please enter category name *" required="required" data-error="Product category is required." value="{{$category->c_name}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" name="description" class="form-control" placeholder="Write the description here." rows="4" required="required" data-error="Please, leave us a message.">{{$category->c_description}}</textarea>
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
    </div>

</x-bluetech-layout>