<x-bluetech-layout>
<x-slot name="nav">
<!-- Navbar -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Booking List</li>
  </ol>
  <h6 class="font-weight-bolder text-white mb-0">Booking List</h6>
</nav>
<!-- End Navbar -->
</x-slot>



<div class="p-5">

			<table class="table align-middle mb-0 bg-white">
				<thead class="bg-light">
					<tr>
						<th>Id</th>
						<th>Customer indentity</th>
						<th>Contact Number</th>
						<th>Quantity</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>

				@foreach($booking as $bookings)

					<tr>
						<td>{{ $bookings->id}}</td>
						<td>
							<div class="d-flex align-items-center">
								<div class="ms-3">
									<p class="fw-bold mb-1">{{ $bookings->name}} {{ $bookings->last_name}}</p>
									<p class="text-muted mb-0">{{ $bookings->email}}</p>
								</div>
							</div>
						</td>
						<td>
							<p class="fw-normal mb-1">{{ $bookings->contact_number}}</p>
						</td>
						<td>{{ $bookings->quantity}}</td>
						<td>
							<a href="bookinglist/{{ $bookings->id}}" class="btn btn-link btn-sm btn-rounded">
								Details
								</a>

						</td>
					</tr>

			@endforeach

				</tbody>
			</table>


</div>



</x-bluetech-layout>
