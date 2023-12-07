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


<div class="content">


    <div style="padding-bottom:20px;margin-top:70px">
    </div>

    <div class="card" style="padding-top:5px;" >
        <div class="card-header">
            Good Donations
        </div>



        <div class="card-body" >
            <table class="table table-striped table-hover" >
                <thead>
                <tr>
                    <th scope="col">Bill ID</th>
                    <th scope="col">Doner ID</th>
                    <th scope="col">Doner name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Amount</th>
                </tr>
                </thead>
                <tbody>
                @foreach($info as $i)
                    <tr>
                        <td>{{$i->G_id}}</td>
                        <td>{{$i->user_id}}</td>
                        <td>{{$i->Name}}</td>
                        <td>{{$i->category}}</td>
                        <td>{{$i->description}}</td>

                        <td>
                            {{--                            <a  href="{{ route('project.details', ['id' => $p->id]) }}">--}}
                            {{--                                <button type="button" class="btn btn-primary" style="font-size: 10px">View</button>--}}
                            {{--                            </a>--}}
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
