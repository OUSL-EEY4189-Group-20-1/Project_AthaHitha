<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="{{ asset('CSS/modifications.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Document</title>
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
<body>
@include("navBarLayout")
@include("sideBar")


<div class="content" style="padding-top:20px">

    <div class="card" style="margin-top:70px">
        <div class="card-header">
            Volunteer Information
        </div>


        <div class="card-body">

            <form method="POST" action="{{ route('admin.VolunteerInfoByCategory') }}">
                <div style="display: flex; margin-bottom: 20px">
                    @csrf
                    <select name="category" class="form-select" aria-label="Default select example"
                            style="width: 20%; margin-right: 20px">
                        <option selected>Filter By Project Category</option>
                        <option value="Health" {{ old('category') == 'health' ? 'selected' : '' }}>Health</option>
                        <option value="Water" {{ old('category') == 'water' ? 'selected' : '' }}>Water</option>
                        <option value="Nutrition" {{ old('category') == 'nutrition' ? 'selected' : '' }}>Nutrition
                        </option>
                        <option value="Blood" {{ old('category') == 'blood' ? 'selected' : '' }}>Blood</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">Volunteer id</th>
                    <th scope="col">Volunteer Name</th>
                    <th scope="col">Project ID</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Volunteer Contact</th>

                </tr>
                </thead>
                <tbody>
                @foreach($volunteers as $volunteer)
                    <tr>

                        <td>
                            <a href="{{ route('admin.viewVolunteer', ['id' => $volunteer->volunteer_id]) }}">{{$volunteer->volunteer_id}}</a>
                        </td>

                        <td>
                            <a href="{{ route('admin.viewVolunteer', ['id' => $volunteer->volunteer_id]) }}">{{$volunteer->first_name}} {{$volunteer->last_name}}</a>
                        </td>
                        <td>
                            <a href= {{ route('project.info', ['id' => $volunteer->project_id]) }}>{{$volunteer->project_id}}</a>
                        </td>
                        <td>
                            <a href= {{ route('project.info', ['id' => $volunteer->project_id]) }}>{{$volunteer->title}}</a>
                        </td>
                        <td>{{$volunteer->contact}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </body>

    </html>
