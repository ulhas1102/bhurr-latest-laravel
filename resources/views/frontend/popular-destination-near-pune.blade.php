@extends('frontend-layout.app')
@section('title', 'popular location - page')
@section('inline-css')
<style>
    .section-image {
        width: 100%;
        height: auto;
        max-height: 300px;
        object-fit: cover;
        margin-bottom: 20px;
    }

    .read-more-content {
        display: none;
    }

    .read-more-btn {
        color: white;
        cursor: pointer;
        margin-top: 10px;
    }
</style>
@endsection

@section('content')ī
<div class="container py-5">
    <!-- Section 1 -->
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="{{asset('new-layouts/assets/image/popular-destination/lavasa.webp')}}" class="section-image" alt="Section 1 Image">
        </div>
        <div class="col-md-6">
            <h2>Lavasa-60 km</h2>
            <span>
                <p>
                    Located at a distance of about 65 km from Pune, the beautifully planned city of Lavasa is surrounded by the majestic Western Ghats. The city is constructed in the Mulshi Valley and covers a sprawling 25,000 acres. With such mesmerizing views of hills, valleys, and lakes, the city has gained immense popularity among different types of travelers. The beauty of this privately planned city lies in the seamless blend of stunning infrastructure and the enrapturing beauty of nature. Here, you will find different topographical variations such as the lofty Sahyadri range, the beautiful rivers, and the gorgeous valleys.
                </p>
                <span class="read-more-content">
                    <p> The serene ambiance coupled with the raw beauty of nature soothes the soul from the stressful chaos of daily life. The magnificent city of Lavasa boasts numerous attraction sites. You can explore the enigmatic beauty of nature in the form of Tikona Fort, Devkund waterfall, Dasve Viewpoint, and the Tamhini Ghat. However, if you seek adventure, then you can visit the Xthrill Adventure Academy, Vortex Splash Pad, etc. No matter your traveling preferences, rest assured your wanderlust will be satisfied. There are a plethora of activities that you can indulge in Lavasa. If you are an adventure fanatic, then there are various exciting adventurous activities for you. You can try out rappelling, hiking, camping, raft building, biking, etc. However, if what you seek is peace and the chance to admire nature, you can do that too. Now, if you are a foodie, then Lavasa will definitely not disappoint you. Here, you will find different regional and global cuisines. With an altitude of about 3000 sq feet from the sea level, Lavasa enjoys a tropical climate. It means that the weather is pleasant throughout the year. However, the best time for a visit is between the months of September and March.</p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>

    <!-- Section -->
    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <img src="{{asset('new-layouts/assets/image/popular-destination/malshej.webp')}}" class="section-image" alt="Section 2 Image">
        </div>
        <div class="col-md-6">
            <h2>Malshej Ghat-140km</h2>
            <span>
                <p>
                    Another exotic location which is one of the must places to visit in Pune for you is the Malshej Ghat. Known for its amazing beauty with the hill stations you will remain awestruck once you visit this place. A wonderful slope station with its various lakes, waterfalls, and mountains, Malshej Ghat is well known among explorers, trekkers, and nature lovers.
                </p>
                <span class="read-more-content">
                    <p> Malshej Ghat is a perfect withdraw from the fuss of city life and is a paradise house of normal excellence. Feel the thrill ass you indulge in some amazing activities here.</p>
                    <p>With an uncountable number of waterfalls to wonderfully organized dams and steep, grandiose strongholds, a ghat is an ideal place for nature lovers. This place is particularly excellent amid storms and is one of the most loved weekend getaways for youngsters from Mumbai, Pune, and Thane. </p>
                    <p><b>Type of Destination:</b> Hilly</p>
                    <p><b>Activities:</b> Photography, sightseeing, visit various lakes, waterfalls, and mountains etc</p>
                    <p><b>Best time to visit:</b> Throughout the year.</p>
                    <p><b>Distance from Pune:</b> 120 Km</p>
                    <p><b>Location:</b>Mountain pass in Maharashtra</p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="{{asset('new-layouts/assets/image/popular-destination/panshet.webp')}}" class="section-image" alt="Section 3 Image">
        </div>
        <div class="col-md-6">
            <h2>Panshet-35km</h2>
            <span>
                <p>
                    Another exotic location which is one of the must places to visit in Pune for you is the Malshej Ghat. Known for its amazing beauty with the hill stations you will remain awestruck once you visit this place. A wonderful slope station with its various lakes, waterfalls, and mountains, Malshej Ghat is well known among explorers, trekkers, and nature lovers.
                </p>
                <span class="read-more-content">
                    <p> Located amidst a green environment and surrounded by enthralling waterfalls, the famous Panshet Dam offers an entire day of excursion for couples, families, and friends. Travelers visiting Panshet love to enjoy a myriad of fun-filled activities including windsurfing, boat rides, kayaking, rock climbing, and trekking.</p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>

    <!-- Section 4 -->
    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <img src="{{asset('new-layouts/assets/image/popular-destination/pawana.webp')}}" class="section-image" alt="Section 4 Image">
        </div>
        <div class="col-md-6">
            <h2>Pawna: 64 km</h2>
            <span>
                <p>For those of you who are looking for some time away from the hustle and bustle of daily life then this is from must place to visit near Pune for you. The Pawna lake is a man-made lake that is shaped by the waters of the dam by a similar name.</p>
                <span class="read-more-content">
                    <p>Situated close Lonavala in Maharashtra, this curious goal is the ideal spot to invest some calm energy in the organization of family and companions. The backwaters of the lake compensate for an excellent view which is improved complex amid the rainstorm season and making it a perfect place for Pawna lake camping.</p>
                    <p>The Lohgad, Tikona and Tungi Forts are likewise found adjacent which makes it the ideal end of the weekend getaway near Pune. Lying appropriate in the lap of beautiful magnificence, the Pawna Lake is a laid back goal ideal for enjoying Maharashtra's charms. This lake is acclaimed for a host of activities such as paragliding, advanced kiting and ridge dancing.
                    </p>
                    <p><b>Type of Destination:</b> Family getaway</p>

                    <p><b>Activities:</b> Camping, sightseeing, photography, nature walk, camping</p>

                    <p><b>Best time to visit:</b> During the monsoon season.</p>

                    <p><b>Distance from Pune:</b>56.5 km</p>

                    <p><b>Location: </b>Pawna Lake, Lonavala, Maharashtra</p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="{{asset('new-layouts/assets/image/popular-destination/lonavala.webp')}}" class="section-image" alt="Section 5 Image">
        </div>
        <div class="col-md-6">
            <h2>Lonavala: 64 km </h2>
            <span>
                <p>Lonavala city is one of the most beautiful retreats, that takes you away from the maddening rush of the metropolises. It is located in the western part of India in the Pune district of Maharashtra. This hill station lies 96 kilometres east of the metropolitan city of Mumbai and 64 kilometres west of modern-day Pune city. Therefore, a profound location on the Mumbai-Pune expressway makes Lonavala cater to both cities with the smoothest connectivity through roads.</p>
                <span class="read-more-content">
                    <p>Lonavala City is popularly called the “city of caves' and the “Jewel of Sahyadri”. That is because the hill station boasts some of the most spectacular settings, including luxuriant green valleys, remarkable caves, serene lakes and stunning waterfalls. The spectacular rock-cut Bhaja and Karla caves in Lonavala have been notable tourists with their old beams, motifs and inscriptions.</p>
                    <p>The surrounding regions of Lonavala are blessed with an unbeatable collection of waterfalls that include the Kune waterfall, Bhivpuri, Bhagirath and Jummapatti waterfalls. The refreshing ambience of the postcard-perfect landscape of Aamby Valley, Pawna Lake and Lonavala Lake is bound to impress you. Lonavala is famous for its natural wonders, religious attractions, and historical sites. These include the Tikona Fort, Duke’s Nose, Lohagad and Rajmachi fort.</p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>
    <!-- Section 6 -->
    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <img src="{{asset('new-layouts/assets/image/popular-destination/kamshet.webp')}}" class="section-image" alt="Section 5 Image">
        </div>
        <div class="col-md-6">
            <h2>Kamshet: 48 km</h2>
            <span>
                <p>Kamshet also known as the paragliding capital of India is located in the state of Maharashtra. It is 45 km from Pune, 16 km from Lonavala and Khandala, and 110 km from Mumbai. Surrounded by the Western Ghats and decked with Sahyadri Ranges' beauty, Kamshet is a fairyland with rich flora and fauna. It has a quaint vibe coupled with a rich cultural heritage, and you will get enchanted with its ever-captivating beauty.</p>
                <span class="read-more-content">
                    <p>The gurgling waterfalls, monasteries, beautiful temples, and magnanimous hills are an emblem for serenity. It is a paragliding paradise that has been featured in the top ten must visit destinations of India for an enthralling expedition. Hence, it is dotted with many flying and paragliding schools. Kamshet is one of the best paragliding spots in India owing to its perfect weather and highly suitable topography. There are some of the best paragliding spots here like Shinde Wadi Hills, Tower Hill, Shelar and Kondeshwar Cliff.</p>
                    <p>It is also blessed with Buddhist caves having sculptures and images of Lord Buddha. Some of the most picturesque lakes, such as Pawna Lake and Uksan Lake that offer a blissful escape from the fast-paced city life are also here. Begin your heritage exploration by visiting Tikona Fort, Lohagad Fort, and Visapur Fort, a testament to the rich past of this city. Kamshet is a hub for parasailing and you can try here acro tandem to instructional tandem and joy tandem. You can also pitch your tent at Pawna Lake to witness the sparkling night sky and learn about the local culture.</p>
                    <p>
                        Enjoy a trekking expedition at Visapur fort and enjoy zip-lining at Pawna Lake. Take part in cave Exploration at Bhairi caves and Bedse caves that are situated on the high rocks of Kamshet. Or simply relish the local food and world-class cuisines at some of the best restaurants and dhabas. Kamshet experiences a tropical climate with warm summers and cool winters. The summers start from March and extend till the end of April. During the summers, it experiences high humidity, and hence this season might feel uncomfortable visiting the town.
                    </p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>

    <!-- Section 7 -->
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="{{asset('new-layouts/assets/image/popular-destination/khandala.webp')}}" class="section-image" alt="Section 5 Image">
        </div>
        <div class="col-md-6">
            <h2>Khandala: 69 km</h2>
            <span>
                <p>Khandala City is a hill station that is located on the Western Ghats Mountain Range of Maharashtra. It is about 3 km from Lonavala, 12 km from Khopoli and about 33.4 km from Karjat region. Located at the top of Bhor Ghat, this place serves as the main link between the major cities of Maharashtra - Mumbai and Pune.</p>
                <span class="read-more-content">
                    <p>Khandala is a beautiful place and has got a good share of nature’s alluring beauty. As it is surrounded by lush green forest covers, misty valleys, and cascading waterfalls, this place serves as a great weekend getaway as well as adventure hotspot for travellers from various parts of the country. Khandala is mainly famous for hiking tours to sight panoramic views of the Sahyadri mountain ranges in Western Ghats.</p>
                    <p>Khandala is home to some of the wonderful tourist attractions in Western India. You can visit the vantage spots like Rajmachi Point and Sunset Point, dramatic three tiered Kune waterfalls, serene Tamhini ghat mountain pass, and ancient caves of Bhaja and Karla which are adorned with the etchings of Buddhist religion. You can also visit Lohagad which is known for its serene environs, Bhushi Lake for its peaceful ambience, Duke’s Nose for its impeccable beauty and many other brilliant attractions.</p>
                    <p>Khandala is also a dream destination for adventure lovers. You can trek to the summit of the Tiger’s leap to sight pristine sunrise and sunset views, trek to the top of the Rajmachi fort to sight alluring natural beauty, relish the mesmerizing ambience at the reversing station, and trek up to the Shrivardhan Fort to glance the beautiful Sahyadri Mountain ranges.</p>
                    <p>As Khandala lies about 571 meters above sea level, the climatic condition here remains tropical. Khandala receives significant rainfall in most months with a very short dry season. The average temperature of this place is 24.3 degree celsius and the annual rainfall is recorded at 4541 mm per year. </p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>
    <!-- Section 8 -->
    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <img src="{{asset('new-layouts/assets/image/popular-destination/mahabaleshwar.webp')}}" class="section-image" alt="Section 5 Image">
        </div>
        <div class="col-md-6">
            <h2>Mahabaleshwar: 120 km </h2>
            <span>
                <p>Looking for a great weekend then this hill station is one of the must-visit places around Pune for you. Another beautiful hill station in the Western Ghats, aside from its strawberries, Mahabaleshwar is likewise notable for its various waterways, superb falls, and grand pinnacles. Mahabaleshwar is a slope station situated in the Western Ghats, in the Satara locale of Maharashtra. </p>
                <span class="read-more-content">
                    <p>Known for its spellbinding excellence and the wonderful strawberry cultivates, the city includes antiquated temples, schools, manicured and rich green thick woods, waterfalls, hills, valleys. The British-assembled manors, cabins, and homes around the town just add to the general appeal of the city. </p>
                    <p>Mahabaleshwar is additionally well known for its strawberry gardens and honey. The city is unquestionably among the most looked for after the end of the week getaways from Mumbai. Enchanting perspectives, alluring valleys, peaceful lakes will definitely make your vacation a special one.
                    </p>
                    <p><b>Type of Destination: </b>Family getaway</p>
                    <p><b>Activities: </b>Boating in Veena Lake, photography, sightseeing, hiking</p>
                    <p><b>Best time to visit:</b> September to May</p>
                    <p><b>Distance from Pune:</b> 120 km</p>
                    <p><b>Location: </b>Southwest of Pune, in Satara district</p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>
    <!-- Section 9 -->
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="{{asset('new-layouts/assets/image/popular-destination/rajmachi.webp')}}" class="section-image" alt="Section 5 Image">
        </div>
        <div class="col-md-6">
            <h2>Rajmachi Fort: 78 km</h2>
            <span>
                <p>Clad in history and ancient tales, the quaint village of Rajmachi is also among the best places to visit near Pune in monsoon. Located around 78km from the city limits, this hamlet is embraced by the enchanting charm of the Sahyadri Mountains and the historic Rajmachi Fort serving as the main attraction</p>
                <span class="read-more-content">
                    <p>With the fortified Shrivardhan and Manaranjan forts as the fortified structures, a trek to Rajmachi Fort is a must for the adrenaline junkies. Taking you to an astounding height of 2,710ft, this hike trails through the dense thickets, easy yet thrilling terrains and finally takes you to the summit, where you can revisit history along with enjoying panoramic views of the surroundings. </p>
                    <p><b>Type of Destination:</b>Family getaway</p>
                    <p><b>Activities:</b> Trekking and camping are conducted by adventure groups throughout the year.</p>
                    <p><b>Best time to visit:</b> During the month of October to March</p>
                    <p><b>Distance from Pune:</b> 170 km</p>
                    <p><b>Location:</b> Midway between Khandala and Lonavala</p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>
    <!-- Section 10 -->
    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <img src="{{asset('new-layouts/assets/image/popular-destination/panchghani_hill.webp')}}" class="section-image" alt="Section 5 Image">
        </div>
        <div class="col-md-6">
            <h2>Panchgani: 101 km</h2>
            <span>
                <p>Named after the five majestic hills enclosing it, Panchgani makes for a renowned hill station in the Indian state of Maharashtra. Perched at an elevation of around 1,334 meters above sea level, this hill town is packed with towering mountains, serene valleys, cascading waterfalls, and dense forests.</p>
                <span class="read-more-content">
                    <p>Overlooked by the Sahyadri mountains, this town served as a beautiful summer retreat for the British officials in the bygone times. At the present day, Panchgani is visited by a plethora of tourists seeking peace, romance, nature, and adventure. Enthralling local destinations such as Sydney Point, Table Land, Rajpuri Caves, and Dhom Dam form the major attractions of Panchgani and add to the beauty and charm of the place. Panchgani is not limited just to a few picturesque sights, but also goes beyond to offer its visitors a plethora of mind-boggling activities.</p>
                    <p>From shopping at Shivaji Circle to admiring nature at Wai and from exploring history at Kamalgad Fort to boating at Venna Lake, this place has everything to let you experience an action-packed holiday. If you are a daredevil and seeking adventure activities, Panchgani can offer you a plethora of adrenaline-fuelled sports including paragliding, rock climbing, trekking, speed boating, and horse riding.</p>
                    <p>One of the top aspects that adds to the pleasurable vacation at Panchgani is the availability of top-class accommodation facilities in this town. Panchgani is bestowed with a plethora of budget-friendly as well as luxury resorts and hotels that are suitable for families, couples, and friends. These hotels are well-equipped with modern amenities and offer amazing facilities including thrilling outdoor activities. Furthermore, packed with many nature-friendly camping destinations, this place also allows the travelers to enjoy surreal night camping opportunities.</p>
                    <p>So, no matter the kind of traveler you are, pack your bags to Panchgani and discover an exquisite holiday brimming with history, adventure, nature, and a lot more. </p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>
    <!-- Section 11 -->
    <div class="row mb-5">
        <div class="col-md-6">
            <img src="{{asset('new-layouts/assets/image/popular-destination/bhimashankar.webp')}}" class="section-image" alt="Section 5 Image">
        </div>
        <div class="col-md-6">
            <h2>Bhimashankar-134KM</h2>
            <span>
                <p>Having one among the 12 Jyotirlingas of Lord Shiva, Bhimashankar is one of the famous temple towns of Maharashtra. Perched at an elevation of about 3,250 feet above sea level and covered with towering hills and dense rainforests, this place attracts nature lovers and trekkers as well.</p>
            </span>
        </div>
    </div>
    <!-- Section 12 -->
    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <img src="{{asset('new-layouts/assets/image/popular-destination/bhandardara.webp')}}" class="section-image" alt="Section 4 Image">
        </div>
        <div class="col-md-6">
            <h2>Bhandardara: 175KM</h2>
            <span>
                <p>Perched beautifully amidst the Sahyadri ranges in the state of Maharashtra, Bhandardara is a
                    wonderful hill station for nature lovers. It is often called the Queen of Sahyadri ranges for its
                    lush green natural landscapes. The name Bhandardara literally translates to valley of treasures and
                    it is not a doubt to say that the natural beauty of this place certainly justifies the name. It is a
                    picturesque retreat for the backpackers in Ahmednagar district and boasts of some scintillating
                    natural attractions for those who are fond of raw beauty of nature </p>
                <span class="read-more-content">
                    <p>The village has prominent places like Wilson Dam, Umbrella Falls and Arthur Lake where you can
                        plan a picnic with your loved ones. The village is also a delight for history lovers as there
                        are places like Ratangad and Harishchandragad Fort. Another famous tourist attraction of
                        Bhandardara is Mount Kalsubai which is also hailed as the highest peak in Maharashtra. There are
                        also many local villages where one can visit to relax and enjoy the pleasant weather of this
                        scenic hill station in Maharashtra. </p>

                    <p>For the adventure lovers, there are some enthralling activities where you can explore Ajoba and
                        Ghanchakkar peaks to soak in the serenity of nature with the views offered by Sahyadri ranges.
                    </p>
                    <p>
                        There are numerous trekking and hiking places in the Sahyadri ranges where you can savour an
                        adrenaline rush. Bhandardara also has various resorts where one can enjoy the panoramic views
                        and just relax with their loved ones. The gorgeous hill station offers a soothing environment
                        with a cool climate throughout the year where you can refresh yourself and see some of the most
                        eye-catching vistas of the Sahyadri ranges.</p>
                    <p>
                        Bhandardara is a small village where the tourists are in for a treat as they are surrounded by
                        mountains and enchanted by gurgling waterfalls away from the hustle and bustle of the cities.
                        The place is a wonderful respite when you are looking for a rejuvenating weekend getaway near
                        the city of Mumbai.</p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>

    <!-- Section 13 -->
    <div class="row mb-5">
        <div class="col-md-6 ">
            <img src="{{asset('new-layouts/assets/image/popular-destination/mulshi.webp')}}" class="section-image" alt="Section 4 Image">
        </div>
        <div class="col-md-6">
            <h2>Mulshi: 43KM</h2>
            <span>
                <p>The scenic Mulshi Lake is created in the Mulshi Dam’s catchment area. This place is known popularly
                    for its outstanding natural beauty owing to the majestic Sahyadri ranges. </p>
                <span class="read-more-content">

                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>


    <!-- Section 14 -->
    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <img src="{{asset('new-layouts/assets/image/popular-destination/matheran.webp')}}" class="section-image" alt="Section 1 Image">
        </div>
        <div class="col-md-6">
            <h2>Matheran-125KM</h2>
            <span>
                <p>
                    Known as the” cutest little hill station of India”, the Matheran hill station is the best place to
                    enjoy the sunset and sunrise view along with some mind blowing sceneries to keep you fresh and up
                    front. This extraordinary hill station offers the best tourist places in Matheran which are
                    untouched and undisturbed by the rustling city life that surrounds the town. The place is actually
                    located on the Western Ghats that ranges in an elevation of around 800 meter above the sea level.
                    The place always has a pleasant weather to enjoy during any time of the year, but its beauty gets
                    added up during the season of rain and thunderstorm
                </p>
                <span class="read-more-content">
                    <p> Another thing about the beautiful hill station is that it is eco friendly and has no rush of
                        cars and buses honking on the street. The major was taken by the government of Maharashtra in
                        order to protect Matheran. The best thing about this place is that it is like a quiet and
                        relaxing place with no buzzing of horns and pollution and along with that it contains some
                        mesmerizing places and views of the extraordinary nature that will leave you bewitched of its
                        beauty and make you feel relax and stress free.</p>

                    <p> Just not only trekker, Matheran is a treat for the photographers also to explore and capture the
                        best of the beauty of the beautiful hill station. The beauty of Western Ghats, Matheran is the
                        smallest hill station of India. Travellers and tourists who visit the place love exploring the
                        place by walking on foot. By which it becomes more exciting to get lost in the scenic beauty of
                        the town while finding your way. Plan your trip to Matheran and indulge yourself in various
                        activities that Matheran provides like camping, trekking, rappelling etc.</p>

                    <p>
                        Matheran town is the best option for a person who loves getting lost in the nature and also for
                        those who wants to take a break from their busy city life. The tourist places in Matheran are
                        absolutely breathtaking.
                    </p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>

    <!-- Section 15 -->
    <div class="row mb-5">
        <div class="col-md-6 ">
            <img src="{{asset('new-layouts/assets/image/popular-destination/kolad.webp')}}" class="section-image" alt="Section 4 Image">
        </div>
        <div class="col-md-6">
            <h2>Kolad: 113KM</h2>
            <span>
                <p>Located around 110 kilometres from Mumbai, Kolad is a small hamlet in the beautiful Raigad district
                    of Maharashtra. Often called the Rishikesh of Maharashtra, the village boasts of numerous scenic
                    valleys, which offers stunning views of the surrounding mist-laden hills and dense evergreen
                    forests. The verdant greenery, clear streams and a peaceful ambience add to the beauty of this
                    quaint hamlet. </p>
                <span class="read-more-content">
                    <p> Kolad is a treasure trove of sightseeing attractions, and caters to all kinds of tourists. Some
                        of the best attractions in Kolad City include the Kundalika River, which is the hub of white
                        water rafting in the region. You can also visit the serene Tamhini Ghat, and soak in picturesque
                        views of the surrounding hills. Or you can enjoy a fun-filled and memorable picnic at the Bhira
                        Dam, while enjoying views of the gorgeous Devkund Waterfalls. Other famous attractions of Kolad
                        include the ancient Ghosala Fort and the Kuda Caves. You can also enjoy camping and bird
                        watching at the tranquil Sutarwadi Lake, or enjoy the history at the Talgad Fort. For adventure
                        sports lovers, you can go trekking at the Plus Valley, or hike to the Devkund Waterfalls.</p>

                    <p>From water sports like white water rafting and boating, to adventure activities like hiking,
                        camping, nature walks and trekking, Kolad has a lot of thrilling activities for travellers. Due
                        to its advantageous location, you can also enjoy paragliding in Kolad when the day is clear.</p>

                    <p>Kolad experiences a typical tropical climate, with pleasant weather throughout the year. While
                        the summers here are a little humid as compared to the other seasons, the monsoons are the best
                        time to enjoy a river rafting experience in Kolad. Furthermore, the rains during this time make
                        the entire region come to life, with the waterfalls and rivers flowing at their full speed, the
                        forests and valleys experiencing the blooming of flowers and plants and an overall soothing and
                        calm atmosphere. The months from November to February make up the cold winter season in Kolad,
                        when the village transforms into a winter wonderland with dipping temperatures and beautiful
                        sceneries. This is also a great time for sightseeing, hiking and other activities.</p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>


      <!-- Section 16 -->
      <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <img src="{{asset('new-layouts/assets/image/popular-destination/harihareshwar.webp')}}" class="section-image" alt="Section 1 Image">
        </div>
        <div class="col-md-6">
            <h2>Harihareshwar Beach</h2>
            <span>
                <p>
                    Set amidst four lofty hills, Harihareshwar is popular for its beautiful shrine of the Hindu god Lord
                    Harihareshwar and several pristine beaches. This place is packed with a plethora of age-old temples
                    that represent the Marathi architectural style and attract spiritual seekers from across the globe.
                    Harihareshwar Beach – Gentle winds that soothe your inflamed nerves
                </p>
            </span>
        </div>
    </div>

    <!-- Section 17 -->
    <div class="row mb-5">
        <div class="col-md-6 ">
            <img src="{{asset('new-layouts/assets/image/popular-destination/mandwa.webp')}}" class="section-image" alt="Section 4 Image">
        </div>
        <div class="col-md-6">
            <h2>17. Mandwa Beach</h2>
            <span>
                <p>Striking beauty with flaked coconut trees </p>
            </span>
        </div>
    </div>

    
    <!-- Section 18 -->
    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <img src="{{asset('new-layouts/assets/image/popular-destination/alibaug.webp')}}" class="section-image" alt="Section 1 Image">
        </div>
        <div class="col-md-6">
            <h2>Alibaug Beach</h2>
            <span>
                <p>
                    Located just below the border of Mumbai, Alibag is a little coastal town in the state of
                    Maharashtra. The name of the town literally means “The Gardens of Ali” and refers to the fruit
                    orchards that were planted by Ali, an Israelite who used to live in the town during its earliest
                    days. Owing to its convenient location by the sea, the town was regarded as an important strategic
                    port during the British reign in India. Being a coastal town, the beauty of Alibaug derives largely
                    from the various beaches here. With its glittering golden black sands and clear blue waves, the
                    clean and sparkling beaches of the town are a sight to behold. The brilliance of the beaches is
                    often complemented by the historical fort ruins and ancient temples that can often be found
                    scattered around the place.
                </p>
                <span class="read-more-content">
                    <p> Whether you’re a lover of the sea or a history buff looking for an insightful vacation, Alibaug
                        is just the place for you. The excellent beaches here, such as the Alibaug Beach, Mandwa Beach
                        or Nagaon Beach, among others, offer a happening day out for the entire family. Apart from the
                        regular swimming and sunbathing, some of these beaches offer a marvelous variety of watersports
                        as well.T hose with a penchant for the past can also spend a happening day touring all the
                        historical attractions here, such as the Brahma Kund or the Kolaba Fort. One of the best ways to
                        spend your time while in Alibaug is to try your hand at the watersports offered by the beach
                        here.

                        Sports like parasailing, jet skiing and banana boating can be done by beginners as well as
                        experts, and promise a fun experience for all. While in Alibaug, you can also try your hand at
                        camping, with the several beachside campsites here offering perfect locations for the activity.
                        Summers in Alibaug are generally hot and humid, winter months tend to be cooler and pleasant.
                        Winter here lasts between November and February, and is generally considered to be the best time
                        to visit. Rainfall in Alibaug generally concentrates between the months of July and September,
                        while the winter months remain dry.
                    </p>
                </span>
            </span>
            <span class="read-more-btn text-muted">Read More....</span>
        </div>
    </div>


</div>

@endsection

@section('inline-js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get all the read more buttons
        const readMoreButtons = document.querySelectorAll('.read-more-btn');

        readMoreButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Get the sibling read-more-content element
                const content = this.previousElementSibling.querySelector('.read-more-content');

                // Toggle the visibility of the extended content
                if (content.style.display === "none" || content.style.display === "") {
                    content.style.display = "inline"; // Show content
                    this.textContent = "Read Less....."; // Change button text
                } else {
                    content.style.display = "none"; // Hide content
                    this.textContent = "Read More....."; // Reset button text
                }
            });
        });
    });
</script>
@endsection




