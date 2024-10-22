@extends('frontend-layout.app')
@section('title', 'mahabaleshwar - page')
@section('inline-css')
<style>
    /* Banner Style */
    .banner {
        background-image: url("{{asset('new-layouts/assets/image/city-img/cities-satara-2.webp')}}");
        /* Replace with relevant location image */
        background-size: cover;
        background-position: center;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        position: relative;
    }

    .banner::before {
        position: absolute;
        content: "";
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #00000096;

    }

    .banner h1 {
        z-index: 1;
    }

    /* Section Styles */
    .content-section {
        padding: 40px 0;
    }

    .content-section img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    /* .travel-tips {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 10px;
        margin-bottom: 40px;
    } */

    .cta-section {
        background: linear-gradient(to right,
                var(--primary-color),
                var(--heading-text-color));
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .banner h1 {
            font-size: 2rem;
        }
    }
</style>
</head>

<body class="special-bookings">
    @endsection

    @section('content')
    <!-- Banner Section -->
    <section class="banner">
        <h1>Juhu Beach
        </h1>
    </section>

    <!-- Content Section -->
    <section class="content-section container">
        <div class="row">
            <div class="col-md-12">
                <h2>Juhu Beach: The Vibrant Heart of Mumbai</h2>
                <p>Juhu Beach is one of the most famous beaches in Mumbai,
                    located in the suburban area of Juhu, approximately 18
                    km from the city center. This popular destination
                    stretches for about 6 kilometers along the Arabian Sea,
                    making it a favorite spot for locals and tourists alike.
                    Known for its lively atmosphere, stunning sunsets, and
                    delicious street food, Juhu Beach is a perfect blend of
                    leisure and cultural experience.</p>
            </div>
            <div class="col-12">
                <h2>Key Attractions & Activities</h2>
                <ol>
                    <li><strong>Beach Activities :</strong>Juhu Beach is
                        ideal for various beach activities such as walking,
                        jogging, or simply lounging by the sea. Families
                        often visit for picnics, while couples enjoy
                        romantic walks along the shoreline. Children can be
                        seen playing in the sand and flying kites.
                    </li>
                    <li><strong>Street Foods :</strong>The beach is renowned
                        for its vibrant street food scene. Don't miss trying
                        local delicacies like <b>pav bhaji, bhel puri, pani
                            puri</b>, and <b>vada pav</b> from the many food
                        stalls lining the beach. The flavors and variety
                        will surely tantalize your taste buds.</li>
                    <li><strong>Sunset View :</strong>Juhu Beach offers
                        stunning sunset views, making it a great place for
                        photography enthusiasts. The sky transforms into a
                        canvas of colors as the sun dips below the horizon,
                        providing a picturesque backdrop.</li>
                    <li><strong>ISKCON Temple :</strong> Located a short
                        distance from the beach, the <b>ISKCON Temple</b>
                        (International Society for Krishna Consciousness) is
                        an important cultural and religious site. Visitors
                        can explore the temple, participate in prayers, and
                        enjoy the peaceful ambiance.</li>
                    <li><strong>Film City Tours :</strong>Mumbai is the
                        heart of the Indian film industry, and Juhu Beach is
                        close to various film studios. Tour operators offer
                        guided tours to see where Bollywood magic happens,
                        providing a glimpse into the glamorous world of
                        Indian cinema.</li>
                    <li><strong>Cultural Events :</strong> Throughout the
                        year, Juhu Beach hosts various cultural events,
                        fairs, and festivals. Keep an eye out for local
                        celebrations, music performances, and art
                        exhibitions that often take place on the beach.</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Cultural & Historical Significance</h2>
                <p>Juhu Beach has a rich history as one of Mumbai's most
                    popular and iconic beaches. It has been a gathering
                    place for locals for decades, symbolizing the vibrant
                    and diverse culture of Mumbai. The beach has also
                    appeared in numerous Bollywood films, adding to its
                    cultural significance. Additionally, the nearby ISKCON
                    Temple reflects the spiritual diversity of the city,
                    attracting visitors from all walks of life.</p>
            </div>
            <div class="col-md-12">
                <h2>Travel Tips</h2>
                <ul>
                    <li><strong>What to Pack:</strong></li>
                    <ul>
                        <li><strong>Clothing :</strong>Lightweight,
                            comfortable clothing is advisable due to the
                            warm and humid climate. Swimwear is recommended
                            if you plan to enjoy the water.</li>
                        <li><strong>Footwear :</strong>Flip-flops or sandals
                            are ideal for beach outings, but consider
                            bringing comfortable walking shoes for exploring
                            the nearby areas.</li>
                        <li><strong>Sun Protection :</strong>Sunscreen,
                            sunglasses, and a wide-brimmed hat are essential
                            to protect against the sun.</li>
                        <li><strong>Essentials :</strong>Carry a reusable
                            water bottle to stay hydrated, and bring a beach
                            towel or mat for lounging.</li>
                    </ul>
                    <li><strong>Road Trip Benefits:</strong>Juhu Beach is
                        easily accessible by road, making it a convenient
                        destination for a day trip or weekend getaway.</li>
                    <ul>
                        <li><strong>From Mumbai city center :</strong>The
                            drive from the city center takes around 30-45
                            minutes, depending on traffic. Major roads like
                            the Western Express Highway and Juhu Tara Road
                            lead directly to the beach.</li>
                        <li><strong>From Surrounding Areas :</strong> If
                            you're coming from the suburbs, Juhu Beach is
                            well connected via local roads and public
                            transport, including auto-rickshaws and
                            taxis.</li>
                    </ul>
                    <p>
                        Traveling by road allows you to explore the vibrant
                        neighborhoods of Mumbai, including Versova and
                        Andheri, making the journey even more enjoyable.
                    </p>
                    <li><strong>Where to Stay :</strong>Juhu Beach offers a
                        variety of accommodation options to suit different
                        budgets:</li>
                    <ul>
                        <li><strong>Luxury :</strong>For a luxurious stay,
                            consider <b>JW Marriott Mumbai Juhu</b> or
                            <b>Novotel Mumbai Juhu Beach</b>, both offering
                            stunning sea views and modern amenities.
                        </li>
                        <li><strong>Mid-range :</strong>Hotels like <b>Hotel
                                Sea Princess</b> provide comfortable
                            accommodations with easy beach access.</li>
                        <li><strong>Budget :</strong>There are several
                            guesthouses and budget hotels in the area that
                            offer affordable options for travelers.</li>
                    </ul>
                    <li><strong>What to Expect:</strong>Visitors to Juhu
                        Beach can expect a lively and bustling atmosphere,
                        especially during weekends and evenings. The beach
                        tends to attract large crowds, so it’s best to
                        arrive early in the day for a quieter experience.
                        Expect a variety of activities, sounds of laughter,
                        and the smell of delicious street food. The vibrant
                        culture of Mumbai is palpable, making it a great
                        place to soak in the local vibe.</li>
                </ul>
                <h3>Additional Tips:</h3>
                <ul>
                    <li><strong>Food Safety :</strong>While the street food
                        is delicious, ensure that you choose stalls with
                        high turnover to minimize the risk of foodborne
                        illnesses. Drink bottled water to stay hydrated and
                        safe.</li>
                    <li><strong>Shopping :</strong>Look out for local shops
                        and vendors selling handicrafts, clothing, and
                        souvenirs. The nearby areas also offer shopping
                        options for those interested in fashion and
                        accessories.</li>
                </ul>
                <p>Juhu Beach is a vibrant destination that captures the
                    essence of Mumbai's coastal life. With its stunning
                    views, lively atmosphere, and rich cultural heritage,
                    it’s a must-visit for anyone traveling to the city.
                    Whether you're enjoying street food, watching the
                    sunset, or exploring nearby attractions, Juhu Beach
                    promises a memorable experience filled with the warmth
                    and spirit of Mumbai.</p>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Ready for Your Adventure?</h2>
                    <p>Book your cab now and start your unforgettable road
                        trip to Mahabaleshwar!</p>
                    <a href="#" class="btn btn-primary">Book Your Roadtrip
                        Today!</a>
                </div>
            </div>
        </div>
    </section>


    @endsection

    @section('inline-js')
    @endsection