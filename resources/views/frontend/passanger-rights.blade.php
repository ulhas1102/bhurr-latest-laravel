@extends('frontend-layout.app')
@section('title', 'Passenger Right - page')
@section('inline-css')
    <style>
      .specialbooking-banner {
		  background-image: url("{{asset('new-layouts/assets/image/bg/hero__banner9.webp')}}");
        background-size: cover;
        background-position: center;
       min-height: 400px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
      }

      .banner-text .careers__heading {
        font-weight: bold;
        overflow: hidden;
        white-space: nowrap;
        /* width: 100%; */
        animation: typing 4s steps(30, end) forwards;
        margin: 0;
        color: white;
      }


      @media (max-width: 768px) {
        .career-banner {
          height: 300px;
        }

        .banner-text .careers__heading {
          font-size: 1.5rem;
          animation: typing 3s steps(25, end) forwards;
        }
      }

      /* ================ */
      /* .passenger__rights {
        padding: 20px 24px;
        background-color: #17171703;
        background: radial-gradient(
          rgba(23, 23, 23, 0.9) 0.5px,
          rgba(23, 23, 23, 0.01) 0.5px
        );
        background-size: 10px 10px;
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      } */
    </style>
</head>

<body class="driver__page__container">
  @endsection
 
@section('content')
    <div class="specialbooking-banner">
      <div class="banner-text">
        <h1 class="animate-text careers__heading">Passengers Rights</h1>
      </div>
    </div>

    <section class="py-md-5 py-3" style="background-color: #faf7f4">
      <div class="container">
        <div class="row">
          <div class="col-md-12 passenger__rights">
            <div>
              <ol style="padding-inline-start: 15px;">
                <li><b>Right to Safety:</b></li>
                <p>
                  Passengers have the right to a safe ride in a well-maintained
                  vehicle operated by a licensed driver.
                </p>
                <li><b>Right to Respect:</b></li>
                <p>
                  Passengers should be treated courteously and professionally by
                  the driver.
                </p>
                <li><b>Right to Non-Discrimination:</b></li>
                <p>
                  Services should be provided without discrimination based on
                  race, gender, disability, or other factors.
                </p>
                <li><b>Right to Transparency:</b></li>
                <p>
                  Passengers should receive clear information about fares,
                  routes, and any additional charges.
                </p>
                <li><b>Right to Privacy:</b></li>
                <p>
                  Personal information should be kept confidential and not
                  shared without consent.
                </p>
                <li><b>Right to File Complaints:</b></li>
                <p>
                  Passengers can report issues or file complaints about their
                  experience without fear of retaliation.
                </p>
                <li><b>Right to Accessibility:</b></li>
                <p>
                  Services should be available to individuals with disabilities,
                  including accessible vehicles where required.
                </p>
                <li><b>Right to Cancel:</b></li>
                <p>
                  Passengers can cancel a ride within a reasonable time frame,
                  often without penalty.
                </p>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

  @endsection
	@section('inline-js')

	@endsection
