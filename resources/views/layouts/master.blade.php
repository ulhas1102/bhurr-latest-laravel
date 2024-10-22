<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') | Bhurr</title>
       <!-- <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" /> -->
		<link rel="shortcut icon" href="{{asset('frontend/assets/image/logo/car-removebg-preview.png')}}" />
        @include('layouts._css')
        @yield('backend-page-style')
      </head>
<body>
    <div class="container-scroller">

        <!-- partial:partials/_horizontal-navbar.html -->

        <div class="horizontal-menu">
            @include('layouts._header')
        </div>

         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
            
                @yield('content')
           

         </div>

    </div>
    @include('layouts._script')
     <!-- End custom js for this page-->
     @yield('backend-page-script') 
</body>
</html>