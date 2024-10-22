@extends('driver-app.driver.layouts.app')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Contractual Enquiries List</h4>

            <div class="table-responsive" style="overflow: visible;">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Id</th>
                            <th style="text-align: center;">Name</th>
                            <th style="text-align: center;">Email</th>
                            <th style="text-align: center;">Mobile Number</th>
                            <th style="text-align: center;">Duration</th>
                            <th style="text-align: center;">Comment</th>
                            <th style="text-align: center;">Status</th>
                            <th style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($consensualEnquiry as $data)
                        <tr>
                            <td style="text-align: center;">{{ $data->id }}</td>
                            <td style="text-align: center;">{{ $data->name }}</td>
                            <td style="text-align: center;">{{ $data->email }}</td>
                            <td style="text-align: center;">{{ $data->mobile_no }}</td>
                            <td style="text-align: center;">{{ $data->duration }} Month</td>
                            <td style="text-align: center;">{{ $data->comment }}</td>
                            <td style="text-align: center;">
                                @if($data->status == 2)
                                <span class="badge badge-warning">Assigned</span>
                                @elseif($data->status == 3)
                                <span class="badge badge-success">Completed</span>
                                @elseif($data->status == 4)
                                <span class="badge badge-primary">Accepted</span>
                                @else
                                <span class="badge badge-danger">Cancelled</span>
                                @endif
                            </td>
                            <td style="text-align: center;">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="actionDropdown"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionDropdown"
                                        style="max-height: 200px; overflow-y: auto;">
                                      
                                        <li>
                                            <button type="button" class="dropdown-item accept-enquiry-btn"
                                                data-enquiry-id="{{ $data->id }}">
                                                Accept Enquiry
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item decline-btn"
                                                data-enquiry-id="{{ $data->id }}">
                                               Cancel Enquiry 
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item complete-btn"
                                                data-enquiry-id="{{ $data->id }}">Complete Enquiry</button>
                                        </li>

                                    </ul>
                                </div>
                            </td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Complete Enquiry -->
<div class="modal fade" id="completeEnquiryModal" tabindex="-1" aria-labelledby="completeEnquiryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="completeEnquiryModalLabel">Complete Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to complete this Consensual Enquiry?
            </div>
            <div class="modal-footer">
                <form id="completeEnquiryForm" method="POST" action="{{ route('complete.consensual.enquiry') }}">
                    @csrf
                    <input type="hidden" id="complete_id" name="id">
                    <button type="submit" class="btn btn-success">Complete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Accepting Enquiry -->
<div class="modal fade" id="acceptEnquiryModal" tabindex="-1" role="dialog" aria-labelledby="acceptEnquiryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="acceptEnquiryModalLabel">Accept Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to accept this Consensual Enquiry?
            </div>
            <div class="modal-footer">
                <form id="acceptEnquiryForm" method="POST" action="{{ route('accept.consensual.enquiry') }}">
                    @csrf
                    <input type="hidden" id="accept_id" name="id">
                    <button type="submit" class="btn btn-primary">Accept</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Canceling Enquiry -->
<div class="modal fade" id="declineEnquiryModal" tabindex="-1" role="dialog" aria-labelledby="declineEnquiryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="declineEnquiryModalLabel">Cancel Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to cancel this Consensual Enquiry?
            </div>
            <div class="modal-footer">
                <form id="cancelEnquiryForm" method="POST" action="{{ route('decline.consensual.enquiry') }}">
                    @csrf
                    <input type="hidden" id="cancel_id" name="id">
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var completeBtns = document.querySelectorAll('.complete-btn');
    completeBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var enquiryId = this.getAttribute('data-enquiry-id');
            document.getElementById('complete_id').value = enquiryId;
            new bootstrap.Modal(document.getElementById('completeEnquiryModal')).show();
        });
    });

    var acceptEnquiryBtns = document.querySelectorAll('.accept-enquiry-btn');
    acceptEnquiryBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var enquiryId = this.getAttribute('data-enquiry-id');
            document.getElementById('accept_id').value = enquiryId;
            new bootstrap.Modal(document.getElementById('acceptEnquiryModal')).show();
        });
    });

    var cancelBtns = document.querySelectorAll('.decline-btn');
    cancelBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var enquiryId = this.getAttribute('data-enquiry-id');
            document.getElementById('cancel_id').value = enquiryId;
            new bootstrap.Modal(document.getElementById('declineEnquiryModal')).show();
        });
    });
});
</script>

@endsection