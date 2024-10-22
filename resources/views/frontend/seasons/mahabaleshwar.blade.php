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
        .content ul,.content ol {
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
        <h1>Mahabaleshwar</h1>
    </section>
    <div class="container content py-md-5 py-3">
        <div class="row">
            <div class="col-md-12">
                <h2>Mahabaleshwar</h2>
                <p>Mahabaleshwar, a charming hill station in Maharashtra’s Western Ghats, is a favored winter destination for travelers. At an elevation of 1,353 meters (4,439 feet), Mahabaleshwar experiences cool temperatures between 10°C to 24°C during winter (November to February). This makes it ideal for outdoor activities, scenic sightseeing, and a peaceful retreat away from city life.
                </p>
            </div>
            <div class="col-md-12">
                <h2>Key Attractions & Activities</h2>
                <ol>
                    <li>
                        <strong>Venna Lake:</strong> A must-visit spot for boating and horse riding, Venna Lake is surrounded by evergreen forests. The cool, crisp air of winter adds a magical touch to the serene lake.
                    </li>
                    <li>
                        <strong>Pratapgad Fort:</strong> This historic fort, built by Chhatrapati Shivaji Maharaj in 1656, is about 24 km from Mahabaleshwar. The fort offers panoramic views of the Sahyadri mountain ranges, and the winter skies provide a perfect backdrop for history lovers.
                    </li>
                    <li>
                        <strong>Arthur’s Seat:</strong> Known as the "Queen of all points," Arthur’s Seat offers stunning views of the dense valleys and hills. The winter season enhances the beauty of the spot with clear skies and fresh mountain breezes.
                    </li>
                    <li>
                        <strong>Mapro Garden:</strong> Mahabaleshwar is famous for its strawberries, and Mapro Garden is the heart of this culture. In winter, you can enjoy fresh strawberry-based treats like jams, ice creams, and shakes. Winter is also strawberry harvest time, so visitors can even hand-pick strawberries.
                    </li>
                    <li>
                        <strong>Lingmala Waterfall:</strong> Even though the waterfall is more active during monsoon, the winter still brings in a soft, steady flow of water. The surrounding greenery and peaceful atmosphere make this spot ideal for nature lovers.
                    </li>
                    <li>
                        <strong>Elephant’s Head Point:</strong> This popular lookout point offers views of natural rock formations that resemble an elephant’s head. The stunning scenery of the cliffs and valleys is best enjoyed in winter when the weather is cool and the air is clear.
                    </li>
                </ol>

            </div>
            <div class="col-md-12">
                <h2>Travel Tips</h2>
                <ul>
                    <li>
                        <strong>What to Pack:</strong> Winter in Mahabaleshwar is cool, especially at night when temperatures can drop to around 10°C (50°F). Travelers should pack warm clothing like jackets, sweaters, scarves, and woolen caps. Comfortable walking shoes are essential for exploring the various lookout points and forts.
                    </li>
                    <li>
                        <strong>Road Trip Benefits:</strong> Driving to Mahabaleshwar is one of the best ways to reach this hill station. Whether traveling from Mumbai (260 km) or Pune (120 km), the journey offers scenic drives through lush green ghats, winding roads, and panoramic views of the mountains. The winter months make for safe and comfortable driving, with pleasant weather and clear skies. There are numerous pit stops along the way for tea, snacks, and short hikes, enhancing the overall road trip experience.
                        <ul>
                            <li><strong>From Mumbai:</strong> The drive takes around 5-6 hours, with the route passing through Lonavala, Khandala, and Wai, offering various viewpoints and food joints.</li>
                            <li><strong>From Pune:</strong> The 2-3 hour drive via NH48 is smooth, with a stop at Wai being a great place to stretch your legs and explore temples or enjoy a local meal.</li>
                        </ul>
                    </li>
                    <li>
                        <strong>What to Expect:</strong> Mahabaleshwar during winter is serene, with fewer tourists than in peak seasons. Expect clear skies, stunning sunsets, and fresh mountain air. The quiet ambiance is perfect for relaxing or going on nature walks. Additionally, local markets are bustling with fresh strawberries, jams, honey, and handmade leather products, offering travelers the opportunity to take home some unique souvenirs.
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <h2>Additional Tips:</h2>
                <ul>
                    <li><strong>Food:</strong> Don't miss out on trying local Maharashtrian delicacies like Pithla Bhakri, Vada Pav, and fresh strawberry products like strawberry with cream.</li>
                    <li><strong>Shopping:</strong> Apart from strawberries, local markets sell honey, squash, leather goods, and wooden handicrafts, making for great gifts or personal keepsakes.</li>
                </ul>

                <p>Winter in Mahabaleshwar offers a unique mix of adventure, culture, and relaxation. Whether you're there for the history, the scenic beauty, or the delicious strawberries, this hill station will leave you rejuvenated and inspired. With its pleasant weather, rich culture, and stunning views, it’s a winter retreat you won’t forget.</p>

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
                    <p>
                        Book your cab now and start your unforgettable road trip to
                        [Location Name]!
                    </p>
                    <button class="btn common__btn_two py-2">
                        Book Your Roadtrip Today!
                    </button>
                </div>
            </div>
        </div>
    </section>

    @endsection

    @section('inline-js')
    @endsection