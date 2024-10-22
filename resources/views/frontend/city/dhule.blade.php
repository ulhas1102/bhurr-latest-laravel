@extends('frontend-layout.app')
@section('title', 'Dhule - page')
@section('inline-css')

<style>
    .hero-section {
        background-image: url("{{asset('new-layouts/assets/image/city-img/dhule-page.webp')}}");
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
                <div class="col-12  ">
                    <div>
                        <h1>Discover Dhule, <br> A City of Heritage and Natural
                            Beauty</h1>
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
                <div class="col-12">
                    <p class="text-justify">
                        Dhule, located in the northern part of Maharashtra,
                        is a city rich in history, culture, and natural
                        beauty. Known for its diverse landscapes and
                        historical sites, Dhule is a perfect destination for
                        travelers seeking both adventure and relaxation.
                        With Bhurr, you can easily explore the enchanting
                        sights of Dhule and its surroundings.
                    </p>
                    <h2>Must-Visit Places in Dhule </h2>
                    <ol class="text-justify">
                        <li>
                            <b>Narmada Canal :</b>
                            The Narmada Canal is an engineering marvel that
                            provides irrigation to the surrounding
                            agricultural land. A visit here offers stunning
                            views of the canal, making it a great spot for
                            photography and relaxation.
                        </li>
                        <li>
                            <b>Khandesh College Education Society (KCES)
                                :</b>
                            Founded in 1885, KCES is one of the oldest
                            educational institutions in the region. The
                            college has a beautiful campus and offers a
                            glimpse into Dhule's rich academic history.
                        </li>
                        <li>
                            <b>Brahma Kund :</b>
                            A sacred water tank, Brahma Kund holds immense
                            religious significance. It is believed to be a
                            holy site for rituals and offers a serene
                            environment for visitors seeking spiritual
                            solace.
                        </li>
                        <li>
                            <b>Ranjangaon :</b>
                            Located near Dhule, Ranjangaon is home to the
                            ancient <b>Gadad Mandir</b>, dedicated to Lord
                            Shiva.
                            The temple's architecture and tranquil setting
                            make it a popular spot for devotees and tourists
                            alike.
                        </li>
                        <li>
                            <b>Siddheshwar Mandir :</b>
                            This ancient temple is dedicated to Lord
                            Siddheshwar and is a prominent pilgrimage site
                            in Dhule. The temple features intricate carvings
                            and a peaceful atmosphere, perfect for
                            meditation and reflection.
                        </li>
                        <li>
                            <b>Shivaji Park :</b>
                            A popular recreational spot in Dhule, Shivaji
                            Park is an ideal place for families and friends
                            to unwind. With lush green lawns, walking paths,
                            and play areas, it's perfect for a leisurely day
                            out.
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
                <div class="col-12">
                    <h2>Nearby Tourist Attractions </h2>
                    <p class="text-justify">
                        If you're looking to explore beyond Dhule, here are
                        some fantastic nearby destinations:
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Saputara (80 km from Dhule) :</b>
                            Nestled in the Western Ghats, Saputara is a
                            charming hill station known for its
                            picturesque landscapes, boating in Saputara
                            Lake, and stunning views from the Sunset
                            Point. It's an ideal getaway for nature
                            lovers.
                        </li>
                        <li>
                            <b>Nashik (100 km from Dhule) :</b>
                            Famous for its vineyards and sacred temples,
                            Nashik is perfect for a day trip. Visit the
                            renowned Sula Vineyards, the holy
                            <b>Trimbakeshwar Temple</b>, and enjoy the
                            scenic
                            beauty along the Godavari River.
                        </li>
                        <li>
                            <b>Ajanta Caves (150 km from Dhule) :</b>
                            A UNESCO World Heritage Site, the Ajanta
                            Caves are a remarkable collection of ancient
                            rock-cut caves featuring stunning murals and
                            sculptures. It's a must-visit for history
                            enthusiasts and art lovers alike.

                        </li>
                        <li>
                            <b>Ellora Caves (165 km from Dhule) :</b>
                            Another UNESCO World Heritage Site, the
                            Ellora Caves showcases magnificent rock-cut
                            architecture, with temples and monasteries
                            carved into the cliffs. The <b>Kailasa
                                Temple</b>
                            is particularly notable for its intricate
                            design.

                        </li>
                        <li>
                            <b>Khandala (140 km from Dhule) :</b>
                            A serene hill station, Khandala is known for
                            its lush greenery and scenic views. It’s a
                            great spot for trekking, nature walks, and
                            enjoying the cooler climate.

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
                <div class="col-12">
                    <h2>Ride with Bhurr - Your Trusted Travel Companion in
                        Dhule </h2>
                    <p class="text-justify">
                        Why stress about transportation when Bhurr can make
                        your travel experience seamless and enjoyable?
                        Whether you’re exploring local attractions or
                        heading out for a weekend adventure, Bhurr is your
                        go-to travel partner.
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Affordable Rates :</b>
                            Enjoy competitive pricing with no hidden
                            fees. Travel smart and save more!
                        </li>
                        <li>
                            <b>User-Friendly App :</b>
                            Book your ride effortlessly through the
                            Bhurr app, available for both Android and
                            iOS.
                        </li>
                        <li>
                            <b>Safety First :</b>
                            All our drivers undergo thorough background
                            checks to ensure a safe travel experience.

                        </li>
                        <li>
                            <b>Comfortable Rides :</b>
                            Enjoy clean and well-maintained vehicles for
                            a comfortable journey, whether short or
                            long.
                        </li>
                        <li>
                            <b>Flexible Options :</b>
                            Bhurr caters to all your travel needs,
                            whether it’s a solo trip, family outing, or
                            group travel.

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
                <div class="col-12">
                    <h2>Why Choose Bhurr in Dhule?</h2>
                    <p class="text-justify">
                        Traveling around Dhule has never been easier! With
                        Bhurr's reliable ride-sharing service, you can visit
                        local attractions, indulge in delicious cuisine, and
                        enjoy scenic views without the hassle. Let Bhurr be
                        your trusted travel partner as you discover the
                        beauty of Dhule.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Downlode Bhurr -->
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Download the Bhurr App Now and Start Your Dhule
                        Journey! </h2>
                    <p class="text-justify">
                        Ready to explore the beauty and culture of Dhule?
                        Download the Bhurr app today to book your ride and
                        embark on an unforgettable adventure. Whether you're
                        visiting temples, exploring nature, or enjoying
                        local cuisine, Bhurr is here to make every journey
                        enjoyable.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @endsection

    @section('inline-js')

    @endsection