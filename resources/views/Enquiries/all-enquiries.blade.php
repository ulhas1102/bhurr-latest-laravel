@extends('layouts.master')
@section('title', 'All Bookings')

@section('backend-page-style')

<style>
  .card-header {
      background-color: #5650ce40;
      color: black;
      font-weight: bold;
  }
  th, td {
            white-space: nowrap;
            text-align: center;
        }
</style>
@endsection

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="card">
          <div class="card-header d-flex justify-content-between p-3">
            <h4>All Bookings List</h4>
            <a href="{{ url('add-new-enquiry') }}" class="btn btn-primary">Add Enquiries</a>
            <button onclick="downloadExcel()" class="btn btn-info">Download Excel</button>
          </div>
            
          <div class="card-body" style="overflow-y: auto; max-height: 400px;">
              <table class="table display" style="width:100%" id="example">
                  <thead>
                      <tr>
                          <th>SR.No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Contact No</th>
                          <th>Number of Days</th>
                          <th>Package Type</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;     
                    @endphp
                      @foreach($enquiries as $enquirie)
                      <tr>
                        <td>{{ $i++ }}</td>
                          <td>{{ $enquirie->customer_name }}</td>
                          <td>{{ $enquirie->customer_email }}</td>
                          <td>{{ $enquirie->customer_mobile }}</td>
                          <td>{{ $enquirie->number_of_days_trip }}</td>
                          <td>
                            @if($enquirie->package_type == 1)
                              Local
                            @elseif($enquirie->package_type == 2)
                              Outstation
                              @elseif($enquirie->package_type == 3)
                              One Way
                            @endif
                          </td>
                          <td class="d-flex justify-content-between">
                              <a href="enquiry-details?enquiry_id={{ $enquirie->enquiry_id }}" class="btn btn-success">View More</a>
                              <a href="edit-enquiry?enquiry_id={{ $enquirie->enquiry_id }}" class="btn btn-primary">Edit</a>
                              <form action="deleteEnquiry" method="POST">
                                  @csrf
                                  <input type="hidden" name="enquiry_id" value="{{ $enquirie->enquiry_id }}">
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
<!-- Assuming you have a button or link to trigger the download -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.0/xlsx.full.min.js"></script>
<script>
    function downloadExcel() {
    // Fetch data from Laravel controller or directly from Blade view
    const enquiries = @json($enquiries); // Convert PHP variable to JavaScript array

    // Create a CSV content
    let csvContent = "data:text/csv;charset=utf-8,";

    // Add CSV headers
    csvContent += "Enquiry ID,Customer Name,Customer Email,Customer Mobile,Number of Days,Package Type,From Location,To Location,Start Journey Date,End Journey Date,Round Return,Number of Persons,Total Distance,Duration,Vehicle Name,Vehicle Type,Vehicle Class,Total Amount,Advance Amount,Remaining Amount,Overall Paid Amount,Extra Hours,Extra Hours Amount,Extra Hour Charges,Per KM Charges,Kilometers,Extra Kilometers Amount,Extra Kilometer Charges,Cleaning Charges,Tax Amount,Toll Amount,Created At\r\n";

   // Add data rows
   enquiries.forEach(enquiry => {
    csvContent += `${enquiry.enquiry_id},"${enquiry.customer_name}","${enquiry.customer_email}","${enquiry.customer_mobile}",${enquiry.number_of_days_trip},"${getPackageType(enquiry.package_type)}","${enquiry.from_location}","${enquiry.to_location}","${enquiry.start_journy_date}","${enquiry.end_journy_date}",${enquiry.round_return},${enquiry.number_of_persons},${enquiry.total_distance},${enquiry.duration},"${enquiry.vehicle_name}","${enquiry.vehicle_type}","${enquiry.vehicle_class}",${enquiry.total_amount},${enquiry.advance_amount},${enquiry.remaining_amount},${enquiry.overall_paid_amount},${enquiry.extra_hours},${enquiry.extra_hours_amount},${enquiry.extra_hour_charges},${enquiry.per_km_charges},${enquiry.kilometers},${enquiry.extra_kilometers_amount},${enquiry.extra_kilometer_charges},${enquiry.cleaning_charges},${enquiry.tax_amount},${enquiry.toll_amount},"${enquiry.created_at}"\r\n`;
});


    // Create a link element and trigger download
    const encodedUri = encodeURI(csvContent);
    const link = document.createElement("a");
    link.setAttribute("href", encodedUri);
   // link.setAttribute("download", "All Bookings.csv"); // File name
    link.setAttribute("download", "All Bookings.csv");

    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

// Helper function to convert package type ID to text
function getPackageType(packageType) {
    switch (packageType) {
        case 1:
            return "Local";
        case 2:
            return "Outstation";
        case 3:
            return "One Way";
        default:
            return "";
    }
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
