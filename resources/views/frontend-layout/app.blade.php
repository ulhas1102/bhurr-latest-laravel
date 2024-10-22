<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="@yield('description')">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />

    <!-- =======custome css======== -->
    <link rel="stylesheet" href="{{asset('new-layouts/assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('new-layouts/assets/css/driver.css')}}" />
    <link rel="stylesheet" href="{{asset('new-layouts/assets/css/hotel.css')}}" />

    <!-- ================= fav icon ======================= -->
    <link rel="shortcut icon" href="{{asset('new-layouts/assets/image/logo/bhurr-favicon.jpg')}}" type="image/x-icon" />

    <!--============font awesome cdn============ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- Flatpickr Material Blue Theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_blue.css">



    <!-- Inline CSS Section for Page-specific Styles -->
    @yield('inline-css')
    <!-- Include Header Partial -->
    @include('frontend-layout.header')

    <!-- Main content area -->

    @yield('content')


    <!-- Include Footer Partial -->
    @include('frontend-layout.footer')

    @yield('inline-js')

</html>