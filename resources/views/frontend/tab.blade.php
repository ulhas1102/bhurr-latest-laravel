<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Pill Tabs with Scroll Buttons</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .car-categories-container {
            display: flex;
            align-items: center;
            position: relative;
        }

        .car__categories_tab {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            -ms-overflow-style: none;  /* Internet Explorer 10+ */
            scrollbar-width: none;  /* Firefox */
            flex: 1;
        }

        .car__categories_tab::-webkit-scrollbar {
            display: none;  /* Safari and Chrome */
        }

        .nav-item {
            flex: 0 0 auto;
        }

        @media (max-width: 768px) {
            .scroll-left, .scroll-right {
                display: block;
            }
        }

        .scroll-left, .scroll-right {
            display: none;
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 10px;
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
        }

        .scroll-left {
            left: 0;
        }

        .scroll-right {
            right: 0;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="car-categories-container">
            <button class="scroll-left">&lt;</button>
            <ul class="nav nav-pills car__categories_tab" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#suv" role="tab" aria-controls="pills-home" aria-selected="true">SUV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#hatchback" role="tab" aria-controls="pills-profile" aria-selected="false">Hatchback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#sedan" role="tab" aria-controls="pills-contact" aria-selected="false">Sedan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#mpv" role="tab" aria-controls="pills-contact" aria-selected="false">MPV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#busses" role="tab" aria-controls="pills-contact" aria-selected="false">Buses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#tempo-traveller" role="tab" aria-controls="pills-contact" aria-selected="false">Tempo Traveller</a>
                </li>
            </ul>
            <button class="scroll-right">&gt;</button>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="suv" role="tabpanel" aria-labelledby="pills-home-tab">SUV Content</div>
            <div class="tab-pane fade" id="hatchback" role="tabpanel" aria-labelledby="pills-profile-tab">Hatchback Content</div>
            <div class="tab-pane fade" id="sedan" role="tabpanel" aria-labelledby="pills-contact-tab">Sedan Content</div>
            <div class="tab-pane fade" id="mpv" role="tabpanel" aria-labelledby="pills-contact-tab">MPV Content</div>
            <div class="tab-pane fade" id="busses" role="tabpanel" aria-labelledby="pills-contact-tab">Buses Content</div>
            <div class="tab-pane fade" id="tempo-traveller" role="tabpanel" aria-labelledby="pills-contact-tab">Tempo Traveller Content</div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const scrollContainer = document.querySelector('.car__categories_tab');
            const scrollLeftBtn = document.querySelector('.scroll-left');
            const scrollRightBtn = document.querySelector('.scroll-right');

            scrollLeftBtn.addEventListener('click', () => {
                scrollContainer.scrollBy({ left: -200, behavior: 'smooth' });
            });

            scrollRightBtn.addEventListener('click', () => {
                scrollContainer.scrollBy({ left: 200, behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>
