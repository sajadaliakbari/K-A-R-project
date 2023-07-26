<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Setting
		</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Setting</h6>
</nav>
<!-- End Navbar -->
</x-slot>



	
<div class="container">
        <div class=" text-center mt-5 ">

            <h1 >Change Background Images</h1>
                
            
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
            <form id="contact-form" role="form" action="/save/bg" method="POST" enctype="multipart/form-data">

            @csrf

            

            <div class="controls">

                <div class="row">
                  <div class="form-group">
                    <label for="image">Home BG image</label>
                    <input type="file" class="form-control" name="homebg" id="inputGroupFile01">
                  </div>
                  
                </div>


								<div class="row">
                  <div class="form-group">
                    <label for="image">Product BG image</label>
                    <input type="file" class="form-control" name="productbg" id="inputGroupFile01">
                  </div>
                  
                </div>



								<div class="row">
                  <div class="form-group">
                    <label for="image">Contact BG image</label>
                    <input type="file" class="form-control" name="contactbg" id="inputGroupFile01">
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
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>




</x-bluetech-layout>