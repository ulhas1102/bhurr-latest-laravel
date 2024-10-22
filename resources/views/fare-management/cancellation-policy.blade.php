@extends('layouts.master')
@section('title', 'Canellation policy')


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
              <h4>Cancellation policy List</h4>
                {{-- <a href="{{url('add-car-class')}}" class="btn btn-primary">Add Car Class</a> --}}
            </div>
            <div class="card-body " style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example">
                  <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Package Type</th>
						<th>Before 30 Minutes<small>(In %)</small></th>
                        <th>Before 6 Hours<small>(In %)</small></th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                   @foreach($cancellationpolicys as $cancellationpolicy)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$cancellationpolicy->package_type}}</td>
                    <td>
                      @if($cancellationpolicy->c30_minu_before != null)
                      {{$cancellationpolicy->c30_minu_before}} %
                      @else
                          - 
                      @endif
                    </td>
                    <td>
                      @if($cancellationpolicy->c6_hours_before != null)
                      {{$cancellationpolicy->c6_hours_before}} %
                      @else
                      - 
                     @endif
                    </td>
                   
                   
                    
                    <td class="d-flex justify-content-between">
                      
                        <button type="button" class="btn btn-primary" style="
                            padding-left: 18px;
                            padding-right: 18px;
                            padding-bottom: 3px;
                            height: 36.333334px;" 
                            onclick="editcancellationPolicy({{ json_encode($cancellationpolicy) }})">
                            Edit
                        </button>
                    </td>      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <!-- Edit payment history model -->
<div class="modal fade" id="editcancellationPolicyModal" tabindex="-1" role="dialog" aria-labelledby="editcancellationPolicyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editcancellationPolicyModalLabel">Edit Fare</h5>
              <button type="button" class="close"onclick="closeModal('editcancellationPolicyModal')" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="editcancellationForm" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                      <label for="editKMRange">Package Type</label>
                      <input type="text" class="form-control" id="editPackageType" name="package_type" required readonly>
                  </div>
                  <div class="form-group">
                      <label for="editPerKMCharges">Before 30 Minutes<small>(In %)</small></label>
                      <input type="number" class="form-control" id="editBefore30Minutes" name="c30_minu_before" required>
                  </div>
                  <div class="form-group">
                    <label for="editDiselPerKMCharges">Before 6 Hours<small>(In %)</small></label>
                    <input type="number" class="form-control" id="editBefore6Hours" name="c6_hours_before" required>
                </div>
               
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
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
  <script>
    function editcancellationPolicy(cancellationpolicy) {
      // Populate the form fields in the modal
      document.getElementById('editBefore30Minutes').value = cancellationpolicy.c30_minu_before;
      document.getElementById('editBefore6Hours').value = cancellationpolicy.c6_hours_before;
      document.getElementById('editPackageType').value = cancellationpolicy.package_type;
      document.getElementById('editcancellationForm').action = `./edit-editcancellationPolicy/${cancellationpolicy.cancellation_policy_id}`;
      
      // Show the modal
      $('#editcancellationPolicyModal').modal('show');
    }
  </script>
<script>
    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }
</script>

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