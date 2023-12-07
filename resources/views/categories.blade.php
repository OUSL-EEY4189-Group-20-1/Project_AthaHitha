<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AthaHitha</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('CSS/modifications.css') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('resFiles/logoTP.png') }}">
    <link rel="stylesheet" href="{{ asset('CSS/donationStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="donationStyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
        nav.navbar {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 1000; /* Set the z-index to a high value */
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
<body>
<!--Navigation bar-->

<section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navBar" style="position: sticky;">
        <div class="container-fluid -justify">
            <a class="navbar-brand" href="#"><img style="padding-left: 1em;" src="{{ asset('resFiles/logoTP.png') }}" width="185" height="48"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{route('userLogin')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('categories') }}" >
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
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('getMoneyDonations.Details', ['id' => Auth::user()->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
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


    <div class="main-banner" style="background: url('{{ URL('resFiles/donationCategories/banner.jpg') }}') no-repeat;  background-size: cover;">
    <div class="main-banner-content" >
        <h1 class="ex">Explore Projects</h1>
        <a href="#p-container" class="explor-btn explor-btn1">Explore</a>
    </div>
</div>


<section class="desciption-container">

    <div class="mission-container">
        <img src="{{ URL('resFiles/donationCategories/target.png') }}" />
        <h3>Our mission</h3>
        <p>Igniting a blaze of generosity, our mission is to spark a wildfire of kindness that illuminates the lives
            of those in need, leaving no heart untouched by the warmth of compassion.</p>
    </div>

    <div class="projects-container" id="p-container">
        <h3>Completed Projects</h3>

        <div class="project-cards">
            <div class="project-card card1">
                <img src="{{ URL('resFiles/donationCategories/mortarboardW.png') }}" class="project-ico" />
                <h4>Education</h4>
                <h5 class="num" data-val ="100">10</h5>
            </div>

            <div class="project-card card2">
                <img src="{{ URL('resFiles/donationCategories/cardiogramW.png') }}" class="project-ico" />
                <h4>Healthcare</h4>
                <h5 class="num" data-val ="100">20</h5>
            </div>

            <div class="project-card card3">
                <img src="{{ URL('resFiles/donationCategories/food-donationW.png') }}" class="project-ico" />
                <h4>Nutrition</h4>
                <h5 class="num" data-val ="100">25</h5>
            </div>

            <div class="project-card card4">
                <img src="{{ URL('resFiles/donationCategories/dropW.png') }}" class="project-ico" />
                <h4>Clean Water</h4>
                <h5 class="num" data-val ="100">30</h5>
            </div>

        </div>
    </div>

</section>

<section class="container">

    <div class="card">
        <div class="card-image car-1"></div>

        <div class="card-body1">
            <img src="{{ URL('resFiles/donationCategories/mortarboard.png') }}" class="card-ico" />
            <h2>Educational Programs</h2>
            <p>Our mission is to Unlock the boundless potential of minds, we sprinkle the magic of education,
                igniting stars of brilliance in every soul.</p>
            <a href="{{route('educational')}}" class="explor-btn">Explore</a>


        </div>

    </div>

    <div class="card">
        <div class="card-image car-1"></div>

        <div class="card-body1">
            <img src="{{ URL('resFiles/donationCategories/mortarboard.png') }}" class="card-ico" />
            <h2>Health Programs</h2>
            <p class="card-discription">Our mission is to Unlock the boundless potential of minds, we sprinkle the
                magic of education,
                igniting stars of brilliance in every soul.</p>
            <a href="{{route('health')}}" class="explor-btn">Explore</a>
        </div>

    </div>

    <div class="card">
        <div class="card-image car-1"></div>

        <div class="card-body1">
            <img src="{{ URL('resFiles/donationCategories/mortarboard.png') }}" class="card-ico" />
            <h2>Nutrition Programs</h2>
            <p>Our mission is to Unlock the boundless potential of minds, we sprinkle the magic of education,
                igniting stars of brilliance in every soul.</p>
            <a href="{{route('nutrition')}}" class="explor-btn">Explore</a>


        </div>

    </div>

    <div class="card">
        <div class="card-image car-1" style="background: url('{{ asset('') }}');">

        </div>

        <div class="card-body1">
            <img src="{{ URL('resFiles/donationCategories/drop.png') }}" class="card-ico" />
            <h2>Clean Water Programs</h2>
            <p>Our mission is to Unlock the boundless potential of minds, we sprinkle the magic of education,
                igniting stars of brilliance in every soul.</p>
            <a href="{{route('cleanWater')}}" class="explor-btn">Explore</a>
        </div>
    </div>
</section>

@include('footer')
<script src="script.js"></script>
</body>

</html>
