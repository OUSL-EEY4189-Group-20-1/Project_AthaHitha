

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /*
        .gradient-custom-2 {
            background: #fccb90;
            background: rgb(1, 64, 28);
            background: linear-gradient(90deg, rgba(1, 64, 28, 1) 0%, rgba(54, 199, 26, 1) 100%);
        }*/
        body {
            background-image: url("{{ asset('resFiles/help.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
            position: relative; /* Add position property */
            z-index: 1;
        }

        .logins{
            width: 40%;
            margin: auto;
            padding: 10px 0;
            margin-top:1% ;
            font-size: 18px;
            border: none;
            border-radius: 8px ;
            cursor: pointer;
            color: #ffffff;
            background-color: #269f61;
        }

        button:hover {
            color: #07763d;
            background-color: #f9fff8;
        }

        .inputs input {
            border-radius: 3px;
            background-color: transparent;
            border-bottom: 2px solid #0a954e;
            border-top: none;
            border-left: none;
            border-right: none;
            width: 250px;
            height: 30px;
            color: black;
            font-size: 18px;
            padding-left: 10px;
        }
        .inputs input:hover {
            background-color: transparent;
            border-bottom: 2px solid white;
        }
        .inputs input{
            display: flex;
            flex-direction: row;
            cursor: pointer;
            justify-content: center;
            font-size: 15px;
            margin-right: 10px;
            margin-left: 10px;
            margin-top: 5px;

        }

        .inputs input:focus{
            outline: none;
        }

        .inputs{
            /*display content parallely with space between*/
            display: flex;
            flex-direction: row;
            justify-content: space-between;

        }

        /* Media query for responsiveness */
        @media (max-width: 992px) {
            .gradient-custom-2 {
                height: auto;
            }

            .inputs{
                /*display content parallely with space between*/
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-content: center;
                align-items: center;
                text-align: center;
            }
        }

    </style>
</head>
<body class="gradient-custom-2">

<section id="body" class="container py-5">
    <div class="row">
        <div class="col-lg-6" >
            <!-- Left content -->
            <div class="card rounded-3 text-black">
                <div class="card-body p-md-5 mx-md-4">
                    <!-- ... -->
                    <div class="text-white px-3">
                        <div class="text-center">
                            <img src="{{asset('resFiles/logoTP.png')}}" style="width: 185px;" alt="logo"/>
                        </div>
                        </br>
                        <h4 class="mb-4" style="color: darkslategrey">We are more than just an organization.</h4>
                        <p class="small mb-0" style="color: black">
                            <b>Welcome to AthaHitha Donations! We appreciate your interest in helping others. Your donation can make a significant impact on the lives of those we serve. Here are some reasons why you should donate to our organization:</b>
                        <ul style="color: black">
                            </br>
                            <li>
                                <p>Expanded Reach: Your donation can help us reach a wider audience of potential donors, including those who may not be able to attend events or fundraisers in person.</p>
                            </li>
                            <li>
                                <p>Convenience: Our online donation page provides a convenient and secure way for supporters to make donations at any time, from anywhere in the world.</p>
                            </li>
                            <li>
                                <p>Transparency: We are committed to transparency and accountability. We will provide you with regular updates on how your donation is being used to make a difference in our community.</p>
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Right content -->
            <div class="card" >
                <div class="card-body p-md-2 mx-md-1">
                    <!-- ... -->
                    <div style="">
                        <h1><span class="colored-word">Join</span> With us</h1>
                        <div>
                            <form style="width: auto;" class="form" action="{{route('postRegister')}}" method="POST">
                                <div class="mb-3">
                                    <div>
                                        @if($errors->any())
                                            <div>
                                                @foreach($errors->all() as $error)
                                                    <div class="alert alert-danger" >{{$error}}</div>
                                                @endforeach
                                            </div>
                                        @endif

                                        @if(session()->has('fail'))
                                            <div class="alert alert-danger" >Login Failed!</div>
                                        @endif

                                        @if(session()->has('fail'))
                                            <div class="alert alert-danger" >{{session('fail')}}</div>
                                        @endif
                                    </div>
                                </div>
                                @csrf

                                <div>
                                    <h4>Personal Information</h4>
                                    <div class="inputs">
                                        <div class="form-outline mb-4">
                                            @csrf
                                            <input type="text" id="fname" name="first_name" placeholder="First name*"/>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="lname"  name="last_name" placeholder="Last name*"/>
                                        </div>
                                    </div>

                                    <div class="inputs">
                                        <div class="form-outline mb-4">
                                            @csrf
                                            <input type="email" id="email" name="email" placeholder="Email*"/>
                                        </div>
                                        <div class="form-outline mb-4">
                                            @csrf
                                            <input style="" type="number" id="contact"  name="contact" placeholder="Contact number*"/>
                                        </div>
                                    </div>

                                    <div class="inputs">
                                        <div class="form-outline mb-4">
                                            @csrf
                                            <input type="text" id="address" name="address" placeholder="Address*"/>
                                        </div>
                                        <div class="form-outline mb-4">
                                            @csrf
                                            <input type="number" id="pcode" name="postal_code" placeholder="Postal code*" />
                                        </div>
                                    </div>
                                    <div class="inputs">
                                        <div class="form-outline mb-4">
                                            @csrf
                                            <input type="text" id="organization" name="organization" placeholder="Your organization(Optional)"/>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4>Security</h4>
                                    <div class="inputs">
                                        <div class="form-outline mb-4">
                                            @csrf
                                            <input type="password" id="password" name="password" placeholder="Password"/>
                                        </div>
                                        <div class="form-outline mb-4">
                                            @csrf
                                            <input type="password" id="conpassword" name="password_confirmation" placeholder="Confirm Password"/>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h6 style="text-align: center; margin-top: 10px">
                                        <label>
                                            @csrf
                                            <input type="checkbox" name="agree"  />
                                            I agree to the terms and conditions of the AthaHitha Organization
                                            and all above provided information are true.
                                        </label>
                                    </h6>
                                </div>
                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button type="submit" class='logins'>Register</button>
                                </div>

                                <div class="d-flex align-items-center justify-content-center pb-4">
                                    <p class="mb-0 me-2">Already registered?</p>
                                    <div>
                                        <a href="{{route('userLogin')}}">Login</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

