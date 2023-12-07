<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/educational_projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Details.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Educational Projects - Info</title>
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
    </div>
</nav>
<!--End of navigation bar-->
<h1 class="header">{{$project->title}}</h1>

<div>
    <div class="card" style="margin: 50px 100px">
        <div class="card-header">
            Details of the Program
        </div>
        <div class="card-body">
            <p>{{$project->description}}</p>

            <p class="card-text" style="margin-bottom: 2px"><b>Event Start Date</b></p>
            <p>{{$project->startDate}}</p>

            <p class="card-text" style="margin-bottom: 2px"><b>Event End Date</b></p>
            <p>{{$project->EndDate}}</p>

            <p class="card-text" style="margin-bottom: 2px"><b>Event Category</b></p>
            <p>{{$project->category}}</p>

            <p class="card-text" style="margin-bottom: 2px"><b>Province</b></p>
            <p>{{$project->province}}</p>

            <p class="card-text" style="margin-bottom: 2px"><b>City</b></p>
            <p>{{$project->city}}</p>

            <p class="card-text" style="margin-bottom: 2px"><b>Address</b></p>
            <p>{{$project->address}}</p>
        </div>


    </div>
</div>

<div>
    <div class="card" style="margin: 50px 100px">
        <div class="card-header">
            Who can Join with us
        </div>
        <div class="card-body">

            <p>Both undergraduates and school teachers can typically join education charity programs,
                depending on the
                specific requirements and guidelines set by the charity organization. Education charity programs often
                aim to support and improve access to education for disadvantaged individuals or communities.</p>





            <p class="card-text"><b>Q: What is an education charity program?</b></p>
            <p>An education charity program is a charitable initiative aimed at supporting and
                improving access to education for underserved individuals or communities</p>

            <p class="card-text"><b> Q: Who can participate in an education charity
                    program?</b></p>
            <p> Anyone who shares a passion for education and wants to make a positive impact can
                participate.
            </p>

            <p class="card-text"><b>Q: How can I get involved in an education charity program?</b></p>
            <p>Anyone who shares a passion for education and wants to make a positive impact can
                participate.
            </p>

            <form method="POST" action="{{route('EducationalProject.assign')}}">
                @csrf
                <input type="hidden" name="project_id" value="{{ $project->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter">Join Now
                </button>


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Your Respornse</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to join with this project
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-primary">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>




<script src="{{ asset('js/educational_projects.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
