<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style type="text/css">
      .gradient-custom-2 {
      background: #fccb90;

      background: rgb(1,64,28);
      background: linear-gradient(90deg, rgba(1,64,28,1) 0%, rgba(54,199,26,1) 100%);
      }

      @media (min-width: 768px) {
      .gradient-form {
      height: 100vh !important;
      }

      @media (min-width: 769px) {
      .gradient-custom-2 {
      border-top-right-radius: .3rem;
      border-bottom-right-radius: .3rem;
      }

      .logins{
        width: 50%;
        margin: auto;
        padding: 10px 0;
        margin-top:1% ;
        font-size: 20px;
        border: none;
        border-radius: 8px ;
        cursor: pointer;
        color: #ffffff;
        background-color: #269f61;
      }

      button:hover {
        color: #07763d;
        background-color: white;
      }
    </style>
  </head>

  <body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3 text-black">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">

                    <div class="text-center">
                      <img src="{{ asset('resFiles/logoTP.png') }}" style="width: 185px;" alt="logo"/>
                      <h2 class="mt-1 mb-5 pb-1">User Login</h2>
                    </div>

                    <form style="width: auto;">
                    @csrf
                      <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" />
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="Password" id="pw" class="form-control" name="password" />
                      </div>

                      <div class="text-center pt-1 mb-5 pb-1">
                        <button type="button" class='logins'>Login</button>
                      </div>

                      <div class="d-flex align-items-center justify-content-center pb-4">
                        <p class="mb-0 me-2">Don't have an account?</p>
                        <div>
                          <a href="">Register</a>
                        </div>
                      </div>

                    </form>

                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">We are more than just an organization.</h4>
                    <p class="small mb-0">
                       Welcome to AthaHitha Donations! We appreciate your interest in helping others. Your donation can make a significant impact on the lives of those we serve. Here are some reasons why you should donate to our organization:

                      Expanded Reach: Your donation can help us reach a wider audience of potential donors, including those who may not be able to attend events or fundraisers in person.
                      Convenience: Our online donation page provides a convenient and secure way for supporters to make donations at any time, from anywhere in the world.
                      Transparency: We are committed to transparency and accountability. We will provide you with regular updates on how your donation is being used to make a difference in our community.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
