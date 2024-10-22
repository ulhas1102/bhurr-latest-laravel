@extends('driver-app.admin.layouts.app')
@section('title', 'Local Fare')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="card">
            <div class="card-header d-flex  justify-content-between p-3">
              <h4>Local Fare List</h4>
            </div>
            <div class="card-body " style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example">
                  <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Car Class</th>
                        <th>8 hours Charges</th>
                        <th>12 hours Charges</th>
                        <th>Extra Hour Charges</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                   @foreach($carclasses as $carclass)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$carclass->carclass_name}}</td>
                  
                    <td>
                      @if($carclass->local_8_hrs_charges != null)
                      {{$carclass->local_8_hrs_charges}}
                      @else
                      - 
                     @endif
                    </td>
						
					 <td>
                      @if($carclass->local_12_hrs_charges != null)
                      {{$carclass->local_12_hrs_charges}}
                      @else
                      - 
                     @endif
                    </td>
                
                    
                    <td>
                      @if($carclass->local_extra_hour_charges != null)
                      {{$carclass->local_extra_hour_charges}}
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
                            onclick="editFareManagement({{ json_encode($carclass) }})">
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
<div class="modal fade" id="editPaymentHistoryModal" tabindex="-1" role="dialog" aria-labelledby="editPaymentHistoryModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editPaymentHistoryModalLabel">Edit Fare</h5>
              <button type="button" class="close"onclick="closeModal('editPaymentHistoryModal')" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="editFaremanagementForm" method="POST">
                  @csrf
                 
                
                  <div class="form-group">
                      <label for="edit8HoursCharges">8 Hours Charges<small>(In Rupees)</small></label>
                      <input type="text" class="form-control" id="edit8HoursCharges" name="local_8_hrs_charges" required>
                  </div>
				  
				   <div class="form-group">
                      <label for="edit8HoursCharges">12 Hours Charges<small>(In Rupees)</small></label>
                      <input type="text" class="form-control" id="edit12HoursCharges" name="local_12_hrs_charges" required>
                  </div>
               
             
                  <div class="form-group">
                    <label for="editExtraHourCharges">Extra  Hours Charges <small>(In Rupees)</small></label>
                    <input type="text" class="form-control" id="editExtraHourCharges" name="local_extra_hour_charges" required>
                </div>
			         
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
          </div>
      </div>
  </div>
</div>
  
  </div>
  <!-- main-panel ends -->
  <script>
    function editFareManagement(carclass) {
      // Populate the form fields in the modal
      document.getElementById('edit8HoursCharges').value = carclass.local_8_hrs_charges;
      document.getElementById('edit12HoursCharges').value = carclass.local_12_hrs_charges;
      document.getElementById('editExtraHourCharges').value = carclass.local_extra_hour_charges;
    
   document.getElementById('editFaremanagementForm').action = `{{ url('edit-fare-management') }}/${carclass.carclass_id}`;


      
      // Show the modal
      $('#editPaymentHistoryModal').modal('show');
    }
  </script>
<script>
    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }
</script>

@endsection