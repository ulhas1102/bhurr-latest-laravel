@extends('frontend-layout.app')
@section('title', 'Profile - page')
@section('inline-css')
<style>
    /* .profile__ .card-body{
    border: 0.5px solid #df0b0b7a;
} */
    .profile__ img {
        border: 2px solid #df0b0b;

    }

    .profile__ .card-header {
        background-color: #df0b0b !important;
    }

    .profile__card {
        border-radius: 10px;
        border: 0;
        box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }
</style>
</head>

<body>
    @endsection
    @section('content')
    <section class="my-md-5 my-3">
        <div class="container profile__">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <!-- Profile Sidebar -->
                    <div class="card profile__card">
                        <div class="card-body text-center rounded-lg">
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="rounded-circle mb-3" alt="Customer Image" width="150px">
                            <h4>John Doe</h4>
                            <p>Email: john.doe@example.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <!-- Profile Details -->
                    <div class="card">
                        <div class="card-header text-white">
                            <h5>Profile Information</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <label for="firstName" class="col-sm-3 col-form-label">First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="firstName" value="John">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="lastName" class="col-sm-3 col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lastName" value="Doe">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" value="john.doe@example.com">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" value="123 Main Street">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" value="Pune">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-3 col-form-label">state</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" value="Maharashtra">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="address" class="col-sm-3 col-form-label">pincode</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" value="411 512">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phone" value="+1234567890">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-3 col-form-label">Alternate Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phone" value="+1234567890">
                                    </div>
                                </div>
                                <div class="row mb-3 justify-content-center">
                                    <button type="submit" class="common__btn btn">Update Profile</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    @section('inline-js')
    @endsection