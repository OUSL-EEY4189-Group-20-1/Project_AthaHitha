<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AthaHitha</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('resFiles/logoTP.png') }}">


    <link rel="stylesheet" href="{{ asset('CSS/modifications.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>

<body class="antialiased">
@include("navBarLayout")
@include("sideBar")

<div class="content" style="padding-top:20px">
    <div class="card" style="margin-top:70px">
        <div class="card-header">
            Project Details
        </div>
        <div class="card-body">


            @if($project->imagePath)
                <img src="{{ url($project->imagePath) }}" alt="Avatar" style="width: 200px; height: 200px; border-radius: 50%; margin-bottom: 30px">

            @endif

            <p class="card-text" style="margin-bottom: 2px"><b>Project title</b></p>
            <p>{{$project->title}}</p>
            <p class="card-text" style="margin-bottom: 2px"><b>Project category</b></p>
            <p>{{$project->category}}</p>
                <p class="card-text" style="margin-bottom: 2px"><b>Start Date</b></p>
                <p>{{$project->startDate}}</p>

                <p class="card-text" style="margin-bottom: 2px"><b>End Date</b></p>
            <p>{{$project->EndDate}}</p>

            <p class="card-text" style="margin-bottom: 2px"><b>Category</b></p>
            <p>{{$project->category}}</p>
            <p class="card-text" style="margin-bottom: 2px"><b>Province</b></p>
            <p>{{$project->province}}</p>
            <p class="card-text" style="margin-bottom: 2px"><b>City</b></p>
            <p>{{$project->city}}</p>
            <p class="card-text" style="margin-bottom: 2px"><b>Address</b></p>
            <p>{{$project->address}}</p>
            <p class="card-text" style="margin-bottom: 2px"><b>Description</b></p>
            <p>{{$project->description}}</p>


        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>
