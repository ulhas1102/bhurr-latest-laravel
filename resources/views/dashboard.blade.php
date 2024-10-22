@extends('layouts.master')
@section('title', 'Dashboard')


@section('backend-page-style')
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        
        <div class="row">
            <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h2 class="text-success font-weight-bold">{{$totalEnquiries}}</h2>
                            <i class="mdi mdi-file-document-box mdi-18px text-dark"></i>
                        </div>
                    </div>
                    <canvas id="newClient"></canvas>
                    <div class="line-chart-row-title">Total Bookings</div>
                </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h2 class="text-danger font-weight-bold">{{$totalDrivers}}</h2>
                            <i class="mdi mdi-account-multiple mdi-18px text-dark"></i>
                        </div>
                    </div>
                    <canvas id="allProducts"></canvas>
                    <div class="line-chart-row-title">Total Drivers</div>
                </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h2 class="text-info font-weight-bold">{{$totalVendors}}</h2>
                            <i class="mdi mdi-account-multiple mdi-18px text-dark"></i>
                        </div>
                    </div>
                    <canvas id="invoices"></canvas>
                    <div class="line-chart-row-title">Total Vendors</div>
                </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h2 class="text-warning font-weight-bold">{{$totalAvilableCars}}</h2>
                            <i class="mdi mdi-car mdi-18px text-dark"></i>
                        </div>
                    </div>
                    <canvas id="projects"></canvas>
                    <div class="line-chart-row-title">Total Available Cars</div>
                </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h2 class="text-secondary font-weight-bold">{{$totalCompleteEnquiries}}</h2>
                            <i class="mdi mdi-file-document-box mdi-18px text-dark"></i>
                        </div>
                    </div>
                    <canvas id="orderRecieved"></canvas>
                    <div class="line-chart-row-title">Completed Bookings</div>
                </div>
            </div>
            <div class="col-lg-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h2 class="text-dark font-weight-bold">{{$totalCancelledEnquiries}}</h2>
                            <i class="mdi mdi-file-document-box text-dark mdi-18px"></i>
                        </div>
                    </div>
                    <canvas id="transactions"></canvas>
                    <div class="line-chart-row-title">Cancelled Bookings</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Support Tracker</h4>
                            <h4 class="text-success font-weight-bold">Tickets<span class="text-dark ms-3">163</span></h4>
                        </div>
                        <div id="support-tracker-legend" class="support-tracker-legend"></div>
                        <canvas id="supportTracker"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center justify-content-between mb-4">
                            <h4 class="card-title">Bookings</h4>
                            <p class="text-dark">+5.2% vs last 7 days</p>
                        </div>
                        <div class="product-order-wrap padding-reduced">
                            <div id="productorder-gage" class="gauge productorder-gage"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
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