@extends('frontend-layout.app')
@section('title', 'Mumbai - page')
@section('inline-css')

  <style>
    .hero-section {
      background-image: url("{{asset('new-layouts/assets/image/city-img/mumbai-page.webp')}}");
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
            <h1>Discover Mumbai, <br> The City That Never Sleeps</h1>
            <p>Bhurr - From Dream To Destination</p>
            <button class="common__btn px-5 py-3">Book Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Content Section -->
  <section class=" content-section mt-md-5 mt-3">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <p class="text-justify">
            Mumbai, often referred to as the <b>City of Dreams</b>, is the
            beating heart of India. A city that dazzles with its energy,
            history, and cultural diversity, Mumbai is where tradition meets
            urban modernity. From iconic landmarks to hidden gems, Bhurr makes
            it easy to explore everything this megacity has to offer. Whether
            you’re a local or a tourist, Bhurr is your trusted travel
            companion in Mumbai.
          </p>
          <h2>Mumbai - A Melting Pot of Cultures and Experiences</h2>
          <p>
            There’s no shortage of iconic spots to visit in Mumbai. From
            colonial architecture to stunning beaches, this city has something
            for everyone.
          </p>
          <ol class="text-justify">
            <li>
              <b>Marine Drive :</b> Also known as the <b>Queen’s Necklace</b>,
              this beautiful promenade stretches along the Arabian Sea. It's
              the perfect spot for an evening stroll, with stunning views of
              the sunset and the city’s glittering skyline.
            </li>
            <li>
              <b>Chhatrapati Shivaji Maharaj Terminus (CST) :</b> A UNESCO
              World Heritage Site, CST is a stunning example of Victorian
              Gothic architecture. It’s not just a train station but a symbol
              of Mumbai's colonial past and bustling present.
            </li>
            <li>
              <b>Siddhivinayak Temple :</b> This temple is one of Mumbai’s
              most famous and sacred places, dedicated to Lord Ganesha.
              Thousands of devotees visit each day to seek blessings for
              success and prosperity.
            </li>
            <li>
              <b>Colaba Causeway :</b> If you love shopping, Colaba Causeway
              is your go-to spot. From trendy clothing to handmade jewelry and
              souvenirs, this vibrant street market offers it all.
            </li>
            <li>
              <b>Juhu Beach :</b> One of the most popular beaches in Mumbai,
              Juhu is the perfect place to relax, watch the sunset, and
              indulge in some local street food like <b>pav bhaji</b> and
              <b>vada pav</b>.
            </li>
            <li>
              <b>Bandra-Worli Sea Link :</b> This architectural marvel
              connects the western suburbs to South Mumbai. Whether driving
              across it or gazing from afar, the Sea Link is a symbol of
              Mumbai's modernity.
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
          <h2>Weekend Getaways from Mumbai</h2>
          <p class="text-justify">
            Want to escape the city's hustle and bustle? Bhurr has you covered
            with safe and comfortable rides to these popular weekend getaways:
          </p>

          <ol class="text-justify">
            <li>
              <b>Lonavala & Khandala (83 km from Mumbai) :</b>
              Nestled in the Western Ghats, these twin hill stations are known
              for their lush greenery, misty mountains, and serene lakes.
              Visit the <b>Karla Caves, Bhushi Dam,</b>
              and
              <b>Tiger’s Leap</b> for a refreshing retreat, especially during
              the monsoon.
            </li>
            <li>
              <b>Alibaug (95 km from Mumbai) :</b>
              A favorite beach destination, Alibaug is known for its tranquil
              beaches and historic forts like <b>Kolaba Fort</b>. It’s perfect
              for a relaxing weekend by the sea or enjoying water sports like
              jet skiing and parasailing.
            </li>
            <li>
              <b>Matheran (80 km from Mumbai) :</b>
              This quaint hill station is Asia’s only automobile-free zone,
              offering peace and serenity. Explore the scenic trails, visit
              <b>Panorama Point</b> for a 360-degree view, and enjoy the fresh
              mountain air.
            </li>
            <li>
              <b>Mahabaleshwar (230 km from Mumbai) :</b>
              Known for its strawberry farms, Mahabaleshwar is a picturesque
              hill station offering stunning viewpoints like
              <b>Arthur’s Seat</b> and <b>Elephant’s Head Point</b>. Don’t
              forget to visit the <b>Pratapgad Fort</b> and indulge in fresh
              strawberries with cream.
            </li>
            <li>
              <b>Nashik (165 km from Mumbai) :</b>
              Famous for its vineyards and wineries, Nashik is also a sacred
              city on the banks of the Godavari River. Tour the famous
              <b>Sula Vineyards</b>, or visit the <b>Trimbakeshwar Temple</b>,
              one of the 12 Jyotirlingas in India.
            </li>
            <li>
              <b>Imagicaa (70 km from Mumbai) :</b>
              Looking for some adventure? Imagicaa is India’s premier theme
              park, offering thrilling rides, water slides, and entertainment
              shows. It’s a great option for a fun-filled family day out.
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
          <h2>Ride with Bhurr - Your Travel Partner in Mumbai</h2>
          <p class="text-justify">
            Why travel any other way when Bhurr is here to provide you with a
            comfortable, hassle-free experience? With Bhurr, you get more than
            just a ride—you get convenience, safety, and affordability, all at
            the tap of a button.
          </p>
          <ol class="text-justify">
            <li>
              <b>Affordable Pricing :</b>
              Competitive rates with no hidden charges. Get more value for
              your money.
            </li>
            <li>
              <b>Convenient App :</b>
              Book rides in a few seconds using the Bhurr app, available on
              both Android and iOS.
            </li>
            <li>
              <b>Reliable & Safe :</b>
              Travel with peace of mind knowing that our experienced drivers
              are trained to prioritize your safety.
            </li>
            <li>
              <b>Comfort & Cleanliness :</b>
              Enjoy a comfortable ride with clean and well-maintained
              vehicles, perfect for city or intercity trips.
            </li>
            <li>
              <b>Flexibility:</b>
              Whether it’s a short trip across the city or a long drive to a
              weekend getaway, Bhurr offers rides for every need.
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
          <h2>Why Choose Bhurr in Mumbai?</h2>
          <p class="text-justify">
            With Bhurr, traveling in Mumbai is a breeze! Avoid the traffic
            jams, the parking stress, and the hassle of public transport by
            booking a ride with Bhurr. Our safe, affordable, and reliable
            ride-sharing service ensures that you explore Mumbai in comfort.
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
          <h2>Download the Bhurr App Now and Start Your Mumbai Journey!</h2>
          <p class="text-justify">
            Ready to explore Mumbai and its surrounding beauty? Download the
            Bhurr app today and book a ride in just a few clicks. Whether
            you're commuting through the city, visiting local attractions, or
            heading for a weekend getaway, Bhurr is here to make your travel
            experience smooth and stress-free.
          </p>
        </div>
      </div>
    </div>
  </section>
 @endsection
 
 @section('inline-js')
 @endsection
