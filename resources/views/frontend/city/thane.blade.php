@extends('frontend-layout.app')
@section('title', 'Thane - page')
@section('inline-css')

    <style>
        .hero-section {
            background-image: url("{{asset('new-layouts/assets/image/city-img/thane-page.webp')}}");
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 ">
                    <div>
                        <h1>Discover Thane, <br> The City of Lakes</h1>
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
                        Thane, often referred to as the City of Lakes, is a
                        vibrant city located just on the outskirts of
                        Mumbai. Known for its scenic beauty, natural lakes,
                        and rich cultural history, Thane offers a perfect
                        blend of urban amenities and natural charm. Whether
                        you’re commuting for work or exploring the sights,
                        Bhurr is your ideal ride partner in Thane, making
                        your journeys seamless, affordable, and stress-free.
                    </p>
                    <h2>Top Places to Visit in Thane</h2>
                    <ol class="text-justify">
                        <li>
                            <b>Upvan Lake :</b> One of the most scenic spots
                            in Thane, Upvan Lake is perfect for a peaceful
                            evening stroll, boating, or simply soaking in
                            the natural beauty. The lake also hosts the
                            famous Sanskruti Arts Festival, attracting art
                            lovers from across the region.
                        </li>
                        <li>
                            <b>Yeoor Hills :</b> A hidden paradise in the
                            bustling city, Yeoor Hills offers a tranquil
                            escape into nature with its lush greenery and
                            scenic hiking trails. Popular among trekkers and
                            nature enthusiasts, it's a great spot to unwind
                            and enjoy breathtaking views.
                        </li>
                        <li>
                            <b>Kelva Beach :</b> Just a short drive from
                            Thane, Kelva Beach is a calm and scenic
                            destination ideal for a quick weekend getaway.
                            It offers clean sands, serene waters, and a
                            perfect spot for picnics with family and
                            friends.
                        </li>
                        <li>
                            <b>Talao Pali :</b> Located in the heart of
                            Thane, Talao Pali is a beautiful lake known for
                            its relaxing atmosphere and the iconic Masunda
                            Lake Boat Rides. The surrounding area has
                            several food stalls where you can sample local
                            snacks.
                        </li>
                        <li>
                            <b>Ghodbunder Fort :</b> History buffs will love
                            exploring the ancient Ghodbunder Fort, which
                            offers panoramic views of the surrounding
                            region. Built by the Portuguese in the 16th
                            century, this fort is a reminder of Thane’s rich
                            historical past.
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
                    <h2>Weekend Getaways from Thane</h2>
                    <p class="text-justify">
                        Thane’s strategic location makes it a gateway to
                        some of Maharashtra’s best tourist spots. Bhurr
                        makes it easy to plan your weekend getaways with
                        safe and comfortable rides to these nearby
                        destinations:
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Lonavala & Khandala (90 km from Thane)
                                :</b>
                            Known for their lush green valleys, misty
                            hills, and pleasant climate, these twin hill
                            stations are a perfect weekend retreat from
                            the city’s hustle. Visit <b> Bhushi Dam,
                                Tiger’s
                                Leap, and Rajmachi Fort </b> for some
                            amazing
                            scenic spots.
                        </li>
                        <li>
                            <b>Matheran (85 km from Thane) :</b>
                            A unique hill station, <b>Matheran</b> is
                            famous
                            for being the only automobile-free town in
                            India, making it a peaceful and
                            pollution-free getaway. Trek up to
                            <b>Panorama
                                Point</b> or explore the old-world charm
                            of this
                            heritage spot.
                        </li>
                        <li>
                            <b>Alibaug (110 km from Thane) :</b>
                            Looking for some beach vibes? <b>Alibaug</b>
                            is a
                            coastal town known for its beautiful, serene
                            beaches like <b>Nagaon</b> and <b>Varsoli
                                Beach</b>. Enjoy
                            water sports or relax by the sea at this
                            perfect weekend destination.

                        </li>
                        <li>
                            <b>Igatpuri (60 km from Thane) :</b>
                            Nestled in the Western Ghats,
                            <b>Igatpuri</b> is a
                            haven for nature lovers and adventure
                            seekers. Known for its stunning landscapes,
                            waterfalls, and trekking spots, it’s also
                            home to the famous <b>Vipassana
                                International
                                Academy</b>, offering peace and
                            meditation.

                        </li>
                        <li>
                            <b>Sanjay Gandhi National Park (25 km from
                                Thane) :</b>
                            A quick getaway from the city, <b>Sanjay
                                Gandhi
                                National Park</b> offers lush greenery,
                            wildlife, and the ancient <b>Kanheri
                                Caves</b>.
                            It’s perfect for a day trip with family or a
                            nature-filled weekend escape.

                        </li>
                        <li>
                            <b>Imagicaa (95 km from Thane) :</b>
                            India’s premier theme park, <b>Imagicaa</b>
                            offers
                            a thrilling escape with exciting rides,
                            water slides, and live entertainment. It’s
                            an ideal destination for family fun and
                            adventure lovers alike.

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
                    <h2>Ride with Bhurr - Travel Smart in Thane</h2>
                    <p class="text-justify">
                        Why struggle with traffic or parking when Bhurr is
                        here to make your journeys effortless? Whether
                        you're exploring Thane’s lakes or planning a weekend
                        trip, Bhurr offers convenience, safety, and
                        affordability, all in one.
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Affordable Rates :</b>
                            No hidden charges! Travel comfortably within
                            your budget.
                        </li>
                        <li>
                            <b>Convenient Booking :</b>
                            Book your ride in seconds with our
                            easy-to-use app, available on both Android
                            and iOS.
                        </li>
                        <li>
                            <b>Safety First :</b>
                            Our professional drivers are
                            background-checked and trained to ensure
                            your ride is secure.

                        </li>
                        <li>
                            <b>Comfortable Rides :</b>
                            Travel in clean, air-conditioned vehicles,
                            perfect for local or intercity travel.

                        </li>
                        <li>
                            <b>24/7 Availability :</b>
                            Whether it’s early morning or late at night,
                            Bhurr is always there for you.

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
                    <h2>Why Choose Bhurr in Thane?</h2>
                    <p class="text-justify">
                        From local commutes to exploring hidden gems, Bhurr
                        offers reliable and comfortable rides to help you
                        make the most of your time in Thane. Book your ride
                        with us today and experience the city in style!
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
                    <h2>Download the Bhurr App and Start Exploring Thane
                        Today!</h2>
                    <p class="text-justify">
                        Ready to explore Thane and beyond? Download the
                        Bhurr app now and book your ride in just a few
                        clicks. Whether you’re commuting through the city or
                        planning a weekend getaway, Bhurr is your trusted
                        travel partner.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @endsection
    @section('inline-js')
    @endsection
