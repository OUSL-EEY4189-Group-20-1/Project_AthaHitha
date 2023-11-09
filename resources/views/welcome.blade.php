<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AthaHitha</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{ asset('resFiles/logoTP.png') }}">
    

        <link rel="stylesheet" href="{{ asset('CSS/modifications.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            .nav-link{
                color: #269f61;
                font-size: x-large;
                font-weight:420;
            }
            .nav-item:hover .dropdown-menu {
                display: block;
            }
            .navbar-nav {
                margin: auto;
                display: flex;
                justify-content: center;
            }
            .navbar-nav .nav-link {
                text-align: center;
                position: relative;
            }
            .navbar-nav .nav-link::before {
                content: '';
                position: absolute;
                width: 100%;
                height: 2px;
                bottom: -2px;
                left: 0;
                background-color: #269f6159; /* Change the line color */
                visibility: hidden;
                transform: scaleX(0);
                transition: all 0.5s ease-in-out;
            }
            .navbar-nav .nav-link:hover::before {
                visibility: visible;
                transform: scaleX(1);
            }
            nav.navbar{
                position:sticky;
                position: -webkit-sticky;
                top:0;
            }

            #sectionTop{
                /*background-image: url('{{ asset('resFiles/mainBackground.jpeg') }}');*/
                background-color: green;
                background-size:cover;
                background-repeat:no-repeat;
                transition:background-image 0.5s ease-in-out;
            }

            @media (max-width: 522px) {
                .sectionTop {
                    background-image: linear-gradient(to bottom right, #e6ffe6, #e6ffee);
                    transition:background-image 0.5s ease-in-out;
                }
            }

            
            .fade-in {
                opacity: 1;
            }

            .fade-out {
                opacity: 0;
            }

            /*animation*/
            .reveal{
                transform: translateY(150px);
                transition: 0.5s ease-in-out;
                opacity: 0;
            }
            .reveal.active{
                transform: translateY(0px);
                transition: 0.5s ease-in-out;
                opacity: 1;
            }
            @media screen and (min-width: 450px) and (max-width: 800px) {
                .section1 {
                    align-items: center;
                }
                .all {
                    display: grid;
                    align-items: center;
                    margin: auto;
                    animation: fadeInOut 0.5s ease-in-out;
                }
                .left {
                    margin: auto;
                    animation: slideIn 0.5s ease-in-out;
                }
                .right {
                    margin: auto;
                    animation: slideIn 0.5s ease-in-out;
                }
            }
            .ImgArea{
                transition: fadeInOut 1s ease-in-out;
            }

            @media screen and (max-width: 767px) {
                /* css code here */
                .completeSecction{
                    position: relative;
                    display: flex;
                    flex-direction: column;
                }
                .Area{
                    position: relative;
                    transition: 1s ease-in-out;
                    animation: fadeInOut 0.5s ease-in-out;
                    
                }
                .ImgArea{
                    position: relative;
                    transition: 1s ease-in-out;
                    animation: fadeInOut 0.5s ease-in-out;
                }
            }
            .form{
                transition: 0.5s ease-in-out;
            }
            #logins:hover{
                background-color: white;
                color: #269f61;
            }
            .card:hover{
                transform: translatez(20px);
                opacity: 0.8;
            }
            .btn:hover{
                color: black;
            }
            .cards{
                display: flex;
                flex-direction: row;
                overflow-x: auto;
                overflow-y: hidden;
                margin-top: 2%;  
            }
        </style>
    </head>
    <body class="antialiased" >
        <!--Navigation bar-->
        <section id="sectionTop" style=" padding-bottom:7.5vw; margin-bottom:3vw; background-image:url('{{ asset('resFiles/mainBackground.jpeg') }}');">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navBar">
                <div class="container-fluid -justify">
                <a class="navbar-brand" href="#"><img style="padding-left: 1em;" src="{{ asset('resFiles/logoTP.png') }}" width="185" height="48"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        Services
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallary</a>
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
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg></a> </li>
                        </ul>
                    </div>
                </div>
            </nav><!--End of navigation bar-->
            
