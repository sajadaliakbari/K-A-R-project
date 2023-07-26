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

<p class="text-2xl text-black font-semibold">Edit Payment</p>
  <form action="/payment/{{$edit_payment->id}}/update" method="POST" enctype='multipart/form-data' class="mx-auto
  grid place-items-center">
    @csrf
    <div class="bg-white rounded-lg grid place-content-center drop-shadow-lg px-3 py-4">
    <div class="w-full columns-2 gap-5 my-4">
      <label for="order_id" class="block text-sm font-medium text-gray-700">Edit Order</label>
      <select name="order_id" id="" class="h-10 w-full rounded-md border shadow-lg mb-2">  
        <option value="" selected disabled>--edit an order--</option>
      @foreach($orders as $order)
      <option value="{{$order->id}}">{{$order->name}}</option>
      @endforeach
      </select>
      <label for="costumer_name" class="block text-sm font-medium text-gray-700">Costumer Name</label>  
      <input type="text" name="costumer_name" value="{{$edit_payment->costumer_name}}" class="h-10 w-full rounded-md border shadow-lg mb-2">
      <label for="email" class="block text-sm font-medium text-gray-700">Email</label>  
      <input type="email" name="email" value="{{$edit_payment->email}}" class="h-10 w-full rounded-md border shadow-lg mb-2">
      <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>    
      <input type="number" name="contact" value="{{$edit_payment->contact}}" class="h-10 w-full rounded-md border shadow-lg mb-2">
      <label for="price" class="block text-sm font-medium text-gray-700">Price</label> 
      <input type="number" name="price" value="{{$edit_payment->price}}" class="h-10 w-full rounded-md border shadow-lg mb-2">
      <label for="paid" class="block text-sm font-medium text-gray-700">Paid</label>
      <input type="number" name="paid" value="{{$edit_payment->paid}}" class="h-10 w-full rounded-md border shadow-lg mb-2">
      <label for="unpaid" class="block text-sm font-medium text-gray-700">Unpaid</label>  
      <input type="number" name="unpaid" value="{{$edit_payment->unpaid}}" class="h-10 w-full rounded-md border shadow-lg mb-2">
      <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label> 
      <input type="number" name="amount" value="{{$edit_payment->amount}}" class="h-10 w-full rounded-md border shadow-lg mb-2">
      </div>
      <div class="grid place-content-end w-full">
      <button class="bg-indigo-600 hover:bg-indigo-700 h-12 w-44 rounded-lg text-black text-lg font-bold">
          Update
      </button>
      </div>
    </div>
  </form>

</x-bluetech-layout>