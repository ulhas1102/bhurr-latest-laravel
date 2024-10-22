@extends('layouts.master')
@section('title', 'Add Driver')
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
                    <form action="add-car-type" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="form-group">
                            <label for="carType">Select Car Type or Add</label>
                            <input type="text" class="form-control" id="carTypeInput" placeholder="Search or add a car type">
                            <select class="form-control hidden @error('car_type') is-invalid @enderror" id="carTypeDropdown" name="car_type" style="width: 100%;" required>
                                <option value="">-- Select car type --</option>
                                <option value="Sedan">Sedan</option>
                                <option value="SUV">SUV</option>
                                <option value="Coupe">Coupe</option>
                                <option value="Hatchback">Hatchback</option>
                                <option value="Convertible">Convertible</option>
                                <option value="Truck">Truck</option>
                                <option value="Van">Van</option>
                                <option value="Wagon">Wagon</option>
                                <option value="Crossover">Crossover</option>
                                <option value="Minivan">Minivan</option>
                                <option value="Pickup Truck">Pickup Truck</option>
                                <option value="Luxury Car">Luxury Car</option>
                                <option value="Electric Car">Electric Car</option>
                                <option value="Hybrid Car">Hybrid Car</option>
                                <option value="Sports Car">Sports Car</option>
                                <option value="Diesel Car">Diesel Car</option>
                                <option value="Compact Car">Compact Car</option>
                                <option value="Subcompact Car">Subcompact Car</option>
                                <option value="Roadster">Roadster</option>
                                <option value="Off-Road Vehicle">Off-Road Vehicle</option>
                            </select>
                        </div>
                        @error('car_type')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

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