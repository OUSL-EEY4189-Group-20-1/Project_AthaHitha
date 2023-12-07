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

    <div style="padding-bottom:20px;margin-top: 70px">
        <a href="{{ route("project.create") }}" class="btn btn-success">Create New Project</a>
    </div>


    <div class="card">
        <div class="card-header">
            All Donation Projects
        </div>



        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">category</th>
                    <th scope="col">city</th>
                </tr>
                </thead>
                <tbody>
                @foreach($project as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->title}}</td>
                        <td>{{$p->category}}</td>
                        <td>{{$p->city}}</td>
                        <td>
                            <a  href="{{ route('project.details', ['id' => $p->id]) }}">
                                <button type="button" class="btn btn-primary" style="font-size: 10px">View</button>
                            </a>
                            <a href="{{ route('admin.editProject', ['id' => $p->id]) }}" class="btn btn-success"
                               style="font-size: 10px;">Edit</a>

                            <form style="display: inline" method="post"
                                  action="{{ route('project.delete', ['id' => $p->id]) }}">
                                @csrf
                                <button type="submit" class="btn btn-danger" style="font-size: 10px">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </body>

    </html>
