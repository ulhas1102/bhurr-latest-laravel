@extends('vendor-layouts.master')
@section('title', 'Available Cars')


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
            {{-- <div class="card-header">
                
            </div> --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4>{{$avilablecars->car_name}}</h4>
                                <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Car Name</th>
                                            <td>{{$avilablecars->car_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Car Type</th>
                                            <td>{{$avilablecars->car_type}}</td>
                                        </tr>
                                        <tr>
                                            <th>Car Class</th>
                                            <td>{{$avilablecars->car_class}}</td>
                                        </tr>
                                        <tr>
                                            <th>Car Registration</th>
                                            <td>{{$avilablecars->car_registration}}</td>
                                        </tr>
                                        <tr>
                                            <th>No of Cars</th>
                                            <td>{{$avilablecars->no_of_cars_quantity}}</td>
                                        </tr>
										<tr>
                                            <th>Car Front View Image</th>
                                            <td>
                                                 @if($avilablecars->car_front_image != null) 
                                                 <a onclick="viewImage({{ json_encode($avilablecars->car_front_image) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->car_front_image)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->car_front_image)}}" download="Rc Book">Download
                                                </a>
                                                @else
                                                <p class="text-danger"><i>Front View document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
										<tr>
                                            <th>Car Back View Image</th>
                                            <td>
                                                 @if($avilablecars->car_back_image != null) 
                                                 <a onclick="viewImage({{ json_encode($avilablecars->car_back_image) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->car_back_image)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->car_back_image)}}" download="Rc Book">Download
                                                </a>
                                                @else
                                                <p class="text-danger"><i>Back view document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
										<tr>
                                            <th>Car Interior View Image</th>
                                            <td>
                                                 @if($avilablecars->car_interior_image != null) 
                                                 <a onclick="viewImage({{ json_encode($avilablecars->car_interior_image) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->car_interior_image)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->car_interior_image)}}" download="Rc Book">Download
                                                </a>
                                                @else
                                                <p class="text-danger"><i>Interior view document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Rc Book Document</th>
                                            <td>
                                                 @if($avilablecars->rc_book != null) 
                                                 <a onclick="viewImage({{ json_encode($avilablecars->rc_book) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->rc_book)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->rc_book)}}" download="Rc Book">Download
                                                </a>
                                                @else
                                                <p class="text-danger"><i>Rc Book document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Insurance Policy</th>
                                            <td>
                                                 @if($avilablecars->insurance_policy != null) 
                                                 <a onclick="viewImage({{ json_encode($avilablecars->insurance_policy) }})"><img src="{{asset('car-details'. '/'.$avilablecars->insurance_policy)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->insurance_policy)}}" download="Insurance Policy">Download
                                                </a>
                                                @else
                                                <p class="text-danger"><i>Insurance Policy document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PUC</th>
                                            <td>
                                                @if($avilablecars->puc != null) 
                                                <a onclick="viewImage({{ json_encode($avilablecars->puc) }})"><img src="{{asset('car-details'. '/'.$avilablecars->puc)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->puc)}}" download="PUC">Download
                                                </a>
                                                @else
                                                <p class="text-danger"><i>PUC document not uploded yet ..</i></p>
                                                @endif
                                                </td>
                                        </tr>
                                        <tr>
                                          
                                            <th>Fitness Certificate Document</th>
                                            <td>
                                                @if($avilablecars->fitness_certificate != null) 
                                                <a onclick="viewImage({{ json_encode($avilablecars->fitness_certificate) }})"><img src="{{asset('car-details'. '/'.$avilablecars->fitness_certificate)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a><br><br><a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->fitness_certificate)}}" download="Fitness Certificate">Download</a>
                                                @else
                                                <p class="text-danger"><i>Fitness Certificate document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
        
                                        <tr>
                                            <th>Authorization Letter</th>
                                            <td>
                                                 @if($avilablecars->authorization_letter != null) 
                                                 <a onclick="viewImage({{ json_encode($avilablecars->authorization_letter) }})"><img src="{{asset('car-details'. '/'.$avilablecars->authorization_letter)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->authorization_letter)}}" download="Authorization Letter">Download
                                                </a>
                                                @else
                                                <p class="text-danger"><i>Authorization Letter document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
        
                                        <tr>
                                            <th>Rto Tax Receipt</th>
                                            <td>
                                                 @if($avilablecars->rto_tax_receipt != null) 
                                                 <a onclick="viewImage({{ json_encode($avilablecars->rto_tax_receipt) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->rto_tax_receipt)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->rto_tax_receipt)}}" download="Rto Tax Receipt">Download
                                                </a>
                                                @else
                                                <p class="text-danger"><i>Rto Tax Receipt document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Professional Tax Receipt</th>
                                            <td>
                                                 @if($avilablecars->professional_tax_receipt	 != null) 
                                                 <a onclick="viewImage({{ json_encode($avilablecars->professional_tax_receipt	) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->professional_tax_receipt	)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->professional_tax_receipt	)}}" download="Professional Tax Receipt">Download
                                                </a>
                                                @else
                                                <p class="text-danger"><i>Professional Tax Receipt document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sales Tax Receipt</th>
                                            <td>
                                                 @if($avilablecars->sales_tax_receipt != null) 
                                                 <a onclick="viewImage({{ json_encode($avilablecars->sales_tax_receipt) }})"> <img src="{{asset('car-details'. '/'.$avilablecars->sales_tax_receipt)}}" style="height:150px !important; width:150px !important; border-radius:0px"/></a>
                                                <br><br>
                                                <a class="btn btn-primary" href="{{asset('car-details'. '/'.$avilablecars->sales_tax_receipt)}}" download="Sales Tax Receipt">Download
                                                </a>
                                                @else
                                                <p class="text-danger"><i>Sales Tax Receipt document not uploded yet ..</i></p>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" card-footer"> 
                 
            </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="viewImage" tabindex="-1" role="dialog" aria-labelledby="editCarclassModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCarclassModalLabel">Driver Documents</h5>
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
     function viewImage(avilablecars) {
        //console.log(carclass);

        document.getElementById('viewImageData').src = `./car-details/${avilablecars}`;
       

        // Show the modal
        $('#viewImage').modal('show');
    }

    function closeModal(modalId) {
        $('#' + modalId).modal('hide');
    }

</script>
@endsection