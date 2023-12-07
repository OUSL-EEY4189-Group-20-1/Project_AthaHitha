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
            Edit Donation Project
        </div>
        <div class="card-body">

            <form method="POST" action="{{ route('admin.editProject', ['id' => $project->id]) }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enter title of the project</label>
                    <input value="{{$project->title}}" name="title" type="text" class="form-control"
                           id="exampleFormControlInput1">
                </div>

                <div class="mb-3">
                    <select name="category" class="form-select" aria-label="Default select example">
                        <option selected>Select the category of the project</option>
                        <option value="health" {{ $project->category === 'health' ? 'selected' : '' }}>Health</option>
                        <option value="education" {{ $project->category === 'education' ? 'selected' : '' }}>Education
                        </option>
                        <option value="water" {{ $project->category === 'water' ? 'selected' : '' }}>Water</option>
                        <option value="nutrition" {{ $project->category === 'nutrition' ? 'selected' : '' }}>Nutrition
                        </option>
                    </select>
                </div>


                <div class="mb-3">
                    <select name="province" class="form-select" aria-label="Default select example">
                        <option selected>Select the province of the project</option>
                        <option value="north central" {{ $project->province === 'north central' ? 'selected' : '' }}>
                            North Central
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <select name="city" class="form-select" aria-label="Default select example">
                        <option selected>Select the city of the project</option>
                        <option value="anuradhapura" {{ $project->city === 'anuradhapura' ? 'selected' : '' }}>
                            Anuradhapura
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input   name="imagePath" class="form-control" type="file" id="formFile" name="imagePath">
                    </div>
                </div>


                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input value="{{$project->address}}" name="address" type="text" class="form-control"
                           id="exampleFormControlInput1" placeholder="Enter address">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                              rows="3">{{$project->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Update</button>
            </form>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>
