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


<div class="p-5">

			<table class="table align-middle mb-0 bg-white">
				<thead class="bg-light">
					<tr>
						<th>Customer indentity</th>
						<th>Contact Number</th>
						<th>Quantity</th>
						<th>Size</th>
						<th>Color</th>
						<th>Pattern</th>
						<th>Cloth</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>


					<tr>
						<td>
							<div class="d-flex align-items-center">
								<div class="ms-3">
									<p class="fw-bold mb-1">{{ $singlebooking->name}}</p>
									<p class="text-muted mb-0">{{ $singlebooking->email}}</p>
								</div>
							</div>
						</td>
						<td>
							<p class="fw-normal mb-1">{{ $singlebooking->contact_number}}</p>
						</td>
						<td>{{ $singlebooking->quantity}}</td>
            <td>{{ $singlebooking->size_id}}</td>
            <td>{{ $singlebooking->color_id}}</td>
            <td>{{ $singlebooking->pattern_id}}</td>
            <td>{{ $singlebooking->cloth_id}}</td>
            <td class="d-flex gap-3">
                <a href="/bookinglist/{{$singlebooking->id}}/delete">Delete</a>
                <a href="/bookinglist/{{$singlebooking->id}}/edit">Edit</a>
            </td>
					</tr>


				</tbody>
			</table>


</div>


</x-bluetech-layout>
