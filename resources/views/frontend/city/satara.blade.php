@extends('frontend-layout.app')
@section('title', 'Satara - page')
@section('inline-css')
    <style>
        .hero-section {
            background-image: url("{{asset('new-layouts/assets/image/city-img/satara-page.webp')}}");
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
                        <h1>Discover Satara, <br> The Heart of Maharashtra </h1>
                        <p>Bhurr - From Dream To Destination</p>
                        <button class="common__btn px-5 py-3">Book
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section mt-md-5 mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <p class="text-justify">
                        Nestled in the scenic Western Ghats, Satara is a
                        city that beautifully blends history, culture, and
                        natural beauty. Known for its majestic forts, lush
                        landscapes, and vibrant festivals, Satara offers
                        visitors a rich experience that reflects the true
                        essence of Maharashtra. Whether you’re looking for
                        historical sites or breathtaking views, Bhurr is
                        here to take you on a memorable journey through
                        Satara.
                    </p>
                    <h2>Must-Visit Places in Satara</h2>
                    <ol class="text-justify">
                        <li>
                            <b>Kaas Plateau :</b> A UNESCO World Heritage
                            Site, the <b>Kaas Plateau</b> is famous for its
                            stunning wildflower blooms, especially during
                            the monsoon season. This biodiversity hotspot is
                            perfect for nature lovers and photographers
                            looking to capture the vibrant colors of the
                            plateau.
                        </li>
                        <li>
                            <b>Ajinkyatara Fort :</b> Perched atop a hill,
                            <b>Ajinkyatara Fort</b> offers panoramic views
                            of
                            Satara and the surrounding region. This historic
                            fort has a rich legacy and is an ideal spot for
                            trekking enthusiasts seeking adventure.
                        </li>
                        <li>
                            <b>Khanderao Market :</b> Experience the local
                            culture at <b>Khanderao Market</b>, where you
                            can shop
                            for fresh produce, spices, and handicrafts. It’s
                            the perfect place to immerse yourself in the
                            flavors and colors of Satara.
                        </li>
                        <li>
                            <b>Thoseghar Waterfalls :</b> Located about 20
                            km from Satara, the <b>Thoseghar Waterfalls</b>
                            are a
                            spectacular sight, especially during the monsoon
                            season. The cascading waterfalls surrounded by
                            lush greenery create a serene atmosphere,
                            perfect for a day trip.
                        </li>
                        <li>
                            <b>Narayangad Fort :</b> An off-the-beaten-path
                            gem, <b>Narayangad Fort</b> is a must-visit for
                            history
                            buffs. This fort offers a glimpse into the
                            region's past and stunning views of the Sahyadri
                            mountains.
                        </li>
                        <li>
                            <b>Shivaji Maharaj Museum :</b> Dive into the
                            history of Maratha warrior king <b>Chhatrapati
                                Shivaji Maharaj</b> at this museum, which
                            features
                            artifacts, weapons, and exhibits detailing the
                            Maratha Empire’s rich heritage.
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
                    <h2>Popular Weekend Getaways from Satara</h2>
                    <p class="text-justify">
                        If you’re looking to explore beyond Satara, several
                        beautiful destinations nearby are perfect for a
                        weekend getaway.
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Mahabaleshwar (60 km from Satara) :</b>
                            Known for its cool climate and lush
                            greenery, Mahabaleshwar is a popular hill
                            station that offers stunning viewpoints like
                            <b>Arthur's Seat</b> and <b>Venna Lake</b>.
                            Enjoy boating,
                            trekking, and indulging in the famous
                            strawberries of the region.
                        </li>
                        <li>
                            <b>Panchgani (50 km from Satara) :</b>
                            Just a short drive from Mahabaleshwar,
                            <b>Panchgani</b> is another beautiful hill
                            station
                            famous for its tableland, offering
                            breathtaking views of the surrounding hills
                            and valleys. Visit <b>Table Land</b> and
                            enjoy
                            various outdoor activities like paragliding.
                        </li>
                        <li>
                            <b>Bamnoli Lake (25 km from Satara) :</b>
                            A hidden gem, <b>Bamnoli Lake</b> is perfect
                            for a
                            peaceful retreat. Enjoy boating and scenic
                            views of the hills, making it a great spot
                            for a quiet day out in nature.

                        </li>
                        <li>
                            <b>Raigad Fort (115 km from Satara) :</b>
                            Explore the historical significance of
                            <b>Raigad Fort</b>, once the capital of
                            Chhatrapati
                            Shivaji Maharaj. The fort offers stunning
                            views and a glimpse into the Maratha
                            Empire's glorious past.

                        </li>
                        <li>
                            <b>Aundh (30 km from Satara) :</b>
                            Known for the <b>Aundh Palace</b>, this
                            small town
                            offers a blend of history and culture. The
                            palace features beautiful architecture and
                            is home to a museum that showcases various
                            artifacts.

                        </li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>Ride with Bhurr - Your Reliable Travel Companion in
                        Satara</h2>
                    <p class="text-justify">
                        Choosing Bhurr for your travel needs in Satara
                        ensures a comfortable and affordable experience.
                        Whether you’re visiting local attractions or
                        planning a trip to nearby destinations, Bhurr is
                        here to make your journey enjoyable and stress-free.
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Competitive Pricing :</b>
                            Enjoy transparent pricing with no hidden
                            charges. Travel affordably across Satara.
                        </li>
                        <li>
                            <b>Easy Booking :</b>
                            Use the Bhurr app to book your ride quickly
                            and conveniently. Available for both Android
                            and iOS devices.
                        </li>
                        <li>
                            <b>Safety First :</b>
                            Our drivers are thoroughly vetted to ensure
                            your safety during every ride.

                        </li>
                        <li>
                            <b>Comfortable Rides :</b>
                            Travel in clean, well-maintained vehicles
                            that provide a comfortable experience for
                            all passengers.

                        </li>
                        <li>
                            <b>Flexible Options :</b>
                            Whether you're traveling alone, with family,
                            or in a group, Bhurr accommodates all your
                            travel needs.

                        </li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose bhurr -->
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>Why Choose Bhurr in Satara?</h2>
                    <p class="text-justify">
                        Traveling around Satara is made easy and affordable
                        with Bhurr! Our ride-sharing service ensures you can
                        explore the city’s attractions and nearby
                        destinations with comfort and convenience. With just
                        a few taps on your phone, Bhurr can take you
                        anywhere you want to go.
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
                    <h2>Download the Bhurr App Now and Start Your Satara
                        Adventure!</h2>
                    <p class="text-justify">
                        Ready to explore the beauty and history of Satara?
                        Download the Bhurr app today and enjoy seamless
                        travel experiences. Whether you're planning to visit
                        historical sites, enjoy nature, or take weekend
                        trips, Bhurr is your go-to travel partner.
                    </p>
                </div>
            </div>
        </div>
    </section>

    

  @endsection
  @section('inline-js')
  @endsection