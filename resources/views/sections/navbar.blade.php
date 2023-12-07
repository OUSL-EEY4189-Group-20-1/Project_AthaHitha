<!--Navigation bar-->

<section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navBar" style="position: sticky;">
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
                        <a class="nav-link active" aria-current="page" href="{{route('userLogin')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories') }}">
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
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('getMoneyDonations.Details', ['id' => Auth::user()->id])}}">
                        </svg> {{ Auth::user()->first_name }}
                        </a>
                    </li>
                    <li>

                    </li>

                    <li class=" nav-item">
                                <a class="nav-link" href="{{ route('logout')}}">Logout</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
    </nav>
    <!--End of navigation bar-->

