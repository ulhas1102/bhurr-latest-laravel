@extends('layouts.master')
@section('title', 'Cars Class')


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
              <h4>Car type list</h4>
                <a href="{{url('add-car-class')}}" class="btn btn-primary">Add Car Class</a>
            </div>
            <div class="card-body" style="overflow-y: auto; max-height: 400px;">
                <table class="table display" style="width:100%" id="example2">
                    <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Image</th>
                        <th>Car Class</th>
                        <th>Seating Capacity</th>
                        <th>Luggage Capacity</th>
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
                    <td> 
                       <a onclick="viewImage({{ json_encode($carclass) }})"> <img src="{{asset('class_images'. '/'.$carclass->class_image)}}" style="height:75px !important; width:auto !important;"/></a>
                    </td>
					<td><a href="{{$carclass->car_class}}/cars">{{$carclass->car_class}}</a></td>
                    <td>{{$carclass->seating_capacity}}</td>
                    <td>{{$carclass->luggage_capacity}}</td>
                    <td class="d-flex justify-content-between">
                      <button type="button" class="btn btn-primary" style="
                            padding-left: 18px;
                            padding-right: 18px;
                            padding-bottom: 3px;
                            height: 36.333334px;" 
                            onclick="editCarclass({{ json_encode($carclass) }})">
                            Edit
                        </button>
                        <a class="btn btn-success" href="available?class_name={{$carclass->car_class}}">Available Cars</a>
                        <form action="deleteCarClass" method="POST">
                            @csrf
                            <input type="hidden" name="car_class_id" value="{{$carclass->carclass_id}}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
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
  <div class="modal fade" id="editCarclass" tabindex="-1" role="dialog" aria-labelledby="editCarclassModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCarclassModalLabel">Edit Extra Hours</h5>
                <button type="button" class="close" onclick="closeModal('editCarclass')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCarclassForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="editCarclass">Class Name</label>
                        <input type="text" class="form-control" id="editCarclassname" disabled>
                    </div>
                    <div class="form-group">
                        <label for="class_image">Class Image</label>
                        <input type="file" class="form-control" id="class_image" name="class_image">
                    </div>

                    <div class="form-group">
                      <div class="form-group">
                        <img id="editClassImage" src="" style="height:75px !important; width:auto !important;" />
                    </div>
                  </div>
                    <div class="form-group">
                        <label for="editStartTime">Seating capacity</label>
                        <input type="text" class="form-control" id="editSeatingCapacity" name="seating_capacity">
                    </div>
                    <div class="form-group">
                        <label for="editLuggageCapacity">Luggage capacity</label>
                        <input type="text" class="form-control" id="editLuggageCapacity" name="luggage_capacity">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="viewImage" tabindex="-1" role="dialog" aria-labelledby="editCarclassModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCarclassModalLabel">Class Image</h5>
                <button type="button" class="close" onclick="closeModal('viewImage')" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editCarclassForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                      <div class="form-group">
                        <img id="viewImageData" src="" style="height:auto !important; width:100% !important;" />
                    </div>
                  </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
  <script>
    function editCarclass(carclass) {
        //console.log(carclass);

        // Populate the form fields in the modal
        document.getElementById('editCarclassname').value = carclass.car_class;
        document.getElementById('editLuggageCapacity').value = carclass.luggage_capacity;
        document.getElementById('editSeatingCapacity').value = carclass.seating_capacity;
        document.getElementById('editClassImage').src = `./class_images/${carclass.class_image}`;
        document.getElementById('editCarclassForm').action = `./edit-carclass/${carclass.carclass_id}`;

        // Show the modal
        $('#editCarclass').modal('show');
    }

    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }

    function viewImage(carclass) {
        //console.log(carclass);

        document.getElementById('viewImageData').src = `./class_images/${carclass.class_image}`;
       

        // Show the modal
        $('#viewImage').modal('show');
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