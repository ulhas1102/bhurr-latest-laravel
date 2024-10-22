@extends('layouts.master')
@section('title', 'Drivers')


@section('backend-page-style')
<style>
  .card-header {
      background-color: #5650ce40;
      color: black;
      font-weight: bold;
  }
  </style>
@endsection

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="card">
            <div class="card-header d-flex  justify-content-between p-3">
              <h4>Driver List</h4>
                <a href="{{url('add-driver')}}" class="btn btn-primary">Add Driver</a>
            </div>
            <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example2">
                  <thead>
                    <tr>
                       <th>Sr.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Address</th>
						<th>Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;    
                    @endphp
                    @foreach($drivers as $driver)
                    <tr>
                      <td>{{$i++}}</td>
                    <td>{{$driver->name}}</td>
                    <td>{{$driver->email}}</td>
                    <td>{{$driver->mobile_number}}</td>
                    <td>{{$driver->address}}</td>
					<td>
						@if($driver->verified_status == 0)
						<span class="badge badge-danger">Unverified</span>
						@else
						<span class="badge badge-success">Verified</span>
						@endif
					</td>
                    <td class="d-flex justify-content-space-evenly">
                        <a href="driver-details?driver_id={{$driver->driver_id}}" class="btn btn-success">View</a>
                        <a href="edit-driver?driver_id={{$driver->driver_id}}" class="btn btn-primary">Edit</a>
                        <form action="deleteDriver" method="POST">
                            @csrf
							<input type="hidden" name="driver_id" value="{{$driver->driver_id}}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="footer-wrap">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://webwideit.solutions/" target="_blank">Web wide It solution Pune </a>2024</span>
          
        </div>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if(session('success'))
  <script>
      Swal.fire({
          title: 'Thank you!',
          text: '{{ session('success') }}',
          icon: 'success',
          confirmButtonText: 'OK'
      });
  </script>
  @endif
@endsection