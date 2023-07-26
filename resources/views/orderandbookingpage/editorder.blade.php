<x-bluetech-layout>


<x-slot name="nav">
<!-- Navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Order</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Edit Order</h6>
</nav>
<!-- End Navbar -->
</x-slot>


	
	
<div class="container mt-5 mb-5 d-flex justify-content-center">

	<form action="/orderlist/{{$editorder->id}}/update" method="post" class="w-80">
		@csrf
    <div class="card px-1 py-4">
        <div class="card-body">
            <h6 class="card-title mb-3">Edit the Order</h6>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <!-- <label for="name">Name</label> --> <input class="form-control" type="text" placeholder="Name" value="{{$editorder->name}}" name="name"> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="Last Name" value="{{$editorder->last_name}}" name="last_name"> </div>
                    </div>
                </div>
            </div>
						<div class="row">
							<div class="col-sm-12">
									<div class="form-group">
											<!-- <label for="name">Name</label> --> <input class="form-control" type="text" placeholder="Email" value="{{$editorder->email}}" name="email"> </div>
							</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
								<div class="form-group">
										<!-- <label for="name">Name</label> --> <input class="form-control" type="text" placeholder="Contact Number" value="{{$editorder->contact_number}}" name="contact_number"> </div>
						</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
							<div class="form-group">
									<!-- <label for="name">Name</label> --> <input class="form-control" type="text" placeholder="Quantity" value="{{$editorder->quantity}}" name="quantity"> </div>
					</div>
			</div>

       <button class="btn btn-primary btn-block confirm-button">Save</button>

        </div>
    </div>

	</form>


</div>
</x-bluetech-layout>
