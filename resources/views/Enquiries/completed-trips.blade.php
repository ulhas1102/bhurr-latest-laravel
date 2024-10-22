@extends('layouts.master')
@section('title', 'Completed Enquiries')


@section('backend-page-style')
@endsection

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="card">
            {{-- <div class="card-headerd-flex justify-content-space-between p-3">
                <a href="{{url('add-driver')}}" class="btn btn-warning">Add Driver</a>
            </div> --}}
            <div class="card-body">
                <table class="table display" style="width:100%" id="tabledata">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    @foreach($enquiries as $enquirie)
                    <tr>
                    <td>{{$enquirie->customer_name}}</td>
                    <td>{{$enquirie->customer_email}}</td>
                    <td>{{$enquirie->customer_mobile}}</td>
                    <td>{{$enquirie->customer_address}}</td>
                    <td class="d-flex">
                        <a href="enquiry-details?id={{$enquirie->enquiry_id}}" class="btn btn-success">View More</a>
                        <a href="edit-enquiry?enquiry_id={{$enquirie->enquiry_id}}" class="btn btn-primary">Edit</a>
                        <form action="deleteDriver" method="POST">
                            @csrf<input type="hidden" name="enquiry_id" value="{{$enquirie->enquiry_id}}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>      
                    </tr>
                    @endforeach
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