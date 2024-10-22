@extends('frontend-layout.app')
@section('title', 'Jalgaon - page')
@section('inline-css')

<style>
    .hero-section {
        background-image: url("{{asset('new-layouts/assets/image/city-img/jalgaon-page.webp')}}");
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
        <div class="container  my-md-5 my-3">
            <div class="row justify-content-center">
                <div class="col-md-12 ">
                    <div>
                        <h1>Discover Jalgaon, <br> The Heart of Maharashtra </h1>
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
                        Jalgaon, known as the <b>Banana City of India</b>,
                        is a
                        vibrant city in Maharashtra that boasts rich
                        agricultural lands, cultural heritage, and
                        historical significance. Whether you're here to
                        explore the scenic beauty or to dive into the local
                        culture, Bhurr is your perfect travel companion,
                        ensuring a comfortable and enjoyable ride around
                        Jalgaon.
                    </p>
                    <h2>Must-Visit Places in Jalgaon</h2>
                    <ol class="text-justify">
                        <li>
                            <b>Ajanta Caves :</b>
                            A UNESCO World Heritage Site, the Ajanta Caves
                            are famous for their stunning rock-cut Buddhist
                            cave monuments and ancient murals. Located about
                            100 km from Jalgaon, these caves offer a glimpse
                            into the rich history and artistry of ancient
                            India.
                        </li>
                        <li>
                            <b>Ellora Caves :</b>
                            Another UNESCO World Heritage Site, Ellora Caves
                            is known for its impressive rock-cut temples
                            representing Hindu, Buddhist, and Jain
                            traditions. The <b>Kailasa Temple</b> is
                            particularly
                            notable for its grandeur and intricate carvings.
                        </li>
                        <li>
                            <b>Jalgaon Museum :</b>
                            This museum showcases the cultural heritage of
                            Jalgaon, featuring artifacts, sculptures, and
                            information about the region's history. It’s a
                            great place to learn about the local culture and
                            heritage.
                        </li>
                        <li>
                            <b>Muktidham Temple :</b>
                            A beautiful marble temple complex dedicated to
                            various Hindu deities, Muktidham is known for
                            its serene environment and intricate marble
                            work. It's an excellent place for spiritual
                            reflection and meditation.
                        </li>
                        <li>
                            <b>Bani Baug :</b>
                            This picturesque garden is perfect for a
                            leisurely stroll or a family picnic. The lush
                            greenery and serene atmosphere make it an ideal
                            spot to relax and unwind.
                        </li>
                        <li>
                            <b>Ranjangaon Dattatraya Temple :</b>
                            Located on the outskirts of Jalgaon, this temple
                            is dedicated to Lord Dattatraya. The serene
                            surroundings and beautiful architecture attract
                            many devotees and visitors alike
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
                    <h2>Nearby Tourist Locations </h2>
                    <p class="text-justify">
                        Jalgaon is surrounded by several attractions that
                        make for fantastic day trips. Here are some nearby
                        places you shouldn't miss:
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Chalisgaon (25 km from Jalgaon) :</b>
                            Known for its scenic beauty, Chalisgaon
                            offers lush landscapes and cultural
                            experiences. Visit the <b>Chalisgaon
                                Fort</b> for a
                            glimpse into the region’s history.
                        </li>
                        <li>
                            <b>Panchgani (160 km from Jalgaon) :</b>
                            A charming hill station known for its
                            pleasant climate and scenic views, Panchgani
                            is perfect for a weekend getaway. Enjoy the
                            lush greenery, explore the tableland, and
                            visit the famous <b>Mapro Garden</b>.
                        </li>
                        <li>
                            <b>Saputara (140 km from Jalgaon) :</b>
                            Located in Gujarat, this beautiful hill
                            station offers stunning views, boating on
                            the lake, and nature trails. It’s an ideal
                            destination for nature lovers and adventure
                            seekers.

                        </li>
                        <li>
                            <b>Nashik (100 km from Jalgaon) :</b>
                            Known for its vineyards and sacred temples,
                            Nashik is a great place to explore wine
                            tourism and spiritual sites. Visit <b>Sula
                                Vineyards</b> for wine tasting or the
                            famous
                            <b>Trimbakeshwar Temple</b> for a spiritual
                            experience.

                        </li>
                        <li>
                            <b>Shirdi (140 km from Jalgaon) :</b>
                            A significant pilgrimage site, Shirdi is
                            home to the renowned <b>Sai Baba Temple</b>.
                            It
                            attracts millions of devotees every year,
                            making it a must-visit for spiritual
                            seekers.

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
                        Jalgaon </h2>
                    <p class="text-justify">
                        Why choose any other mode of transport when Bhurr is
                        here to make your travels easy and enjoyable?
                        Whether you're exploring the rich heritage of
                        Jalgaon or venturing out to nearby attractions,
                        Bhurr is dedicated to providing you with a
                        comfortable and affordable ride.
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Affordable Pricing :</b>
                            Enjoy competitive rates with no hidden
                            charges, making your travel budget-friendly.
                        </li>
                        <li>
                            <b>User-Friendly App :</b>
                            Book your rides effortlessly using the Bhurr
                            app, available for both Android and iOS.
                        </li>
                        <li>
                            <b>Safety First :</b>
                            Our drivers are background-checked and
                            trained to prioritize your safety and
                            comfort.

                        </li>
                        <li>
                            <b>Comfortable Rides :</b>
                            Travel in clean, air-conditioned vehicles,
                            perfect for both local trips and longer
                            journeys.
                        </li>
                        <li>
                            <b>Flexible Options :</b>
                            Whether you’re traveling solo or with a
                            group, Bhurr accommodates all your travel
                            needs.

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
                    <h2>Why Choose Bhurr in Jalgaon?</h2>
                    <p class="text-justify">
                        With Bhurr, traveling in Jalgaon is seamless and
                        stress-free! Our ride-sharing service allows you to
                        explore the city’s attractions and nearby
                        destinations with ease. Enjoy a comfortable journey
                        while discovering the hidden treasures of Jalgaon.
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
                    <h2>Download the Bhurr App Now and Start Your Jalgaon
                        Adventure!!</h2>
                    <p class="text-justify">
                        Ready to explore Jalgaon and its beautiful
                        surroundings? Download the Bhurr app today for a
                        seamless travel experience. Whether you’re visiting
                        historical sites or heading for a weekend escape,
                        Bhurr is your trusted travel partner.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @endsection
    @section('inline-js')
    @endsection