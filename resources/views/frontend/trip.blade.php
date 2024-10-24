@extends('frontend-layout.app')
@section('title', 'trip - page')
@section('inline-css')
<style>
  /* Scoping styles to trip-details-page */
/* this is trip details page */
  profile-page-add
  .trip-details-page .card {
    margin-top: 20px;
    border-radius: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    cursor: pointer;
  }

  .trip-details-page .card h5 {
    font-weight: 600;
  }

  .trip-details-page .card-body h5 {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 8px;
  }

  .trip-details-page .card-body p {
    margin-bottom: 0;
    font-size: 0.9rem;
    color: #555;
  }

  .trip-details-page .detail-row {
    display: flex;
    justify-content: space-between;
  }

  .trip-details-page .detail-row:last-child {
    border-bottom: none;
  }

  .trip-details-page .from-to .detail-row,
  .trip-details-page .extra-details .detail-row {
    margin-bottom: 10px;
  }

  .trip-details-page .detail-row div:first-child {
    width: 50%;
  }

  .trip-details-page .detail-row div:last-child {
    width: 50%;
    justify-content: end;
    text-align: end;
  }

  .trip-details-page .btn-custom {
    margin-right: 10px;
  }

  .trip-details-page .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }

  .trip-details-page .btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
  }

  .trip-details-page .otp-info {
    color: #dc3545;
    font-weight: bold;
  }

  .trip-details-page .small-text {
    font-size: 0.8rem;
    color: #777;
  }

  .trip-details-page .extra-details {
    display: none;
  }

  .badge-completed {
    background-color: #28a745;
    color: white;
  }

  .badge-upcoming {
    background-color: #007bff;
    color: white;
  }

  .badge-cancelled {
    background-color: #dc3545;
    color: white;
  }

  /* Additional styling for responsiveness */
  @media (max-width: 768px) {
<<<<<<< HEAD
    .trip-details-page .detail-row {
      /* flex-direction: row; */
    }

=======
    
>>>>>>> profile-page-add
    .trip-details-page .detail-row div {
      width: 100%;
    }

    .trip-details-page .btn-custom {
      margin-bottom: 10px;
    }

    .trip-details-page .btn-custom {
      margin: 5px auto;
    }
  }
</style>
</head>