<!--_______________________________________________Home Page Section 1_______________________________________________________r-->
            
            <div class="home_page_1_content" >
                <div class="text-part" >
                    <div class="part-1" style="margin-top: 5%; margin-left:3em; margin-right:3em;">
                        <h2 style="font-size:5em;"><span style="color: #269f61; text-shadow:2px 2px 5px black">Share</span> Your</h2>
                        <h1>Blessings with</h1>
                        <h2 style="color:white;">Others.</h2>
                        <p style="color: #269f61; text-shadow:1px 1px black;">Our vision is a country where every person has access to the resources and opprtunities they need to live
                            a fulfiling life, where generousity and copassion are the norm.
                        </p>
                        <button id="logins">Join with Us</button>
                    </div>
                    <div class="form" style="margin-top: 3%; margin-left:3em; margin-right:3em;">
                        <div class="input">
                            <input type="email" placeholder="Enter Email" style="text-align: center;">
                            <input type="password" placeholder="Enter Password" style="text-align: center;">
                            <button id="login">LOGIN HERE</button>
                        </div>
                        <p>Don't have an account? <br> <Span>Sign Up</Span> Here</p>
                        <p>or</p>
                        <p>Log in with</p>
                        <center><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                        </svg></center>
                        <div class="font-awesome">
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-google"></i>
                            <i class="fa fa-whatsapp"></i>
                        </div>

                    </div>
                </div>
            </div>
    </section>
