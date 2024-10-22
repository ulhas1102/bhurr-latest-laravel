@extends('frontend-layout.app')
@section('title', 'amboli - page')
@section('inline-css')
<style>
    /* Banner Style */
    .banner {
        background-image: url("{{asset('new-layouts/assets/image/city-img/cities-satara-2.webp')}}");
        /* Replace with relevant location image */
        background-size: cover;
        background-position: center;
        height: 400px;
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
        /* padding: 40px 0; */
    }

    .content-section img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .content ul {
        padding: unset;
        margin: unset;
        list-style: unset;
        padding-inline-start: 40px;
        padding-block-start: unset;
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

        .content ul,
        .content ol {
            padding-inline-start: 20PX;
        }

    }
</style>
</head>

<body class="special-bookings">
    @endsection

    @section('content')
    <!-- Banner Section -->
    <section class="banner">
        <h1>Amboli</h1>
    </section>
    <div class="container content py-md-5 py-3">
        <div class="row">
            <div class="col-md-12">
                <h2>Amboli in Monsoon: A Hidden Gem in the Western
                    Ghats</h2>
                <p>Nestled in the Sahyadri mountain range of Maharashtra,
                    Amboli is a charming hill station located about 450 km
                    from Mumbai and 230 km from Pune. Known for its
                    picturesque landscapes and dense forests, Amboli
                    transforms into a lush green paradise during the monsoon
                    season (June to September). The rain enhances the beauty
                    of the surroundings, making it an ideal getaway for
                    nature lovers and adventure enthusiasts. With its cool
                    climate, stunning waterfalls, and biodiversity, Amboli
                    offers a refreshing escape from the hustle and bustle of
                    city life.</p>
            </div>
            <div class="col-12">
                <h2>Key Attractions & Activities</h2>
                <ol>
                    <li><strong>Amboli Waterfalls :</strong>
                        One of the most popular attractions in Amboli, these
                        cascading waterfalls come alive during the monsoon,
                        creating a stunning spectacle. The sight of the
                        water gushing down the rocks, surrounded by lush
                        greenery, is breathtaking. Visitors can enjoy
                        picnics near the falls and capture incredible
                        photographs.
                    </li>
                    <li><strong>Madhavgarh Fort :</strong>
                        This ancient fort, situated a short trek away from
                        Amboli, offers panoramic views of the surrounding
                        valleys and hills. The fort's historical
                        significance, along with its scenic beauty, makes it
                        a must-visit. The trek to the fort is especially
                        enjoyable in the monsoon, with mist enveloping the
                        hills.</li>
                    <li><strong>Amboli Eco Point :</strong>
                        This viewpoint offers mesmerizing vistas of the
                        Western Ghats, particularly during the monsoon when
                        the clouds drift through the valleys. It’s a great
                        spot for photography and enjoying the tranquility of
                        nature.</li>
                    <li><strong>Nangarta Zhar Falls :</strong>Located near
                        Amboli, these spectacular falls
                        are less frequented, providing a more secluded
                        experience. The cascading water surrounded by dense
                        forests creates a serene atmosphere, perfect for
                        nature walks and meditation</li>
                    <li><strong>Botanical Garden :</strong>The
                        Amboli Botanical Garden is home to a variety of
                        flora and fauna, including many medicinal plants and
                        unique species of butterflies. Monsoon is an
                        excellent time to visit, as the garden is in full
                        bloom and the greenery is at its peak.</li>
                    <li><strong>Mahadev Gad :</strong>
                        Another historical site, Mahadev Gad is a temple
                        dedicated to Lord Shiva, located on a hilltop. The
                        trek to the temple is rewarding, especially during
                        the rains when the path is surrounded by vibrant
                        greenery.</li>
                </ol>
            </div>
            <div class="col-md-12">
                <h2>Cultural & Historical Significance</h2>
                <p>Amboli is not only a natural paradise but also has a rich
                    cultural heritage. The region has a blend of Marathi and
                    Konkani cultures, evident in the local cuisine,
                    festivals, and traditions. The area is historically
                    significant due to its proximity to ancient forts and
                    temples, with roots tracing back to the Maratha
                    empire.</p>
                <p>The monsoon season also holds importance for the local
                    agrarian communities, as the rains rejuvenate the soil,
                    allowing farmers to cultivate various crops. This
                    connection to nature and agriculture is a vital aspect
                    of Amboli's identity.</p>
            </div>
            <div class="col-md-12">
                <h2>Travel Tips</h2>
                <ul>
                    <li><strong>What to Pack:</strong></li>
                    <ul>
                        <li><strong>Rain gear :</strong>Travelers should
                            pack waterproof jackets, umbrellas, and ponchos
                            to stay dry during the frequent downpours.</li>
                        <li><strong>Footwear :</strong>Sturdy, anti-slip
                            shoes are essential for trekking and navigating
                            wet paths.</li>
                        <li><strong>Clothing :</strong>Light, quick-drying
                            clothes are recommended due to humidity.
                            Layering options can help with the cooler
                            temperatures at night.</li>
                        <li><strong>Essentials :</strong> Bring waterproof
                            bags for electronic devices and valuables to
                            protect them from moisture. It’s also advisable
                            to carry insect repellent, as mosquitoes can be
                            prevalent during the rainy season.</li>
                    </ul>
                    <li><strong>Road Trip Benefits:</strong>Amboli is easily
                        accessible by road, making a road trip an excellent
                        way to enjoy the scenic beauty of the Western
                        Ghats.</li>
                    <ul>
                        <li><strong>From Mumbai:</strong>The drive takes
                            about 8 to 10 hours via NH 48 and NH 66, passing
                            through beautiful landscapes, hills, and coastal
                            regions. The journey is filled with lush
                            greenery, especially during the monsoon.</li>
                        <li><strong>From Pune:</strong>The trip from Pune
                            takes around 6 to 7 hours, and the route
                            includes picturesque views of the mountains and
                            valleys.</li>
                    </ul>
                    <p>
                        Traveling by road allows visitors to stop at various
                        scenic points, local eateries, and small villages
                        along the way, enhancing the overall experience.
                    </p>
                    <li><strong>Where to Stay :</strong>Amboli offers a
                        range of accommodation options, from cozy homestays
                        to mid-range hotels:</li>
                    <ul>
                        <li><strong>Luxury :</strong>For a comfortable stay,
                            consider <b>The Hilltop Hotel</b> or <b>Kumar
                                Resort</b>, both offering stunning views and
                            good amenities..</li>
                        <li><strong>Mid-range :</strong>Hotels like <b>Hotel
                                Amboli</b> and <b>Rutuja Resort</b> provide
                            comfortable accommodations with easy access to
                            key attractions.</li>
                        <li><strong>Budget :</strong>There are several
                            homestays and guesthouses that offer affordable
                            and authentic experiences for travelers on a
                            budget.</li>
                    </ul>
                    <li><strong>What to Expect:</strong>Visitors can expect
                        frequent rains, cool temperatures, and stunning
                        natural beauty during the monsoon season. The
                        landscape becomes a vibrant green oasis, with
                        waterfalls, misty hills, and diverse wildlife. The
                        cool and refreshing climate makes it perfect for
                        exploring the outdoors, though caution is needed
                        when trekking due to slippery trails.</li>
                </ul>
                <h3>Additional Tips:</h3>
                <ul>
                    <li><strong>Food:</strong>Don’t miss out on trying local
                        delicacies such as <b>Modak, Puran Poli</b>, and
                        regional Maharashtrian dishes. Local eateries serve
                        delicious meals made with fresh, local
                        ingredients.</li>
                    <li><strong>Shopping:</strong>Visitors can buy locally
                        made handicrafts, spices, and traditional artifacts
                        from local markets and stalls.</li>
                </ul>
                <p>Amboli during the monsoon is a hidden gem that offers a
                    perfect blend of natural beauty, adventure, and cultural
                    richness. The lush landscapes, mesmerizing waterfalls,
                    and cool climate provide a refreshing escape from the
                    city's hustle and bustle. Whether you’re trekking
                    through misty hills, enjoying the view from a waterfall,
                    or savoring local cuisine, Amboli in monsoon promises a
                    memorable experience for all. With its biodiversity and
                    stunning scenery, it’s a must-visit destination for
                    those seeking tranquility and adventure in the lap of
                    nature.</p>
            </div>
        </div>
    </div>

    </section>
    <!-- Call-to-Action Section -->
    <section class="cta-section call-to-action py-md-5 py-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
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