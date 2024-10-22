<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb5Q5f4fYZL5T5dA9Y5F5D5F5S9yX5/SQ+3Xy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <title>Profile Page</title>
    <style>

    </style>
</head>

<body>
    <section class="navigation" id="navigation">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="z-index: 100;">
            <div class="container">
                <a class="navbar-brand py-0 d-flex align-items-center" href="#">
                    <img src="{{asset('frontend/assets/image/logo/bhurr-logo.png')}}" width="150px" alt="">
                </a>
                <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div class=" background-image">
        <div class="page-content">
            <nav>
                <ul class="tabs">
                    <li class="tab-li">
                        <a href="#tab1" class="tab-li__link">1 PERSONAL
                            INFO</a>
                    </li>
                    <li class="tab-li">
                        <a href="#tab2" class="tab-li__link">2 CONTACT
                            INFO</a>
                    </li>
                    <li class="tab-li">
                        <a href="#tab3" class="tab-li__link">3 CREATE
                            PASSWORD</a>
                    </li>
                </ul>
            </nav>

            <section id="tab1" data-tab-content>
                <p class="tab__content">
                    <i class="bi bi-question-circle"></i> If you already
                    have a Flying Returns
                    account, please reach out to our customer service team
                    to initiate the process of resetting your account
                    credentials.
                </p>
                <article class="personalinfo">
                    <form>
                        <div class="form-group w-50">
                            <label for="title" class="form-label">Title</label>
                            <select class="form-select" id="title" required>
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control form-control-sm" id="firstName"
                                    placeholder="First Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="middleName">Middle Name</label>
                                <input type="text" class="form-control form-control-sm" id="middleName"
                                    placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control form-control-sm" id="lastName"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nationality">Nationality</label>
                                <input type="text" class="form-control form-control-sm" id="nationality"
                                    placeholder="Nationality">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control form-control-sm" id="dob">
                            </div>
                        </div>
                    </form>
                    <div class="continue-button">
                        <a href="#tab2" class="continuetab tab-li__link">
                            <button type="button" class="btn continue-btn rounded-0">Continue</button>
                        </a>
                    </div>
                </article>
            </section>

            <section id="tab2" data-tab-content>
                <p class="tab__content">
                    <i class="bi bi-exclamation-circle"></i>For security
                    purposes, we will confirm both your email address and
                    mobile number as you create your Flying Returns account.
                </p>
                <p class="tab__content">
                    <i class="bi bi-exclamation-circle"></i>Your email
                    address
                    will serve as both your username and your login ID for
                    this account.
                </p>
                <p class="tab__content">
                    <i class="bi bi-exclamation-circle"></i> Temporary email
                    IDs are not accepted
                </p>
                <article class="personalinfo">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control form-control-sm" id="email"
                                    placeholder="Enter Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="con-email">Confirm Email</label>
                                <input type="email" class="form-control form-control-sm" id="con-email"
                                    placeholder="Confirm Email" required>
                            </div>
                        </div>
                        <div class="verification-code">
                            <a href="#" class="verification-code-btn">
                                SEND VERIFICATION CODE
                            </a>
                        </div>
                        <div class="form-row pt-4">
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control form-control-sm" id="mobile"
                                    placeholder="Enter Mobile Number" required>
                            </div>
                        </div>
                        <div class="verification-code">
                            <a href="#" class="verification-code-btn">
                                SEND ONE-TIME PASSWORD
                            </a>
                        </div>
                    </form>
                    <div class="continue-button">
                        <a href="#tab1" class="continuetab tab-li__link">
                            <button type="button" class="btn continue-btn rounded-0">Back</button>
                        </a>
                        <a href="#tab3" class="continuetab tab-li__link">
                            <button type="button" class="btn continue-btn rounded-0">Continue</button>
                        </a>
                    </div>
                </article>
            </section>

            <section id="tab3" data-tab-content>
                <article class="personalinfo">
                    <form>
                        <div class="form-row pt-4">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control form-control-sm" id="password"
                                    placeholder="Enter Password" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="con-password">Confirm
                                    Password</label>
                                <input type="password" class="form-control form-control-sm" id="con-password"
                                    placeholder="Confirm Password" required>
                            </div>
                        </div>
                    </form>
                    <p class="tab__content">
                        <i class="bi bi-check-circle-fill"></i> 8-16
                        characters
                    </p>
                    <p class="tab__content">
                        <i class="bi bi-check-circle-fill"></i>A combination
                        of lowercase and uppercase letters
                    </p>
                    <p class="tab__content">
                        <i class="bi bi-check-circle-fill"></i>At least one
                        number (0-9)
                    </p>
                    <p class="tab__content">
                        <i class="bi bi-check-circle-fill"></i>One or more
                        of the following symbols: @ # $ % ^
                    </p>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="termsCheckbox">
                        <label class="form-check-label" for="termsCheckbox">By submitting this form, I
                            agree to Air India's <a href="#" class="termsCon">Loyalty Programme Terms and
                                Conditions</a> and <a href="#" class="termsCon">Privacy Policy</a></label>
                    </div>
                    <div class="continue-button">
                        <a href="#tab2" class="continuetab tab-li__link">
                            <button type="button" class="btn continue-btn rounded-0">Back</button>
                        </a>
                        <a href="#" class="continuetab tab-li__link">
                            <button type="button" class="btn continue-btn rounded-0">Submit</button>
                        </a>
                    </div>
                </article>
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll(".tab-li__link");
            const contents = document.querySelectorAll("[data-tab-content]");

            function deactivateAllTabs() {
                tabs.forEach(tab => tab.classList.remove("active"));
                contents.forEach(content => content.classList.remove("active"));
            }

            function activateTab(tab) {
                deactivateAllTabs();
                tab.classList.add("active");
                document.querySelector(tab.getAttribute("href")).classList.add("active");
            }

            tabs.forEach(tab => {
                tab.addEventListener("click", function (event) {
                    event.preventDefault();
                    activateTab(tab);
                });
            });

            // Activate the first tab by default
            if (tabs.length > 0) {
                activateTab(tabs[0]);
            }
        });

    </script>
</body>

</html>