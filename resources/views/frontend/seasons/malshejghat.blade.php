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

<body class="special-bookings">
    @endsection

    @section('content')

    <!-- Banner Section -->
    <section class="banner">
        <h1>Malshej Ghat</h1>
    </section>

    <!-- Content Section -->
    <section class="content-section container">
        <div class="row">
            <div class="col-md-12">
                <h2>Malshej Ghat in Monsoon: A Majestic Retreat in the
                    Western Ghats</h2>
                <p>Malshej Ghat is a picturesque mountain pass located in
                    the Western Ghats of Maharashtra, approximately 154 km
                    from Mumbai and 130 km from Pune. Nestled at an altitude
                    of around 700 meters, Malshej Ghat is renowned for its
                    stunning landscapes, lush greenery, and waterfalls,
                    particularly during the monsoon season (June to
                    September). The region transforms into a vibrant
                    paradise, attracting nature lovers, adventure seekers,
                    and photography enthusiasts looking to explore its
                    breathtaking scenery.</p>
            </div>
            <div class="col-12">
                <h2>Key Attractions & Activities</h2>
                <ol>
                    <li><strong>Waterfalls :</strong>
                        Malshej Ghat is famous for its numerous waterfalls
                        that cascade down the mountains during the monsoon.
                        The sight and sound of water tumbling down the rocks
                        create a mesmerizing atmosphere. Some popular
                        waterfalls include <b>Ajanta Waterfall</b> and
                        <b>Khandas
                            Waterfall</b>, which are ideal for photography
                        and
                        picnics.
                    </li>
                    <li><strong>Bird Watching :</strong>The
                        region is home to diverse wildlife, including many
                        migratory birds that visit during the monsoon.
                        Birdwatchers can catch glimpses of species like the
                        <b>Flame-throated Bulbul</b> and<b>Malabar Whistling
                            Thrush.</b>
                        The lush surroundings provide an excellent backdrop
                        for nature enthusiasts.
                    </li>
                    <li><strong>Hiking and Trekking :</strong>Malshej Ghat
                        offers several trekking
                        trails suitable for all levels. The Harishchandragad
                        Trek and Kothaligad Trek are popular options,
                        providing stunning panoramic views of the Western
                        Ghats. The trails are particularly enchanting during
                        the monsoon, with mist enveloping the hills.</li>
                    <li><strong>Pimpalgaon
                            Joga Dam :</strong>This dam is located nearby
                        and is a
                        picturesque spot for relaxation and enjoying the
                        natural surroundings. The serene waters and the
                        backdrop of the Ghats make it an excellent place for
                        a picnic or a quiet retreat.</li>
                    <li><strong>Historical
                            Significance :</strong> Malshej Ghat has
                        historical
                        importance, with remnants of forts and ancient
                        trails used during the Maratha empire. The Malshej
                        Fort offers insights into the region’s history and
                        provides breathtaking views of the surrounding
                        landscape.</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Cultural Significance</h2>
                <p>The region is rich in cultural heritage, with nearby
                    villages showcasing traditional Maharashtrian lifestyles
                    and festivals. Visitors can experience local customs,
                    cuisine, and crafts, making it a culturally enriching
                    destination. The annual monsoon festivals, where local
                    communities celebrate the arrival of rain, reflect the
                    vibrant culture of the region.</p>
            </div>
            <div class="col-md-12">
                <h2>Travel Tips</h2>
                <ul>
                    <li><strong>What to Pack:</strong></li>
                    <ul>
                        <li><strong>Rain gear :</strong>Waterproof jackets,
                            umbrellas, and ponchos are essential to stay dry
                            during the frequent showers.</li>
                        <li><strong>Footwear :</strong>Wear sturdy,
                            anti-slip shoes suitable for trekking and
                            navigating wet trails.</li>
                        <li><strong>Clothing :</strong>Light, breathable
                            clothing is advisable due to humidity, along
                            with warmer layers for cooler evenings.</li>
                        <li><strong>Essentials :</strong>Bring plastic bags
                            to protect electronic devices, and carry insect
                            repellent to ward off mosquitoes.</li>
                    </ul>
                    <li><strong>Road Trip Benefits:</strong>Malshej Ghat is
                        accessible by road, making it an ideal destination
                        for a scenic road trip.</li>
                    <ul>
                        <li><strong>From Mumbai:</strong>The drive from
                            Mumbai takes around 3-4 hours via NH 61 and
                            offers beautiful views of the Western Ghats,
                            especially during the monsoon when the landscape
                            is lush and green.</li>
                        <li><strong>From Pune:</strong>The trip from Pune
                            takes about 3 hours, and the route offers
                            stunning vistas of valleys, hills, and
                            waterfalls along the way.</li>
                    </ul>
                    <p>
                        Traveling by road allows visitors to enjoy the
                        scenic beauty of the region, with opportunities to
                        stop at viewpoints and local eateries.
                    </p>
                    <li><strong>Where to Stay :</strong>Malshej Ghat has
                        several accommodation options, ranging from budget
                        hotels to comfortable resorts:</li>
                    <ul>
                        <li><strong>Luxury :</strong>For a luxurious stay,
                            <b>MTDC Malshej</b> offers well-appointed rooms
                            and stunning views of the surrounding
                            hills.
                        </li>
                        <li><strong>Mid-range :</strong>Hotels like <b>Sai
                                Palace</b> and <b>Greenland Resort</b>
                            provide comfortable accommodations with good
                            amenities and proximity to attractions.</li>
                        <li><strong>Budget :</strong>For budget travelers,
                            homestays and guesthouses in nearby villages
                            offer a more authentic experience at affordable
                            rates.</li>
                    </ul>
                    <li><strong>What to Expect:</strong>Visitors can expect
                        cool temperatures, heavy rainfall, and spectacular
                        scenery during the monsoon season. The landscape
                        transforms into a lush green paradise, with
                        mist-covered hills and vibrant flora. However,
                        caution is advised when trekking due to slippery
                        paths, and some areas may be inaccessible during
                        heavy rains.</li>
                </ul>
                <h3>Additional Tips:</h3>
                <ul>
                    <li><strong>Food:</strong>Enjoy local delicacies such as
                        <b>Vada Pav, Puran Poli</b>, and <b>Misal Pav</b> at
                        local eateries. The region is also known for its
                        delicious Maharashtrian thalis.
                    </li>
                    <li><strong>Shopping:</strong>Visitors can buy local
                        handicrafts, spices, and traditional Maharashtrian
                        items from local markets.</li>
                </ul>
                <p>Malshej Ghat during the monsoon is a breathtaking retreat
                    that offers a perfect blend of natural beauty,
                    adventure, and cultural experiences. With its stunning
                    waterfalls, lush greenery, and rich history, Malshej
                    Ghat is an ideal destination for those looking to
                    immerse themselves in nature and explore the charm of
                    the Western Ghats. Whether you're trekking through misty
                    hills, enjoying a picnic by a waterfall, or simply
                    soaking in the serene ambiance, Malshej Ghat in monsoon
                    promises a memorable and rejuvenating experience for
                    every visitor.</p>
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