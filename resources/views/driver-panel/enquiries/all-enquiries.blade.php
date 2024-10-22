@extends('driver-layouts.master')
@section('title', 'All Bookings')

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
            <h4>All Bookings List</h4>
            {{-- <a href="{{ url('add-new-enquiry') }}" class="btn btn-primary">Add Enquiries</a> --}}
          </div>
            
          <div class="card-body" style="overflow-y: auto; max-height: 400px;">
              <table class="table display" style="width:100%" id="example">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Contact No</th>
                          <th>Number of Days</th>
                          <th>Package Type</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($enquiries as $enquirie)
                      <tr>
                          <td>{{ $enquirie->customer_name }}</td>
                          <td>{{ $enquirie->customer_email }}</td>
                          <td>{{ $enquirie->customer_mobile }}</td>
                          <td>{{ $enquirie->number_of_days_trip }}</td>
                          <td>
                            @if($enquirie->package_type == 1)
                              Local
                            @elseif($enquirie->package_type == 2)
                              Outstation
                              @elseif($enquirie->package_type == 3)
                              One Way
                            @endif
                          </td>
                          <td class="d-flex justify-content-between">
                              <a href="view-enquiry-details?enquiry_id={{ $enquirie->enquiry_id }}" class="btn btn-success">View More</a>
                               {{--  <a href="view-edit-enquiry?enquiry_id={{ $enquirie->enquiry_id }}" class="btn btn-primary">Edit</a>--}}
							 <a href="javascript:void(0);" class="btn btn-primary update-status-btn" data-enquiry-id="{{ $enquirie->enquiry_id }}" data-trip-status="{{ $enquirie->trip_status }}">Update Status</a>
                              {{-- <form action="deleteEnquiry" method="POST">
                                  @csrf
                                  <input type="hidden" name="enquiry_id" value="{{ $enquirie->enquiry_id }}">
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form> --}}
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

<!-- Modal -->
<div class="modal fade" id="updateStatusModal" tabindex="-1" aria-labelledby="updateStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateStatusModalLabel">Update Trip Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateStatusForm" method="POST" action="{{ route('updateTripStatus') }}">
          @csrf
          <input type="hidden" name="enquiry_id" id="enquiry_id">
          <div class="mb-3">
            <label for="trip_status" class="form-label">Trip Status</label>
            <select class="form-select" id="trip_status" name="trip_status" required>
              <option value="0">New</option>
              <option value="1">Completed</option>
              <option value="2">On going</option>
              <option value="3">Cancelled</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Update Status</button>
        </form>
      </div>
    </div>
  </div>
</div>

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

  <script>
      $(document).ready(function() {
          $('#example').DataTable();
      });
  </script>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
  $('.update-status-btn').on('click', function() {
    var enquiryId = $(this).data('enquiry-id');
    var tripStatus = $(this).data('trip-status');

    $('#enquiry_id').val(enquiryId);
    $('#trip_status').val(tripStatus);

    $('#updateStatusModal').modal('show');
  });
});
</script>

@endsection
