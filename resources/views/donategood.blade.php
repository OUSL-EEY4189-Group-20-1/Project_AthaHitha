<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('CSS/gateway.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/donateMoney.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/gateway.js') }}"></script>
    <title>Donate Money</title>
    <style>
        nav.navbar {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 1000;
            /* Set the z-index to a high value */
        }

        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10px;
            padding: 20px;
            border: 1px solid #888;
            width: 100%;
        }

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!--Navigation bar-->
    <nav id="navhide" class="navbar navbar-expand-lg bg-body-tertiary" id="navBar" style="position: sticky;">
        <div class="container-fluid -justify">
            <a class="navbar-brand" href="#"><img style="padding-left: 1em;"
                    src="{{ asset('resFiles/logoTP.png') }}" width="185" height="48" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('userLogin') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories') }}">
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallary') }}">Gallary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </span>

                <!--Seperate div for profile icon-->
                <div class="" id="navbarText" style="float: inline-end;">

                    <ul class="nav me-auto mb-2 mb-lg-0">
                        @auth
                            <li class="nav-item"><a class="nav-link" aria-current="page"
                                    href="{{ route('userprofile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40"
                                        height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg> {{ Auth::user()->first_name }}
                                </a>
                            </li>
                            <li>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
    </nav>
    <!--End of navigation bar-->


    <div class="container-sm contain">
        <div id="description" class="description">
            <img src="{{ URL('images-donatemoney/logo1Black.png') }}" alt="logo" class="img-fluid logo_pic">
            <img src="{{ URL('images-donatemoney/onlinedonations.jpg') }}" alt="description_image"
                class="img-fluid description_image">
            <p class="about_topic">About Online Donation</p>
            <p class="about_online_donation">At Athahitha, we've made giving back
                easier and more accessible than ever. Our online donation platform
                allows you to support the causes you care about from the comfort of
                your own home. Whether it's helping a local charity, supporting a
                global humanitarian effort, or contributing to a community project,
                our user-friendly online donation page empowers you to make a real
                difference in the world.

                <br><br>With just a few clicks, you can provide vital resources, aid,
                and funding to organizations and initiatives that align with your
                values and passions. Join us in our mission to create positive change
                and foster a spirit of giving. Your generosity can change lives, and
                together, we can create a better future for all.
            </p>
            <p class="note_topic">Important Note</p>
            <p class="note">Our payment processor currently accepts only Sri Lankan
                Rupees (LKR), therefore foreign currency donations would be converted
                to Sri Lankan Rupees (LKR) based on the approximate exchange rate.
            </p>
        </div>
        <div id="donation_forum" class="donation_forum">
            <div class="form_container">
                <form id="myForm" action="{{ route('make-good-donation') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Donate To</label>
                        <span class="required-star">*</span>
                        <select name="options" id="options" class="catogaries">
                            <option value="option_choose">Choose</option>
                            <option value="Educational Programme">Educational Programme</option>
                            <option value="Health Programme">Health Programme</option>
                            <option value="Nutririon Programme">Nutririon Programme</option>
                            <option value="Clean water programme">Clean water programme</option>
                        </select>
                        <div id="categories-error"></div>
                    </div>

                    <div class="form-group">
                        <label>Name</label>
                        <span class="required-star">*</span>
                        <div class="full_name">
                            <div class="first-name-box">
                                <input type="text" class="first_name" id="first_name"
                                    placeholder="Enter your first name"
                                    value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}"
                                    onkeyup="validateFirstName()">
                                <div id="first_name-error"></div>
                            </div>
                        </div>


                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="email" id="email" placeholder="Enter your email"
                            value="{{ Auth::user()->email }}" onkeyup="validateEmail()">
                        <div id="email-error"></div>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <span class="required-star">*</span><br>
                        <input id="phone" type="text" pattern="{1}[0-9]{9}" placeholder="0xxxxxxxxx"
                            value="{{ Auth::user()->contact }}" />
                        <div id="phone-error"></div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <span class="required-star">*</span><br>
                        <textarea id="description" type="text" rows="5" name="description"
                            placeholder="Description (Your donation, items and quantitiy)"></textarea>
                        <div id="Des-error"></div>
                    </div>
                    <div class="col-md-6 offset-md-0">
                        <button class="btn btn-primary donate " id="donateButton"
                            onclick="showForm()">Donate</button>
                    </div>
                    <div id="paymentModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <!-- Your payment gateway HTML content here -->
                            <div id="paymentGateway">
                                <!-- Include your custom payment gateway content here -->
                                <div class="container">
                                    <div class="box1">
                                        <h1>Welcome to our Payment Gateway</h1>
                                    </div>

                                    <div class="box2">
                                        <div>
                                            <h1>Confirm Your Donation</h1>

                                        </div>
                                        <button id="PayButton" class="btn btn-block btn-success submit-button"
                                            type="submit">
                                            <span class="submit-button-lock"></span>
                                            <span class="align-middle">Submit</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div> <!--End of donation_forum-->


    <script>
        // Reset the form when the page is loaded
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector('.form_container form');

            if (form) {
                window.onload = function() {
                    form.reset();
                };
            }
        });
    </script>
    <script>
        // Add an event listener to the donate button
        function showForm() {
            document.getElementById('paymentModal').style.display = 'block';
        }

        document.getElementById('donateButton').addEventListener('click', function(event) {
            event.preventDefault();
            showForm();


        });

        // Close the modal when the close button is clicked
        document.querySelector('.close').addEventListener('click', function() {
            document.getElementById('paymentModal').style.display = 'none';
        });

        // Add an event listener to the donate button
        document.getElementById('donateButton').addEventListener('click', function(event) {
            event.preventDefault();
            const formValid = validateForm();
            if (formValid) {
                /*document.getElementById('myForm').submit();*/
                document.getElementById('navhide').style.display = 'none';
                //document.getElementById('donation_forum').style.display = 'none';
                document.getElementById('paymentModal').style.display = 'block';
                document.getElementById('description').style.display = 'none';
                //set the value of amount to Amount
                paymentAmount.value = amountInput;

            }
        });
        // Close the modal when the close button is clicked
        document.getElementsByClassName('close')[0].addEventListener('click', function() {
            document.getElementById('paymentModal').style.display = 'none';
            document.getElementById('navhide').style.display = 'block';
            document.getElementById('donation_forum').style.display = 'block';
            document.getElementById('description').style.display = 'block';
        });
    </script>


</body>

<!-- external javascript -->
<script src="{{ asset('js/donatemoney.js') }}"></script>



</html>
