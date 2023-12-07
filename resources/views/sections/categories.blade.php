<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donationStyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 25px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #04AA6D;
        }
    </style>

</head>
@yield('navbar')

<body>

<div class="main-banner">
    <div class="main-banner-content">
        <h1 class="ex">Explore Projects</h1>
        <a href="#p-container" class="explor-btn explor-btn1">Explore</a>
    </div>
</div>


<section class="desciption-container">

    <div class="mission-container">
        <img src="target.png" />
        <h3>Our mission</h3>
        <p>Igniting a blaze of generosity, our mission is to spark a wildfire of kindness that illuminates the lives
            of those in need, leaving no heart untouched by the warmth of compassion.</p>
    </div>

    <div class="projects-container" id="p-container">
        <h3>Completed Projects</h3>

        <div class="project-cards">
            <div class="project-card card1">
                <img src="mortarboardW.png" class="project-ico" />
                <h4>Education</h4>
                <h5 class="num" data-val ="100">10</h5>
            </div>

            <div class="project-card card2">
                <img src="cardiogramW.png" class="project-ico" />
                <h4>Healthcare</h4>
                <h5 class="num" data-val ="100">20</h5>
            </div>

            <div class="project-card card3">
                <img src="food-donationW.png" class="project-ico" />
                <h4>Nutrition</h4>
                <h5 class="num" data-val ="100">##</h5>
            </div>

            <div class="project-card card4">
                <img src="dropW.png" class="project-ico" />
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
            <img src="mortarboard.png" class="card-ico" />
            <h2>Educational Programs</h2>
            <p>Our mission is to Unlock the boundless potential of minds, we sprinkle the magic of education,
                igniting stars of brilliance in every soul.</p>
            <a href="#" class="explor-btn">Explore</a>


        </div>

    </div>

    <div class="card">
        <div class="card-image car-1"></div>

        <div class="card-body1">
            <img src="mortarboard.png" class="card-ico" />
            <h2>Educational Programs</h2>
            <p class="card-discription">Our mission is to Unlock the boundless potential of minds, we sprinkle the
                magic of education,
                igniting stars of brilliance in every soul.</p>
            <a href="#" class="explor-btn">Explore</a>
        </div>

    </div>

    <div class="card">
        <div class="card-image car-1"></div>

        <div class="card-body1">
            <img src="mortarboard.png" class="card-ico" />
            <h2>Educational Programs</h2>
            <p>Our mission is to Unlock the boundless potential of minds, we sprinkle the magic of education,
                igniting stars of brilliance in every soul.</p>
            <a href="#" class="explor-btn">Explore</a>


        </div>

    </div>

    <div class="card">
        <div class="card-image car-1"></div>

        <div class="card-body1">
            <img src="mortarboard.png" class="card-ico" />
            <h2>Educational Programs</h2>
            <p>Our mission is to Unlock the boundless potential of minds, we sprinkle the magic of education,
                igniting stars of brilliance in every soul.</p>
            <a href="#" class="explor-btn">Explore</a>


        </div>

    </div>





</section>


<script src="script.js"></script>
</body>

</html>
