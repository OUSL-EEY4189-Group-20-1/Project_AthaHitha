<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/donatemoney.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    <title>Donate Money</title>
</head>

<body>

    <!--Navigation bar-->
    <section id="sectionTop">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navBar">
            <div class="container-fluid -justify">
                <a class="navbar-brand" href="#"><img style="padding-left: 1em;"
                        src="{{ URL('images-donatemoney/logo1Black.png') }}" width="185" height="48" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Programmes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="true">
                                Donations
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Donate Money</a></li>
                                <li><a class="dropdown-item" href="#">Donate Good</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
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
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg></a> </li>
                        </ul>
                    </div>
                </div>
        </nav>
        <!--End of navigation bar-->


        <div class="container-sm contain">
            <div class="description">
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
            <div class="donation_forum">
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
                    <form id="myForm">
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
                                <option value="option1">Educational Programme</option>
                                <option value="option">Health Programme</option>
                                <option value="option1">Nutririon Programme</option>
                                <option value="option1">Clean water programme</option>
                            </select>
                            <div id="categories-error"></div>
                        </div>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <span class="required-star">*</span>
                    <div class="full_name">
                        <div class="first-name-box">
                            <input type="text" class="first_name" id="first_name" placeholder="Enter your first name" onkeyup="validateFirstName()">
                            <div id="first_name-error"></div> 
                        </div>
                        <div class="last_name-box">
                            <input type="text" class="last_name" id="last_name" placeholder="Enter your last name" onkeyup="validateLastName()">
                            <div id="last_name-error"></div> 
                        </div>
                    </div>
                        
                        
                </div>

                 <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="email" id="email" placeholder="Enter your email" onkeyup="validateEmail()">
                            <div id="email-error"></div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <span class="required-star">*</span><br>
                            <input id="phone" type="text" pattern="[0]{1}[0-9]{9}" placeholder="0xxxxxxxxx" />
                            <div id="phone-error"></div>
                        </div> 
                <div class="col-md-6 offset-md-0">
                    <button type="submit" class="btn btn-primary donate " id="donateButton"
                        onclick="validateForm()">Donate</button>
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
                if (formValid) {
                    const gatewayeUrl = "{{ route('paymentgateway') }}";
                    window.location.href = gatewayeUrl;
                }
            });
        
        </script>





</body>

<!-- external javascript -->
<script src="{{ asset('js/donatemoney.js') }}"></script>



</html>