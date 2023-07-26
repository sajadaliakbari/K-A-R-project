<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Add Product</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Add Product</h6>
</nav>
<!-- End Navbar -->
</x-slot>

<div class="container">
        <div class=" text-center mt-5 ">
            <h1 >Product Registration From</h1>
        </div>
        <!--  form -->
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                    <div class = "container">
                    <form action="/save" method="POST" enctype="multipart/form-data" id="contact-form" role="form">
                    @csrf  
                        <div class="controls">
                            <h4>
                                Product
                            </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Product Name</label>
                                            <input id="name" type="text" name="p_name" class="form-control" placeholder="Please enter product name *" required="required" data-error="Product name is required.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input id="price" type="number" name="price" class="form-control" placeholder="Please enter the Price *" required="required" data-error="Lastname is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_need">Category</label>
                                            <select id="form_need" name="category_id" class="form-control" required="required" data-error="Please specify a category.">
                                                <option value="" selected disabled>--Select a category-</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}"> {{$category->c_name}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_need">Stock Availability</label>
                                            <input id="stock_availability" type="text" name="stock_availability" class="form-control" placeholder="Please enter the Quantity *" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size">Sizes</label>
                                            <input id="size1" type="text" name="size1" class="form-control" placeholder="Please enter the Quantity *" required >
                                            <input id="size2" type="text" name="size2" class="form-control" placeholder="Please enter the Quantity *"  >
                                            <input id="size3" type="text" name="size3" class="form-control" placeholder="Please enter the Quantity *"  >
                                            <input id="size4" type="text" name="size4" class="form-control" placeholder="Please enter the Quantity *"  >
                                            <input id="size5" type="text" name="size5" class="form-control" placeholder="Please enter the Quantity *"  >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="color">Colors</label>
                                            <input id="color1" type="color" name="color1" class="form-control" value="#ffffff" required >
                                            <input id="color2" type="color" name="color2" class="form-control"  value="#ffffff" >
                                            <input id="color3" type="color" name="color3" class="form-control" value="#ffffff"  >
                                            <input id="color4" type="color" name="color4" class="form-control"   value="#ffffff" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" name="description" class="form-control" placeholder="Write the description here." rows="4" required="required" data-error="Please, leave the a description."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group">
                                    <label for="image">Upload photos</label>
                                    <input type="file" class="form-control" name="image1" id="inputGroupFile01">
                                    <input type="file" class="form-control" name="image2" id="inputGroupFile01">
                                    <input type="file" class="form-control" name="image3" id="inputGroupFile01">
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Save" >
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