<!--_______________________________________________Home Page Section 2_______________________________________________________r-->
        <section class="rest" >
            <section style="background-color: white;">
                <div class="section2">
                    <div class="textArea reveal" style="margin-bottom: 2vw; margin-left:0.5%; margin-right:0.5%;">
                        <p class="text-center fs-2">There are around <span><button style="background-color: #269f61; color:white; border:none; border-radius:10px; padding-left:0.5%; padding-right:0.5%;">2.5 million</button></span> people are suffering from some form of poverty or near poverty in Sri Lanka.</p>
                        <p class="text-center fs-5">
                        Poverty remains a significant issue in Sri Lanka, with a large portion of the population living on less than five dollars a day.
                        In 2019, 14.3 percent of the population lived below the national poverty line. According to the Asian Development Bank, in Sri Lanka, 14.3% of the population lived below the national poverty line in 20191. The poverty rate in Sri Lanka was 4% in 20211. The proportion of employed population below $1.90 purchasing power parity/day in 2022 was 0.4%.
                        </p>
                    </div>
                    <div class="section1 reveal">
                        <div class="all">
                            <div class="left">
                                <div class="textPart">
                                    <h4>If you help, it doensn't have to be this way.</h4>
                                    <h2>Your little donation can make a big change in their lives</h2>
                                    <button id="logins">Join with us</button>
                                </div>
                            </div>
                            <div class="right">
                                <Video src="{{ asset('resFiles/sample.mp4')}}" autoplay loop muted width="100%" height="relative"></Video>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<!--_________________________________________________________Section 3 - Up coming events____________________________________________________-->
            <section style="background-image: linear-gradient(to bottom right, #e6ffe6, #e6ffee);">
                <section style="background-image: linear-gradient(to bottom right, #e6ffe6, #e6ffee);">
                    <div class="wrapper reveal">
                        <i id="left" class="fa-solid fa-angle-left"><</i>
                        <ul class="carousel">
                            <li class="card">
                                <div class="card-n">
                                    <img src="{{ asset('resFiles/seminar.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body" style="background-color:#334444; border:none; text-align:center;">
                                        <h5 class="card-title" style="color: white; text-align:center;">G.C.E O/L Support Seminar Program</h5>
                                        <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                                        <a href="#" class="btn btn-primary" style="align-items: center; text-align:center; background-color:#269f61; border:none;">Contribute</a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card-n">
                                    <img src="{{ asset('resFiles/awareness.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body" style="background-color:#334444; border:none; text-align:center;">
                                        <h5 class="card-title" style="color: white; text-align:center;">Health Awareness Seminar Program</h5>
                                        <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                                        <a href="#" class="btn btn-primary" style="align-items: center; text-align:center; background-color:#269f61; border:none;">Contribute</a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card-n" >
                                    <img src="{{ asset('resFiles/foodDonate.jpeg') }}" class="card-img-top" alt="...">
                                    <div class="card-body" style="background-color:#334444; border:none; text-align:center;">
                                        <h5 class="card-title" style="color: white; text-align:center;">Dry Food Donation Program</h5>
                                        <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                                        <a href="#" class="btn btn-primary" style="align-items: center; text-align:center; background-color:#269f61; border:none;">Contribute</a>
                                    </div>
                                </div>
                            </li>
                            <li class="card">
                                <div class="card-n">
                                    <img src="{{ asset('resFiles/schoolGirl.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body" style="background-color:#334444; border:none; text-align:center;">
                                        <h5 class="card-title" style="color: white; text-align:center;">Rural Education Upliftment Program</h5>
                                        <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
                                        <a href="#" class="btn btn-primary" style="align-items: center; text-align:center; background-color:#269f61; border:none;">Contribute</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <i id="right" class="fa-solid fa-angle-right">></i>
                    </div>
                    <script>
                        const wrapper = document.querySelector(".wrapper");
                        const carousel = document.querySelector(".carousel");
                        const firstCardWidth = carousel.querySelector(".card").offsetWidth;
                        const arrowBtns = document.querySelectorAll(".wrapper i");
                        const carouselChildrens = [...carousel.children];

                        let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

                        // Get the number of cards that can fit in the carousel at once
                        let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

                        // Insert copies of the last few cards to beginning of carousel for infinite scrolling
                        carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
                            carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
                        });

                        // Insert copies of the first few cards to end of carousel for infinite scrolling
                        carouselChildrens.slice(0, cardPerView).forEach(card => {
                            carousel.insertAdjacentHTML("beforeend", card.outerHTML);
                        });

                        // Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
                        carousel.classList.add("no-transition");
                        carousel.scrollLeft = carousel.offsetWidth;
                        carousel.classList.remove("no-transition");

                        // Add event listeners for the arrow buttons to scroll the carousel left and right
                        arrowBtns.forEach(btn => {
                            btn.addEventListener("click", () => {
                                carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
                            });
                        });

                        const dragStart = (e) => {
                            isDragging = true;
                            carousel.classList.add("dragging");
                            // Records the initial cursor and scroll position of the carousel
                            startX = e.pageX;
                            startScrollLeft = carousel.scrollLeft;
                        }

                        const dragging = (e) => {
                            if(!isDragging) return; // if isDragging is false return from here
                            // Updates the scroll position of the carousel based on the cursor movement
                            carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
                        }

                        const dragStop = () => {
                            isDragging = false;
                            carousel.classList.remove("dragging");
                        }

                        const infiniteScroll = () => {
                            // If the carousel is at the beginning, scroll to the end
                            if(carousel.scrollLeft === 0) {
                                carousel.classList.add("no-transition");
                                carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
                                carousel.classList.remove("no-transition");
                            }
                            // If the carousel is at the end, scroll to the beginning
                            else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
                                carousel.classList.add("no-transition");
                                carousel.scrollLeft = carousel.offsetWidth;
                                carousel.classList.remove("no-transition");
                            }

                            // Clear existing timeout & start autoplay if mouse is not hovering over carousel
                            clearTimeout(timeoutId);
                            if(!wrapper.matches(":hover")) autoPlay();
                        }

                        const autoPlay = () => {
                            if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
                            // Autoplay the carousel after every 2500 ms
                            timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
                        }
                        autoPlay();

                        carousel.addEventListener("mousedown", dragStart);
                        carousel.addEventListener("mousemove", dragging);
                        document.addEventListener("mouseup", dragStop);
                        carousel.addEventListener("scroll", infiniteScroll);
                        wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
                        wrapper.addEventListener("mouseleave", autoPlay);
                    </script>
                    
                </section>

