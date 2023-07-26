<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Order List</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Order List</h6>
</nav>
<!-- End Navbar -->
</x-slot>

<div class="container d-flex justify-content-center mt-50 mb-50">            
                
                <div class="card">
                           <div class="card-body bg-light text-center">
                                      <div class="mb-2 d-flex gap-3">
                                            <h3 class="font-weight-semibold mb-2">
                                                {{ $singleorder->name}}
                                            </h3>
                                            <h3 class="font-weight-semibold mb-2">
                                              {{ $singleorder->last_name}}
                                          </h3>
                                      </div>

                                        <h5 class="mb-0 font-weight-semibold">{{ $singleorder->email}}</h5>

                                        <h5 class="mb-0 font-weight-semibold">{{ $singleorder->contact_number}}</h5>

                                        <h5 class="mb-0 font-weight-semibold"><span class="text-primary"> Number of Orders:</span> {{ $singleorder->quantity}}</h5>

                                        <h5 class="mb-0 font-weight-semibold"> <span class="text-primary">Order at:</span> {{ $singleorder->created_at}}</h5>

                                        <div class="mb-2 d-flex gap-3 py-4">

                                          <a href="/orderlist/{{$singleorder->id}}/delete" class="btn btn-danger">
                                            Delete
                                          </a>
                                          <a href="/orderlist/{{$singleorder->id}}/edit" class="font-weight-semibold mb-2 btn btn-primary">
                                            Edit
                                          </a>
                                    </div>

                                        
                             </div>
                 </div>   

    </div>

</x-bluetech-layout>
