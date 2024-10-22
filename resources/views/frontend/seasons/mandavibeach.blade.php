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
      <h1>Mandavi Beach</h1>
    </section>

    <!-- Content Section -->
    <section class="content-section container">
      <div class="row">
        <div class="col-md-12">
          <h2>Mandavi Beach: A Serene Coastal Retreat</h2>
          <p>
            Mandavi Beach is located in Ratnagiri, Maharashtra, along the
            stunning Konkan coast. Situated about 14 km from the city center of
            Ratnagiri and approximately 350 km from Mumbai, this beach is a
            hidden gem known for its pristine sands, clear waters, and laid-back
            atmosphere. It offers a perfect escape from the crowded tourist
            spots, making it ideal for those seeking tranquility and natural
            beauty.
          </p>
        </div>
        <div class="col-12">
          <h2>Key Attractions & Activities</h2>
          <ol>
            <li>
              <strong>Beach Activities :</strong>Mandavi Beach is perfect for
              relaxing, sunbathing, and enjoying the gentle waves. Visitors can
              indulge in swimming or take leisurely strolls along the shore,
              with the sound of waves creating a soothing backdrop.
            </li>
            <li>
              <strong>Bhilar Waterfalls :</strong>A short trek from Panchgani,
              these picturesque waterfalls are especially beautiful during the
              summer. The sound of water cascading over rocks amidst lush
              greenery creates a serene atmosphere, perfect for relaxation and
              photography.
            </li>
            <li>
              <strong>Water Sports :</strong>For the adventurous, Mandavi Beach
              offers a variety of water sports, including jet skiing, banana
              boat rides, and parasailing. These activities provide thrilling
              experiences and beautiful views of the coastline.
            </li>
            <li>
              <strong>Historical Significance :</strong>The beach is located
              near the historic Ratnadurg Fort, a 16th-century fort that
              provides a glimpse into the region's past. Exploring the fort
              allows visitors to enjoy panoramic views of the Arabian Sea and
              learn about the area’s rich history.
            </li>
            <li>
              <strong>Mandavi Lighthouse :</strong>Situated close to the beach,
              this lighthouse is another historical landmark. It offers stunning
              views of the coastline and is a great spot for photography
              enthusiasts.
            </li>
            <li>
              <strong>Local Cuisine :</strong>Mandavi Beach is famous for its
              fresh seafood. Visitors can relish local delicacies at the beach
              shacks and nearby restaurants. Don’t miss trying the Malvani fish
              curry, pomfret fry, and other coastal dishes.
            </li>
            <li>
              <strong>Sunset Views :</strong>The sunsets at Mandavi Beach are
              breathtaking, painting the sky with vibrant hues. It’s an
              excellent time for photography and enjoying a peaceful evening by
              the sea.
            </li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h2>Cultural & Historical Significance</h2>
          <p>
            Mandavi Beach holds historical importance due to its proximity to
            Ratnadurg Fort, which played a crucial role in the region's defense
            during the Maratha Empire. The fort's architecture reflects the
            region's rich heritage, making it a point of interest for history
            buffs. The beach is also a significant spot for local fishing
            communities, adding to its cultural charm.
          </p>
        </div>
        <div class="col-md-12">
          <h2>Travel Tips</h2>
          <ul>
            <li><strong>What to Pack:</strong></li>
            <ul>
              <li>
                <strong>Clothing :</strong>Light, breathable clothing is
                advisable due to the warm weather. Swimwear is recommended for
                those wanting to enjoy the water.
              </li>
              <li>
                <strong>Footwear :</strong> Comfortable sandals or flip-flops
                are ideal for walking on the beach.
              </li>
              <li>
                <strong>Sun Protection :</strong>Sunscreen, sunglasses, and a
                wide-brimmed hat are essential to protect against the sun’s
                rays.
              </li>
              <li>
                <strong>Essentials :</strong>A reusable water bottle to stay
                hydrated and beach towels for lounging on the sand.
              </li>
            </ul>
            <li>
              <strong>Road Trip Benefits:</strong>Mandavi Beach is easily
              accessible by road, making it a perfect destination for a weekend
              getaway or day trip.
            </li>
            <ul>
              <li>
                <strong>From Mumbai:</strong>The drive from Mumbai takes
                approximately 8 to 9 hours. The route is well-connected via NH
                66, providing scenic views of the Western Ghats and coastal
                landscapes.
              </li>
              <li>
                <strong>From Pune:</strong>The trip from Pune takes around 5 to
                6 hours. The journey is picturesque, with opportunities to stop
                at various viewpoints and local eateries along the way.
              </li>
            </ul>
            <p>
              Traveling by road allows visitors to explore the beautiful coastal
              roads and enjoy the lush greenery typical of the Konkan region.
            </p>
            <li>
              <strong>Where to Stay :</strong>Mandavi Beach offers various
              accommodation options, from luxury resorts to budget hotels:
            </li>
            <ul>
              <li>
                <strong>Luxury :</strong>For a lavish experience, consider
                staying at <b>The MTDC Ratnagiri Resort</b> or
                <b>Hotel Sangam</b> for beautiful sea views and modern
                amenities.
              </li>
              <li>
                <strong>Mid-range :</strong>Hotels like
                <b>Hotel Guhagar Beach</b> offer comfortable accommodations with
                easy beach access.
              </li>
              <li>
                <strong>Budget :</strong>There are several guesthouses and
                homestays available for budget travelers, providing a more
                personal touch to your stay.
              </li>
            </ul>
            <li>
              <strong>What to Expect:</strong>Visitors can expect a serene
              environment with fewer crowds compared to more commercial beaches.
              The laid-back atmosphere, friendly locals, and scenic beauty make
              Mandavi Beach a perfect place to unwind. Expect to enjoy warm
              hospitality and delicious local cuisine while soaking in the rich
              cultural heritage of the region.
            </li>
          </ul>
          <h3>Additional Tips:</h3>
          <ul>
            <li>
              <strong>Food Safety :</strong>While enjoying street food and local
              cuisine, choose busy eateries to ensure fresh food. Drink bottled
              or filtered water to stay safe and hydrated.
            </li>
            <li>
              <strong>Shopping :</strong>Look out for local handicrafts and
              souvenirs, such as handmade jewelry and pottery, in nearby markets
              to take home a piece of the region’s charm.
            </li>
          </ul>
          <p>
            Mandavi Beach in Ratnagiri is a tranquil coastal retreat that offers
            a perfect blend of natural beauty, adventure, and cultural richness.
            With its stunning views, historical significance, and delicious
            cuisine, it’s an ideal destination for travelers seeking relaxation
            and exploration along the Konkan coast. Whether you're lounging on
            the beach, exploring historical landmarks, or indulging in local
            delicacies, Mandavi Beach promises an unforgettable experience
            filled with the essence of coastal Maharashtra.
          </p>
        </div>
      </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="cta-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Ready for Your Adventure?</h2>
            <p>
              Book your cab now and start your unforgettable road trip to
              Mahabaleshwar!
            </p>
            <a href="#" class="btn btn-primary">Book Your Roadtrip Today!</a>
          </div>
        </div>
      </div>
    </section>

    @endsection

    @section('inline-js')
    @endsection