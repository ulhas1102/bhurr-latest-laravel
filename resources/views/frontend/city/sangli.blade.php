@extends('frontend-layout.app')
@section('title', 'Pune - page')
@section('inline-css')
<style>
    .hero-section {
        background-image: url("{{asset('new-layouts/assets/image/city-img/sangali-page.webp')}}");
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
                        <h1>Discover Sangli, <br> The Land of Rich Culture and
                            History </h1>
                        <p>Bhurr - From Dream To Destination</p>
                        <button class="common__btn px-5 py-3">Book
                            Now</button>
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
                        Sangli, located in the western part of Maharashtra,
                        is known for its rich cultural heritage, lush
                        landscapes, and vibrant local markets. Often
                        referred to as the "Turmeric City," Sangli is a
                        blend of tradition and modernity, making it a
                        delightful destination for travelers. With Bhurr,
                        you can explore this beautiful city and its
                        surroundings conveniently and comfortably.
                    </p>
                    <h2>Must-Visit Places in Sangli</h2>
                    <ol class="text-justify">
                        <li>
                            <b>Sangli Fort :</b>
                            Built in the 17th century, Sangli Fort is an
                            architectural marvel that showcases the region's
                            historical significance. Explore its ancient
                            walls and enjoy panoramic views of the
                            surrounding landscape.
                        </li>
                        <li>
                            <b>Miraj :</b>
                            Just a short drive from Sangli, Miraj is famous
                            for its historical sites, including the <b>Miraj
                                Sangeet Vidyalaya</b>, which has produced
                            many
                            legendary musicians. Don’t miss the <b>Khandoba
                                Temple</b> for a spiritual experience.
                        </li>
                        <li>
                            <b>Islampur :</b> Known for its vibrant local
                            culture, Islampur is home to the <b>Maharashtra
                                Rajya Kshatriya Sangh</b>. Explore local
                            markets and
                            taste authentic Maharashtrian cuisine.
                        </li>
                        <li>
                            <b>Mahatma Gandhi Udyan :</b> This beautiful
                            park is an ideal spot for families and children.
                            With lush greenery, walking paths, and play
                            areas, it’s a great place to relax and enjoy
                            nature.
                        </li>
                        <li>
                            <b>Sangli Krishna River :</b> The Krishna
                            River flows through Sangli, providing scenic
                            views and opportunities for riverside picnics.
                            Enjoy a leisurely walk along the riverbanks and
                            take in the natural beauty.
                        </li>
                        <li>
                            <b>Narsobawadi :</b> Located about 20 km from
                            Sangli, Narsobawadi is a sacred pilgrimage site
                            known for the <b>Narsobawadi Dattatreya
                                Temple</b>. It
                            attracts devotees seeking blessings and
                            spiritual solace..
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
                    <h2>Popular Weekend Getaways from Sangli</h2>
                    <p class="text-justify">
                        Sangli is surrounded by numerous attractions that
                        make for perfect weekend getaways. Explore these
                        nearby destinations with Bhurr for a memorable
                        experience.
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Kolhapur (70 km from Sangli) :</b>
                            Famous for its rich heritage and the
                            <b>Mahalakshmi Temple</b>, Kolhapur is a
                            city that
                            showcases traditional Maharashtrian culture.
                            Explore the historic <b>Kolhapur Fort</b>
                            and
                            indulge in local delicacies like
                            <b>Kolhapuri
                                Misal</b>.
                        </li>
                        <li>
                            <b>Panhala (45 km from Sangli) :</b>
                            A beautiful hill station, Panhala is known
                            for its stunning landscapes and historical
                            significance. Visit the <b>Panhala Fort</b>
                            and
                            enjoy breathtaking views of the surrounding
                            hills.
                        </li>
                        <li>
                            <b>Ajra (40 km from Sangli) :</b>
                            Ajra is a quaint town famous for its scenic
                            beauty and temples. Explore the lush green
                            landscapes, and visit the <b>Ajra Fort</b>
                            for a
                            glimpse of history.

                        </li>
                        <li>
                            <b>Dajipur Wildlife Sanctuary (60 km from
                                Sangli) :</b>
                            A haven for nature lovers and wildlife
                            enthusiasts, Dajipur Wildlife Sanctuary is
                            home to diverse flora and fauna. Enjoy
                            trekking, birdwatching, and the serenity of
                            nature.

                        </li>
                        <li>
                            <b>Gaganbawda (45 km from Sangli) :</b>
                            Known for its picturesque views and pleasant
                            climate, Gaganbawda is a great spot for
                            trekking and picnics. Explore the lush green
                            hills and enjoy the fresh air.

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
                        Sangli </h2>
                    <p class="text-justify">
                        Why choose any other transport when Bhurr offers you
                        the best travel experience in Sangli? Whether you’re
                        visiting local attractions or heading to nearby
                        getaways, Bhurr ensures a comfortable and affordable
                        journey.
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Affordable Rates :</b>
                            Enjoy competitive pricing with no hidden
                            charges. Travel smart without overspending.
                        </li>
                        <li>
                            <b>Convenient App :</b>
                            Book rides easily through the Bhurr app,
                            available on Android and iOS.
                        </li>
                        <li>
                            <b>Safety First :</b>
                            All our drivers undergo thorough background
                            checks to ensure your safety on the road.

                        </li>
                        <li>
                            <b>Comfortable Rides :</b>
                            Experience clean, well-maintained vehicles
                            for a smooth ride around the city.
                        </li>
                        <li>
                            <b>Flexible Travel Options :</b>
                            Whether you’re traveling solo or with a
                            group, Bhurr has the right vehicle for you.

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
                    <h2>Why Choose Bhurr in Sangli?</h2>
                    <p class="text-justify">
                        Bhurr makes traveling around Sangli hassle-free! Our
                        ride-sharing service offers you the flexibility to
                        visit local attractions, explore nearby
                        destinations, and enjoy a stress-free travel
                        experience. Book your ride with Bhurr for a smooth
                        journey throughout Sangli.
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
                    <h2>Download the Bhurr App Now and Start Your Sangli
                        Adventure! !</h2>
                    <p class="text-justify">
                        Ready to explore Sangli and its beautiful
                        surroundings? Download the Bhurr app today and enjoy
                        a seamless travel experience. Whether you’re on a
                        cultural tour or a relaxing weekend getaway, Bhurr
                        is your trusted travel partner.
                    </p>
                </div>
            </div>
        </div>
    </section>

    

    @endsection
    @section('inline-js')
    @endsection