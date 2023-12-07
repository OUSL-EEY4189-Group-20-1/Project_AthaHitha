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
            z-index: 1000; /* Set the z-index to a high value */
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
            <a class="navbar-brand" href="#"><img style="padding-left: 1em;" src="{{ asset('resFiles/logoTP.png') }}" width="185" height="48"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('userLogin')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories') }}" >
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gallary')}}">Gallary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
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
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('getMoneyDonations.Details', ['id' => Auth::user()->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg> {{ Auth::user()->first_name }}
                                </a>
                            </li>
                            <li>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout')}}">Logout</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
    </nav>
    <!--End of navigation bar-->


        <div class="container-sm contain">
            <div id="description"  class="description">
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
                <div class="topic_container">
                    <p class="topic">Secure Donation &nbsp</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-shield-fill-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z" />
                    </svg>
                </div>

                <div class="amount_buttons">
                    <button class="amountButton">500</button>
                    <button class="amountButton">1000</button>
                    <button class="amountButton">5000</button>
                    <button class="amountButton">10000</button>
                </div>

                <div class="form_container">
                    <form id="myForm" action="{{route('make-donation')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Choose Amount (LKR)</label>
                            <span class="required-star">*</span>
                            <input type="number" name="amount" min="50" step="50" class="form-control amount"
                                id="amount" placeholder="Enter amount or choose from above" onkeyup="validateAmount()">
                            <div id="amount-error"></div>

                        </div>
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
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <span class="required-star">*</span>
                    <div class="full_name">
                        <div class="first-name-box">
                            <input type="text" class="first_name" id="first_name" placeholder="Enter your first name" value="{{ Auth::user()->first_name }}" onkeyup="validateFirstName()">
                            <div id="first_name-error"></div>
                        </div>
                        <div class="last_name-box">
                            <input type="text" class="last_name" id="last_name" placeholder="Enter your last name" value="{{ Auth::user()->last_name }}" onkeyup="validateLastName()">
                            <div id="last_name-error"></div>
                        </div>
                    </div>


                </div>

                 <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="email" id="email" placeholder="Enter your email" value="{{ Auth::user()->email }}" onkeyup="validateEmail()">
                            <div id="email-error"></div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <span class="required-star">*</span><br>
                            <input id="phone" type="text" pattern="{1}[0-9]{9}" placeholder="0xxxxxxxxx" value="{{ Auth::user()->contact }}"/>
                            <div id="phone-error"></div>
                        </div>
                <div class="col-md-6 offset-md-0">
                    <button class="btn btn-primary donate " id="donateButton"
                        onclick="validateForm()">Donate</button>
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
                                    <p>Securely make a donation to support the cause you care about.</p>
                                </div>

                                <div class="box2">
                                    <div class="card-row">
                                        <span class="visa"></span>
                                        <span class="mastercard"></span>
                                        <span class="amex"></span>
                                        <span class="discover"></span>
                                    </div>

                                        <div class="tab">
                                            <label for="Amount">Amount (LKR)</label>
                                            <input id="Amount" class="form-control" type="text" maxlength="255" placeholder="LKR 1000" />
                                        </div>
                                        <div class="tab">
                                            <label for="CardHolderName">Card Holder Name</label>
                                            <input id="CardHolderName" class="form-control" type="text" maxlength="255" placeholder="P.G.D.M.Kemantha"/>
                                        </div>
                                        <div class="tab">
                                            <label for="CardNumber">Card Number</label>
                                            <input id="CardNumber" class="form-control" type="text" maxlength="255" placeholder="1234-6786-9012-3456" />
                                        </div>
                                        <div class="tab">
                                            <div class="tab-item">
                                                <label for="ExpiryDate">Expiry Date</label>
                                                <input id="ExpiryDate" class="form-control" type="text" maxlength="255" placeholder="mm/yy"/>
                                            </div>

                                            <div class="security-code-group form-group">
                                                <label for="SecurityCode">Security code</label>
                                                <div class="input-container">
                                                    <input id="SecurityCode" class="form-control" type="text" placeholder="123"/>
                                                    <i id="cvcIcon" class="fa fa-question-circle" onclick="toggleCardPreviews()"></i>
                                                </div>
                                                <div class="cvc-preview-container two-card hide">
                                                    <div class="amex-cvc-preview"></div>
                                                    <div class="visa-mc-dis-cvc-preview"></div>
                                                </div>
                                            </div>

                                </div>
                                <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">
                                    <span class="submit-button-lock"></span>
                                    <span class="align-middle">Pay</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                </form>
                <p class="next_step_hint">As the next step, you will be taken to UPay internet payment gateway,
                    where you can perform the transaction</p>
                <div class="pmnt_accept_mthd">
                    <p class="payment_methods">PAYMENTS ACCEPTED VIA </p>
                    <img src="{{ URL('images-donatemoney/visamastercard.png') }}" alt="visamastercard"
                        class="visamastercard">
                </div>
            </div>

        </div>
        </div>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const form = document.querySelector('.form_container form');

                if (form) {
                    window.onload = function () {
                        form.reset();
                    };
                }
            });
        </script>
        <script>
            // Add an event listener to the donate button
            document.getElementById('donateButton').addEventListener('click', function (event) {
                event.preventDefault();
                const formValid = validateForm();
                var amountInput = document.getElementById('amount').value;
                var paymentAmount = document.getElementById('Amount'); // ID of the payment gateway amount field

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
            document.getElementsByClassName('close')[0].addEventListener('click', function () {
                document.getElementById('paymentModal').style.display = 'none';
                document.getElementById('navhide').style.display = 'block';
                document.getElementById('donation_forum').style.display = 'block';
                document.getElementById('description').style.display = 'block';
            });
        </script>

        <script>
            document
                .getElementById("CardNumber")
                .addEventListener("input", function (event) {
                    let input = event.target;
                    let value = input.value.replace(/\D/g, "");

                    if (value.length > 0) {
                        value = value.match(new RegExp(".{1,4}", "g")).join(" - ");
                    }

                    input.value = value;
                });

            document
                .getElementById("ExpiryDate")
                .addEventListener("input", function (event) {
                    let input = event.target;
                    let value = input.value.replace(/\D/g, "");
                    if (value.length > 2) {
                        value = value.slice(0, 2) + "/" + value.slice(2);
                    }

                    input.value = value;
                });


            document.getElementById("Amount").addEventListener("input", function (event) {
                let input = event.target;
                let value = input.value.replace(/[^0-9]/g, "");
                if (value !== "") {
                    Number(value).toLocaleString();
                }

                input.value = value;
            });

            function toggleCardPreviews() {
                var cardPreviewContainer = document.querySelector(".cvc-preview-container");
                cardPreviewContainer.classList.toggle("hide");
            }
            document
                .getElementById("SecurityCode")
                .addEventListener("input", function (event) {
                    let input = event.target;
                    let value = input.value.replace(/\D/g, "");

                    if (value.length > 3) {
                        value = value.slice(0, 3);
                    }

                    input.value = value;
                });

        </script>






</body>

<!-- external javascript -->
<script src="{{ asset('js/donatemoney.js') }}"></script>



</html>
