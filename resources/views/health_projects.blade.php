<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/health_projects.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Health Projects</title>
    <style>
        nav.navbar {
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 1000; /* Set the z-index to a high value */
        }
    </style>
</head>

<body>

<!--Navigation bar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navBar">
    <div class="container-fluid -justify">
        <a class="navbar-brand" href="#"><img style="padding-left: 1em;" src="{{ asset('resFiles/logoTP.png') }}"
                                              width="185" height="48"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('userLogin')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active" href="{{ route('categories') }}">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gallary')}}">Gallary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('contact')}}">Contact</a>
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page"
                                                href="{{ route('getMoneyDonations.Details', ['id' => Auth::user()->id])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                     class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd"
                                          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
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


<div class="container-fluid">

    <header class="backgroundimage-section">
        <img class="background-image" src="{{ URL('images-healthprojects/mainpic.jpg') }}" alt="Health">
        <div class="image-content">
            <h1 class="image-heading">Health Projects</h1>
            <button type="button" class="donate-button" data-toggle="modal" data-target="#contributeModal">Donate Now
            </button>
            <!-- Modal -->
            @include('confirmation')
        </div>
    </header>


    <div class="twobox-container">
        <div class="about">
            <img src="{{ URL('images-healthprojects/heart.png') }}" alt="health" class="heart-icon">
            <h3 class="about-header">About Health <br>Projects</h3>
            <p class="about-description">The "Health Projects" category in Athahitha
                aims to improve well-being by addressing healthcare challenges.
                Contributors support initiatives like building clinics, providing
                medical supplies, funding research, and organizing awareness
                campaigns. By participating, users contribute to creating healthier
                communities and fostering a culture of well-being.</p>
        </div>
        <div class="project-countdown">
            <img src="{{ URL('images-healthprojects/check.png') }}" alt="health" class="check-icon">
            <h3 class="projectcountdown-header">Completed Health <br>Projects</h3>
            <div class="healthproject-coutdown">
                <h1 class="plus">+</h1>
                <div id="countingNumber">0</div>

            </div>
        </div>
    </div>

    <h2 class="ongoing-projects">Ongoing Projects</h2>


    <div>
        <div>
            <div>

                <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                    @foreach($projects as $p)
                        <div class="card" style="margin: 20px;">
                            <div class="card-body">
                                <h5 class="card-title">{{$p->title}}</h5>
                                <p><b>Area: {{$p->city}}</b></p>
                                <p style="height: 200px;overflow: hidden" class="card-text">{{$p->description}}</p>
                                <a href="{{ route('EducationalProject.Details', ['id' => $p->id])}}"
                                   class="btn btn-primary">Join</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>

</div>

<script src="{{ asset('js/health_projects.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
