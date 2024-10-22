<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coming Soon - Cab Booking</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="{{asset('image/Favicon-36x36-1.jpg')}}" type="image/x-icon" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Platypi:ital,wght@0,300..800;1,300..800&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Platypi:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap");
      body,
      html {
        margin: 0;
        padding: 0;
        /* width: 100%;
        height: 100%; */
        font-family: Arial, sans-serif;
        position: relative;
        box-sizing: border-box;
      }
      #myVideo {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        top: 0;
        min-width: 100%;
        min-height: 100%;
        max-width: 100vw;
        max-height: 100vh;
        object-fit: cover;
        z-index: -1;
      }

      .background {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background: url("https://unsplash.com/photos/rFUFqjEKzfY/download?force=true")
          no-repeat center center/cover; */
        /* background-image: linear-gradient(
          to top,
          #2864dc,
          #0073bc,
          #006f7c,
          #29644d,
          #505644
        ); */
        /* background: linear-gradient(to right, #5f2c82, #49a09d);
        z-index: -1; */
        /* background-image: url(./image/106133.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center; */
      }
      .background::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.632);
        /* background-color: rgba(0, 0, 0, 0.3); */
      }

      .container {
        position: relative;
        z-index: 1;
      }

      .logo {
        max-width: 150px;
      }

      .video-container {
        width: 100%;
        max-width: 400px;
        /* background-color: aliceblue; */
        margin: 0 auto;
      }

      .video {
        width: 100%;
        height: auto;
        border-radius: 10px;
      }

      h1 {
        color: transparent !important;
        /* font-family: "Platypi", serif; */
        font-family: "Poppins", sans-serif;
        font-size: 70px;
        font-weight: 700;
        letter-spacing: 2px;
        -webkit-text-stroke: 3px #fff;
        text-align: center;
        margin-bottom: 20px;
      }
      h2 {
        color: #f3f4f5ea;
        font-size: 25px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
          Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
          sans-serif;
      }
	  h5 {
 		color: #f3f4f5ea;
		font-size: 20px;
		font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
      	Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
      	sans-serif;
	  }

      p {
        color: white;
      }

      a {
        color: #007bff !important;
        text-decoration: none;
        transition: 0.6s;
      }
      a:hover {
        color: rgb(0, 0, 0) !important;
      }
      @media (max-width: 768px) {
        h1 {
          font-size: 57px;
          letter-spacing: 1px;
          line-height: 57px;
        }
      }
    </style>
  </head>

  <body>
    <div class="background">
      <video autoplay muted loop id="myVideo">
        <source src="{{asset('image/Bhurr.mp4')}}" type="video/mp4" />
      </video>
      <div
        class="container d-flex justify-content-center align-items-start min-vh-100 text-center"
      >
        <div class="content mt-3">
          <img
            src="{{asset('image/Bhurr-Logo-new.png')}}"
            alt="Site Logo"
            class="img-fluid mb-md-4 mb-3 logo"
          />
          <h1 class="mb-md-4 mb-3">Coming Soon...</h1>
          <h2 class="mb-md-4 mb-3">
            We’re Crafting Your Perfect Ride!
          </h2>
          <h5 class="mb-md-4 mb-3">
            <p>Our new cab booking service is coming soon, and we can’t wait to make your travel experience exceptional.</p><p>Check back soon for our official launch or write us <a href="mailto:admin@bhurr.co.in" class="text-white"
                >admin@bhurr.co.in</a></p>
          </h5>
          <!-- <div class="video-container mb-md-4 mb-3">
            <video class="video" autoplay muted loop>
              <source
                src="./image/stock-footage-family-car-drives-on-arabian-city-skyscrapers-background-family-traveling-in-qatar-looped (1).webm"
                type="video/mp4"
                style="border-radius: 0"
              />
              Your browser does not support the video tag.
            </video>
          </div> -->

        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
