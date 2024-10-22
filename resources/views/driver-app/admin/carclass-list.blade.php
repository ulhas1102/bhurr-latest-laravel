@extends('driver-app.admin.layouts.app')

@section('content')

<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>CarClass List</h4>
                            <div>
                                <a class="btn btn-sm btn-info" href="#" data-bs-toggle="modal"
                                    data-bs-target="#addCarClass">
                                    Add New
                                </a>
                                <a class="btn btn-sm btn-success" href="{{url('driver-admin-dashboard')}}">
                                    <i class="mdi mdi-home"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Id</th>
                                            <th style="text-align: center">Car Class Name</th>
                                            <th style="text-align: center">Car Class Image</th>
                                            <th style="text-align: center">Transmission Type</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($carclasses as $data)
                                        <tr>
                                            <td style="text-align: center">{{ $data->carclass_id }}</td>
                                            <td style="text-align: center">{{ $data->carclass_name }}</td>
                                          
                                            <td style="text-align: center"><img
                                                    src="{{ asset('assets/carclass_images/' . $data->carclass_image) }}"
                                                    alt="Driver Image" /></td>
											  <td style="text-align: center">{{ $data->gear_type }}</td>
                                            <td style="text-align: center">
												
                                             <a class="btn btn-primary" href="#" data-bs-toggle="modal"
												data-bs-target="#updateCarClassModal"
												data-id="{{ $data->carclass_id }}"
												data-carclass-name="{{ $data->carclass_name }}"
												data-gear-type="{{ $data->gear_type }}">  <!-- Add data-gear-type -->
												<i class="mdi mdi-grease-pencil"></i>
											</a>

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
        </div>
    </div>
</div>

<!-- Add Package Modal -->
<div class="modal fade @if ($errors->any()) show @endif" id="addCarClass" tabindex="-1"
    aria-labelledby="addCarClassLabel" aria-hidden="true" @if ($errors->any()) style="display: block;" @endif>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCarClassLabel">Add Car Class</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.carclass') }}" method="POST" id="addCarClassForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="carclass_name" class="form-label">Car Class Name</label>
                        <input type="text" class="form-control" id="carclass_name" name="carclass_name"
                            value="{{ old('carclass_name') }}">
                        @if ($errors->has('carclass_name'))
                        <div class="text-danger">
                            {{ $errors->first('carclass_name') }}
                        </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="carclass_image" class="form-label">Car Class Image</label>
                        <input type="file" class="form-control" id="carclass_image" name="carclass_image"
                            value="{{ old('carclass_image') }}">
                        @if ($errors->has('carclass_image'))
                        <div class="text-danger">
                            {{ $errors->first('carclass_image') }}
                        </div>
                        @endif
                    </div>
					
					 <div class="mb-3">
                         <label for="gear_type">Select Transmission</label>
                            <select class="form-control dropdown" name="gear_type" id="gear_type">
                               <option value="" selected="selected">-- Select Transmission --</option>
                                  <option value="Manual"> Manual</option>
                                  <option value="Automatic">Automatic </option>
                                  <option value="Both">Both</option>
                             </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Car Class Modal -->
<div class="modal fade" id="updateCarClassModal" tabindex="-1" aria-labelledby="updateCarClassModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateCarClassModalLabel">Update Carclass</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update.carclass') }}" method="POST" id="updateCarClassForm"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" id="carclass_id" name="carclass_id">
                    <div class="mb-3">
                        <label for="update_carclass_name" class="form-label">Car Class Name</label>
                        <input type="text" class="form-control" id="update_carclass_name" name="carclass_name" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="update_carclass_image" class="form-label">Car Class Image</label>
                        <input type="file" class="form-control" id="update_carclass_image" name="carclass_image">
                    </div>
                    
                    <!-- Add Gear Type Field -->
                    <div class="mb-3">
                        <label for="update_gear_type" class="form-label">Select Transmission</label>
                        <select class="form-control" id="update_gear_type" name="gear_type">
                            <option value="" selected="selected">-- Select Transmission --</option>
                            <option value="Manual">Manual</option>
                            <option value="Automatic">Automatic</option>
                            <option value="Both">Both</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var updateCarClassModal = document.getElementById('updateCarClassModal');
    updateCarClassModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget || event.srcElement;
        var carclassId = button.getAttribute('data-id');
        var carclassName = button.getAttribute('data-carclass-name');
        var gearType = button.getAttribute('data-gear-type');  // Retrieve gear_type

        var form = updateCarClassModal.querySelector('#updateCarClassForm');
        form.querySelector('#carclass_id').value = carclassId;
        form.querySelector('#update_carclass_name').value = carclassName;
        
        // Set gear_type value in the select dropdown
        var gearTypeSelect = form.querySelector('#update_gear_type');
        gearTypeSelect.value = gearType;
    });

    @if($errors -> any())
    var myModal = new bootstrap.Modal(document.getElementById('addCarClass'));
    myModal.show();
    @endif
});
</script>

@endsection