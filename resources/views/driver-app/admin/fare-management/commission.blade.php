@extends('driver-app.admin.layouts.app')
@section('title', 'Commission')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="card">
                <div class="card-header d-flex justify-content-between p-3">
                    <h4>Commission List</h4>
                </div>
                <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                    <table class="table display" style="width:100%" id="example">
                        <thead style="text-align: center;">
                            <tr>
                                <th>Sr.No</th>
                                <th>Admin Commission <small>(in %)</small></th>
                                <th>Driver Commission <small>(in %)</small></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;">
                            @php
                            $i = 1;
                            @endphp
                            @foreach($commissions as $commission)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>
                                    @if($commission->admin_commission != null)
                                    {{ $commission->admin_commission }}
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>
                                    @if($commission->driver_commission != null)
                                    {{ $commission->driver_commission }}
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-primary edit-btn" data-id="{{ $commission->id }}"
                                        data-admin_commission="{{ $commission->admin_commission }}"
                                        data-driver_commission="{{ $commission->driver_commission }}">Edit</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Commission Modal -->
<div class="modal fade" id="editCommissionModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Commission</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCommissionForm" action="{{ route('update-commission') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="admin_commission">Admin Commission (%)</label>
                        <input type="number" class="form-control" id="admin_commission" name="admin_commission" required
                            min="0" max="100">
                    </div>
                    <div class="form-group">
                        <label for="driver_commission">Driver Commission (%)</label>
                        <input type="number" class="form-control" id="driver_commission" name="driver_commission"
                            readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('admin_commission').addEventListener('input', function() {
        const adminCommission = parseFloat(this.value) || 0;
        const driverCommission = 100 - adminCommission;
        document.getElementById('driver_commission').value = driverCommission;
    });
</script>
<script>
// JavaScript to open modal and populate data
document.addEventListener('DOMContentLoaded', function() {
    const editButtons = document.querySelectorAll('.edit-btn');

    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            const commissionId = this.getAttribute('data-id');
            const adminCommission = this.getAttribute('data-admin_commission');
            const driverCommission = this.getAttribute('data-driver_commission');

            // Set modal input values
            document.getElementById('id').value = commissionId;
            document.getElementById('admin_commission').value = adminCommission;
            document.getElementById('driver_commission').value = driverCommission;

            // Show the modal
            $('#editCommissionModal').modal('show');
        });
    });
});
</script>

@endsection