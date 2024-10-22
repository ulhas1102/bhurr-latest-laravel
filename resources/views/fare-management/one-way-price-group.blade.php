@extends('layouts.master')
@section('title', 'Outstation Fare Management')


@section('backend-page-style')
<style>
  .card-header {
      background-color: #5650ce40;
      color: black;
      font-weight: bold;
  }
	.pac-container {
    z-index: 1000 !important;
}

</style>
@endsection

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="card">
            <div class="card-header d-flex  justify-content-between p-3">
              <h4>One way Price Group for {{$carclass->car_class}} class</h4>
              <button type="button" class="btn btn-primary" onclick="AddCity({{ json_encode($_GET['class_id']) }})">
                Add City
              </button>
				<a class="btn btn-primary" href="oneway-fare">Back</a>
            </div>
            <div class="card-body " style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example">
                  <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>City</th>
                        <th>Area Diameter Range <small>(In km)</small></th>
                        <th>Per km price</th>
                        <th>One way CNG Per km price</th>
                        <th>One way Diesel/Petrol Per km price</th>
                        <th>One way Electric Per km price</th>
                        <th>Extra Hour Charges</th>
                        <th>One way Base Fare</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                   @foreach($priceGroups as $priceGroup)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$priceGroup->from_location}}</td>
                    <td>
                      @if($priceGroup->city_diameter != null)
                      {{$priceGroup->city_diameter}} km
                      @else
                          - 
                      @endif
                    </td>
                    <td>
                      @if($priceGroup->per_km_charges != null)
                      {{$priceGroup->per_km_charges}}
                      @else
                      - 
                     @endif
                    </td>
                    
                    <td>
                      @if($priceGroup->oneway_cng_per_km_charges != null)
                      {{$priceGroup->oneway_cng_per_km_charges}}
                      @else
                      - 
                     @endif
                    </td>
                    <td>
                      @if($priceGroup->oneway_disel_per_km_charges != null)
                      {{$priceGroup->oneway_disel_per_km_charges}}
                      @else
                      - 
                     @endif
                    </td>
                    <td>
                        @if($priceGroup->electric_per_km_charges != null)
                        {{$priceGroup->electric_per_km_charges}}
                        @else
                        - 
                       @endif
                      </td>
                   
                    <td>
                      @if($priceGroup->per_hour_charges != null)
                      {{$priceGroup->per_hour_charges}}
                      @else
                      - 
                    @endif
                    </td>
					 
                    <td>
                      @if($priceGroup->oneway_base_fare != null)
                      {{$priceGroup->oneway_base_fare}}
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
                            onclick="editFareManagement({{ json_encode($priceGroup) }})">
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

    <!-- Edit Fare Modal -->
<div class="modal fade" id="editPaymentHistoryModal" tabindex="-1" role="dialog" aria-labelledby="editPaymentHistoryModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editPaymentHistoryModalLabel">Edit Fare</h5>
              <button type="button" class="close" onclick="closeModal('editPaymentHistoryModal')" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="editFaremanagementForm" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="editCity">City</label>
                    <input type="text" class="form-control" id="editCity" name="from_location" required>
                  </div>

                <div class="form-group">
                    <label for="editCityDimeter">Area Diameter Range <small>(In Km)</small></label>
                    <input type="text" class="form-control" id="editCityDimeter" name="city_diameter" placeholder="Enter Dimeter" required>
                </div>
                 
                  <div class="form-group">
                      <label for="editPerKMCharges">Per Km Charges<small>(In Rupees)</small></label>
                      <input type="text" class="form-control" id="editPerKMCharges" placeholder="Enter per Km charges" name="per_km_charges" required>
                  </div>
                 
                  <div class="form-group">
                    <label for="editOutstationDiselPerKMCharges">One way Diesel/Petrol Per Km Charges<small>(In Rupees)</small></label>
                    <input type="text" class="form-control" id="editOutstationDiselPerKMCharges" placeholder="Enter Disel/Petrol per km  charges" name="oneway_disel_per_km_charges" required>
                  </div>

                  <div class="form-group">
                    <label for="editOutstationCngPerKMCharges">One way CNG Per Km Charges<small>(In Rupees)</small></label>
                    <input type="text" class="form-control" id="editOutstationCngPerKMCharges" name="oneway_cng_per_km_charges" placeholder="Enter CNG per km  charges" required>
                  </div>
                  <div class="form-group">
                    <label for="editOutstationElecticPerKMCharges">One way Electric Per Km Charges<small>(In Rupees)</small></label>
                    <input type="text" class="form-control" id="editOutstationElecticPerKMCharges" name="electric_per_km_charges" placeholder="Enter Electric per km  charges" required>
                  </div>
         
                  <div class="form-group">
                    <label for="editPerHourCharges">Per Extra Hours Charges <small>(In Rupees)</small></label>
                    <input type="text" class="form-control" placeholder="Enter Extra hours per km  charges" id="editPerHourCharges" name="per_hour_charges" required>
                  </div>
                        
                  <div class="form-group">
                    <label for="editOutstationBaseFare">One way Base Fare <small>(In Rupees)</small></label>
                    <input type="text" class="form-control" placeholder="Enter Base Fare" id="editOutstationBaseFare" name="oneway_base_fare" required>
                  </div>
             
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
          </div>
      </div>
  </div>
</div>


