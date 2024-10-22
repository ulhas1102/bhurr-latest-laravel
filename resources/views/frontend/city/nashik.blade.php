@extends('frontend-layout.app')
@section('title', 'Nashik - page')
@section('inline-css')

  <style>
    .hero-section {
      background-image: url("{{asset('new-layouts/assets/image/city-img/nashik-page.webp')}}");
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
            <h1>Explore Nashik, <br> Where Heritage Meets Modernity</h1>
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
            Nashik, located on the banks of the Godavari River, is a city
            steeped in history, culture, and spirituality. Known for its
            religious significance and vineyards, Nashik is a diverse city
            offering something for everyone. Whether you’re on a spiritual
            pilgrimage or looking to explore the wine trails, Bhurr is here to
            take you around the city in comfort and style.
          </p>
          <h2>Must-Visit Places in Nashik</h2>
          <ol class="text-justify">
            <li>
              <b>Trimbakeshwar Temple :</b> One of the
              <b>12 Jyotirlingas</b> in India, Trimbakeshwar Temple is a
              must-visit for devotees of Lord Shiva. Located about 30 km from
              the city, this temple is also the source of the sacred Godavari
              River, making it a major pilgrimage site.
            </li>
            <li>
              <b>Sula Vineyards :</b> Known as India’s premier wine
              destination, Sula Vineyards offers guided tours, wine tastings,
              and stunning views of the lush vineyards. A visit to Sula is
              perfect for wine lovers looking to unwind and enjoy the
              beautiful surroundings.
            </li>
            <li>
              <b>Panchavati :</b> A sacred area in Nashik, Panchavati holds
              immense religious significance as it’s believed to be the place
              where Lord Rama, Sita, and Lakshman stayed during their exile.
              Don’t miss visiting Kalaram Temple and Sita Gufa for a spiritual
              experience.
            </li>
            <li>
              <b>Pandavleni Caves :</b> Dating back to the 1st century BC,
              these ancient rock-cut caves are a treasure trove of history and
              art. The caves are adorned with intricate carvings and serve as
              a reminder of Nashik's rich cultural past.
            </li>
            <li>
              <b>Ramkund :</b> Located on the banks of the Godavari River,
              Ramkund is a holy bathing ghat where pilgrims gather to take a
              dip and perform rituals. It’s also believed that Lord Rama
              bathed here during his time in Nashik.
            </li>
            <li>
              <b>Anjneri Hill:</b> An ideal spot for trekking enthusiasts,
              Anjneri Hill is believed to be the birthplace of Lord Hanuman.
              The serene surroundings and panoramic views make it a perfect
              escape for nature lovers.
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
          <h2>Popular Weekend Getaways from Nashik</h2>
          <p class="text-justify">
            If you’re looking for a short break from the city, Nashik is
            surrounded by stunning destinations that are perfect for a weekend
            getaway.
          </p>
          <ol class="text-justify">
            <li>
              <b>Bhandardara (70 km from Nashik) :</b>
              A hidden gem in the Sahyadri mountain range, Bhandardara is
              famous for its serene lakes, lush greenery, and picturesque
              waterfalls. Explore <b>Arthur Lake</b>, and the
              <b>Randha Falls</b>, and trek up to <b>Mount Kalsubai</b>, the
              highest peak in Maharashtra.
            </li>
            <li>
              <b>Saputara (80 km from Nashik) :</b>
              Located in Gujarat, Saputara is a beautiful hill station known
              for its cool climate, scenic viewpoints, and adventure
              activities. Enjoy boating at <b>Saputara Lake</b> or hike up to
              <b>Sunset Point</b> for breathtaking views.
            </li>
            <li>
              <b>Shirdi (85 km from Nashik) :</b>
              Shirdi is a major pilgrimage site and home to the revered
              <b>Sai Baba Temple</b>, attracting millions of devotees each
              year. Bhurr offers convenient rides to Shirdi for those seeking
              spiritual solace..
            </li>
            <li>
              <b>Igatpuri (45 km from Nashik) :</b>
              Nestled in the Western Ghats, Igatpuri is known for its misty
              mountains, trekking trails, and the famous
              <b>Vipassana International Academy</b>, a meditation retreat.
              It’s the perfect spot for a peaceful and relaxing weekend.
            </li>
            <li>
              <b>Malshej Ghat (110 km from Nashik) :</b>
              A stunning mountain pass in the Western Ghats, Malshej Ghat is
              known for its scenic beauty, especially during the monsoon. The
              area is rich in waterfalls, and greenery, and offers a chance to
              spot migratory flamingos.
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
          <h2>Ride with Bhurr - Your Reliable Travel Companion in Nashik</h2>
          <p class="text-justify">
            Why choose any other mode of transport when Bhurr makes traveling
            around Nashik easier than ever? Whether you’re visiting temples,
            and vineyards, or heading out of town for a weekend getaway, Bhurr
            is here to make your journey comfortable, safe, and affordable.
          </p>
          <ol class="text-justify">
            <li>
              <b>Affordable Rates :</b>
              Travel without breaking the bank. Enjoy transparent pricing and
              no hidden charges.
            </li>
            <li>
              <b>Easy Booking :</b>
              Use the Bhurr app to book your ride within seconds. Available
              for both Android and iOS devices.
            </li>
            <li>
              <b>Safety First :</b>
              All Bhurr drivers are background-checked, ensuring you have a
              safe and secure travel experience.
            </li>
            <li>
              <b>Comfortable Rides :</b>
              Our fleet of clean, air-conditioned vehicles is ready to take
              you wherever you need to go—whether it’s around Nashik or to
              nearby tourist spots.
            </li>
            <li>
              <b>Flexible Travel Options :</b>
              From solo trips to group rides, Bhurr provides options for all
              your travel needs.
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
          <h2>Why Choose Bhurr in Nashik?</h2>
          <p class="text-justify">
            With Bhurr, getting around Nashik is easy and affordable! Our
            ride-sharing service ensures that you can explore the city’s
            sacred temples, scenic vineyards, and nearby tourist destinations
            without any hassle. Book your ride with Bhurr for a smooth and
            safe journey wherever you go.
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
          <h2>Download the Bhurr App Now and Start Your Nashik Adventure!</h2>
          <p class="text-justify">
            Ready to explore Nashik and its surrounding wonders? Download the
            Bhurr app today and experience the convenience of seamless travel.
            Whether you’re planning a spiritual journey or a weekend escape,
            Bhurr is your go-to travel partner.
          </p>
        </div>
      </div>
    </div>
  </section>

 
  @endsection

  @section('inline-js')
  @endsection
