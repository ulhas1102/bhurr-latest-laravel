@extends('frontend-layout.app')
@section('title', 'FAQ - page')
@section('inline-css')
  <style>
    img {
      max-width: 100%;
      height: auto;
      border-radius: 0.5rem;
    }

    .accordion__item:not(:last-child) {
      border-bottom: 1px solid lightgrey;
    }

    .accordion__btn__faq {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      padding: 1.2rem 1.4rem;
      background: white;
      border: none;
      outline: none;
      color: var(--color-text);
      font-size: 1.2rem;
      text-align: left;
      cursor: pointer;
      transition: 0.1s;
    }

    .accordion__btn__faq:hover {
      color: var(--color-purple);
      background: hsl(248, 53%, 97%);
    }

    .accordion__item--active .accordion__btn__faq {
      color: var(--color-purple);
      border-bottom: 2px solid var(--color-purple);
      background: hsl(248, 53%, 97%);
    }

    .accordion__icon {
      border-radius: 50%;
      transform: rotate(0deg);
      transition: 0.3s ease-in-out;
      opacity: 0.9;
    }

    .accordion__item--active .accordion__icon {
      transform: rotate(135deg);
    }

    .accordion__content {
      font-weight: 300;
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      color: var(--color-text-muted);
      transform: translateX(16px);
      transition: max-height 0.5s ease, opacity 0.5s, transform 0.5s;
    }

    .accordion__content p {
      padding: 1rem 1.8rem;
    }

    .accordion__item--active .accordion__content {
      opacity: 1;
      transform: translateX(0px);
      max-height: 100vh;
    }

    .accordion__btn__faq:focus {
      outline: none;
      box-shadow: none;
    }

    /* Mobile View Adjustments */
    @media (max-width: 768px) {
      .row.bg-light.shadow.p-5 {
        padding: 1.5rem;
      }

      .accordion__btn__faq {
        font-size: 1rem;
      }

      .accordion__content p {
        padding: 0.8rem 1.2rem;
      }
    }
  </style>
</head>

<body class="driver__page__container">
  @endsection
  @section('content')
  <section>
    <div class="container py-md-5 py-3">
      <div class="row">
        <h2 class="text-center w-100">FAQ | Frequently Asked Questions</h2>
      </div>

      <!-- Row for Image and FAQ -->
      <div class="row p-md-5 p-3 justify-content-center">
        <!-- Right Column for FAQ -->
        <div class="col-12 text-justify">
          <div class="accordion__faq bg-white rounded shadow-0">
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">Can I get a specific
                  car?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>
                  All services are based on availability still please make a
                  request to our team and if available we’ll provide you with
                  a car of your choice from the same class in which you
                  booked.
                </p>
              </div>
            </div>

            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">How is the base fare
                  calculated?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>We calculate base fare as x₹ per km multiplied by 300
                  (daily minimum distance in kms).</p>
              </div>
            </div>

            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">Is extra kilometre rate
                  different from base fare?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>No we offer flat rates, and they don’t change for the
                  duration of your booking.</p>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">What is estimated fare and
                  final bill?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>Estimate fare includes daily fare and estimated toll and
                  state taxes. No additional services or extras are
                  included.</p>
                <p>The final bill consists of base fare, extra kilometres,
                  night driving charges, extra hours (for local bookings only)
                  actual toll and state taxes, gst, cleaning or other charges,
                  parking charges and may contain any other charges incurred
                  during the trip. Don’t worry we’ll provide all the
                  receipts.</p>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">What are Bhurr’s bill
                  settlement policies?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p class="mb-0 py-0">We offer 3 classes for bookings, Bhurr premium, Bhurr
                  special and Bhurr Economy.</p>
                <ol>
                  <li>
                    <b>Bhurr premium –</b> You pay the estimated fare
                    upfront and the final bill at the end of your trip. No
                    hassle or calculations during the trip.
                  </li>
                  <li><b>Bhurr special –</b> You pay 50% of the estimated
                    fare upfront and you’ll pay as you go daily.</li>
                  <li><b>Bhurr economy –</b> You pay minimal 20% of the
                    estimated fare upfront and pay base fare upfront for
                    each day.</li>
                </ol>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">What happens if cab is late
                  or doesn’t show up?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>Don’t worry we personally follow up on each vehicle status
                  an hour ago before the trip starts and instruct them to
                  reach you on time. Additionally, we provide you with cab
                  tracking so you know exactly where your cab is. Rest assured
                  if all fails we’ll get you an alternate ride at no extra
                  cost and make your trip as pleasant as possible.</p>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">What is a day for fare calculations?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>A day is usually from midnight 12 to 12 midnight the following day.</p>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">What type of vehicles do you offer?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>We offer many classes of vehicles including hatchbacks, sedans, MPVs, MUVs, Business class vehicles, SUVs, VANs and more. If a specific class is not listed contact us we may provide it in some special cases.</p>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">What is Trip extend and when do I use it?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>You can extend your trip with the trip extend feature and keep your adventures going. You can use this feature before or during the trip but ideally 24 hours before the trip ends to avoid last minute inconveniences.</p>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">What is MyRoute-MyChoice?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>Bhurr understands that restrictions are unexciting, and we give you freedom to choose your routes to your destinations as long as they’re safe of course. Happy trails.</p>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">What safety measures does Bhurr have?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>We at Bhurr understand what safety means and we verify not only the driver but the vendor and vehicle documents comprehensively. Each driver and vendor requiring a police verification report to be able to serve you with clean criminal records for past 3 years. We also have access to live GPS during the trips. Still if there is any doubt call us or local authorities if there is even a slight suspicion.</p>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">How do I cancel my booking and are there any charges for cancellations?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>Cancellations are as easy and instant as bookings with Bhurr, at any time before the trip starts you have a cancel button in my trips section which will give you an option to instantly cancel the trip. For the cancellation charges see the cancellation policy.</p>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">I found a bug on the platform what to do?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>Don’t let it fly away, email us with screenshots, how and where you encountered it and steps to recreate. Our team may contact you and might get a little surprise.</p>
              </div>
            </div>
            <div class="accordion__item">
              <button class="accordion__btn__faq">
                <span class="accordion__caption">When will I receive booking conformation and vehicle/driver details?</span>
                <span class="accordion__icon"><i
                    class="fa fa-plus"></i></span>
              </button>
              <div class="accordion__content">
                <p>Your booking is confirmed after you pay the booking amount, we’ll provide you vehicle and driver details up to 30 minutes before departure time. Don’t worry the vehicle/driver will already be on their way before you receive details.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
	@endsection
	@section('inline-js')
 
  <script>
    // accordin
    // select all accordion items
    const accItems = document.querySelectorAll(".accordion__item");
    accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

    function toggleAcc() {
      accItems.forEach((item) =>
        item != this ? item.classList.remove("accordion__item--active") : null
      );
      if (this.classList != "accordion__item--active") {
        this.classList.toggle("accordion__item--active");
      }
    }
  </script>
@endsection