<div class="modal fade" id="AddCity" tabindex="-1" role="dialog" aria-labelledby="AddCityLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddCityLabel">Add City</h5>
                <button type="button" class="close" onclick="closeModal('AddCity')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="add-city" id="AddCityLabelForm" method="POST">
                    @csrf
                    <input type="hidden" name="car_class_id" value="{{$_GET['class_id']}}">
                    <div class="form-group">
                      <label for="AddCityInput">City</label>
                      <input type="text" class="form-control" id="AddCityInput" name="from_location" required>
                    </div>
  
                  <div class="form-group">
                      <label for="editCityDimeter">Area Diameter Range <small>(In Km)</small></label>
                      <input type="text" class="form-control" id="editCityDimeter" placeholder="Enter Dimeter" name="city_diameter" required>
                  </div>
                   
                    <div class="form-group">
                        <label for="editPerKMCharges">Per Km Charges<small>(In Rupees)</small></label>
                        <input type="text" class="form-control" placeholder="Enter per Km charges" id="editPerKMCharges" name="per_km_charges" required>
                    </div>
                   
                    <div class="form-group">
                      <label for="editOutstationDiselPerKMCharges">Onw Way Diesel/Petrol Per Km Charges<small>(In Rupees)</small></label>
                      <input type="text" class="form-control" id="editOutstationDiselPerKMCharges" placeholder="Enter Disel/Petrol per km  charges" name="oneway_disel_per_km_charges" required>
                    </div>
  
                    <div class="form-group">
                      <label for="editOutstationCngPerKMCharges">One way CNG Per Km Charges<small>(In Rupees)</small></label>
                      <input type="text" class="form-control" id="editOutstationCngPerKMCharges" placeholder="Enter CNG per km  charges" name="oneway_cng_per_km_charges" required>
                    </div>
                    <div class="form-group">
                      <label for="editOutstationElecticPerKMCharges">One way Electric Per Km Charges<small>(In Rupees)</small></label>
                      <input type="text" class="form-control" placeholder="Enter Electric per km  charges" id="editOutstationElecticPerKMCharges" name="electric_per_km_charges" required>
                    </div>
           
                    <div class="form-group">
                      <label for="editPerHourCharges">Per Extra Hours Charges <small>(In Rupees)</small></label>
                      <input type="text" class="form-control" id="editPerHourCharges" placeholder="Extra Hours Charges" name="per_hour_charges" required>
                    </div>
                          
                    <div class="form-group">
                      <label for="editOutstationBaseFare">One way Base Fare <small>(In Rupees)</small></label>
                      <input type="text" class="form-control" id="editOutstationBaseFare" placeholder="Enter Base Fare" name="oneway_base_fare" required>
                    </div>
               
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
  </div>


    <!-- content-wrapper ends -->
    <footer class="footer">
      <div class="footer-wrap">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://webwideit.solutions/" target="_blank">Web Wide IT Solution Pune</a> 2024</span>
        </div>
      </div>
    </footer>
</div>

<!-- Google Places API for Autocomplete -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACiii2Kp1VXRckQoTy_MYZcLkS0wEKhBE&libraries=places"></script>
<script>
    function initializeGoogleAutocomplete() {
      const editCityInput = document.getElementById('editCity');
      const addCityInput = document.getElementById('AddCityInput');
  
      if (editCityInput) {
        const autocompleteStart = new google.maps.places.Autocomplete(editCityInput);
        autocompleteStart.setFields(['address_components', 'geometry', 'name']);
        
        autocompleteStart.addListener('place_changed', function () {
          const place = autocompleteStart.getPlace();
          const address = getAddressComponents(place);
          console.log('Start Place:', address);
        });
      }
  
      if (addCityInput) {
        const autocompleteEnd = new google.maps.places.Autocomplete(addCityInput);
        autocompleteEnd.setFields(['address_components', 'geometry', 'name']);
        
        autocompleteEnd.addListener('place_changed', function () {
          const place = autocompleteEnd.getPlace();
          const address = getAddressComponents(place);
          console.log('End Place:', address);
        });
      }
    }
  
    function getAddressComponents(place) {
      const addressComponents = place.address_components;
      let address = {
        street: '',
        city: '',
        state: '',
        country: '',
        postal_code: ''
      };
  
      addressComponents.forEach(component => {
        const types = component.types;
        if (types.includes('street_number')) {
          address.street = component.long_name + ' ' + address.street;
        }
        if (types.includes('route')) {
          address.street += component.long_name;
        }
        if (types.includes('locality')) {
          address.city = component.long_name;
        }
        if (types.includes('administrative_area_level_1')) {
          address.state = component.long_name;
        }
        if (types.includes('country')) {
          address.country = component.long_name;
        }
        if (types.includes('postal_code')) {
          address.postal_code = component.long_name;
        }
      });
  
      return address;
    }
  
    google.maps.event.addDomListener(window, 'load', initializeGoogleAutocomplete);
  </script>

<script>
    function editFareManagement(priceGroup) {
        document.getElementById('editCity').value = priceGroup.from_location;
        document.getElementById('editCityDimeter').value = priceGroup.city_diameter;
        document.getElementById('editPerKMCharges').value = priceGroup.per_km_charges;
        document.getElementById('editOutstationDiselPerKMCharges').value = priceGroup.oneway_disel_per_km_charges;
        document.getElementById('editOutstationCngPerKMCharges').value = priceGroup.oneway_cng_per_km_charges;
        document.getElementById('editOutstationElecticPerKMCharges').value = priceGroup.electric_per_km_charges;
        document.getElementById('editPerHourCharges').value = priceGroup.per_hour_charges;
        document.getElementById('editOutstationBaseFare').value = priceGroup.oneway_base_fare;
        document.getElementById('editFaremanagementForm').action = `./edit-pricegroup/${priceGroup.id}`;
        $('#editPaymentHistoryModal').modal('show');
    }

    function AddCity(class_id) {
        $('#AddCity').modal('show');
    }

    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
  <script>
      Swal.fire({
          title: 'Success!',
          text: '{{ session('success') }}',
          icon: 'success',
          confirmButtonText: 'OK'
      });
  </script>
@endif

@endsection
