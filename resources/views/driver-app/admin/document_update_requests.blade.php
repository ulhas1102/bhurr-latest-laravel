@extends('driver-app.admin.layouts.app')
@section('title', 'Request List')
@section('content')

<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>Update Document Request List</h4>
                            <div>
                                <a class="btn btn-sm btn-success" href="{{url('driver-admin-dashboard')}}">
                                    <i class="mdi mdi-home"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="overflow: visible;">
                                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
											<th>Request Id</th>
                                            <th>Driver Name</th>
											<th>Requested At</th>
										
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($requests as $request)
											<tr>
												<td>{{$request->request_id}}</td>
												<td>{{ $request->drivers->first_name }} {{ $request->drivers->last_name }}</td>
												<td>{{ $request->created_at->format('d-m-Y') }}</td>
											
											</tr>
										@endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Driver Documents Modal -->
<div class="modal fade" id="addDriverDocuments" tabindex="-1" aria-labelledby="addDriverDocumentsLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDriverDocumentsLabel">Add Driver Documents</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.driver.documents') }}" id="addDriverDocumentsForm" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="driving_licence" class="form-label">Driving Licence</label>
                        <input type="file" class="form-control" id="driving_licence" name="driving_licence">
                    </div>

                    <div class="mb-3">
                        <label for="pan_card" class="form-label">Pan Card</label>
                        <input type="file" class="form-control" id="pan_card" name="pan_card">
                    </div>

                    <div class="mb-3">
                        <label for="aadhar_card" class="form-label">Aadhar Card</label>
                        <input type="file" class="form-control" id="aadhar_card" name="aadhar_card">
                    </div>

                    <div class="mb-3">
                        <label for="police_verification" class="form-label">Police Verification Report</label>
                        <input type="file" class="form-control" id="police_verification" name="police_verification">
                    </div>

                    <div class="mb-3">
                        <label for="electricity_bill" class="form-label">Electricity Bill</label>
                        <input type="file" class="form-control" id="electricity_bill" name="electricity_bill">
                    </div>

                    <input type="hidden" id="driver_id" name="driver_id">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Model -->
<!-- Modal -->
<div class="modal fade" id="deleteDriverModal" tabindex="-1" aria-labelledby="deleteDriverModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDriverModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this driver?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteDriverForm" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var addDriverDocumentsModal = document.getElementById('addDriverDocuments');
    var deleteDriverModal = document.getElementById('deleteDriverModal');

    addDriverDocumentsModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget || event.srcElement;
        var driverId = button.getAttribute('data-id');
        var form = addDriverDocumentsModal.querySelector('#addDriverDocumentsForm');
        form.querySelector('#driver_id').value = driverId;
    });

    deleteDriverModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget || event.srcElement;
        var driverId = button.getAttribute('data-id');
        var form = deleteDriverModal.querySelector('#deleteDriverForm');
        form.action = '/delete-driver/' + driverId;
    });
});
</script>

@endsection