<!--__________________________________________________Secttion 4 vounteer______________________________________-->

                <section class="reveal" style="background-image: linear-gradient(to bottom right, #e6ffe6, #e6ffee);">   
                    <div class="completeSecction">
                        <div class="ImgArea">
                            <div class="image" id="vol-image">
                                <img class="img-fluid" src="{{ asset('resFiles/volunteer.png') }}" alt="volunteer.png">
                            </div>
                        </div>
                        <div class="Area">
                            <div class="normalText1">
                                <p >Do you like to contribute through helping people?</p>
                            </div>
                            <div class="volunteer-Text">
                                <p><span style="color: white;">Be</span>come a <span style="color: #269f61;">Volunteer</span></p>
                            </div>
                            <div class="normalText2">
                                <p >You can now become a volunteer to share</p>
                                <p style="text-indent: 20px">your knowladge and skills with others.</p>
                            </div>
                        </div>
                    </div>
                </section>

<!--______________________________________________________Section 5- Map_____________________________________________________-->
                    <section class="reveal" style="background-color: white;">
                        <p style="font-size: 3vw; text-align:center;">Discover our Work</p>
                        <div class="mainSection">
                            <div class="mapSection">
                                <!-- Add the "map" div to render the map -->
                                <div id="map" style="height: 30vw; width: 50vw;"></div>
                            </div>
                            <div class="textSection" style="text-align: center; background-color:#334444; align-items:center;" id="countdown-section">
                                <div style="margin-top:3vh;"></div>    
                                    <p id="our-projects" style="font-size: 3vw; text-align:center; color:white;">OUR PROJECTS</p>
                                    <p id="countdown1" class="countdown1" style="color: #269f61; font-size:5vw">0</p>
                                    <p style="color: white; font-size:2vw">Completed Projects</p>
                                    <button id="logins" style="width: 90%; font-size:80%; margin-bottom:2vh;">JOIN WITH US</button>
                                </div>
                            </div>
                        </div>
                        <div class="buttonSection" id="buttonSection" >
                            <button id="colombo">Colombo</button>
                            <button id="anuradhapura">Anuradhapura</button>
                            <button id="jaffna">Jaffna</button>
                            <button id="kandy">Kandy</button>
                            <button id="hambanthota">Hambanthota</button>
                            <!-- Add other location buttons here -->
                        </div>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeBrcvtpP83KXwr1yrjSb8C7FFd_ktLnc&libraries=places&callback=initMap" async defer></script>
                        <script>
                            //countdown
                                /*countdown projects*/

                            const countingNumber1 = document.getElementById("countdown1");
                            const startNumber1 = 0;
                            const endNumber1 = 50; // Change this value to your desired end number for countdown 1
                            const duration1 = 2000; // Change this value to adjust the animation speed for countdown 1

                            function isElementInViewport(el) {
                                const rect = el.getBoundingClientRect();
                                return (
                                    rect.top >= 0 &&
                                    rect.left >= 0 &&
                                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                                );
                            }

                            function formatNumber(number) {
                                if (number >= 1000000) {
                                    return (number / 1000000).toFixed(1) + 'M';
                                } else if (number >= 1000) {
                                    return (number / 1000).toFixed(1) + 'K';
                                } else {
                                    return number;
                                }
                            }

                            function animateNumberOnScroll(element, start, end, duration) {
                                let isAnimated = false;

                                function animate() {
                                    if (!isAnimated && isElementInViewport(element)) {
                                        isAnimated = true;
                                        const range = end - start;
                                        const increment = range / (duration / 10);
                                        let current = start;

                                        const timer = setInterval(function () {
                                            current += increment;
                                            element.innerText = formatNumber(Math.floor(current));

                                            if (current >= end) {
                                                element.innerText = formatNumber(end);
                                                clearInterval(timer);
                                            }
                                        }, 10);
                                    }
                                }

                                animate();
                                window.addEventListener("scroll", animate);
                            }

                            
                            animateNumberOnScroll(countingNumber1, startNumber1, 43, duration1);
                            

                            // Initialize the map
                            function initMap() {
                                const map = new google.maps.Map(document.getElementById("map"), {
                                    zoom: 10, // Set the default zoom level
                                    center: { lat: 6.9271, lng: 79.8612 } // Set the default center location (Colombo in this case)
                                });

                                // Function to navigate to a specific location
                                function navigateToLocation(location) {
                                    map.panTo(location);
                                    map.setZoom(10);
                                    new google.maps.Marker({
                                        position: location,
                                        map: map,
                                        title: "Location"
                                    });
                                }

                                // Get references to the buttons
                                const colomboButton = document.getElementById("colombo");
                                const anuradhapuraButton = document.getElementById("anuradhapura");
                                const kandyButton = document.getElementById("kandy");
                                const hambanthotaButton = document.getElementById("hambanthota");
                                const jaffnaButton = document.getElementById("jaffna");


                                // Add click event listeners to the buttons
                                colomboButton.addEventListener("click", function () {
                                    navigateToLocation({ lat: 6.9271, lng: 79.8612 }); // Colombo location
                                    animateNumberOnScroll(countingNumber1, startNumber1, 43, duration1);

                                });

                                anuradhapuraButton.addEventListener("click", function () {
                                    navigateToLocation({ lat: 8.3145, lng: 80.4102 }); // Anuradhapura location
                                    animateNumberOnScroll(countingNumber1, startNumber1, 21, duration1);

                                });

                                jaffnaButton.addEventListener("click", function () {
                                    navigateToLocation({ lat: 9.669155, lng: 80.0118 }); // Anuradhapura location
                                    animateNumberOnScroll(countingNumber1, startNumber1, 13, duration1);

                                });

                                hambanthotaButton.addEventListener("click", function () {
                                    navigateToLocation({ lat: 6.151429, lng: 81.0712 }); // Anuradhapura location
                                    animateNumberOnScroll(countingNumber1, startNumber1, 13, duration1);
                                });

                                kandyButton.addEventListener("click", function () {
                                    navigateToLocation({ lat: 7.332216, lng: 80.5694 }); // Anuradhapura location
                                    animateNumberOnScroll(countingNumber1, startNumber1, 17, duration1);
                                });
                            }


                        </script>
                    </section>
                    



            </section>
            <section>
                <footer class="footer-distributed">

                    <div class="footer-left">
                        <h3>Project<span> AthaHitha</span></h3>

                        <p class="footer-links">
                            <a href="#">Home</a>
                            |
                            <a href="#">About</a>
                            |
                            <a href="#">Contact</a>
                            |
                            <a href="#">Contact</a>
                        </p>

                        <p class="footer-company-name">Copyright © 2023 <strong>OUSL BSE 2021/22 - EEY4189 Group 20.1 <br/></strong> All rights reserved</p>
                    </div>

                    <div class="footer-center">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p><span></span></p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p></p>
                        </div>
                        <div>
                            <i class="fa fa-envelope"></i>
                            <p><a href=""></a></p>
                        </div>
                    </div>
                    <div class="footer-right">
                        <p class="footer-company-about">
                            <span>About the Project</span>
                            This project is developed for the course EEY4189 - Sotware Design in Group. <br/> <strong>Bachelor of Software Engineering<br/>The Open University Sri Lanka<br/>Nawala, Nugegoda.</strong>
                        </p>
                        <div class="footer-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </footer>
            </section>

        </section>

        <script>
            window.addEventListener('scroll', reveal);
                function reveal(){
                    var reveals = document.querySelectorAll('.reveal');
                    for(var i=0; i<reveals.length; i++){
                        var windowHeight = window.innerHeight;
                        var revealTop = reveals[i].getBoundingClientRect().top;
                        var revealpoint = 150;

                        if(revealTop<windowHeight-revealpoint){
                            reveals[i].classList.add('active');
                        }
                        else{
                            reveals[i].classList.remove('active');
                        }
                    }
                }
        </script>
        <script src="{{ ('asset(JS/homePaje.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>


