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
</head>

<body>

    <!--Navigation bar-->
    <section id="sectionTop">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navBar">
            <div class="container-fluid -justify">
                <a class="navbar-brand" href="#"><img style="padding-left: 1em;" src="{{ URL('images-healthprojects/logo1Black.png') }}"
                        width="185" height="48" /></a>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="true">
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
        </nav><!--End of navigation bar-->


        <div class="container-fluid">

            <header class="backgroundimage-section">
                <img class="background-image" src="{{ URL('images-healthprojects/mainpic.jpg') }}" alt="Health">
                <div class="image-content">
                    <h1 class="image-heading">Health Projects</h1>
                    <button class="donate-button">Donate Now</button>
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

            <!-- template of a card view -->
            <div style="display: none;">
                <div id="card-views" class="card-views">
                    <div class="card">
                        <img src="{{ URL('images-healthprojects/cardimage.png') }}" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <div class="location">
                                <p class="label">Area</p>
                                <p class="district">District</p>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary join">Join</a>
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