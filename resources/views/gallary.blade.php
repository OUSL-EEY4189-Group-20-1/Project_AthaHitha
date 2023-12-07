<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('CSS/ex.css')}}">
    <script src="{{asset('js/ex.js')}}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Opan+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gallery</title>
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navBar" >
        <div class="container-fluid -justify">
            <a class="navbar-brand" href="#"><img style="padding-left: 1em;" src="{{ asset('resFiles/logoTP.png') }}" width="185" height="48"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="{{ route('categories') }}" >
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('gallary') }}">Gallary</a>
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


    <div class="container-fluid">

        <h1 class="main_heading">Image Gallery of AthaHitha...</h1>

        <div class="parent-container">
            <div class="child-container" id="one">
                <img src="{{ URL('resFiles/awareness.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Animal Welfare.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Community Development.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Disaster Relief and Rehabilitation.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Education and Empowerment.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Elderly Support.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Environmental Conservation.png') }}" width="100%" height="100%">
                <img src="{{ URL('images-healthprojects/mainpic.jpg') }}" width="100%" height="100%">


            </div>
            <div class="child-container" id="two">
                <img src="{{ URL('resFiles/Women and Child Welfare.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/schoolGirl.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Animal Welfare.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('images-cleanwaterprojects/mainpic.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Animal Welfare.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Community Development.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Disaster Relief and Rehabilitation.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Education and Empowerment.jpg') }}" width="100%" height="100%">



            </div>
            <div class="child-container" id="three">
                <img src="{{ URL('resFiles/Elderly Support.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/awareness.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Animal Welfare.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Community Development.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Women and Child Welfare.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/schoolGirl.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('resFiles/Animal Welfare.jpg') }}" width="100%" height="100%">
                <img src="{{ URL('images-cleanwaterprojects/mainpic.jpg') }}" width="100%" height="100%">
            </div>
        </div>


        <div class="image-view" id="image-view">
            <span class="close-btn" onclick="closeImageView()">&times;</span>
            <img id="fullscreen-img" src="" alt="Fullscreen Image">
            <a class="arrow left" onclick="changeImage(-1)">&#10094;</a>
            <a class="arrow right" onclick="changeImage(1)">&#10095;</a>
        </div>

        <div class="greeting">
            <h1>Thanks for visiting</h1>
            <img src="{{ URL('resFiles/logoTP.png') }}" width="20%" height="auto">
        </div>




    </div>




    <script src="ex.js"></script>
    <script src="https://kit.fontawesome.com/ee7a178a15.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
