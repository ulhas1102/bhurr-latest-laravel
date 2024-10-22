@extends('layouts.master')
@section('title', 'Cars')


@section('backend-page-style')
<style>
  .card-header {
      background-color: #5650ce40;
      color: black;
      font-weight: bold;
  }
  th, td {
            white-space: nowrap;
        }
  </style>
@endsection

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="card">
            <div class="card-header d-flex  justify-content-between p-3">
              <h4>Cars list</h4>
				<button type="button" class="btn btn-primary" onclick="AddCity({{ json_encode($class->carclass_id) }})">Add car</button>
               
            </div>
            <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example2">
                    <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Car Model</th>
						<th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                    $i = 1;
                    @endphp
                   @foreach($cars as $car)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$car->car_name}}</td>
					<td>
						<button type="button" class="btn btn-primary" style="
                            padding-left: 18px;
                            padding-right: 18px;
                            padding-bottom: 3px;
                            height: 36.333334px;" 
                            onclick="editCarnameModal({{ json_encode($car) }})">
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

<div class="modal fade" id="AddCity" tabindex="-1" role="dialog" aria-labelledby="AddCityLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddCityLabel">Add Car</h5>
                <button type="button" class="close" onclick="closeModal('AddCity')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('add.car')}}" id="AddCityLabelForm" method="POST">
                    @csrf
                    <input type="hidden" name="class_name" value="{{$class->car_class}}">
                    
					  <div class="form-group">
						  <label for="car_name">Car Model <small>(Related to {{$class->car_class}})</small></label>
						  <input type="text" class="form-control" id="car_name" placeholder="Enter model " name="car_name" required>
					  </div>
                   
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
  </div>

<div class="modal fade" id="editCarnameModal" tabindex="-1" role="dialog" aria-labelledby="editCarnameModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editCarnameModalLabel">Edit Fare</h5>
              <button type="button" class="close"onclick="closeModal('editCarnameModal')" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="editCarModelForm" method="POST">
                  @csrf
                  @method('PUT')
                    <div class="form-group">
						<label for="editCarModel"> Car Model </label>
						<input type="text" class="form-control" id="editCarModel" name="car_name" required>
					</div>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
          </div>
      </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	  function editCarnameModal(car) {
		  console.log(car);
      // Populate the form fields in the modal
      document.getElementById('editCarModel').value = car.car_name;
       document.getElementById('editCarModelForm').action = `{{route('edit.class.wise.car', ':id')}}`.replace(':id', car.id);
      
      // Show the modal
      $('#editCarnameModal').modal('show');
    }
	function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }
	 function AddCity(class_id) {
        $('#AddCity').modal('show');
    }
</script>
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