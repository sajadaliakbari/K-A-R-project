<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
      <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pay</li>
    </ol>
    <h6 class="font-weight-bolder text-white mb-0">Pay</h6>
  </nav>
<!-- End Navbar -->
</x-slot>




  <!-- main content -->
<div class="container">
  <div class=" text-center mt-5 ">
      <h1 >Add Payment</h1>
  </div>
  <!--  form -->
<div class="row">
      <div class="col-lg-7 mx-auto">
          <div class="card mt-2 mx-auto p-4 bg-light">
              <div class="card-body bg-light">
              <div class = "container">
              <form action="/addpayment" method="POST" enctype="multipart/form-data" id="contact-form" role="form">
              @csrf  
                  <div class="controls">
                      <h4>
                          Payment Form
                      </h4>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="form_need">Order Id</label>
                                  <select id="form_need" name="order_id" class="form-control" required="required" data-error="Please specify a category.">
                                      <option value="" selected disabled>--Select an Order Name--</option>
                                      @foreach($orders as $order)
                                        <option value="{{$order->id}}">{{$order->name}}</option>
                                      @endforeach
                                      
                                  </select>
                              </div>
                          </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="costumer_name">Customer Name</label>
                                      <input id="costumer_name" type="text" name="costumer_name" class="form-control" placeholder="Please enter the Customer Name *" required="required" >
                                  </div>
                              </div>
                          </div>
                          <div class="row">

                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="form_need">Email</label>
                                      <input id="email" type="email" name="email" class="form-control" placeholder="Please enter an Email *" required="required" >
                                  </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                <label for="contact">Contact</label>
                                <input id="contact" type="number" name="contact" class="form-control" placeholder="Phone Number" rows="4" required>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" name="price" required id="inputGroupFile01">
                            </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="paid">Paid</label>
                                <input type="number" class="form-control" name="paid" required id="inputGroupFile01">
                            </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="unpaid">Unpaid</label>
                                <input type="number" class="form-control" name="unpaid" required id="inputGroupFile01">
                            </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="paid">Amount</label>
                                <input type="number" class="form-control" name="amount" required id="inputGroupFile01">
                            </div>
                            </div>
                          </div>
                          <div class="row">
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
</div>


</x-bluetech-layout>