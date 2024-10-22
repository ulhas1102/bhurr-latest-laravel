@extends('frontend-layout.app')
@section('title', 'Kolhapur - page')
@section('inline-css')

    <style>
        .hero-section {
            background-image: url("{{asset('new-layouts/assets/image/city-img/kolhapur-page.webp')}}");
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
                <div class="col-md-12 ">
                    <div>
                        <h1>Discover Kolhapur, <br> The City of Royal Heritage
                            and Spiritual Significance </h1>
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
                        Kolhapur, situated in the southwest of Maharashtra,
                        is a city rich in culture, history, and
                        spirituality. Known for its magnificent temples,
                        royal palaces, and famous Kolhapuri cuisine, the
                        city offers an unforgettable experience for every
                        visitor. Bhurr is here to help you explore the
                        vibrant streets of Kolhapur in comfort and ease,
                        whether you're visiting its historical landmarks or
                        heading out on a scenic adventure.
                    </p>
                    <h2>Top Places to Visit in Kolhapur</h2>
                    <ol class="text-justify">
                        <li>
                            <b>Mahalakshmi Temple :</b>
                            One of the most revered shrines in India, the
                            Mahalakshmi Temple is dedicated to Goddess
                            Lakshmi and attracts millions of pilgrims every
                            year. With its ancient architecture and deep
                            spiritual significance, the temple is a
                            must-visit for devotees and tourists alike.
                        </li>
                        <li>
                            <b>New Palace :</b>
                            The Royal <b>New Palace</b>, built in 1877, is a
                            stunning example of Indo-Saracenic architecture.
                            The palace now houses a museum that showcases
                            the royal family's artifacts, paintings, and
                            furniture, offering a glimpse into Kolhapur's
                            regal past.
                        </li>
                        <li>
                            <b>Rankala Lake :</b> A scenic spot for
                            relaxation, <b>Rankala Lake</b> is a popular
                            attraction
                            among locals and tourists. You can enjoy a
                            peaceful evening by the lake, go boating, or
                            indulge in delicious street food sold by vendors
                            nearby.
                        </li>
                        <li>
                            <b>Bhavani Mandap :</b>
                            The <b>Bhavani Mandap</b> is a historical palace
                            that
                            once served as the royal court. Today, it stands
                            as a beautiful monument and a marketplace, where
                            you can find handicrafts and souvenirs
                            reflecting Kolhapur’s heritage.
                        </li>
                        <li>
                            <b>Jyotiba Temple :</b> Located about 17 km from
                            Kolhapur, the <b>Jyotiba Temple</b> is a
                            significant
                            pilgrimage site dedicated to Lord Jyotiba, an
                            incarnation of Lord Shiva. The temple sits atop
                            a hill, offering panoramic views of the
                            surrounding landscape.
                        </li>
                        <li>
                            <b>Shalini Palace :</b> Nestled on the banks of
                            <b>Rankala Lake, Shalini Palace</b> is an
                            architectural
                            marvel built with black stone and stained-glass
                            windows. Though no longer in royal use, the
                            palace remains an attraction for its beauty and
                            grandeur.
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
                    <h2>Popular Weekend Getaways from Kolhapur</h2>
                    <p class="text-justify">
                        Kolhapur’s proximity to scenic and cultural hotspots
                        makes it the perfect base for weekend escapes. Bhurr
                        offers convenient rides to these nearby tourist
                        destinations
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Panhala Fort (20 km from Kolhapur) :</b>
                            A majestic fort with a rich history,
                            <b>Panhala
                                Fort</b> offers breathtaking views of
                            the
                            Sahyadri range. It’s a perfect destination
                            for history buffs and trekkers who wish to
                            explore its ancient walls and scenic
                            surroundings.
                        </li>
                        <li>
                            <b>Amboli (100 km from Kolhapur) :</b>
                            Known for its serene environment, misty
                            mountains, and waterfalls, <b>Amboli</b> is
                            a
                            tranquil hill station ideal for a refreshing
                            getaway. It’s especially beautiful during
                            the monsoon season when the area comes alive
                            with greenery.
                        </li>
                        <li>
                            <b>Gaganbawda (55 km from Kolhapur) :</b>
                            This charming hill station offers panoramic
                            views of the Sahyadri mountain ranges. It’s
                            perfect for those who love trekking,
                            bird-watching, or simply relaxing in
                            nature’s lap.

                        </li>
                        <li>
                            <b>Dajipur Wildlife Sanctuary (80 km from
                                Kolhapur) :</b>
                            Also known as the <b>Bison Sanctuary</b>,
                            this
                            wildlife reserve is home to a variety of
                            animals, including Indian bison, leopards,
                            and a rich variety of bird species. Nature
                            enthusiasts and wildlife photographers will
                            love this scenic sanctuary.

                        </li>
                        <li>
                            <b>Ganpatipule (150 km from Kolhapur) :</b>
                            A beautiful beach town on the Konkan coast,
                            <b>Ganpatipule</b> is famous for its
                            pristine
                            beaches and the <b>Ganpati Temple</b>
                            perched along
                            the shore. It’s a perfect destination for
                            beach lovers seeking peace and spiritual
                            serenity.

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
                    <h2>Ride with Bhurr in Kolhapur - Your Safe and
                        Convenient Travel Partner </h2>
                    <p class="text-justify">
                        Why worry about transportation when Bhurr offers
                        seamless rides across Kolhapur? Whether you're
                        exploring the city’s cultural treasures or heading
                        out for a weekend adventure, Bhurr is here to
                        provide you with a safe, comfortable, and
                        hassle-free journey.
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Affordable Pricing :</b>
                            Enjoy pocket-friendly fares with no hidden
                            charges.
                        </li>
                        <li>
                            <b>Quick and Easy Booking :</b>
                            Use the Bhurr app to book a ride in seconds.
                            Available for both Android and iOS.
                        </li>
                        <li>
                            <b>Reliable and Secure :</b>
                            Travel with peace of mind knowing that Bhurr
                            drivers are professional and trained to
                            ensure your safety.

                        </li>
                        <li>
                            <b>Clean and Comfortable Rides :</b>
                            Experience the comfort of our
                            well-maintained vehicles, ideal for city
                            tours and longer trips.
                        </li>
                        <li>
                            <b>Flexible Options :</b>
                            Whether you need a solo ride, a group trip,
                            or a journey to nearby destinations, Bhurr
                            has you covered.

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
                    <h2>Why Travel with Bhurr in Kolhapur?</h2>
                    <p class="text-justify">
                        With Bhurr, navigating Kolhapur’s charming streets
                        and nearby attractions is simple and affordable.
                        Whether you're visiting the iconic <b>Mahalakshmi
                            Temple</b> or enjoying the lush greenery of
                        <b>Rankala
                            Lake</b>, Bhurr’s reliable ride-share service is
                        your
                        perfect travel partner.
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
                    <h2>Download the Bhurr App Now and Start Your Kolhapur
                        Adventure!</h2>
                    <p class="text-justify">
                        Ready to explore Kolhapur and its nearby
                        attractions? Download the Bhurr app today and book a
                        ride instantly. Whether it's a spiritual journey or
                        an exciting day out, Bhurr is your trusted travel
                        companion.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @endsection
    @section('inline-js')
    @endsection
    