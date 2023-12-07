<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gallery</title>
</head>

<body>

    <!--Navigation bar-->
    <section id="sectionTop">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="navBar">
            <div class="container-fluid -justify">
                <a class="navbar-brand" href="#"><img style="padding-left: 1em;" src="{{ URL('images-gallery/logo1Black.png') }}"
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
                            <a class="nav-link active" href="#">Gallary</a>
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

          <h1 class="main_heading">Image Gallery of AthaHitha...</h1>

          <div class="parent-container">
            <div class="child-container" id="one">
              <img src="{{ URL('images-gallery/img1.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img30.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img15.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img28.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img29.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img14.webp') }}" width="100%" height="auto">

              <img src="{{ URL('images-gallery/img4.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img33.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img18.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img40.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img25.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img11.jpg') }}" width="100%" height="auto">

              <img src="{{ URL('images-gallery/img7.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img36.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img21.jpg') }}" width="100%" height="auto">

            </div>
              <div class="child-container" id="two">
                <img src="{{ URL('images-gallery/img2.jpg') }}" width="100%" height="auto">
                <img src="{{ URL('images-gallery/img31.jpg') }}" width="100%" height="auto">
                <img src="{{ URL('images-gallery/img16.jpg') }}" width="100%" height="auto">
                <img src="{{ URL('images-gallery/img42.jpeg') }}" width="100%" height="auto">
                <img src="{{ URL('images-gallery/img27.jpg') }}" width="100%" height="auto">
                <img src="{{ URL('images-gallery/img13.jpg') }}" width="100%" height="auto">

                <img src="{{ URL('images-gallery/img5.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img34.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img19.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img39.jpeg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img24.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img10.jpeg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img43.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img44.jpg') }}" width="100%" height="auto">
                                                      
            </div>
                <div class="child-container" id="three">
                  <img src="{{ URL('images-gallery/img3.jpg') }}" width="100%" height="auto">
                  <img src="{{ URL('images-gallery/img32.jpg') }}" width="100%" height="auto">
                  <img src="{{ URL('images-gallery/img17.jpg') }}" width="100%" height="auto">
                  <img src="{{ URL('images-gallery/img41.jpeg') }}" width="100%" height="auto">
                  <img src="{{ URL('images-gallery/img26.jpg') }}" width="100%" height="auto">
                  <img src="{{ URL('images-gallery/img12.jpg') }}" width="100%" height="auto">
                  
                  <img src="{{ URL('images-gallery/img6.JPEG') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img35.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img20.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img38.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img23.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img9.jpg') }}" width="100%" height="auto">

              <img src="{{ URL('images-gallery/img37.jpg') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img22.JPG') }}" width="100%" height="auto">
              <img src="{{ URL('images-gallery/img8.jpg') }}" width="100%" height="auto">

                  
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
            <img src="{{ URL('images-gallery/logo1Black.png') }}" width="20%" height="auto">
            </div>




        </div>

        <script src="{{ asset('js/gallery.js') }}"></script>

</body>

</html>