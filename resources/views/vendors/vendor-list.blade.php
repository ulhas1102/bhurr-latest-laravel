@extends('layouts.master')
@section('title', 'Vendors')


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
            <div class="card-header d-flex justify-content-between p-3">
              <h4>Vendor List</h4>
                <a href="{{url('vendor-add')}}" class="btn btn-primary">Add Vendor</a>
            </div>
            <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example2">
                  <thead>
                    <tr>
                        <th>SR.No</th>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Company Name</th>
                       {{-- <th>No. of Cars</th>--}}
						<th>Verified Status</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($vendors as $vendor)
                    <tr>
                      <td>{{$i++}}</td>
                    <td>{{$vendor->name}}</td>
                    <td>{{$vendor->contact_no}}</td>
                    <td>{{$vendor->email}}</td>
                    <td>{{$vendor->company_name}}</td>
                   {{-- <td>{{$vendor->no_of_cars}}</td>--}}
					<td>
						@if($vendor->verified_status == 1)
						<span class="badge badge-success">Verified</span>
						@elseif($vendor->verified_status == 0)
						<span class="badge badge-success">Unverified</span>
						@endif
					</td>
                    <td class="d-flex justify-content-between">
                      <a href="vendor-details?id={{$vendor->id}}" class="btn btn-success">View
                        </a>

                        <a href="vendor-edit?vendor_id={{$vendor->id}}" class="btn btn-primary">Edit
                        </a>
                        <form action="deleteVendor" method="POST">
                          @csrf<input type="hidden" name="vendor_id" value="{{$vendor->id}}">
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