<body class="trip-details-page">
  @endsection
  @section('content')
  <div class="container my-md-5 my-3">
    <!-- Trip Details Card -->
    <div class="card" id="trip-card">
      <div class="card-body">
        <!-- Location Details -->
        <div class="d-flex align-items-center">
          <h5 class="card-title">Trip Details(Round trip)</h5>
          <span class="badge badge-status badge-upcoming mx-3">Upcoming</span>
        </div>
        <div class="from-to">
          <div class="detail-row">
            <div>
              <h5 class="mb-0">From:</h5>
              <p class="small mb-0">
                Address 1, xyz street, abc town, pqr district.
              </p>
            </div>
            <div>
              <h5>25/09/2024</h5>
            </div>
          </div>
          <div class="detail-row">
            <div>
              <h5 class="mb-0">To:</h5>
              <p class="small mb-0">
                Address 2, mno street, bvc town, mnb district.
              </p>
            </div>
            <div>
              <h5>26/09/2024</h5>
            </div>
          </div>
        </div>

        <!-- Extra Details Hidden Initially -->
        <div class="extra-details">
          <div class="detail-row">
            <div>
              <h5 class="mb-0">Duration:</h5>
              <p class="small mb-0">
                Don't let the fun stop, extend as long as you like.
              </p>
            </div>
            <div>
              <h5>03 Days</h5>
            </div>
          </div>
          <div class="detail-row">
            <div>
              <h5 class="mb-0">Departure Time:</h5>
              <p class="small mb-0">Trip starts at the specified time.</p>
            </div>
            <div>
              <h5>10:00 AM</h5>
            </div>
          </div>

          <!-- Car Details -->
          <h5 class="card-title mb-0">Car Details</h5>
          <div class="detail-row">
            <p class="mb-0">Class:</p>
            <p class="mb-0">SUV</p>
          </div>
          <div class="detail-row">
            <p class="mb-0">Fuel Type:</p>
            <p class="mb-0">Diesel</p>
          </div>
          <div class="detail-row">
            <p>Vehicle No:</p>
            <p>MH12XY1234</p>
          </div>
          <div class="detail-row">
            <p class="">Vehicle Make:</p>
            <p class="">Toyota Fortuner</p>
          </div>

          <!-- Driver Details -->
          <div class="mt-3">
            <h5 class="card-title mb-0">Driver Details</h5>
            <div class="detail-row">
              <div>
                <p>Name:</p>
              </div>
              <div>
                <p>John Doe</p>
              </div>
            </div>
            <div class="detail-row">
              <div>
                <p>Contact No:</p>
              </div>
              <div>
                <p>+91 9876543210</p>
              </div>
            </div>
            <div class="detail-row">
              <div>
                <p class="otp-info">OTP: 123456</p>
                <p class="small-text">Share only if car details match</p>
              </div>
              <div class="d-md-flex justify-content-end">
                <button class="btn btn-primary btn-custom btn-sm">
                  Call Driver
                </button>
                <button class="btn btn-secondary btn-sm">Track Ride</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card" id="trip-card">
      <div class="card-body">
        <!-- Location Details -->
        <div class="d-flex align-items-center">
          <h5 class="card-title">Trip Details</h5>
          <span class="badge badge-status badge-completed mx-3">completed</span>
        </div>
        <div class="from-to">
          <div class="detail-row">
            <div>
              <h5 class="mb-0">From:</h5>
              <p class="small mb-0">
                Address 1, xyz street, abc town, pqr district.
              </p>
            </div>
            <div>
              <h5>25/09/2024</h5>
            </div>
          </div>
          <div class="detail-row">
            <div>
              <h5 class="mb-0">To:</h5>
              <p class="small mb-0">
                Address 2, mno street, bvc town, mnb district.
              </p>
            </div>
            <div>
              <h5>26/09/2024</h5>
            </div>
          </div>
        </div>

        <!-- Extra Details Hidden Initially -->
        <div class="extra-details">
          <div class="detail-row">
            <div>
              <h5 class="mb-0">Duration:</h5>
              <p class="small mb-0">
                Don't let the fun stop, extend as long as you like.
              </p>
            </div>
            <div>
              <h5>03 Days</h5>
            </div>
          </div>
          <div class="detail-row">
            <div>
              <h5 class="mb-0">Departure Time:</h5>
              <p class="small mb-0">Trip starts at the specified time.</p>
            </div>
            <div>
              <h5>10:00 AM</h5>
            </div>
          </div>

          <!-- Car Details -->
          <h5 class="card-title mb-0">Car Details</h5>
          <div class="detail-row">
            <p class="mb-0">Class:</p>
            <p class="mb-0">SUV</p>
          </div>
          <div class="detail-row">
            <p class="mb-0">Fuel Type:</p>
            <p class="mb-0">Diesel</p>
          </div>
          <div class="detail-row">
            <p>Vehicle No:</p>
            <p>MH12XY1234</p>
          </div>
          <div class="detail-row">
            <p class="">Vehicle Make:</p>
            <p class="">Toyota Fortuner</p>
          </div>

          <!-- Driver Details -->
          <div class="mt-3">
            <h5 class="card-title mb-0">Driver Details</h5>
            <div class="detail-row">
              <div>
                <p>Name:</p>
              </div>
              <div>
                <p>John Doe</p>
              </div>
            </div>
            <div class="detail-row">
              <div>
                <p>Contact No:</p>
              </div>
              <div>
                <p>+91 9876543210</p>
              </div>
            </div>
            <div class="detail-row">
              <div>
                <p class="otp-info">OTP: 123456</p>
                <p class="small-text">Share only if car details match</p>
              </div>
              <div class="d-md-flex justify-content-end">
                <button class="btn btn-primary btn-custom btn-sm">
                  Call Driver
                </button>
                <button class="btn btn-secondary btn-sm">Track Ride</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card" id="trip-card">
      <div class="card-body">
        <!-- Location Details -->
        <div class="d-flex align-items-center">
          <h5 class="card-title">Trip Details</h5>
          <span class="badge badge-status badge-cancelled mx-3">cancelled</span>
        </div>
        <div class="from-to">
          <div class="detail-row">
            <div>
              <h5 class="mb-0">From:</h5>
              <p class="small mb-0">
                Address 1, xyz street, abc town, pqr district.
              </p>
            </div>
            <div>
              <h5>25/09/2024</h5>
            </div>
          </div>
          <div class="detail-row">
            <div>
              <h5 class="mb-0">To:</h5>
              <p class="small mb-0">
                Address 2, mno street, bvc town, mnb district.
              </p>
            </div>
            <div>
              <h5>26/09/2024</h5>
            </div>
          </div>
        </div>

        <!-- Extra Details Hidden Initially -->
        <div class="extra-details">
          <div class="detail-row">
            <div>
              <h5 class="mb-0">Duration:</h5>
              <p class="small mb-0">
                Don't let the fun stop, extend as long as you like.
              </p>
            </div>
            <div>
              <h5>03 Days</h5>
            </div>
          </div>
          <div class="detail-row">
            <div>
              <h5 class="mb-0">Departure Time:</h5>
              <p class="small mb-0">Trip starts at the specified time.</p>
            </div>
            <div>
              <h5>10:00 AM</h5>
            </div>
          </div>

          <!-- Car Details -->
          <h5 class="card-title mb-0">Car Details</h5>
          <div class="detail-row">
            <p class="mb-0">Class:</p>
            <p class="mb-0">SUV</p>
          </div>
          <div class="detail-row">
            <p class="mb-0">Fuel Type:</p>
            <p class="mb-0">Diesel</p>
          </div>
          <div class="detail-row">
            <p>Vehicle No:</p>
            <p>MH12XY1234</p>
          </div>
          <div class="detail-row">
            <p class="">Vehicle Make:</p>
            <p class="">Toyota Fortuner</p>
          </div>

          <!-- Driver Details -->
          <div class="mt-3">
            <h5 class="card-title mb-0">Driver Details</h5>
            <div class="detail-row">
              <div>
                <p>Name:</p>
              </div>
              <div>
                <p>John Doe</p>
              </div>
            </div>
            <div class="detail-row">
              <div>
                <p>Contact No:</p>
              </div>
              <div>
                <p>+91 9876543210</p>
              </div>
            </div>
            <div class="detail-row">
              <div>
                <p class="otp-info">OTP: 123456</p>
                <p class="small-text">Share only if car details match</p>
              </div>
              <div class="d-md-flex justify-content-end">
                <button class="btn btn-primary btn-custom btn-sm">
                  Call Driver
                </button>
                <button class="btn btn-secondary btn-sm">Track Ride</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
  @section('inline-js')
  <script>
    // Loop through each card and add event listener for toggle
    document.querySelectorAll(".card").forEach(function(card) {
      card.addEventListener("click", function() {
        const extraDetails = card.querySelector(".extra-details");
        extraDetails.style.display =
          extraDetails.style.display === "none" ||
          extraDetails.style.display === "" ?
          "block" :
          "none";
      });
    });
  </script>
<<<<<<< HEAD
  @endsection
=======
  @endsection
>>>>>>> profile-page-add
