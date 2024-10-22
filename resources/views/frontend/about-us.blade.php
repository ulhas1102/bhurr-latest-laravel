@extends('frontend-layout.app')
@section('title', 'About Bhurr - Your Trusted Partner for Rideshare And Travel')
@section('description' , 'Learn about Bhurr, a reliable rideshare and outstation cab service offering affordable, safe, and convenient travel solutions for all your journeys.')
@section('inline-css')

<style>
	.call-to-action{
		  background: linear-gradient(
        to right,
        var(--primary-color),
        var(--heading-text-color)
    );
	}
	.aboutus-banner{
		background-image: url("{{asset('new-layouts/assets/image/search-bg/search-section-Background-Image.webp')}}");
	}
	.banner-text{
	z-index: 1;
	}
</style>
</head>
<body class="driver__page__container">
  @endsection

  @section('content')
  <section class="aboutus-banner">
    <div class="banner-text">
      <h1>About Us</h1>
      <p class="text-center">
        Welcome to Bhurr Technologies LLP, where innovation meets travel to
        redefine your booking experience.
      </p>
    </div>
  </section>
  <section class="py-md-5 py-3">
    <div class="container">
      <div class="row align-items-center">
        <!-- Left Column with Image -->


        <!-- Right Column with Text -->
        <div class="col-md-12">
          <p>“Bhurr”,” Ghumi Ghumi”, “Bhurte Jabo”, “Farva Jau”, “Ghumnu Jano”, “Ghuman Nu Janu” are the words said to us when we were young and our parents wanted to calm us. We were told that we’ll go out and enjoy later so relax, calm down and stop worrying. I’m sure most of us have heard one of these words and as time passed like most of our childhood, we forgot about this. As life continued some of us started to travel for work, some more than others, going city to city place to place work to work, while others of us are stuck in the concrete jungles working in a small cubicle.</p>

          <p>I was one of them working for a corporation long gone were the memories and forgotten were the feelings until one day when I was scrolling through reels and I saw a baby was being told those same things. I, feeling nostalgic started reminiscing about how my parents used to tell me the same things and how this is universal.</p>

          <p>So then, I thought there must be many who visit that magical someplace, but couldn’t find anyone in my circle which is pretty small not going to lie. They proudly told me that they follow some travel and food vloggers and get to know places they themselves can’t visit. Which in reality is sad and disappointing. Some due to not having sufficient time to pre-plan and book anything due to uncertainty of leaves, some due to not being able to afford the expenses, some due to bookings being so rigid that they missed a whole pre-paid trip.</p>

          <p>Then I did some research on how hard is it to travel and what makes it so expensive and there was no clear answer. The travel industry has very cunningly hidden everything from big corporations buying out cheaper competition to dividing and hiding additional costs which doesn’t even make sense. Fortunately, though I contacted my brother-in-law who owns two tourist vehicles and asked him why are the costs so high and he revealed they aren’t. At least from his side, as he revealed shocking numbers.</p>

          <p>There is no transparency in pricing everyone is just shown a price and told to pay everything in advance no matter how the service is after they get the money. No option to change a booking once done either miss it or get a negligible amount back. You can’t ask for changes either if something is not included it can’t be added later. I’m not even going to talk about customer support here.</p>

          <p>So finally, here we are starting a travel service, as someone who was a customer first trying to make travel easier. No big and mighty promises from our sides but we’re willing to listen and learn. Contact us or reach us with ideas, feature requests, suggestions, experiences, and anything else we’ll listen – especially complaints and our shortcomings so we can serve you better.</p>

        </div>
      </div>
    </div>
  </section>
  <section class="about-us bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-4">
          <h2>Services We Provide for Cab Booking</h2>
          <p class="lead w-75 d-md-block d-none mx-auto">
            From one-way trips to round trips and local travel, we offer
            convenient and reliable transportation options to meet your needs.
          </p>
        </div>
        <div class="col-md-4">
          <div class="service-card text-center p-4">
            <i class="fas fa-arrow-right fa-3x mb-3"></i>
            <h4>One Way Trips</h4>
            <p>
              Need to get from point A to point B? Our one-way cab services
              ensure a smooth ride to your destination.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card text-center p-4">
            <i class="fas fa-exchange-alt fa-3x mb-3"></i>
            <h4>Round Trips</h4>
            <p>
              Planning to travel to a destination and return on the same day?
              Our round-trip services are ideal for you.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card text-center p-4">
            <i class="fas fa-city fa-3x mb-3"></i>
            <h4>Local Trips</h4>
            <p>
              Whether it’s for errands or short trips around town, our local
              trip services offer the flexibility you need.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Optional: Add a call-to-action button -->
  <section class="call-to-action text-white py-md-5 py-3">
    <div class="container text-center">
      <h3>Book Your Ride Today!</h3>
      <p>
        Experience the best cab booking service in your city. Safe, reliable,
        and on-time rides, every time.
      </p>
      <a href="/" class="btn common__btn_two mt-3">Book Now</a>
    </div>
  </section>

  <section class="about-us-driver py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-4">
          <h2>Services We Provide for Driver Booking</h2>
          <p class="lead w-75 d-md-block d-none mx-auto">
            Whether you need a driver for local trips, long outstation
            journeys, or long-term contractual services, we have the perfect
            solution for all your driving needs.
          </p>
        </div>

        <!-- Local Rides -->
        <div class="col-md-4">
          <div class="service-card text-center p-4">
            <i class="fas fa-city fa-3x mb-3"></i>
            <h4>Local Driver Services</h4>
            <p>
              Hire professional drivers for your local trips across the city.
              Whether for daily commuting or occasional errands, we provide
              safe and reliable drivers to get you where you need to be.
            </p>
          </div>
        </div>

        <!-- Outstation Trips -->
        <div class="col-md-4">
          <div class="service-card text-center p-4">
            <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
            <h4>Outstation Driver Services</h4>
            <p>
              Planning a long drive out of town? Our experienced outstation
              drivers are available for smooth and stress-free journeys to
              your destination, ensuring your comfort and safety along the
              way.
            </p>
          </div>
        </div>

        <!-- Contractual Services -->
        <div class="col-md-4">
          <div class="service-card text-center p-4">
            <i class="fas fa-clipboard-list fa-3x mb-3"></i>
            <h4>Contractual Driver Services</h4>
            <p>
              For regular travel or long-term arrangements, our contractual
              driver services offer the flexibility you need. Hire a
              professional driver for consistent and ongoing service, tailored
              to your schedule.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white py-md-5 py-3">
    <div class="container text-center">
      <h3>Hire a Professional Driver Today!</h3>
      <p>
        Experience reliable, safe, and professional driving services. Book a
        driver for local, outstation, or contractual services at your
        convenience.
      </p>
      <a href="{{ url('driver') }}" class="btn common__btn_two btn-lg mt-3">Book Now</a>
    </div>
  </section>

  <!-- =========================================================================================== -->
  @endsection
  @section('inline-js')
  @endsection