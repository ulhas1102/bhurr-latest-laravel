@extends('frontend-layout.app')
@section('title', 'Pune - page')
@section('inline-css')

    <style>
        .hero-section {
            background-image: url("{{asset('new-layouts/assets/image/city-img/pune-page.webp')}}");
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
                        <h1>Discover Pune, <br> The Cultural Hub of
                            Maharashtra</h1>
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
                        Pune, fondly referred to as the “Queen of the
                        Deccan,” is not just a city—it's an experience.
                        Nestled in the Western Ghats, Pune is the perfect
                        blend of tradition and modernity. Whether you are a
                        student, a professional, or a traveler, Pune
                        welcomes you with open arms and a rich array of
                        cultural, historical, and natural attractions.
                    </p>
                    <h2>Pune - Where Heritage Meets Innovation</h2>
                    <p class="text-justify">
                        Pune’s charm lies in its ability to seamlessly mix
                        the old and the new. From historic landmarks to
                        state-of-the-art shopping malls, the city has
                        something for everyone. Here’s a quick guide to the
                        must-see attractions in Pune:
                    </p>
                    <ol class="text-justify">
                        <li>
                            <b>Shaniwar Wada Fort :</b> Built in 1732, this
                            iconic fort was the seat of the Peshwas of the
                            Maratha
                            Empire. Today, Shaniwar Wada stands as a symbol
                            of Pune's rich history, with its grand stone
                            walls,
                            beautiful gardens, and evening light and sound
                            shows that recount the glory of the Marathas.
                            Don't miss
                            the captivating stories behind its intriguing
                            gates!
                        </li>
                        <li>
                            <b>Aga Khan Palace :</b> A monument of national
                            significance, Aga Khan Palace is not only known
                            for
                            its beautiful architecture but also for its
                            historical importance during India’s
                            independence
                            movement. Mahatma Gandhi and his wife, Kasturba
                            Gandhi, were imprisoned here. The serene gardens
                            surrounding the palace make for a peaceful
                            retreat from the city buzz.
                        </li>
                        <li>
                            <b>Pataleshwar Cave Temple :</b> One of the
                            oldest heritage sites in Pune, this rock-cut
                            cave temple
                            dates back to the 8th century and is dedicated
                            to Lord Shiva. With intricately carved pillars
                            and a
                            calming aura, it’s an underrated gem perfect for
                            those seeking spiritual peace.
                        </li>
                        <li>
                            <b>Osho Ashram :</b> For a touch of tranquility,
                            visit the Osho International Meditation Resort.
                            Set amid
                            lush gardens, the ashram offers a peaceful
                            escape for meditation, rejuvenation, and
                            self-discovery.
                        </li>
                        <li>
                            <b>Pune University :</b> Known for its sprawling
                            campus and colonial architecture, Savitribai
                            Phule Pune
                            University is a beautiful spot to stroll around,
                            especially in the early morning or during
                            sunset.
                        </li>
                        <li>
                            <b>Parvati Hill :</b> One of Pune's most scenic
                            spots, offering panoramic views of the city from
                            its
                            summit. At the top, you'll find the Parvati
                            Temple, a historic shrine dedicated to Lord
                            Shiva, built
                            during the Peshwa era. This serene location is
                            perfect for a peaceful trek and a glimpse into
                            Pune's rich cultural heritage.
                        </li>
                        <li>
                            <b>Tulshi Baug :</b> A bustling market in the
                            heart of Pune, famous for its vibrant stalls
                            offering
                            everything from traditional jewelry to home
                            goods. This shopper's paradise is known for its
                            affordable
                            prices and wide range of products. The market is
                            also home to the historic Tulshi Baug Ram
                            Temple,
                            adding a spiritual touch to the lively
                            atmosphere.
                        </li>
                        <li>
                            <b>Dagdusheth Halwai Ganpati Temple :</b> The
                            Shreemant Dagdusheth Halwai Ganpati Temple is
                            one of Pune's
                            most revered and iconic temples, dedicated to
                            Lord Ganesha. Known for its stunning idol
                            adorned with
                            gold and jewels, the temple attracts thousands
                            of devotees, especially during the Ganesh
                            Chaturthi
                            festival. It's a symbol of faith and devotion,
                            standing as a cultural landmark in the heart of
                            Pune.
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
                    <h2>Explore Beyond Pune: Breathtaking Weekend
                        Getaways</h2>
                    <p class="text-justify">
                        Pune isn’t just a city—it’s a gateway to some of the
                        most stunning natural landscapes in Maharashtra.
                        Bhurr makes it easy to explore these nearby gems
                        with comfortable rides at your fingertips. Here are
                        the top destinations you can visit:
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Lonavala & Khandala (66 km from Pune)
                                :</b>
                            If you’re craving fresh mountain air and
                            breathtaking views, these twin hill stations
                            are the perfect choice. Visit the famous
                            Bhushi Dam, enjoy the scenic Tiger’s Leap,
                            and explore ancient caves like Karla and
                            Bhaja. These locations are especially
                            magical during the monsoon when the
                            waterfalls are at their fullest.

                        </li>
                        <li>
                            <b>Lavasa (58 km from Pune) :</b>
                            Modeled after the Italian town of Portofino,
                            Lavasa is a modern and picturesque hill
                            station perfect for a quick weekend retreat.
                            Enjoy water sports, cycling, or simply relax
                            by the lakeside with a stunning view of the
                            Sahyadri mountains.

                        </li>
                        <li>
                            <b>Sinhagad Fort (30 km from Pune) :</b>
                            Adventure seekers, this one’s for you! A
                            trek to Sinhagad Fort offers not only a
                            challenge but also a glimpse into the past.
                            Once the site of fierce battles, this
                            hilltop fort is now a peaceful spot to enjoy
                            panoramic views of the surrounding
                            countryside. Don’t forget to try the local
                            favorite snacks—Kanda Bhaji (onion fritters)
                            and Pithla Bhakri after your trek.

                        </li>
                        <li>
                            <b>Panchgani (100 km from Pune) :</b>
                            Known for its five plateaus and refreshing
                            climate, Panchgani is the go-to place for
                            nature lovers. It is famous for its
                            strawberry farms, scenic viewpoints like
                            Table Land, and adventurous Paragliding
                            sessions.

                        </li>
                        <li>
                            <b>Mahabaleshwar (120 km from Pune) :</b>
                            A paradise for nature lovers, Mahabaleshwar
                            offers everything from scenic viewpoints to
                            dense forests and waterfalls. Visit the
                            Venna Lake for boating, explore the lush
                            strawberry fields, and hike up to Arthur’s
                            Seat for awe-inspiring views.

                        </li>
                        <li>
                            <b>Mulshi Dam (40 km from Pune) :</b>
                            Perfect for a peaceful day trip, Mulshi Dam
                            is surrounded by picturesque mountains and
                            calm waters. It’s a great spot for picnics,
                            nature walks, and even birdwatching. The dam
                            area becomes particularly beautiful during
                            the monsoon.

                        </li>
                        <li>
                            <b>Alibaug (142 km from Pune) :</b>
                            Fancy a beach getaway? Alibaug, known for
                            its clean and tranquil beaches, is just a
                            short drive away. Enjoy water sports, visit
                            historic forts like Kolaba Fort, or relax by
                            the beach with stunning sunset views.

                        </li>
                        <li>
                            <b>Imagicaa (90 km from Pune) :</b>
                            Looking for an adrenaline-packed adventure?
                            Imagicaa is India's top theme park,
                            featuring exciting roller coasters,
                            thrilling water slides, and spectacular live
                            entertainment shows. Whether you're seeking
                            fun for the whole family or an exciting day
                            with friends, Imagicaa is the perfect
                            destination for a memorable outing.

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
                    <h2>Ride with Bhurr - Your Travel Companion for Every
                        Journey</h2>
                    <p class="text-justify">
                        Why settle for less when you can travel in comfort
                        with Bhurr? Whether you're on a city tour or an
                        intercity journey, Bhurr is here to ensure your ride
                        is safe, smooth, and enjoyable. Here’s why our
                        customers choose us:
                    </p>
                    <p>
                    <ol class="text-justify">
                        <li>
                            <b>Affordable and Transparent Pricing :</b>
                            Get competitive prices with no hidden
                            charges. We believe in transparent billing
                            to give you the best value for your money.

                        </li>
                        <li>
                            <b>Quick & Easy Booking :</b>
                            Book a ride with a few clicks using our
                            easy-to-use Bhurr app, available on Android
                            and iOS.

                        </li>
                        <li>
                            <b>Safety First :</b>
                            Our professional drivers are
                            background-checked, ensuring you travel
                            securely every time.

                        </li>
                        <li>
                            <b>Flexible Options :</b>
                            From solo rides to group bookings, we cater
                            to all your needs—whether it’s a daily
                            commute or a weekend adventure.

                        </li>
                        <li>
                            <b>Comfortable Rides :</b>
                            Enjoy air-conditioned vehicles, ample space,
                            and high cleanliness standards for a
                            pleasant journey.

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
                    <h2>Why Choose Bhurr in Pune?</h2>
                    <p class="text-justify">
                        Whether you're navigating Pune's dynamic streets or
                        planning a weekend getaway, Bhurr is here to make
                        your journey seamless. We provide safe, affordable,
                        and hassle-free rides across Pune and nearby tourist
                        destinations. With Bhurr, explore the city and its
                        hidden gems like never before. From quick city rides
                        to long-distance weekend excursions, Bhurr ensures
                        you travel in comfort and style.
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
                    <h2>Download the Bhurr App Now and Start Exploring
                        Pune!</h2>
                    <p class="text-justify">
                        Ready to explore Pune and beyond? Download the Bhurr
                        app now, book a ride, and get ready for a
                        hassle-free travel experience. Pune’s beauty and
                        history are waiting for you, and Bhurr is your
                        perfect partner to explore it all.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @endsection

    @section('inline-js')
   @endsection