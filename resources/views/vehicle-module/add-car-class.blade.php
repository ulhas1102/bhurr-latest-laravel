@extends('layouts.master')
@section('title', 'Add Car class')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


@section('backend-page-style')

@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row justify-content-center mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Add Car Type</h4>
            </div>
            <div class="card-body">
                    <form action="add-car-class" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="form-group">
                            <label for="carType">Select car class or add</label>
                            <input type="text" class="form-control" id="carTypeInput" placeholder="Search or add a car type">
                            <select class="form-control hidden @error('car_class') is-invalid @enderror" id="carTypeDropdown" name="car_class" style="width: 100%;" required>
                                <option value="">-- Select car class --</option>
                                <option value="Economy Class">Economy Class</option>
                                <option value="Compact Class">Compact Class</option>
                                <option value="Mid-size Class">Mid-size Class</option>
                                <option value="Full-size Class">Full-size Class</option>
                                <option value="Luxury Class">Luxury Class</option>
                                <option value="Sports Class">Sports Class</option>
                                <option value="Crossover Class">Crossover Class</option>
                            </select>
                        </div>
                        @error('car_class')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label>Class Image</label>
                            <input type="file" name="class_image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Class Image" required>
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const carTypeInput = document.getElementById('carTypeInput');
                                const carTypeDropdown = document.getElementById('carTypeDropdown');
                                
                                carTypeInput.addEventListener('input', function() {
                                    const searchValue = carTypeInput.value.toLowerCase();
                                    let optionFound = false;
                    
                                    for (let i = 0; i < carTypeDropdown.options.length; i++) {
                                        const option = carTypeDropdown.options[i];
                                        if (option.value.toLowerCase() === searchValue) {
                                            optionFound = true;
                                            option.selected = true;
                                            break;
                                        }
                                    }
                    
                                    if (!optionFound && searchValue !== "") {
                                        const newOption = new Option(carTypeInput.value, carTypeInput.value, true, true);
                                        carTypeDropdown.add(newOption);
                                    }
                                });
                    
                                carTypeInput.addEventListener('focus', function() {
                                    carTypeDropdown.classList.remove('hidden');
                                    carTypeInput.placeholder = "Type to search or add a new car type";
                                });
                    
                                carTypeInput.addEventListener('blur', function() {
                                    setTimeout(() => {
                                        carTypeDropdown.classList.add('hidden');
                                        carTypeInput.placeholder = "Search or add a car type";
                                    }, 200);
                                });
                    
                                carTypeDropdown.addEventListener('change', function() {
                                    carTypeInput.value = carTypeDropdown.options[carTypeDropdown.selectedIndex].text;
                                });
                            });
                        </script>
                           <div class="form-group">
                            <label for="seating_capacity">Seating Capacity <small>(Ex:1 ,2 ,3...)[Person].</small></label>
                            <input type="number" class="form-control" name="seating_capacity" id="seating_capacity" placeholder="Enter Seating capacity">
                        </div>
                        <div class="form-group">
                            <label for="luggage_capacity">Luggage Capacity<small>(Ex:1 Bag,2 Bag...).</small></label>
                            <input type="text" class="form-control" name="luggage_capacity" id="seating_capacity" placeholder="Enter Seating capacity">
                        </div>
                        
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
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

  
  
@endsection