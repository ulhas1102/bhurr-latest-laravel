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
        <h1>Panchgani</h1>
    </section>

    <!-- Content Section -->
    <section class="content-section container">
        <div class="row">
            <div class="col-md-12">
                <h2>Panchgani in Summer: A Cool Escape in the Western
                    Ghats</h2>
                <p>Panchgani is a charming hill station located in the
                    Satara district of Maharashtra, approximately 100 km
                    from Mumbai and 19 km from Mahabaleshwar. Nestled at an
                    altitude of about 1,334 meters, Panchgani is famous for
                    its pleasant climate, lush greenery, and scenic views of
                    the surrounding hills. During the summer months (March
                    to June), the weather is relatively cool, making it an
                    ideal getaway for those seeking relief from the
                    heat.</p>
            </div>
            <div class="col-12">
                <h2>Key Attractions & Activities</h2>
                <ol>
                    <li><strong>Table Land :</strong>This is one of
                        Panchgani's most popular attractions, known for its
                        vast expanse of laterite plateau, offering stunning
                        views of the valleys below. Visitors can enjoy
                        activities like paragliding, horse riding, and even
                        a picnic while taking in the breathtaking scenery.
                        The panoramic view of the surrounding hills and the
                        valley below is simply mesmerizing.
                    </li>
                    <li><strong>Bhilar Waterfalls :</strong>A short trek
                        from Panchgani, these picturesque waterfalls are
                        especially beautiful during the summer. The sound of
                        water cascading over rocks amidst lush greenery
                        creates a serene atmosphere, perfect for relaxation
                        and photography.</li>
                    <li><strong>Panchgani Strawberry Farms :</strong>Famous
                        for its strawberry cultivation, visitors can enjoy
                        fresh strawberries and other strawberry-based
                        products like jams and syrups at the local farms.
                        Some farms offer tours where visitors can pick their
                        own strawberries during the season, usually from
                        December to March.</li>
                    <li><strong>Sydney Point :</strong>Located about 2 km
                        from Panchgani, Sydney Point offers stunning views
                        of the Krishna Valley and the distant hills. It is
                        particularly beautiful during sunrise and sunset,
                        making it a great spot for photography and quiet
                        contemplation.</li>
                    <li><strong>Devil’s Kitchen :</strong>This cave-like
                        formation is said to be the dwelling place of the
                        Pandavas during their exile. Visitors can explore
                        the caves, learn about their historical
                        significance, and enjoy the surrounding natural
                        beauty.</li>
                    <li><strong>Table Land’s Adventure Activities
                            :</strong>For adventure enthusiasts, Panchgani
                        offers various activities like trekking, rock
                        climbing, and paragliding, especially around Table
                        Land, where the altitude provides excellent
                        conditions for these adventures.</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Cultural & Historical Significance</h2>
                <p>Panchgani has historical importance as a summer retreat
                    for British officials during the colonial era. The town
                    is dotted with colonial-era bungalows and educational
                    institutions, adding to its charm. The presence of local
                    traditions, such as strawberry farming and the annual
                    Strawberry Festival, highlights the rich agricultural
                    heritage of the region.</p>
            </div>
            <div class="col-md-12">
                <h2>Travel Tips</h2>
                <ul>
                    <li><strong>What to Pack:</strong></li>
                    <ul>
                        <li><strong>Clothing :</strong>Lightweight,
                            breathable clothes are recommended due to the
                            warm temperatures during the day. However,
                            evenings can be cooler, so bringing a light
                            jacket or sweater is advisable.</li>
                        <li><strong>Footwear :</strong>Comfortable walking
                            shoes are essential for exploring the hilly
                            terrain and engaging in outdoor activities.</li>
                        <li><strong>Sun Protection :</strong>Sunglasses,
                            sunscreen, and hats are important to protect
                            against the sun, especially if you plan to spend
                            time outdoors.</li>
                        <li><strong>Essentials :</strong>Don't forget to
                            carry a water bottle to stay hydrated, as summer
                            can be warm, and make sure to have a camera for
                            capturing the stunning landscapes.</li>
                    </ul>
                    <li><strong>Road Trip Benefits:</strong>Panchgani is
                        easily accessible by road, making it a popular
                        destination for a weekend getaway.</li>
                    <ul>
                        <li><strong>From Mumbai:</strong>The drive from
                            Mumbai takes about 3 to 4 hours via NH 48 and
                            offers scenic views of the Western Ghats. The
                            route is dotted with picturesque landscapes and
                            lush greenery, especially as you approach the
                            hill station.</li>
                        <li><strong>From Pune:</strong>The trip from Pune
                            takes about 1.5 to 2 hours, making it a
                            convenient destination for those in and around
                            Pune. The road is well-maintained, and the drive
                            is quite enjoyable.</li>
                    </ul>
                    <p>
                        Traveling by road allows visitors to stop at local
                        eateries and scenic viewpoints along the way,
                        enhancing the overall experience.
                    </p>
                    <li><strong>Where to Stay :</strong>Panchgani offers a
                        range of accommodation options to suit different
                        budgets:</li>
                    <ul>
                        <li><strong>Luxury :</strong>For a luxurious
                            experience, consider <b>Dale View Resort</b> or
                            <b>Ravine Hotel</b>, both of which offer
                            stunning views and modern amenities.
                        </li>
                        <li><strong>Mid-range :</strong>Hotels like <b>Hotel
                                Millennium Park</b> and <b>Brightland
                                Resort</b> provide comfortable
                            accommodations with easy access to key
                            attractions.</li>
                        <li><strong>Budget :</strong>For budget travelers,
                            several homestays and guesthouses offer
                            affordable options with a homely
                            atmosphere.</li>
                    </ul>
                    <li><strong>What to Expect:</strong>During the summer,
                        visitors can expect pleasant weather, clear skies,
                        and stunning landscapes. The hill station's lush
                        greenery, vibrant flowers, and refreshing breeze
                        make it an ideal retreat from the summer heat. The
                        local culture is friendly and welcoming, with
                        opportunities to engage with locals and learn about
                        their traditions.</li>
                </ul>
                <h3>Additional Tips:</h3>
                <ul>
                    <li><strong>Food:</strong>Don't miss trying local dishes
                        and street food, such as <b>misal pav, vada pav</b>
                        and the delicious strawberry-based desserts
                        available at local cafes.</li>
                    <li><strong>Shopping:</strong>Visitors can explore local
                        markets for fresh strawberries, homemade jams, and
                        handicrafts, which make great souvenirs</li>
                </ul>
                <p>Panchgani in summer is a delightful escape that offers a
                    perfect blend of natural beauty, adventure, and cultural
                    experiences. With its stunning viewpoints, pleasant
                    climate, and rich history, Panchgani is an ideal
                    destination for those seeking relaxation and adventure
                    in the Western Ghats. Whether you're exploring the
                    strawberry farms, hiking to scenic viewpoints, or simply
                    unwinding in the serene surroundings, Panchgani promises
                    a memorable summer getaway for every traveler.</p>
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