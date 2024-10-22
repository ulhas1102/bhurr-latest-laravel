@extends('frontend-layout.app')
@section('title', 'Aurangabad - page')
@section('inline-css')

<style>
    .hero-section {
        background-image: url("{{asset('new-layouts/assets/image/city-img/aurangabad-page.webp')}}");
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
                        <h1>
                            Discover Chhatrapati Sambhajinagar (Aurangabad), <br> A City of
                            History and Culture
                        </h1>
                        <p>Bhurr - From Dream To Destination</p>
                        <button class="common__btn px-5 py-3">Book Now</button>
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
                        Chhatrapati Sambhajinagar (Aurangabad), located in Maharashtra, is
                        a city with a rich historical legacy. Known for its grand forts,
                        stunning caves, and ancient monuments, it is often called the
                        <b>City of Gates</b> due to its many ancient gateways. Whether
                        you’re a history buff, a spiritual seeker, or just looking to
                        explore a new city, Chhatrapati Sambhajinagar (Aurangabad) has
                        something for everyone. And with Bhurr, traveling around this
                        magnificent city is effortless and convenient.
                    </p>
                    <h2>Must-Visit Places in Chhatrapati Sambhajinagar (Aurangabad)</h2>
                    <ol class="text-justify">
                        <li>
                            <b>Ajanta Caves :</b> A UNESCO World Heritage Site, the Ajanta
                            Caves are a stunning collection of rock-cut Buddhist cave
                            monuments. Dating back to the 2nd century BCE, these caves
                            feature intricate paintings and sculptures that are a testament
                            to ancient Indian art.
                        </li>
                        <li>
                            <b>Ellora Caves :</b> Another UNESCO World Heritage Site, the
                            <b>Ellora Caves</b> are a marvel of rock-cut architecture. These
                            34 caves include Hindu, Buddhist, and Jain temples, with the
                            <b>Kailasa Temple</b> being the most iconic—carved out of a
                            single rock.
                        </li>
                        <li>
                            <b>Bibi Ka Maqbara :</b> Often called the Mini <b>Taj Mahal</b>,
                            this 17th-century monument was built by Aurangzeb in memory of
                            his wife. Its stunning white marble structure resembles the
                            famous Taj Mahal and is a must-visit for history lovers.
                        </li>
                        <li>
                            <b>Daulatabad Fort :</b> Once known as <b>Devgiri Fort</b>, this
                            historic fortress is located on a hill and is one of the most
                            impregnable forts in India. The steep climb to the fort offers
                            panoramic views and a fascinating journey through history.
                        </li>
                        <li>
                            <b>Chhatrapati Sambhajinagar (Aurangabad) Caves :</b> These 12
                            rock-cut caves, located on a hill near the city, date back to
                            the 6th and 7th centuries. They are known for their intricate
                            carvings, Buddhist iconography, and stunning sculptures.
                        </li>
                        <li>
                            <b>Panchakki :</b> A 17th-century water mill,
                            <b>Panchakki</b> is an engineering marvel that uses underground
                            water channels to power the mill. The serene garden surrounding
                            the monument is perfect for a peaceful retreat.
                        </li>
                        <li>
                            <b>Siddharth Garden and Zoo :</b> A beautiful garden and zoo
                            located in the heart of the city, it's a great spot for families
                            and nature enthusiasts. The lush green surroundings make it a
                            popular picnic spot.
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
                    <h2>Explore Nearby Tourist Locations</h2>
                    <p class="text-justify">
                        Chhatrapati Sambhajinagar (Aurangabad)’s strategic location makes
                        it a gateway to some of Maharashtra’s most popular tourist spots.
                        Bhurr offers rides to these destinations for a hassle-free
                        getaway:
                    </p>
                    <ol class="text-justify">
                        <li>
                            <b>Shirdi (130 km from Aurangabad) :</b>
                            Known for the <b>Sai Baba Temple</b>, Shirdi is a major
                            pilgrimage site for devotees from across the country. Bhurr
                            offers convenient rides to this spiritual town for a peaceful
                            and enriching visit.
                        </li>
                        <li>
                            <b>Lonar Crater Lake (140 km from Aurangabad) :</b>
                            Formed by a meteorite impact over 50,000 years ago,
                            <b>Lonar Crater Lake</b> is a unique natural wonder. Surrounded
                            by temples and hiking trails, it’s an excellent destination for
                            nature lovers and adventure enthusiasts.
                        </li>
                        <li>
                            <b>Grishneshwar Temple (30 km from Aurangabad) :</b>
                            One of the <b>12 Jyotirlingas</b>, the Grishneshwar Temple is a
                            revered Hindu pilgrimage site dedicated to Lord Shiva. Its
                            beautiful architecture and spiritual significance make it a
                            must-visit.
                        </li>
                        <li>
                            <b>Paithan (50 km away from Aurangabad) :</b>
                            Paithan is known for its ancient heritage and the
                            <b>Jayakwadi Dam</b>. It's also famous for the production of
                            <b>Paithani sarees</b>, traditional silk sarees with intricate
                            designs. Visit for a serene day trip by the dam or to shop for
                            authentic handloom sarees.
                        </li>
                        <li>
                            <b>Nanded (270 km from Aurangabad) :</b>
                            A significant Sikh pilgrimage site, Nanded is home to the
                            <b>Hazur Sahib Gurudwara</b>, one of the five Takhts in Sikhism.
                            It’s a place of immense spiritual importance and a great
                            destination for those seeking peace.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>
                        Ride with Bhurr - Your Travel Companion in Chhatrapati
                        Sambhajinagar (Aurangabad)
                    </h2>
                    <p class="text-justify">
                        Why deal with traffic, parking, or expensive taxis when Bhurr is
                        here to make your travel in Chhatrapati Sambhajinagar (Aurangabad)
                        stress-free? From exploring the ancient caves to visiting nearby
                        attractions, Bhurr is your trusted travel partner.
                    </p>
                    <ol class="text-justify">
                        <li>
                            <b>Affordable & Transparent Pricing :</b>
                            Travel around Chhatrapati Sambhajinagar (Aurangabad) with no
                            hidden fees, offering you great value for money.
                        </li>
                        <li>
                            <b>Quick & Easy Booking :</b>
                            Book a ride in seconds with the Bhurr app, available for Android
                            and iOS.
                        </li>
                        <li>
                            <b>Safety First :</b>
                            With well-trained drivers and safe vehicles, we ensure a
                            comfortable and secure journey.
                        </li>
                        <li>
                            <b>Clean & Comfortable Rides :</b>
                            Our vehicles are maintained to provide you with a clean,
                            comfortable, and enjoyable ride.
                        </li>
                        <li>
                            <b>Flexible Travel Options :</b>
                            Whether it’s a quick trip within the city or a longer ride to
                            nearby destinations, Bhurr caters to all your travel needs.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose bhurr -->
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h2>Why Choose Bhurr in Chhatrapati Sambhajinagar (Aurangabad)?</h2>
                    <p class="text-justify">
                        With Bhurr, you can easily visit Chhatrapati Sambhajinagar
                        (Aurangabad)'s famous attractions or take a quick ride to nearby
                        destinations. Our ride-sharing service ensures safety, comfort,
                        and affordability, making your travel experience smooth and
                        stress-free.
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
                    <h2>
                        Download the Bhurr App Today and Start Your Chhatrapati
                        Sambhajinagar (Aurangabad) Adventure!
                    </h2>
                    <p class="text-justify">
                        Explore the historic beauty of Chhatrapati Sambhajinagar
                        (Aurangabad) and the surrounding areas with Bhurr. Download our
                        app today to book your next ride and experience convenient and
                        comfortable travel at your fingertips.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @endsection
    @section('inline-js')
    @endsection