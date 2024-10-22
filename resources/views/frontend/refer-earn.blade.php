@extends('frontend-layout.app')
@section('title', 'Refer Earn- page')
@section('inline-css')
    <style>
      .specialbooking-banner {
		  background-image: url("{{asset('new-layouts/assets/image/bg/hero__banner9.webp')}}");
        background-size: cover;
        background-position: center;
        height: 400px;
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
    </style>
</head>
<body class="driver__page__container">
    @endsection

@section('content')


    <div class="specialbooking-banner">
      <div class="banner-text">
        <h1 class="animate-text careers__heading">Refer And Earn</h1>
      </div>
    </div>

    <div class="container py-md-5 py-3">
      <div class="row">
        <div class="col-md-6">
          <img
            src="{{asset('new-layouts/assets/image/banner/Tickt-1.png')}}"
            alt="Refer"
            class="img-fluid"
          />
        </div>
        <div class="col-md-6">
          <img
            src="{{asset('new-layouts/assets//image/banner/Tickt-2.png')}}"
            alt="Earn"
            class="img-fluid"
          />
        </div>
      </div>
    </div>


 @endsection
  @section('inline-js')
	@endsection