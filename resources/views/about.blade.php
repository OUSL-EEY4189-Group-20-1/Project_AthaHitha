<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/modifications.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About</title>

    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <style>

    </style>
</head>

<body>

    <!--Navigation bar-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navBar">
            <div class="container-fluid -justify">
                <a class="navbar-brand" href="#"><img style="padding-left: 1em;"
                        src="{{ URL('resFiles/logoTP.png') }}" width="185" height="48" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('userLogin')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('categories')}}" role="button" >
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
                                </svg></a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
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

        <!-- Main Picture -->
        <div class="container-fluid">
            <img src="{{ url('resFiles/main_pic.jpg') }}" class="img-fluid main_pic" alt="main_pic">

            <!-- three colour boxes -->
            <!-- Projects -->
            <div class="row ">
                <div class="col-md custom-col">
                    <div class="cardview bg-projects">
                        <img src="{{ URL('resFiles/check icon.png') }}" class="check_icon" alt="check_icon">
                        <h1 class="projects">Projects</h1>
                        <div class="projectNo">
                            <div id="countingNumber1">0</div>
                            <h1 class="plus">+</h1>
                        </div>

                    </div>
                </div>
                <!-- People Benefited -->
                <div class="col-md custom-col">
                    <div class="cardview bg-peoplebenefited">
                        <img src="{{ URL('resFiles/people benefited.png') }}" class="peoplebenefited_icon"
                            alt="peoplebenefited_icon">
                        <h1 class="peoplebenefited">People Benefited</h1>
                        <div class="peoplebenefitedNo">
                            <div id="countingNumber2">0</div>
                            <h1 class="plus">+</h1>
                        </div>
                    </div>
                </div>
                <!-- Amount Raised -->
                <div class="col-md custom-col">
                    <div class="cardview bg-amountraised">
                        <img src="{{ URL('resFiles/amountraised.png') }}" class="amountraised_icon"
                            alt="amountraised_icon">
                        <h1 class="amountraised">Amount Raised</h1>
                        <div class="amountraisedNo">
                            <div id="countingNumber3">0</div>
                            <h1 class="plus">+</h1>
                        </div>

                    </div>
                </div>
            </div>


            <!-- logo picture -->
            <div class="aboutus d-flex flex-column align-items-center justify-content-center text-center">
                <div class="logo_box">
                    <img src="{{ URL('resFiles/logo1.png') }}" class="img-fluid logo_pic" id="logo_pic"
                        alt="logo_pic">
                </div>
                <p class="text">Striving for a Better World, Hand in Hand</p>
                <!-- Introduction -->
                <p class="about ">Welcome to Athahitha, an esteemed donation web application devoted to effecting
                    positive change on a global scale. Established in Athahitha stands resolute in its commitment to
                    alleviating the plight of the underprivileged and
                    fostering a more promising future for humanity. Empowered by the benevolence of philanthropic
                    benefactors such as yourself, our unwavering mission is to catalyze transformative impact,
                    enriching the lives of numerous individuals and communities worldwide.</p>
                <!-- Mission -->
                <h3 class="our_mission">Our Mission</h3>
                <p class="mission">At Athahitha, our mission is driven by a profound commitment: to ameliorate
                    suffering and promote enduring progress in marginalized communities islandwide. Our vision
                    embraces a future where every individual enjoys unimpeded access to fundamental essentials,
                    education, healthcare, and avenues for personal advancement and empowerment. We aspire to
                    create a country of equitable opportunities and sustainable development, leaving no one behind
                    in our journey towards meaningful and lasting global change.</p>
            </div>

            <!-- Our Goal -->
            <div class="goal">
                <h3 class="our_goal">Our Main Goals</h3>
                <div class="row goals_row">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="slide">
                                <img src="{{ URL('resFiles/Education and Empowerment.jpg') }}"
                                    alt="Education and Empowerment" class="img-fluid goal_pic">
                                <div class="container">
                                    <p>Education and Empowerment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="slide">
                                <img src="{{ URL('resFiles/Healthcare and Well-being.jpg') }}"
                                    alt="Healthcare and Well-being" class="img-fluid goal_pic">
                                <div class="container">
                                    <p>Healthcare and Well-being</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="slide">
                                <img src="{{ URL('resFiles/Community Development.jpg') }}"
                                    alt="Community Development" class="img-fluid goal_pic">
                                <div class="container">
                                    <p>Community Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="slide">
                                <img src="{{ URL('resFiles/Disaster Relief and Rehabilitation.jpg') }}"
                                    alt="Disaster Relief and Rehabilitation" class="img-fluid goal_pic">
                                <div class="container">
                                    <p>Disaster Relief and Rehabilitation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="slide">
                                <img src="{{ URL('resFiles/Environmental Conservation.png') }}"
                                    alt="Environmental Conservation" class="img-fluid goal_pic">
                                <div class="container">
                                    <p>Environmental Conservation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="slide">
                                <img src="{{ URL('resFiles/Women and Child Welfare.jpg') }}"
                                    alt="Women and Child Welfare" class="img-fluid goal_pic">
                                <div class="container">
                                    <p>Women and Child Welfare</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="slide">
                                <img src="{{ URL('resFiles/Animal Welfare.jpg') }}" alt="Animal Welfare"
                                    class="img-fluid goal_pic">
                                <div class="container">
                                    <p>Animal Welfare</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="slide">
                                <img src="{{ URL('resFiles/Elderly Support.jpg') }}" alt="Elderly Support"
                                    class="img-fluid goal_pic">
                                <div class="container">
                                    <p>Elderly Support</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer -->


        </div>
        @include('footer')

        <script src="{{ asset('js/about.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
        <script>

        </script>
</body>

</html>
