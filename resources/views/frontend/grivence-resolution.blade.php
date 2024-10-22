@extends('frontend-layout.app')
@section('title', 'grivence resolution - page')
@section('inline-css')
<style>
  .grivence-resolution .header-section {
    padding: 30px 0;
    text-align: center;
    background-image: url("{{asset('new-layouts/assets/image/bg/hero__banner9.webp')}}");
    background-size: cover;
    background-position: center;
    height: 500px;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #fff;
  }

  .grivence-resolution .header-section h1 {
    font-weight: 700;
  }

  .grivence-resolution .content-section {
    padding: 20px 0;
  }

  .grivence-resolution .content-section ul li::marker {
    content: "→";
    color: #ed0707;
    font-size: 20px;
    padding-right: 10px;
  }

  .grivence-resolution .content-section h2 {
    font-weight: 700;
    margin-bottom: 20px;
  }

  .grivence-resolution .contact-section {
    background: #f2f3f4;
    /* color: #fff; */
    padding: 20px;
    text-align: center;
  }

  .grivence-resolution .contact-section h3 {
    margin-bottom: 15px;
  }

  .grivence-resolution .Our__Resolution__Process ol li {
    list-style-type: none;
    counter-increment: num;
    margin-bottom: 0.25rem;
    line-height: 1.25;
  }

  .grivence-resolution .Our__Resolution__Process ol li::before {
    content: counter(num);
    display: inline-block;
    width: 1.25rem;
    height: 1.25rem;
    font-size: 0.75rem;
    line-height: 1.75;
    text-align: center;
    color: #ddd;
    background: #ed0707;
    border-radius: 50%;
    margin: 5px;
  }
</style>
</head>

<body class="grivence-resolution">
  @endsection

  @section('content')
  <!-- Header Section -->
  <section class="header-section">
    <div class="container">
      <h1>Grievance Resolution</h1>
      <p>
        At Bhurr, we are committed to providing excellent service. If you have
        any concerns or grievances, we’re here to help. Your feedback is
        important to us, and we aim to resolve issues promptly and
        effectively.
      </p>
    </div>
  </section>

  <!-- How to Submit a Grievance Section -->
  <section class="content-section py-md-3 py-3">
    <div class="container">
      <h2 class="text-center">Submit a Grievance</h2>
      <div class="row">
        <div class="col-md-12 mb-4">
          <!-- conatct us from -->
          <div class="container-fluid py-md-3 py-3">
            <div class="container">


              <!-- Row for images and headings (one line layout) -->
              <div class="row text-center justify-content-around align-items-center">
                <div class="col-md-10 passenger__details__container" style="background-color: transparent;">
                  <form action="{{ route('store.grivence.resolution') }}" method="POST">
                    @csrf
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
                    <div class="row justify-content-md-between d-flex">
                      <!-- Your Name -->
                      <div class="col-md-6 form-group">
                        <input
                          type="text"
                          class="form-control input"
                          id="yourName"
                          name="name"
                          required />
                        <label for="yourName" class="user__label">Your Name *</label>
                      </div>

                      <!-- Email Address -->
                      <div class="col-md-6 form-group">
                        <input
                          type="email"
                          class="form-control input"
                          id="email"
                          name="email"
                          required />
                        <label for="email" class="user__label">Email Address</label>
                      </div>

                      <!-- Contact Number -->
                      <div class="col-md-6 form-group">
                        <input
                          type="tel"
                          class="form-control input"
                          id="contact"
                          name="mobile_no"
                          required />
                        <label for="contact" class="user__label">Contact Number *</label>
                      </div>
                      <!-- Date of Incident -->
                      <div class="col-md-6 form-group">
                        <input
                          type="date"
                          class="form-control input"
                          id="dateOfIncident"
                          name="incident_date"
                          required />
                        <label for="dateOfIncident" class="user__label">Date of Incident</label>
                      </div>
                      <!-- Location of Incident -->
                      <div class="col-md-12 form-group">
                        <input
                          type="text"
                          class="form-control input"
                          id="locationOfIncident"
                          name="incident_location"
                          required />
                        <label for="locationOfIncident" class="user__label">Location of Incident</label>
                      </div>
                      <!-- Location of Incident -->
                      <div class="col-md-12 form-group">
                        <textarea class="form-control" id="issueDescription" rows="3" name="description"
                          placeholder="Description of the Issue" required></textarea>
                        <label for="" class="user__label">Description</label>
                      </div>
                      <!-- Trip & Driver Details -->
                      <div class="col-md-12 form-group">
                        <textarea
                          class="form-control input"
                          id="tripDetails"
                          name="trip_details"
                          rows="3"
                          required></textarea>
                        <label for="tripDetails" class="user__label">Trip & Driver Details</label>
                      </div>

                      <!-- Continue Button -->
                      <div class="col-md-12 form-group">
                        <div class="row justify-content-center">
                          <div class="col-md-6">
                            <button
                              type="submit"
                              class="btn common__btn btn-block">
                              Continue
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- contact form end -->
        </div>
      </div>

    </div>
  </section>

  <!-- Our Resolution Process Section -->
  <section
    class="content-section bg-light Our__Resolution__Process py-md-5 py-3">
    <div class="container">
      <h2>Our Resolution Process</h2>
      <ol class=" " style="padding-inline-start: 5px">
        <li>
          <strong>Acknowledgment:</strong> We will acknowledge your grievance
          within 24 hours of receipt.
        </li>
        <li>
          <strong>Investigation:</strong> Our team will investigate the issue
          thoroughly.
        </li>
        <li>
          <strong>Resolution:</strong> We aim to resolve the grievance within
          5-7 business days. We will communicate our findings and any actions
          taken.
        </li>
        <li>
          <strong>Follow-Up:</strong> We will follow up to ensure your
          satisfaction with the resolution.
        </li>
      </ol>
    </div>
  </section>

  <!-- Commitment to Improvement Section -->
 

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <h3>Contact Us</h3>
      <div class="d-flex justify-content-center">
        <p class="px-md-5">
          <strong>Phone:</strong><a href="tel:+7756956987"> 7756956987</a>
        </p>
        <p class="px-md-5">
          <strong>Email:</strong><a href="mailto:admin@bhurr.co.in">admin@bhurr.co.in</a>
        </p>
      </div>
    </div>
  </section>

  @endsection