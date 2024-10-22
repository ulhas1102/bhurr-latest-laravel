@extends('frontend-layout.app')
@section('title', 'Ahmednagar - page')
@section('inline-css')

  <style>
    .hero-section {
      background-image: url("{{asset('new-layouts/assets/image/city-img/ahmednagar-page.webp')}}");
      background-size: cover;
      background-position: center;
      height: 80vh;
      color: white;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .hero-section::before {
      position: absolute;
      content: " ";
      width: 100%;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: #0101018a;
    }
  </style>
</head>
<body class="driver__page__container">
  @endsection

  @section('content')
 

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container my-md-5 my-3">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div>
            <h1>Discover Ahmednagar, <br> A City Rich in History and Culture</h1>
            <p>Bhurr - From Dream To Destination</p>

            <button class="common__btn px-5 py-3">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Content Section -->
  <section class="content-section pt-md-5 pt-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <p class="text-justify">
            Ahmednagar, located in the heart of Maharashtra, is a city with a
            rich historical legacy, known for its remarkable forts, beautiful
            gardens, and vibrant culture. Whether you're a history buff, a
            nature lover, or someone seeking a peaceful getaway, Ahmednagar
            has something special to offer. With Bhurr, you can easily explore
            the city's attractions and nearby destinations.
          </p>
          <h2>Must-Visit Places in Ahmednagar</h2>
          <ol class="text-justify">
            <li>
              <b>Ahmednagar Fort :</b> Built in the 15th century, Ahmednagar
              Fort is a historical marvel surrounded by massive walls and
              several gates. The fort holds significant historical importance
              and offers breathtaking views of the city. Don’t miss exploring
              its ancient architecture and the museum inside.
            </li>
            <li>
              <b>Jain Temple :</b> The intricately carved Jain Temple in
              Ahmednagar is a stunning example of architectural brilliance.
              Dedicated to <b>Lord Adinath</b>, this temple is known for its
              beautiful marble work and peaceful ambiance, making it a great
              place for reflection.
            </li>
            <li>
              <b>Nagar Killa (Nagar Fort) :</b> Another significant fort in
              Ahmednagar, Nagar Killa, offers a glimpse into the city’s
              historical significance. The fort’s massive walls, bastions, and
              ruins tell stories of the past and provide excellent views of
              the surrounding area.
            </li>
            <li>
              <b>Shri Sai Baba Temple :</b> Located near the fort, this temple
              is dedicated to the revered saint Sai Baba. It attracts devotees
              from all over and is a serene place for meditation and prayer.
            </li>
            <li>
              <b>Gurudwara Bhai Daya Singh Ji :</b> This beautiful Gurudwara
              is a symbol of peace and harmony. The architecture is
              impressive, and the atmosphere is tranquil, making it a perfect
              spot to unwind and reflect.
            </li>
            <li>
              <b>Siddharth Garden :</b> A perfect spot for families and nature
              lovers, Siddharth Garden features lush green lawns, flowering
              plants, and a serene lake. It’s a great place for picnics,
              leisurely strolls, and enjoying the outdoors.
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Fare Section -->
  <section class="content-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h2>Exciting Weekend Getaways from Ahmednagar</h2>
          <p class="text-justify">
            Looking to escape the city? Ahmednagar is conveniently located
            near several picturesque destinations that are perfect for a
            weekend retreat.
          </p>
          <ol class="text-justify">
            <li>
              <b>Bhandardara (85 km from Ahmednagar) :</b>
              Nestled in the Western Ghats, Bhandardara is famous for its
              tranquil lakes, lush greenery, and beautiful waterfalls. Visit
              <b>Arthur Lake, Randha Falls</b>, and trek up to
              <b>Mount Kalsubai</b>, the highest peak in Maharashtra, for a
              refreshing getaway.
            </li>
            <li>
              <b>Ajanta Caves (110 km from Ahmednagar) :</b>
              A UNESCO World Heritage Site, the Ajanta Caves are renowned for
              their stunning rock-cut Buddhist caves adorned with intricate
              paintings and sculptures. A visit here is like stepping back in
              time to ancient India.
            </li>
            <li>
              <b>Ellora Caves (105 km from Ahmednagar) :</b>
              Another UNESCO World Heritage Site, Ellora Caves showcases an
              exquisite blend of Buddhist, Hindu, and Jain architecture.
              Explore these remarkable rock-cut caves, each telling a unique
              story through its artistry.
            </li>
            <li>
              <b>Shirdi (83 km from Ahmednagar) :</b>
              Shirdi is a major pilgrimage site dedicated to <b>Sai Baba</b>.
              With its tranquil atmosphere and spiritual significance, it
              attracts millions of devotees. Bhurr provides convenient rides
              to Shirdi for a fulfilling spiritual experience.
            </li>
            <li>
              <b>Panchgani (130 km from Ahmednagar) :</b>
              A charming hill station, Panchgani is famous for its stunning
              viewpoints, lush green hills, and pleasant weather. Enjoy a
              peaceful retreat, explore the local markets, and indulge in
              strawberry picking during the season.
            </li>
            <li>
              <b>Malshej Ghat (120 km from Ahmednagar) :</b>
              A scenic mountain pass, Malshej Ghat is known for its
              breathtaking landscapes, waterfalls, and rich biodiversity. It’s
              an ideal destination for trekking and nature photography,
              especially during the monsoon.
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs Section -->
  <section class="content-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h2>
            Ride with Bhurr - Your Reliable Travel Companion in Ahmednagar
          </h2>
          <p class="text-justify">
            Choosing Bhurr means choosing convenience, safety, and
            affordability. Whether you're exploring the city or heading out
            for a weekend getaway, we’re here to make your travel experience
            smooth and enjoyable.
          </p>
          <ol class="text-justify">
            <li>
              <b>Affordable Pricing :</b>
              Travel at competitive rates with no hidden charges.
            </li>
            <li>
              <b>Quick & Easy Booking :</b>
              Use the Bhurr app for fast ride bookings—available on Android
              and iOS.
            </li>
            <li>
              <b>Safe and Secure Rides :</b>
              Our drivers are thoroughly vetted to ensure your safety while
              traveling.
            </li>
            <li>
              <b>Comfortable Vehicles :</b>
              Enjoy clean and well-maintained vehicles for a pleasant ride.
            </li>
            <li>
              <b>Flexible Options :</b>
              Whether you need a solo ride or a group vehicle, Bhurr caters to
              all your travel needs.
            </li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose bhurr -->
  <section class="content-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h2>Why Choose Bhurr in Ahmednagar?</h2>
          <p class="text-justify">
            Traveling in Ahmednagar is effortless with Bhurr! Our reliable
            ride-sharing service ensures that you can navigate the city
            comfortably and safely. Enjoy the convenience of booking your ride
            and exploring everything Ahmednagar has to offer without the
            hassle of transportation.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Downlode Bhurr -->
  <section class="content-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h2>Download the Bhurr App Now and Explore Ahmednagar!</h2>
          <p class="text-justify">
            Ready to uncover the historical and cultural treasures of
            Ahmednagar? Download the Bhurr app today and experience seamless
            travel at your fingertips. Whether you’re visiting local
            attractions or planning a getaway, Bhurr is your trusted partner
            on every journey.
          </p>
        </div>
      </div>
    </div>
  </section>

 @endsection
 @section('inline-js')
 @endsection